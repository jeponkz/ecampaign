<?php

class Cities_m extends MY_Model{
	protected $_table_name = 'eg_cities';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'id';
	public $_rules = array();
	protected $_timestamps = FALSE;

	function construct(){
		parent::__construct();
	}
	
}