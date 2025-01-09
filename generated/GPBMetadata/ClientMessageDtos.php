<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GPBMetadata;

class ClientMessageDtos
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xDED\x0A\x17ClientMessageDtos.proto\x12\x1AEventStore.Client.Messages\"\x8A\x01\x0A\x08NewEvent\x12\x10\x0A\x08event_id\x18\x01 \x01(\x0C\x12\x12\x0A\x0Aevent_type\x18\x02 \x01(\x09\x12\x19\x0A\x11data_content_type\x18\x03 \x01(\x05\x12\x1D\x0A\x15metadata_content_type\x18\x04 \x01(\x05\x12\x0C\x0A\x04data\x18\x05 \x01(\x0C\x12\x10\x0A\x08metadata\x18\x06 \x01(\x0C\"\xE4\x01\x0A\x0BEventRecord\x12\x17\x0A\x0Fevent_stream_id\x18\x01 \x01(\x09\x12\x14\x0A\x0Cevent_number\x18\x02 \x01(\x03\x12\x10\x0A\x08event_id\x18\x03 \x01(\x0C\x12\x12\x0A\x0Aevent_type\x18\x04 \x01(\x09\x12\x19\x0A\x11data_content_type\x18\x05 \x01(\x05\x12\x1D\x0A\x15metadata_content_type\x18\x06 \x01(\x05\x12\x0C\x0A\x04data\x18\x07 \x01(\x0C\x12\x10\x0A\x08metadata\x18\x08 \x01(\x0C\x12\x0F\x0A\x07created\x18\x09 \x01(\x03\x12\x15\x0A\x0Dcreated_epoch\x18\x0A \x01(\x03\"\x85\x01\x0A\x14ResolvedIndexedEvent\x126\x0A\x05event\x18\x01 \x01(\x0B2'.EventStore.Client.Messages.EventRecord\x125\x0A\x04link\x18\x02 \x01(\x0B2'.EventStore.Client.Messages.EventRecord\"\xB1\x01\x0A\x0DResolvedEvent\x126\x0A\x05event\x18\x01 \x01(\x0B2'.EventStore.Client.Messages.EventRecord\x125\x0A\x04link\x18\x02 \x01(\x0B2'.EventStore.Client.Messages.EventRecord\x12\x17\x0A\x0Fcommit_position\x18\x03 \x01(\x03\x12\x18\x0A\x10prepare_position\x18\x04 \x01(\x03\"\x8E\x01\x0A\x0BWriteEvents\x12\x17\x0A\x0Fevent_stream_id\x18\x01 \x01(\x09\x12\x18\x0A\x10expected_version\x18\x02 \x01(\x03\x124\x0A\x06events\x18\x03 \x03(\x0B2\$.EventStore.Client.Messages.NewEvent\x12\x16\x0A\x0Erequire_leader\x18\x04 \x01(\x08\"\xE7\x01\x0A\x14WriteEventsCompleted\x12;\x0A\x06result\x18\x01 \x01(\x0E2+.EventStore.Client.Messages.OperationResult\x12\x0F\x0A\x07message\x18\x02 \x01(\x09\x12\x1A\x0A\x12first_event_number\x18\x03 \x01(\x03\x12\x19\x0A\x11last_event_number\x18\x04 \x01(\x03\x12\x18\x0A\x10prepare_position\x18\x05 \x01(\x03\x12\x17\x0A\x0Fcommit_position\x18\x06 \x01(\x03\x12\x17\x0A\x0Fcurrent_version\x18\x07 \x01(\x03\"n\x0A\x0CDeleteStream\x12\x17\x0A\x0Fevent_stream_id\x18\x01 \x01(\x09\x12\x18\x0A\x10expected_version\x18\x02 \x01(\x03\x12\x16\x0A\x0Erequire_leader\x18\x03 \x01(\x08\x12\x13\x0A\x0Bhard_delete\x18\x04 \x01(\x08\"\xB1\x01\x0A\x15DeleteStreamCompleted\x12;\x0A\x06result\x18\x01 \x01(\x0E2+.EventStore.Client.Messages.OperationResult\x12\x0F\x0A\x07message\x18\x02 \x01(\x09\x12\x18\x0A\x10prepare_position\x18\x03 \x01(\x03\x12\x17\x0A\x0Fcommit_position\x18\x04 \x01(\x03\x12\x17\x0A\x0Fcurrent_version\x18\x05 \x01(\x03\"]\x0A\x10TransactionStart\x12\x17\x0A\x0Fevent_stream_id\x18\x01 \x01(\x09\x12\x18\x0A\x10expected_version\x18\x02 \x01(\x03\x12\x16\x0A\x0Erequire_leader\x18\x03 \x01(\x08\"\x81\x01\x0A\x19TransactionStartCompleted\x12\x16\x0A\x0Etransaction_id\x18\x01 \x01(\x03\x12;\x0A\x06result\x18\x02 \x01(\x0E2+.EventStore.Client.Messages.OperationResult\x12\x0F\x0A\x07message\x18\x03 \x01(\x09\"x\x0A\x10TransactionWrite\x12\x16\x0A\x0Etransaction_id\x18\x01 \x01(\x03\x124\x0A\x06events\x18\x02 \x03(\x0B2\$.EventStore.Client.Messages.NewEvent\x12\x16\x0A\x0Erequire_leader\x18\x03 \x01(\x08\"\x81\x01\x0A\x19TransactionWriteCompleted\x12\x16\x0A\x0Etransaction_id\x18\x01 \x01(\x03\x12;\x0A\x06result\x18\x02 \x01(\x0E2+.EventStore.Client.Messages.OperationResult\x12\x0F\x0A\x07message\x18\x03 \x01(\x09\"C\x0A\x11TransactionCommit\x12\x16\x0A\x0Etransaction_id\x18\x01 \x01(\x03\x12\x16\x0A\x0Erequire_leader\x18\x02 \x01(\x08\"\xEC\x01\x0A\x1ATransactionCommitCompleted\x12\x16\x0A\x0Etransaction_id\x18\x01 \x01(\x03\x12;\x0A\x06result\x18\x02 \x01(\x0E2+.EventStore.Client.Messages.OperationResult\x12\x0F\x0A\x07message\x18\x03 \x01(\x09\x12\x1A\x0A\x12first_event_number\x18\x04 \x01(\x03\x12\x19\x0A\x11last_event_number\x18\x05 \x01(\x03\x12\x18\x0A\x10prepare_position\x18\x06 \x01(\x03\x12\x17\x0A\x0Fcommit_position\x18\x07 \x01(\x03\"l\x0A\x09ReadEvent\x12\x17\x0A\x0Fevent_stream_id\x18\x01 \x01(\x09\x12\x14\x0A\x0Cevent_number\x18\x02 \x01(\x03\x12\x18\x0A\x10resolve_link_tos\x18\x03 \x01(\x08\x12\x16\x0A\x0Erequire_leader\x18\x04 \x01(\x08\"\xA0\x02\x0A\x12ReadEventCompleted\x12N\x0A\x06result\x18\x01 \x01(\x0E2>.EventStore.Client.Messages.ReadEventCompleted.ReadEventResult\x12?\x0A\x05event\x18\x02 \x01(\x0B20.EventStore.Client.Messages.ResolvedIndexedEvent\x12\x0D\x0A\x05error\x18\x03 \x01(\x09\"j\x0A\x0FReadEventResult\x12\x0B\x0A\x07Success\x10\x00\x12\x0C\x0A\x08NotFound\x10\x01\x12\x0C\x0A\x08NoStream\x10\x02\x12\x11\x0A\x0DStreamDeleted\x10\x03\x12\x09\x0A\x05Error\x10\x04\x12\x10\x0A\x0CAccessDenied\x10\x05\"\x8B\x01\x0A\x10ReadStreamEvents\x12\x17\x0A\x0Fevent_stream_id\x18\x01 \x01(\x09\x12\x19\x0A\x11from_event_number\x18\x02 \x01(\x03\x12\x11\x0A\x09max_count\x18\x03 \x01(\x05\x12\x18\x0A\x10resolve_link_tos\x18\x04 \x01(\x08\x12\x16\x0A\x0Erequire_leader\x18\x05 \x01(\x08\"\xA2\x03\x0A\x19ReadStreamEventsCompleted\x12@\x0A\x06events\x18\x01 \x03(\x0B20.EventStore.Client.Messages.ResolvedIndexedEvent\x12V\x0A\x06result\x18\x02 \x01(\x0E2F.EventStore.Client.Messages.ReadStreamEventsCompleted.ReadStreamResult\x12\x19\x0A\x11next_event_number\x18\x03 \x01(\x03\x12\x19\x0A\x11last_event_number\x18\x04 \x01(\x03\x12\x18\x0A\x10is_end_of_stream\x18\x05 \x01(\x08\x12\x1C\x0A\x14last_commit_position\x18\x06 \x01(\x03\x12\x0D\x0A\x05error\x18\x07 \x01(\x09\"n\x0A\x10ReadStreamResult\x12\x0B\x0A\x07Success\x10\x00\x12\x0C\x0A\x08NoStream\x10\x01\x12\x11\x0A\x0DStreamDeleted\x10\x02\x12\x0F\x0A\x0BNotModified\x10\x03\x12\x09\x0A\x05Error\x10\x04\x12\x10\x0A\x0CAccessDenied\x10\x05\"\x87\x01\x0A\x0DReadAllEvents\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x03\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x03\x12\x11\x0A\x09max_count\x18\x03 \x01(\x05\x12\x18\x0A\x10resolve_link_tos\x18\x04 \x01(\x08\x12\x16\x0A\x0Erequire_leader\x18\x05 \x01(\x08\"\xF0\x02\x0A\x16ReadAllEventsCompleted\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x03\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x03\x129\x0A\x06events\x18\x03 \x03(\x0B2).EventStore.Client.Messages.ResolvedEvent\x12\x1C\x0A\x14next_commit_position\x18\x04 \x01(\x03\x12\x1D\x0A\x15next_prepare_position\x18\x05 \x01(\x03\x12P\x0A\x06result\x18\x06 \x01(\x0E2@.EventStore.Client.Messages.ReadAllEventsCompleted.ReadAllResult\x12\x0D\x0A\x05error\x18\x07 \x01(\x09\"J\x0A\x0DReadAllResult\x12\x0B\x0A\x07Success\x10\x00\x12\x0F\x0A\x0BNotModified\x10\x01\x12\x09\x0A\x05Error\x10\x02\x12\x10\x0A\x0CAccessDenied\x10\x03\"\xE9\x01\x0A\x06Filter\x12A\x0A\x07context\x18\x01 \x01(\x0E20.EventStore.Client.Messages.Filter.FilterContext\x12;\x0A\x04type\x18\x02 \x01(\x0E2-.EventStore.Client.Messages.Filter.FilterType\x12\x0C\x0A\x04data\x18\x03 \x03(\x09\",\x0A\x0DFilterContext\x12\x0C\x0A\x08StreamId\x10\x00\x12\x0D\x0A\x09EventType\x10\x01\"#\x0A\x0AFilterType\x12\x09\x0A\x05Regex\x10\x00\x12\x0A\x0A\x06Prefix\x10\x01\"\xDE\x01\x0A\x15FilteredReadAllEvents\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x03\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x03\x12\x11\x0A\x09max_count\x18\x03 \x01(\x05\x12\x19\x0A\x11max_search_window\x18\x04 \x01(\x05\x12\x18\x0A\x10resolve_link_tos\x18\x05 \x01(\x08\x12\x16\x0A\x0Erequire_leader\x18\x06 \x01(\x08\x122\x0A\x06filter\x18\x07 \x01(\x0B2\".EventStore.Client.Messages.Filter\"\xAA\x03\x0A\x1EFilteredReadAllEventsCompleted\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x03\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x03\x129\x0A\x06events\x18\x03 \x03(\x0B2).EventStore.Client.Messages.ResolvedEvent\x12\x1C\x0A\x14next_commit_position\x18\x04 \x01(\x03\x12\x1D\x0A\x15next_prepare_position\x18\x05 \x01(\x03\x12\x18\x0A\x10is_end_of_stream\x18\x06 \x01(\x08\x12`\x0A\x06result\x18\x07 \x01(\x0E2P.EventStore.Client.Messages.FilteredReadAllEventsCompleted.FilteredReadAllResult\x12\x0D\x0A\x05error\x18\x08 \x01(\x09\"R\x0A\x15FilteredReadAllResult\x12\x0B\x0A\x07Success\x10\x00\x12\x0F\x0A\x0BNotModified\x10\x01\x12\x09\x0A\x05Error\x10\x02\x12\x10\x0A\x0CAccessDenied\x10\x03\"\xDE\x03\x0A\x1CCreatePersistentSubscription\x12\x1F\x0A\x17subscription_group_name\x18\x01 \x01(\x09\x12\x17\x0A\x0Fevent_stream_id\x18\x02 \x01(\x09\x12\x18\x0A\x10resolve_link_tos\x18\x03 \x01(\x08\x12\x12\x0A\x0Astart_from\x18\x04 \x01(\x03\x12\$\x0A\x1Cmessage_timeout_milliseconds\x18\x05 \x01(\x05\x12\x19\x0A\x11record_statistics\x18\x06 \x01(\x08\x12\x18\x0A\x10live_buffer_size\x18\x07 \x01(\x05\x12\x17\x0A\x0Fread_batch_size\x18\x08 \x01(\x05\x12\x13\x0A\x0Bbuffer_size\x18\x09 \x01(\x05\x12\x17\x0A\x0Fmax_retry_count\x18\x0A \x01(\x05\x12\x1A\x0A\x12prefer_round_robin\x18\x0B \x01(\x08\x12\x1D\x0A\x15checkpoint_after_time\x18\x0C \x01(\x05\x12\x1C\x0A\x14checkpoint_max_count\x18\x0D \x01(\x05\x12\x1C\x0A\x14checkpoint_min_count\x18\x0E \x01(\x05\x12\x1C\x0A\x14subscriber_max_count\x18\x0F \x01(\x05\x12\x1F\x0A\x17named_consumer_strategy\x18\x10 \x01(\x09\"X\x0A\x1CDeletePersistentSubscription\x12\x1F\x0A\x17subscription_group_name\x18\x01 \x01(\x09\x12\x17\x0A\x0Fevent_stream_id\x18\x02 \x01(\x09\"\xDE\x03\x0A\x1CUpdatePersistentSubscription\x12\x1F\x0A\x17subscription_group_name\x18\x01 \x01(\x09\x12\x17\x0A\x0Fevent_stream_id\x18\x02 \x01(\x09\x12\x18\x0A\x10resolve_link_tos\x18\x03 \x01(\x08\x12\x12\x0A\x0Astart_from\x18\x04 \x01(\x03\x12\$\x0A\x1Cmessage_timeout_milliseconds\x18\x05 \x01(\x05\x12\x19\x0A\x11record_statistics\x18\x06 \x01(\x08\x12\x18\x0A\x10live_buffer_size\x18\x07 \x01(\x05\x12\x17\x0A\x0Fread_batch_size\x18\x08 \x01(\x05\x12\x13\x0A\x0Bbuffer_size\x18\x09 \x01(\x05\x12\x17\x0A\x0Fmax_retry_count\x18\x0A \x01(\x05\x12\x1A\x0A\x12prefer_round_robin\x18\x0B \x01(\x08\x12\x1D\x0A\x15checkpoint_after_time\x18\x0C \x01(\x05\x12\x1C\x0A\x14checkpoint_max_count\x18\x0D \x01(\x05\x12\x1C\x0A\x14checkpoint_min_count\x18\x0E \x01(\x05\x12\x1C\x0A\x14subscriber_max_count\x18\x0F \x01(\x05\x12\x1F\x0A\x17named_consumer_strategy\x18\x10 \x01(\x09\"\x8E\x02\x0A%UpdatePersistentSubscriptionCompleted\x12t\x0A\x06result\x18\x01 \x01(\x0E2d.EventStore.Client.Messages.UpdatePersistentSubscriptionCompleted.UpdatePersistentSubscriptionResult\x12\x0E\x0A\x06reason\x18\x02 \x01(\x09\"_\x0A\"UpdatePersistentSubscriptionResult\x12\x0B\x0A\x07Success\x10\x00\x12\x10\x0A\x0CDoesNotExist\x10\x01\x12\x08\x0A\x04Fail\x10\x02\x12\x10\x0A\x0CAccessDenied\x10\x03\"\x8F\x02\x0A%CreatePersistentSubscriptionCompleted\x12t\x0A\x06result\x18\x01 \x01(\x0E2d.EventStore.Client.Messages.CreatePersistentSubscriptionCompleted.CreatePersistentSubscriptionResult\x12\x0E\x0A\x06reason\x18\x02 \x01(\x09\"`\x0A\"CreatePersistentSubscriptionResult\x12\x0B\x0A\x07Success\x10\x00\x12\x11\x0A\x0DAlreadyExists\x10\x01\x12\x08\x0A\x04Fail\x10\x02\x12\x10\x0A\x0CAccessDenied\x10\x03\"\x8E\x02\x0A%DeletePersistentSubscriptionCompleted\x12t\x0A\x06result\x18\x01 \x01(\x0E2d.EventStore.Client.Messages.DeletePersistentSubscriptionCompleted.DeletePersistentSubscriptionResult\x12\x0E\x0A\x06reason\x18\x02 \x01(\x09\"_\x0A\"DeletePersistentSubscriptionResult\x12\x0B\x0A\x07Success\x10\x00\x12\x10\x0A\x0CDoesNotExist\x10\x01\x12\x08\x0A\x04Fail\x10\x02\x12\x10\x0A\x0CAccessDenied\x10\x03\"w\x0A\x1FConnectToPersistentSubscription\x12\x17\x0A\x0Fsubscription_id\x18\x01 \x01(\x09\x12\x17\x0A\x0Fevent_stream_id\x18\x02 \x01(\x09\x12\"\x0A\x1Aallowed_in_flight_messages\x18\x03 \x01(\x05\"W\x0A\x1FPersistentSubscriptionAckEvents\x12\x17\x0A\x0Fsubscription_id\x18\x01 \x01(\x09\x12\x1B\x0A\x13processed_event_ids\x18\x02 \x03(\x0C\"\x82\x02\x0A\x1FPersistentSubscriptionNakEvents\x12\x17\x0A\x0Fsubscription_id\x18\x01 \x01(\x09\x12\x1B\x0A\x13processed_event_ids\x18\x02 \x03(\x0C\x12\x0F\x0A\x07message\x18\x03 \x01(\x09\x12U\x0A\x06action\x18\x04 \x01(\x0E2E.EventStore.Client.Messages.PersistentSubscriptionNakEvents.NakAction\"A\x0A\x09NakAction\x12\x0B\x0A\x07Unknown\x10\x00\x12\x08\x0A\x04Park\x10\x01\x12\x09\x0A\x05Retry\x10\x02\x12\x08\x0A\x04Skip\x10\x03\x12\x08\x0A\x04Stop\x10\x04\"v\x0A\"PersistentSubscriptionConfirmation\x12\x1C\x0A\x14last_commit_position\x18\x01 \x01(\x03\x12\x17\x0A\x0Fsubscription_id\x18\x02 \x01(\x09\x12\x19\x0A\x11last_event_number\x18\x03 \x01(\x03\"\x80\x01\x0A)PersistentSubscriptionStreamEventAppeared\x12?\x0A\x05event\x18\x01 \x01(\x0B20.EventStore.Client.Messages.ResolvedIndexedEvent\x12\x12\x0A\x0AretryCount\x18\x02 \x01(\x05\"F\x0A\x11SubscribeToStream\x12\x17\x0A\x0Fevent_stream_id\x18\x01 \x01(\x09\x12\x18\x0A\x10resolve_link_tos\x18\x02 \x01(\x08\"\x9F\x01\x0A\x19FilteredSubscribeToStream\x12\x17\x0A\x0Fevent_stream_id\x18\x01 \x01(\x09\x12\x18\x0A\x10resolve_link_tos\x18\x02 \x01(\x08\x122\x0A\x06filter\x18\x03 \x01(\x0B2\".EventStore.Client.Messages.Filter\x12\x1B\x0A\x13checkpoint_interval\x18\x04 \x01(\x05\"F\x0A\x11CheckpointReached\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x03\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x03\"S\x0A\x18SubscriptionConfirmation\x12\x1C\x0A\x14last_commit_position\x18\x01 \x01(\x03\x12\x19\x0A\x11last_event_number\x18\x02 \x01(\x03\"O\x0A\x13StreamEventAppeared\x128\x0A\x05event\x18\x01 \x01(\x0B2).EventStore.Client.Messages.ResolvedEvent\"\x17\x0A\x15UnsubscribeFromStream\"\xFC\x01\x0A\x13SubscriptionDropped\x12V\x0A\x06reason\x18\x01 \x01(\x0E2F.EventStore.Client.Messages.SubscriptionDropped.SubscriptionDropReason\"\x8C\x01\x0A\x16SubscriptionDropReason\x12\x10\x0A\x0CUnsubscribed\x10\x00\x12\x10\x0A\x0CAccessDenied\x10\x01\x12\x0C\x0A\x08NotFound\x10\x02\x12!\x0A\x1DPersistentSubscriptionDeleted\x10\x03\x12\x1D\x0A\x19SubscriberMaxCountReached\x10\x04\"\xF4\x02\x0A\x0ANotHandled\x12G\x0A\x06reason\x18\x01 \x01(\x0E27.EventStore.Client.Messages.NotHandled.NotHandledReason\x12\x17\x0A\x0Fadditional_info\x18\x02 \x01(\x0C\x1A\xB5\x01\x0A\x0ALeaderInfo\x12\x1C\x0A\x14external_tcp_address\x18\x01 \x01(\x09\x12\x19\x0A\x11external_tcp_port\x18\x02 \x01(\x05\x12\x14\x0A\x0Chttp_address\x18\x03 \x01(\x09\x12\x11\x0A\x09http_port\x18\x04 \x01(\x05\x12#\x0A\x1Bexternal_secure_tcp_address\x18\x05 \x01(\x09\x12 \x0A\x18external_secure_tcp_port\x18\x06 \x01(\x05\"L\x0A\x10NotHandledReason\x12\x0C\x0A\x08NotReady\x10\x00\x12\x0B\x0A\x07TooBusy\x10\x01\x12\x0D\x0A\x09NotLeader\x10\x02\x12\x0E\x0A\x0AIsReadOnly\x10\x03\"\x12\x0A\x10ScavengeDatabase\"\xC4\x01\x0A\x18ScavengeDatabaseResponse\x12S\x0A\x06result\x18\x01 \x01(\x0E2C.EventStore.Client.Messages.ScavengeDatabaseResponse.ScavengeResult\x12\x12\x0A\x0AscavengeId\x18\x02 \x01(\x09\"?\x0A\x0EScavengeResult\x12\x0B\x0A\x07Started\x10\x00\x12\x0E\x0A\x0AInProgress\x10\x01\x12\x10\x0A\x0CUnauthorized\x10\x02\":\x0A\x0EIdentifyClient\x12\x0F\x0A\x07version\x18\x01 \x01(\x05\x12\x17\x0A\x0Fconnection_name\x18\x02 \x01(\x09\"\x12\x0A\x10ClientIdentified*\xB0\x01\x0A\x0FOperationResult\x12\x0B\x0A\x07Success\x10\x00\x12\x12\x0A\x0EPrepareTimeout\x10\x01\x12\x11\x0A\x0DCommitTimeout\x10\x02\x12\x12\x0A\x0EForwardTimeout\x10\x03\x12\x18\x0A\x14WrongExpectedVersion\x10\x04\x12\x11\x0A\x0DStreamDeleted\x10\x05\x12\x16\x0A\x12InvalidTransaction\x10\x06\x12\x10\x0A\x0CAccessDenied\x10\x07B\x19\xCA\x02\x16GRPC\\EventStore\\Clientb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

