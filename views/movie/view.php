<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $movie->getTitle() ?></title>
</head>
<body>
    <div class="w-full max-w-screen-xl mx-auto p-6">
        <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
            <div class="sm:flex sm:items-center px-2 py-4">
                <div class="flex-grow">
                    <h3 class="font-normal px-2 py-3 leading-tight"><?= $movie->getTitle() ?></h3>
                    <div class="w-full">
                        <div class="flex cursor-pointer my-1 hover:bg-blue-lightest rounded">
                            <form action="" method="post" class="w-full py-3 px-1">
                                <div class="my-4">
                                    <label for="title">Titre</label>
                                    <input class="border-2" type="text" name="title" id="title" value="<?= $movie->getTitle() ?>">
                                </div>
                                <div class="my-4">
                                    <label for="film-maker">Réalisateur</label>
                                    <input class="border-2" type="text" name="film-maker" id="film-maker" value="<?= $movie->getFilmMaker() ?>">
                                </div>
                                <div class="my-4">
                                    <label for="synopsis">Synopsis</label>
                                    <input class="border-2" type="text" name="synopsis" id="synopsis" value="<?= $movie->getSynopsis() ?>">
                                </div>
                                <div class="my-4">
                                    <label for="gender">Genre</label>
                                    <input class="border-2" type="text" name="gender" id="gender" value="<?= $movie->getGender() ?>">
                                </div>
                                <div class="my-4">
                                    <label for="scenarist">Scénariste</label>
                                    <input class="border-2" type="text" name="scenarist" id="scenarist" value="<?= $movie->getScenarist() ?>">
                                </div>
                                <div class="my-4">
                                    <label for="production-society">Société de production</label>
                                    <input class="border-2" type="text" name="production-society" id="production-society" value="<?= $movie->getProductionSociety() ?>">
                                </div>
                                <div class="my-4">
                                    <label for="release-year">Année de sortie</label>
                                    <input class="border-2" type="number" name="release-year" id="release-year" value="<?= $movie->getReleaseYear() ?>">
                                </div>
                                <div class="flex justify-around">
                                    <div class="relative">
                                        <button class="bg-blue-500 text-white rounded-md px-2 py-1" type="submit" name="submit">Modifier</button>
                                    </div>
                                    <div class="relative">
                                        <a href="<?= "/test-mvc/movie/delete/".$movie->getId() ?>" class="bg-red-500 text-white rounded-md px-2 py-1">Supprimer</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>