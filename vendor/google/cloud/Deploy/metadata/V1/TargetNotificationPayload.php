<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/target_notification_payload.proto

namespace GPBMetadata\Google\Cloud\Deploy\V1;

class TargetNotificationPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Deploy\V1\LogEnums::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/deploy/v1/target_notification_payload.protogoogle.cloud.deploy.v1"f
TargetNotificationEvent
message (	
target (	*
type (2.google.cloud.deploy.v1.TypeB|
com.google.cloud.deploy.v1BTargetNotificationPayloadProtoPZ<google.golang.org/genproto/googleapis/cloud/deploy/v1;deploybproto3'
        , true);

        static::$is_initialized = true;
    }
}

