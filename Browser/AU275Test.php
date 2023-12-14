<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AU275Test extends DuskTestCase
{

    protected static $user = [
        'email' => "sbtiqui+acc@gmail.com",
        'wrongEmail' => "Test101@gmail.com",
        'password' => "Testonly1!",
        'wrongPass' => "test_101",
    ];

    //Successfull Login
    public static function testSuccessfullLogin(Browser $browser): void
    {
        // $this->browse(function ($browser) use ($user) {
        $browser->visit('/')
                ->press('#topnav .menu-sign-in')
                ->type('input#login-email', self::$user['email'])
                ->type('input#login-pw', self::$user['password'])
                ->press('.btn-sign-in')
                ->pause(5000)
                ->assertPathis('/app/booking');
        // });
    }

    //Wrong Password
    public static function testWrongPassword(Browser $browser): void
    {
        // $this->browse(function ($browser) use ($user) {
        $browser->visit('/')
                ->press('#topnav .menu-sign-in')
                ->type('input#login-email', self::$user['email'])
                ->type('input#login-pw', self::$user['wrongPass'])
                ->press('.btn-sign-in')
                ->pause(5000)
                ->assertSee('Invalid credentials.');
        // });
    }

    //Wrong Email
    public static function testWrongEmail(Browser $browser): void
    {
        // $this->browse(function ($browser) use ($user) {
        $browser->visit('/')
                ->press('#topnav .menu-sign-in')
                ->type('input#login-email', self::$user['wrongEmail'])
                ->type('input#login-pw', self::$user['password'])
                ->press('.btn-sign-in')
                ->pause(5000)
                ->assertSee('Email does not exist.');
        // });
    }
}
