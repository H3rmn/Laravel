<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AU588Test extends DuskTestCase
{
   public static function testAu588(Browser $browser): void
   {
       $user = [ 'email' => "mdimson.lis07+add-ons@gmail.com",
                 'password' => "Temp1234!!",
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
               ->press(".md\:grid-cols-3.pb-2.sm\:grid-cols-2.w-\[84vw\] > a:nth-of-type(4)")
               ->click('.md\:block .cursor-pointer')
               ->press(".flex.flex-col.lg\:max-w-\[500px\].w-\[84vw\]  .flex.flex-col.mb-\[100px\].md\:mt-\[50px\].mt-\[40px\] > .modal.undefined.z-\[10000\] .select.select-bordered.w-full")
               ->click(".md\:block [value='I am transferring to a competitor service']")
               ->press(".flex.flex-col.lg\:max-w-\[500px\].w-\[84vw\]  .flex.flex-col.mb-\[100px\].md\:mt-\[50px\].mt-\[40px\] > .modal.undefined.z-\[10000\] .select.select-bordered.w-full")
               ->press('.md\:block button')
               ->pause(5000);
       // });
   }
}
