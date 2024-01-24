<?php

// 1. Include autoloader
require __DIR__.'/../../vendor/autoload.php';

// 2. Import namespace
use SebaCarrasco93\CryPhpto\CryPhpto;

// 3. Encrypt
echo CryPhpto::encrypt('Text to encrypt');

// Extra: also, you can use emoji 🔒 as method name
// echo CryPhpto::🔒('It encrypts too');
