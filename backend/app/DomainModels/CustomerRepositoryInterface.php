<?php

namespace App\DomainModels;

interface CustomerRepositoryInterface
{
    public function find(int $id): Customer;
}
