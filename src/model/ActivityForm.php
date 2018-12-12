<?php

namespace rumahsantri\santriasuh\model;

use ndebugs\fall\annotation\validation\NotEmpty;

class ActivityForm {
    
    /** @var string */
    private $id;
    
    /**
     * @var string
     * @NotEmpty
     */
    private $title;
    
    /**
     * @var string
     * @NotEmpty
     */
    private $content;
    
    /** @return string */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     * @return void
     */
    public function setId($id) {
        $this->id = $id;
    }

    /** @return string */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /** @return string */
    public function getContent() {
        return $this->content;
    }

    /**
     * @param string $content
     * @return void
     */
    public function setContent($content) {
        $this->content = $content;
    }
}
