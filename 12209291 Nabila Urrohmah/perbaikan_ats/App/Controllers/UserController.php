<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::All();

        return ApiFormatter::sendResponse(200, true, 'Lihat semua barang', $user);
    }

    public function store(Request $request)
    {
    try {
        $this->validate($request, [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required|in:staff,admin',
        ]);

        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

        return ApiFormatter::sendResponse(201, true, 'user berhasil disimpan!', $user);
    } catch (\Throwable $th) {
        if ($th->validator->error()) {
            return ApiFormatter::sendResponse(400, false, 'Terdapat kesalahan input Silahkan coba lagi', $th->validator->error());
        } else {
            return ApiFormatter::sendResponse(400, false, 'Terdapat kesalahan input Silahkan coba lagi', $th->getMessage());
        }
    }
}

    public function show($id)
    {
        try {
            $user = findOrFail($id);

            return ApiFormatter::sendResponse(200, true, "Lihat user dengan id $id", $stuff);
    } catch (\Throwable $th) {
        return ApiFormatter:: sendResponse(404, false, "Data dengan id $id tidak ditemukan");
    }
}

    public function update(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $username = ($request -> username) ?  $request->username : $user->username;
            $email = ($request->email) ? $request->email : $user->email;
            $password = ($request->password) ? $request->password : $user->password;
            $role = ($request->role) ? $request->role : $user->role;

            $user->update([
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => $role
            ]);

            return ApiFormatter::sendResponse(200, true, "Berhasil Ubah Data dengan id $id");
         } catch (\Throwable $th) {
        return ApiFormatter::sendResponse(404, false, "Proses gagal! Silahkan coba lagi!", $th->getMessage());
    }
}

public function destroy($id)
{
    try {
        $user = User::findOrFail($id);

        $user->delete();

        return ApiFormatter::sendResponse(200, true, "Berhasil Hapus Data Barang dengan id $id", ['id' => $id]);
    } catch (\Throwable $th) {
return ApiFormatter::sendResponse(404, false, "Proses gagal! silahkan coba lagi!", $th->getMessage());
        }
    }

    public function deleted()
    {
        try {
            $users = User::onlyTrashed()->get();
            
            return ApiFormatter::sendResponse(200, true, "Lihat Data Barang yang telah dihapus", $users);
        } catch (\Throwable $th) {
            return ApiFormatter::sendResponse(404, false, "Proses gagal! silahkan coba lagi!", $th->getMessage());
        }
    }

    public function restore($id)
    {
        try {
            $user = User::onlyTrashed()->where('id', $id);

            $user->restore();

            return ApiFormatter::sendResponse(200, true, "Berhasil Mengembalikan data yang telah di hapus!", ['id' => $id]);
        } catch (\Throwable $th) {
            return ApiFormatter::sendResponse(404, false, "Proses gagal! silahkan coba lagi!", $th->getMessage());
        }
    }

    public function restoreAll()
    {
        try {
            $users = User::onlyTrashed();
            $users->restore();

            return ApiFormatter::sendResponse(200, true, "Berhasil mengembalikkan semua data yang telah di hapus!");
        } catch (\Throwable $th) {
            // throw $th;
            return ApiFormatter::sendResponse(404, false, "Proses gagal! Silahkan coba lagi!", $th->getMessage());
        }
    }

    public function permanentDelete($id)
    {
        try {
            $user = User::onlyTrashed()->where('id', $id)->forceDelete();

            return ApiFormatter::sendResponse(200, true, "Berhasil hapus permanen data yang telah di hapus!", ['id' => $id]);
        } catch (\Throwable $th) {
            return ApiFormatter::sendResponse(404, false, "Proses gagal! Silahkan coba lagi!", $th->getMessage());
        }
    }

    public function permanentDeleteAll()
    {
        try {
            $users = User::onlyTrashed();
            $users->forceDelete();

            return ApiFormatter::sendResponse(200, true, "Berhasil hapus permanen semua data yang telah di hapus!");
        } catch (\Throwable $th) {
            // throw $th;
            return ApiFormatter::sendResponse(404, false, "Proses gagal! Silahkan coba lagi!", $th->getMessage());
        }
    }

} 