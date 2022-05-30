<?php

namespace Modules\Game\Tests\Feature\Model;

use Modules\Game\Entities\Code;
use Tests\Helpers\ModelHelper;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CodeTest extends TestCase
{
    use RefreshDatabase,ModelHelper;

    protected function model()
    {
        return new Code();
    }
}
