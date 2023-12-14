<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AU502Test extends DuskTestCase
{
    //Search Car  
    public static function testSearchCar(Browser $browser): void
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
                ->pause(5000);
        //});
    }

    //Favourite Location
    public static function testFavouriteCar(Browser $browser): void
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
                ->press(".hidden.lg\:block input[role='combobox']")
                ->press("div:nth-of-type(2) > .flex.flex-col.gap-\[10px\] > div:nth-of-type(2) > p[role='button']")
                ->pause(5000);
        //});
    }

    //Timeslot
    public static function testTimeslot(Browser $browser): void
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
                ->click(".hidden.lg\:block .border-b-2.border-solid.border-zinc-200.flex.flex-auto.items-center.lg\:w-fit.pb-\[13px\].w-full")
                ->click("[class] [class='flex flex-col gap-3']:nth-of-type(1) label")
                ->click("[class] [class='flex flex-col gap-3']:nth-of-type(1) ul [class='flex items-center text-\[16px\]']:nth-of-type(61)")
                ->press("[class='absolute left-\[50\%\] top-\[50px\] z-10 w-fit translate-x-\[-50\%\] bg-white px-\[50px\] py-\[40px\] shadow-lg lg\:top-\[80px\]']")
                ->pause(5000)
                ->click("[class] [class='flex flex-col gap-3']:nth-of-type(2) label")
                ->click("[class] [class='flex flex-col gap-3']:nth-of-type(2) [class='flex items-center text-\[16px\] mx-\[12px\] rounded-\[7\.5px\] bg-flexi-black-5']")
                ->press("[class='absolute left-\[50\%\] top-\[50px\] z-10 w-fit translate-x-\[-50\%\] bg-white px-\[50px\] py-\[40px\] shadow-lg lg\:top-\[80px\]']")
                ->pause(5000)
                ->press("[class='flex min-w-\[250px\] flex-col items-center justify-center gap-\[40px\]'] button")
                ->press("[class] .relative:nth-of-type(1) > div:nth-of-type(1) > .lg\:block:nth-child(3) button")
                ->pause(5000);
        // });
    }

    //Availability
    public static function testAvailabilityTimeline(Browser $browser): void
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
                ->pause(2000)
                ->click(".hidden.lg\:block .border-b-2.border-solid.border-zinc-200.flex.flex-auto.items-center.lg\:w-fit.pb-\[13px\].w-full")
                ->click("[class='mx-auto -rotate-90']")
                ->press(".react-calendar__month-view__days [type='button']:nth-of-type(8)")
                ->pause(2000)
                ->press("[class='flex min-w-\[250px\] flex-col items-center justify-center gap-\[40px\]'] button")
                ->click("#vehicleListUl > div:nth-of-type(1) [class='hidden w-\[90px\] items-center pl-1  text-center text-\[16px\] font-bold text-zinc-700 lg\:flex']")
                ->pause(5000);
        // });
    }

    //Timezone
    public static function testTimezone(Browser $browser): void
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
                ->pause(5000)
                ->value(".hidden.lg\:block input[role='combobox']", '')
                ->type(".hidden.lg\:block input[role='combobox']", 'NSW - Surry Hills - Collins Street')
                ->keys(".hidden.lg\:block input[role='combobox']", '{enter}')
                ->pause(5000);
        // });
    }

    //Filter
    public static function testFilter(Browser $browser): void
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
                ->pause(5000)
                ->press("[class] .lg\:block:nth-child(3) [class='flex w-full cursor-pointer items-center justify-between border-b-2 border-zinc-200 border-solid lg\:w-\[75px\] lg\:justify-start']")
                ->check('input#pet-friendly')
                ->pause(2000)
                ->press("[class] .lg\:block:nth-child(3) [class] button:nth-child(4)")
                ->pause(5000);
        // });
    }
}
