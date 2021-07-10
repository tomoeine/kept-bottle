<?php

namespace App\DomainModels;

class Restaurant
{
    public int $id;
    public string $name;
    public float $latitude;
    public float $longitude;

    /**
     * Restaurant constructor.
     * @param int $id
     * @param string $name
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(int $id, string $name, float $latitude, float $longitude)
    {
        $this->id = $id;
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}
