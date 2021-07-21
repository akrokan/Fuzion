<x-dashboard-layout>

    <table class="md:mx-auto md:w-2/3 table-fixed shadow-lg bg-white">
        <thead>
            <tr class="bg-blue-100 text-left">
                <td class="px-2 py-2">Name</td>
                <td class="px-2 py-2">Role</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)          
            <tr>
                <td class="px-2 py-2">{{ $user->name }}</td>
                <td class="px-2 py-2"></<td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-dashboard-layout>