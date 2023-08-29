<?php

namespace App\Http\Controllers;

use App\Models\PR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PRController extends Controller
{
    // melihat data Shift
    public function index()
    {
        $pr = PR::all();
        return view('pr')->with('pr', $pr);
    }

    public function show($id)
    {
        $pr = PR::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Item',
            'data'    => $pr  
        ]); 
    }

    // menyimpan data/menyimpan insert data 
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'title'     => 'required',
            'content'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Post::create([
            'title'     => $request->title, 
            'content'   => $request->content
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $post  
        ]);
    }

    // view ke halaman update
    // public function edit($id)
    // {
    //     $shift = Shift::findOrFail($id);


    //     return view('edit-shift', compact('shift'));
    // }

    // update data

    public function update(Request $request, $id)
    {
    // Find Holder
    $shift = Shift::findOrFail($id);

    // Validate
    $validate = $request->validate([
      'shift' => ['required'],
      'start' => ['required'],
      'finish' => ['required'],
    ]);

    // Updating
    $shift->update([
      'shift' => $request->shift,
      'start' => $request->start,
      'finish' => $request->finish,
    ]);
    // dd($request);

    // Response
    return response()->json([
      'success' => true,
      'message' => 'Data Berhasil Diudapte!',
      'data'    => $shift
    ]);
    }

    // delete data/hapus data
    public function destroy(Shift $shift, $id)
    {
        $shift = Shift::findOrFail($id);
        $shift->delete();

        return redirect()->route('shift.index');
    }
}