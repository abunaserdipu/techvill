<?php

namespace App\Http\Controllers;

use App\Http\Resources\TechUserCollection;
use App\Http\Resources\TechUserResource;
use App\Models\TechUser;
use Illuminate\Http\Request;

class TechUserController extends Controller
{
    public function index()
    {

        $tech_users = TechUser::get();
        return view('pages.challenge1', compact('tech_users'));
    }

    public function search(Request $request)
    {
        // dd($request->all());
        $search_result = TechUserResource::collection(TechUser::where('email', 'LIKE', "%$request->q%")
            ->orWhere('first_name', 'LIKE', "%$request->q%")
            ->orWhere('last_name', 'LIKE', "%$request->q%")
            ->orderBy('created_at', 'desc')->paginate());

        return  new TechUserCollection($search_result);


        // $search_result = TechUser::where('email', 'LIKE', "%$request->abc%")
        //     ->orWhere('first_name', 'LIKE', "%$request->abc%")
        //     ->orWhere('last_name', 'LIKE', "%$request->abc%")
        //     ->orderBy('created_at', 'desc')->paginate();
        // dd($search_result->paginate());
    }
}
