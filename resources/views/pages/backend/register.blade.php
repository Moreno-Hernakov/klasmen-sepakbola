@extends('layouts/backend/' . $layout)

@section('head')
<title>Register - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('content')
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <div class="my-auto">
                <div class="-intro-x font-large text-4xl leading-tight mt-10">
                    <b>bolakubet.com</b>
                </div>
                <div class="-intro-x mt-5 text-lg  text-opacity-70 dark:text-slate-400">
                    bolakubet.com adalah sebuah website tampilan klasmen 
                </div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
                class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign Up</h2>
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more clicks to
                    sign in to your account. Manage all your e-commerce accounts in one place</div>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block "
                            placeholder="Your Name" name="name" value="{{ old('name') }}">
                        @error('name')
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            <p class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red">
                                {{ $message }}
                            </p>
                        </label>
                        @enderror
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            <p class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red">
                                {{ $message }}
                            </p>
                        </label>
                        @enderror
                        <input type="number" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Nomor hp" name="no_hp" value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            <p class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red">
                                {{ $message }}
                            </p>
                        </label>
                        @enderror
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            <p class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red">
                                {{ $message }}
                            </p>
                        </label>
                        @enderror
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Password" name="password">
                        @error('password')
                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                            <p class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red">
                                {{ $message }}
                            </p>
                        </label>
                        @enderror
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Password Confirmation" name="password_confirmation">
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button type="submit" name="submit"
                            class="btn btn-warning py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                        <a href="/login"
                            class="btn btn-outline-warning py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign
                            in</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- END: Register Form -->
    </div>
</div>
@endsection
