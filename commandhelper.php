<?php
class CH {
    /**
     * Output of the specified text with a selection. (Вывод указанного текста с выбором.)
     *
     * @param string $text text to out
     * @param boolean $exit print_r (0) or exit (1)?
     * @return void
     */

    public static function OUT($text, $exit = false){
        $return = '<pre>' . $text . '</pre>';

        if ($exit) {
            exit($return);
        }
        else {
            print_r($return);
        }
    }
}
?>