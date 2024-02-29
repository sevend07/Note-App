@extends('layout.main')

@section('container')


<div class="flex h-full w-full">
    @if (count($notes) !== 0)
    <div class="flex flex-wrap gap-4 ">
        @foreach ($notes as $note)
            @php
                $date = new DateTime($note['created_at']);
            @endphp
            <div onclick="window.location.href='note/{{ $note->title }}'" class="flex-auto flex flex-col w-64 p-4 border border-indigo-600 gap-2">
                <p class="font-semibold text-2xl">{{ $note->title }}</p>
                <p>{{ $date->format('Y-m-d') }}</p>
                <p>{{ $note->excerpt }}</p>
            </div>
        @endforeach
        <div class="flex-auto flex justify-center items-center w-64">
            <button onclick="window.location='{{ url('note/create') }}'" class="flex justify-center items-center self-center w-16 h-16 bg-indigo-600 rounded-md text-gray-100">
                <i data-feather="plus"></i>
            </button>
        </div>
    </div>
    @else
        <div class="flex flex-col  h-full w-full justify-center items-center">
            <div class="text-center px-4 py-2 space-y-2">
                <p class="font-bold text-3xl text-gray-700">ADA KEGIATAN APA SAJA HARI INI?</p>
                <p>Catat Kegiatanmu Sekarang</p>
            </div>
            <div onclick="window.location='{{ url('note/create') }}'" class="flex justify-center items-center w-14 h-14 my-8 shadow-md shadow-slate-500 rounded-lg bg-indigo-600 text-slate-100 hover:bg-indigo-700 cursor-pointer">
                <i data-feather="plus"></i>
            </div>
        </div>
    @endif
</div>

@endsection