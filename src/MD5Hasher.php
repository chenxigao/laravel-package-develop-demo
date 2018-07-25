<?php
/**
 * Created by PhpStorm.
 * User: gao
 * Date: 2018/7/25
 * Time: 23:03
 */

namespace Laravel\Hasher;


class MD5Hasher
{
    public function make($value, array $options=[])
    {//主要负责加密字符串
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5',$value . $salt);
        
    }

    public function check($value,$hashValue,$options=[])
    {
        $salt= isset($options['salt']) ? $options['salt'] : '';
        return hash('md5',$value . $salt) === $hashValue;
        
    }
    

}