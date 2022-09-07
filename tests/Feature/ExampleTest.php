<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);


        $response = $this->get('/admin/products');

        $response->assertStatus(302);

        $response = $this->withSession(["login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d" => 1])->get('/home');
        $response->assertStatus(200);

        $response = $this->withSession(["login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d"=> 12])->get('/admin/products');

        $response->assertStatus(200);




    }
}
