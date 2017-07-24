<?php

namespace Fork\Config\ForkConfig;

use \Fork\Config\PCREConfig;

class PCRE extends PCREConfig{

    public static $PcreBacktrackLimit='100000';

    public static $PcreRecursionLimit='100000';

    public static $PcreJit='0';

}
