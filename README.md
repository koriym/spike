```
php bin/save.php
php bin/load.php
rm src/A.php
php bin/load.php
```

Fatal error: Uncaught Error: The script tried to call a method on an incomplete object. Please ensure that the class definition "A" of the object you are trying to operate on was loaded _before_ unserialize() gets called or provide an autoloader to load the class definition in /private/tmp/spike/bin/load.php:5
