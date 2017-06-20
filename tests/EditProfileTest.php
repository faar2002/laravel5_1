<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testEditProfile()
    {
        $user = $this->createUser();

        $this->actingAs($user)
            ->visit('account')
            ->click('Edit profile')
            ->seePageIs('account/edit-profile')
            ->seeInField('name', 'Francisco A. Aponte R.')
            ->type('Francisco Aponte', 'name')
            ->seeInField('email', 'faar2002@gmail.com')
            ->type('faar2002@hotmail.com', 'email')         
            ->press('Update Profile')
            ->seePageIs('account')
            ->see('Your profile has been updated')
            ->seeInDatabase('users', [
                'email' => 'faar2002@hotmail.com',
                'name'  => 'Francisco Aponte'
            ]);
    }

}
