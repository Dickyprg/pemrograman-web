<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\UsersModel;

    class Login extends BaseController {
        public function index() {
            echo view('login_index');
        }
        public function auth() {
            $session = session();
            $model = new UsersModel();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('pwd');
            //akses db user
            $data = $model->where('email', $email)->first();
            if ($data) {
                $pass = $data['password']; //data dari db
                if ($password==$pass) {
                    $sess_data = [
                        'user_id'       => $data['id'],
                        'user_name'     => $data['name'],
                        'user_email'    => $data['email'],
                        'logged_in'     => TRUE
                    ];
                    $session->set($sess_data);
                    return redirect()->to(base_url('https://belajar-ci.test/admin/users/index'));
                }
                else {
                    $session->setFlashdata('msg', 'Password tidak ada');
                    return redirect()->to(base_url('https://belajar-ci.test/admin/login'));
                }
            }
            else {
                $session->setFlashdata('msg', 'Email tidak ada');
                return redirect()->to(base_url('https://belajar-ci.test/admin/login'));
            }
        }
        public function logout() {
            $session = session();
            $session->destroy();
            return redirect()->to(base_url('https://belajar-ci.test/admin/login'));
        }
    }
?>