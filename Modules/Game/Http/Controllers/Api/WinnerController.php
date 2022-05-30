<?php

namespace Modules\Game\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use Modules\Game\Http\Requests\WinnerStoreRequest;
use Modules\Game\Http\Requests\WinnerUpdateRequest;
use Modules\Game\Repositories\Interfaces\WinnerRepositoryInterface;
use Modules\Game\Transformers\Winner;
use Modules\Game\Transformers\WinnerCollection;

class WinnerController extends Controller
{
    private $winnerRepository;
    public function __construct(WinnerRepositoryInterface $winnerRepository)
    {
        $this->winnerRepository = $winnerRepository;
    }

    public function index()
    {
        return new WinnerCollection($this->winnerRepository->get());
    }

    public function store(WinnerStoreRequest $request)
    {
        $data = $request->only(['mobile','code']);
        return new Winner($this->winnerRepository->store($data));
    }

    public function show($id)
    {
        return new Winner($this->winnerRepository->find($id));
    }

    public function update(WinnerUpdateRequest $request, $id)
    {
        $data = $request->only(['mobile','code']);
        return new Winner($this->winnerRepository->update($id,$data));
    }

    public function destroy($id)
    {
        return $this->winnerRepository->delete($id);
    }
}
