<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
             Hi {{ Auth::user()->name }}
             <p>hello Try new things</p>
             <p>try to develop branch again<p>
             <p> New develop on way again again</p>
            </div>
        </div>
    </div>
</x-app-layout>
