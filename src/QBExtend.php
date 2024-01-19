<?php

namespace zardsama\QBExtend;

use Pecee\Pixie\Connection as DBcon;

Class Connection extends DBcon {

    public function getQueryBuilder(): QBHandlerExtend
    {
        return new QBHandlerExtend($this);
    }

}