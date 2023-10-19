<?php

namespace App\Http\Controllers\API;

use App\Models\Savings;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Savings::all();
    }

    /**
     * Show the form for creating a new resource.
     */
   /*  public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Savings::findOr($id, function(){
            return array(
                "message" => "the data your trying to access does't exist."
            );
        });


    }

    /**
     * Show the form for editing the specified resource.
     */
   /*  public function edit(string $id)
    {
        //

    } */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $saving = Savings::findOrFail($id);
        $saving->delete();
        return  array(
            "message" => "the data successfully deleted."
        );
    }
}
