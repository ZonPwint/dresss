<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

//use Laravel\Jetstream\Role;
//use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $admin = new User;
        $admin->name ='Zonpwint Admin';
        $admin->email = 'admin@gmail.com' ;
        $admin->email = 'admin@gmail.com' ;
        $admin->email = 'admin@gmail.com' ;
        $admin->email_verified_at= $now;
        $admin->password= Hash::make('0000');
        $admin->created_at = $now;
        $admin->updated_at = $now;
        $admin->save();
        $admin->assignRole('admin');

        $user = new User;
        $user->name ='Zonpwint user';
        $user->email = 'user@gmail.com' ;
        $user->email_verified_at= $now;
        $user->password= Hash::make('0000');
        $user->created_at = $now;
        $user->updated_at = $now;
        $user->save();
        $user->assignRole('admin');

    }
}
