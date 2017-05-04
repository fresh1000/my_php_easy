<?php
	class Product
	{
		public static $data = array(); 
		
		 public static function set($key, $value)//Добавляет значение в реестр
    	{
        	self::$data[$key] = $value;
    	}

		public static function get($key) //Возвращает значение из реестра по ключу
		{
			return isset(self::$data[$key]) ? self::$data[$key]: null; 
		}

		final public static function removeProduct($key)   //удаляет значение реестра по ключу
		{
			if(array_key_exists($key, self::$data))
			{
				unset(self::$data[$key]);
			}
		}

	}

	Product::set('name', 'First product');

	print_r(Product::get('name'));