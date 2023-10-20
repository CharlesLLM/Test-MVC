<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un film</title>
</head>
<body>
    <h1 class="text-xl text-center mt-20">Ajouter un film</h1>

    <div class="text-center">
        <form action="" method="post">
            <div class="my-4">
                <label for="title">Titre</label>
                <input class="border-2" type="text" name="title" id="title">
            </div>
            <div class="my-4">
                <label for="film-maker">Réalisateur</label>
                <input class="border-2" type="text" name="film-maker" id="film-maker">
            </div>
            <div class="my-4">
                <label for="synopsis">Synopsis</label>
                <input class="border-2" type="text" name="synopsis" id="synopsis">
            </div>
            <div class="my-4">
                <label for="gender">Genre</label>
                <input class="border-2" type="text" name="gender" id="gender">
            </div>
            <div class="my-4">
                <label for="scenarist">Scénariste</label>
                <input class="border-2" type="text" name="scenarist" id="scenarist">
            </div>
            <div class="my-4">
                <label for="production-society">Société de production</label>
                <input class="border-2" type="text" name="production-society" id="production-society">
            </div>
            <div class="my-4">
                <label for="release-year">Année de sortie</label>
                <input class="border-2" type="number" name="release-year" id="release-year">
            </div>
            <div class="relative">
                <button class="shadow bg-blue-700 focus:shadow-outline focus:outline-none text-white py-2 px-4 rounded mr-4" type="submit" name="submit">Ajouter</button>
            </div>
        </form>
        <a href="/test-mvc/movie/index" class="text-base md:text-sm text-blue-600 font-bold no-underline hover:underline"><span class="text-base text-blue-600 font-bold">&lt;</span> Retour</a>
    </div>
</body>
</html>
