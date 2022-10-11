<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for fake data for customer
        $faker = Factory::create();

        //*************Role seeder*************
        $adminRole      = Role::create([
            'name'              =>  'admin',
            'display_name'      =>  'Administration',
            'description'       =>  'Administration',
            'allowed_route'     =>  'admin',
        ]);
        $supervisorRole = Role::create([
            'name'              =>  'supervisor',
            'display_name'      =>  'Supervisor',
            'description'       =>  'Supervisor',
            'allowed_route'     =>  'supervisor',
        ]);
        $clientRole    = Role::create([
            'name'               =>  'client',
            'display_name'       =>  'Client',
            'description'        =>  'Client',
            'allowed_route'      =>  'client',
        ]);
        $agentRole     = Role::create([
            'name'              =>  'agent',
            'display_name'      =>  'Agent',
            'description'       =>  'Agent',
            'allowed_route'     =>  'agent',
        ]);


        //*************User seeder******************
        //Add admin user
        $admin = User::create([
            'first_name'        =>  'Admin',
            'last_name'         =>  'System',
            'username'          =>  'admin',
            'email'             =>  'admin@extensyadesk.dev',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772008',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add supervisor user
        $supervisor = User::create([
            'first_name'        =>  'Supervisor',
            'last_name'         =>  'System',
            'username'          =>  'supervisor',
            'email'             =>  'supervisor@extensyadesk.dev',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772009',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add supervisor2 user
        $supervisor2 = User::create([
            'first_name'        =>  'Supervisor2',
            'last_name'         =>  'System2',
            'username'          =>  'supervisor2',
            'email'             =>  'supervisor2@extensyadesk.dev',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772099',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add supervisor2 user
        $supervisor3 = User::create([
            'first_name'        =>  'Supervisor3',
            'last_name'         =>  'System3',
            'username'          =>  'supervisor3',
            'email'             =>  'supervisor3@extensyadesk.dev',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772899',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add client user

        $client = User::create([
            'first_name'        =>  'Client',
            'last_name'         =>  'System',
            'username'          =>  'client',
            'email'             =>  'client@extensyadesk.dev',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772010',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add agent user
        $agent = User::create([
            'first_name'        =>  'Agent',
            'last_name'         =>  'System',
            'username'          =>  'agent',
            'email'             =>  'agent@extensyadesk.dev',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772011',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);


        //Add role for admin
        $admin->attachRole($adminRole);
        //Add role for supervisor
        $supervisor->attachRole($supervisorRole);
        //Add role for supervisor2
        $supervisor2->attachRole($supervisorRole);
        //Add role for supervisor3
        $supervisor3->attachRole($supervisorRole);
        //Add role for client
        $client->attachRole($clientRole);
        //Add role for agent
        $agent->attachRole($agentRole);
    }
}
