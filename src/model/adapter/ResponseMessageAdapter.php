<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\adapter\TypeAdaptable;
use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\annotation\DataTypeAdapter;
use ndebugs\fall\context\ApplicationContext;
use rumahsantri\santriasuh\model\ResponseMessage;

/**
 * @DataTypeAdapter(ResponseMessage::class)
 */
class ResponseMessageAdapter implements TypeAdaptable {
    
    /**
     * @var ApplicationContext
     * @Autowired
     */
    public $context;
    
    public function unmarshall($value) {
        
    }
    
    public function marshall($value) {
        $data = $value->getData();
        if ($data) {
            $dataAdapter = $this->context->getTypeAdapter(DataTypeAdapter::class, get_class($data));
            $data = $dataAdapter ? $dataAdapter->marshall($data) : null;
        }
        
        return [
            'code' => $value->getCode(),
            'message' => $value->getMessage(),
            'data' => $data
        ];
    }
}
