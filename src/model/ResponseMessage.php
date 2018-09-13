<?php

namespace rumahsantri\santriasuh\model;

class ResponseMessage {
    
    private $code;
    private $message;
    private $data;
    
    public function __construct($code, $message, $data) {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    public function getCode() {
        return $this->code;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
    
    public static function success($data = null) {
        return new ResponseMessage(0, null, $data);
    }
    
    public static function error($code, $message = null) {
        return new ResponseMessage($code, $message, null);
    }
}
