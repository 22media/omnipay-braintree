<?php

namespace Omnipay\Braintree\Message;

use League\Omnipay\Common\Message\AbstractResponse;
use League\Omnipay\Common\Message\RequestInterface;

/**
 * ClientTokenResponse
 */
class ClientTokenResponse extends AbstractResponse
{
    public function __construct(RequestInterface $request, $data)
    {
        $this->request = $request;
        $this->data = $data;
    }

    public function isSuccessful()
    {
        return true;
    }

    public function getToken()
    {
        return $this->data;
    }
}
