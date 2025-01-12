<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    //
    public function index()
    {
        $rating = Rating::where('statusenabled', true)->get();

        return view('rating.index', compact('rating'));
    }

    public function delete($uuid)
    {
        try {
            Rating::where('uuid', $uuid) ->update(
                [
                    'statusenabled' => false
                ]
            );

            return redirect()->back()->with('success','Rating berhasil dihapus');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info','Rating gagal dihapus');
        }
    }
}
