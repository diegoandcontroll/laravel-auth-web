@extends('layouts.root')
@section('content')
<div class="flex sm:justify-center items-center py-4 ">
    <div class="w-full px-6 py-4 shadow-2xl overflow-hidden sm:rounded-lg z-10">
        {{ $slot }}
    </div>
    <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
</div>
@endsection
