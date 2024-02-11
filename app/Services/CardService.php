<?php

namespace App\Services;

use App\Models\Card;

class CardService extends BaseService
{
    private $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function searchCards(array $params = [])
    {
        return [
        ];
    }

    public function createCard(array $params = [])
    {
        $user_id = auth()->user()->id ?? 1;


        return $this->card->query()->create(['user_id'=>$user_id, ...$params]);
    }
}
