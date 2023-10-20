<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

<nav class="shadow-sm shadow-gray-300 bg-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto text-lg">
        <div class="items-center justify-between md:flex">
            <ul class="flex flex-row font-medium rounded-lg dark:bg-gray-900 dark:border-gray-700">
                <li class="p-2">
                    <p class="block py-2 pl-3 pr-4 text-blue-700 rounded bg-transparent p-0 dark:text-blue-500">Test MVC</a>
                </li>
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="p-2 <?= $_SERVER['REQUEST_URI'] === '/test-mvc/movie/index' ? 'border-b-blue-700' : 'border-b-white' ?> border-y-2 border-t-white">
                        <a href="/test-mvc/movie/index" class="block py-2 pl-3 pr-4 rounded bg-transparent p-0 dark:text-blue-500 hover:text-blue-600" aria-current="page">Films</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <ul class="flex flex-row font-medium rounded-lg bg-white dark:bg-gray-900 dark:border-gray-700">
            <?php if (isset($_SESSION['user'])) { ?>
                <li class="p-3 mr-4 underline">
                    <a href="/test-mvc/user/logout">Se déconnecter</a>
                </li>
                <li class="p-3">
                    <a href="/test-mvc/user/account" class="flex items-center">
                        <i class="mdi mdi-account-circle text-gray-700 mdi-24px my-auto pr-2 group-hover:text-gray-700 transition-all duration-200 delay-100"></i>
                        <p><?= $_SESSION['user'] ?></p>
                    </a>
                </li>
            <?php } else { ?>
                <li class="p-3 mr-4 underline">
                    <a href="/test-mvc/user/register">S'inscrire</a>
                </li>
                <li class="p-3">
                    <a href="/test-mvc/user/login" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded dark:text-blue-500">Se connecter</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>
