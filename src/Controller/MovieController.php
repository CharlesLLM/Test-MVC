<?php

require_once('src/Entity/Movie.php');

function index() {
    require_once('src/Entity/User.php');
    $movies = Movie::findMovies();
    
    if (isset($_SESSION['user'])) {
        $message = "Connecté en tant que".$_SESSION['user'];
    }

    require_once('views/movie/index.php');
}

function view(string $id) {
    if (is_numeric($id)) {
        if (Movie::findMovie(intval($id))) {
            $movie = Movie::findMovie(intval($id));
            $movies = Movie::findMovies();
            require_once('views/movie/view.php');
            
            if (isset($_POST['submit'])) {
                $movie->setTitle($_POST['title'])
                    ->setFilmMaker($_POST['film-maker'])
                    ->setSynopsis($_POST['synopsis'])
                    ->setGender($_POST['gender'])
                    ->setScenarist($_POST['scenarist'])
                    ->setProductionSociety($_POST['production-society'])
                    ->setReleaseYear($_POST['release-year']);
                Movie::update($movie);
                header("Location: /test-mvc/movie/view/{$id}");
            }
        } else {
            header('Location: /test-mvc/movie/index');
        }
    }
}

function create() {
    if (isset($_POST['submit'])) {
        $movie = new Movie();
        $movie->setTitle($_POST['title'])
            ->setFilmMaker($_POST['film-maker'])
            ->setSynopsis($_POST['synopsis'])
            ->setGender($_POST['gender'])
            ->setScenarist($_POST['scenarist'])
            ->setProductionSociety($_POST['production-society'])
            ->setReleaseYear($_POST['release-year']);
        $movie = Movie::add($movie);
        header("Location: /test-mvc/movie/view/{$movie->getId()}");
    }

    require_once('views/movie/new.php');
}

function delete(int $id) {
    if (Movie::findMovie($id)) {
        Movie::delete($id);
    }

    header('Location: /test-mvc/movie/index');
}
