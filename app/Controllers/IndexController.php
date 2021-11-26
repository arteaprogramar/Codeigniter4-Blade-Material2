<?php

namespace App\Controllers;

class IndexController extends BaseController {

    /**
     * Material Toolbar
     * @return string
     * @throws \Exception
     */
    public function index() {
        return $this -> blade -> run('v1.index', ['title' => 'Toolbar Template']);
    }

    /**
     * Material Toolbar Collpase Template
     * @return string
     * @throws \Exception
     */
    public function toolbarCollapse(){
        return $this -> blade -> run('v1.tc', ['title' => 'Toolbar Collpase Template']);
    }

    /**
     * Material Toolbar NavDrawer Template
     * @return string
     * @throws \Exception
     */
    public function toolbarNavDrawer(){
        return $this -> blade -> run('v1.tnd', ['title' => 'Toolbar NavDrawer Template']);
    }

    /**
     * Material Toolbar Collapse ND Template
     * @return string
     * @throws \Exception
     */
    public function toolbarCollapseNavDrawer(){
        return $this -> blade -> run('v1.tcnd', ['title' => 'Toolbar Collapse ND Template']);
    }
}
