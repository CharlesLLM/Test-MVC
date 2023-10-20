<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Films</title>
</head>
<body>
    <div class="w-full max-w-screen-xl mx-auto p-6">
        <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
            <div class="sm:flex sm:items-center px-2 py-4">
                <div class="flex-grow">
                    <h3 class="font-bold px-2 py-3 leading-tight">Films</h3>
                    <div class="w-full">
                        <div class="mt-2 relative z-10">
                            <ul class="my-8 mx-auto max-w-xs text-left font-medium text-lg leading-none border-blue-200 divide-y divide-blue-200">
                                <?php foreach ($movies as $movie) { ?>
                                    <li>
                                        <a href="<?= "/test-mvc/movie/view/".$movie->getId() ?>" class="py-3.5 w-full flex items-center text-blue-500 hover:text-blue-700 hover:bg-blue-50">
                                            <span class="ml-5 mr-2.5 w-1 h-7 bg-blue-500 rounded-md hover:text-blue-dark"></span>
                                            <?= $movie->getTitle() ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="relative px-2 pb-3">
                            <a href="/test-mvc/movie/create" class="mt-2 py-2 pl-3 pr-4 text-white bg-blue-700 rounded dark:text-blue-500">&plus; Nouveau film</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
