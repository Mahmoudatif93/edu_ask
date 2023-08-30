<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace GPBMetadata\Google\Cloud\Language\V1;

class LanguageService
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
        $pool->internalAddGeneratedFile(
            '
�E
/google/cloud/language/v1/language_service.protogoogle.cloud.language.v1google/api/client.protogoogle/api/field_behavior.proto"�
Document5
type (2\'.google.cloud.language.v1.Document.Type
content (	H 
gcs_content_uri (	H 
language (	"6
Type
TYPE_UNSPECIFIED 

PLAIN_TEXT
HTMLB
source"t
Sentence0
text (2".google.cloud.language.v1.TextSpan6
	sentiment (2#.google.cloud.language.v1.Sentiment"�
Entity
name (	3
type (2%.google.cloud.language.v1.Entity.Type@
metadata (2..google.cloud.language.v1.Entity.MetadataEntry
salience (9
mentions (2\'.google.cloud.language.v1.EntityMention6
	sentiment (2#.google.cloud.language.v1.Sentiment/
MetadataEntry
key (	
value (	:8"�
Type
UNKNOWN 

PERSON
LOCATION
ORGANIZATION	
EVENT
WORK_OF_ART
CONSUMER_GOOD	
OTHER
PHONE_NUMBER	
ADDRESS

DATE

NUMBER	
PRICE"�
Token0
text (2".google.cloud.language.v1.TextSpan>
part_of_speech (2&.google.cloud.language.v1.PartOfSpeechA
dependency_edge (2(.google.cloud.language.v1.DependencyEdge
lemma (	"-
	Sentiment
	magnitude (
score ("�
PartOfSpeech7
tag (2*.google.cloud.language.v1.PartOfSpeech.Tag=
aspect (2-.google.cloud.language.v1.PartOfSpeech.Aspect9
case (2+.google.cloud.language.v1.PartOfSpeech.Case9
form (2+.google.cloud.language.v1.PartOfSpeech.Form=
gender (2-.google.cloud.language.v1.PartOfSpeech.Gender9
mood (2+.google.cloud.language.v1.PartOfSpeech.Mood=
number (2-.google.cloud.language.v1.PartOfSpeech.Number=
person (2-.google.cloud.language.v1.PartOfSpeech.Person=
proper	 (2-.google.cloud.language.v1.PartOfSpeech.ProperG
reciprocity
 (22.google.cloud.language.v1.PartOfSpeech.Reciprocity;
tense (2,.google.cloud.language.v1.PartOfSpeech.Tense;
voice (2,.google.cloud.language.v1.PartOfSpeech.Voice"�
Tag
UNKNOWN 
ADJ
ADP
ADV
CONJ
DET
NOUN
NUM
PRON
PRT		
PUNCT

VERB
X	
AFFIX"O
Aspect
ASPECT_UNKNOWN 

PERFECTIVE
IMPERFECTIVE
PROGRESSIVE"�
Case
CASE_UNKNOWN 

ACCUSATIVE
	ADVERBIAL
COMPLEMENTIVE

DATIVE
GENITIVE
INSTRUMENTAL
LOCATIVE

NOMINATIVE
OBLIQUE	
	PARTITIVE

PREPOSITIONAL
REFLEXIVE_CASE
RELATIVE_CASE
VOCATIVE"�
Form
FORM_UNKNOWN 
ADNOMIAL
	AUXILIARY
COMPLEMENTIZER
FINAL_ENDING

GERUND

REALIS
IRREALIS	
SHORT
LONG		
ORDER

SPECIFIC"E
Gender
GENDER_UNKNOWN 
FEMININE
	MASCULINE

NEUTER"
Mood
MOOD_UNKNOWN 
CONDITIONAL_MOOD

IMPERATIVE

INDICATIVE
INTERROGATIVE
JUSSIVE
SUBJUNCTIVE"@
Number
NUMBER_UNKNOWN 
SINGULAR

PLURAL
DUAL"T
Person
PERSON_UNKNOWN 	
FIRST

SECOND	
THIRD
REFLEXIVE_PERSON"8
Proper
PROPER_UNKNOWN 

PROPER

NOT_PROPER"J
Reciprocity
RECIPROCITY_UNKNOWN 

RECIPROCAL
NON_RECIPROCAL"s
Tense
TENSE_UNKNOWN 
CONDITIONAL_TENSE

FUTURE
PAST
PRESENT
	IMPERFECT

PLUPERFECT"B
Voice
VOICE_UNKNOWN 

ACTIVE
	CAUSATIVE
PASSIVE"�
DependencyEdge
head_token_index (=
label (2..google.cloud.language.v1.DependencyEdge.Label"�
Label
UNKNOWN 

ABBREV	
ACOMP	
ADVCL

ADVMOD
AMOD	
APPOS
ATTR
AUX
AUXPASS	
CC
	
CCOMP
CONJ	
CSUBJ
	CSUBJPASS
DEP
DET
	DISCOURSE
DOBJ
EXPL
GOESWITH
IOBJ
MARK
MWE
MWV
NEG
NN
NPADVMOD	
NSUBJ
	NSUBJPASS
NUM

NUMBER
P 
	PARATAXIS!
PARTMOD"	
PCOMP#
POBJ$
POSS%
POSTNEG&
PRECOMP\'
PRECONJ(

PREDET)
PREF*
PREP+	
PRONL,
PRT-
PS.
QUANTMOD/	
RCMOD0
RCMODREL1	
RDROP2
REF3
REMNANT4

REPARANDUM5
ROOT6
SNUM7
SUFF8
TMOD9	
TOPIC:
VMOD;
VOCATIVE<	
XCOMP=

SUFFIX>	
TITLE?
ADVPHMOD@
AUXCAUSA	
AUXVVB	
DTMODC
FOREIGND
KWE
LISTF
NOMCG
NOMCSUBJH
NOMCSUBJPASSI
NUMCJ
COPK

DISLOCATEDL
ASPM
GMODN
GOBJO

INFMODP
MESQ	
NCOMPR"�
EntityMention0
text (2".google.cloud.language.v1.TextSpan:
type (2,.google.cloud.language.v1.EntityMention.Type6
	sentiment (2#.google.cloud.language.v1.Sentiment"0
Type
TYPE_UNKNOWN 

PROPER

COMMON"1
TextSpan
content (	
begin_offset (":
ClassificationCategory
name (	

confidence ("�
ClassificationModelOptionsP
v1_model (2<.google.cloud.language.v1.ClassificationModelOptions.V1ModelH P
v2_model (2<.google.cloud.language.v1.ClassificationModelOptions.V2ModelH 	
V1Model�
V2Modely
content_categories_version (2U.google.cloud.language.v1.ClassificationModelOptions.V2Model.ContentCategoriesVersion"V
ContentCategoriesVersion*
&CONTENT_CATEGORIES_VERSION_UNSPECIFIED 
V1
V2B

model_type"�
AnalyzeSentimentRequest9
document (2".google.cloud.language.v1.DocumentB�A=
encoding_type (2&.google.cloud.language.v1.EncodingType"�
AnalyzeSentimentResponse?
document_sentiment (2#.google.cloud.language.v1.Sentiment
language (	5
	sentences (2".google.cloud.language.v1.Sentence"�
AnalyzeEntitySentimentRequest9
document (2".google.cloud.language.v1.DocumentB�A=
encoding_type (2&.google.cloud.language.v1.EncodingType"f
AnalyzeEntitySentimentResponse2
entities (2 .google.cloud.language.v1.Entity
language (	"�
AnalyzeEntitiesRequest9
document (2".google.cloud.language.v1.DocumentB�A=
encoding_type (2&.google.cloud.language.v1.EncodingType"_
AnalyzeEntitiesResponse2
entities (2 .google.cloud.language.v1.Entity
language (	"�
AnalyzeSyntaxRequest9
document (2".google.cloud.language.v1.DocumentB�A=
encoding_type (2&.google.cloud.language.v1.EncodingType"�
AnalyzeSyntaxResponse5
	sentences (2".google.cloud.language.v1.Sentence/
tokens (2.google.cloud.language.v1.Token
language (	"�
ClassifyTextRequest9
document (2".google.cloud.language.v1.DocumentB�AZ
classification_model_options (24.google.cloud.language.v1.ClassificationModelOptions"\\
ClassifyTextResponseD

categories (20.google.cloud.language.v1.ClassificationCategory"�
AnnotateTextRequest9
document (2".google.cloud.language.v1.DocumentB�AM
features (26.google.cloud.language.v1.AnnotateTextRequest.FeaturesB�A=
encoding_type (2&.google.cloud.language.v1.EncodingType�
Features
extract_syntax (
extract_entities ("
extract_document_sentiment ( 
extract_entity_sentiment (
classify_text (Z
classification_model_options
 (24.google.cloud.language.v1.ClassificationModelOptions"�
AnnotateTextResponse5
	sentences (2".google.cloud.language.v1.Sentence/
tokens (2.google.cloud.language.v1.Token2
entities (2 .google.cloud.language.v1.Entity?
document_sentiment (2#.google.cloud.language.v1.Sentiment
language (	D

categories (20.google.cloud.language.v1.ClassificationCategory*8
EncodingType
NONE 
UTF8	
UTF16	
UTF322�

LanguageService�
AnalyzeSentiment1.google.cloud.language.v1.AnalyzeSentimentRequest2.google.cloud.language.v1.AnalyzeSentimentResponse"M���#"/v1/documents:analyzeSentiment:*�Adocument,encoding_type�Adocument�
AnalyzeEntities0.google.cloud.language.v1.AnalyzeEntitiesRequest1.google.cloud.language.v1.AnalyzeEntitiesResponse"L���""/v1/documents:analyzeEntities:*�Adocument,encoding_type�Adocument�
AnalyzeEntitySentiment7.google.cloud.language.v1.AnalyzeEntitySentimentRequest8.google.cloud.language.v1.AnalyzeEntitySentimentResponse"S���)"$/v1/documents:analyzeEntitySentiment:*�Adocument,encoding_type�Adocument�
AnalyzeSyntax..google.cloud.language.v1.AnalyzeSyntaxRequest/.google.cloud.language.v1.AnalyzeSyntaxResponse"J��� "/v1/documents:analyzeSyntax:*�Adocument,encoding_type�Adocument�
ClassifyText-.google.cloud.language.v1.ClassifyTextRequest..google.cloud.language.v1.ClassifyTextResponse"0���"/v1/documents:classifyText:*�Adocument�
AnnotateText-.google.cloud.language.v1.AnnotateTextRequest..google.cloud.language.v1.AnnotateTextResponse"[���"/v1/documents:annotateText:*�Adocument,features,encoding_type�Adocument,featuresz�Alanguage.googleapis.com�A]https://www.googleapis.com/auth/cloud-language,https://www.googleapis.com/auth/cloud-platformBx
com.google.cloud.language.v1BLanguageServiceProtoPZ@google.golang.org/genproto/googleapis/cloud/language/v1;languagebproto3'
        , true);

        static::$is_initialized = true;
    }
}

