<?php

// 1. Include autoloader
require __DIR__.'/../../vendor/autoload.php';

// 2. Import namespace
use SebaCarrasco93\CryPhpto\CryPhpto;

// 3. Decrypt
echo CryPhpto::decrypt('7hVEhd0MoyIuuEYSB1McHWRjL3llbzAyOS9tV0ZyZFBDVDZOUlE9PQ');

// Extra: also, you can use emoji 🔓 as method name
// echo CryPhpto::🔓('STGZWnvLqxbb2y26e+HuDlZHcHN2ckRTQU9NaTkzOWw5QTlhNUE9PQ==⏎');
