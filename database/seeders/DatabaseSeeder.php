<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\Department;

use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        $department=[
            ['name' => 'RTO'],
            ['name' => 'PAN_CARD'],
            ['name' => 'VOTER_ID'],
            ['name' => 'RATION_CARD']
            
        ];

        foreach ($department as $row)
        {
            Department::create($row);
        }

        $roles=[
            ['name' => 'RTO'],
            ['name' => 'PAN_CARD'],
            ['name' => 'VOTER_ID'],
            ['name' => 'RATION_CARD']
        ];

        foreach ($roles as $row)
        {
            Role::create($row);
        }
    
    }
}
