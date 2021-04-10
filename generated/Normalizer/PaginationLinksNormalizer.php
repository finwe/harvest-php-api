<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Harvest\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PaginationLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\PaginationLinks();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('first', $data)) {
            $object->setFirst($data['first']);
        }
        if (\array_key_exists('last', $data)) {
            $object->setLast($data['last']);
        }
        if (\array_key_exists('previous', $data) && $data['previous'] !== null) {
            $object->setPrevious($data['previous']);
        }
        elseif (\array_key_exists('previous', $data) && $data['previous'] === null) {
            $object->setPrevious(null);
        }
        if (\array_key_exists('next', $data) && $data['next'] !== null) {
            $object->setNext($data['next']);
        }
        elseif (\array_key_exists('next', $data) && $data['next'] === null) {
            $object->setNext(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['first'] = $object->getFirst();
        $data['last'] = $object->getLast();
        if (null !== $object->getPrevious()) {
            $data['previous'] = $object->getPrevious();
        }
        if (null !== $object->getNext()) {
            $data['next'] = $object->getNext();
        }
        return $data;
    }
}