<?php

namespace NetsCore\Configuration;

use NetsCore\Enums\ApiUrls;
use NetsCore\Enums\ClientType;
use NetsCore\Interfaces\ConfigurationInterface;

class NetsEasyConfiguration implements ConfigurationInterface
{
    protected string $clientType = ClientType::NextAccept;
    private string $username;
    private string $password;

    public function getClientType(): string
    {
        return $this->clientType;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): NetsEasyConfiguration
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): NetsEasyConfiguration
    {
        $this->password = $password;

        return $this;
    }

    public function getAuthUrl(): string
    {
        return ApiUrls::NetsEasyOAuthAuthorization;
    }
}