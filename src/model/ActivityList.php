<?php

namespace rumahsantri\santriasuh\model;

class ActivityList {
    
    private $items = [];
    
    public function __construct($items) {
        $this->items = $items;
    }

    public function getItems() {
        return $this->items;
    }

    public function setItems($items) {
        $this->items = $items;
    }
}
