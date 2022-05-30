<?php


namespace Modules\Game\Repositories;



use App\Repositories\CrudRepository;
use Modules\Game\Repositories\Interfaces\CodeRepositoryInterface;
use Modules\Game\Entities\Code;


class CodeRepository extends CrudRepository implements CodeRepositoryInterface
{

    public function check()
    {
        return true;
    }

    protected function model()
    {
        return new Code();
    }
}
