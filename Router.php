<?php

namespace app;

class Router
{
    private $getRoutes;
    private $postRoutes;
    private $updateRoutes;
    private $deleteRoutes;

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }
    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }
    public function update($url, $fn)
    {
        $this->updateRoutes[$url] = $fn;
    }
    public function delete($url, $fn)
    {
        $this->deleteRoutes[$url] = $fn;
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['PATH_INFO'] ?? '/';
        $fn = null;
        if ($method === 'get') {
            $fn = $this->getRoutes[$path];
            exit;
        }
        if ($method === 'post') {
            $fn = $this->getRoutes[$path];
            exit;
        }
        if ($method === 'patch') {
            $fn = $this->updateRoutes[$path];
            exit;
        }
        if ($method === 'delete') {
            $fn = $this->deleteRoutes[$path];
            exit;
        }

        if (!$fn) {
            echo 'No route found with the given route';
            exit;
        }
    }
}