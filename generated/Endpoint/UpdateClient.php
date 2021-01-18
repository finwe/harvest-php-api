<?php

namespace JoliCode\Harvest\Api\Endpoint;

class UpdateClient extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $clientId;
    /**
     * Updates the specific client by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a client object and a 200 OK response code if the call succeeded.
     *
     * @param string $clientId 
     * @param \JoliCode\Harvest\Api\Model\ClientsClientIdPatchBody $payload json payload
     */
    public function __construct(string $clientId, \JoliCode\Harvest\Api\Model\ClientsClientIdPatchBody $payload)
    {
        $this->clientId = $clientId;
        $this->body = $payload;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{clientId}'), array($this->clientId), '/clients/{clientId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\Client|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Client', 'json');
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}