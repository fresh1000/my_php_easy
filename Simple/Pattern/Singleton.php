<?php
	final class Product
	{
		public static $instanse;
		public $a;

		public static function getInstance()//Возвращает экземпляр себя
		{
			if(!(self::$instanse instanceof self))
			{
				self::$instanse = new self();
			}

			return self::$instanse;
		}

		private function __construct()//Конструктор закрыт
		{

		}

		private function __clone()//Клонирование запрещено
		{

		}

		private function __sleep()//Сериализация запрещена
		{

		}

		private function __wakeup()//Десериализация запрещена
		{

		}
	}

	$firstProduct = Product::getInstance();
	$secondProduct = Product::getInstance();

	$firstProduct->a = 1;
	$secondProduct->a = 2;

	print_r($firstProduct->a);
	print_r($secondProduct->a);