<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un film</title>
</head>
<body>
    <div class="text-center flex flex-col items-center mt-16">
        <section class="w-full lg:w-4/5">
            <h1 class="flex items-center font-sans font-bold break-normal text-gray-700 px-2 text-xl mt-12 mb-8 lg:mt-0 md:text-2xl">Nouveau film</h1>
            <form action="" method="post" id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow-xl bg-white">
                <div class="w-full py-3 px-1">
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="title">Titre</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="title" id="title">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="film-maker">Réalisateur</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="film-maker" id="film-maker">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="synopsis">Synopsis</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="synopsis" id="synopsis">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="gender">Genre</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="gender" id="gender">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="scenarist">Scénariste</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="scenarist" id="scenarist">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="production-society">Société de production</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="production-society" id="production-society">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="release-year">Année de sortie</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="number" name="release-year" id="release-year">
                    </div>
                </div>
                <div class="pt-6 text-left">
                    <button class="shadow bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mr-4" type="submit" name="submit">Sauvegarder</button>
                    <a class="shadow bg-blue-100 focus:shadow-outline focus:outline-none text-gray-700 font-bold py-2 px-4 rounded mr-4">Supprimer</a>
                </div>
            </form>
        </section>
        <div class="w-full lg:w-4/5 text-base md:text-sm text-gray-600 p-4">
            <a href="/test-mvc/movie/index" class="text-base text-blue-600 font-bold no-underline hover:underline"><span class="text-base text-blue-600 font-bold">&lt;</span> Retour</a>
        </div>
    </div>
</body>
</html>
