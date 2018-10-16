<?php

namespace rumahsantri\santriasuh\controller;

use ndebugs\fall\annotation\Controller;
use ndebugs\fall\annotation\PathVariable;
use ndebugs\fall\annotation\RequestBody;
use ndebugs\fall\annotation\RequestMap;
use ndebugs\fall\annotation\ResponseBody;
use ndebugs\fall\annotation\QueryParameter;
use ndebugs\fall\annotation\Roles;
use rumahsantri\santriasuh\model\ActivityForm;
use rumahsantri\santriasuh\model\ActivityItem;
use rumahsantri\santriasuh\model\ResponseMessage;

/** @Controller("/api/activities") */
class ActivityServiceController {
    
    /**
     * @RequestMap(path="/{id}")
     * @PathVariable("id")
     * @ResponseBody
     */
    public function get($id) {
        $data = new ActivityForm();
        $data->setId($id);
        $data->setTitle('Activity ' . $id);
        $data->setContent('Content ' . $id);
        
        return ResponseMessage::success($data);
    }
    
    /**
     * @RequestMap
     * @QueryParameter(name="index", type="integer")
     * @QueryParameter(name="size", type="integer")
     * @ResponseBody
     */
    public function getAll($index, $size) {
        $data = [
            new ActivityItem(1, 'Activity 1'),
            new ActivityItem(2, 'Activity 2'),
            new ActivityItem(3, 'Activity 3')
        ];
        
        return ResponseMessage::success($data);
    }
    
    /**
     * @Roles("ADMIN")
     * @RequestMap(
     *  method="POST",
     *  headers={"Content-Type"="application/json"}
     * )
     * @RequestBody("form")
     * @ResponseBody
     */
    public function add(ActivityForm $form) {
        return ResponseMessage::success();
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
     * @ResponseBody
     */
    public function edit($id, ActivityForm $form) {
        return ResponseMessage::success();
    }
    
    /**
     * @Roles("ADMIN")
     * @RequestMap(path="/{id}", method="DELETE")
     * @PathVariable("id")
     * @ResponseBody
     */
    public function delete($id) {
        return ResponseMessage::success();
    }
}
