<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $user;

    protected function createUser()
    {
        $this->user = factory(User::class)->create();

        return $this->user;
    }

    protected function loginUser()
    {
        $this->createUser();

        if($this->user) {
            $data = [
                'email' => $this->user['email'],
                'password' => 'password'
            ];

            $this->post('login', $data);
            return auth()->user();
        }

        return null;
    }
}
