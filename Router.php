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
        $method = $_REQUEST['REQUEST_METHOD'];
        $path = $_REQUEST['PATH_INFO'] ?? '/';
        $fn = null;
        if ($method === 'get') {
            $fn = $this->getRoutes[$path];
        }
        if ($method === 'post') {
            $fn = $this->getRoutes[$path];
        }
        if ($method === 'patch') {
            $fn = $this->updateRoutes[$path];
        }
        if ($method === 'delete') {
            $fn = $this->deleteRoutes[$path];
        }

        if (!$fn) {
            echo 'No route found with the given route';
        }
    }
}