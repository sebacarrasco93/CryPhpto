<?php

namespace SebaCarrasco93\CryPhpto;

trait AliasesEmojis
{
    public static function 🔑(string $password): void
    {
        self::setPassword($password);
    }

    public static function 🔒(string $text): string
    {
        return self::encrypt($text);
    }

    public static function 🔓(string $text): string
    {
        return self::decrypt($text);
    }
}
