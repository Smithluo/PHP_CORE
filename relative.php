<?php
/**
 * Created by PhpStorm.
 * User: luopengfei
 * Date: 2018/3/27
 * Time: 下午7:37
 */

/**
 * @param $path1
 * @param $path2
 * @return string
 */
function relative_path($path1, $path2) {
    $arr_1 = explode('/', $path1);
    $arr_2 = explode('/', $path2);

    $len = count($arr_2);
    for($i = 0;$i <$len; $i++) {
        if ($arr_1[$i] != $arr_2[$i]) {
            break;
        }
    }
    $return_path = [];
    if ($i == 1) {
        $return_path = [];
    }
    if ($i != 1 && $i < $len) {
        $return_path = array_fill(0, $i - 1, '..');
    }
    if ($i == $len) {
        $return_path = './';
    }
    $return_path = array_merge($return_path, array_slice($arr_1, $i, -1));
    $path = implode('/', $return_path);

    return $path;

}

$path1 = '/a/e/c/f.php';
$path2 = '/a/b/h/j/m.php';
