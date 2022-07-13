<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Translate;

class TranslatesController extends Controller
{
    public function index(){


        return view('translate.index');
    }

    public function translateQuery(Request $request)
    {

        $query = $request->input('query');

        $qry = strtolower($query);

        $translates = Translate::query()
            ->where('tagalog', '=', $qry)
            ->orWhere('english', '=', $qry)
            ->get();

            return view('translate.translate', compact('translates','query'));
        }

}
