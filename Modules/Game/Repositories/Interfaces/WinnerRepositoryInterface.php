<?php


namespace Modules\Game\Repositories\Interfaces;


use App\Repositories\Interfaces\CrudRepositoryInterface;

interface WinnerRepositoryInterface extends CrudRepositoryInterface
{
    public function checkWinner($data);

}
