<?php declare(strict_types=1);

namespace Minms\Crc16;

function crc16($str, $polynomial, $initValue, $xOrValue, $inputReverse = false, $outputReverse = false)
{
    return (new Crc16(...func_get_args()))->toInt();
}