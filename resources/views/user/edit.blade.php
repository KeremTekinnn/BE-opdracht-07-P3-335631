<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Leverancier') }}
        </h2>
    </x-slot>

    <div class="p-6 bg-white border-b border-gray-200 mx-auto max-w-7xl">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mt-4 flex justify-between items-center">
                        <label for="name" class="w-1/3">{{ __('Name') }}</label>
                        <input id="name" class="block mt-1 w-2/3" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus />
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4 flex justify-between items-center">
                        <label for="contact_person" class="w-1/3">{{ __('Contact Person') }}</label>
                        <input id="contact_person" class="block mt-1 w-2/3" type="text" name="contact_person" value="{{ old('contact_person', $user->contact_person) }}" required />
                        @error('contact_person')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4 flex justify-between items-center">
                        <label for="number" class="w-1/3">{{ __('Number') }}</label>
                        <input id="number" class="block mt-1 w-2/3" type="text" name="number" value="{{ old('number', $user->number) }}" required />
                        @error('number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4 flex justify-between items-center">
                        <label for="mobile" class="w-1/3">{{ __('Mobile') }}</label>
                        <input id="mobile" class="block mt-1 w-2/3" type="text" name="mobile" value="{{ old('mobile', $user->mobile) }}" required />
                        @error('mobile')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4 flex justify-between items-center">
                        <label for="street_name" class="w-1/3">{{ __('Street') }}</label>
                        <input id="street_name" class="block mt-1 w-2/3" type="text" name="street_name" value="{{ old('street_name', $user->street_name) }}" required />
                        @error('street_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4 flex justify-between items-center">
                        <label for="house_number" class="w-1/3">{{ __('House Number') }}</label>
                        <input id="house_number" class="block mt-1 w-2/3" type="text" name="house_number" value="{{ old('house_number', $user->house_number) }}" required />
                        @error('house_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4 flex justify-between items-center">
                        <label for="zip_code" class="w-1/3">{{ __('Zip Code') }}</label>
                        <input id="zip_code" class="block mt-1 w-2/3" type="text" name="zip_code" value="{{ old('zip_code', $user->zip_code) }}" required />
                        @error('zip_code')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4 flex justify-between items-center">
                        <label for="city" class="w-1/3">{{ __('City') }}</label>
                        <input id="city" class="block mt-1 w-2/3" type="text" name="city" value="{{ old('city', $user->city) }}" required />
                        @error('city')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex justify-center items-center mt-6 space-x-4">
                        <div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Save
                            </button>
                        </div>
                        <div>
                            <a href="{{ url()->previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                                Back
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('dashboard') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Home
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
