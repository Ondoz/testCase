<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\MateriInterface;

class HomeController extends Controller
{
    protected $materirepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MateriInterface $materirepository)
    {
        $this->middleware('auth');
        $this->materirepository = $materirepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $materi = $this->materirepository->getAll();
        return view('dashboard', compact('materi'));
    }
}
