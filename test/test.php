<?php declare(strict_types=1);

require "../src/Functions.php";
require "../src/Crc16.php";

use function Minms\Crc16\crc16;

// CRC-16/IBM
printf("%x\n", crc16('1234567890', 0x8005, 0, 0, true, true));

// CRC-16/MAXIM
printf("%x\n", crc16('1234567890', 0x8005, 0, 0xffff, true, true));

// CRC-16/USB
printf("%x\n", crc16('1234567890', 0x8005, 0xffff, 0xffff, true, true));

// CRC-16/MODBUS
printf("%x\n", crc16('1234567890', 0x8005, 0xffff, 0, true, true));

// CRC-16/CCITT
printf("%x\n", crc16('1234567890', 0x1021, 0, 0, true, true));

// CRC-16/CCITT-FALSE
printf("%x\n", crc16('1234567890', 0x1021, 0xffff, 0, false, false));

// CRC-16/X25
printf("%x\n", crc16('1234567890', 0x1021, 0xffff, 0xffff, true, true));

// CRC-16/XMODEM
printf("%x\n", crc16('1234567890', 0x1021, 0, 0, false, false));

// CRC-16/DNP
printf("%x\n", crc16('1234567890', 0x3d65, 0, 0xffff, true, true));