<?php

namespace Admin\Hw2\Users;

abstract class User
{
    private string $Name;
    private string $Email;
    private string $Password;

    public function __construct(string $Name, string $Email, string $Password)
    {
        $this->Name = $Name;
        $this->Email = $Email;
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * Access to all child objects
     * OutPut Just in Console
     */

    public function __destruct()
    {
        var_dump(get_object_vars($this));
    }
}