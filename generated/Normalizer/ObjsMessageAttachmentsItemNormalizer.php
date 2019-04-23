<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsMessageAttachmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsMessageAttachmentsItem();
        $data = clone $data;
        if (property_exists($data, 'fallback')) {
            $object->setFallback($data->{'fallback'});
            unset($data->{'fallback'});
        }
        if (property_exists($data, 'color')) {
            $object->setColor($data->{'color'});
            unset($data->{'color'});
        }
        if (property_exists($data, 'pretext')) {
            $object->setPretext($data->{'pretext'});
            unset($data->{'pretext'});
        }
        if (property_exists($data, 'author_name')) {
            $object->setAuthorName($data->{'author_name'});
            unset($data->{'author_name'});
        }
        if (property_exists($data, 'author_link')) {
            $object->setAuthorLink($data->{'author_link'});
            unset($data->{'author_link'});
        }
        if (property_exists($data, 'author_icon')) {
            $object->setAuthorIcon($data->{'author_icon'});
            unset($data->{'author_icon'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
            unset($data->{'title'});
        }
        if (property_exists($data, 'title_link')) {
            $object->setTitleLink($data->{'title_link'});
            unset($data->{'title_link'});
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
            unset($data->{'text'});
        }
        if (property_exists($data, 'fields')) {
            $values = [];
            foreach ($data->{'fields'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessageAttachmentsItemFieldsItem', 'json', $context);
            }
            $object->setFields($values);
            unset($data->{'fields'});
        }
        if (property_exists($data, 'image_url')) {
            $object->setImageUrl($data->{'image_url'});
            unset($data->{'image_url'});
        }
        if (property_exists($data, 'thumb_url')) {
            $object->setThumbUrl($data->{'thumb_url'});
            unset($data->{'thumb_url'});
        }
        if (property_exists($data, 'footer')) {
            $object->setFooter($data->{'footer'});
            unset($data->{'footer'});
        }
        if (property_exists($data, 'footer_icon')) {
            $object->setFooterIcon($data->{'footer_icon'});
            unset($data->{'footer_icon'});
        }
        if (property_exists($data, 'ts')) {
            $value_1 = $data->{'ts'};
            if (is_float($data->{'ts'})) {
                $value_1 = $data->{'ts'};
            } elseif (is_string($data->{'ts'})) {
                $value_1 = $data->{'ts'};
            }
            $object->setTs($value_1);
            unset($data->{'ts'});
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFallback()) {
            $data->{'fallback'} = $object->getFallback();
        }
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        }
        if (null !== $object->getPretext()) {
            $data->{'pretext'} = $object->getPretext();
        }
        if (null !== $object->getAuthorName()) {
            $data->{'author_name'} = $object->getAuthorName();
        }
        if (null !== $object->getAuthorLink()) {
            $data->{'author_link'} = $object->getAuthorLink();
        }
        if (null !== $object->getAuthorIcon()) {
            $data->{'author_icon'} = $object->getAuthorIcon();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getTitleLink()) {
            $data->{'title_link'} = $object->getTitleLink();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getFields()) {
            $values = [];
            foreach ($object->getFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'fields'} = $values;
        }
        if (null !== $object->getImageUrl()) {
            $data->{'image_url'} = $object->getImageUrl();
        }
        if (null !== $object->getThumbUrl()) {
            $data->{'thumb_url'} = $object->getThumbUrl();
        }
        if (null !== $object->getFooter()) {
            $data->{'footer'} = $object->getFooter();
        }
        if (null !== $object->getFooterIcon()) {
            $data->{'footer_icon'} = $object->getFooterIcon();
        }
        if (null !== $object->getTs()) {
            $value_1 = $object->getTs();
            if (is_float($object->getTs())) {
                $value_1 = $object->getTs();
            } elseif (is_string($object->getTs())) {
                $value_1 = $object->getTs();
            }
            $data->{'ts'} = $value_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_2;
            }
        }

        return $data;
    }
}
