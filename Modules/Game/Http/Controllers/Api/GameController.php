<?php

namespace Modules\Game\Http\Controllers\Api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Game\Events\NewCodeRequestInserted;
use Illuminate\Support\Facades\Redis;
use Modules\Game\Http\Requests\WinnerStoreRequest;
use Modules\Game\Repositories\Interfaces\WinnerRepositoryInterface;

class GameController extends Controller
{
    public $winnerRepository;
    public function __construct(WinnerRepositoryInterface $winnerRepository)
    {
        $this->winnerRepository = $winnerRepository;
    }

    public function setCode(WinnerStoreRequest $request)
    {
        event(new NewCodeRequestInserted($request->mobile,$request->code));
        return response()->json('success');
    }

    public function checkWinner(WinnerStoreRequest $request)
    {
        $data = $request->only('mobile','code');
        $res = $this->winnerRepository->checkWinner($data);
        if ($res)
            return response()->json('You won');
        return response()->json('You did not won');
    }
}
