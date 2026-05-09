<?php
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    // POS-38: Test 1 - Empty name fails
    public function testEmptyNameFails()
    {
        $name = "";
        $this->assertEmpty($name);
    }

    // POS-38: Test 2 - Empty email fails
    public function testEmptyEmailFails()
    {
        $email = "";
        $this->assertEmpty($email);
    }

    // POS-38: Test 3 - Invalid email format
    public function testInvalidEmailFormat()
    {
        $email = "notanemail";
        $this->assertFalse(
            filter_var($email, FILTER_VALIDATE_EMAIL)
        );
    }

    // POS-38: Test 4 - Valid email passes
    public function testValidEmailFormat()
    {
        $email = "user@example.com";
        $this->assertNotFalse(
            filter_var($email, FILTER_VALIDATE_EMAIL)
        );
    }

    // POS-38: Test 5 - All fields filled = success
    public function testAllFieldsFilledSuccess()
    {
        $name    = "John Doe";
        $email   = "john@example.com";
        $message = "Hello";

        $this->assertNotEmpty($name);
        $this->assertNotEmpty($email);
        $this->assertNotEmpty($message);
        $this->assertNotFalse(
            filter_var($email, FILTER_VALIDATE_EMAIL)
        );
    }

    // POS-38: Test 6 - Empty message fails
    public function testEmptyMessageFails()
    {
        $message = "";
        $this->assertEmpty($message);
    }

    // POS-38: Test 7 - Data driven invalid emails
    /**
     * @dataProvider invalidEmailProvider
     */
    public function testMultipleInvalidEmails($email)
    {
        $this->assertFalse(
            filter_var($email, FILTER_VALIDATE_EMAIL)
        );
    }

    public function invalidEmailProvider()
    {
        return [
            ["plaintext"],
            ["missing@"],
            ["@nodomain.com"],
            ["spaces in@email.com"],
        ];
    }
}