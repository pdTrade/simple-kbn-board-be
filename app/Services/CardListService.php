<?php

namespace App\Services;

use App\Models\CardList;

class CardListService extends BaseService
{
    private $card_list;

    public function __construct(CardList $card_list)
    {
        $this->card_list = $card_list;
    }

    public function searchList(array $params = [])
    {
        return [
            'card_lists' => $this->card_list->with('cards')->get()
        ];
    }

    public function createList(array $params = [])
    {
        $user_id = auth()->user()->id ?? null;

        return $this->card_list->query()->create(['user_id'=>$user_id, ...$params]);
    }
}
