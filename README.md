# TkStarDump

Clone of PHP var_dump


Use This Function if You Have a Dedicated Framework, or You do not Love Use var_dump, or in Laravel do not Like dd Function

tdd Function is a Function for Handle Multiple inputs

You can Use Every Both of Them: tdd(mixed multiple) or tddHandler(mixed single)

Samples:


## Single Parametr Samples:
```
	tdd("amirali esteki");
	tdd("amirali esteki 1378");
	tdd("1378");
	tdd(1378);
	tdd(1.1);
	tdd(1.123456789);
	tdd(true);
	tdd(false);
	tdd(1);
	tdd(0);
	tdd(curl_init());
	tdd(null);
	tdd(array());
	tdd(array(array()));
	tdd(array('name' => 'TkStar', 'details' => array('name' => 'amirali', 'family' => 'esteki', 'birthday' => '1378')));
	tdd((object)array());
	tdd((object)array('name' => 'TkStar', 'details' => (object)array('name' => 'amirali', 'family' => 'esteki', 'birthday' => '1378')));
	class amirali { }
	tdd(new amirali());
	tdd((object)array('first' => new amirali(), 'last' => new amirali(), (object)array()));
```


## Multiple Parametrs Samples:
```
	tdd("amirali esteki", "amirali", "esteki", 1378);
	tdd(1.1, 1.123456789);
	tdd(true, false, 1, 0);
	tdd(curl_init(), null);
	tdd("amirali", array(), array(array()), array('name' => 'TkStar', 'details' => array('name' => 'amirali', 'family' => 'esteki', 'birthday' => '1378')));
	tdd((object)array(), (object)array('name' => 'TkStar', 'details' => (object)array('name' => 'amirali', 'family' => 'esteki', 'birthday' => '1378')));
	tdd((object)array('first' => new amirali(), 'last' => new amirali(), (object)array()));
```
