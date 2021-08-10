<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\User;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Reset cached roles and permissions
       app()[PermissionRegistrar::class]->forgetCachedPermissions();

       // create permissions
       Permission::create(['name' => 'todos']);

       // ADMIN
       $role1 = Role::create(['name' => 'admin']);
       $role1->givePermissionTo('todos');

       User::truncate();

     
       $user1 = User::create([
           'nombre' => 'Oscar',
           'apellido' => 'Roca',
           'usuario' => 'admin',            
           'password' => bcrypt('1234'),
           'telefono' => '0000000'
       ]);
       $user1->assignRole($role1);
     
    }
}
