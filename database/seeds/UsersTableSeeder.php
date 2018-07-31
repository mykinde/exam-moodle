<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
           // factory('App\User', 2)->create(); 
    
            App\User::create([
                'lastname' => 'Makinde',
                 'firstname' => 'Matthew',
                 'email' => 'mykinde1@gmail.com',
                 'username' => 'mykinde',
                'password' =>  Hash::make('makindepass'),
                'admin' => 1,
                'institution' => 'FAC',
                'department'  => 'DEPT',
                'gender' =>	'Gen',
                'phone'	=> '08061223390',
                'idnumber'	=> 'mykinde',
    
    
            ]);
        }
    }
}
