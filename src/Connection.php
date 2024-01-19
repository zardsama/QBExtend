<?php

namespace zardsama\QBExtend;

use Pecee\Pixie\Connection as DBcon;

Class Connection extends DBcon {

    public function getQueryBuilder(): QBHandlerExtend
    {
        return new QBHandlerExtend($this);
    }

    public function __destruct()
    {
        // 세션용으로 사용하도록 close 하지 않도록 처리
    }

}