<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;


class LoginPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/login';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@email' => '#email',
            
        ];
    }

    public function SignIn(Browser $browser, $email)
    {

        $browser->value('@email', $email)
                ->value('@password', 'password')
                ->press('Login');

    }
}
