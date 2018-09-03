<?php

namespace rumahsantri\santriasuh\controller;

use ndebugs\fall\annotation\Controller;
use ndebugs\fall\annotation\PathVariable;
use ndebugs\fall\annotation\RequestBody;
use ndebugs\fall\annotation\RequestMap;
use ndebugs\fall\annotation\QueryParameter;
use ndebugs\fall\annotation\Roles;
use rumahsantri\santriasuh\model\ActivityForm;

/** @Controller("/activities") */
class ActivityController {
    
    /**
     * @RequestMap(path="/{id}")
     * @PathVariable("id")
     */
    public function get($id) {
        
    }
    
    /**
     * @RequestMap
     * @QueryParameter(name="start", type="int")
     * @QueryParameter(name="size", type="int")
     */
    public function getAll($start, $size) {
        
    }
    
    /**
     * @Roles("ADMIN")
     * @RequestMap(method="POST")
     * @RequestBody("form")
     */
    public function add(ActivityForm $form) {
        var_dump($form);
    }
    
    /**
     * @Roles("ADMIN")
     * @RequestMap(
     *  path="/{id}",
     *  method="PUT",
     *  headers={"Content-Type"="application/json"}
     * )
     * @PathVariable("id")
     * @RequestBody("form")
     */
    public function edit($id, ActivityForm $form) {
        
    }
    
    /**
     * @Roles("ADMIN")
     * @RequestMap(path="/{id}", method="DELETE")
     * @PathVariable("id")
     */
    public function delete($id) {
        
    }
}
