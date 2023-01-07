<div>
    @if ($success)
        <div class="max-auto bg-green-500 p-4 rounded-md text-white shadow-md mb-3" role="alert">
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
    <table class="table-auto w-full">
        <thead>
        <tr class="bg-gray-800 text-white">
            <th class="px-4 py-2">Make</th>
            <th class="px-4 py-2">Model</th>
            <th class="px-4 py-2">License</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr class="bg-gray-100 text-center">
                <td class="px-4 py-2">
                    {{ $car->make }}
                </td>
                <td class="px-4 py-2">
                    {{ $car->model }}
                </td>
                <td class="px-4 py-2">
                    {{ $car->license_plate }}
                </td>
                <td class="text-center">
                    <i class="fas fa-trash" wire:click="delete({{ $car->id }})"></i>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

