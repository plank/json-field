<?php

namespace Plank\JsonField\Exceptions;

use Exception;

class AttributeCast extends Exception
{
    public static function notFoundFor($attribute): static
    {
        return new static("No cast found for [{$attribute}] field.");
    }
}
