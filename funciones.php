<?php

function cifrar(string $texto, string $clave)
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $cifrado = openssl_encrypt($texto, 'aes-256-cbc', $clave, 0, $iv);
    
    return base64_encode($iv.$cifrado);
}

function descifrar(string $texto, string $clave)
{
    $texto = base64_decode($texto);
    $iv = substr($texto, 0, openssl_cipher_iv_length('aes-256-cbc'));
    $cifrado = substr($texto, openssl_cipher_iv_length('aes-256-cbc'));

    return openssl_decrypt($cifrado, 'aes-256-cbc', $clave, 0, $iv);
}
