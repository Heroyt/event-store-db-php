<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: operations.proto

namespace GPBMetadata;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Shared::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xE7\x09\x0A\x10operations.proto\x12\x1Devent_store.client.operations\"\x97\x01\x0A\x10StartScavengeReq\x12H\x0A\x07options\x18\x01 \x01(\x0B27.event_store.client.operations.StartScavengeReq.Options\x1A9\x0A\x07Options\x12\x14\x0A\x0Cthread_count\x18\x01 \x01(\x05\x12\x18\x0A\x10start_from_chunk\x18\x02 \x01(\x05\"z\x0A\x0FStopScavengeReq\x12G\x0A\x07options\x18\x01 \x01(\x0B26.event_store.client.operations.StopScavengeReq.Options\x1A\x1E\x0A\x07Options\x12\x13\x0A\x0Bscavenge_id\x18\x01 \x01(\x09\"\xB4\x01\x0A\x0CScavengeResp\x12\x13\x0A\x0Bscavenge_id\x18\x01 \x01(\x09\x12S\x0A\x0Fscavenge_result\x18\x02 \x01(\x0E2:.event_store.client.operations.ScavengeResp.ScavengeResult\":\x0A\x0EScavengeResult\x12\x0B\x0A\x07Started\x10\x00\x12\x0E\x0A\x0AInProgress\x10\x01\x12\x0B\x0A\x07Stopped\x10\x02\"&\x0A\x12SetNodePriorityReq\x12\x10\x0A\x08priority\x18\x01 \x01(\x052\xED\x04\x0A\x0AOperations\x12m\x0A\x0DStartScavenge\x12/.event_store.client.operations.StartScavengeReq\x1A+.event_store.client.operations.ScavengeResp\x12k\x0A\x0CStopScavenge\x12..event_store.client.operations.StopScavengeReq\x1A+.event_store.client.operations.ScavengeResp\x12@\x0A\x08Shutdown\x12\x19.event_store.client.Empty\x1A\x19.event_store.client.Empty\x12D\x0A\x0CMergeIndexes\x12\x19.event_store.client.Empty\x1A\x19.event_store.client.Empty\x12B\x0A\x0AResignNode\x12\x19.event_store.client.Empty\x1A\x19.event_store.client.Empty\x12_\x0A\x0FSetNodePriority\x121.event_store.client.operations.SetNodePriorityReq\x1A\x19.event_store.client.Empty\x12V\x0A\x1ERestartPersistentSubscriptions\x12\x19.event_store.client.Empty\x1A\x19.event_store.client.EmptyBG\x0A(com.eventstore.dbclient.proto.operations\xCA\x02\x1AGRPC\\EventStore\\Operationsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

