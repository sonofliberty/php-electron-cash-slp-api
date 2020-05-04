<?php

namespace Electrum\Response\Model\Address;

use Electrum\Response\ResponseInterface;

class AddressConvert implements ResponseInterface
{
    /**
     * @var string
     */
    private $cashaddr = '';

    /**
     * @var string
     */
    private $legacy = '';

    /**
     * @var string
     */
    private $simpleledger = '';

    /**
     * @return string
     */
    public function getCashaddr()
    {
        return $this->cashaddr;
    }

    /**
     * @param string $cashaddr
     * @return AddressConvert
     */
    public function setCashaddr($cashaddr)
    {
        $this->cashaddr = $cashaddr;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegacy()
    {
        return $this->legacy;
    }

    /**
     * @param string $legacy
     * @return AddressConvert
     */
    public function setLegacy($legacy)
    {
        $this->legacy = $legacy;
        return $this;
    }

    /**
     * @return string
     */
    public function getSimpleledger()
    {
        return $this->simpleledger;
    }

    /**
     * @param string $simpleledger
     * @return AddressConvert
     */
    public function setSimpleledger($simpleledger)
    {
        $this->simpleledger = $simpleledger;
        return $this;
    }
}