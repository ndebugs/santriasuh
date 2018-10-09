<?php

namespace rumahsantri\santriasuh\model\adapter;

use Exception;
use ndebugs\fall\adapter\ObjectTypeAdaptable;
use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\annotation\TypeAdapter;
use ndebugs\fall\web\HTTPInternalServerErrorException;
use rumahsantri\santriasuh\model\ResponseMessage;

/**
 * @TypeAdapter(Exception::class)
 */
class ExceptionAdapter implements ObjectTypeAdaptable {
    
    /**
     * @var ResponseMessageAdapter
     * @Autowired
     */
    public $adapter;
    
    /**
     * @param mixed $value
     * @return object
     */
    public function wrap($value) {
        
    }
    
    /**
     * @param Exception $value
     * @return array
     */
    public function unwrap($value) {
        $error = !$value instanceof HTTPException ?
                new HTTPInternalServerErrorException($value->getMessage(), $value) : $value;
        
        $message = ResponseMessage::error($error->getCode(), $error->getMessage());
        return $this->adapter->unwrap($message);
    }
}
