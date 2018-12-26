<?php

namespace rumahsantri\santriasuh\model;

class Activity extends Entity {
    
    /** @var string */
    private $id;
    
    /** @var string */
    private $title;
    
    /** @var string */
    private $content;
    
    /** @var Category */
    private $category;
    
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

    /** @return Category */
    public function getCategory() {
        return $this->category;
    }

    /**
     * @param Category $category
     * @return void
     */
    public function setCategory(Category $category) {
        $this->category = $category;
    }
}
