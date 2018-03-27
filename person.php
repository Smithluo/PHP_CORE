<?php
/**
 * Created by PhpStorm.
 * User: luopengfei
 * Date: 2018/3/27
 * Time: 下午7:45
 */


class Person
{
    private $user = 1;
    private $pwd = 2;

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        if (!isset($this->name)) {
            $this->name = '请设置默认值';
        }
        return $this->name;
    }

}

$person = new Person();
$person->user = 12;
print_r($person->user);