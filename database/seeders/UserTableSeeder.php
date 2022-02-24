<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email'    => 'manager@manager.com',
                'password' => bcrypt( 'password' ),//password
                'emp_no'   => 110039,
            ],
            [
                'email'    => 'employee@employee.com',
                'password' => bcrypt( 'password' ),//password
                'emp_no'   => 10001,
            ],
        ];

        User::insert( $users );
    }
}
