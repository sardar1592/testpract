<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */

    public function testAUserCanRegister()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'Sardar N Khan')
                    ->type('email', 'snkhan@gmail.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('Register')
                    ->assertPathIs('/home')
                    ->assertSee('You are logged in!')
                    ->assertSee('Sardar N Khan');         
        });
    }
}
