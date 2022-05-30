<?php


namespace Tests\Helpers;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait ModelHelper
{
    public function testInsertData()
    {
        $model = $this->model();
        $data = $model::factory()->make()->toArray();
        if ($model instanceof User)
            $data['password'] = bcrypt('password');
        $model::create($data);
        $this->assertDatabaseHas($model->getTable(),$data);
    }

    abstract protected function model():Model;
}
