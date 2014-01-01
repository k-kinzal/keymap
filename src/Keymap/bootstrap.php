<?php
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
		if (!isset(self::$db))
		{
			$path = dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'keymap.db';
			@unlink($path);
			self::$db = new PDO('sqlite:'.$path);
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$db->query('PRAGMA encoding = "UTF-8";');
			self::$db->query("
				CREATE TABLE Events (
					'no' INTEGER PRIMARY KEY AUTOINCREMENT,
					'name' TEXT,
					'browser' TEXT,
					'version' TEXT,
					'platform' TEXT,
					'index' INTEGER,
					'unicode' TEXT,
					'glyph' TEXT,
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
		}
		return self::$db;
	}

	public static function insert($data)
	{
		$db = self::instance();

		if (!isset(self::$sth))
		{
			$sql = "
				INSERT INTO Events (
					'name',
					'browser',
					'version',
					'platform',
					'index',
					'unicode',
					'glyph',
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

		self::$sth->execute(self::$sth, [
			$data['name'],
			$data['browser'],
			$data['version'],
			$data['platform'],
			$data['index'],
			$data['unicode'],
			$data['glyph'],
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
		]);

	}

}