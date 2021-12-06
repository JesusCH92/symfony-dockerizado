<?php

declare(strict_types=1);

namespace App\Common\Infrastructure\Framework;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

abstract class Doctrine
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    protected function entityManager(): EntityManagerInterface
    {
        return $this->em;
    }

    protected function repository(string $entityClassName): ObjectRepository
    {
        return $this->em->getRepository($entityClassName);
    }
}
