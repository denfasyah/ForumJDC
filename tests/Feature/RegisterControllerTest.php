<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     * @return void
     */
    public function test_register()
    {
        $data = [
            'fullname' => 'Kangyann',
            'username' => 'Kangyann',
            'email' => 'dianstore00@gmail.com',
            'password' => 'Kangyann57',
            'rpassword' => 'Kangyann57',
        ];
        $response = $this->post('/register',$data);

        $response->assertOk();
    }

}
