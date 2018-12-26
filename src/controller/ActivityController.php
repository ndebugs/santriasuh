<?php

namespace rumahsantri\santriasuh\controller;

use ndebugs\fall\annotation\Controller;
use ndebugs\fall\annotation\PathVariable;
use ndebugs\fall\annotation\QueryParameter;
use ndebugs\fall\annotation\RequestMap;
use ndebugs\fall\web\Template;
use rumahsantri\santriasuh\model\Activity;
use rumahsantri\santriasuh\model\Category;

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
     * @QueryParameter(name="page", type="integer", defaultValue=1)
     * @QueryParameter(name="size", type="integer", defaultValue=5)
     */
    public function viewList($page, $size) {
        $template = new Template('/activities');
        
        $lastIndex = $page * $size;
        $activities = [];
        for ($i = $lastIndex - $size + 1; $i <= $lastIndex; $i++) {
            $activity = new Activity();
            $activity->setId($i);
            $activity->setTitle('Title ' . $i);
            $activity->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
            $activity->setCreatorId('Admin');
            $activity->setCreationDate('19/08/2018');
            
            $category = new Category();
            $category->setName('Any');
            $category->setIconName('far fa-bookmark');
            $activity->setCategory($category);
            
            $activities[] = $activity;
        }
        
        $template->setParameter('activities', $activities);
        $template->setParameter('pageIndex', $page);
        $template->setParameter('pageSize', $size);
        $template->setParameter('pageCount', 100);
        
        return $template;
    }
}
