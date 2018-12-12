<?php

namespace rumahsantri\santriasuh\model\adapter;

use Exception;
use ndebugs\fall\adapter\ObjectAdapter;
use ndebugs\fall\adapter\ObjectTypeAdaptable;
use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\annotation\TypeAdapter;
use ndebugs\fall\http\HTTPException;
use ndebugs\fall\reflection\type\Type;
use ndebugs\fall\web\HTTPInternalServerErrorException;
use rumahsantri\santriasuh\model\ResponseMessage;

/** @TypeAdapter(Exception::class) */
class ExceptionAdapter implements ObjectTypeAdaptable {
    
    /**
     * @var ObjectAdapter
     * @Autowired
     */
    public $adapter;
    
    /**
     * @param mixed $value
     * @param Type $type [optional]
     * @return object
     */
    public function cast($value, Type $type = null) {
        return null;
    }
    
    /**
     * @param Exception $value
     * @param Type $type [optional]
     * @return array
     */
    public function uncast($value, Type $type = null) {
        $error = !$value instanceof HTTPException ?
                new HTTPInternalServerErrorException($value->getMessage(), $value) : $value;
        
        $message = ResponseMessage::error($error->getCode(), $error->getMessage());
        return $this->adapter->uncast($message);
    }
}
