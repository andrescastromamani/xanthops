<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'lector']);

        Permission::create(['name' => 'users.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'users.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'layouts'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'widgets'])->syncRoles([$role1,$role2]);

    }
}
