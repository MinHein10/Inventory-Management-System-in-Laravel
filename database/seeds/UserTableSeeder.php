<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminrole = Role::where('name','admin')->first();
        $managerrole = Role::where('name','manager')->first();
        $storekeeperrole = Role::where('name','storekeeper')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin10@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $manager = User::create([
            'name'=> 'Manager User',
            'email'=> 'manager10@gmail.com',
            'password' => Hash::make('manager')
        ]);

        $storekeeper = User::create([
            'name'=> 'StoreKeeper User',
            'email'=> 'storekeeper10@gmail.com',
            'password' => Hash::make('storekeeper')
        ]);

        $admin -> roles()->attach($adminrole);
        $manager -> roles()->attach($managerrole);
        $storekeeper -> roles()->attach($storekeeperrole);

    }
}
