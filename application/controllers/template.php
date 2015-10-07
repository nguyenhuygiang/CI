<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

    function Welcome() {
        parent::Controller();
    }

    function index() {
        $this->load->library('parser');
        $data = array(
            'blog_title' => 'tieu de blog',
            'blog_heading' => 'Heading',
            'blog_entries' => array(
                array('title' => 'Title 1', 'body' => 'Body 1'),
                array('title' => 'Title 2', 'body' => 'Body 2'),
                array('title' => 'Title 3', 'body' => 'Body 3'),
                array('title' => 'Title 4', 'body' => 'Body 4'),
                array('title' => 'Title 5', 'body' => 'Body 5')
            )
        );
        $this->parser->parse('template/template', $data);
    }

}
