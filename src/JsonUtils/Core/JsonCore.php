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
        # DATA
        $result = null;


        # CODE
        if ($json === null) {
            return $result;
        }

        if (StringUtils::isWhitespaceOnly($json) || $json === '{}') {
            $result = true;
            return $result;
        }

        $result = false;
        return $result;
    }



    /**
     * @see JsonTest::testDecode()
     * 
     * 
     * 
     */
    public static function decode(?string $json, ?bool $toArray = null, int $depth = 512, int $flag = 0): null|object|array
    {
        # DATA
        $result = null;


        # CODE
        $result = json_decode($json, $toArray, $depth, $flag);
        
        return $result;
    }



    /**
     * @see JsonTest::testEncode()
     * 
     * 
     * 
     */
    public static function encode(mixed $data, int $depth = 512, int $flags = 0): ?string
    {
        # DATA
        $result = null;


        # CODE
        $result = json_encode($data, $flags, $depth);

        return $result;
    }



    /**
     * @see JsonTest::testGetLastError()
     * 
     * 
     * 
     */
    public static function getLastError(): int
    {
        # DATA
        $result = null;


        # CODE
        $result = json_last_error();
        
        return $result;
    }



    /**
     * @see JsonTest::testGetLastErrorMessage()
     * 
     * 
     * 
     */
    public static function getLastErrorMessage(): string
    {
        # DATA
        $result = null;


        # CODE
        $result = json_last_error_msg();
        
        return $result;
    }
}
