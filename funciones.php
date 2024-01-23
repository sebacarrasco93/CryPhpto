<?php

class Bytez
{
    static public $CIFRADO = 'aes-256-cbc';
    static public $CLAVE = '@SextaNet-2024';

    public static function cifrar(string $texto)
    {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::$CIFRADO));
        $cifrado = openssl_encrypt($texto, self::$CIFRADO, self::$CLAVE, 0, $iv);
        
        return base64_encode($iv.$cifrado);
    }

    public static function descifrar(string $texto)
    {
        $texto = base64_decode($texto);
        $iv = substr($texto, 0, openssl_cipher_iv_length(self::$CIFRADO));
        $cifrado = substr($texto, openssl_cipher_iv_length(self::$CIFRADO));

        return openssl_decrypt($cifrado, self::$CIFRADO, self::$CLAVE, 0, $iv);
    }
}
