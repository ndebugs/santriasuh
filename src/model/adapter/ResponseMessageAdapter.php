<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\adapter\ObjectTypeAdaptable;
use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\annotation\TypeAdapter;
use ndebugs\fall\context\ApplicationContext;
use rumahsantri\santriasuh\model\ResponseMessage;

/**
 * @TypeAdapter(ResponseMessage::class)
 */
class ResponseMessageAdapter implements ObjectTypeAdaptable {
    
    /**
     * @var ApplicationContext
     * @Autowired
     */
    public $context;
    
    /**
     * @param mixed $value
     * @return object
     */
    public function wrap($value) {
        
    }
    
    /**
     * @param ResponseMessage $value
     * @return array
     */
    public function unwrap($value) {
        $data = $value->getData();
        if ($data) {
            $adapter = $this->context->getTypeAdapter(ObjectTypeAdaptable::class, get_class($data));
            $data = $adapter ? $adapter->unwrap($data) : null;
        }
        
        return [
            'code' => $value->getCode(),
            'message' => $value->getMessage(),
            'data' => $data
        ];
    }
}
