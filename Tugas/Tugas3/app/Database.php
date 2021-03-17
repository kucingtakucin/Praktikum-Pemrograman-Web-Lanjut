<?php
/**
 * Copyright 2021. Adam Arthur Faizal. All Rights Reserved
 * @author Adam Arthur Faizal
 * @version 25 Februari 2021
 */

class Database {
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $dbname = 'pemweblan';
    public $dbh;
    public $stmt;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        try {
            $this->dbh = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass, $options);
        } catch (Exception $exception) {
            print "Error! {$exception->getMessage()}";
            die();
        }
    }

    /**
     * @return array
     */
    public function fetchAll(): array
    {
        $this->stmt = $this->dbh->query('SELECT * FROM tugas1');
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param object $data
     * @return mixed
     */
    public function fetch(object $data): mixed
    {
        $this->stmt = $this->dbh->query('SELECT * FROM tugas1 WHERE id = :id');
        $this->stmt->bindValue('id', $data->id, PDO::PARAM_INT);
        $this->stmt->execute();
        return $this->stmt->fetch();
    }

    /**
     * @param object $data
     * @return bool
     */
    public function insert(object $data): bool
    {
        $this->stmt = $this->dbh
            ->prepare('INSERT INTO tugas1 (nim, nama_lengkap, password, email, tanggal_lahir,
                    jenis_kelamin, prodi, warga_negara, status, keterangan) 
                    VALUES (:nim, :nama_lengkap, :password, :email, :tanggal_lahir, :jenis_kelamin,
                    :prodi, :warga_negara, :status, :keterangan)');
        $this->stmt->bindValue('nim', $data->nim);
        $this->stmt->bindValue('nama_lengkap', $data->nama_lengkap);
        $this->stmt->bindValue('password', password_hash($data->password, PASSWORD_DEFAULT));
        $this->stmt->bindValue('email', $data->email);
        $this->stmt->bindValue('tanggal_lahir', $data->tanggal_lahir);
        $this->stmt->bindValue('jenis_kelamin', $data->jenis_kelamin);
        $this->stmt->bindValue('prodi', $data->prodi);
        $this->stmt->bindValue('warga_negara', $data->warga_negara);
        $this->stmt->bindValue('status', $data->status);
        $this->stmt->bindValue('keterangan', $data->keterangan);
        return $this->stmt->execute();
    }
}