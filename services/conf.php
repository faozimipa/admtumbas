<?php
class CONF {
	
	/* Flag for demo version */
	public $DEMO_VERSION = false;

	/* Data configuration for database */
	public $DB_SERVER = "localhost";
	public $DB_USER = "tumbas_admin";
	public $DB_PASSWORD = "9undulP4cul";
	public $DB_NAME = "tumbas_admin";
	
	/* FCM key for notification */
	public $FCM_KEY = "AAAAsOM5kL8:APA91bFmeNbRrBTaXPTDQqN720vYAC9wPiTC_txiVNI-WRwmrKC7h6o1pUCzhoyG_6YaPAGOxw3gWilsMTQxE_HMjB5CS9fUVVXBhh_zhNwHbEn-DXuYGnfSWSb5rEyktMzTlECF-hie";


    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit order */
	public $SECURITY_CODE = "jHJfSYHGWWeJWLZzVPag35PW8Fu8sySq69b2Oks9sNeLuCIUAIF3HdnJHjhvTpymhv3UMAlpo2ZkAW8YMyDGwEf56EInw0aaIbJ1";
	
}	
?>