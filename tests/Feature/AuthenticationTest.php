<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use phpDocumentor\Reflection\Types\Parent_;
use Tests\TestCase;

class Authentication extends TestCase
{

    protected function setUp(): void
    {
        Parent::setUp();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_view()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertViewIs('auth.register');
    }

    public function test_login_view()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function test_user_can_register()
    {

        Artisan::call('migrate');

        $faker = Factory::create();

        $response = $this->post('/register', [
            'firstname' => $faker->firstName,
            'lastname' => $faker->lastName,
            'email' => $faker->safeEmail(),
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect(route('login.view'));
        $response->assertSessionHas('message');
    }

    public function test_user_can_login()
    {
        Artisan::call('migrate');

        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect(route('home'));
    }


    public function test_user_can_logout()
    {
        Artisan::call('migrate');

        $user = User::all()->first();

        $response = $this->actingAs($user)
            ->get('/logout');


        $response->assertRedirect(route('login.view'));
    }

    /**
     * @dataProvider registerDataProvider
     *
     * */
    public function test_user_can_not_register_invalid_details($invalidData, $invalidFields)
    {
        // Artisan::call('migrate');

        $response = $this->post('/register', $invalidData);

        $response->assertSessionHasErrors($invalidFields)->assertStatus(302);
    }

    public function registerDataProvider()
    {
        $faker = Factory::create();
        // $user = User::factory()->create();

        return [
            [
                ['firstname' => $faker->firstName],
                ['lastname', 'email', 'password', 'password_confirmation'],
            ],
            [
                ['firstname' => $faker->firstName, 'lastname' => $faker->lastName, 'email' => $faker->email, 'password' => 'password', 'password_confirmation' => 'password1'],
                ['password_confirmation'],
            ],
            [
                ['firstname' => $faker->firstName, 'lastname' => $faker->lastName, 'email' => "aaaa", 'password' => 'password', 'password_confirmation' => 'password'],
                ['email'],
            ],
            // [
            //     ['firstname' => $faker->firstName, 'lastname' => $faker->lastName, 'email' => $user->email, 'password' => 'password', 'password_confirmation' => 'password'],
            //     ['email'],
            // ],
        ];
    }
}