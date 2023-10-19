<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $user->getUsername() ?></title>
</head>
<body>
    <div class="w-full max-w-screen-xl mx-auto p-6">
        <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
            <div class="sm:flex sm:items-center px-2 py-4">
                <div class="flex-grow">
                    <h3 class="font-normal px-2 py-3 leading-tight">Connecté en tant que <?= $user->getUsername() ?></h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
