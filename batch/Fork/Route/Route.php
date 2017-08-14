<?php

namespace Fork\Route;

use Fork\Assembly\Main as AssemblyMain;

class Route{
    
    public static function Request($Path, $Class, $Method){

	if( ( empty($_SERVER['REDIRECT_URL']) && $Path !== '/' ) ||
	    $Path !== $_SERVER['REDIRECT_URL'] ||
		      $Path !== $_SERVER['REQUEST_URI'] ){
	    
	    return false;
	}
	
	# Load config

	\Fork\Assembly\Configs::Defaults();

	\Fork\Assembly\Configs::Configs();

	#Create object Controller (depending on the request)
	
	$Controller = sprintf('\\Controllers\\%s',$Class);

	$AssemblyController = new $Controller();
	
	if($AssemblyController->$Method() == null){
	    \Fork\Assistant\Exception::errorURL();
	}
    }
}
