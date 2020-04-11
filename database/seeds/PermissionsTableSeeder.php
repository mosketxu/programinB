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
        // Admin (en realidad super admin)
        // $admin = Role::create(['name' => 'Admin']);
        // $admin->givePermissionTo(Permission::all());
        // $user = User::find(1); //admin
        // $user->assignRole('Admin');

        // Guest
        // $guest = Role::create(['name' => 'Guest']);
        // $guest->givePermissionTo(Permission::all());
        // $user = User::find(2); //guest
        // $user->assignRole('Guest');
        
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

        // empresas
        // Permission::create(['name' => 'empresas.index']);
        // Permission::create(['name' => 'empresas.edit']);
        // Permission::create(['name' => 'empresas.show']);
        // Permission::create(['name' => 'empresas.create']);
        // Permission::create(['name' => 'empresas.destroy']);

        // contactos
        // Permission::create(['name' => 'contactos.index']);
        // Permission::create(['name' => 'contactos.edit']);
        // Permission::create(['name' => 'contactos.show']);
        // Permission::create(['name' => 'contactos.create']);
        // Permission::create(['name' => 'contactos.destroy']);

        // empresacontactos
        // Permission::create(['name' => 'empresacontactos.index']);
        // Permission::create(['name' => 'empresacontactos.edit']);
        // Permission::create(['name' => 'empresacontactos.show']);
        // Permission::create(['name' => 'empresacontactos.create']);
        // Permission::create(['name' => 'empresacontactos.destroy']);

        // pus
        // Permission::create(['name' => 'pus.index']);
        // Permission::create(['name' => 'pus.edit']);
        // Permission::create(['name' => 'pus.show']);
        // Permission::create(['name' => 'pus.create']);
        // Permission::create(['name' => 'pus.destroy']);

        // proveedores
        // Permission::create(['name' => 'proveedores.index']);
        // Permission::create(['name' => 'proveedores.edit']);
        // Permission::create(['name' => 'proveedores.show']);
        // Permission::create(['name' => 'proveedores.create']);
        // Permission::create(['name' => 'proveedores.destroy']);

        // contas
        Permission::create(['name' => 'contas.index']);
        Permission::create(['name' => 'contas.edit']);
        Permission::create(['name' => 'contas.show']);
        Permission::create(['name' => 'contas.create']);
        Permission::create(['name' => 'contas.destroy']);

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
