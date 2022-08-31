<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        /** Banner */
        Permission::create(['name' => 'read banner']);
        Permission::create(['name' => 'create banner']);
        Permission::create(['name' => 'edit banner']);
        Permission::create(['name' => 'delete banner']);
        /** News */
        Permission::create(['name' => 'read news']);
        Permission::create(['name' => 'create news']);
        Permission::create(['name' => 'edit news']);
        Permission::create(['name' => 'delete news']);
        /** Video */
        Permission::create(['name' => 'read video']);
        Permission::create(['name' => 'create video']);
        Permission::create(['name' => 'edit video']);
        Permission::create(['name' => 'delete video']);
        /** Greeting */
        Permission::create(['name' => 'read greeting']);
        Permission::create(['name' => 'edit greeting']);
        /** Lakip */
        Permission::create(['name' => 'read lakip']);
        Permission::create(['name' => 'create lakip']);
        Permission::create(['name' => 'edit lakip']);
        Permission::create(['name' => 'delete lakip']);
        /** District Monograph */
        Permission::create(['name' => 'read district monograph']);
        Permission::create(['name' => 'edit district monograph']);
        /** Vision Mission */
        Permission::create(['name' => 'read vision mission']);
        Permission::create(['name' => 'edit vision mission']);
        /** Organizational Structure */
        Permission::create(['name' => 'read organizational structure']);
        Permission::create(['name' => 'edit organizational structure']);
        /** District Employee */
        Permission::create(['name' => 'read district employee']);
        Permission::create(['name' => 'create district employee']);
        Permission::create(['name' => 'edit district employee']);
        Permission::create(['name' => 'delete district employee']);
        /** Gallery Photo */
        Permission::create(['name' => 'read gallery photo']);
        Permission::create(['name' => 'create gallery photo']);
        Permission::create(['name' => 'edit gallery photo']);
        Permission::create(['name' => 'delete gallery photo']);
        /** Urban Village Monograph */
        Permission::create(['name' => 'read urban village monograph']);
        Permission::create(['name' => 'edit urban village monograph']);
        /** Urban Village Employee */
        Permission::create(['name' => 'read urban village employee']);
        Permission::create(['name' => 'create urban village employee']);
        Permission::create(['name' => 'edit urban village employee']);
        Permission::create(['name' => 'delete urban village employee']);
        /** Urban Village Potency */
        Permission::create(['name' => 'read urban village potency']);
        Permission::create(['name' => 'create urban village potency']);
        Permission::create(['name' => 'edit urban village potency']);
        Permission::create(['name' => 'delete urban village potency']);
        /** Service */
        Permission::create(['name' => 'read service']);
        Permission::create(['name' => 'create service']);
        Permission::create(['name' => 'edit service']);
        Permission::create(['name' => 'delete service']);
        /** Media Social */
        Permission::create(['name' => 'read media social']);
        Permission::create(['name' => 'edit media social']);
        /** Comment */
        Permission::create(['name' => 'read comment']);
        /** Role */
        Permission::create(['name' => 'read role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'delete role']);
        /** User */
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);

        //create roles and assign existing permissions
        $adminRole = Role::create(['name' => 'super-admin']);
        /** Banner */
        $adminRole->givePermissionTo('read banner');
        $adminRole->givePermissionTo('create banner');
        $adminRole->givePermissionTo('edit banner');
        $adminRole->givePermissionTo('delete banner');
        /** News */
        $adminRole->givePermissionTo('read news');
        $adminRole->givePermissionTo('create news');
        $adminRole->givePermissionTo('edit news');
        $adminRole->givePermissionTo('delete news');
        /** Video */
        $adminRole->givePermissionTo('read video');
        $adminRole->givePermissionTo('create video');
        $adminRole->givePermissionTo('edit video');
        $adminRole->givePermissionTo('delete video');
        /** Greeting */
        $adminRole->givePermissionTo('read greeting');
        $adminRole->givePermissionTo('edit greeting');
        /** Lakip */
        $adminRole->givePermissionTo('read lakip');
        $adminRole->givePermissionTo('create lakip');
        $adminRole->givePermissionTo('edit lakip');
        $adminRole->givePermissionTo('delete lakip');
        /** District Monograph */
        $adminRole->givePermissionTo('read district monograph');
        $adminRole->givePermissionTo('edit district monograph');
        /** Vision Mission */
        $adminRole->givePermissionTo('read vision mission');
        $adminRole->givePermissionTo('edit vision mission');
        /** Organizational Structure */
        $adminRole->givePermissionTo('read organizational structure');
        $adminRole->givePermissionTo('edit organizational structure');
        /** District Employee */
        $adminRole->givePermissionTo('read district employee');
        $adminRole->givePermissionTo('create district employee');
        $adminRole->givePermissionTo('edit district employee');
        $adminRole->givePermissionTo('delete district employee');
        /** Gallery Photo */
        $adminRole->givePermissionTo('read gallery photo');
        $adminRole->givePermissionTo('create gallery photo');
        $adminRole->givePermissionTo('edit gallery photo');
        $adminRole->givePermissionTo('delete gallery photo');
        /** Urban Village Monograph */
        $adminRole->givePermissionTo('read urban village monograph');
        $adminRole->givePermissionTo('edit urban village monograph');
        /** Urban Village Employee */
        $adminRole->givePermissionTo('read urban village employee');
        $adminRole->givePermissionTo('create urban village employee');
        $adminRole->givePermissionTo('edit urban village employee');
        $adminRole->givePermissionTo('delete urban village employee');
        /** Urban Village Potency */
        $adminRole->givePermissionTo('read urban village potency');
        $adminRole->givePermissionTo('create urban village potency');
        $adminRole->givePermissionTo('edit urban village potency');
        $adminRole->givePermissionTo('delete urban village potency');
        /** Service */
        $adminRole->givePermissionTo('read service');
        $adminRole->givePermissionTo('create service');
        $adminRole->givePermissionTo('edit service');
        $adminRole->givePermissionTo('delete service');
        /** Media Social */
        $adminRole->givePermissionTo('read media social');
        $adminRole->givePermissionTo('edit media social');
        /** Comment */
        $adminRole->givePermissionTo('read comment');
        /** Role */
        $adminRole->givePermissionTo('read role');
        $adminRole->givePermissionTo('create role');
        $adminRole->givePermissionTo('edit role');
        $adminRole->givePermissionTo('delete role');
        /** User */
        $adminRole->givePermissionTo('read user');
        $adminRole->givePermissionTo('create user');
        $adminRole->givePermissionTo('edit user');
        $adminRole->givePermissionTo('delete user');

        $user = User::where('id', 1)->first();
        $user->assignRole($adminRole);
    }
}
