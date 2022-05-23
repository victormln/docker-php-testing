<?php declare(strict_types=1);

namespace Victormln\DockerPHPTesting;

final class Id
{
    public function __construct(private readonly string $id)
    {
    }

    public function value(): string
    {
        return $this->id;
    }
}