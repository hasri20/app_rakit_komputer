<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\Processor;
use App\Models\GraphicsCard;
use App\Models\Motherboard;
use App\Models\Memory;
use App\Models\Storage;
use App\Models\PowerSupply;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Dashboard', [
            'listProcessor' => Processor::all(),
            'listVga' => GraphicsCard::all(),
            'listMotherboard' => Motherboard::all(),
            'listRam' => Memory::all(),
            'listStorage' => Storage::all(),
            'listPowerSupply' => PowerSupply::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}