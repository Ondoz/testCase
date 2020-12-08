<?php

namespace App\Repository\Eloquent;

use App\Models\Paket;
use App\Repository\PaketInterface;

class PaketRepository implements PaketInterface
{
    protected $paket;

    public function __construct(Paket $paket)
    {
        $this->paket = $paket;
    }

    public function getAll()
    {
        $paket = $this->paket->orderBy('id', 'desc')->get();
        return $paket;
    }

    public function getId($id)
    {
        $paket = $this->paket->where('id', $id)->first();
        return $paket;
    }
}
