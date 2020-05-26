<?php


namespace Project\Model;


use Project\Model\Action\Base\Coding;
use Project\Model\Action\Base\Painting;
use Project\Model\Action\Base\SetGoals;
use Project\Model\Action\Base\SpeakToManager;
use Project\Model\Action\Base\Testing;

trait BaseWorker
{
    public static $actions = [
        'code' => Coding::class,
        'paint' => Painting::class,
        'set-goal' => SetGoals::class,
        'speak-to-manager' => SpeakToManager::class,
        'test' => Testing::class
    ];

    /**
     * @param string $action
     * @return bool
     */
    public function checkAction(string $action) {
        if(array_key_exists(strtolower($action), self::$actions)) {
            return ($this instanceof self::$actions[$action]);
        }
        return false;
    }
    public function getInfo() {
        $out_array = [];
        foreach(self::$actions as $key => $value) {
            if($this instanceof $value) {
                $out_array[] = $key;
            }
        }
        return $out_array;
    }
}