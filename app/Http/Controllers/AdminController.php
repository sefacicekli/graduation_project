<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function import()
    {
        return view('admin.pages.import');
    }

    public function importStore(Request $request)
    {
        $file = $request->file('file');
        if (empty($file))
        {
            return back()
                ->with('message', 'Please choose any file...')
                ->with('message_type', 'warning');
        }
        else
        {
            try {
                Excel::import(new StudentImport, $file);
                return back()
                    ->with('message', 'Excel file imported successfully')
                    ->with('message_type', 'success');
            } catch (\Throwable $e) {
                return back()
                    ->with('message', 'The data you are trying to load is the same as the data registered in the database or there is an error in the data!')
                    ->with('message_type', 'danger');
            }
        }
    }

    public function classAssignments()
    {
        return view('admin.pages.class-assignments');
    }

    public function examDocument()
    {
        $students = Student::where('id', 1)->get();
        return view('admin.pages.exam-document', compact('students'));
    }
}
