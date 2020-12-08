<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\MateriInterface;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Materi;

class MateriController extends Controller
{
    protected $materirepository;

    public function __construct(MateriInterface $materirepository)
    {
        $this->materirepository = $materirepository;
    }

    public function get_ajax()
    {
        $materi = $this->materirepository->getAll();
        $table = DataTables::of($materi)
            ->addColumn('action', function ($materi) {
                return  '<button id="' . $materi['id'] . '" data-toggle="modal" data-target="#modal" data-token="{{ csrf_token() }}" class="btn btn-sm btn-clean btn-icon edit"  title="Edit details">
            <i class="la la-edit"></i>
        </button>
            <button data-toggle="modal" data-target="#confirmModal" id="' . $materi['id'] . '" class="delete btn btn-sm btn-clean btn-icon" data-token="{{ csrf_token() }} title="Delete">
            <i class="la la-trash"></i>
        </button>
            ';
            })
            ->make(true);

        return $table;
    }

    public function editMateri(Request $request)
    {
        $materi = $this->materirepository->getId($request->id);
        return response()->json($materi);
    }



    public function index()
    {
        return view('materi.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Materi::create([
            'name'  => $request->name,
            'status'   => $request->status
        ]);

        return back();
    }

    public function update(Request $request, $id)
    {
        $materi = $this->materirepository->getId($id);

        $request->validate([
            'name' => 'required',
        ]);

        $materi->update([
            'name' => $request->name,
            'status' => $request->status
        ]);

        return back();
    }

    public function destroy($id)
    {
        $categories = $this->materirepository->getId($id);
        $categories->delete();
    }
}
