# PHP-CRC16

来源: https://blog.csdn.net/zhang197093/article/details/89061957


### 使用方法

第一步
```
composer require minms/crc16
```

第二步
```
use function Minms\Crc16\crc16;
# or
use  Minms\Crc16\Crc16;


# usage
$result = crc16('1234567890', 0x8005, 0, 0, true, true);
# or

$result = new Crc16($str, $polynomial, $initValue, $xOrValue, $inputReverse = false, $outputReverse = false);
echo $result->toInt();
echo $result->toString();
```