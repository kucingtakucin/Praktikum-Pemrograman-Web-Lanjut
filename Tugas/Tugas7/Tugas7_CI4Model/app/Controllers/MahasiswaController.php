<?php

namespace App\Controllers;

use App\Models\MahasiswaModel as Mahasiswa;
use CodeIgniter\HTTP\RedirectResponse;
use Config\Services;
use ReflectionException;

class MahasiswaController extends BaseController
{
    protected Mahasiswa $mahasiswa;
    protected $helpers = ['url', 'form'];

    public function __construct()
    {
        session();
        $this->mahasiswa = new Mahasiswa();
    }

    /**
     * @return string
     */
    public function index(): string
    {
        // $data['mahasiswa'] = $this->mahasiswa->findAll();
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
        $data = [
            'validation' => Services::validation()
        ];
        return view('Mahasiswa/new', $data);
    }

    /**
     * @return RedirectResponse
     * @throws ReflectionException
     */
    public function create(): RedirectResponse
    {
        if ($this->validate([
            'nim' => 'required',
            'nama_lengkap' => 'required',
            'password' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'prodi' => 'required',
            'warga_negara' => 'required',
            'tanggal_lahir' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ])) {
            $this->mahasiswa->insert($this->request->getPost());
            return redirect()->route('Mahasiswa.index')->with('success', "Berhasil Ditambahkan!");
        }
        $validation =  Services::validation();
        return redirect()->route('Mahasiswa.new')->withInput()->with('validation', $validation);
    }

    public function show($id)
    {
        $data = [
            'mahasiswa' => $this->mahasiswa->find($id)
        ];
        // return view('Mahasiswa/show', $data);
        return $this->response->setJSON($data);
    }

    /**
     * @param $id
     * @return string
     */
    public function edit($id): string
    {
        $data = [
            'mahasiswa' => $this->mahasiswa->find($id),
            'validation' => Services::validation()
        ];
        return view('Mahasiswa/edit', $data);
    }

    /**
     * @param $id
     * @return RedirectResponse
     * @throws ReflectionException
     */
    public function update($id): RedirectResponse
    {
        if ($this->validate([
            'nim' => 'required',
            'nama_lengkap' => 'required',
            'password' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'prodi' => 'required',
            'warga_negara' => 'required',
            'tanggal_lahir' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ])) {
            $this->mahasiswa->update($id, $this->request->getRawInput());
            return redirect()->route('Mahasiswa.index')->with('success', "Berhasil Diubah!");
        }
        $validation =  Services::validation();
        return redirect()->route('Mahasiswa.edit', [$id])->withInput()->with('validation', $validation);
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id): RedirectResponse
    {
        $this->mahasiswa->delete($id);
        return redirect()->route('Mahasiswa.index')->with('success', "Berhasil Dihapus!");
    }
}
