<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\adapter\TypeAdapter;
use ndebugs\fall\annotation\DataTypeAdapter;
use rumahsantri\santriasuh\model\ActivityForm;

/**
 * @DataTypeAdapter(ActivityForm::class)
 */
class ActivityFormAdapter implements TypeAdapter {
    
    public function unmarshall($value) {
        return new ActivityForm();
    }
    
    public function marshall($value) {
        return [];
    }
}