<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: redaction.proto

namespace GPBMetadata;

class Redaction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Shared::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xE4\x06\x0A\x0Fredaction.proto\x12\x1Cevent_store.client.redaction\"o\x0A\x13GetEventPositionReq\x12?\x0A\x11stream_identifier\x18\x01 \x01(\x0B2\$.event_store.client.StreamIdentifier\x12\x17\x0A\x0Fstream_revision\x18\x02 \x01(\x04\"\\\x0A\x14GetEventPositionResp\x12D\x0A\x0Fevent_positions\x18\x01 \x03(\x0B2+.event_store.client.redaction.EventPosition\"b\x0A\x0DEventPosition\x12\x14\x0A\x0Clog_position\x18\x01 \x01(\x04\x12;\x0A\x0Achunk_info\x18\x02 \x01(\x0B2'.event_store.client.redaction.ChunkInfo\"Z\x0A\x09ChunkInfo\x12\x11\x0A\x09file_name\x18\x01 \x01(\x09\x12\x0F\x0A\x07version\x18\x02 \x01(\x0D\x12\x13\x0A\x0Bis_complete\x18\x03 \x01(\x08\x12\x14\x0A\x0Cevent_offset\x18\x04 \x01(\x0D\"C\x0A\x0ESwitchChunkReq\x12\x19\x0A\x11target_chunk_file\x18\x01 \x01(\x09\x12\x16\x0A\x0Enew_chunk_file\x18\x02 \x01(\x09\"\x11\x0A\x0FSwitchChunkResp2\xFC\x01\x0A\x09Redaction\x12~\x0A\x11GetEventPositions\x121.event_store.client.redaction.GetEventPositionReq\x1A2.event_store.client.redaction.GetEventPositionResp(\x010\x01\x12o\x0A\x0CSwitchChunks\x12,.event_store.client.redaction.SwitchChunkReq\x1A-.event_store.client.redaction.SwitchChunkResp(\x010\x01BE\x0A'com.eventstore.dbclient.proto.redaction\xCA\x02\x19GRPC\\EventStore\\Redactionb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

