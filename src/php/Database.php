<?php
declare(strict_types=1);

namespace BrutalCS;

class Database
{
    private $user;
    private $pass;
    private $host;
    private $name;

    public function __construct()
    {
        $this->user = getenv('DATABASE_USER');
        $this->pass = getenv('DATABASE_PASS');
        $this->host = getenv('DATABASE_HOST');
        $this->name = getenv('DATABASE_NAME');
    }

    public function connect()
    {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->name.';charset=utf8';
        $opt = [\PDO::FETCH_ASSOC];
        try {
            $connection = new \PDO($dsn, $this->user, $this->pass, $opt);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }
    }

    public function getPlayers()
    {
        //
    }
}
