<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AU503Test extends DuskTestCase
{
    //Booking Detail 
    public static function testDetailedQuote(Browser $browser): void
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
                ->value(".hidden.lg\:block input[role='combobox']", '')
                ->type(".hidden.lg\:block input[role='combobox']", 'Mall of Asia')
                ->keys(".hidden.lg\:block input[role='combobox']", '{enter}')
                ->press('[class] .relative:nth-of-type(1) > div:nth-of-type(1) > .lg\:block:nth-child(3) button')
                ->pause(5000)
                ->press("ul#vehicleListUl > div:nth-of-type(1) .\!py-0.bg-flexi-green-1.btn-xs.capitalize.font-bold.h-\[35px\].px-\[5px\].rounded-full.text-\[12px\].text-white.w-\[95px\]")
                ->pause(2000);
        // });
    }

    //Payment Method 
    public static function testPaymentMethod(Browser $browser): void
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
                ->value(".hidden.lg\:block input[role='combobox']", '')
                ->type(".hidden.lg\:block input[role='combobox']", 'Mall of Asia')
                ->keys(".hidden.lg\:block input[role='combobox']", '{enter}')
                ->press('[class] .relative:nth-of-type(1) > div:nth-of-type(1) > .lg\:block:nth-child(3) button')
                ->pause(5000)
                ->press("[class='mt-2 hidden flex-col items-center justify-between gap-\[10px\] text-\[16px\] lg\:flex'] button")
                ->pause(3000)
                ->press("div[role='button']")
                ->press("[class] [role='button']:nth-of-type(3)")
                ->pause(2000)
                ->press("[for='update-card-modal']")
                ->pause(3000);
        // });
    }

    //Damage Cover
    public static function testDamageCover(Browser $browser): void
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
                ->value(".hidden.lg\:block input[role='combobox']", '')
                ->type(".hidden.lg\:block input[role='combobox']", 'Mall of Asia')
                ->keys(".hidden.lg\:block input[role='combobox']", '{enter}')
                ->press('[class] .relative:nth-of-type(1) > div:nth-of-type(1) > .lg\:block:nth-child(3) button')
                ->pause(5000)
                ->press("[class='mt-2 hidden flex-col items-center justify-between gap-\[10px\] text-\[16px\] lg\:flex'] button")
                ->pause(2000)
                ->press(".lg\:block.sticky.top-\[-150px\]")
                ->pause(2000);
        // });
    }

    //Promocode
    public static function testPromocode(Browser $browser): void
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
                ->value(".hidden.lg\:block input[role='combobox']", '')
                ->type(".hidden.lg\:block input[role='combobox']", 'Mall of Asia')
                ->keys(".hidden.lg\:block input[role='combobox']", '{enter}')
                ->press('[class] .relative:nth-of-type(1) > div:nth-of-type(1) > .lg\:block:nth-child(3) button')
                ->pause(5000)
                ->press("[class='mt-2 hidden flex-col items-center justify-between gap-\[10px\] text-\[16px\] lg\:flex'] button")
                ->pause(2000)
                ->type('.input.input-bordered.peer.w-full', '123qwery')
                ->press(".flex.gap-4.mb-\[30px\] > li[role='button']")
                ->pause(2000)
                ->assertSee('The selected code is invalid.');
        // });
    }

    //Promocode Details
    public static function testPromocodeDetails(Browser $browser): void
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
                ->value(".hidden.lg\:block input[role='combobox']", '')
                ->type(".hidden.lg\:block input[role='combobox']", 'Mall of Asia')
                ->keys(".hidden.lg\:block input[role='combobox']", '{enter}')
                ->press('[class] .relative:nth-of-type(1) > div:nth-of-type(1) > .lg\:block:nth-child(3) button')
                ->pause(5000)
                ->press("[class='mt-2 hidden flex-col items-center justify-between gap-\[10px\] text-\[16px\] lg\:flex'] button")
                ->pause(2000)
                ->type('.input.input-bordered.peer.w-full', 'AREVO123')
                ->press(".flex.gap-4.mb-\[30px\] > li[role='button']")
                ->pause(2000)
                ->press("[type='submit']")
                ->pause(10000)
                ->press("[class] section:nth-child(2) [class='bg-no-repeat bg-center md\:h-\[25px\] md\:w-\[25px\] h-\[20px\] w-\[20px\]']")
                ->press("a:nth-of-type(2) > span")
                ->pause(5000);
        // });
    }
}
