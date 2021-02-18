@extends('layouts/dojoapp')

@section('content')
<div class="flex flex-col p-4 md:ml-60 lg:mr-48 flex-grow bg-white">
    <img src="https://i.gyazo.com/772c45d10792d2554cb5791c4faf2dbd.png">
    <img src="https://i.gyazo.com/772c45d10792d2554cb5791c4faf2dbd.png">
    <img src="https://i.gyazo.com/772c45d10792d2554cb5791c4faf2dbd.png">
</div>
@endsection

@section('sidebar')
<div class="hidden lg:flex fixed w-48 right-0 h-full flex-col space-y-2 text-gray-400 p-4 text-sm bg-white">
    <h2 class="text-gray-800 font-bold ">ON THIS PAGE</h2>
    <h2 class="cursor-pointer">Test Item</h2>
    <h2 class="cursor-pointer">Test Item</h2>
    <h2 class="cursor-pointer">Test Item</h2>
    <h2 class="cursor-pointer">Test Item</h2>
    <h2 class="cursor-pointer">Test Item</h2>
</div>
@endsection