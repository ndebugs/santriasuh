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
        
        $activity = new Activity();
        $activity->setId($id);
        $activity->setTitle('Title ' . $id);
        $activity->setContent('<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus aliquam felis vel accumsan. Aliquam at nisl et magna ornare faucibus. Nulla neque leo, pharetra quis felis vitae, mattis consequat erat. Sed suscipit, dolor ut pretium aliquam, elit tortor egestas tellus, eu volutpat magna augue eu turpis. Integer at quam odio. Mauris lacinia nisi at cursus gravida. In mattis pellentesque neque, at feugiat mauris blandit eget.</p>' .
            '<p>In tincidunt, magna at volutpat tincidunt, mauris libero laoreet mi, a tempor lectus augue at nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus mollis mi accumsan tortor laoreet, ac aliquet dui sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla vitae dui sit amet magna dignissim congue id eu urna. Curabitur nibh mauris, porta nec ipsum in, molestie rhoncus lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In quis arcu leo. Mauris luctus efficitur ligula vel vestibulum. Nullam elementum libero purus, at malesuada velit fringilla eu. Vestibulum bibendum porta auctor.</p>' .
            '<p>Aenean a fringilla massa. Vestibulum pretium cursus purus, ut euismod ante fringilla vel. Curabitur congue diam elementum, maximus ante vel, luctus tortor. Praesent tristique leo non ligula molestie aliquet. Vestibulum sed mauris enim. Duis in tellus pretium, viverra diam in, semper tellus. Donec rutrum cursus nunc eu fringilla. Nullam bibendum facilisis elit ut dictum.</p>' .
            '<p>Donec at nulla cursus, posuere diam eget, auctor quam. Ut non enim sed nibh ullamcorper imperdiet auctor ut magna. Aliquam erat volutpat. Donec at molestie eros, id gravida diam. Morbi lectus dolor, mollis a consectetur eu, interdum quis ligula. Cras laoreet magna a neque vehicula aliquet. Suspendisse cursus tincidunt imperdiet. Nunc feugiat tortor diam, at tincidunt tortor lacinia quis. Pellentesque quis eros rhoncus, mollis erat id, tempor ante. Aliquam ac imperdiet sapien. Pellentesque vulputate blandit ex ac laoreet. Etiam convallis, nunc vitae tincidunt dignissim, nisi sapien semper orci, sed luctus velit arcu in dolor. Proin eget augue nibh. Nam felis justo, tristique quis velit sed, vehicula blandit metus. Nullam non ipsum ultricies enim sodales condimentum.</p>' .
            '<p>Nulla in elit nec quam laoreet efficitur. Suspendisse auctor, dolor vel porttitor iaculis, risus arcu scelerisque nulla, vitae blandit turpis ex vel ante. Curabitur tempus quis urna et interdum. Nullam posuere sem urna, non vulputate leo rutrum non. Aliquam placerat nulla in tortor pharetra, eu rutrum lectus posuere. Aliquam magna metus, molestie ac pharetra sed, faucibus eget urna. Sed suscipit, velit sit amet sagittis sagittis, odio enim lacinia lectus, vel lobortis tortor odio ac dolor. Maecenas eget augue lobortis, consequat ante a, commodo quam. Ut ultricies odio et bibendum euismod. Suspendisse id elit sagittis dui scelerisque posuere. Ut ut arcu non tortor commodo ultricies. Maecenas vel facilisis neque. Sed vulputate mauris ipsum, in scelerisque quam tempus id. Quisque vestibulum nibh id odio pretium gravida. Morbi nec augue quis urna tempus malesuada ut sed sapien. Praesent tristique mollis ante, a faucibus dolor feugiat sit amet.</p>');
        $activity->setCreatorId('Admin');
        $activity->setCreationDate('19 Agustus 2018');

        $category = new Category();
        $category->setName('Any');
        $category->setIconName('far fa-bookmark');
        $activity->setCategory($category);
        $template->setParameter('activity', $activity);
        
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
        
        $recentActivities = [];
        for ($i = 1; $i <= 3; $i++) {
            $activity = new Activity();
            $activity->setId($i);
            $activity->setTitle('Title ' . $i);
            $activity->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
            $activity->setCreatorId('Admin');
            $activity->setCreationDate('19 Agustus 2018');
            
            $category = new Category();
            $category->setName('Any');
            $category->setIconName('far fa-bookmark');
            $activity->setCategory($category);
            
            $recentActivities[] = $activity;
        }
        $template->setParameter('recentActivities', $recentActivities);
        
        return $template;
    }
}
