<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Koleksi') }}
        </h2>

        <br>

        <x-nav-link :href="url('/koleksi')" :active="request()->is('koleksi*')">
            {{ __('Back to Koleksi') }}
        </x-nav-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full">
                        <table class="w-full border">
                                @php
                                    $jenisKoleksiLabels = [
                                        1 => 'Buku',
                                        2 => 'Majalah',
                                        3 => 'Cakram Digital',
                                    ];
                                @endphp
                                <tr>
                                    <!-- <th class="border px-4 py-2">ID</th> -->
                                    <th class="border px-4 py-2">Nama koleksi</th>
                                    <td class="border px-4 py-2">{{ $collection->namaKoleksi }}</td>
                                </tr>
                                <tr>
                                    <th class="border px-4 py-2">Jenis Koleksi</th>
                                    <td class="border px-4 py-2">{{ $jenisKoleksiLabels[$collection->jenisKoleksi] }}</td>
                                </tr>
                                <tr>
                                    <th class="border px-4 py-2">Jumlah Koleksi</th>
                                    <td class="border px-4 py-2">{{ $collection->jumlahKoleksi }}</td>
                                </tr>
                                <tr>
                                    <th class="border px-4 py-2">Waktu dibuat</th>
                                    <td class="border px-4 py-2">{{ $collection->created_at }}</td>
                                </tr>
                                <tr>
                                    <th class="border px-4 py-2">Terakhir diubah</th>
                                    <td class="border px-4 py-2">{{ $collection->updated_at }}</td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>