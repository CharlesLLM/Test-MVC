<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/test-mvc/assets/password.js"></script>
    <title>Inscription</title>
</head>
<body>
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-purple-700 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div class="w-72">
                        <h1 class="text-2xl font-semibold">Formulaire d'inscription</h1>
                    </div>
                    <?php if (isset($error)) { ?>
                        <div role="alert">
                            <div class="border border-l-4 border-red-400 rounded bg-red-100 px-4 py-3 mt-4 text-red-700">
                                <p><?= $error ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="divide-y divide-gray-200">
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
                                <button class="bg-purple-500 hover:bg-purple-600 text-white rounded-md px-4 py-2" type="submit" name="submit">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Le mot de passe doit contenir:</h2>
                        <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-gray-500 dark:text-gray-400 flex-shrink-0" id="characters-number-svg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                Au moins 8 caractères
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-gray-500 dark:text-gray-400 flex-shrink-0" id="uppercase-svg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                Au moins 1 majuscule
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-gray-500 dark:text-gray-400 flex-shrink-0" id="lowercase-svg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                Au moins 1 minuscule
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-gray-500 dark:text-gray-400 flex-shrink-0" id="digit-svg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                Au moins 1 chiffre
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-gray-500 dark:text-gray-400 flex-shrink-0" id="special-char-svg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                Au moins un caractère spécial, (ex: , ! @ # ?)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function testRegex(regex, value, svg) {
            if (regex.test(value)) {
                svg.classList.remove('text-gray-500');
                svg.classList.add('text-green-500');
            } else {
                if (svg.classList.contains('text-green-500')) {
                svg.classList.remove('text-green-500');
                svg.classList.add('text-gray-500');
                }
            }
        }

        const passwordInput = document.getElementById('password');
        const regexLength = /.{8}/;
        const regexUppercase = /[A-Z]/;
        const regexLowercase = /[a-z]/;
        const regexDigit = /[0-9]/;
        const regexSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/;
        const lengthSVG = document.getElementById('characters-number-svg');
        const uppercaseSVG = document.getElementById('uppercase-svg');
        const lowercaseSVG = document.getElementById('lowercase-svg');
        const digitSVG = document.getElementById('digit-svg');
        const specialCharSVG = document.getElementById('special-char-svg');

        passwordInput.addEventListener('input', (e) => {
            testRegex(regexLength, e.target.value, lengthSVG);
            testRegex(regexUppercase, e.target.value, uppercaseSVG);
            testRegex(regexLowercase, e.target.value, lowercaseSVG);
            testRegex(regexDigit, e.target.value, digitSVG);
            testRegex(regexSpecialChar, e.target.value, specialCharSVG);
        })
    </script>
</body>
</html>
