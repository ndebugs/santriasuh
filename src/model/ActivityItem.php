<?php

namespace rumahsantri\santriasuh\model;

class ActivityItem {
    
    /** @var string */
    private $id;
    
    /** @var string */
    private $title;
    
    /**
     * @param string $id
     * @param string $title
     */
    public function __construct($id, $title) {
        $this->id = $id;
        $this->title = $title;
    }

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
}
