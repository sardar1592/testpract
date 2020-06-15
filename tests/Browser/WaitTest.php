<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class WaitTest extends DuskTestCase
{

  use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {

        factory(User::class)->create();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/home')
                    ->assertSee('Dashboard');
        });
    }
}
