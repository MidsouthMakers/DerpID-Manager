<?php
namespace Routes;

use TestCase;
use Route;

class RoutesTest extends TestCase {

    /**
     * Testing the routes
     *
     * @return void
     */
    public function testUserRedirectedToLoginWhenNotAuthenticated()
    {
        Route::enableFilters();

        // Test user secton redirect
        $this->call('GET', 'user');

        $this->assertRedirectedTo('login');

        // Test admin section redirect
        $this->call('GET', 'admin');

        $this->assertRedirectedTo('login');
    }

}