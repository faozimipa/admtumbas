<?php
class CONF {
	
	/* Flag for demo version */
	public $DEMO_VERSION = false;

	/* Data configuration for database */
	public $DB_SERVER = "localhost";
	public $DB_USER = "root";
	public $DB_PASSWORD = "";
	public $DB_NAME = "admin_tumbas";
	
	/* FCM key for notification */
	public $FCM_KEY = "AIzaSyCv-90mFpx3SCWlIKSXXXXXXXXXXXXXXXXXXXXXX";


    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit order */
	public $SECURITY_CODE = "8V06LupAaMBLtQqyqTxmcN42nn27FlejvaoSM3zXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
	
}	
?>