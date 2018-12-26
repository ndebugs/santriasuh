<?php

namespace rumahsantri\santriasuh\model;

class Category extends Entity {
    
    /** @var string */
    private $id;
    
    /** @var string */
    private $iconName;
    
    /** @var string */
    private $name;
    
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
    public function getIconName() {
        return $this->iconName;
    }

    /**
     * @param string $iconName
     * @return void
     */
    public function setIconName($iconName) {
        $this->iconName = $iconName;
    }

    /** @return string */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name) {
        $this->name = $name;
    }
}
