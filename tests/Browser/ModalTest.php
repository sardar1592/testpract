<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class ModalTest extends DuskTestCase
{

   use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testModalAppearsAndDisplaysModalTitle()
    {

        factory(User::Class)->create();

        $this->browse(function (Browser $browser) {

            $browser->loginAs(User::find(1))
                    ->visit('/home')
                    ->assertPathIs('/home')
                    ->press('Launch demo modal')
                    ->whenAvailable('.modal', function($modal){

                        $modal->assertSee('Modal title');

                    })->press('Close')
                     ->assertSee('Dashboard');
        });
}
}
