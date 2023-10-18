<?php

require_once('src/connection.php');

final class User
{
    private int $id;
    private string $username;
    private string $password;

    public function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function __toString(): string
    {
        return $this->username;
    }

    public static function findUsers(): array
    {
        try {
            $db = connection();

            $statement = $db->prepare('SELECT * FROM users');            
            $statement->execute();
            $users = $statement->fetchAll(PDO::FETCH_CLASS, 'User');

            return $users;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public static function findUser(string $username): self
    {
        try {
            $db = connection();

            $statement = $db->prepare('SELECT * FROM users WHERE username = :username');            
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->execute();
            $user = $statement->fetchObject('User');

            return $user;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function register(string $username, string $password): self
    {
        try {
            $db = connection();

            $statement = $db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
            
            $password = password_hash($password, PASSWORD_ARGON2I);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);
            $statement->execute();
            $id = $db->lastInsertId();

            return new User($id, $username, $password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
