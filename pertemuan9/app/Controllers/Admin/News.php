<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\NewsModel;

    class News extends BaseController {
        public function index() {
            //echo "Ini hamanan index pada controller news";
            //buat object dari class UserModel
            $model = new NewsModel();
            
            //load seluruh data
            $data['news'] = $model->orderBy('id', 'DESC')->findAll();

            return view('index', $data);
        }
        public function list() {
            //echo "Ini hamanan index pada controller news";
            //buat object dari class UserModel
            $model = new NewsModel();
            
            //load seluruh data
            $data['news'] = $model->orderBy('id', 'DESC')->findAll();

            return view('news_view_all', $data);
        }
        public function create() {
            return view('news_create_news');
        }
        public function store() {
            $model=new NewsModel();

            $data=[
                'judulberita'=>$this->request->getVar('judulberita'),
                'author'=>$this->request->getVar('author'),
                'foto'=>$this->request->getVar('foto'),
                'isiberita'=>$this->request->getVar('isiberita')
            ];
            $save=$model->insert($data);

            return redirect()->to(base_url('https://belajar-ci.test/admin/news/list'));
        }
        public function edit($id = null){
            $model = new NewsModel();
            $data['list'] = $model->where('id',$id)->first();

            return view('news_edit_list',$data);
        }
        public function update(){
            $model=new NewsModel();
            $id=$this->request->getVar('id');
            $data=[
                'judulberita'=>$this->request->getVar('judulberita'),
                'author'=>$this->request->getVar('author'),
                'foto'=>$this->request->getVar('foto'),
                'isiberita'=>$this->request->getVar('isiberita')
            ];
            $save=$model->update($id,$data);

            return redirect()->to(base_url('https://belajar-ci.test/admin/news/list'));          
        }
        public function delete($id = null){
            $model = new NewsModel();
            $data['list'] = $model->where('id',$id)->delete();

            return redirect()->to(base_url('https://belajar-ci.test/admin/news/list'));
        }
    }
?>