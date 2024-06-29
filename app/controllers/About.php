<?php
class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    public function index()
    {
        $data['title'] = 'Halaman AboutMe';
        $data['nama'] = 'Seyra Safkia Ohoirenan';
        $data['alamat'] = 'Jl, Leo Mamiri, Gang II Papua Indah';
        $data['no_hp'] = '085254334643';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
