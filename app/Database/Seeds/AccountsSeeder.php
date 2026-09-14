<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountsSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Gene Peralta', 'email' => 'gene.peralta@gmail.com', 'phone' => '1234-5678', 'created_at' => '2026-09-14 09:00:00'],
            ['full_name' => 'Marcus Encabo', 'email' => 'marcus.encabo@example.com', 'phone' => '2468-1012', 'created_at' => '2026-09-14 09:05:00'],
            ['full_name' => 'Sofia Martinez', 'email' => 'sofia.martinez@example.com', 'phone' => '3691-2184', 'created_at' => '2026-09-14 09:10:00'],
            ['full_name' => 'Ethan Batumbakal', 'email' => 'ethan.batumbakal@example.com', 'phone' => '555-0104', 'created_at' => '2026-09-14 09:15:00'],
            ['full_name' => 'Nora Awnor', 'email' => 'nora.awnor@example.com', 'phone' => '555-0105', 'created_at' => '2026-09-14 09:20:00'],
        ];

        $users = [
            ['username' => 'gene.peralta', 'full_name' => 'Gene Peralta', 'created_at' => '2026-09-14 09:00:00'],
            ['username' => 'marcus.encabo', 'full_name' => 'Marcus Encabo', 'created_at' => '2026-09-14 09:05:00'],
            ['username' => 'sofia.martinez', 'full_name' => 'Sofia Martinez', 'created_at' => '2026-09-14 09:10:00'],
            ['username' => 'ethan.batumbakal', 'full_name' => 'Ethan Batumbakal', 'created_at' => '2026-09-14 09:15:00'],
            ['username' => 'nora.awnor', 'full_name' => 'Nora Awnor', 'created_at' => '2026-09-14 09:20:00'],
        ];

        $this->db->table('customers')->insertBatch($customers);
        $this->db->table('users')->insertBatch($users);
    }
}