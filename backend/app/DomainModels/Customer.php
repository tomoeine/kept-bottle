<?php

namespace App\DomainModels;

class Customer
{
    /**
     * Customer constructor.
     * @param int $id
     * @param string $name
     * @param string $email
     */
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
    ) {
    }
}
