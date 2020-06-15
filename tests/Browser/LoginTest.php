<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;
use Tests\Browser\Pages\LoginPage;

class LoginTest extends DuskTestCase
{


    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */

     /** @test */

    public function a_user_can_login_with_correct_credentials()
    {

      $user = factory(User::class)->create([
            'email' => 'snkhan@gmail.com',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit(new LoginPage)
                    ->SignIn($user->email)
                    ->assertPathIs('/home')
                    ->assertSee('You are logged in!');
        });

    }
}
