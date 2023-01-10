<div>
    @if ($success)
        <div class="max-auto bg-green-500 p-4 rounded-md text-white shadow-md mt-3" role="alert">
            <div class="flex items-center">
                <div class="mx-2">
                    <i class="fas fa-check"></i>
                </div>
                <div>
                    {{ $success }}
                </div>
                <button class="ml-2 text-white" wire:click="$set('success', null)">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    @endif
    <div class="flex items-center justify-center mt-10">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/2" wire:submit.prevent="createCar">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="make">
                    Make
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('make') outline-red-500 @enderror"  wire:model="make" id="make" type="text">
                @error('Make')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="model">
                    Model
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('model') outline-red-500 @enderror"  wire:model="model" id="model" type="text">
                @error('Model')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="license_plate">
                    License
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('license_plate') outline-red-500 @enderror" wire:model="license_plate" id="license_plate"  type="text">
                @error('license_plate')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="year">
                    Year
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('year') outline-red-500 @enderror" wire:model="year" id="year"  type="text">
                @error('year')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-indigo-600 hover:bg-indigo-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>
