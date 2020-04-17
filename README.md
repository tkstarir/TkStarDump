# TkStarDump
Clone of PHP var_dump


Use This Function if You Have a Dedicated Framework, or You do not Love Use var_dump, or in Laravel do not Like dd Function

TkStarDump Function is a Function for Handle Multiple inputs

You can Use Every Both of Them: TkStarDump(mixed multiple) or TkStarDumpHandler(mixed single)

Samples:


## Single Parametr Samples:
```
	TkStarDump("amirali esteki");
	TkStarDump("amirali esteki 1378");
	TkStarDump("1378");
	TkStarDump(1378);
	TkStarDump(1.1);
	TkStarDump(1.123456789);
	TkStarDump(true);
	TkStarDump(false);
	TkStarDump(1);
	TkStarDump(0);
	TkStarDump(curl_init());
	TkStarDump(null);
	TkStarDump(array());
	TkStarDump(array(array()));
	TkStarDump(array('name' => 'TkStar', 'details' => array('name' => 'amirali', 'family' => 'esteki', 'birthday' => '1378')));
	TkStarDump((object)array());
	TkStarDump((object)array('name' => 'TkStar', 'details' => (object)array('name' => 'amirali', 'family' => 'esteki', 'birthday' => '1378')));
	class amirali { }
	TkStarDump(new amirali());
	TkStarDump((object)array('first' => new amirali(), 'last' => new amirali(), (object)array()));
```


## Multiple Parametrs Samples:
```
	TkStarDump("amirali esteki", "amirali", "esteki", 1378);
	TkStarDump(1.1, 1.123456789);
	TkStarDump(true, false, 1, 0);
	TkStarDump(curl_init(), null);
	TkStarDump("amirali", array(), array(array()), array('name' => 'TkStar', 'details' => array('name' => 'amirali', 'family' => 'esteki', 'birthday' => '1378')));
	TkStarDump((object)array(), (object)array('name' => 'TkStar', 'details' => (object)array('name' => 'amirali', 'family' => 'esteki', 'birthday' => '1378')));
	TkStarDump((object)array('first' => new amirali(), 'last' => new amirali(), (object)array()));
```
