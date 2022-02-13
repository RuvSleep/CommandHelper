<?php
class CH {
    /**
     * Output of the specified text with a selection. (Вывод указанного текста с выбором.)
     *
     * @param string $var text to out
     * @param boolean $exit print_r (0) or exit (1)?
     * @return void
     */

    public static function OUT($var, $exit = false) {
        echo '<pre>';
        if ($exit) {
            exit($var);
        } else {
            print_r($var);
        }
        echo '</pre>';
    }


    /**
     * Converting an array and its child elements into an object. (Преобразование массива и его дочерних элементов в объект.)
     *
     * @param array $array array to convert
     * @return object
     */
    public static function ARRAY_TO_OBJECT($array = []) {
        return json_decode(json_encode($array, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }
    
}
?>