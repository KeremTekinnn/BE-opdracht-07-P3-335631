<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leverancier Details') }}
        </h2>
    </x-slot>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Name: {{ $user->name }}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Contact Person: {{ $user->contact_person }}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Number: {{ $user->number }}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Mobile: {{ $user->mobile }}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Street: {{ $user->street_name }}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    House Number: {{ $user->house_number }}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Zip Code: {{ $user->zip_code }}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    City: {{ $user->city }}
                </p>
            </div>
        </div>
        <div class="flex justify-center mt-6 space-x-4">
            <div>
                <a href="{{ route('user.edit', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
            </div>
            <div>
                <a href="{{ route('user.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Back
                </a>
                <a href="{{ route('dashboard') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Home
                </a>
            </div>
        </div>
</x-app-layout>
