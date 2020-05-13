<?php

namespace Electrum\Request\Method\Wallet;

use Electrum\Request\AbstractMethod;
use Electrum\Request\MethodInterface;

class SlpAddToken extends AbstractMethod implements MethodInterface
{
    private $method = 'slp_add_token';

    private $tokenId = '';

    /**
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * @param string $tokenId
     * @return SlpAddToken
     */
    public function setTokenId($tokenId)
    {
        $this->tokenId = $tokenId;
        return $this;
    }

    /**
     * @throws \Electrum\Request\Exception\BadRequestException
     * @throws \Electrum\Response\Exception\ElectrumResponseException
     * @param array $optional
     * @return bool
     */
    public function execute(array $optional = [])
    {
        return $this->getClient()->execute($this->method, array_merge($optional, [
            'token_id' => $this->getTokenId(),
        ]));
    }
}