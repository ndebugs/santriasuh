<?php

namespace rumahsantri\santriasuh\model\adapter;

use Exception;
use ndebugs\fall\adapter\ObjectAdapter;
use ndebugs\fall\adapter\ObjectTypeAdapter;
use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\annotation\TypeAdapter;
use ndebugs\fall\web\HTTPInternalServerErrorException;
use rumahsantri\santriasuh\model\ResponseMessage;

/** @TypeAdapter(Exception::class) */
class ExceptionAdapter extends ObjectTypeAdapter {
    
    /**
     * @var ObjectAdapter
     * @Autowired
     */
    public $adapter;
    
    /**
     * @param mixed $value
     * @param string $type [optional]
     * @return object
     */
    public function cast($value, $type = null) {
        return null;
    }
    
    /**
     * @param Exception $value
     * @param string $type [optional]
     * @return array
     */
    public function uncast($value, $type = null) {
        $error = !$value instanceof HTTPException ?
                new HTTPInternalServerErrorException($value->getMessage(), $value) : $value;
        
        $message = ResponseMessage::error($error->getCode(), $error->getMessage());
        return $this->adapter->uncast($message);
    }
}
