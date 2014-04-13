<?php

namespace Infor\Hiro;

class Router
{
    public function __construct($request, $response) {
        $this->request = $request;
        $this->response = $response;
    }

    public function route($url) {
        var_dump($url);
    }
}
