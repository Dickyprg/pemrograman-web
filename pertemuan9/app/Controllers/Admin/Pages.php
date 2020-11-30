<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\PagesModel;

    class Pages extends BaseController {
        public function index() {
            //echo "Ini hamanan index pada controller pages";
            //buat object dari class UserModel
            $model = new PagesModel();
            
            //load seluruh data
            $data['pages'] = $model->orderBy('id', 'DESC')->findAll();

            return view('index', $data);
        }
        public function hal() {
            //echo "Ini hamanan index pada controller pages";
            //buat object dari class UserModel
            $model = new PagesModel();
            
            //load seluruh data
            $data['pages'] = $model->orderBy('id', 'DESC')->findAll();

            return view('pages_view_all', $data);
        }
        public function create() {
            return view('pages_create_page');
        }
        public function store() {
            $model=new PagesModel();

            $data=[
               'judulhalaman'=>$this->request->getVar('judulhalaman'),
                'author'=>$this->request->getVar('author'),
                'isihalaman'=>$this->request->getVar('isihalaman'),
            ];
            $save=$model->insert($data);

            return redirect()->to(base_url('https://belajar-ci.test/admin/pages/hal'));
        }
        public function edit($id = null){
            $model = new PagesModel();
            $data['hal'] = $model->where('id',$id)->first();

            return view('pages_edit_hal',$data);
        }
        public function update(){
            $model=new PagesModel();
            $id=$this->request->getVar('id');
            $data=[
               'judulhalaman'=>$this->request->getVar('judulhalaman'),
                'author'=>$this->request->getVar('author'),
                'isihalaman'=>$this->request->getVar('isihalaman'),
            ];
            $save=$model->update($id,$data);

            return redirect()->to(base_url('https://belajar-ci.test/admin/pages/hal'));          
        }
        public function delete($id = null){
            $model = new PagesModel();
            $data['hal'] = $model->where('id',$id)->delete();

            return redirect()->to(base_url('https://belajar-ci.test/admin/pages/hal'));
        }
    }
?>