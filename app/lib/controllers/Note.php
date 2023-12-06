<?php

namespace controllers;

use core\Router;
use stores\Note as NoteStore;

class Note extends Controller
{
    /**
     * @var NoteStore
     */
    private NoteStore $store;

    /**
     * Main constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->store = new NoteStore();
    }

    public function index()
    {
        $notes = $this->store->getNotes();
        $this->view->render('index_note', ['notes' => $notes]);
    }

    public function create()
    {
        $this->view->render('create_note');
    }

    public function store()
    {
        $note = filter_input(INPUT_POST, 'note');
        //TODO validation
        $this->store->addNote(['text' => $note]);
        Router::redirect(Router::getUrl('note', 'index'));
    }
}















