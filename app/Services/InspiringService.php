<?php

namespace App\Services;

/**
 * Class InspiringService
 */
class InspiringService
{
    /**
     * @return string
     */
    public function inspire()
    {
    	$quotes= [
    		'追求卓越，成功就會默默地追上你 -安泰最愛的電影:三個傻瓜',
    		'I will Cross that bradge when I get to it -好友給安泰的一句話',
    		'寫程式讓人廢寢忘食，來自於創造的成就感',
    	];
    	$key = rand(0,2);
    	return $quotes[$key];
    }
    
}