<?php

namespace App\Repository\Eloquent;

use App\Models\Materi;
use App\Repository\MateriInterface;

class MateriRepository implements MateriInterface
{
    protected $materi;

    public function __construct(Materi $materi)
    {
        $this->materi = $materi;
    }

    public function getAll()
    {
        $materi = $this->materi->orderBy('id', 'desc')->get();
        return $materi;
    }

    public function getId($id)
    {
        $materi = $this->materi->where('id', $id)->first();
        return $materi;
    }
}
