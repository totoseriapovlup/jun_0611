<?php

namespace controllers;

use core\View;

class Controller
{
    /**
     * @var View
     */
    protected View $view;

    /**
     * Main constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }
}