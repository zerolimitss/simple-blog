<?php


class IndexController
{
    public function index($params = []){
        $model = new Posts();
        $all = $model->getAllPosts();
        echo $this->render('all', ['all' => $all]);
    }

    public function show($params = []){
        $model = new Posts();
        $post = $model->getPost($params['id']);
        echo $this->render('show', ['post' => $post]);
    }

    public function posts($params = []){
        $model = new Posts();
        $all = $model->getAllPosts();
        echo $this->render('table', ['all' => $all]);
    }

    public function delete($params = []){
        $model = new Posts();
        $model->delete($params['id']);
        header('Location: /posts');
    }

    public function image($params = []){
        $model = new Posts();
        $model->deleteImage($params['id']);
        header('Location: /posts');
    }

    public function edit($params = []){
        $model = new Posts();
        $post = $model->getPost($params['id']);
        echo $this->render('edit', ['post' => $post]);
    }

    public function save($params = []){
        $model = new Posts();
        $p = $_POST;
        $p['time_stamp'] = time();
        $path = "images/";
        $target_file =  $path.basename($_FILES["image"]["name"]);
        $p['file'] = $_FILES['image']['name'];
        $result = move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

        if(isset($params['id'])){
            $model->update($params['id'],$p);
            header('Location: /edit/id/'.$params['id']);
        }else{
            $model->add($p);
            header('Location: /posts');
        }

    }

    public function add($params = []){
        echo $this->render('add', []);
    }

    protected function render($view,$params=[]){
        extract($params);
        ob_start();
        include('../views/layout.php');
        return ob_get_clean();
    }
}