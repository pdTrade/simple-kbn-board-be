<?php

namespace App\Services;

use App\Models\Board;
use Illuminate\Support\Facades\Log;

class BoardService extends BaseService
{
    private $board;

    public function __construct(Board $board)
    {
        $this->board = $board;
    }

    public function searchBoards(array $params = [])
    {
        return [
            'boards' => auth()->user()->boards ?? []
        ];
    }

    public function createBoard(array $params = [])
    {
        $user_id = auth()->user()->id ?? 1;

        return $this->board->query()->create(['user_id'=>$user_id, ...$params]);
    }
}
