<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 24,
                'name' => 'Gerardo Belot',
                'email' => 'gbelot2003@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PHqpwado63ykPfVuy0VhT.WZlh6u9A.gr6oEPyLMtg8JZnOveshGm',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'profile-photos/CtsJPVXhOfybJupfgqI1MG23479am1gqgEqpg7Di.png',
                'created_at' => '2022-02-02 07:31:35',
                'updated_at' => '2022-02-02 07:52:11',
            ),
        ));


    }
}
