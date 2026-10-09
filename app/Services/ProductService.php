<?php

namespace App\Services;

class ProductService
{
    public function getProducts(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Laptop Gaming',
                'price' => 15000000,
            ],
            [
                'id' => 2,
                'name' => 'Mouse Wireless',
                'price' => 250000,
            ],
            [
                'id' => 3,
                'name' => 'Keyboard Mechanical',
                'price' => 750000,
            ],
            [
                'id' => 4,
                'name' => 'Monitor 24 Inch',
                'price' => 1800000,
            ],
        ];
    }
}