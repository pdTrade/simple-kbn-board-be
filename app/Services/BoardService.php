<?php

namespace App\Services;

class BoardService extends BaseService
{
    public function __construct()
    {

    }

    public function searchBoards(array $params = [])
    {
        return [
            'boards' => auth()->user()->boards
        ];
    }
}
