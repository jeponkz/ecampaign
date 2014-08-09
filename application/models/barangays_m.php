<?php

class Barangays_m extends MY_Model{
	protected $_table_name = 'eg_barangays';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'id';
	public $_rules = array();
	protected $_timestamps = FALSE;

	function construct(){
		parent::__construct();
	}
	
}