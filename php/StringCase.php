<?php
/**
 * Created by PhpStorm.
 * User: fanyanan
 * Date: 2018/10/9
 * Time: 10:40 AM
 */
namespace Fyn\Common;

class StringCase
{


    /**
     * snake_case
     * @param $string
     * @return string
     */
    public static function snakeCase($string) {
        $string = lcfirst($string);
        $string = preg_replace_callback('/[A-Z]+/', function ($text) {
            return '_'.strtolower($text[0]);
        },$string);
        $string = preg_replace('/[^a-zA-Z0-9]+/','_',$string);
        return $string;
    }

    /**
     * SCREAMING_SNAKE_CASE
     * @param $string
     * @return string
     */
    public static function screamingSnakeCase($string) {
        return strtoupper(self::snakeCase($string));
    }

    /**
     * kebab-case
     * @param $string
     * @return string
     */
    public static function kebabCase($string) {
        return str_replace('_','-',self::snakeCase($string));
    }

    /**
     * PascalCase
     * @param $string
     * @return string
     */
    public static function pascalCase($string) {
        $arr = preg_split('/[^a-zA-Z0-9]/', $string);
        $string = implode('',array_map('ucfirst',$arr));
        return $string;
    }

    /**
     * camelCase
     * @param $string
     * @return string
     */
    public static function camelCase($string) {
        return lcfirst(self::pascalCase($string));
    }

    /**
     * htmlcase
     * @param $string
     * @return string
     */
    public static function htmlCase($string) {
        return strtolower(preg_replace('/[^a-zA-Z0-9]+/','', $string));
    }
}