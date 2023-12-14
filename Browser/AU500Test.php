<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class AU500Test extends DuskTestCase
{
    //Asserting the Upcoming trips, Past Trips and Cancelled Trips
    public static function testAu500(Browser $browser): void
    { 

        //Array that store the Email and Password
        $user = [ 'email' => "sbtiqui+acc@gmail.com",
                  'password' => "Testonly1!",
            ]; 
          
        // $this->browse(function ($browser) use ($user) {
        $browser->visit('/')
                ->press('#topnav .menu-sign-in')
                ->type('input#login-email', $user['email']) //Calling array (email)
                ->type('input#login-pw', $user['password']) //Calling array (password)
                ->press('.btn-sign-in')
                ->pause(5000)
                ->press("[class] [class='flex items-center gap-2 text-\[12px\] text-zinc-600 md\:text-black']:nth-of-type(2)")
                ->pause(15000)
                ->assertSee('Upcoming Trips')
                ->assertSee('Past Trips')
                ->within(".absolute.bg-white\/70.grid.h-full.left-0.place-items-center.top-0.w-full.z-10000000", function ($browser) {
                    $browser->assertSee('CANCELLED');
                })
                ->assertPathis('/app/my-bookings');
        // });
    }
}
