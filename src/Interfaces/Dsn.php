<?php
declare(strict_types=1);


namespace MiroslavSapic\DB\Interfaces;


interface Dsn
{
    public function getDsn(): string;

    public function getUsername(): ?string;

    public function getPassword(): ?string;

    public function getOptions(): array;
}