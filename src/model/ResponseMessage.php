<?php

namespace rumahsantri\santriasuh\model;

class ResponseMessage {
    
    /** @var integer */
    private $code;
    
    /** @var string */
    private $message;
    
    /** @var mixed */
    private $data;
    
    /**
     * @param integer $code
     * @param string $message
     * @param mixed $data
     */
    public function __construct($code, $message, $data) {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    /** @return integer */
    public function getCode() {
        return $this->code;
    }

    /**
     * @param integer $code
     * @return void
     */
    public function setCode($code) {
        $this->code = $code;
    }

    /** @return string */
    public function getMessage() {
        return $this->message;
    }

    /**
     * @param string $message
     * @return void
     */
    public function setMessage($message) {
        $this->message = $message;
    }

    /** @return mixed */
    public function getData() {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return void
     */
    public function setData($data) {
        $this->data = $data;
    }
    
    /**
     * @param mixed $data [optional]
     * @return ResponseMessage
     */
    public static function success($data = null) {
        return new ResponseMessage(0, null, $data);
    }
    
    /**
     * @param integer $code
     * @param string $message [optional]
     * @param mixed $data [optional]
     * @return ResponseMessage
     */
    public static function error($code, $message = null, $data = null) {
        return new ResponseMessage($code, $message, $data);
    }
}
