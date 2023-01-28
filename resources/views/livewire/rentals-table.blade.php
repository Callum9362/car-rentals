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
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Customer</th>
            <th class="px-4 py-2">Car</th>
            <th class="px-4 py-2">Start</th>
            <th class="px-4 py-2">End</th>
            <th class="px-4 py-2"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($rentals as $rental)
            <tr class="bg-gray-100 text-center">
                <td class="px-4 py-2">
                    <a href="{{ route('rental-by-id', ['id' => $rental->id]) }}">{{ $rental->id }}</a>
                </td>
                <td class="px-4 py-2">
                    {{ $rental->customer->first_name }} {{ $rental->customer->last_name }}
                </td>
                <td class="px-4 py-2">
                    {{ $rental->car->license_plate }}
                </td>
                <td class="px-4 py-2">
                    {{ $rental->start }}
                </td>
                <td class="px-4 py-2">
                    {{ $rental->end }}
                </td>
                <td>
                    <i wire:click="delete({{$rental->id}})" class="fa-solid fa-trash-can"></i>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
