<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OldNames;

class OldNamesController extends Controller
{
    public function index()
    {
        return OldNames::all();
    }
 
    public function show($id)
    {
        $oldNames = new OldNames();
        return $oldNames->getConnection()->select('select * from old_names where user_id='.$id);
    }

    public function store(Request $request)
    {
        $names = OldNames::create($request->all());

        return response()->json($names, 201);    
    }

    public function delete($id)
    {
        $oldNames = new OldNames();
        return $oldNames->getConnection()->delete('delete from old_names where user_id='.$id);
    }

}
