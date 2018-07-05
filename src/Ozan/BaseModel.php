<?php

namespace Ozan;

abstract class BaseModel implements JsonConvertible
{
    public function toJsonString()
    {
        return JsonBuilder::jsonEncode($this->getJsonObject());
    }
}