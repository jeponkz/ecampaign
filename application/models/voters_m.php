<?php

class Voters_m extends MY_Model{
	protected $_table_name = 'eg_voters';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'id';
	public $_rules = array();
	protected $_timestamps = FALSE;
	
}