<div>
    <table class="table-auto w-full">
        <thead>
        <tr class="bg-gray-800 text-white">
            <th class="px-4 py-2">Make</th>
            <th class="px-4 py-2">Model</th>
            <th class="px-4 py-2">License</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr class="bg-gray-100 text-center">
                <td class="px-4 py-2">{{ $car->make }}</td>
                <td class="px-4 py-2">{{ $car->model }}</td>
                <td class="px-4 py-2">{{ $car->license_plate }}</td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>
