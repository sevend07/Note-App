@extends('layout.main')

@section('container')
<div class="flex h-full justify-center items-center">
    <div class="flex flex-col justify-center items-center bg-gray-700 rounded-lg py-12 px-16 shadow-lg shadow-gray-500">
        <div class="flex justify-center items-center">
            <p class="font-bold text-white">Login</p>
        </div>
        <form action="">
            <div class="mt-6">
                <label for="" class="text-white">Username</label><br>
                <input type="text" class="text-gray-800 font-medium w-full rounded-xl mt-2 bg-slate-200 border border-slate-100 px-2 py-1">
            </div>
            <div class="mt-6">
                <label for="" class="text-white">Password</label><br>
                <input type="password" class="text-gray-800 font-medium w-full rounded-xl mt-2 outline-none bg-slate-200 border border-slate-100 px-2 py-1">
            </div>
            <div class="flex justify-end items-center mt-6">
                <button class="rounded-xl bg-indigo-600 px-4 py-2 text-white">Login</button>
            </div>
            <hr class="mt-8">
            <div class="flex justify-center items-center mt-1">
                <p class="text-white font-light">
                    Don't have an account? <a href="/register" class="text-indigo-600">Register</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection