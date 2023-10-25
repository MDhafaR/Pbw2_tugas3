<x-guest-layout>
    <form method="POST" action="{{ route('koleksi.storeKoleksi') }}">
        @csrf

        <!-- id -->
        <!-- <div>
            
            <x-input-label for="id" :value="__('Id')" />
            <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id')" required autofocus autocomplete="id" />
            <x-input-error :messages="$errors->get('id')" class="mt-2" />
        </div> -->

        <!-- namaKoleksi -->
        <div class="mt-4">
            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />
            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required autocomplete="name" />
            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
        </div>

        <!-- jumlahKoleksi -->
        <div class="mt-4">
            <x-input-label for="jenisKoleksi" :value="__('jenis Koleksi')" />
            <x-text-input id="jenisKoleksi" class="block mt-1 w-full" type="jenisKoleksi" name="jenisKoleksi" :value="old('jenisKoleksi')" required autocomplete="jenisKoleksi" />
            <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
        </div>

        <!-- jumlah -->
        <div class="mt-4">
            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="jumlahKoleksi" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required autocomplete="jumlahKoleksi" />
            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('koleksi.daftarKoleksi') }}">
                <!-- {{ __('Already registered?') }} -->
                {{ __('Back To daftar Koleksi') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>