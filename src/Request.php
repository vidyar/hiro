<?php

namespace Infor\Hiro;

class Request
{
    private $get = [];
    private $post = [];
    
    public function __construct() {
        foreach($_GET as $key => $item) {
            $this->get[$key] = $item;
        }
        
        foreach($_POST as $key => $item) {
            $this->post[$key] = $item;
        }
    }
    
    public function get($key, $default = '') {
        if (!isset($this->get[$key])) {
            return $default;
        }
        
        return $this->get[$key];
    }
    
    public function post($key, $default = '') {
        if (!isset($this->post[$key])) {
            return $default;
        }
        
        return $this->post[$key];
    }
}
