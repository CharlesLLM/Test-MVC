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
                    <h3 class="font-normal px-2 py-3 leading-tight">Films</h3>
                    <div class="w-full">
                        <?php foreach ($movies as $movie) { ?>
                            <div class="flex cursor-pointer my-1 hover:bg-blue-lightest rounded">
                                <div class="w-8 h-10 text-center py-1">
                                    <p class="text-3xl p-0 text-grey-dark">&bull;</p>
                                </div>
                                <div class="w-4/5 h-1000 py-3 px-1">
                                    <a href="<?= "/test-mvc/movie/view/".$movie->getId() ?>" class="hover:text-blue-dark"><?= $movie->getTitle() ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>