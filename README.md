# JavaScriptDecoder
Javascript Decoder in PHP

> i write this library inspire from [i-downloader](https://socket.dev/npm/package/i-downloader/versions/0.0.1) and it just for fun. 


# Setup
1. Add `JsDecoder.php` to your project
```
<?php
//Other include
include_once('JsDecoder.php');
//Other Codes
?>
```
2. Example
```
<?php
//
$JsDecoder = new JsDecoder();

echo $JsDecoder->decryptSnapSave('var _0xc22e=["","split","0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+/","slice","indexOf","","",".","pow","reduce","reverse","0"];function _0xe44c(d,e,f){var g=_0xc22e[2][_0xc22e[1]](_0xc22e[0]);var h=g[_0xc22e[3]](0,e);var i=g[_0xc22e[3]](0,f);var j=d[_0xc22e[1]](_0xc22e[0])[_0xc22e[10]]()[_0xc22e[9]](function(a,b,c){if(h[_0xc22e[4]](b)!==-1)return a+=h[_0xc22e[4]](b)*(Math[_0xc22e[8]](e,c))},0);var k=_0xc22e[0];while(j>0){k=i[j%f]+k;j=(j-(j%f))/f}return k||_0xc22e[11]}eval(function(h,u,n,t,e,r){r="";for(var i=0,len=h.length;i<len;i++){var s="";while(h[i]!==n[e]){s+=h[i];i++}for(var j=0;j<n.length;j++)s=s.replace(new RegExp(n[j],"g"),j);r+=String.fromCharCode(_0xe44c(s,e,10)-t)}return decodeURIComponent(escape(r))}("mJVqmufquJquJqmLHqmuVqRVLqmuJqJfqRVmqmJuqRVHqmJfqmuLquJqJRqmJfqmuHqRVuqfJqmRLqmuVqRVLqmuHquJqJVqJuqmVVqJJqJJqJJqJVqJVqfJqmmLqfJqmVVqmVuqJJqmVHqmVJqmVmqmmVqmVuqmVLqmVfqJVqRmRqmJVqmufquJqRVuqmJVqmJfqmuLqmJuqRVuqJfqmJLqmJuqmuRqmuVqRVLqmJVqmJuqmJfqJfqmuJqmJuqRVRqRVLqmJfqmuVqmJHqmuHqmmHqmmHqmmHquuqRVRqmuVqRVfqmuHqmuuqRVmqmuVqmJHqJfqmJVqmJfqmufqmJuquuqfJqJVqRmRqmJJqRVHqRVRqmuJqmRVqmJLqmuHqRVmqRVLquJqumqmLVqmJfqmJJqRVHqRVLqfJqmuHqmJHqmJJqRVLqRmVqumqJVqmmRqfJqmuLqmJuqmuRqRVHqmJHqmuHqmJfqRVLqJfqmuuqmuHqRVLqmRHqmJLqmuHqmJHqmuHqmJfqRVLqmRmqRmVqmLVqmuLquJqumqmuVqmJLqmuHqRVmqRVLqumqJVqJfqmJVqmJfqmJfqmuHqRVmqmRJqmHLqmLHqmLLqfJqmmHqfJqumqmLVqmJfqmJJqRVHqRVLqfJqmuHqmJHqmJJqRVLqRmVqumqmmRqfJqmuLqmJuqmuRqRVHqmJHqmuHqmJfqRVLqJfqmuuqmuHqRVLqmRHqmJLqmuHqmJHqmuHqmJfqRVLqmRmqRmVqmLVqmuLquJqumqmuVqmJLqmuHqRVmqRVLqumqJVqJfqRVRqRVLqRmVqmJLqmuHqJfqmuLqmJVqRVRqmJJqmJLqmuVqRmVqfJqmmHqfJqumqmumqmJLqmJuqmuRqmJRqumqmmRqfJqmuLqmJuqmuRqRVHqmJHqmuHqmJfqRVLqJfqRVVqRVHqmuHqRVmqRmVqmHRqmuHqmJLqmuHqmuRqRVLqmJuqRVmquJqumqJfqmJJqRVmqmJuqmuuqRVmqmuHqRVRqRVRqumqJVqJfqmuRqmJLqmuVqRVRqRVRqmLLqmJVqRVRqRVLqJfqRVmqmuHqmJHqmJuqRVfqmuHquJqumqmuVqmuRqRVLqmJVqRVfqmuHqumqJVqmmRqfJqmuuqRVLqmuVqmuuquJqumqmuHqRVfqmuHqmJfqRVLqumqJLqfJqumqmuuqmuHqRVLqmfuqRVfqmJVqmuLqmuHqmJuqmfuqmufqmuVqmJVqmJLqRVHqRVmqmuHqumqJLqfJqRmRqumqmuHqRVmqRVmqmJuqRVmqmfuqmuRqmJuqmuLqmuHqumqmmmqumqmLVqmJfqmJJqRVHqRVLqmfuqmuHqmJHqmJJqRVLqRmVqumqRmHqJVqmmRqRmHqRmHq",63,"VmRLHfuJq",15,8,23))');

?>
```

# Are you a developer?
> 1. Fork it!
> 2. Create your feature branch: git checkout -b my-new-feature
> 3. Commit your changes: git commit -am 'Add some feature'
> 4. Push to the branch: git push origin my-new-feature
> 5. Submit a pull request
