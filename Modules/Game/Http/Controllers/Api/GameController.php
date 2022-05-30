<?php

namespace Modules\Game\Http\Controllers\Api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Game\Events\NewCodeRequestInserted;
use Modules\Game\Http\Requests\CodeStoreRequest;

class GameController extends Controller
{
    public function setCode(CodeStoreRequest $request)
    {
        event(new NewCodeRequestInserted($request->mobile,$request->code));
        return response()->json('success');
    }
}
