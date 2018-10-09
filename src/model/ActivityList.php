<?php

namespace rumahsantri\santriasuh\model;

class ActivityList {
    
    /** @var ActivityItem[] */
    private $items = [];
    
    /** @param ActivityItem[] $items */
    public function __construct(array $items) {
        $this->items = $items;
    }

    /** @return ActivityItem[] */
    public function getItems() {
        return $this->items;
    }

    /**
     * @param ActivityItem[] $items
     * @return void
     */
    public function setItems(array $items) {
        $this->items = $items;
    }
}
