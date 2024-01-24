<?php

namespace SebaCarrasco93\CryPhpto;

class CryPhpto
{
    use AliasesEmojis;

    static public $CYPHER_TYPE = 'aes-256-cbc';

    static public $PSK = '@SextaNet-2024';

    public static function setPassword(string $password): void
    {
        self::$PSK = $password;
    }

    public static function encrypt(string $text): string
    {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::$CYPHER_TYPE));
        $cifrado = openssl_encrypt($text, self::$CYPHER_TYPE, self::$PSK, 0, $iv);
        
        return base64_encode($iv.$cifrado);
    }

    public static function decrypt(string $text): string
    {
        $text = base64_decode($text);
        $iv = substr($text, 0, openssl_cipher_iv_length(self::$CYPHER_TYPE));
        $cifrado = substr($text, openssl_cipher_iv_length(self::$CYPHER_TYPE));

        return openssl_decrypt($cifrado, self::$CYPHER_TYPE, self::$PSK, 0, $iv);
    }
}
