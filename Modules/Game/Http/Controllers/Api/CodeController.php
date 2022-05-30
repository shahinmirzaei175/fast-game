<?php

namespace Modules\Game\Http\Controllers\Api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Game\Http\Requests\CodeStoreRequest;
use Modules\Game\Http\Requests\CodeUpdateRequest;
use Modules\Game\Repositories\Interfaces\CodeRepositoryInterface;
use Modules\Game\Transformers\Code;
use Modules\Game\Transformers\CodeCollection;

class CodeController extends Controller
{
    private $codeRepository;
    public function __construct(CodeRepositoryInterface $codeRepository)
    {
        $this->codeRepository = $codeRepository;
    }

    public function index()
    {
        return new CodeCollection($this->codeRepository->get());
    }

    public function store(CodeStoreRequest $request)
    {
        $data = $request->only(['code','count']);
        return new Code($this->codeRepository->store($data));
    }

    public function show($id)
    {
        return new Code($this->codeRepository->find($id));
    }

    public function update(CodeUpdateRequest $request, $id)
    {
        $data = $request->only(['count','code']);
        return new Code($this->codeRepository->update($id,$data));
    }

    public function destroy($id)
    {
        return $this->codeRepository->delete($id);
    }
}
