<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    //AU275 Ticket
    public function testAu275(): void
    {
        $this->browse(function (Browser $browser) {
            AU275Test::testSuccessfullLogin($browser);
            AU275Test::testWrongPassword($browser);
            AU275Test::testWrongEmail($browser);
        });
    }
    
    //AU500 Ticket
    public function testAu500(): void
    {
        $this->browse(function (Browser $browser) {
            AU500Test::testAu500($browser);
        });
    }

    //AU501 Ticket
    public function testAu501(): void
    {
        $this->browse(function (Browser $browser) {
            AU501Test::testAu501($browser); 
        });
    }

    //AU588 Ticket
    public function testAu588(): void
    {
        $this->browse(function (Browser $browser) {
            AU588Test::testAu588($browser);
        });
    }
    
    //AU502 Ticket
    // public function testAu502(): void
    // {
    //     $this->browse(function (Browser $browser) {
    //         AU502Test::testSearchCar($browser);
    //         AU502Test::testFavouriteCar($browser);
    //         AU502Test::testTimeslot($browser);
    //         AU502Test::testAvailabilityTimeline($browser);
    //         AU502Test::testTimezone($browser);
    //         AU502Test::testFilter($browser);
    //     });
    // }

    //AU503 Ticket
    // public function testAu503(): void
    // {
    //     $this->browse(function (Browser $browser) {
    //         AU503Test::testDetailedQuote($browser);
    //         AU503Test::testPaymentMethod($browser);
    //         AU503Test::testDamageCover($browser);
    //         AU503Test::testPromocode($browser);
    //         AU503Test::testPromocodeDetails($browser);
    //     });
    // }
}
