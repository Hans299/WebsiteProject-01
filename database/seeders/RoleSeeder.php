<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * Step 2 Buat Role dengan Laravel Ui and auth
     * dibuat role yang dibutuhkan dalam database yang akan di seeder
     */
    public function run(): void
    {
        $roles=['supervisor','admin','user'];
        foreach ($roles as $role){
            Role::create([
                'Nama_Role' => $role
            ]);
        };
    }
}
