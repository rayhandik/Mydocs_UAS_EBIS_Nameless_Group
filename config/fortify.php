<?php

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Features;

return [




    'guard' => 'web',



    'passwords' => 'users',



    'username' => 'email',

    'email' => 'email',



    'home' => RouteServiceProvider::HOME,


    'prefix' => '',

    'domain' => null,



    'middleware' => ['web'],



    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],




    'views' => true,



    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        Features::updateProfileInformation(),
        Features::updatePasswords(),
        Features::twoFactorAuthentication([
            'confirmPassword' => true,
        ]),
    ],

];