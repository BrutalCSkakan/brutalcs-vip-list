<?php
declare(strict_types=1);

namespace BrutalCS;

class Core
{
    protected $render;
    protected $database;

    public function __construct(
        Render $render,
        Database $database
    ) {
        $this->render = $render;
        $this->database = $database;
    }

    public function init()
    {
        var_dump($this);
        $this->database->connect();
    }
}
