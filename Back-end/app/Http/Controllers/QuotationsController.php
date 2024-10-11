<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateQuoteRequest;
use App\Models\Quotations;
use Illuminate\Http\Request;

class QuotationsController extends Controller
{
   
    public function index()
    {
        $quotation = Quotations::join('categories', 'categories.id', '=', 'quotations.category_id')
            ->get(['quotations.content', 'quotations.author', 'categories.type']);

        return response()->json($quotation);
    }

    public function fetchQuotationsByType($id)
    {    
        $categoryId = Quotations::where('category_id', $id)->get();
        return response()->json($categoryId); 
       
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create() {}


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateQuoteRequest $request)
    {
        dd($request);
        $quotation = new Quotations();
        $quotation->content = 'Content example';
        $quotation->author = 'Auteur exemple';
        $quotation->category_id ='3';
        $quotation->save();
    }

    /**
     * Display the specified resource.
     */
 
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
