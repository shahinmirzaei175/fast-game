<?php

namespace Modules\Game\Http\Controllers\Api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Game\Events\NewCodeRequestInserted;
use Illuminate\Support\Facades\Redis;
use Modules\Game\Http\Requests\WinnerStoreRequest;

class GameController extends Controller
{
    public function setCode(WinnerStoreRequest $request)
    {
        event(new NewCodeRequestInserted($request->mobile,$request->code));
        return response()->json('success');
    }
}
