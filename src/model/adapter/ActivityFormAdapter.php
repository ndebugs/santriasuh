<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\adapter\TypeAdaptable;
use ndebugs\fall\annotation\DataTypeAdapter;
use rumahsantri\santriasuh\model\ActivityForm;

/**
 * @DataTypeAdapter(ActivityForm::class)
 */
class ActivityFormAdapter implements TypeAdaptable {
    
    public function unmarshall($value) {
        $model = new ActivityForm();
        $model->setId($value['id']);
        $model->setTitle($value['title']);
        $model->setContent($value['content']);
        
        return $model;
    }
    
    public function marshall($value) {
        return [
            'id' => $value->getId(),
            'title' => $value->getTitle(),
            'content' => $value->getContent()
        ];
    }
}
