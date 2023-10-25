
{{-- // Muhammad Dhafa Ramadhani - 6706223068 - 4604 --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('infoPengguna') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('user.updateUser', $user->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="flex flex-col space-y-4">
                            <div class="flex items-start">
                                <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Full Name</div>
                                <div><input type="text" name="fullName" value="{{ $user->fullName }}" class="bg-slate-500 border rounded-md p-1"></div>
                            </div>
                            <div class="flex items-start">
                                <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Email</div>
                                <div><input type="email" name="email" value="{{ $user->email }}" class="bg-slate-500 border rounded-md p-1"></div>
                            </div>
                            <div class="flex items-start">
                                <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Username</div>
                                <div>: {{ $user->username }}</div>
                            </div>
                            <div class="flex items-start">
                                <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Address</div>
                                <div><textarea name="address" class="bg-slate-500 border rounded-md p-1">{{ $user->address }}</textarea></div>
                            </div>
                            <div class="flex items-start">
                                <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Birthdate</div>
                                <div><input type="date" name="birthdate" value="{{ $user->birthdate }}" class="bg-slate-500 border rounded-md p-1"></div>
                            </div>
                            <div class="flex items-start">
                                <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Phone Number</div>
                                <div><input type="text" name="phoneNumber" value="{{ $user->phoneNumber }}" class="bg-slate-500 border rounded-md p-1"></div>
                            </div>
                            <div class="flex items-start">
                                <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Religion</div>
                                <div>: {{ $user->agama }}</div>
                            </div>
                            <div class="flex items-start">
                                <div class="font-medium text-gray-500 dark:text-gray-400 w-1/4">Gender</div>
                                <div>
                                    @if($user->jenis_kelamin == 0)
                                    <span>: Pria</span>
                                    @else 
                                    <span>: Wanita</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            {{-- <a  onclick="" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('user.daftarPengguna') }}">
                                {{ __('Back To daftar pengguna') }}
                            </a> --}}
                        
                            <x-primary-button class="ml-4">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                        {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Update</button> --}}
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

