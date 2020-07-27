<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();
        if ($request->uri->getSegment(1) == 'admin') {
            if (!$session->has('is_admin_login')) {
                return redirect()->to(base_url('login'));
            }
        }
        if ($request->uri->getSegment(1) == 'guru') {
            if (!$session->has('is_guru_login')) {
                return redirect()->to(base_url('login'));
            }
        }
        if ($request->uri->getSegment(1) == 'tu') {
            if (!$session->has('is_tu_login')) {
                return redirect()->to(base_url('login'));
            }
        }
        if ($request->uri->getSegment(1) == 'siswa') {
            if (!$session->has('is_siswa_login')) {
                return redirect()->to(base_url('login'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
