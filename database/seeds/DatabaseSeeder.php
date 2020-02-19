<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Permissions, Roles, Admin User
        $adminUser = factory(User::class)->create([
            'name' => 'Luca',
            'surname' => 'Rossi',
            'password'  => Hash::make('secret'),
            'email' => 'admin@uihub.com',
        ]);

        $adminRole = Spatie\Permission\Models\Role::create(['name' => 'Super Admin']);

        $adminUser->assignRole($adminRole);
    }
}
