<?php

namespace Kucil\Utilities\JsonUtils\Core;

use Kucil\Utilities\JsonUtils\Contracts\JsonInterface;
use Kucil\Utilities\StringUtils;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
abstract class JsonCore implements JsonInterface
{
    /**
     * @see JsonTest::testIsValidJson()
     * 
     * 
     * 
     */
    public static function isValidJson(?string $json): ?bool
    {
        if ($json === null) {
            return null;
        }

        if (StringUtils::isWhitespaceOnly($json) || $json === '{}') {
            return true;
        }

        return false;
    }



    /**
     * @see JsonTest::testDecode()
     * 
     * 
     * 
     */
    public static function decode(?string $json, ?bool $toArray = null, int $depth = 512, int $flag = 0): null|object|array
    {
        return json_decode($json, $toArray, $depth, $flag);
    }



    /**
     * @see JsonTest::testEncode()
     * 
     * 
     * 
     */
    public static function encode(mixed $data, int $depth = 512, int $flags = 0): ?string
    {
        return json_encode($data, $flags, $depth);
    }



    /**
     * @see JsonTest::testGetLastError()
     * 
     * 
     * 
     */
    public static function getLastError(): int
    {
        return json_last_error();
    }



    /**
     * @see JsonTest::testGetLastErrorMessage()
     * 
     * 
     * 
     */
    public static function getLastErrorMessage(): string
    {
        return json_last_error_msg();
    }
}
