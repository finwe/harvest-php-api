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

class InvoicePaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\InvoicePayment';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Harvest\Api\Model\InvoicePayment;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\InvoicePayment();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'paid_at') && $data->{'paid_at'} !== null) {
            $object->setPaidAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'paid_at'}));
        }
        if (property_exists($data, 'paid_date') && $data->{'paid_date'} !== null) {
            $object->setPaidDate($data->{'paid_date'});
        }
        if (property_exists($data, 'recorded_by') && $data->{'recorded_by'} !== null) {
            $object->setRecordedBy($data->{'recorded_by'});
        }
        if (property_exists($data, 'recorded_by_email') && $data->{'recorded_by_email'} !== null) {
            $object->setRecordedByEmail($data->{'recorded_by_email'});
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        if (property_exists($data, 'transaction_id') && $data->{'transaction_id'} !== null) {
            $object->setTransactionId($data->{'transaction_id'});
        }
        if (property_exists($data, 'payment_gateway') && $data->{'payment_gateway'} !== null) {
            $object->setPaymentGateway($this->denormalizer->denormalize($data->{'payment_gateway'}, 'JoliCode\\Harvest\\Api\\Model\\InvoicePaymentPaymentGateway', 'json', $context));
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
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getPaidAt()) {
            $data->{'paid_at'} = $object->getPaidAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getPaidDate()) {
            $data->{'paid_date'} = $object->getPaidDate();
        }
        if (null !== $object->getRecordedBy()) {
            $data->{'recorded_by'} = $object->getRecordedBy();
        }
        if (null !== $object->getRecordedByEmail()) {
            $data->{'recorded_by_email'} = $object->getRecordedByEmail();
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        if (null !== $object->getTransactionId()) {
            $data->{'transaction_id'} = $object->getTransactionId();
        }
        if (null !== $object->getPaymentGateway()) {
            $data->{'payment_gateway'} = $this->normalizer->normalize($object->getPaymentGateway(), 'json', $context);
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
