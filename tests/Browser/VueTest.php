<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class VueTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExampleComponentHasText()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertVueContains('details', 'My name is Sardar', '@example')
                    ->assertVueContains('details', 'Sardar', '@example');
        });
    }
}
