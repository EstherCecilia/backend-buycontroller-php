<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Buy;

class BuyController extends Controller
{
    public function index()
    {
        return Buy::all();
    }

    public function indexP()
    {
        return Buy::all()->where('pago',false);
    }

    public function show(Request $request)
    {
        return Buy::where('code',$request['code'])->first();
    }

    public function store(Request $request)
    {
        $request['validade'] = Carbon::parse($request['validade']); 

        return Buy::create($request->all());
    }

    public function update(Request $request)
    {
        $buy = Buy::where('code', $request['code'])->update(['pago' => true]);

        return $buy;
    }
}
