@extends('layouts.root')
@section('content')
    <x-guest-layout>
        <form method="POST" action="{{ route('handleCreate') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="name" id="name"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pink-400 focus:outline-none focus:ring-0 focus:border-pink-400 peer"
                    placeholder="" required />
                <label for="name"
                    class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-pink-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="email"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pink-400 focus:outline-none focus:ring-0 focus:border-pink-400 peer"
                    placeholder="" required />
                <label for="email"
                    class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-pink-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password" id="password"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pink-400 focus:outline-none focus:ring-0 focus:border-pink-400 peer"
                    placeholder="" required />
                <label for="password"
                    class="peer-focus:font-medium absolute text-sm text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-pink-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="repeat_password" id="repeat_password"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pink-400 focus:outline-none focus:ring-0 focus:border-pink-400 peer"
                    placeholder="" required />
                <label for="repeat_password"
                    class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-pink-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm
                    password</label>
                <x-input-error :messages="$errors->get('repeat_password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center w-full pt-4">
                <input
                    class="block w-full mb-5 text-xs text-white border border-gray-300 rounded-lg cursor-pointer bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 focus:outline-none "
                    type="file" name="image" required>
            </div>
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm  dark:text-gray-400 hover:text-white dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 ms-4"
                    type="submit">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Register
                    </span>
                </button>
            </div>
        </form>

    </x-guest-layout>

    <script>
        function displayFileName(input) {
            console.log(input.value[0]);
            const fileName = document.getElementById('selectedFileName');
            if (input.files && input.files.length > 0) {
                fileName.textContent = input.files[0].name;
                fileName.parentElement.classList.remove('hidden');
            }
        }
    </script>
@endsection
