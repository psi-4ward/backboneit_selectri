<?php

abstract class SelectriAbstractDataFactory implements SelectriDataFactory {

	public static function create() {
		$clazz = get_called_class();
		$factory = new $clazz();
		return $factory;
	}

	private $widget;

	public function __construct() {
	}

	public function __clone() {
	}

	public function setParameters($params) {
		return $this;
	}

	public function setWidget(SelectriWidget $widget) {
		$this->widget = $widget;
		return $this;
	}

	public function getWidget() {
		return $this->widget;
	}

}
