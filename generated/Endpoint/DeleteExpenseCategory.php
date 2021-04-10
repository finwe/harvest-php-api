<?php

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteExpenseCategory extends \JoliCode\Harvest\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Harvest\Api\Runtime\Client\Endpoint
{
    protected $expenseCategoryId;
    /**
     * Delete an expense category. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $expenseCategoryId 
     */
    public function __construct(string $expenseCategoryId)
    {
        $this->expenseCategoryId = $expenseCategoryId;
    }
    use \JoliCode\Harvest\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{expenseCategoryId}'), array($this->expenseCategoryId), '/expense_categories/{expenseCategoryId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}