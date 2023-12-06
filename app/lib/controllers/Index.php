<?php

namespace controllers;

class Index extends Controller
{
    /**
     * index page
     */
    public function index()
    {
        $this->view->render('index');
    }

    /**
     * about page
     */
    public function about()
    {
        $this->view->render('about');
    }

    public function contacts(){
        $this->view->render('contacts');
    }
}