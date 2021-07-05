<?php 

namespace endecode;

class Endecode
{
    public function encrypt($input)
    {
        // case 1
        $input = str_replace("H","$1", $input);
        $input = str_replace("e","$3", $input);
        $input = str_replace("l","$7", $input);
        $input = str_replace("0","$2", $input);
        $input = str_replace(" ","$0", $input);

        // case 2
        // $input = strtr($input, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+|~-=\/,.?][}{','45abcdef...45');
        return $input;
    }

    public function decrypt($input)
    {
        // $input = '$1$3$7$7o$0Mahad$3v';
        $input = str_replace("$1","H", $input);
        $input = str_replace("$3","e", $input);
        $input = str_replace("$7","l", $input);
        $input = str_replace("$2","0", $input);
        $input = str_replace("$0"," ", $input);
        return $input;
    }
}