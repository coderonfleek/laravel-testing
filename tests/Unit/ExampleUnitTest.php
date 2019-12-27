<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testUserCreation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);   

        $this->assertEquals('Test User', $user->name);
    }
}
