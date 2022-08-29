<?php

namespace App\Http\Controllers\API\Simpeg;
use App\Models\Dosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Exception;

class DosenController extends Controller
{
    //
    public function getData(Request $request)
    {
        try {
            $data = Dosen::with(['jabatanSeed'])->get();
            return isset($request->datatable) && $request->datatable == 'true' ? DataTables::of($data)->make(true) : response()->json([
                'status' => true,
                'data' => $data
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }
}
