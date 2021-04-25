<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\RedirectResponse;
use ReflectionException;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;

    public function __construct()
    {
        helper('form');
        $this->mahasiswa = new MahasiswaModel();
    }

    /**
     * @return string
     */
    public function index(): string
    {
	    $data = [
            'mahasiswa' => $this->mahasiswa->findAll(),
        ];
		return view('Mahasiswa/index', $data);
	}

    /**
     * @return string
     */
    public function new(): string
    {
        return view('Mahasiswa/new');
    }

    /**
     * @return RedirectResponse
     */
    public function create(): RedirectResponse
    {
        try {
            $this->mahasiswa->insert($this->request->getPost());
        } catch (ReflectionException $e) {
            dd((array) $e);
        }
        return redirect('Mahasiswa.index');
    }
}
