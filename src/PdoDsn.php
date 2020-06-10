<?php


namespace MiroslavSapic\DB;


use MiroslavSapic\DB\Interfaces\Dsn;

final class PdoDsn implements Dsn
{
    private string $dsn;
    private ?string $username;
    private ?string $password;
    private array $options;

    public function __construct(string $dsnString, ?string $username = null, ?string $password = null, array $options = [])
    {
        $this->dsn = $dsnString;
        $this->username = $username;
        $this->password = $password;
        $this->options = $options;
    }

    public function getDsn(): string
    {
        return $this->dsn;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}