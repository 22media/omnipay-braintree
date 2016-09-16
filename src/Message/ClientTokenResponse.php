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

    public function isCompleted()
    {
        // not sure if this is the correct way - let's see?
        return $this->isSuccessful();
    }

    public function getToken()
    {
        return $this->data;
    }
}
