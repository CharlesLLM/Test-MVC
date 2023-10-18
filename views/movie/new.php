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
                <button class="bg-blue-500 text-white rounded-md px-2 py-1" type="submit" name="submit">Ajouter</button>
            </div>
        </form>
    </div>
</body>
</html>