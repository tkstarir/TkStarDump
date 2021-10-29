# TkStarDump

Clone of PHP var_dump with Alias

Use this function if you have a dedicated framework, or you do not like use var_dump

TDD Function is aliases of TkStarDumpHandler


## Part of TkStar LaunchPad Framework
**_This Package is a part of [LaunchPad Framework](https://github.com/TkStarIR/LaunchPad)_**


## Single Parameter Samples:
```
<?php
tdd('AmirAli Esteki'); // String

tdd('AmirAli Esteki 1378'); // String

tdd('1378'); // Integer as String

tdd(1378); // Integer

tdd(1.1); // Float | Double

tdd(1.123456789); // Float | Double

tdd(true); // Boolean

tdd(false); // Boolean

tdd(1); // Boolean

tdd(0); // Boolean

tdd(curl_init()); // CurlHandle Object | Resource

tdd(null); // NULL

tdd(array()); // Array

tdd(array(array())); // Array

tdd(array('name' => 'TkStar', 'details' => array('name' => 'AmirAli', 'family' => 'Esteki', 'birthday' => '1378'))); // Array

tdd((object)array()); // stdClass Object

tdd((object)array('name' => 'TkStar', 'details' => (object)array('name' => 'AmirAli', 'family' => 'Esteki', 'birthday' => '1378'))); // stdClass Object

tdd(new AmirAli(){ }); // AmirAli Object

tdd((object)array('first' => new AmirAli(), 'last' => new AmirAli(), (object)array())); // stdClass Object
?>
```


## Multiple Parametrs Samples:
```
<?php
tdd('AmirAli Esteki', 'AmirAli', 'Esteki', 1378); // String, String, String, Integer

tdd(1.1, 1.123456789); // Float | Double, Float | Double

tdd(true, false, 1, 0); // Boolean, Boolean, Boolean, Boolean

tdd(curl_init(), null); // CurlHandle Object | Resource, NULL

tdd('AmirAli', array(), array(array()), array('name' => 'TkStar', 'details' => array('name' => 'AmirAli', 'family' => 'Esteki', 'birthday' => '1378'))); // String, Array, Array, Array

tdd((object)array(), (object)array('name' => 'TkStar', 'details' => (object)array('name' => 'AmirAli', 'family' => 'Esteki', 'birthday' => '1378'))); // stdClass Object | stdClass Object

tdd((object)array('first' => new AmirAli(), 'last' => new AmirAli(), (object)array())); // stdClass Object
?>
```
