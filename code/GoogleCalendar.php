<?php 
class GoogleCalendar extends DataObjectDecorator {

	function extraStatics() {
		return array(
			'db'=> array(
			),
			'has_many' => array(
			),
		);
	}
	

	function updateCMSFields(FieldSet &$fields) {
	
	}
	
	function GoogleCalendar(){
		$user = 'fairoakparent@gmail.com';
		$pass = 'fairoakparent1';
		$service = Zend_Gdata_Calendar::AUTH_SERVICE_NAME; // predefined service name for calendar
		$client = Zend_Gdata_ClientLogin::getHttpClient($user,$pass,$service);
		
		Debug::show($client);
		
	}
	
	
}
class GoogleCalendar_Controller extends Extension {

}