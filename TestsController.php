<?php
App::uses('AppController', 'Controller');

class TestsController extends AppController {

	public $helpers = array('Html', 'Session');
	public $components = array('Session');

 	public function beforeFilter() {
		parent::beforeFilter();
	}
	
	function index() {
		echo 'This is test';
    }	
	
	
}
