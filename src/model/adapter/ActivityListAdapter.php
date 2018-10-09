<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\adapter\ObjectTypeAdaptable;
use ndebugs\fall\annotation\TypeAdapter;
use rumahsantri\santriasuh\model\ActivityList;

/**
 * @TypeAdapter(ActivityList::class)
 */
class ActivityListAdapter implements ObjectTypeAdaptable {
    
    /**
     * @var ActivityItemAdapter
     * @Autowired
     */
    public $adapter;
    
    /**
     * @param array $value
     * @return ActivityList
     */
    public function wrap($value) {
        $items = [];
        foreach ($value as $item) {
            $items[] = $this->adapter->wrap($item);
        }
        $model = new ActivityList();
        $model->setItems($items);
        
        return $model;
    }
    
    /**
     * @param ActivityList $value
     * @return array
     */
    public function unwrap($value) {
        $items = [];
        foreach ($value->getItems() as $item) {
            $items[] = $this->adapter->unwrap($item);
        }
        return $items;
    }
}
