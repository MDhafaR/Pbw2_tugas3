<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('daftarPengguna') }}
        </h2>

        <br>

        <x-nav-link :href="url('/koleksiTambah')" :active="request()->is('koleksiTambah*')">
            {{ __('Registrasi Koleksi') }}
        </x-nav-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full">
                        <table class="w-full border">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">ID</th>
                                    <th class="border px-4 py-2">Nama koleksi</th>
                                    <th class="border px-4 py-2">Jenis Koleksi</th>
                                    <th class="border px-4 py-2">Jumlah Koleksi</th>
                                    <th class="border px-4 py-2">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $jenisKoleksiLabels = [
                                        1 => 'Buku',
                                        2 => 'Majalah',
                                        3 => 'Cakram Digital',
                                    ];
                                @endphp
                                @foreach ($collections as $collection)
                                <tr>
                                    <td class="border px-4 py-2">{{ $collection->id }}</td>
                                    <td class="border px-4 py-2">{{ $collection->namaKoleksi }}</td>
                                    <td class="border px-4 py-2">{{ $jenisKoleksiLabels[$collection->jenisKoleksi] }}</td>
                                    <td class="border px-4 py-2">{{ $collection->jumlahKoleksi }}</td>
                                    <td class="border px-4 py-2">
                                        <div>
                                           <form action="{{route('koleksi.infoKoleksi', $collection)}}">
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