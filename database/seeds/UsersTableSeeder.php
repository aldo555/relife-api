<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
            $user = factory(App\User::class)->make([
                'password' => Hash::make('*dasfas*'),
            ]);
            $user->save();
        }
    }
}
