<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin (en realidad super admin)
        // $admin = Role::create(['name' => 'Admin']);
        // $admin->givePermissionTo(Permission::all());
        // $user = User::find(1); //admin
        // $user->assignRole('Admin');

        //Guest
        // $guest = Role::create(['name' => 'Guest']);
        
        //Permission list

        // user
        // Permission::create(['name' => 'users.index']);
        // Permission::create(['name' => 'users.edit']);
        // Permission::create(['name' => 'users.show']);
        // Permission::create(['name' => 'users.create']);
        // Permission::create(['name' => 'users.destroy']);

        // role
        // Permission::create(['name' => 'roles.index']);
        // Permission::create(['name' => 'roles.edit']);
        // Permission::create(['name' => 'roles.show']);
        // Permission::create(['name' => 'roles.create']);
        // Permission::create(['name' => 'roles.destroy']);

        // permisos
        // Permission::create(['name' => 'permissions.index']);
        // Permission::create(['name' => 'permissions.edit']);
        // Permission::create(['name' => 'permissions.show']);
        // Permission::create(['name' => 'permissions.create']);
        // Permission::create(['name' => 'permissions.destroy']);

        // empresa
        // Permission::create(['name' => 'empresas.index']);
        // Permission::create(['name' => 'empresas.edit']);
        // Permission::create(['name' => 'empresas.show']);
        // Permission::create(['name' => 'empresas.create']);
        // Permission::create(['name' => 'empresas.destroy']);

        // contacto
        Permission::create(['name' => 'contactos.index']);
        Permission::create(['name' => 'contactos.edit']);
        Permission::create(['name' => 'contactos.show']);
        Permission::create(['name' => 'contactos.create']);
        Permission::create(['name' => 'contactos.destroy']);


        // $admin->givePermissionTo([
        //     'products.index',
        //     'products.edit',
        //     'products.show',
        //     'products.create',
        //     'products.destroy'
        // ]);
        //$admin->givePermissionTo('products.index');
       

        // $guest->givePermissionTo([
        //     'products.index',
        //     'products.show'
        // ]);

    }
}
