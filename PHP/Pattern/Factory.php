<?php
	class Auto {
		private $vehicle_maker;
		private $vehicle_model;

		public function __construct($maker, $model) {
			$this->vehicle_maker = $maker;
			$this->vehicle_model = $model;
		}

		public function get_meker_model() {
			return $this->vehicle_maker.' '.$this->vehicle_model;
		}
	}

	class AutoFactory {
		public static function create($maker, $model) {
			return new Auto($maker, $model);
		}
	}

	$bmw = AutoFactory::create("BMW","M3");

	print_r($bmw->get_meker_model());