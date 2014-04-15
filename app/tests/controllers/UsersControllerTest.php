<?php

class UsersControllerTest extends TestCase {

  /**
   * A basic functional test example.
   *
   * @return void
   */
  public function testNewUserForm()
  {
    $response = $this->call('GET', '/');
    $newUserForm = array(
      'tag' => 'form',
      'attributes' => array('method' => 'POST')
    );
    $usernameInput = array (
      'tag' => 'input',
      'attributes' => array('name' => 'username')
    );
    $emailInput = array (
      'tag' => 'input',
      'attributes' => array('name' => 'email')
    );
    $passwordInput = array (
      'tag' => 'input',
      'attributes' => array('name' => 'password')
    );
    $postcodeInput = array (
      'tag' => 'input',
      'attributes' => array('name' => 'postcode')
    );
    $this->assertContains("New User", $response->getContent());
    $this->assertTag($newUserForm, $response->getContent());
    $this->assertTag($usernameInput, $response->getContent());
    $this->assertTag($emailInput, $response->getContent());
    $this->assertTag($passwordInput, $response->getContent());
    $this->assertTag($postcodeInput, $response->getContent());
  }
}