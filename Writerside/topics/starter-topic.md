# EventStoreDb PHP client

## Installation

```bash
composer require heroyt/eventstoredb
```

## Creating a connection

The library uses a [Symfony serializer](https://symfony.com/doc/current/serializer.html) component to encode and decode
event data.

```php
use App\EventStore\Streams;
use \Symfony\Component\Serializer\Serializer;

// Construct a Symfony serializer as you would normally.
$serializer = new Serializer($normalizers, $encoders);
$client = new Streams($connectionString, $serializer);
```

Connection string follows
the [EventStoreDb format](https://developers.eventstore.com/clients/grpc/getting-started.html#connection-string).
For example:

```
esdb://admin:changeit@localhost:2113?tls=false
```

## Creating an event

Event is a simple PHP object that extends the abstract `EventStoreDb\Event` class.

```php
namespace App\Events;

use EventStoreDb\Event;

class UserRegistered extends Event
{
    public function __construct(
        public string $name,
        public string $email
    ) {
    }
}
```

## Appending an event

The `Streams::appendEvent()` method appends an event to a stream. The stream is given using the `$stream` parameter.
The parameter can be omitted, in which case the stream name a `'default'` stream name is used.

```php
use App\Events\UserRegistered;

$event = new UserRegistered('John Doe', 'john.doe@example.com');
$result = $client->appendEvent($event, 'user-stream')
```

The method returns a `EventStoreDb\AppendResult` object that contains information about the event such as `UUID`, `revision` and `position`.

You should check if the operation was successful using the `$success` property.

```php
if ($result->success) {
    echo 'Event appended successfully';
} else {
    echo 'Failed to append event';
}
```

## Reading events

Finally, we can read events from a stream.

There are 2 ways to read events:

### 1. Reading using the query builder

```php
/** @var \EventStoreDb\Query<UserRegistered> $query */
$query = $client->query(); 

/** @var \EventStoreDb\Streams\ReadResult<UserRegistered> $result */
$result = $query->stream('user-stream')
                ->backwards()
                ->send();

/** @var UserRegistered $event */
foreach ($result->get() as $event) {
    // Do something with the event
}
```

### 2. Reading using the Read request

This method uses the auto-generated `GRPC\EventStore\Streams\ReadReq` class from the EventServerDb grpc proto files.

```php
use \GRPC\EventStore\Streams\ReadReq;

$request = new ReadReq($options)

/** @var \Grpc\ServerStreamingCall $response */
$response = $client->read($request);
```

For convenience, you can use the `EventStoreDb\Streams\ReadResult` class to wrap the response.

```php
use \EventStoreDb\Streams\ReadResult;

$response = new ReadResult($response, $serializer);
```

<seealso>
    <category ref="external">
    <a href="https://symfony.com/doc/current/serializer.html">
        Symfony serializer
    </a>
    <a href="https://developers.eventstore.com">
        EventStoreDb developer docs
    </a>
    </category>
</seealso>