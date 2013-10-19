<?php
class DerpAuthControllerTest extends TestCase {

    /**
     * Testing the DerpAuthController
     *
     * @return void
     */

    public function testUserIsLoggedIn()
    {
        $result = DerpAuthController::isLoggedIn();

        $this->assertFalse($result);

        Session::put('logged_in', 1);

        $result = DerpAuthController::isLoggedIn();

        $this->assertTrue($result);
    }

    public function testUserIsAdmin()
    {
        // Not logged in
        $result = DerpAuthController::isAdmin();

        $this->assertFalse($result);


        // Logged in as standard user
        Session::put('key', '12345');

        $result = DerpAuthController::isAdmin();

        $this->assertFalse($result);


        // Logged in as admin user
        Session::put('key', '123456');

        $result = DerpAuthController::isAdmin();

        $this->assertTrue($result);
    }

    public function testLogoutRedirectsToLogin()
    {
        // Logged in as standard user
        Session::put('logged_in', '1');

        $this->assertSessionHas('logged_in','1');

        $this->call('GET', 'logout');

        $this->assertRedirectedTo('login');
    }

}