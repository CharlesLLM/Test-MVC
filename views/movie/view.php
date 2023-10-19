<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $movie->getTitle() ?></title>
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <div class="container w-full flex flex-wrap mx-auto px-2 lg:pt-4 mt-8">
        <div class="w-full lg:w-1/5 px-6 text-xl text-gray-800 leading-normal">
            <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>
            <div class="block lg:hidden sticky inset-0">
                <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-blue-600 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </button>
            </div>
            <div class="w-full sticky inset-0 hidden max-h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 my-2 lg:my-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20">
                <ul class="list-reset py-2 md:py-0">
                    <?php foreach ($movies as $item) { ?>
                        <li class="py-1 md:my-2 hover:bg-blue-100 lg:hover:bg-transparent border-l-4 border-transparent font-bold <?= $item->getTitle()===$movie->getTitle() ? 'border-l-blue-600' : '' ?> ">
                            <a href='/test-mvc/movie/view/<?= $item->getId() ?>' class="block pl-4 align-middle text-gray-700 no-underline hover:text-blue-600">
                                <span class="pb-1 md:pb-0 text-sm"><?= $item->getTitle() ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <section class="w-full lg:w-4/5">
            <h1 class="flex items-center font-sans font-bold break-normal text-gray-700 px-2 text-xl mt-12 mb-8 lg:mt-0 md:text-2xl"><?= $movie->getTitle() ?></h1>
            <form action="" method="post" id='section2' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                <div class="w-full py-3 px-1">
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="title">Titre</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="title" id="title" value="<?= $movie->getTitle() ?>">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="film-maker">Réalisateur</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="film-maker" id="film-maker" value="<?= $movie->getFilmMaker() ?>">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="synopsis">Synopsis</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="synopsis" id="synopsis" value="<?= $movie->getSynopsis() ?>">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="gender">Genre</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="gender" id="gender" value="<?= $movie->getGender() ?>">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="scenarist">Scénariste</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="scenarist" id="scenarist" value="<?= $movie->getScenarist() ?>">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="production-society">Société de production</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="text" name="production-society" id="production-society" value="<?= $movie->getProductionSociety() ?>">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="release-year">Année de sortie</label>
                        <input class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" type="number" name="release-year" id="release-year" value="<?= $movie->getReleaseYear() ?>">
                    </div>
                </div>
                <div class="pt-8">
                    <button class="shadow bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mr-4" type="button">Sauvegarder</button>
                    <button class="shadow bg-blue-100 focus:shadow-outline focus:outline-none text-gray-700 font-bold py-2 px-4 rounded mr-4" type="button">Supprimer</button>
                </div>
            </form>
        </section>
        <div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-600 p-4">
            <span class="text-base text-blue-600 font-bold">&lt;</span> <a href="/test-mvc/movie/index" class="text-base md:text-sm text-blue-600 font-bold no-underline hover:underline">Retour</a>
        </div>
    </div>
</body>
</html>