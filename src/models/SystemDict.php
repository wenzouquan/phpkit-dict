<?php
namespace phpkit\dict\models;

class SystemDict extends \phpkit\core\BaseModel {
	protected $value;
	public function initialize() {
		parent::initialize();
	}

	public function getValue() {
		var_dump($this->value);
	}

}
