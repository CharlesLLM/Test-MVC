<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion</title>
</head>
<body>
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div class="w-72">
                        <h1 class="text-2xl font-semibold">Formulaire de connexion</h1>
                    </div>
                    <?php if (isset($error)) { ?>
                        <div role="alert">
                            <div class="border border-l-4 border-red-400 rounded bg-red-100 px-4 py-3 mt-4 text-red-700">
                                <p><?= $error ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <div>
                        <form action="" method="post" class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="relative">
                                <input autocomplete="off" id="username" name="username" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Nom d'utilisateur" />
                                <label for="username" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Nom d'utilisateur</label>
                            </div>
                            <div class="relative">
                                <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Mot de passe"/>
                                <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Mot de passe</label>
                            </div>
                            <div class="relative">
                                <button class="bg-blue-500 text-white rounded-md px-4 py-2" type="submit" name="submit">Se connecter</button>
                            </div>
                        </form>
                        <p>Pas de compte ? <a href="/test-mvc/user/register" class="text-blue-500 underline">En créer un</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
