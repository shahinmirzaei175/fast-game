<?php

namespace Modules\Game\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Game\Entities\Code;
use Modules\Game\Entities\Winner;
use Modules\Game\Repositories\Interfaces\WinnerRepositoryInterface;

class CheckCodeRequestStatus implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $winnerRepository;
    public function __construct(WinnerRepositoryInterface $winnerRepository)
    {
        $this->winnerRepository = $winnerRepository;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Log::info("Mobile : ".$event->mobile." , Code : ".$event->code);
        $code = Code::where('code',$event->code)->first();
        $firstWin = Winner::where([
            ['code',$event->code],
            ['mobile',$event->mobile],
        ])->exists();
        if ($code != null && $code->count > 0 && $firstWin == false)
        {
          $this->winnerRepository->store([
              'code'  =>  $event->code,
              'mobile'  => $event->mobile]
          );
            $code->count = $code->count - 1;
            $code->save();
        }
    }
}
