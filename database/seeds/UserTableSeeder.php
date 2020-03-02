<?php

use Illuminate\Database\Seeder;
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
        $role_admin = Role::where('name', 'admin')->first();
        $role_raiser  = Role::where('name', 'fundraiser')->first();
        $role_donor  = Role::where('name', 'donor')->first();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = "admin@admin.com";
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $fundraiser = new User();
        $fundraiser->name = 'Fundraiser';
        $fundraiser->email = "fundraiser@fundraiser.com";
        $fundraiser->password = bcrypt('secret');
        $fundraiser->save();
        $fundraiser->roles()->attach($role_raiser);

        $donor = new User();
        $donor->name = 'Donor';
        $donor->email = "donor@donor.com";
        $donor->password = bcrypt('secret');
        $donor->save();
        $donor->roles()->attach($role_donor);
    }
}
