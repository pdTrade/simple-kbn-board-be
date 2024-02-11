<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardRequest;
use App\Services\CardService;
use Illuminate\Http\Request;

class CardController extends Controller
{
    private $card_service;

    public function __construct(CardService $card_service)
    {
        $this->card_service = $card_service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->card_service->searchCards();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CardRequest $request)
    {


        return $this->card_service->createCard($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

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
    }
}
