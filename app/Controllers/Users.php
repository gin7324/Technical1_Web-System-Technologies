<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'gene.peralta', 'full_name' => 'Gene Peralta', 'role' => 'Manager'],
            ['username' => 'marcus.encabo', 'full_name' => 'Marcus Encabo', 'role' => 'Cashier'],
            ['username' => 'sofia.martinez', 'full_name' => 'Sofia Martinez', 'role' => 'Cashier'],
            ['username' => 'ethan.batumbakal', 'full_name' => 'Ethan Batumbakal', 'role' => 'Inventory Clerk'],
            ['username' => 'nora.awnor', 'full_name' => 'Nora Awnor', 'role' => 'Administrator'],
        ];

        return view('users', ['users' => $users]);
    }
}