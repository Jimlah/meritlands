@extends('layouts.auth')

@section('content')
    <section class="h-full mt-10">
        <div class="mx-auto max-w-sm w-full flex flex-col space-y-5 p-5 items-center shadow-md dark:bg-gray-800 rounded-lg">
            <h2 class="font-extrabold text-gray-900 dark:text-gray-50 uppercase text-4xl">
                Login
            </h2>
            <form action="{{ route('login.check') }}" method="POST"
                class="flex flex-col justify-center items-center h-full w-full space-y-4">
                @csrf
                <x-input name="email" label="Email" type="email" placeholder="Email" :error="$errors" />
                <x-input name="password" label="Password" type="password" placeholder="Password" :error="$errors" />
                <div class="flex justify-start space-x-4 items-center w-full">
                    <input type="checkbox" name="remember" id="">
                    <label for="remember" class="text-gray-900 dark:text-gray-50" value="true">Remember me</label>
                </div>
                <div class="w-full">
                    <x-submit-button name="Login" />
                </div>
            </form>
            <div class="text-sm flex justify-between w-full">
                <a href="{{ route('register.create') }}" class="text-gray-500 dark:text-gray-200 hover:text-gray-500">
                    Don't have an account?
                </a>
                <a href="{{ route('register.create') }}" class="text-gray-500 dark:text-gray-200 hover:text-gray-500">
                    Forget your password?
                </a>
            </div>
        </div>
        </div>
    </section>
@endsection()
