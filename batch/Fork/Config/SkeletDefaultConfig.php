<?php

namespace Fork\Config;

class SkeletDefaultConfig{

    public static $Precision;

    public static $OutputBuffering;

    public static $OutputHandler;

    public static $UrlRewriterTags;

    public static $UrlRewriterHosts;
    
    public static $ImplicitFlush;

    public static $UnserializeCallbackFunc;

    public static $SerializePrecision;

    public static $OpenBasedir;

    public static $DisableFunctions;

    public static $DisableClasses;

    public static $IgnoreUserAbort;

    public static $RealPathCacheSize;

    public static $RealPathCacheTTL;

    public static $ExposePHP;

    public static $ArgSeparatorOutput;

    public static $ArgSeparatorInput;

    public static $VariablesOrder;

    public static $RequestOrder;

    public static $RegisterArgcArgv;
    
    public static $AutoGlobalsJit;

    public static $ExtensionDir;

    public static $SysTempDir;

    public static $AllowUrlFopen;

    public static $AllowUrlInclude;

    public static $DefaultSocketTimeout;

    public static $AutoDetectLineEndings;

    # The number of significant digits displayed in floating point numbers.
    public static function Precision($Parameter = 14){

	ini_set('precision',$Parameter);
	
	return true;
    }

    # Output buffering is a mechanism for controlling how much output data
    # (excluding headers and cookies) PHP should keep internally before pushing that
    # data to the client. If your application's output exceeds this setting, PHP
    # will send that data in chunks of roughly the size you specify.
    # Turning on this setting and managing its maximum buffer size can yield some
    # interesting side-effects depending on your application and web server.
    # You may be able to send headers and cookies after you've already sent output
    # through print or echo. You also may see performance benefits if your server is
    # emitting less packets due to buffered output versus PHP streaming the output
    # as it gets it. On production servers, 4096 bytes is a good setting for performance
    # reasons.
    # Note: Output buffering can also be controlled via Output Buffering Control
    #   functions.
    # Possible Values:
    #   On = Enabled and buffer is unlimited. (Use with caution)
    #   Off = Disabled
    #   Integer = Enables the buffer and sets its maximum size in bytes.
    # Note: This directive is hardcoded to Off for the CLI SAPI
    # Default Value: Off
    # Development Value: 4096
    # Production Value: 4096
    public static function OutputBuffering($Parameter = 4096){

	ini_set('output_buffering',$Parameter);
	
	return true;
    }

    # Implicit flush tells PHP to tell the output layer to flush itself
    # automatically after every output block.  This is equivalent to calling the
    # PHP function flush() after each and every call to print() or echo() and each
    # and every HTML block.  Turning this option on has serious performance
    # implications and is generally recommended for debugging purposes only.
    # Note: This directive is hardcoded to On for the CLI SAPI
    public static function ImplicitFlush($Parameter = 'Off'){

	ini_set('implicit_flush',$Parameter);
	
	return true;
    }

    # The unserialize callback function will be called (with the undefined class'
    # name as parameter), if the unserializer finds an undefined class
    # which should be instantiated. A warning appears if the specified function is
    # not defined, or if the function doesn't include/implement the missing class.
    # So only set this entry, if you really want to implement such a
    # callback-function.
    public static function UnserializeCallbackFunc($Parameter = ''){

	ini_set('unserialize_callback_func',$Parameter);
	
	return true;
    }
    
    # When floats & doubles are serialized store serialize_precision significant
    # digits after the floating point. The default value ensures that when floats
    # are decoded with unserialize, the data will remain the same.
    # The value is also used for json_encode when encoding double values.
    # If -1 is used, then dtoa mode 0 is used which automatically select the best
    # precision.
    public static function SerializePrecision($Parameter = -1){

	ini_set('serialize_precision',$Parameter);
	
	return true;
    }

    # open_basedir, if set, limits all file operations to the defined directory
    # and below.  This directive makes most sense if used in a per-directory
    # or per-virtualhost web server configuration file.
    public static function OpenBasedir($Parameter = ''){

	ini_set('open_basedir',$Parameter);
	
	return true;
    }
    
    # This directive allows you to disable certain functions for security reasons.
    # It receives a comma-delimited list of function names.
    public static function DisableFunctions($Parameter = ''){

	ini_set('disable_functions',$Parameter);
	
	return true;
    }
    
    # This directive allows you to disable certain classes for security reasons.
    # It receives a comma-delimited list of class names.
    public static function DisableClasses($Parameter = ''){

	ini_set('disables_classes',$Parameter);
	
	return true;
    }

    
    # If enabled, the request will be allowed to complete even if the user aborts
    # the request. Consider enabling it if executing long requests, which may end up
    # being interrupted by the user or a browser timing out. PHP's default behavior
    # is to disable this feature.
    public static function IgnoreUserAbort($Parameter = 'On'){

	ini_set('ignore_user_abort',$Parameter);
	
	return true;
    }

    # Determines the size of the realpath cache to be used by PHP. This value should
    # be increased on systems where PHP opens many files to reflect the quantity of
    # the file operations performed.
    public static function RealPathCacheSize($Parameter = '16k'){

	ini_set('realpath_cache_size',$Parameter);
	
	return true;
    }
    
    # Duration of time, in seconds for which to cache realpath information for a given
    # file or directory. For systems with rarely changing files, consider increasing this
    # value.
    public static function RealPathCacheTTL($Parameter = 120){

	ini_set('realpath_cache_ttl',$Parameter);
	
	return true;
    }

    # Decides whether PHP may expose the fact that it is installed on the server
    # (e.g. by adding its signature to the Web server header).  It is no security
    # threat in any way, but it makes it possible to determine whether you use PHP
    # on your server or not.
    public static function ExposePHP($Parameter = 'Off'){

	ini_set('expose_php',$Parameter);
	
	return true;
    }

    # The separator used in PHP generated URLs to separate arguments.
    # PHP's default setting is "&".
    public static function ArgSeparatorOutput($Parameter = '&amp#'){

	ini_set('arg_separator.output',$Parameter);
	
	return true;
    }

    # List of separator(s) used by PHP to parse input URLs into variables.
    # PHP's default setting is "&".
    # NOTE: Every character in this directive is considered as separator!
    public static function ArgSeparatorInput($Parameter = "#&"){

	ini_set('arg_separator.input',$Parameter);
	
	return true;
    }

    # This directive determines which super global arrays are registered when PHP
    # starts up. G,P,C,E & S are abbreviations for the following respective super
    # globals: GET, POST, COOKIE, ENV and SERVER. There is a performance penalty
    # paid for the registration of these arrays and because ENV is not as commonly
    # used as the others, ENV is not recommended on productions servers. You
    # can still get access to the environment variables through getenv() should you
    # need to.
    # Default Value: "EGPCS"
    # Development Value: "GPCS"
    # Production Value: "GPCS"#
    public static function VariablesOrder($Parameter = 'GPCS'){

	ini_set('variables_order',$Parameter);
	
	return true;
    }
    
    # This directive determines which super global data (G,P & C) should be
    # registered into the super global array REQUEST. If so, it also determines
    # the order in which that data is registered. The values for this directive
    # are specified in the same manner as the variables_order directive,
    # EXCEPT one. Leaving this value empty will cause PHP to use the value set
    # in the variables_order directive. It does not mean it will leave the super
    # globals array REQUEST empty.
    # Default Value: None
    # Development Value: "GP"
    # Production Value: "GP"
    public static function RequestOrder($Parameter = 'GP'){

	ini_set('request_order',$Parameter);
	
	return true;
    }
    
    # This directive determines whether PHP registers $argv & $argc each time it
    # runs. $argv contains an array of all the arguments passed to PHP when a script
    # is invoked. $argc contains an integer representing the number of arguments
    # that were passed when the script was invoked. These arrays are extremely
    # useful when running scripts from the command line. When this directive is
    # enabled, registering these variables consumes CPU cycles and memory each time
    # a script is executed. For performance reasons, this feature should be disabled
    # on production servers.
    # Note: This directive is hardcoded to On for the CLI SAPI
    # Default Value: On
    # Development Value: Off
    # Production Value: Off
    public static function RegisterArgcArgv($Parameter = 'Off'){

	ini_set('register_argc_argv',$Parameter);
	
	return true;
    }

    
    # When enabled, the ENV, REQUEST and SERVER variables are created when they're
    # first used (Just In Time) instead of when the script starts. If these
    # variables are not used within a script, having this directive on will result
    # in a performance gain. The PHP directive register_argc_argv must be disabled
    # for this directive to have any affect.
    public static function AutoGlobalsJit($Parameter = 'On'){

	ini_set('auto_globals_jit',$Parameter);
	
	return true;
    }
    
    # Directory in which the loadable extensions (modules) reside.
    public static function ExtensionDir($Parameter = './'){

	ini_set('extension_dir',$Parameter);
	
	return true;
    }
    
    # Directory where the temporary files should be placed.
    # Defaults to the system default (see sys_get_temp_dir)
    public static function SysTempDir($Parameter = '/tmp'){

	ini_set('sys_temp_dir',$Parameter);
	
	return true;
    }
    
    # Whether to allow the treatment of URLs (like http:// or ftp://) as files.
    public static function AllowURLFopen($Parameter = 'On'){

	ini_set('allpw_url_fopen',$Parameter);
	
	return true;
    }

    # Whether to allow include/require to open URLs (like http:// or ftp://) as files.
    # http://php.net/allow-url-include
    #allow_url_include = Off
    public static function AllowURLInclude($Parameter = 'Off'){

	ini_set('allow_url_include',$Parameter);
	
	return true;
    }
}
