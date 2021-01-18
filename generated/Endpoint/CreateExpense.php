<?php

namespace JoliCode\Harvest\Api\Endpoint;

class CreateExpense extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    /**
     * Creates a new expense object. Returns an expense object and a 201 Created response code if the call succeeded.
     *
     * @param \JoliCode\Harvest\Api\Model\ExpensesPostBody $payload json payload
     */
    public function __construct(\JoliCode\Harvest\Api\Model\ExpensesPostBody $payload)
    {
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/expenses';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\Expense|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Expense', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}