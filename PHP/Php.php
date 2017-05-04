<?php
	abstract class Sing {
		protected $first;
		protected $second;

		public function __construct($first, $second) {
			$this->first = $first;
			$this->second = $second;
		}

		public function subl() {
			return $this->first * $this->second;
		}
		
		public function min() {
			if($this->first < $this->second){
				return $this->first;
			}
			return $this->second;
		}

		abstract function max();

		abstract function minus();

	}

    class Sing2 extends Sing {
    	public function sum() {
			return $this->first + $this->second;
		}
		public function max() {
			if($this->first > $this->second){
				return $this->first;
			}
			return $this->second;
		}
		public function minus(){
			return $this->first + $this->second;
		}
    }
    class Sing3 extends Sing {
    	public function max() {
			if($this->first > $this->second){
				return $this->first;
			}
			return $this->second;
		}
		public function minus(){
			return $this->first + $this->second;
		}
    }

	$obj = new Sing3(2, 5);
	$a = $obj->max();
	echo $a;