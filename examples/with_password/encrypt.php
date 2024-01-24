<?php

// 1. Include autoloader
require __DIR__.'/../../vendor/autoload.php';

// 2. Import namespace
use SebaCarrasco93\CryPhpto\CryPhpto;

// 3. Set the Pre Shared Password (PSK)
CryPhpto::setPassword('MyCustomPassword'); // also CryPhpto::🔑('MyCustomPassword');

// 4. Encrypt text
echo CryPhpto::encrypt('Hello');
