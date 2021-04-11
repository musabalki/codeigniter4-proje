<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class MyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        echo "before";
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        echo "after";
    }
}