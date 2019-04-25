<?php

class Pages extends CI_controller
{
    public function view($page = 'home')
    {
        if ( ! file_exists( APPPATH . 'views/pages/' . $page . '.php') ) {
            show_404();
        }

        $this->load->view('master/header');

        $this->load->view('pages/' . $page);

        $this->load->view('master/footer');
    }
}
