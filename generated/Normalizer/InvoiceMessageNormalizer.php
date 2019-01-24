<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InvoiceMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessage';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Harvest\Api\Model\InvoiceMessage;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoiceMessage();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'sent_by') && $data->{'sent_by'} !== null) {
            $object->setSentBy($data->{'sent_by'});
        }
        if (property_exists($data, 'sent_by_email') && $data->{'sent_by_email'} !== null) {
            $object->setSentByEmail($data->{'sent_by_email'});
        }
        if (property_exists($data, 'sent_from') && $data->{'sent_from'} !== null) {
            $object->setSentFrom($data->{'sent_from'});
        }
        if (property_exists($data, 'sent_from_email') && $data->{'sent_from_email'} !== null) {
            $object->setSentFromEmail($data->{'sent_from_email'});
        }
        if (property_exists($data, 'recipients') && $data->{'recipients'} !== null) {
            $values = [];
            foreach ($data->{'recipients'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\InvoiceMessageRecipient', 'json', $context);
            }
            $object->setRecipients($values);
        }
        if (property_exists($data, 'subject') && $data->{'subject'} !== null) {
            $object->setSubject($data->{'subject'});
        }
        if (property_exists($data, 'body') && $data->{'body'} !== null) {
            $object->setBody($data->{'body'});
        }
        if (property_exists($data, 'include_link_to_client_invoice') && $data->{'include_link_to_client_invoice'} !== null) {
            $object->setIncludeLinkToClientInvoice($data->{'include_link_to_client_invoice'});
        }
        if (property_exists($data, 'attach_pdf') && $data->{'attach_pdf'} !== null) {
            $object->setAttachPdf($data->{'attach_pdf'});
        }
        if (property_exists($data, 'send_me_a_copy') && $data->{'send_me_a_copy'} !== null) {
            $object->setSendMeACopy($data->{'send_me_a_copy'});
        }
        if (property_exists($data, 'thank_you') && $data->{'thank_you'} !== null) {
            $object->setThankYou($data->{'thank_you'});
        }
        if (property_exists($data, 'event_type') && $data->{'event_type'} !== null) {
            $object->setEventType($data->{'event_type'});
        }
        if (property_exists($data, 'reminder') && $data->{'reminder'} !== null) {
            $object->setReminder($data->{'reminder'});
        }
        if (property_exists($data, 'send_reminder_on') && $data->{'send_reminder_on'} !== null) {
            $object->setSendReminderOn($data->{'send_reminder_on'});
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updated_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getSentBy()) {
            $data->{'sent_by'} = $object->getSentBy();
        }
        if (null !== $object->getSentByEmail()) {
            $data->{'sent_by_email'} = $object->getSentByEmail();
        }
        if (null !== $object->getSentFrom()) {
            $data->{'sent_from'} = $object->getSentFrom();
        }
        if (null !== $object->getSentFromEmail()) {
            $data->{'sent_from_email'} = $object->getSentFromEmail();
        }
        if (null !== $object->getRecipients()) {
            $values = [];
            foreach ($object->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'recipients'} = $values;
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        if (null !== $object->getBody()) {
            $data->{'body'} = $object->getBody();
        }
        if (null !== $object->getIncludeLinkToClientInvoice()) {
            $data->{'include_link_to_client_invoice'} = $object->getIncludeLinkToClientInvoice();
        }
        if (null !== $object->getAttachPdf()) {
            $data->{'attach_pdf'} = $object->getAttachPdf();
        }
        if (null !== $object->getSendMeACopy()) {
            $data->{'send_me_a_copy'} = $object->getSendMeACopy();
        }
        if (null !== $object->getThankYou()) {
            $data->{'thank_you'} = $object->getThankYou();
        }
        if (null !== $object->getEventType()) {
            $data->{'event_type'} = $object->getEventType();
        }
        if (null !== $object->getReminder()) {
            $data->{'reminder'} = $object->getReminder();
        }
        if (null !== $object->getSendReminderOn()) {
            $data->{'send_reminder_on'} = $object->getSendReminderOn();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
