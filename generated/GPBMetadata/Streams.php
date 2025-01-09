<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: streams.proto

namespace GPBMetadata;

class Streams
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Shared::initOnce();
        \GPBMetadata\Status::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xDEB\x0A\x0Dstreams.proto\x12\x1Aevent_store.client.streams\x1A\x0Cstatus.proto\x1A\x1Egoogle/protobuf/duration.proto\x1A\x1Bgoogle/protobuf/empty.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\"\xAD\x0E\x0A\x07ReadReq\x12<\x0A\x07options\x18\x01 \x01(\x0B2+.event_store.client.streams.ReadReq.Options\x1A\xE3\x0D\x0A\x07Options\x12K\x0A\x06stream\x18\x01 \x01(\x0B29.event_store.client.streams.ReadReq.Options.StreamOptionsH\x00\x12E\x0A\x03all\x18\x02 \x01(\x0B26.event_store.client.streams.ReadReq.Options.AllOptionsH\x00\x12Q\x0A\x0Eread_direction\x18\x03 \x01(\x0E29.event_store.client.streams.ReadReq.Options.ReadDirection\x12\x15\x0A\x0Dresolve_links\x18\x04 \x01(\x08\x12\x0F\x0A\x05count\x18\x05 \x01(\x04H\x01\x12W\x0A\x0Csubscription\x18\x06 \x01(\x0B2?.event_store.client.streams.ReadReq.Options.SubscriptionOptionsH\x01\x12K\x0A\x06filter\x18\x07 \x01(\x0B29.event_store.client.streams.ReadReq.Options.FilterOptionsH\x02\x12.\x0A\x09no_filter\x18\x08 \x01(\x0B2\x19.event_store.client.EmptyH\x02\x12K\x0A\x0Buuid_option\x18\x09 \x01(\x0B26.event_store.client.streams.ReadReq.Options.UUIDOption\x12Q\x0A\x0Econtrol_option\x18\x0A \x01(\x0B29.event_store.client.streams.ReadReq.Options.ControlOption\x1A\xCD\x01\x0A\x0DStreamOptions\x12?\x0A\x11stream_identifier\x18\x01 \x01(\x0B2\$.event_store.client.StreamIdentifier\x12\x12\x0A\x08revision\x18\x02 \x01(\x04H\x00\x12*\x0A\x05start\x18\x03 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12(\x0A\x03end\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x00B\x11\x0A\x0Frevision_option\x1A\xBA\x01\x0A\x0AAllOptions\x12H\x0A\x08position\x18\x01 \x01(\x0B24.event_store.client.streams.ReadReq.Options.PositionH\x00\x12*\x0A\x05start\x18\x02 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12(\x0A\x03end\x18\x03 \x01(\x0B2\x19.event_store.client.EmptyH\x00B\x0C\x0A\x0Aall_option\x1A\x15\x0A\x13SubscriptionOptions\x1A=\x0A\x08Position\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x04\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x04\x1A\xF0\x02\x0A\x0DFilterOptions\x12a\x0A\x11stream_identifier\x18\x01 \x01(\x0B2D.event_store.client.streams.ReadReq.Options.FilterOptions.ExpressionH\x00\x12Z\x0A\x0Aevent_type\x18\x02 \x01(\x0B2D.event_store.client.streams.ReadReq.Options.FilterOptions.ExpressionH\x00\x12\x0D\x0A\x03max\x18\x03 \x01(\x0DH\x01\x12*\x0A\x05count\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x01\x12\$\x0A\x1CcheckpointIntervalMultiplier\x18\x05 \x01(\x0D\x1A+\x0A\x0AExpression\x12\x0D\x0A\x05regex\x18\x01 \x01(\x09\x12\x0E\x0A\x06prefix\x18\x02 \x03(\x09B\x08\x0A\x06filterB\x08\x0A\x06window\x1Au\x0A\x0AUUIDOption\x12/\x0A\x0Astructured\x18\x01 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12+\x0A\x06string\x18\x02 \x01(\x0B2\x19.event_store.client.EmptyH\x00B\x09\x0A\x07content\x1A&\x0A\x0DControlOption\x12\x15\x0A\x0Dcompatibility\x18\x01 \x01(\x0D\",\x0A\x0DReadDirection\x12\x0C\x0A\x08Forwards\x10\x00\x12\x0D\x0A\x09Backwards\x10\x01B\x0F\x0A\x0Dstream_optionB\x0E\x0A\x0Ccount_optionB\x0F\x0A\x0Dfilter_option\"\xBB\x0B\x0A\x08ReadResp\x12?\x0A\x05event\x18\x01 \x01(\x0B2..event_store.client.streams.ReadResp.ReadEventH\x00\x12U\x0A\x0Cconfirmation\x18\x02 \x01(\x0B2=.event_store.client.streams.ReadResp.SubscriptionConfirmationH\x00\x12E\x0A\x0Acheckpoint\x18\x03 \x01(\x0B2/.event_store.client.streams.ReadResp.CheckpointH\x00\x12O\x0A\x10stream_not_found\x18\x04 \x01(\x0B23.event_store.client.streams.ReadResp.StreamNotFoundH\x00\x12\x1F\x0A\x15first_stream_position\x18\x05 \x01(\x04H\x00\x12\x1E\x0A\x14last_stream_position\x18\x06 \x01(\x04H\x00\x12I\x0A\x18last_all_stream_position\x18\x07 \x01(\x0B2%.event_store.client.AllStreamPositionH\x00\x12B\x0A\x09caught_up\x18\x08 \x01(\x0B2-.event_store.client.streams.ReadResp.CaughtUpH\x00\x12F\x0A\x0Bfell_behind\x18\x09 \x01(\x0B2/.event_store.client.streams.ReadResp.FellBehindH\x00\x1A\x0A\x0A\x08CaughtUp\x1A\x0C\x0A\x0AFellBehind\x1A\xF8\x04\x0A\x09ReadEvent\x12K\x0A\x05event\x18\x01 \x01(\x0B2<.event_store.client.streams.ReadResp.ReadEvent.RecordedEvent\x12J\x0A\x04link\x18\x02 \x01(\x0B2<.event_store.client.streams.ReadResp.ReadEvent.RecordedEvent\x12\x19\x0A\x0Fcommit_position\x18\x03 \x01(\x04H\x00\x120\x0A\x0Bno_position\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x1A\xF8\x02\x0A\x0DRecordedEvent\x12\$\x0A\x02id\x18\x01 \x01(\x0B2\x18.event_store.client.UUID\x12?\x0A\x11stream_identifier\x18\x02 \x01(\x0B2\$.event_store.client.StreamIdentifier\x12\x17\x0A\x0Fstream_revision\x18\x03 \x01(\x04\x12\x18\x0A\x10prepare_position\x18\x04 \x01(\x04\x12\x17\x0A\x0Fcommit_position\x18\x05 \x01(\x04\x12\\\x0A\x08metadata\x18\x06 \x03(\x0B2J.event_store.client.streams.ReadResp.ReadEvent.RecordedEvent.MetadataEntry\x12\x17\x0A\x0Fcustom_metadata\x18\x07 \x01(\x0C\x12\x0C\x0A\x04data\x18\x08 \x01(\x0C\x1A/\x0A\x0DMetadataEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01B\x0A\x0A\x08position\x1A3\x0A\x18SubscriptionConfirmation\x12\x17\x0A\x0Fsubscription_id\x18\x01 \x01(\x09\x1A?\x0A\x0ACheckpoint\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x04\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x04\x1AQ\x0A\x0EStreamNotFound\x12?\x0A\x11stream_identifier\x18\x01 \x01(\x0B2\$.event_store.client.StreamIdentifierB\x09\x0A\x07content\"\x9F\x05\x0A\x09AppendReq\x12@\x0A\x07options\x18\x01 \x01(\x0B2-.event_store.client.streams.AppendReq.OptionsH\x00\x12Q\x0A\x10proposed_message\x18\x02 \x01(\x0B25.event_store.client.streams.AppendReq.ProposedMessageH\x00\x1A\x88\x02\x0A\x07Options\x12?\x0A\x11stream_identifier\x18\x01 \x01(\x0B2\$.event_store.client.StreamIdentifier\x12\x12\x0A\x08revision\x18\x02 \x01(\x04H\x00\x12.\x0A\x09no_stream\x18\x03 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12(\x0A\x03any\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x122\x0A\x0Dstream_exists\x18\x05 \x01(\x0B2\x19.event_store.client.EmptyH\x00B\x1A\x0A\x18expected_stream_revision\x1A\xE6\x01\x0A\x0FProposedMessage\x12\$\x0A\x02id\x18\x01 \x01(\x0B2\x18.event_store.client.UUID\x12U\x0A\x08metadata\x18\x02 \x03(\x0B2C.event_store.client.streams.AppendReq.ProposedMessage.MetadataEntry\x12\x17\x0A\x0Fcustom_metadata\x18\x03 \x01(\x0C\x12\x0C\x0A\x04data\x18\x04 \x01(\x0C\x1A/\x0A\x0DMetadataEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01B\x09\x0A\x07content\"\x8D\x09\x0A\x0AAppendResp\x12A\x0A\x07success\x18\x01 \x01(\x0B2..event_store.client.streams.AppendResp.SuccessH\x00\x12]\x0A\x16wrong_expected_version\x18\x02 \x01(\x0B2;.event_store.client.streams.AppendResp.WrongExpectedVersionH\x00\x1A=\x0A\x08Position\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x04\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x04\x1A\xFA\x01\x0A\x07Success\x12\x1A\x0A\x10current_revision\x18\x01 \x01(\x04H\x00\x12.\x0A\x09no_stream\x18\x02 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12C\x0A\x08position\x18\x03 \x01(\x0B2/.event_store.client.streams.AppendResp.PositionH\x01\x120\x0A\x0Bno_position\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x01B\x19\x0A\x17current_revision_optionB\x11\x0A\x0Fposition_option\x1A\x96\x05\x0A\x14WrongExpectedVersion\x12!\x0A\x17current_revision_20_6_0\x18\x01 \x01(\x04H\x00\x125\x0A\x10no_stream_20_6_0\x18\x02 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12\"\x0A\x18expected_revision_20_6_0\x18\x03 \x01(\x04H\x01\x12/\x0A\x0Aany_20_6_0\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x01\x129\x0A\x14stream_exists_20_6_0\x18\x05 \x01(\x0B2\x19.event_store.client.EmptyH\x01\x12\x1A\x0A\x10current_revision\x18\x06 \x01(\x04H\x02\x126\x0A\x11current_no_stream\x18\x07 \x01(\x0B2\x19.event_store.client.EmptyH\x02\x12\x1B\x0A\x11expected_revision\x18\x08 \x01(\x04H\x03\x121\x0A\x0Cexpected_any\x18\x09 \x01(\x0B2\x19.event_store.client.EmptyH\x03\x12;\x0A\x16expected_stream_exists\x18\x0A \x01(\x0B2\x19.event_store.client.EmptyH\x03\x127\x0A\x12expected_no_stream\x18\x0B \x01(\x0B2\x19.event_store.client.EmptyH\x03B \x0A\x1Ecurrent_revision_option_20_6_0B!\x0A\x1Fexpected_revision_option_20_6_0B\x19\x0A\x17current_revision_optionB\x1A\x0A\x18expected_revision_optionB\x08\x0A\x06result\"\xE1\x06\x0A\x0EBatchAppendReq\x120\x0A\x0Ecorrelation_id\x18\x01 \x01(\x0B2\x18.event_store.client.UUID\x12C\x0A\x07options\x18\x02 \x01(\x0B22.event_store.client.streams.BatchAppendReq.Options\x12U\x0A\x11proposed_messages\x18\x03 \x03(\x0B2:.event_store.client.streams.BatchAppendReq.ProposedMessage\x12\x10\x0A\x08is_final\x18\x04 \x01(\x08\x1A\x80\x03\x0A\x07Options\x12?\x0A\x11stream_identifier\x18\x01 \x01(\x0B2\$.event_store.client.StreamIdentifier\x12\x19\x0A\x0Fstream_position\x18\x02 \x01(\x04H\x00\x12+\x0A\x09no_stream\x18\x03 \x01(\x0B2\x16.google.protobuf.EmptyH\x00\x12%\x0A\x03any\x18\x04 \x01(\x0B2\x16.google.protobuf.EmptyH\x00\x12/\x0A\x0Dstream_exists\x18\x05 \x01(\x0B2\x16.google.protobuf.EmptyH\x00\x126\x0A\x10deadline_21_10_0\x18\x06 \x01(\x0B2\x1A.google.protobuf.TimestampH\x01\x12-\x0A\x08deadline\x18\x07 \x01(\x0B2\x19.google.protobuf.DurationH\x01B\x1A\x0A\x18expected_stream_positionB\x11\x0A\x0Fdeadline_option\x1A\xEB\x01\x0A\x0FProposedMessage\x12\$\x0A\x02id\x18\x01 \x01(\x0B2\x18.event_store.client.UUID\x12Z\x0A\x08metadata\x18\x02 \x03(\x0B2H.event_store.client.streams.BatchAppendReq.ProposedMessage.MetadataEntry\x12\x17\x0A\x0Fcustom_metadata\x18\x03 \x01(\x0C\x12\x0C\x0A\x04data\x18\x04 \x01(\x0C\x1A/\x0A\x0DMetadataEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01\"\xA4\x05\x0A\x0FBatchAppendResp\x120\x0A\x0Ecorrelation_id\x18\x01 \x01(\x0B2\x18.event_store.client.UUID\x12#\x0A\x05error\x18\x02 \x01(\x0B2\x12.google.rpc.StatusH\x00\x12F\x0A\x07success\x18\x03 \x01(\x0B23.event_store.client.streams.BatchAppendResp.SuccessH\x00\x12?\x0A\x11stream_identifier\x18\x04 \x01(\x0B2\$.event_store.client.StreamIdentifier\x12\x19\x0A\x0Fstream_position\x18\x05 \x01(\x04H\x01\x12+\x0A\x09no_stream\x18\x06 \x01(\x0B2\x16.google.protobuf.EmptyH\x01\x12%\x0A\x03any\x18\x07 \x01(\x0B2\x16.google.protobuf.EmptyH\x01\x12/\x0A\x0Dstream_exists\x18\x08 \x01(\x0B2\x16.google.protobuf.EmptyH\x01\x1A\xEA\x01\x0A\x07Success\x12\x1A\x0A\x10current_revision\x18\x01 \x01(\x04H\x00\x12+\x0A\x09no_stream\x18\x02 \x01(\x0B2\x16.google.protobuf.EmptyH\x00\x129\x0A\x08position\x18\x03 \x01(\x0B2%.event_store.client.AllStreamPositionH\x01\x12-\x0A\x0Bno_position\x18\x04 \x01(\x0B2\x16.google.protobuf.EmptyH\x01B\x19\x0A\x17current_revision_optionB\x11\x0A\x0Fposition_optionB\x08\x0A\x06resultB\x1A\x0A\x18expected_stream_position\"\xD6\x02\x0A\x09DeleteReq\x12>\x0A\x07options\x18\x01 \x01(\x0B2-.event_store.client.streams.DeleteReq.Options\x1A\x88\x02\x0A\x07Options\x12?\x0A\x11stream_identifier\x18\x01 \x01(\x0B2\$.event_store.client.StreamIdentifier\x12\x12\x0A\x08revision\x18\x02 \x01(\x04H\x00\x12.\x0A\x09no_stream\x18\x03 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12(\x0A\x03any\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x122\x0A\x0Dstream_exists\x18\x05 \x01(\x0B2\x19.event_store.client.EmptyH\x00B\x1A\x0A\x18expected_stream_revision\"\xD5\x01\x0A\x0ADeleteResp\x12C\x0A\x08position\x18\x01 \x01(\x0B2/.event_store.client.streams.DeleteResp.PositionH\x00\x120\x0A\x0Bno_position\x18\x02 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x1A=\x0A\x08Position\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x04\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x04B\x11\x0A\x0Fposition_option\"\xDC\x02\x0A\x0CTombstoneReq\x12A\x0A\x07options\x18\x01 \x01(\x0B20.event_store.client.streams.TombstoneReq.Options\x1A\x88\x02\x0A\x07Options\x12?\x0A\x11stream_identifier\x18\x01 \x01(\x0B2\$.event_store.client.StreamIdentifier\x12\x12\x0A\x08revision\x18\x02 \x01(\x04H\x00\x12.\x0A\x09no_stream\x18\x03 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x12(\x0A\x03any\x18\x04 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x122\x0A\x0Dstream_exists\x18\x05 \x01(\x0B2\x19.event_store.client.EmptyH\x00B\x1A\x0A\x18expected_stream_revision\"\xDB\x01\x0A\x0DTombstoneResp\x12F\x0A\x08position\x18\x01 \x01(\x0B22.event_store.client.streams.TombstoneResp.PositionH\x00\x120\x0A\x0Bno_position\x18\x02 \x01(\x0B2\x19.event_store.client.EmptyH\x00\x1A=\x0A\x08Position\x12\x17\x0A\x0Fcommit_position\x18\x01 \x01(\x04\x12\x18\x0A\x10prepare_position\x18\x02 \x01(\x04B\x11\x0A\x0Fposition_option2\xE0\x03\x0A\x07Streams\x12S\x0A\x04Read\x12#.event_store.client.streams.ReadReq\x1A\$.event_store.client.streams.ReadResp0\x01\x12Y\x0A\x06Append\x12%.event_store.client.streams.AppendReq\x1A&.event_store.client.streams.AppendResp(\x01\x12W\x0A\x06Delete\x12%.event_store.client.streams.DeleteReq\x1A&.event_store.client.streams.DeleteResp\x12`\x0A\x09Tombstone\x12(.event_store.client.streams.TombstoneReq\x1A).event_store.client.streams.TombstoneResp\x12j\x0A\x0BBatchAppend\x12*.event_store.client.streams.BatchAppendReq\x1A+.event_store.client.streams.BatchAppendResp(\x010\x01BA\x0A%com.eventstore.dbclient.proto.streams\xCA\x02\x17GRPC\\EventStore\\Streamsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

