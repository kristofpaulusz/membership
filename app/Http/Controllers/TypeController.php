<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index()
    {
        $types = response()->json(Type::all());
        return $types;
    }
    public function show($type_id)
    {
        $type = response()->json(Type::find($type_id));
        return $type;
    }
    public function store(Request $request)
    {
        $type = new Type();
        $type->name = $request->name;
        $type->email = $request->email;
        $type->save();
    }
    public function update($id, Request $request)
    {
        $type = Type::find($id);
        $type->name = $request->name;
        $type->email = $request->email;
        $type->save();
    }

    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
    }
    public function listView()
    {
        $types = Type::all();
        return view('type.list', ['types' => $types]);
    }
}
