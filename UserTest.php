<?php

namespace Login\classes;

use PHPUnit\Framework\TestCase;
use Login\classes\Database;
use Login\classes\User;

class UserTest extends TestCase {
    private $username;
    private $db;

    public function testRegisterUser(): void {
        // Test successful registration
        $this->assertTrue($this->user->registerUser('Yasir', 'Auro'));
    
        // Test registration with existing username (should fail)
        $this->assertFalse($this->user->registerUser('Yasir', 'Aura'));
    }
    

    public function testLoginUser(): void {
        
        $this->assertTrue($this->user->loginUser('Yasir', 'G'));

        
        $this->assertFalse($this->user->loginUser('Yasir', 'T'));

        
        $this->assertFalse($this->user->loginUser('pop', '5'));
    }

    public function testIsLoggedin(): void {
        
        $this->assertFalse($this->user->isLoggedin());

    
        $this->user->loginUser('Ark', 'Parry');
        $this->assertTrue($this->user->isLoggedin());
    }

    public function testLogoutUser()
        {
        
            $this->username->Logout();

            $isDeleted = (session_status() == PHP_SESSION_NONE && empty(session_id()));
            $this->assertTrue($isDeleted);
        }
      
}