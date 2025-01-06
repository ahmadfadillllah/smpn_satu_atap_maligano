<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function insert(Request $request)
    {

        $request->validate([
            'nikname' => 'required|string|max:255|unique:users,nikname',
            'email' => 'required|email|max:255|unique:users,email',
        ], [
            // Pesan error custom
            'nikname.required' => 'NIK Name harus diisi',
            'nikname.unique' => 'NIK Name sudah digunakan',
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Harap masukkan alamat email yang valid',
            'email.unique' => 'Email sudah digunakan',
        ]);


        try {
            User::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'name' => $request->name,
                'nikname' => $request->nikname,
                'email' => $request->email,
                'password' => Hash::make('12345'),
                'role' => $request->role,
                ]);

            return redirect()->back()->with('success','User berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','User gagal ditambahkan');
        }

    }

    public function resetPassword($id)
    {
        $user = User::where('id', $id)->first();
        try {
            User::where('id', $id)->update([
                'password' => Hash::make('12345'),
            ]);

            return redirect()->back()->with('success', 'Reset password berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Reset password gagal...\n' . $th->getMessage()));
        }
    }

    public function statusEnabled($id)
    {
        $user = User::where('id', $id)->first();

        try {

            if($user->statusenabled == true){

                User::where('id', $id)->update([
                    'statusenabled' => false,
                    'remember_token' => null,
                ]);

            }else{
                User::where('id', $id)->update([
                    'statusenabled' => true,
                ]);
            }

            return redirect()->back()->with('success', 'Ubah status berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Ubah status gagal...\n' . $th->getMessage()));
        }
    }
}
