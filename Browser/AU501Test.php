<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AU501Test extends DuskTestCase
{
    //Password Reset
    public static function testAu501(Browser $browser): void
    {
        $user = [ 'email' => "sbtiqui+acc@gmail.com",
                  'password' => "Testonly1!",
            ]; 
          
        // $this->browse(function ($browser) use ($user) {
        $browser->visit('/')
                ->press('#topnav .menu-sign-in')
                ->type('input#login-email', $user['email'])
                ->type('input#login-pw', $user['password'])
                ->press('.btn-sign-in')
                ->pause(5000)
                ->press("[class] [class='flex items-center gap-2 text-\[12px\] text-zinc-600 md\:text-black']:nth-of-type(3)")
                ->pause(3000)
                ->press(".md\:grid-cols-3.pb-2.sm\:grid-cols-2.w-\[84vw\] > a:nth-of-type(6)")
                ->type("input[name='oldPassword']", $user['password'])
                ->type("input[name='password']", 'Testonly2!')
                ->press("[type='submit']")
                ->pause(5000);
        // });
    }
}
