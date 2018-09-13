<?php

namespace rumahsantri\santriasuh\controller;

use ndebugs\fall\annotation\Controller;
use ndebugs\fall\annotation\PathVariable;
use ndebugs\fall\annotation\RequestMap;
use ndebugs\fall\web\Template;

/** @Controller("/activities") */
class ActivityController {
    
    /**
     * @RequestMap(path="/{id}")
     * @PathVariable("id")
     */
    public function view($id) {
        $template = new Template('/activities/detail.php');
        $template->setParameter('id', $id);
        
        return $template;
    }
    
    /**
     * @RequestMap
     */
    public function viewList() {
        return '/activities';
    }
}
