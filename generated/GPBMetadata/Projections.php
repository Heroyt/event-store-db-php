<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: projections.proto

namespace GPBMetadata;

class Projections
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Shared::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xCF\x1C\x0A\x11projections.proto\x12\x1Eevent_store.client.projections\x1A\x0Cshared.proto\"\xB3\x03\x0A\x09CreateReq\x12B\x0A\x07options\x18\x01 \x01(\x0B21.event_store.client.projections.CreateReq.Options\x1A\xE1\x02\x0A\x07Options\x12-\x0A\x08one_time\x18\x01 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12P\x0A\x09transient\x18\x02 \x01(\x0B2;.event_store.client.projections.CreateReq.Options.TransientH\x00\x12R\x0A\x0Acontinuous\x18\x03 \x01(\x0B2<.event_store.client.projections.CreateReq.Options.ContinuousH\x00\x12\x0D\x0A\x05query\x18\x04 \x01(\x09\x1A\x19\x0A\x09Transient\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x1AO\x0A\x0AContinuous\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x14\x0A\x0Cemit_enabled\x18\x02 \x01(\x08\x12\x1D\x0A\x15track_emitted_streams\x18\x03 \x01(\x08B\x06\x0A\x04mode\"\x0C\x0A\x0ACreateResp\"\xD5\x01\x0A\x09UpdateReq\x12B\x0A\x07options\x18\x01 \x01(\x0B21.event_store.client.projections.UpdateReq.Options\x1A\x83\x01\x0A\x07Options\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x0D\x0A\x05query\x18\x02 \x01(\x09\x12\x16\x0A\x0Cemit_enabled\x18\x03 \x01(\x08H\x00\x124\x0A\x0Fno_emit_options\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x00B\x0D\x0A\x0Bemit_option\"\x0C\x0A\x0AUpdateResp\"\xC7\x01\x0A\x09DeleteReq\x12B\x0A\x07options\x18\x01 \x01(\x0B21.event_store.client.projections.DeleteReq.Options\x1Av\x0A\x07Options\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x1E\x0A\x16delete_emitted_streams\x18\x02 \x01(\x08\x12\x1B\x0A\x13delete_state_stream\x18\x03 \x01(\x08\x12 \x0A\x18delete_checkpoint_stream\x18\x04 \x01(\x08\"\x0C\x0A\x0ADeleteResp\"\xB5\x02\x0A\x0DStatisticsReq\x12F\x0A\x07options\x18\x01 \x01(\x0B25.event_store.client.projections.StatisticsReq.Options\x1A\xDB\x01\x0A\x07Options\x12\x0E\x0A\x04name\x18\x01 \x01(\x09H\x00\x12(\x0A\x03all\x18\x02 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12.\x0A\x09transient\x18\x03 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12/\x0A\x0Acontinuous\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12-\x0A\x08one_time\x18\x05 \x01(\x0B2\x19.event_store.client.EmptyH\x00B\x06\x0A\x04mode\"\xB0\x04\x0A\x0EStatisticsResp\x12G\x0A\x07details\x18\x01 \x01(\x0B26.event_store.client.projections.StatisticsResp.Details\x1A\xD4\x03\x0A\x07Details\x12\x1A\x0A\x12coreProcessingTime\x18\x01 \x01(\x03\x12\x0F\x0A\x07version\x18\x02 \x01(\x03\x12\x0D\x0A\x05epoch\x18\x03 \x01(\x03\x12\x15\x0A\x0DeffectiveName\x18\x04 \x01(\x09\x12\x18\x0A\x10writesInProgress\x18\x05 \x01(\x05\x12\x17\x0A\x0FreadsInProgress\x18\x06 \x01(\x05\x12\x18\x0A\x10partitionsCached\x18\x07 \x01(\x05\x12\x0E\x0A\x06status\x18\x08 \x01(\x09\x12\x13\x0A\x0BstateReason\x18\x09 \x01(\x09\x12\x0C\x0A\x04name\x18\x0A \x01(\x09\x12\x0C\x0A\x04mode\x18\x0B \x01(\x09\x12\x10\x0A\x08position\x18\x0C \x01(\x09\x12\x10\x0A\x08progress\x18\x0D \x01(\x02\x12\x16\x0A\x0ElastCheckpoint\x18\x0E \x01(\x09\x12#\x0A\x1BeventsProcessedAfterRestart\x18\x0F \x01(\x03\x12\x18\x0A\x10checkpointStatus\x18\x10 \x01(\x09\x12\x16\x0A\x0EbufferedEvents\x18\x11 \x01(\x03\x12*\x0A\"writePendingEventsBeforeCheckpoint\x18\x12 \x01(\x05\x12)\x0A!writePendingEventsAfterCheckpoint\x18\x13 \x01(\x05\"y\x0A\x08StateReq\x12A\x0A\x07options\x18\x01 \x01(\x0B20.event_store.client.projections.StateReq.Options\x1A*\x0A\x07Options\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x11\x0A\x09partition\x18\x02 \x01(\x09\"2\x0A\x09StateResp\x12%\x0A\x05state\x18\x01 \x01(\x0B2\x16.google.protobuf.Value\"{\x0A\x09ResultReq\x12B\x0A\x07options\x18\x01 \x01(\x0B21.event_store.client.projections.ResultReq.Options\x1A*\x0A\x07Options\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x11\x0A\x09partition\x18\x02 \x01(\x09\"4\x0A\x0AResultResp\x12&\x0A\x06result\x18\x01 \x01(\x0B2\x16.google.protobuf.Value\"\x80\x01\x0A\x08ResetReq\x12A\x0A\x07options\x18\x01 \x01(\x0B20.event_store.client.projections.ResetReq.Options\x1A1\x0A\x07Options\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x18\x0A\x10write_checkpoint\x18\x02 \x01(\x08\"\x0B\x0A\x09ResetResp\"h\x0A\x09EnableReq\x12B\x0A\x07options\x18\x01 \x01(\x0B21.event_store.client.projections.EnableReq.Options\x1A\x17\x0A\x07Options\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x0C\x0A\x0AEnableResp\"\x84\x01\x0A\x0ADisableReq\x12C\x0A\x07options\x18\x01 \x01(\x0B22.event_store.client.projections.DisableReq.Options\x1A1\x0A\x07Options\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x18\x0A\x10write_checkpoint\x18\x02 \x01(\x08\"\x0D\x0A\x0BDisableResp2\xCB\x07\x0A\x0BProjections\x12_\x0A\x06Create\x12).event_store.client.projections.CreateReq\x1A*.event_store.client.projections.CreateResp\x12_\x0A\x06Update\x12).event_store.client.projections.UpdateReq\x1A*.event_store.client.projections.UpdateResp\x12_\x0A\x06Delete\x12).event_store.client.projections.DeleteReq\x1A*.event_store.client.projections.DeleteResp\x12m\x0A\x0AStatistics\x12-.event_store.client.projections.StatisticsReq\x1A..event_store.client.projections.StatisticsResp0\x01\x12b\x0A\x07Disable\x12*.event_store.client.projections.DisableReq\x1A+.event_store.client.projections.DisableResp\x12_\x0A\x06Enable\x12).event_store.client.projections.EnableReq\x1A*.event_store.client.projections.EnableResp\x12\\\x0A\x05Reset\x12(.event_store.client.projections.ResetReq\x1A).event_store.client.projections.ResetResp\x12\\\x0A\x05State\x12(.event_store.client.projections.StateReq\x1A).event_store.client.projections.StateResp\x12_\x0A\x06Result\x12).event_store.client.projections.ResultReq\x1A*.event_store.client.projections.ResultResp\x12H\x0A\x10RestartSubsystem\x12\x19.event_store.client.Empty\x1A\x19.event_store.client.EmptyBI\x0A)com.eventstore.dbclient.proto.projections\xCA\x02\x1BGRPC\\EventStore\\Projectionsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

