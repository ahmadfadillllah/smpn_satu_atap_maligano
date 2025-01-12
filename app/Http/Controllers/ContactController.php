<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $kontak = Contact::where('statusenabled', true)->get();

        return view('kontak.index', compact('kontak'));
    }

    public function delete($uuid)
    {
        try {
            Contact::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Kontak berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Kontak gagal dihapus');
        }
    }
}
