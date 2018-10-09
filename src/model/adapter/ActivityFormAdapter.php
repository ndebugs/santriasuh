<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\adapter\ObjectTypeAdaptable;
use ndebugs\fall\annotation\TypeAdapter;
use rumahsantri\santriasuh\model\ActivityForm;

/**
 * @TypeAdapter(ActivityForm::class)
 */
class ActivityFormAdapter implements ObjectTypeAdaptable {
    
    /**
     * @param array $value
     * @return ActivityForm
     */
    public function wrap($value) {
        $model = new ActivityForm();
        $model->setId($value['id']);
        $model->setTitle($value['title']);
        $model->setContent($value['content']);
        
        return $model;
    }
    
    /**
     * @param ActivityForm $value
     * @return array
     */
    public function unwrap($value) {
        return [
            'id' => $value->getId(),
            'title' => $value->getTitle(),
            'content' => $value->getContent()
        ];
    }
}
