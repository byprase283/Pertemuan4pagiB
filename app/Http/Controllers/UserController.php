<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// tambahkan 2 ini
use DataTables;
use App\Models\User;
// end tambahkan 2 ini

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::query();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('users');
    }
}
