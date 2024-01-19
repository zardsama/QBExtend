<?php

namespace zardsama\QBExtend;

use Pecee\Pixie\QueryBuilder\QueryBuilderHandler;
use Pecee\Pixie\Exception;

Class QBHandlerExtend extends QueryBuilderHandler {

    public function clearSelect() : void
    {
        unset($this->statements['selects']);
    }

    public function single($field) : string
    {
        $this->statements['selects'] = [$field];
        try {
            $result = (array)$this->limit(1)->first();
        } catch (Exception $e) {
            throw $e;
        }

        return array_shift($result) ?? '';
    }

}