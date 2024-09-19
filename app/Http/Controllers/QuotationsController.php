<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Quotations;
use Illuminate\Http\Request;

class QuotationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $quotation = Quotations::join('categories', 'categories.id', '=', 'quotations.category_id')
                              ->get(['quotations.content', 'quotations.author', 'categories.type']);

        return response()->json($quotation);


    }



    /**
     * Show the form for creating a new resource.
     */

     public function create() {


     }


    /**
     * Store a newly created resource in storage.
     */
     public function store()
    {
        return redirect('\citations')->with('Ok','Citation enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quotations $quotations)
    {
        $quotation = Quotations::find();
        return redirect('citation/{id}');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quotations $quotations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quotations $quotations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quotations $quotations)
    {
        //
    }
}