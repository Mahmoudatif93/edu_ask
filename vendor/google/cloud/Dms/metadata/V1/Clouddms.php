<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace GPBMetadata\Google\Cloud\Clouddms\V1;

class Clouddms
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Clouddms\V1\ClouddmsResources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�;
\'google/cloud/clouddms/v1/clouddms.protogoogle.cloud.clouddms.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto1google/cloud/clouddms/v1/clouddms_resources.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
ListMigrationJobsRequestA
parent (	B1�A�A+)datamigration.googleapis.com/MigrationJob
	page_size (

page_token (	
filter (	
order_by (	"�
ListMigrationJobsResponse>
migration_jobs (2&.google.cloud.clouddms.v1.MigrationJob
next_page_token (	
unreachable (	"Y
GetMigrationJobRequest?
name (	B1�A�A+
)datamigration.googleapis.com/MigrationJob"�
CreateMigrationJobRequestA
parent (	B1�A�A+)datamigration.googleapis.com/MigrationJob
migration_job_id (	B�AB
migration_job (2&.google.cloud.clouddms.v1.MigrationJobB�A

request_id (	"�
UpdateMigrationJobRequest4
update_mask (2.google.protobuf.FieldMaskB�AB
migration_job (2&.google.cloud.clouddms.v1.MigrationJobB�A

request_id (	"
DeleteMigrationJobRequest?
name (	B1�A�A+
)datamigration.googleapis.com/MigrationJob

request_id (	
force ("X
StartMigrationJobRequest<
name (	B.�A+
)datamigration.googleapis.com/MigrationJob"W
StopMigrationJobRequest<
name (	B.�A+
)datamigration.googleapis.com/MigrationJob"Y
ResumeMigrationJobRequest<
name (	B.�A+
)datamigration.googleapis.com/MigrationJob"Z
PromoteMigrationJobRequest<
name (	B.�A+
)datamigration.googleapis.com/MigrationJob"Y
VerifyMigrationJobRequest<
name (	B.�A+
)datamigration.googleapis.com/MigrationJob"Z
RestartMigrationJobRequest<
name (	B.�A+
)datamigration.googleapis.com/MigrationJob"�
GenerateSshScriptRequestE
migration_job (	B.�A+
)datamigration.googleapis.com/MigrationJob
vm (	B�AH
vm_creation_configd (2*.google.cloud.clouddms.v1.VmCreationConfigH J
vm_selection_confige (2+.google.cloud.clouddms.v1.VmSelectionConfigH 
vm_port (B
	vm_config"Q
VmCreationConfig
vm_machine_type (	B�A
vm_zone (	
subnet (	")
VmSelectionConfig
vm_zone (	B�A"
	SshScript
script (	"�
ListConnectionProfilesRequestF
parent (	B6�A�A0.datamigration.googleapis.com/ConnectionProfile
	page_size (

page_token (	
filter (	
order_by (	"�
ListConnectionProfilesResponseH
connection_profiles (2+.google.cloud.clouddms.v1.ConnectionProfile
next_page_token (	
unreachable (	"c
GetConnectionProfileRequestD
name (	B6�A�A0
.datamigration.googleapis.com/ConnectionProfile"�
CreateConnectionProfileRequestF
parent (	B6�A�A0
.datamigration.googleapis.com/ConnectionProfile"
connection_profile_id (	B�AL
connection_profile (2+.google.cloud.clouddms.v1.ConnectionProfileB�A

request_id (	"�
UpdateConnectionProfileRequest4
update_mask (2.google.protobuf.FieldMaskB�AL
connection_profile (2+.google.cloud.clouddms.v1.ConnectionProfileB�A

request_id (	"�
DeleteConnectionProfileRequestD
name (	B6�A�A0
.datamigration.googleapis.com/ConnectionProfile

request_id (	
force ("�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�
DataMigrationService�
ListMigrationJobs2.google.cloud.clouddms.v1.ListMigrationJobsRequest3.google.cloud.clouddms.v1.ListMigrationJobsResponse"B���31/v1/{parent=projects/*/locations/*}/migrationJobs�Aparent�
GetMigrationJob0.google.cloud.clouddms.v1.GetMigrationJobRequest&.google.cloud.clouddms.v1.MigrationJob"@���31/v1/{name=projects/*/locations/*/migrationJobs/*}�Aname�
CreateMigrationJob3.google.cloud.clouddms.v1.CreateMigrationJobRequest.google.longrunning.Operation"����B"1/v1/{parent=projects/*/locations/*}/migrationJobs:migration_job�A%parent,migration_job,migration_job_id�A!
MigrationJobOperationMetadata�
UpdateMigrationJob3.google.cloud.clouddms.v1.UpdateMigrationJobRequest.google.longrunning.Operation"����P2?/v1/{migration_job.name=projects/*/locations/*/migrationJobs/*}:migration_job�Amigration_job,update_mask�A!
MigrationJobOperationMetadata�
DeleteMigrationJob3.google.cloud.clouddms.v1.DeleteMigrationJobRequest.google.longrunning.Operation"m���3*1/v1/{name=projects/*/locations/*/migrationJobs/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
StartMigrationJob2.google.cloud.clouddms.v1.StartMigrationJobRequest.google.longrunning.Operation"f���<"7/v1/{name=projects/*/locations/*/migrationJobs/*}:start:*�A!
MigrationJobOperationMetadata�
StopMigrationJob1.google.cloud.clouddms.v1.StopMigrationJobRequest.google.longrunning.Operation"e���;"6/v1/{name=projects/*/locations/*/migrationJobs/*}:stop:*�A!
MigrationJobOperationMetadata�
ResumeMigrationJob3.google.cloud.clouddms.v1.ResumeMigrationJobRequest.google.longrunning.Operation"g���="8/v1/{name=projects/*/locations/*/migrationJobs/*}:resume:*�A!
MigrationJobOperationMetadata�
PromoteMigrationJob4.google.cloud.clouddms.v1.PromoteMigrationJobRequest.google.longrunning.Operation"h���>"9/v1/{name=projects/*/locations/*/migrationJobs/*}:promote:*�A!
MigrationJobOperationMetadata�
VerifyMigrationJob3.google.cloud.clouddms.v1.VerifyMigrationJobRequest.google.longrunning.Operation"g���="8/v1/{name=projects/*/locations/*/migrationJobs/*}:verify:*�A!
MigrationJobOperationMetadata�
RestartMigrationJob4.google.cloud.clouddms.v1.RestartMigrationJobRequest.google.longrunning.Operation"h���>"9/v1/{name=projects/*/locations/*/migrationJobs/*}:restart:*�A!
MigrationJobOperationMetadata�
GenerateSshScript2.google.cloud.clouddms.v1.GenerateSshScriptRequest#.google.cloud.clouddms.v1.SshScript"W���Q"L/v1/{migration_job=projects/*/locations/*/migrationJobs/*}:generateSshScript:*�
ListConnectionProfiles7.google.cloud.clouddms.v1.ListConnectionProfilesRequest8.google.cloud.clouddms.v1.ListConnectionProfilesResponse"G���86/v1/{parent=projects/*/locations/*}/connectionProfiles�Aparent�
GetConnectionProfile5.google.cloud.clouddms.v1.GetConnectionProfileRequest+.google.cloud.clouddms.v1.ConnectionProfile"E���86/v1/{name=projects/*/locations/*/connectionProfiles/*}�Aname�
CreateConnectionProfile8.google.cloud.clouddms.v1.CreateConnectionProfileRequest.google.longrunning.Operation"����L"6/v1/{parent=projects/*/locations/*}/connectionProfiles:connection_profile�A/parent,connection_profile,connection_profile_id�A&
ConnectionProfileOperationMetadata�
UpdateConnectionProfile8.google.cloud.clouddms.v1.UpdateConnectionProfileRequest.google.longrunning.Operation"����_2I/v1/{connection_profile.name=projects/*/locations/*/connectionProfiles/*}:connection_profile�Aconnection_profile,update_mask�A&
ConnectionProfileOperationMetadata�
DeleteConnectionProfile8.google.cloud.clouddms.v1.DeleteConnectionProfileRequest.google.longrunning.Operation"r���8*6/v1/{name=projects/*/locations/*/connectionProfiles/*}�Aname�A*
google.protobuf.EmptyOperationMetadataP�Adatamigration.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.clouddms.v1BClouddmsProtoPZ@google.golang.org/genproto/googleapis/cloud/clouddms/v1;clouddms�Google.Cloud.CloudDms.V1�Google\\Cloud\\CloudDms\\V1�Google::Cloud::CloudDMS::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

