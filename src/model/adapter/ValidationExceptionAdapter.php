<?php

namespace rumahsantri\santriasuh\model\adapter;

use ndebugs\fall\adapter\ObjectAdapter;
use ndebugs\fall\adapter\ObjectTypeAdaptable;
use ndebugs\fall\annotation\Autowired;
use ndebugs\fall\annotation\TypeAdapter;
use ndebugs\fall\http\HTTPException;
use ndebugs\fall\http\HTTPStatus;
use ndebugs\fall\reflection\TypeResolver;
use ndebugs\fall\reflection\type\Type;
use ndebugs\fall\validation\ValidationException;
use ndebugs\fall\web\HTTPInternalServerErrorException;
use rumahsantri\santriasuh\model\ResponseMessage;

/** @TypeAdapter(ValidationException::class) */
class ValidationExceptionAdapter implements ObjectTypeAdaptable {
    
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
     * @param ValidationException $value
     * @param Type $type [optional]
     * @return array
     */
    public function uncast($value, Type $type = null) {
        $data = [];
        foreach ($value->getErrors() as $error) {
            $validatable = $error->getValidatable();
            $name = $error->getName();
            $data[$name] = $validatable->getMessage($name, $error->getValue());
        }
        
        $message = ResponseMessage::error(HTTPStatus::CODE_BAD_REQUEST, $value->getMessage(), $data);
        return $this->adapter->uncast($message);
    }
}
