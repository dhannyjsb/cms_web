<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Auth_login implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();
        if ($session->has('is_login')) {
            return redirect()->back();
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
