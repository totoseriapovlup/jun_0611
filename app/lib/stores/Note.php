<?php

namespace stores;

class Note
{
    const NOTE_FILE = 'notes.json';

    const STORE_DIR = APP_DIR . 'store/';

    private function getFilePath()
    {
        return self::STORE_DIR . self::NOTE_FILE;
    }

    public function saveNotes(array $notes)
    {
        $json = json_encode($notes);
        file_put_contents($this->getFilePath(), $json);
    }

    public function getNotes()
    {
        $json = file_get_contents($this->getFilePath());
        if ($json) {
            $notes = json_decode($json, true);
            if ($notes) {
                return $notes;
            }
        }
        return [];
    }

    public function addNote(array $note){
        $notes = $this->getNotes();
        $notes[] = $note;
        $this->saveNotes($notes);
    }
}

