<nav class="border-gray-200 relative z-20 shadow-lg bg-gradient-to-b from-blue-200 to-transparent dark:from-blue-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-transparent bg-gradient-to-br from-purple-500 to-pink-500 bg-clip-text">MVC - Laravel</span>
    </a>
    @if(Auth::user())
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full shadow-xl" src="{{Auth::user()->image ? Auth::user()->image : 'https://img.freepik.com/premium-vector/man-avatar-profile-picture-vector-illustration_268834-538.jpg'}}" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none divide-y divide-gray-100 rounded-lg shadow-xl dark:divide-gray-600 bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-pink-600 hover:text-pink-500">{{Auth::user()->name}}</span>
            <span class="block text-sm text-pink-600 truncate ">{{Auth::user()->email}}</span>
          </div>
          <ul class="py-2 text-pink-600" aria-labelledby="user-menu-button">
            @if(Auth::user()->role == 'admin')
            <li>
              <a href="{{route('dashboard')}}" class="block px-4 py-2 text-sm  hover:bg-gray-200  hover:text-pink-500">Dashboard</a>
            </li>
            @endif
            <li>
              <a href="{{route('profile.edit')}}" class="block px-4 py-2 text-sm  hover:bg-gray-200  hover:text-pink-500">Settings</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <a href="route('logout')" onclick="event.preventDefault();
                this.closest('form').submit();" class="block px-4 py-2 text-sm  hover:bg-gray-200  hover:text-pink-500">Sign out</a>
                </form>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    @endif
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 text-pink-300">
        <li>
          <a href="{{url('/')}}" class="block py-2 px-3 text-pink-300 rounded md:p-0 hover:text-pink-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-pink-500 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-pink-500 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Post</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-pink-500 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
        @if(!Auth::check())
        <li>
            <a href="{{route('register')}}" class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-pink-500 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Signup</a>
          </li>

        <li>
            <a href="{{route('login')}}" class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-pink-500 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Signin</a>
        </li>
        @endif
      </ul>
    </div>
    </div>
  </nav>
