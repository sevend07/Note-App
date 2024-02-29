@extends('layout.main')

@section('container')

    @php
        $note = $note ?? null; 
        $date = $note ? new DateTime($note['created_at']): null;
    @endphp

    <div class="h-full rounded-lg px-8 py-4 bg-slate-100">
        <form action="" class="flex flex-col h-full">
            <input type="text" placeholder="Judul" value="{{ $note ? $note->title : ""}}" class="bg-transparent border-none outline-none text-3xl italic w-full my-2">
            <input type="date" value="{{ $note ? $date->format('Y-m-d') : ""}}" class="bg-transparent border-none outline-none text-md italic my-2 flex-none w-1/5 text-gray-500">
            <textarea type="text" placeholder="Buat Catatanmu..." class="bg-transparent border-none outline-none italic w-full my-2 flex-1 resize-none">{!! $note ? str_replace(['<p>','</p>', '\n'], '&#10', $note->body) : "" !!}</textarea>
            <div class="flex justify-between space- w-full">
                <button type="button" onclick="window.location='{{ url('') }}'" class="bg-indigo-600 rounded-md px-8 py-2 w-30 text-white">
                    Back
                </button>
                <button type="button" class="bg-indigo-600 rounded-md px-8 py-2 w-30 text-white">
                    Save
                </button>
            </div>
        </form>
    </div>

@endsection
