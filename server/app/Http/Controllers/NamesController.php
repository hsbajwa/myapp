<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Names;

class NamesController extends Controller
{
    public function index()
    {
        return Names::all();
    }
 
    public function show($id)
    {
        return Names::find($id);
    }

    public function store(Request $request)
    {
        $names = Names::create($request->all());

        return response()->json($names, 201);    
    }

    public function update(Request $request, $id)
    {

        $names = Names::findOrFail($id);
        $names->update($request->all());
    }

    public function delete($id)
    {
        $names = Names::findOrFail($id);
        $names->delete();
    }
}
