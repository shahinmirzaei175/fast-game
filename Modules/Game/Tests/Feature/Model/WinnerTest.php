<?php

namespace Modules\Game\Tests\Feature\Model;

use Modules\Game\Entities\Winner;
use Tests\Helpers\ModelHelper;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WinnerTest extends TestCase
{
    use RefreshDatabase,ModelHelper;

    protected function model()
    {
        return new Winner();
    }
}
