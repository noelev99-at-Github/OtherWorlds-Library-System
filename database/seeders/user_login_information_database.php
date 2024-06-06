<?php

namespace Database\Seeders;

use App\Models\loginUserInformation;
use App\Models\User;
use App\Models\userlogin;
use App\Models\userLoginInformation as ModelsUserLoginInformation;
use App\Models\UserLoginInformation as AppModelsUserLoginInformation;
use App\Models\usrlgn;
use Illuminate\Auth\Events\Login;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use UserLoginInformation;

class user_login_information_database extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function loginSeeder(Request $request)
    {
        $login = [
            [
                'username' => 'administrator',
                'Email' => 'administrator@otheroworlds.com',
                'Password' => '0001'
            ]
        ];

        foreach($login as $key => $value){
            AppModelsUserLoginInformation::create($value);
        }

    }
}
