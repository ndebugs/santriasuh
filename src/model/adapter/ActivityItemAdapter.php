<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\adapter\ObjectTypeAdaptable;
use ndebugs\fall\annotation\TypeAdapter;
use rumahsantri\santriasuh\model\ActivityItem;

/**
 * @TypeAdapter(ActivityItem::class)
 */
class ActivityItemAdapter implements ObjectTypeAdaptable {
    
    /**
     * @param array $value
     * @return ActivityItem
     */
    public function wrap($value) {
        $model = new ActivityItem();
        $model->setId($value['id']);
        $model->setTitle($value['title']);
        
        return $model;
    }
    
    /**
     * @param ActivityItem $value
     * @return array
     */
    public function unwrap($value) {
        return [
            'id' => $value->getId(),
            'title' => $value->getTitle()
        ];
    }
}
