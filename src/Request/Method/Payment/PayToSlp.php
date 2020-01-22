<?php

namespace Electrum\Request\Method\Payment;

use Electrum\Request\AbstractMethod;
use Electrum\Request\MethodInterface;

/**
 * Class PayToSlp
 *
 * @package Electrum\Request\Method\Payment
 */
class PayToSlp extends AbstractMethod implements MethodInterface
{
    /**
     * @var string
     */
    private $method = 'payto_slp';

    /**
     * @var string
     */
    private $tokenId = '';

    /**
     * @var string
     */
    private $destinationSlp = '';

    /**
     * @var string
     */
    private $amountSlp = '!';

    /**
     * @param array $optional
     *
     * @return string|null
     * @throws \Electrum\Request\Exception\BadRequestException
     * @throws \Electrum\Response\Exception\ElectrumResponseException
     */
    public function execute(array $optional = [])
    {
        $data = $this->getClient()->execute($this->method, array_merge([
            'token_id'        => $this->getTokenId(),
            'destination_slp' => $this->getDestinationSlp(),
            'amount_slp'      => $this->getAmountSlp()
        ], $optional));

        return $data['hex'];
    }

    /**
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * @param string $tokenId
     * @return PayToSlp
     */
    public function setTokenId($tokenId)
    {
        $this->tokenId = $tokenId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationSlp()
    {
        return $this->destinationSlp;
    }

    /**
     * @param string $destinationSlp
     * @return PayToSlp
     */
    public function setDestinationSlp($destinationSlp)
    {
        $this->destinationSlp = $destinationSlp;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmountSlp()
    {
        return $this->amountSlp;
    }

    /**
     * @param string $amountSlp
     * @return PayToSlp
     */
    public function setAmountSlp($amountSlp)
    {
        $this->amountSlp = $amountSlp;
        return $this;
    }
}