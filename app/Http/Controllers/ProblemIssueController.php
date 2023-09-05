<?php

namespace App\Http\Controllers;
use App\Models\ProblemIssue;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProblemIssueController extends Controller
{
    // melihat data Problem Issue
    public function index()
    {
        $problem = ProblemIssue::all();
        return view('problem')->with('problem', $problem);
    }

    public function show($id)
    {
        $problem = ProblemIssue::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Item',
            'data'    => $problem  
        ]); 
    }

    // menyimpan data/menyimpan insert data 
    public function store(Request $request): RedirectResponse {
        $this->validate($request, [
            'Nama_problem' =>'required',
        ]);

        $data = $request->all();
        $problem = ProblemIssue::create($data);

        return redirect()->route('problem-issue.index');
    }

    // update data

    public function update(Request $request, $id)
    {
    // Find Holder
    $problem = ProblemIssue::findOrFail($id);

    // Validate
    $validate = $request->validate([
      'Nama_problem' => ['required'],
    ]);

    // Updating
    $problem->update([
      'Nama_problem' => $request->Nama_problem,
    ]);
    // dd($request);

    // Response
    return response()->json([
      'success' => true,
      'message' => 'Data Berhasil Diudapte!',
      'data'    => $problem
    ]);
    }

    // delete data/hapus data
    public function destroy(ProblemIssue $problem, $id)
    {
        $problem = ProblemIssue::findOrFail($id);
        $problem->delete();

        return redirect()->route('problem-issue.index');
    }
}