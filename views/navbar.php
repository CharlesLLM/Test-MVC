<nav class="shadow-sm">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
    <div class="items-center justify-between md:flex">
      <ul class="flex flex-row font-medium rounded-lg bg-white dark:bg-gray-900 dark:border-gray-700">
        <li class="p-3">
          <p class="block py-2 pl-3 pr-4 text-blue-700 rounded bg-transparent p-0 dark:text-blue-500">Test MVC</a>
        </li>
        <?php if (isset($_SESSION['user'])) { ?>
          <li class="p-3 <?= $_SERVER['REQUEST_URI'] === '/test-mvc/movie/index' ? 'border-b-blue-700' : 'border-b-white' ?> border-y-2 border-t-white">
            <a href="/test-mvc/movie/index" class="block py-2 pl-3 pr-4 rounded bg-transparent p-0 dark:text-blue-500" aria-current="page">Films</a>
          </li>
        <?php } ?>
      </ul>
    </div>
    <div class="flex items-center">
      <ul class="flex flex-row font-medium rounded-lg bg-white dark:bg-gray-900 dark:border-gray-700 items-center">
        <?php if (isset($_SESSION['user'])) { ?>
          <li class="p-3 mr-4 underline">
            <a href="/test-mvc/user/logout">Se déconnecter</a>
          </li>
          <li class="p-3">
            <a href="/test-mvc/user/account">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-white rounded-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
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
  </div>
</nav>
