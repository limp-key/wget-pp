<?php

namespace Fork\Config;

class SkeletErrorConfig{

    public static $ErrorReporting;

    public static $DisplayErrors;

    public static $DisplayStartupErrors;

    public static $LogErrors;

    public static $LogErrorsMaxLen;

    public static $IgnoreRepeatedErrors;
    
    public static $IgnoreRepeatedSource;

    public static $ReportMemleaks;

    public static $ReportZendDebug;

    public static $TrackErrors;

    public static $XMLrpcErrors;

    public static $XMLrpcErrorNumber;

    public static $HtmlErrors;

    public static $ErrorPrependString;

    public static $ErrorAppendString;

    public static $ErrorLog;

    # This directive informs PHP of which errors, warnings and notices you would like
    # it to take action for. The recommended way of setting values for this
    # directive is through the use of the error level constants and bitwise
    # operators. The error level constants are below here for convenience as well as
    # some common settings and their meanings.
    # By default, PHP is set to take action on all errors, notices and warnings EXCEPT
    # those related to E_NOTICE and E_STRICT, which together cover best practices and
    # recommended coding standards in PHP. For performance reasons, this is the
    # recommend error reporting setting. Your production server shouldn't be wasting
    # resources complaining about best practices and coding standards. That's what
    # development servers and development settings are for.
    # Note: The php.ini-development file has this setting as E_ALL. This
    # means it pretty much reports everything which is exactly what you want during
    # development and early testing.
    #
    # Error Level Constants:
    # E_ALL             - All errors and warnings (includes E_STRICT as of PHP 5.4.0)
    # E_ERROR           - fatal run-time errors
    # E_RECOVERABLE_ERROR  - almost fatal run-time errors
    # E_WARNING         - run-time warnings (non-fatal errors)
    # E_PARSE           - compile-time parse errors
    # E_NOTICE          - run-time notices (these are warnings which often result
    #                     from a bug in your code, but it's possible that it was
    #                     intentional (e.g., using an uninitialized variable and
    #                     relying on the fact it is automatically initialized to an
    #                     empty string)
    # E_STRICT          - run-time notices, enable to have PHP suggest changes
    #                     to your code which will ensure the best interoperability
    #                     and forward compatibility of your code
    # E_CORE_ERROR      - fatal errors that occur during PHP's initial startup
    # E_CORE_WARNING    - warnings (non-fatal errors) that occur during PHP's
    #                     initial startup
    # E_COMPILE_ERROR   - fatal compile-time errors
    # E_COMPILE_WARNING - compile-time warnings (non-fatal errors)
    # E_USER_ERROR      - user-generated error message
    # E_USER_WARNING    - user-generated warning message
    # E_USER_NOTICE     - user-generated notice message
    # E_DEPRECATED      - warn about code that will not work in future versions
    #                     of PHP
    # E_USER_DEPRECATED - user-generated deprecation warnings
    #
    # Common Values:
    #   E_ALL (Show all errors, warnings and notices including coding standards.)
    #   E_ALL & ~E_NOTICE  (Show all errors, except for notices)
    #   E_ALL & ~E_NOTICE & ~E_STRICT  (Show all errors, except for notices and coding standards warnings.)
    #   E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR  (Show only errors)
    # Default Value: E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
    # Development Value: E_ALL
    # Production Value: E_ALL & ~E_DEPRECATED & ~E_STRICT
    public static function ErrorReporting($Parameter = 'E_ALL & ~E_DEPRECATED & ~E_STRICT'){

	switch ($Parameter){
		
	    case 'E_ALL':
		error_reporting(E_ALL);
		break;
		
	    case 'E_ALL & ~E_NOTICE':
		error_reporting(E_ALL & ~E_NOTICE);
		break;
		
	    case 'E_ALL & ~E_DEPRECATED & ~E_STRICT':
		error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
		break;
		
	}
	return true;
    }

    # This directive controls whether or not and where PHP will output errors,
    # notices and warnings too. Error output is very useful during development, but
    # it could be very dangerous in production environments. Depending on the code
    # which is triggering the error, sensitive information could potentially leak
    # out of your application such as database usernames and passwords or worse.
    # For production environments, we recommend logging errors rather than
    # sending them to STDOUT.
    # Possible Values:
    #   Off = Do not display any errors
    #   stderr = Display errors to STDERR (affects only CGI/CLI binaries!)
    #   On or stdout = Display errors to STDOUT
    # Default Value: On
    # Development Value: On
    # Production Value: Off
    public static function DisplayErrors($Parameter = 'Off'){

	ini_set('display_errors',$Parameter);
	
	return true;
    }

    # The display of errors which occur during PHP's startup sequence are handled
    # separately from display_errors. PHP's default behavior is to suppress those
    # errors from clients. Turning the display of startup errors on can be useful in
    # debugging configuration problems. We strongly recommend you
    # set this to 'off' for production servers.
    # Default Value: Off
    # Development Value: On
    # Production Value: Off
    # http://php.net/display-startup-errors
    #display_startup_errors = Off
    public static function DisplayStartupErrors($Parameter = 'Off'){

	ini_set('display_startup_errors',$Parameter);
	
	return true;
    }

    # Besides displaying errors, PHP can also log errors to locations such as a
    # server-specific log, STDERR, or a location specified by the error_log
    # directive found below. While errors should not be displayed on productions
    # servers they should still be monitored and logging is a great way to do that.
    # Default Value: Off
    # Development Value: On
    # Production Value: On
    public static function LogErrors($Parameter = 'On'){

	ini_set('log_errors',$Parameter);
	
	return true;
    }

    # Set maximum length of log_errors. In error_log information about the source is
    # added. The default is 1024 and 0 allows to not apply any maximum length at all.
    public static function LogErrorsMaxLen($Parameter = '1024'){

	ini_set('log_errors_max_len',$Parameter);
	
	return true;
    }

    # Do not log repeated messages. Repeated errors must occur in same file on same
    # line unless ignore_repeated_source is set true.
    public static function IgnoreRepeatedErrors($Parameter = 'Off'){

	ini_set('ignore_repeated_errors',$Parameter);
	
	return true;
    }

    # Ignore source of message when ignoring repeated messages. When this setting
    # is On you will not log errors with repeated messages from different files or
    # source lines.
    public static function IgnoreRepeatedSource($Parameter = 'Off'){

	ini_set('ignore_repeated_sourse',$Parameter);
	
	return true;
    }

    # If this parameter is set to Off, then memory leaks will not be shown (on
    # stdout or in the log). This has only effect in a debug compile, and if
    # error reporting includes E_WARNING in the allowed list
    public static function ReportMemleaks($Parameter = 'On'){

	ini_set('report_memleaks',$Parameter);
	
	return true;
    }

    # This setting is on by default.
    public static function ReportZendDebug($Parameter = '0'){

	ini_set('report_zend_debug',$Parameter);
	
	return true;
    }

    # Store the last error/warning message in $php_errormsg (boolean). Setting this value
    # to On can assist in debugging and is appropriate for development servers. It should
    # however be disabled on production servers.
    # Default Value: Off
    # Development Value: On
    # Production Value: Off
    public static function TrackErrors($Parameter = 'Off'){

	ini_set('track_errors',$Parameter);
	
	return true;
    }

    # Turn off normal error reporting and emit XML-RPC error XML
    public static function XMLrpcErrors($Parameter = 0){

	ini_set('xmlrpc_errors',$Parameter);
	
	return true;
    }

    # An XML-RPC faultCode
    public static function XMLrpcErrorNumber($Parameter = 0){

	ini_set('xmlrpc_error_number',$Parameter);
	
	return true;
    }

    # When PHP displays or logs an error, it has the capability of formatting the
    # error message as HTML for easier reading. This directive controls whether
    # the error message is formatted as HTML or not.
    # Note: This directive is hardcoded to Off for the CLI SAPI
    # Default Value: On
    # Development Value: On
    # Production value: On
    public static function HtmlErrors($Parameter = 'On'){

	ini_set('html_errors',$Parameter);
	
	return true;
    }

    # String to output before an error message. PHP's default behavior is to leave
    # this setting blank.
    public static function ErrorPrependString($Parameter = "<span style='color: #ff0000'>"){

	ini_set('error_prepend_string',$Parameter);
	
	return true;
    }
    
    # String to output after an error message. PHP's default behavior is to leave
    # this setting blank.
    public static function ErrorAppendString($Parameter = "</span>"){

	ini_set('error_append_string',$Parameter);
	
	return true;
    }

    # Log errors to specified file. PHP's default behavior is to leave this value
    # empty.
    public static function ErrorLog($Parameter = 'syslog'){

	ini_set('error_log',$Parameter);
	
	return true;
    }
}