<?php

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
    return decodeSnapApp(getEncodedSnapApp($data));
}

#Example
echo decryptSnapSave('var _0xc22e=["","split","0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+/","slice","indexOf","","",".","pow","reduce","reverse","0"];function _0xe44c(d,e,f){var g=_0xc22e[2][_0xc22e[1]](_0xc22e[0]);var h=g[_0xc22e[3]](0,e);var i=g[_0xc22e[3]](0,f);var j=d[_0xc22e[1]](_0xc22e[0])[_0xc22e[10]]()[_0xc22e[9]](function(a,b,c){if(h[_0xc22e[4]](b)!==-1)return a+=h[_0xc22e[4]](b)*(Math[_0xc22e[8]](e,c))},0);var k=_0xc22e[0];while(j>0){k=i[j%f]+k;j=(j-(j%f))/f}return k||_0xc22e[11]}eval(function(h,u,n,t,e,r){r="";for(var i=0,len=h.length;i<len;i++){var s="";while(h[i]!==n[e]){s+=h[i];i++}for(var j=0;j<n.length;j++)s=s.replace(new RegExp(n[j],"g"),j);r+=String.fromCharCode(_0xe44c(s,e,10)-t)}return decodeURIComponent(escape(r))}("mJVqmufquJquJqmLHqmuVqRVLqmuJqJfqRVmqmJuqRVHqmJfqmuLquJqJRqmJfqmuHqRVuqfJqmRLqmuVqRVLqmuHquJqJVqJuqmVVqJJqJJqJJqJVqJVqfJqmmLqfJqmVVqmVuqJJqmVHqmVJqmVmqmmVqmVuqmVLqmVfqJVqRmRqmJVqmufquJqRVuqmJVqmJfqmuLqmJuqRVuqJfqmJLqmJuqmuRqmuVqRVLqmJVqmJuqmJfqJfqmuJqmJuqRVRqRVLqmJfqmuVqmJHqmuHqmmHqmmHqmmHquuqRVRqmuVqRVfqmuHqmuuqRVmqmuVqmJHqJfqmJVqmJfqmufqmJuquuqfJqJVqRmRqmJJqRVHqRVRqmuJqmRVqmJLqmuHqRVmqRVLquJqumqmLVqmJfqmJJqRVHqRVLqfJqmuHqmJHqmJJqRVLqRmVqumqJVqmmRqfJqmuLqmJuqmuRqRVHqmJHqmuHqmJfqRVLqJfqmuuqmuHqRVLqmRHqmJLqmuHqmJHqmuHqmJfqRVLqmRmqRmVqmLVqmuLquJqumqmuVqmJLqmuHqRVmqRVLqumqJVqJfqmJVqmJfqmJfqmuHqRVmqmRJqmHLqmLHqmLLqfJqmmHqfJqumqmLVqmJfqmJJqRVHqRVLqfJqmuHqmJHqmJJqRVLqRmVqumqmmRqfJqmuLqmJuqmuRqRVHqmJHqmuHqmJfqRVLqJfqmuuqmuHqRVLqmRHqmJLqmuHqmJHqmuHqmJfqRVLqmRmqRmVqmLVqmuLquJqumqmuVqmJLqmuHqRVmqRVLqumqJVqJfqRVRqRVLqRmVqmJLqmuHqJfqmuLqmJVqRVRqmJJqmJLqmuVqRmVqfJqmmHqfJqumqmumqmJLqmJuqmuRqmJRqumqmmRqfJqmuLqmJuqmuRqRVHqmJHqmuHqmJfqRVLqJfqRVVqRVHqmuHqRVmqRmVqmHRqmuHqmJLqmuHqmuRqRVLqmJuqRVmquJqumqJfqmJJqRVmqmJuqmuuqRVmqmuHqRVRqRVRqumqJVqJfqmuRqmJLqmuVqRVRqRVRqmLLqmJVqRVRqRVLqJfqRVmqmuHqmJHqmJuqRVfqmuHquJqumqmuVqmuRqRVLqmJVqRVfqmuHqumqJVqmmRqfJqmuuqRVLqmuVqmuuquJqumqmuHqRVfqmuHqmJfqRVLqumqJLqfJqumqmuuqmuHqRVLqmfuqRVfqmJVqmuLqmuHqmJuqmfuqmufqmuVqmJVqmJLqRVHqRVmqmuHqumqJLqfJqRmRqumqmuHqRVmqRVmqmJuqRVmqmfuqmuRqmJuqmuLqmuHqumqmmmqumqmLVqmJfqmJJqRVHqRVLqmfuqmuHqmJHqmJJqRVLqRmVqumqRmHqJVqmmRqRmHqRmHq",63,"VmRLHfuJq",15,8,23))');


?>
