<?php

namespace App\Controllers;

class IndexController extends BaseController {

    public function index() {
        return $this -> blade -> run('v1.index', ['title' => 'Codeigniter with blade']);
    }

}
