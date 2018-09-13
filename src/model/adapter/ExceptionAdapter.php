<?php

namespace rumahsantri\santriasuh\model\adapter;

use Exception;
use ndebugs\fall\adapter\TypeAdaptable;
use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\annotation\DataTypeAdapter;
use ndebugs\fall\web\HTTPInternalServerErrorException;
use rumahsantri\santriasuh\model\ResponseMessage;

/**
 * @DataTypeAdapter(Exception::class)
 */
class ExceptionAdapter implements TypeAdaptable {
    
    /** @Autowired(ResponseMessageAdapter::class) */
    public $adapter;
    
    public function unmarshall($value) {
        
    }
    
    public function marshall($value) {
        $error = !$value instanceof HTTPException ?
                new HTTPInternalServerErrorException($value->getMessage(), $value) : $value;
        
        $message = ResponseMessage::error($error->getCode(), $error->getMessage());
        return $this->adapter->marshall($message);
    }
}
