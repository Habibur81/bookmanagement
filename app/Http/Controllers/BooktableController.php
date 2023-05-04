<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booktable;

class BooktableController extends Controller
{
    public function index()
    {
        return view('from');
    }

    public function insert(Request $request)
    {

        $inserData = new booktable();

        $inserData->name = $request->name;
        $inserData->pname = $request->pname;
        $inserData->age = $request->age;
        $inserData->date = $request->date;
        $inserData->page = $request->page;
        $inserData->booktype = $request->type1;

        $inserData->save();

        return redirect()->route('showindex')->with('success','Insert successfully');
    }

    public function show_information()
    {
        $data = booktable::all();

        return view('booklist', compact('data'));
    }

    public function edit($id){

        $data = booktable::find($id);

        // dd($data);

        return view('edit', compact('data'));

    }

    public function edit_info(Request $request, $id){

        $inserData = booktable::find($id);

        $inserData->name = $request->name;
        $inserData->pname = $request->pname;
        $inserData->age = $request->age;
        $inserData->date = $request->date;
        $inserData->page = $request->page;
        $inserData->booktype = $request->type1;

        $inserData->save();

        return redirect()->route('showindex')->with('success','Edit successfully');

    }

    public function delete($id){

        $delete = booktable::find($id);

        $delete->delete();

        return redirect()->route('showindex')->with('success','Delete successfully.');

    }

    
}
