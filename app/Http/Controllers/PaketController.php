<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Repository\PaketInterface;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;


class PaketController extends Controller
{
    protected $paketrepository;

    public function __construct(PaketInterface $paketrepository)
    {
        $this->paketrepository = $paketrepository;
    }

    public function get_ajax()
    {
        $paket = $this->paketrepository->getAll();
        $table = DataTables::of($paket)
            ->addColumn('action', function ($paket) {
                return  '<button id="' . $paket['id'] . '" data-toggle="modal" data-target="#modal" data-token="{{ csrf_token() }}" class="btn btn-sm btn-clean btn-icon edit"  title="Edit details">
            <i class="la la-edit"></i>
        </button>
            <button data-toggle="modal" data-target="#confirmModal" id="' . $paket['id'] . '" class="delete btn btn-sm btn-clean btn-icon" data-token="{{ csrf_token() }} title="Delete">
            <i class="la la-trash"></i>
        </button>
            ';
            })
            ->make(true);

        return $table;
    }

    public function editPaket(Request $request)
    {
        $paket = $this->paketrepository->getId($request->id);
        return response()->json($paket);
    }



    public function index()
    {
        return view('paket.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required',

        ]);

        Paket::create([
            'name'  => $request->name,
            'harga' => $request->harga,
            'status'   => $request->status
        ]);

        return back();
    }

    public function update(Request $request, $id)
    {
        $paket = $this->paketrepository->getId($id);

        $request->validate([
            'name' => 'required',
            'harga' => 'required'
        ]);

        $paket->update([
            'name' => $request->name,
            'harga' => $request->harga,
            'status' => $request->status
        ]);

        return back();
    }

    public function destroy($id)
    {
        $categories = $this->paketrepository->getId($id);
        $categories->delete();
    }
}
