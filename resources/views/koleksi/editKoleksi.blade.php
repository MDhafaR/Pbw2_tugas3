<x-guest-layout>
    <form method="POST" action="{{ route('koleksi.updateKoleksi', $collection->id) }}">
        @csrf
        {{-- Muhammad Dhafa Ramadhani - 6706223068 - 4604 --}}
        <!-- namaKoleksi -->
        <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="$collection->namaKoleksi" required autocomplete="name" />
        <!-- jenis koleksi -->
        <x-text-input id="jenisKoleksi" class="block mt-1 w-full" type="text" name="jenisKoleksi" :value="$collection->jenisKoleksi" required autocomplete="jenisKoleksi" />
        <!-- jumlah koleksi -->
        <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="text" name="jumlahKoleksi" :value="$collection->jumlahKoleksi" required autocomplete="jumlahKoleksi" />

        <div class="flex items-center justify-end mt-4">
            <a  onclick="" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('koleksi.daftarKoleksi') }}">
                {{ __('Back To daftar Koleksi') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>