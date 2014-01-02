<?php
error_reporting( error_reporting() & ~E_NOTICE );

require 'vendor/autoload.php';

class DB
{
    private static $db;
    private static $sth;

    private function __construct()
    {

    }

    public static function instance()
    {
        if (!isset(self::$db)) {

            $path = dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'keymap.db';

            if (file_exists($path)) {
                self::$db = new PDO('sqlite:'.$path);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$db->query('PRAGMA encoding = "UTF-8";');
            } else {
                self::$db = new PDO('sqlite:'.$path);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$db->query('PRAGMA encoding = "UTF-8";');
                self::$db->query("
                    CREATE TABLE IF NOT EXISTS events (
                        'name' TEXT,
                        'browser' TEXT,
                        'version' TEXT,
                        'platform' TEXT,
                        'unicode' TEXT,
                        'glyph' TEXT,
                        'no' INTEGER,
                        'key' TEXT,
                        'char' TEXT,
                        'code' TEXT,
                        'keyIdentifier' TEXT,
                        'keyCode' INTEGER,
                        'charCode' INTEGER,
                        'which' INTEGER,
                        'modifiers' INTEGER,
                        'ctrlKey' INTEGER,
                        'shiftKey' INTEGER,
                        'altKey' INTEGER,
                        'metaKey' INTEGER
                    )
                ");
								for ($i = 0 ; $i <= 256; $i++) {
								    for ($j = 0; $j < 5; $j++) {
								        DB::insert(array(
								        'no' => $j,
								        'unicode' => sprintf('\u%04x', $i),
								        'glyph' => addcslashes(json_decode('"'.sprintf('\u%04x', $i).'"'), "\0..\32"),
								      ));
								    }
								}
            }
        }
        return self::$db;
    }

    public static function insert($data)
    {
        $db = self::instance();

        if (!isset(self::$sth)) {
            $sql = "
                INSERT INTO events (
                    'name',
                    'browser',
                    'version',
                    'platform',
                    'unicode',
                    'glyph',
                    'no',
                    'key',
                    'char',
                    'code',
                    'keyIdentifier',
                    'keyCode',
                    'charCode',
                    'which',
                    'modifiers',
                    'ctrlKey',
                    'shiftKey',
                    'altKey',
                    'metaKey'
                ) VALUES (
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?
                )
            ";
            self::$sth = $db->prepare($sql);
        }

        self::$sth->execute(array(
            $data['name'],
            $data['browser'],
            $data['version'],
            $data['platform'],
            $data['unicode'],
            $data['glyph'],
            $data['no'],
            $data['key'],
            $data['char'],
            $data['code'],
            $data['keyIdentifier'],
            $data['keyCode'],
            $data['charCode'],
            $data['which'],
            $data['modifiers'],
            $data['ctrlKey'],
            $data['shiftKey'],
            $data['altKey'],
            $data['metaKey'],
        ));

    }

}
DB::instance();
