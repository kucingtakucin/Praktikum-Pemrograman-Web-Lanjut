<?php
require_once "Database.php";

class MahasiswaController extends Controller{
    public $db;

    /**
     * MahasiswaController constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * @return array
     */
    public function fetchAll(): array
    {
        return $this->db->fetchAll();
    }

    /**
     * @param object $data
     * @return bool
     */
    public function insert(object $data): bool
    {
        return $this->db->insert($data);
    }
}
