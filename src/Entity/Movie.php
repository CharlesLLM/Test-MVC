<?php

require_once('src/connection.php');

final class Movie
{
    private int $id;
    private string $title;
    private string $filmMaker;
    private string $synopsis;
    private string $gender;
    private string $scenarist;
    private string $productionSociety;
    private int $releaseYear;
    private int $userId;

    public function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
    
    public function getFilmMaker(): string
    {
        return $this->filmMaker;
    }
    public function setFilmMaker(string $filmMaker): self
    {
        $this->filmMaker = $filmMaker;

        return $this;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }
    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getGender(): string
    {
        return $this->gender;
    }
    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getScenarist(): string
    {
        return $this->scenarist;
    }
    public function setScenarist(string $scenarist): self
    {
        $this->scenarist = $scenarist;

        return $this;
    }

    public function getProductionSociety(): string
    {
        return $this->productionSociety;
    }
    public function setProductionSociety(string $productionSociety): self
    {
        $this->productionSociety = $productionSociety;

        return $this;
    }

    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }
    public function setReleaseYear(int $releaseYear): self
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function __toString(): string
    {
        return $this->title;
    }

    public static function findMovies(): array
    {
        try {
            require_once('src/connection.php');
            $db = connection();

            $statement = $db->prepare('SELECT movie.* FROM movie, user WHERE user.id = movie.userId AND user.username = :username');            
            $statement->bindValue(':username', $_SESSION['user'], PDO::PARAM_STR);
            $statement->execute();
            $movies = $statement->fetchAll(PDO::FETCH_CLASS, 'Movie');

            return $movies;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function findMovie(int $id): self|null
    {
        try {
            require_once('src/connection.php');
            $db = connection();

            $statement = $db->prepare('SELECT movie.* FROM movie, user WHERE movie.id = :id AND user.id = movie.userId AND user.username = :username');            
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->bindValue(':username', $_SESSION['user'], PDO::PARAM_STR);
            $statement->execute();
            $movie = $statement->fetchObject('Movie');
            if ($movie === false) {
                $movie = null;
            }

            return isset($movie) ? $movie : null;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function add(self $movie): self
    {
        try {
            $db = connection();

            $statement = $db->prepare('INSERT INTO movie (title, filmMaker, synopsis, gender, scenarist, productionSociety, releaseYear, userId) VALUES (:title, :filmMaker, :synopsis, :gender, :scenarist, :productionSociety, :releaseYear, :userId)');
            $statement->bindValue(':title', $movie->getTitle(), PDO::PARAM_STR);
            $statement->bindValue(':filmMaker', $movie->getFilmMaker(), PDO::PARAM_STR);
            $statement->bindValue(':synopsis', $movie->getSynopsis(), PDO::PARAM_STR);
            $statement->bindValue(':gender', $movie->getGender(), PDO::PARAM_STR);
            $statement->bindValue(':scenarist', $movie->getScenarist(), PDO::PARAM_STR);
            $statement->bindValue(':productionSociety', $movie->getProductionSociety(), PDO::PARAM_STR);
            $statement->bindValue(':releaseYear', $movie->getReleaseYear(), PDO::PARAM_INT);
            $statement->bindValue(':userId', $movie->getUserId(), PDO::PARAM_INT);
            $statement->execute();
            $movie->id = $db->lastInsertId();

            return $movie;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function update(self $movie): self
    {
        try {
            $db = connection();

            $statement = $db->prepare('UPDATE movie SET title = :title, filmMaker = :filmMaker, synopsis = :synopsis, gender = :gender, scenarist = :scenarist, productionSociety = :productionSociety, releaseYear = :releaseYear WHERE id = :id');
            $statement->bindValue(':title', $movie->getTitle(), PDO::PARAM_STR);
            $statement->bindValue(':filmMaker', $movie->getFilmMaker(), PDO::PARAM_STR);
            $statement->bindValue(':synopsis', $movie->getSynopsis(), PDO::PARAM_STR);
            $statement->bindValue(':gender', $movie->getGender(), PDO::PARAM_STR);
            $statement->bindValue(':scenarist', $movie->getScenarist(), PDO::PARAM_STR);
            $statement->bindValue(':productionSociety', $movie->getProductionSociety(), PDO::PARAM_STR);
            $statement->bindValue(':releaseYear', $movie->getReleaseYear(), PDO::PARAM_INT);
            $statement->bindValue(':id', $movie->getId(), PDO::PARAM_INT);
            $statement->execute();

            return $movie;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function delete(int $id): void
    {
        try {
            $db = connection();

            $statement = $db->prepare('DELETE FROM movie WHERE id = :id');
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
