<?php

class JsDecoder
{

    function decodeSnapApp($args)
    {
        list($h, $u, $n, $t, $e, $r) = $args;

        function create_character_($metadata, $h, $e)
        {
            $output = 0;
            $length = count((array) $metadata);
            for ($i = 0; $i < $length; $i++) {
                $item = $metadata[$i];
                if (in_array(strval($item), $h)) {
                    $output += array_search($item, $h) * pow($e, $i);
                }
            }
            return $output;

        }
        function decode($d, $e, $f)
        {
            $g = str_split("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+/");

            $h = array_slice($g, 0, $e);

            $i = array_slice($g, 0, $f);

            $j = create_character_(str_split(strrev($d)), $h, $e);

            $k = "";
            while ($j > 0) {
                $k = $i[$j % $f] . $k;

                $j = ($j - ($j % $f)) / $f;
            }

            if ($k)
                return $k;
            return "0";

        }

        $r = "";
        for ($i = 0, $len = strlen($h); $i < $len; $i++) {
            $s = "";
            while ($h[$i] !== $n[$e]) {
                $s .= $h[$i];
                $i++;
            }

            for ($j = 0; $j < strlen($n); $j++) {
                $s = preg_replace("/$n[$j]/", strval($j), $s);
            }
            $r .= chr(decode($s, $e, 10) - $t);

        }

        return urldecode(urlencode($r));
    }
    function getEncodedSnapApp($data)
    {
        return explode(",", trim(str_replace('"', '', explode("))", explode("decodeURIComponent(escape(r))}(", $data)[1])[0])));
    }
    function decryptSnapSave($data)
    {
        return $this->decodeSnapApp($this->getEncodedSnapApp($data));
    }
}



?>