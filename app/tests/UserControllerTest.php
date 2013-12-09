<?php

class UserControllerTest extends TestCase {

    public function testShouldGetLoginFrom()
    {
        Confide::shouldReceive('user')
            ->andReturn(null)
            ->once();

        Config::shouldReceive('get')
            ->with('confide::login_form')
            ->once()
            ->andReturn('user.login');

        View::shouldReceive('make')
            ->with('user.login');

        View::shouldReceive('make')
            ->with('layouts.master');

        $this->call('GET', 'user/login');

        $this->assertViewHasAll(array());
    }

    public function testShouldGetLoginFormRedirectIfLogged()
    {
        $user = new User;
        $user->username = 'dummy';
        $user->email = 'dummy@dummy.com';

        Confide::shouldReceive('user')->once()->andReturn($user);

        $this->call('GET', 'user/login');

        $this->assertRedirectedTo('/');
    }

    public function testDoLoginSuccessful()
    {
        Config::shouldReceive('get')
            ->with('confide::signup_confirm')
            ->once()
            ->andReturn(false);

        Confide::shouldReceive('logAttempt')
            ->andReturn(true)
            ->once();

        $this->call('POST', 'user/login', array('email' => 'dummy@dummy.com'));

        $this->assertRedirectedTo('/');
    }

    public function testLogout()
    {
        Confide::shouldReceive('logout')->once();

        $this->call('GET', 'user/logout');

        $this->assertRedirectedTo('/');
    }

}