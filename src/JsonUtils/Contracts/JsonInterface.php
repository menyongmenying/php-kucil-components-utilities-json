<?php

namespace Kucil\Utilities\JsonUtils\Contracts;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
interface JsonInterface
{
    /**
     * Meneruskan hasil pemeriksaan apakah string yang diberikan merupakan data json yang valid.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $json Nilai string yang dijadikan objek pemeriksaan.
     *
     * @return ?bool         Hasil pemeriksaan apakah nilai $json merupakan data json yang valid.
     * 
     * @see    JsonTest::isValidJson()
     * 
     * 
     * 
     */
    public static function isValidJson(?string $json): ?bool;



    /**
     * Meneruskan hasil decode dari nilai string yang telah diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?string           $json    Nilai string yang akan didecode.
     * @param  ?bool             $toArray 
     * @param  int               $depth
     * @param  int               $flags
     *
     * @return null|object|array          Hasil decode dari nilai string yang diberikan.
     * 
     * @see    JsonTest::testDecode()
     * 
     * 
     * 
     */
    public static function decode(?string $json, ?bool $toArray, int $depth, int $flags): null|object|array;



    /**
     * Meneruskan hasil encode json dari nilai data yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  mixed $data  Nilai yang akan dijadikan objek encode.
     * @param  int   $depth
     * @param  int   $flags
     *
     * @return ?string      Hasil encode json dari nilai $data.
     * 
     * @see    JsonUtilsTest::testEncode()
     * 
     * 
     * 
     */
    public static function encode(mixed $data, int $depth, int $flags): ?string;



    /**
     * Meneruskan kode error terakhir.
     *
     * @return int Kode error terakhir.
     * 
     * @see    JsonUtilsTest::testGetLastError()
     * 
     * 
     * 
     */
    public static function getLastError(): int;



    /**
     * Meneruskan pesan error terakhir.
     *
     * @return string Pesan error terakhir.
     * 
     * @see    JsonUtilsTest::testGetLastErrorMessage()
     * 
     * 
     * 
     */
    public static function getLastErrorMessage(): string;
}
