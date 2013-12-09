<?php

class UserControllerTest extends TestCase {

    public function testShouldGetLogin()
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

        $this->action('GET', 'UserController@login');

        $this->assertViewHasAll(array());
    }

    public function testShouldGetLoginRedirectIfLogged()
    {
        $user = new User;
        $user->username = 'dummy';
        $user->email = 'dummy@dummy.com';

        Confide::shouldReceive('user')->once()->andReturn($user);

        $this->action('GET', 'UserController@login');

        $this->assertRedirectedTo('/');
    }

    public function testLogout()
    {
        Confide::shouldReceive('logout')->once();

        $this->action('GET', 'UserController@logout');

        $this->assertRedirectedTo('/');
    }

}