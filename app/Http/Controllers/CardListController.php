<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardListRequest;
use App\Services\CardListService;
use Illuminate\Http\Request;

class CardListController extends Controller
{
    private $card_list_service;

    public function __construct(CardListService $card_list_service)
    {
        $this->card_list_service = $card_list_service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->card_list_service->searchList();
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
    public function store(CardListRequest $request)
    {


        return $this->card_list_service->createList($request->validated());
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
