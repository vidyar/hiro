<?php

namespace Infor\Hiro;

class Db extends \PDO
{
    public function __construct($dsn) {
        parent::__construct($dsn);
    }
}
