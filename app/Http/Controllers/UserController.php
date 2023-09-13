<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $title = 'Manage User - Page';
        $delete = 'Hapus Data User!';
        $text = "Yakin ingin menghapus data?";
        confirmDelete($delete, $text);
        return view('admin/user', compact('title', 'users'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return back()->with('success', 'Berhasil dihapus!');
    }
}
