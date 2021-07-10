<?php

namespace App\Repositories;

use App\DomainModels\Customer;
use App\DomainModels\CustomerRepositoryInterface;
use App\Models\Customer as CustomerModel;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function find(int $id): Customer
    {
        $customer = CustomerModel::find($id);
        return new Customer(
            $customer->id,
            $customer->name,
            $customer->email,
        );
    }
}
