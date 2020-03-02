<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A Admin User';
        $role_admin->save();

        $role_raiser = new Role();
        $role_raiser->name = 'fundraiser';
        $role_raiser->description = 'A Fundraising User';
        $role_raiser->save();

        $role_donor = new Role();
        $role_donor->name = 'donor';
        $role_donor->description = 'A Donor User';
        $role_donor->save();
    }
}
