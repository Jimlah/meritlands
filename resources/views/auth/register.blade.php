@extends('layouts.auth')

@section('content')
    <section class="h-full mt-5">
        <div class="mx-auto max-w-sm w-full flex flex-col space-y-5 p-5 items-center shadow-md dark:bg-gray-800 rounded-lg">
            <h2 class="font-extrabold text-gray-900 dark:text-gray-50 uppercase text-4xl">
                Login
            </h2>
            <form action="{{ route('register.create') }}" method="POST"
                class="flex flex-col justify-center items-center h-full w-full space-y-4">
                @csrf
                <x-input name="firstname" label="First Name" type="text" placeholder="First Name" :error="$errors" />
                <x-input name="lastname" label="Last Name" type="text" placeholder="Last Name" :error="$errors" />
                <x-input name="email" label="Email" type="email" placeholder="Email" :error="$errors" />
                <x-input name="password" label="Password" type="password" placeholder="Password" :error="$errors" />
                <x-input name="password_confirmation" label="Confirm Password" type="password" placeholder="Password"
                    :error="$errors" />
                <div class="w-full">
                    <x-submit-button name="Register" />
                </div>
            </form>
            <div class="text-sm flex justify-between w-full">
                <a href="{{ route('register.create') }}" class="text-gray-500 dark:text-gray-200 hover:text-gray-500">
                    Already have an account?
                </a>
                <a href="{{ route('register.create') }}" class="text-gray-500 dark:text-gray-200 hover:text-gray-500">
                    Forgot password?
                </a>
            </div>
        </div>
        </div>
    </section>
@endsection()
