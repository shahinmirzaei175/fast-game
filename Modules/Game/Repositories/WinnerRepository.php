<?php


namespace Modules\Game\Repositories;



use App\Repositories\CrudRepository;
use Modules\Game\Entities\Winner;
use Modules\Game\Repositories\Interfaces\WinnerRepositoryInterface;


class WinnerRepository extends CrudRepository implements WinnerRepositoryInterface
{

    public function check()
    {
        return true;
    }

    protected function model()
    {
        return new Winner();
    }
}
