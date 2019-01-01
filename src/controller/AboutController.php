<?php

namespace rumahsantri\santriasuh\controller;

use ndebugs\fall\annotation\Controller;
use ndebugs\fall\annotation\RequestMap;

/** @Controller("/about") */
class AboutController {
    
    /**
     * @RequestMap
     */
    public function view() {
        return '/about';
    }
}
