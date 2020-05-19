<?php
	/**
	 * Global settings for ATS
	 * 
	 * This script will store application wide settings, constants etc.
	 * 
	 * @author WJR
	 * 
	 */
	date_default_timezone_set('Europe/London');
	
	ini_set('display_errors','On');
	
	 define('DB_USER', 'will');
	 define('DB_PASSWORD', 'password');
	 define('DB', 'renegade');
	 define('DB_HOST', 'localhost');
	
	define('CURRENCY', 'GBP');
	define('CAT_AND_HONEY', 'S9LOw9C');
	define('APP_DATE_FORMAT', 'Y-m-d H:i:s');
	define('LOCKIT', 'f47u6TD7YAbDjUpZ');
	
	/*
	 * Seniority values, these are taken from the values set up 
	 * in ROLES_SD
	 */
	define('SYS_ADMIN', 100);
	define('TEAM_LEADER', 60);
	define('ADMIN', 80);
	define('MANAGER', 40);
	define('AGENT', 20);
	define('CREDIT', 90);
	
	
	define('DOMAIN', 'http://localhost:80/sandbox/');

	
	
	
	
