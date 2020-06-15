<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AboutUsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAbout()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/about')
                    ->assertSee('About Us');
        });
    }
}
