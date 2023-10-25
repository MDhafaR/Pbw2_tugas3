<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;  
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     $users = User::all();
    //     return view('user.daftarPengguna', compact('users'));
    // }
    // // Muhammad Dhafa Ramadhani - 6706223068 - 4604
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // Muhammad Dhafa Ramadhani - 6706223068 - 4604
            'username' => ['required', 'string', 'max:100'],
            'fullName' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string' ,'max:1000'],
            'birthdate' => ['required', 'date'],
            'phoneNumber' => ['required', 'string', 'max:20'],
            'agama' => ['required', 'string', 'max:20'],
            'jenis_kelamin' => ['required', 'numeric' , 'in:0,1'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'fullName' => $request->fullName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'phoneNumber' => $request->phoneNumber,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.infoPengguna', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Muhammad Dhafa Ramadhani - 6706223068 - 4604
    public function edit(User $user)
    {
        return view('user.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'fullName' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'address' => ['required', 'string', 'max:1000'],
            'birthdate' => ['required', 'date'],
            'phoneNumber' => ['required', 'string', 'max:20'],
            // 'agama' => ['required', 'string', 'max:20'],
            // 'jenis_kelamin' => ['required', 'numeric', 'in:0,1'],
        ]);

        $user->update($validatedData);

        return redirect()->route('user.infoPengguna', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
