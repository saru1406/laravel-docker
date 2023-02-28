<?php
namespace App\Repositories\Bar;

use App\Models\Bar;

class BarRepository
{
    /**
     * @var App\Models\Project
     */
    private $bar;

    public function __construct(bar $bar) {
        $this->bar = $bar;
    }

    public function all()
    {
        return Bar::all();
    }

    public function find(int $id)
    {
        return Bar::find($id);
    }
}