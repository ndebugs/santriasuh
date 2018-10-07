<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\adapter\TypeAdaptable;
use ndebugs\fall\annotation\DataTypeAdapter;
use rumahsantri\santriasuh\model\ActivityList;

/**
 * @DataTypeAdapter(ActivityList::class)
 */
class ActivityListAdapter implements TypeAdaptable {
    
    /**
     * @var ActivityItemAdapter
     * @Autowired
     */
    public $itemAdapter;
    
    public function unmarshall($value) {
        $items = [];
        foreach ($value as $item) {
            $items[] = $this->itemAdapter->unmarshall($item);
        }
        $model = new ActivityList();
        $model->setItems($items);
        
        return $model;
    }
    
    public function marshall($value) {
        $items = [];
        foreach ($value->getItems() as $item) {
            $items[] = $this->itemAdapter->marshall($item);
        }
        return $items;
    }
}
