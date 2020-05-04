<?php

namespace Electrum\Request\Method\Address;

use Electrum\Request\AbstractMethod;
use Electrum\Request\MethodInterface;
use Electrum\Response\Model\Address\AddressConvert as AddressConvertResponse;

/**
 * Class AddressConvert
 *
 * @package Electrum\Request\Method\Address
 */
class AddressConvert extends AbstractMethod implements MethodInterface
{
    private $method = 'addressconvert';

    private $address = '';

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return AddressConvert
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function execute(array $optional = [])
    {
        $data = $this->getClient()->execute($this->method, array_merge($optional, [
            'address' => $this->getAddress(),
        ]));

        return $this->hydrate(new AddressConvertResponse(), $data);
    }
}