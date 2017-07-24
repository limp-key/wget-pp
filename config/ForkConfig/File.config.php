<?php

namespace Fork\Config\ForkConfig;

use \Fork\Config\FileConfig;

class File extends FileConfig{

    public static $FileUploads = 'On';

    public static $UploadTmpDir = '';

    public static $UploadMaxFilesize = '2M';

    public static $MaxFileUploads = '20';

    public static $AutoPrependFile = '';
    
    public static $AutoAppendFile = '';

}