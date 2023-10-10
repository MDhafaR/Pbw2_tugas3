<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('daftarPengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full">
                        <table class="w-full border">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">ID</th>
                                    <th class="border px-4 py-2">Nama Lengkap</th>
                                    <th class="border px-4 py-2">E-mail</th>
                                    <th class="border px-4 py-2">Username</th>
                                    <th class="border px-4 py-2">Alamat</th>
                                    <th class="border px-4 py-2">Nomor Telepon</th>
                                    <th class="border px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($users as $user)
                                <tr>
                                    <td class="border px-4 py-2">{{ $i++ }}</td>
                                    <td class="border px-4 py-2">{{ $user->id }}</td>
                                    <td class="border px-4 py-2">{{ $user->fullName }}</td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>
                                    <td class="border px-4 py-2">{{ $user->username }}</td>
                                    <td class="border px-4 py-2">{{ $user->address }}</td>
                                    <td class="border px-4 py-2">{{ $user->phoneNumber }}</td>
                                    <td class="border px-4 py-2">
                                        <div>
                                           <form action="{{route('user.infoPengguna', $user)}}">
                                           <button class="text-blue-500">View</button>
                                           </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>