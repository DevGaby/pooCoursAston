<?php

namespace Aston\Http\Response;

use Aston\Http\Response as BaseResponse;

class Json extends BaseResponse
{
    public function setBody($body):BaseResponse
    {
        $this->addHeader('Content-Type', 'application/json');
        parent::setBody(json_encode($body));

    }
}