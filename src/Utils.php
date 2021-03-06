<?php

namespace Ludal\QueryBuilder;

use InvalidArgumentException;
use SebastianBergmann\Type\UnknownType;
use PDO;

class Utils
{
    /**
     * Get the corresponding PDO type for a given value
     * 
     * @param mixed $value the value
     * @return int the PDO type
     * @throws UnknownType if the PDO type couldn't be determined
     * @throws InvalidArgumentException if the type is incorrect
     */
    public static function getPDOType($value)
    {
        switch (gettype($value)) {
            case 'string':
            case 'double':
                return PDO::PARAM_STR;
            case 'boolean':
                return PDO::PARAM_BOOL;
            case 'integer':
                return PDO::PARAM_INT;
            case 'NULL':
                return PDO::PARAM_NULL;
            case 'resource':
                return PDO::PARAM_LOB;
            case 'array':
            case 'object':
                throw new InvalidArgumentException('Incorrect type');
            default:
                throw new UnknownType('Unknown type, please set it explicitly');
        }
    }
}
