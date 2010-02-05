<?php
/******************************************************************************
 Pepper
 
 Developer		: James Daniels
 Plug-in Name	: Date Stamp
 
 http://github.com/jamesdaniels/datestamp_pepper

 ******************************************************************************/

$installPepper = "JD_DateStamp";

class JD_DateStamp extends Pepper
{
	var $version	= 1; 
	var $info		= array
	(
		'pepperName'	=> 'DateStamp',
		'pepperUrl'		=> 'http://github.com/jamesdaniels/datestamp_pepper',
		'pepperDesc'	=> 'Puts a date on each visit, for analysis',
		'developerName'	=> 'James Daniels',
		'developerUrl'	=> 'http://github.com/jamesdaniels/'
	);
	var $manifest	= array
	(
		'visit'	=> array
		(
			'date' => "date NOT NULL"
		)
	);
	
	/**************************************************************************
	 isCompatible()
	 **************************************************************************/
	function isCompatible()
	{
		if ($this->Mint->version < 214)
		{
			$compatible = array
			(
				'isCompatible'	=> false,
				'explanation'	=> '<p>This Pepper requires Mint 2.14. Mint 2, a paid upgrade from Mint 1.x, is available at <a href="http://www.haveamint.com/">haveamint.com</a>.</p>'
			);
		}
		else
		{
			$compatible = array
			(
				'isCompatible'	=> true,
			);
		}
		return $compatible;
	}
	
	/**************************************************************************
	 onRecord()
	 **************************************************************************/
	function onRecord() 
	{
		return array
		(
			'date' => date('o-m-d')
		);
	}
}