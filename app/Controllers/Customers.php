<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Gene Peralta', 'email' => 'gene.peralta@gmail.com', 'phone' => '1234-5678'],
            ['full_name' => 'Marcus Encabo', 'email' => 'marcus.encabo@example.com', 'phone' => '2468-1012'],
            ['full_name' => 'Sofia Martinez', 'email' => 'sofia.martinez@example.com', 'phone' => '3691-2184'],
            ['full_name' => 'Ethan Batumbakal', 'email' => 'ethan.batumbakal@example.com', 'phone' => '555-0104'],
            ['full_name' => 'Nora Awnor', 'email' => 'nora.awnor@example.com', 'phone' => '555-0105'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}