<?php
	class ReadList
	{
		public $stack;
		public $limit;

		public function __construct($limit = 10)
		{
			$this->stack = array(); //инициализация стека
			$this->limit = $limit; //устанавливаем ограничение на количество елементов в стеке 
		}
		
		public function push($item)
		{
			if(count($this->stack) < $this->limit) //проверяем не полон ли наш стек
			{
				array_unshift($this->stack, $item); //добавляем елемент в начало массива
			} else {
				throw new RuntimeExeption("Stack is overflow!");
			}

		}

		public function pop()
		{
			if($this->isEmpty())
			{
				throw new RuntimeExeption("Stack is empty!");
			} else {
				return array_shift($this->stack); //извлекаем первый елемент массива
			}
		}

		public function top()
		{
			return current($this->stack);
		}

		public function isEmpty()
		{
			return empty($this->stack);
		}
	}

	
	

	$myBooks = new ReadList();

	$myBooks->push('Leo Messi');
	$myBooks->push('Lox');
	$myBooks->push('A Dance with Dragons');
	$myBooks->push('A Feast for Crows');
	$myBooks->push('A Storm of Swords'); 
	$myBooks->push('A Clash of Kings');
	$myBooks->push('A Game of Thrones');

	echo $myBooks->pop();
	echo $myBooks->pop();
	echo $myBooks->top();
?>