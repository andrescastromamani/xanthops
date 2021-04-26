<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Permission list*/
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.destroy']);

        Permission::create(['name' => 'layouts']);
        Permission::create(['name' => 'widgets']);

        /*Roles*/
        $admin = Role::create(['name' => 'Admin']);
        $admin->givePermissionTo([
            'users.index',
            'users.create',
            'users.edit',
            'users.destroy',
        ]);
        $lector = Role::create(['name' => 'Lector']);
        $lector->givePermissionTo([
            'users.index',
        ]);
        /*User Admin*/

        $user = User::find(1);
        $user->assignRole('Admin');
    }
}
