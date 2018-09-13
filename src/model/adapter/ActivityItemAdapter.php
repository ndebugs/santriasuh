<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\adapter\TypeAdaptable;
use ndebugs\fall\annotation\DataTypeAdapter;
use rumahsantri\santriasuh\model\ActivityItem;

/**
 * @DataTypeAdapter(ActivityItem::class)
 */
class ActivityItemAdapter implements TypeAdaptable {
    
    public function unmarshall($value) {
        $model = new ActivityItem();
        $model->setId($value['id']);
        $model->setTitle($value['title']);
        
        return $model;
    }
    
    public function marshall($value) {
        return [
            'id' => $value->getId(),
            'title' => $value->getTitle()
        ];
    }
}
