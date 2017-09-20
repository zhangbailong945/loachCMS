<?php

class ManagerAction extends Action{
   
	public function __construct(&$tpl)
	{
	   parent::__construct($tpl,new ManagerModel());
	}

}