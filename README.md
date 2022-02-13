# CommandHelper
CommandHelper - is a very useful thing for quick code testing and more!

# Examples:
### Code:
```
require_once('commandhelper.php');
CH::OUT('testing');
```

### Result:
<pre>
    Hello!
</pre>

**--------------------------------------------------------**

### Code:
```
require_once('commandhelper.php');
$array = [
            'el' => 'hello', 
            'el_array' => [
                'el1' => 'hi'
            ]
        ];
$array2 = CH::ARRAY_TO_OBJECT($array);
CH::OUT($array2);
```

### Result:
<pre>
    stdClass Object (
    [el] => hello
    [el_array] => stdClass Object (
            [el1] => hi
        )
    )
</pre>