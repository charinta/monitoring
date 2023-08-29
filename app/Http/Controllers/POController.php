<?php

namespace App\Http\Controllers;

use App\Models\PO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class POController extends Controller
{
    // melihat data Shift
    public function index()
    {
        $po = PO::all();
        return view('po')->with('po', $po);
    }

    public function show($id)
    {
        $po = PO::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Item',
            'data'    => $po  
        ]); 
    }

    // menyimpan data/menyimpan insert data 
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'PO_No'     => 'required',
            'Doc_Date'   => 'required',
            'PR_Deliver' => 'required',
            'PO1_Date' => 'required',
            'PO1_PIC' => 'required',
            'PO1_Aging' => 'required',
            'PO2_Date' => 'required',
            'PO2_PIC' => 'required',
            'PO2_Aging' => 'required',
            'PO_Status' => 'required', 
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $po = PO::create([
            'PO_No'     => $request->PO_No, 
            'Doc_Date'   => $request->Doc_Date,
            'PR_Deliver' => $request->PR_Deliver,
            'PO1_Date' => $request->PO1_Date,
            'PO1_PIC' => $request->PO1_PIC,
            'PO1_Aging' => $request->PO1_Aging,
            'PO2_Date' => $request->PO2_Date,
            'PO2_PIC' => $request->PO2_PIC,
            'PO2_Aging' => $request->PO2_Aging, 
            'PO_Status' => $request->PO_Status,
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $po 
        ]);
    }

    // view ke halaman update
    // public function edit($id)
    // {
    //     $shift = Shift::findOrFail($id);


    //     return view('edit-shift', compact('shift'));
    // }

    // update data

    

    // delete data/hapus data
    public function destroy(PO $po, $id)
    {
        $po = PO::findOrFail($id);
        $po->delete();

        return redirect()->route('insert-po.index');
    }
}