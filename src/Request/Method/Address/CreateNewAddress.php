<?php

namespace Electrum\Request\Method\Address;

use Electrum\Request\AbstractMethod;
use Electrum\Request\MethodInterface;

class CreateNewAddress extends AbstractMethod implements MethodInterface
{
    private $method = 'createnewaddress';

    public function execute()
    {
        return $this->getClient()->execute($this->method);
    }
}