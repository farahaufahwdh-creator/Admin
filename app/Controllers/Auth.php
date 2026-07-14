<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // Jika sudah login, langsung lempar ke dashboard admin
        if (session()->get('logged_in')) {
            return redirect()->to('/admin');
        }
        return view('admin/login');
    }

    public function authProcess()
    {
        $db = \Config\Database::connect();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $db->table('admins')->where('username', $username)->get()->getRowArray();

        if ($admin) {
            // Cek kecocokan password_hash
            if (password_verify($password, $admin['password'])) {
                session()->set([
                    'id'        => $admin['id'],
                    'username'  => $admin['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('/admin');
            }
        }

        return redirect()->back()->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
    public function registerBawaan()
    {
        $db = \Config\Database::connect();

        // Kita kosongkan dulu tabel admin lama agar bersih
        $db->table('admins')->truncate();

        // Buat data admin baru dengan enkripsi asli dari servermu
        $data = [
            'username' => 'admin',
            'password' => password_hash('admin123', PASSWORD_BCRYPT)
        ];

        $db->table('admins')->insert($data);

        return "Akun admin berhasil dibuat ulang oleh sistem! <br> Username: <b>admin</b> <br> Password: <b>admin123</b> <br><br> <a href='" . base_url('login') . "'>Klik di sini untuk ke halaman Login</a>";
    }
}
