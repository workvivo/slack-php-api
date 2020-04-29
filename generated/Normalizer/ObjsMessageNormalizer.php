<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsMessage';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsMessage';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsMessage();
        if (property_exists($data, 'attachments') && $data->{'attachments'} !== null) {
            $values = [];
            foreach ($data->{'attachments'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem', 'json', $context);
            }
            $object->setAttachments($values);
        }
        if (property_exists($data, 'blocks') && $data->{'blocks'} !== null) {
            $values_1 = [];
            foreach ($data->{'blocks'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\BlocksItem', 'json', $context);
            }
            $object->setBlocks($values_1);
        }
        if (property_exists($data, 'bot_id') && $data->{'bot_id'} !== null) {
            $object->setBotId($data->{'bot_id'});
        }
        if (property_exists($data, 'client_msg_id') && $data->{'client_msg_id'} !== null) {
            $object->setClientMsgId($data->{'client_msg_id'});
        }
        if (property_exists($data, 'comment') && $data->{'comment'} !== null) {
            $object->setComment($this->denormalizer->denormalize($data->{'comment'}, 'JoliCode\\Slack\\Api\\Model\\ObjsComment', 'json', $context));
        }
        if (property_exists($data, 'display_as_bot') && $data->{'display_as_bot'} !== null) {
            $object->setDisplayAsBot($data->{'display_as_bot'});
        }
        if (property_exists($data, 'file') && $data->{'file'} !== null) {
            $object->setFile($this->denormalizer->denormalize($data->{'file'}, 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context));
        }
        if (property_exists($data, 'files') && $data->{'files'} !== null) {
            $values_2 = [];
            foreach ($data->{'files'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'JoliCode\\Slack\\Api\\Model\\ObjsFile', 'json', $context);
            }
            $object->setFiles($values_2);
        }
        if (property_exists($data, 'icons') && $data->{'icons'} !== null) {
            $object->setIcons($this->denormalizer->denormalize($data->{'icons'}, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageIcons', 'json', $context));
        }
        if (property_exists($data, 'inviter') && $data->{'inviter'} !== null) {
            $object->setInviter($data->{'inviter'});
        }
        if (property_exists($data, 'is_delayed_message') && $data->{'is_delayed_message'} !== null) {
            $object->setIsDelayedMessage($data->{'is_delayed_message'});
        }
        if (property_exists($data, 'is_intro') && $data->{'is_intro'} !== null) {
            $object->setIsIntro($data->{'is_intro'});
        }
        if (property_exists($data, 'is_starred') && $data->{'is_starred'} !== null) {
            $object->setIsStarred($data->{'is_starred'});
        }
        if (property_exists($data, 'last_read') && $data->{'last_read'} !== null) {
            $object->setLastRead($data->{'last_read'});
        }
        if (property_exists($data, 'latest_reply') && $data->{'latest_reply'} !== null) {
            $object->setLatestReply($data->{'latest_reply'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'old_name') && $data->{'old_name'} !== null) {
            $object->setOldName($data->{'old_name'});
        }
        if (property_exists($data, 'parent_user_id') && $data->{'parent_user_id'} !== null) {
            $object->setParentUserId($data->{'parent_user_id'});
        }
        if (property_exists($data, 'permalink') && $data->{'permalink'} !== null) {
            $object->setPermalink($data->{'permalink'});
        }
        if (property_exists($data, 'pinned_to') && $data->{'pinned_to'} !== null) {
            $values_3 = [];
            foreach ($data->{'pinned_to'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setPinnedTo($values_3);
        }
        if (property_exists($data, 'purpose') && $data->{'purpose'} !== null) {
            $object->setPurpose($data->{'purpose'});
        }
        if (property_exists($data, 'reactions') && $data->{'reactions'} !== null) {
            $values_4 = [];
            foreach ($data->{'reactions'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'JoliCode\\Slack\\Api\\Model\\ObjsReaction', 'json', $context);
            }
            $object->setReactions($values_4);
        }
        if (property_exists($data, 'replies') && $data->{'replies'} !== null) {
            $values_5 = [];
            foreach ($data->{'replies'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageRepliesItem', 'json', $context);
            }
            $object->setReplies($values_5);
        }
        if (property_exists($data, 'reply_count') && $data->{'reply_count'} !== null) {
            $object->setReplyCount($data->{'reply_count'});
        }
        if (property_exists($data, 'reply_users') && $data->{'reply_users'} !== null) {
            $values_6 = [];
            foreach ($data->{'reply_users'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setReplyUsers($values_6);
        }
        if (property_exists($data, 'reply_users_count') && $data->{'reply_users_count'} !== null) {
            $object->setReplyUsersCount($data->{'reply_users_count'});
        }
        if (property_exists($data, 'source_team') && $data->{'source_team'} !== null) {
            $object->setSourceTeam($data->{'source_team'});
        }
        if (property_exists($data, 'subscribed') && $data->{'subscribed'} !== null) {
            $object->setSubscribed($data->{'subscribed'});
        }
        if (property_exists($data, 'subtype') && $data->{'subtype'} !== null) {
            $object->setSubtype($data->{'subtype'});
        }
        if (property_exists($data, 'team') && $data->{'team'} !== null) {
            $object->setTeam($data->{'team'});
        }
        if (property_exists($data, 'text') && $data->{'text'} !== null) {
            $object->setText($data->{'text'});
        }
        if (property_exists($data, 'thread_ts') && $data->{'thread_ts'} !== null) {
            $object->setThreadTs($data->{'thread_ts'});
        }
        if (property_exists($data, 'topic') && $data->{'topic'} !== null) {
            $object->setTopic($data->{'topic'});
        }
        if (property_exists($data, 'ts') && $data->{'ts'} !== null) {
            $object->setTs($data->{'ts'});
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'unread_count') && $data->{'unread_count'} !== null) {
            $object->setUnreadCount($data->{'unread_count'});
        }
        if (property_exists($data, 'upload') && $data->{'upload'} !== null) {
            $object->setUpload($data->{'upload'});
        }
        if (property_exists($data, 'user') && $data->{'user'} !== null) {
            $object->setUser($data->{'user'});
        }
        if (property_exists($data, 'user_profile') && $data->{'user_profile'} !== null) {
            $object->setUserProfile($this->denormalizer->denormalize($data->{'user_profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
        }
        if (property_exists($data, 'user_team') && $data->{'user_team'} !== null) {
            $object->setUserTeam($data->{'user_team'});
        }
        if (property_exists($data, 'username') && $data->{'username'} !== null) {
            $object->setUsername($data->{'username'});
        }
        if (property_exists($data, 'edited') && $data->{'edited'} !== null) {
            $object->setEdited($data->{'edited'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAttachments()) {
            $values = [];
            foreach ($object->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'attachments'} = $values;
        }
        if (null !== $object->getBlocks()) {
            $values_1 = [];
            foreach ($object->getBlocks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'blocks'} = $values_1;
        }
        if (null !== $object->getBotId()) {
            $data->{'bot_id'} = $object->getBotId();
        }
        if (null !== $object->getClientMsgId()) {
            $data->{'client_msg_id'} = $object->getClientMsgId();
        }
        if (null !== $object->getComment()) {
            $data->{'comment'} = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if (null !== $object->getDisplayAsBot()) {
            $data->{'display_as_bot'} = $object->getDisplayAsBot();
        }
        if (null !== $object->getFile()) {
            $data->{'file'} = $this->normalizer->normalize($object->getFile(), 'json', $context);
        }
        if (null !== $object->getFiles()) {
            $values_2 = [];
            foreach ($object->getFiles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'files'} = $values_2;
        }
        if (null !== $object->getIcons()) {
            $data->{'icons'} = $this->normalizer->normalize($object->getIcons(), 'json', $context);
        }
        if (null !== $object->getInviter()) {
            $data->{'inviter'} = $object->getInviter();
        }
        if (null !== $object->getIsDelayedMessage()) {
            $data->{'is_delayed_message'} = $object->getIsDelayedMessage();
        }
        if (null !== $object->getIsIntro()) {
            $data->{'is_intro'} = $object->getIsIntro();
        }
        if (null !== $object->getIsStarred()) {
            $data->{'is_starred'} = $object->getIsStarred();
        }
        if (null !== $object->getLastRead()) {
            $data->{'last_read'} = $object->getLastRead();
        }
        if (null !== $object->getLatestReply()) {
            $data->{'latest_reply'} = $object->getLatestReply();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getOldName()) {
            $data->{'old_name'} = $object->getOldName();
        }
        if (null !== $object->getParentUserId()) {
            $data->{'parent_user_id'} = $object->getParentUserId();
        }
        if (null !== $object->getPermalink()) {
            $data->{'permalink'} = $object->getPermalink();
        }
        if (null !== $object->getPinnedTo()) {
            $values_3 = [];
            foreach ($object->getPinnedTo() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'pinned_to'} = $values_3;
        }
        if (null !== $object->getPurpose()) {
            $data->{'purpose'} = $object->getPurpose();
        }
        if (null !== $object->getReactions()) {
            $values_4 = [];
            foreach ($object->getReactions() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'reactions'} = $values_4;
        }
        if (null !== $object->getReplies()) {
            $values_5 = [];
            foreach ($object->getReplies() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'replies'} = $values_5;
        }
        if (null !== $object->getReplyCount()) {
            $data->{'reply_count'} = $object->getReplyCount();
        }
        if (null !== $object->getReplyUsers()) {
            $values_6 = [];
            foreach ($object->getReplyUsers() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'reply_users'} = $values_6;
        }
        if (null !== $object->getReplyUsersCount()) {
            $data->{'reply_users_count'} = $object->getReplyUsersCount();
        }
        if (null !== $object->getSourceTeam()) {
            $data->{'source_team'} = $object->getSourceTeam();
        }
        if (null !== $object->getSubscribed()) {
            $data->{'subscribed'} = $object->getSubscribed();
        }
        if (null !== $object->getSubtype()) {
            $data->{'subtype'} = $object->getSubtype();
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getThreadTs()) {
            $data->{'thread_ts'} = $object->getThreadTs();
        }
        if (null !== $object->getTopic()) {
            $data->{'topic'} = $object->getTopic();
        }
        if (null !== $object->getTs()) {
            $data->{'ts'} = $object->getTs();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        }
        if (null !== $object->getUpload()) {
            $data->{'upload'} = $object->getUpload();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        if (null !== $object->getUserProfile()) {
            $data->{'user_profile'} = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        }
        if (null !== $object->getUserTeam()) {
            $data->{'user_team'} = $object->getUserTeam();
        }
        if (null !== $object->getUsername()) {
            $data->{'username'} = $object->getUsername();
        }
        if (null !== $object->getEdited()) {
            $data->{'edited'} = $object->getEdited();
        }

        return $data;
    }
}
