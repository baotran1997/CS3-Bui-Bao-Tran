<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleConstant;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->id = RoleConstant::ROLE_ADMIN;
        $role->name = "ADMIN";
        $role->save();

        $role = new Role();
        $role->id = RoleConstant::ROLE_STOCK_KEEPER;
        $role->name = "STOCK KEEPER";
        $role->save();

        $role = new Role();
        $role->id = RoleConstant::ROLE_GUEST_RELATION;
        $role->name = "GUEST RELATION";
        $role->save();

        $role = new Role();
        $role->id = RoleConstant::ROLE_MERCHANDISE;
        $role->name = "MERCHANDISE";
        $role->save();


    }
}
