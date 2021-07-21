<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'angga',
                'email' => 'angga@gmail.com',
                'password'=>'angga'
            ],
            [
                'name' => 'romal',
                'email' => 'romal@gmail.com',
                'password'=>'romal'
            ],
            [
                'name' => 'cucum',
                'email' => 'cucum@gmail.com',
                'password'=>'cucum'
            ],
            [
                'name' => 'adik',
                'email' => 'adik@gmail.com',
                'password'=>'adik'
            ]
        ];
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
