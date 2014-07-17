<?php

class MainEngine{
	
	private static $postEngine;
	
	public static function installed()
	{
		//TODO validate MiCMS is installed
		return true;
	}
	
	public static function ExecuteRequestProcess(){
		self::$postEngine=new PostEngine();
		$tmpPostKVPair=self::$postEngine->postDataToKVPair();
	}
	
}

class PostEngine{
	public function postDataToKVPair(){
		
	}
}

class DataEngine{
	
}

class XMLEngine{
	
}

class TypeEngine{
	
}

class BrowserUIEngine{
	
}

class ModuleEngine{
	
}

?>