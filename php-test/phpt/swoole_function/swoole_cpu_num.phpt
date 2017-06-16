--TEST--
global_function: swoole_version
--SKIPIF--
<?php require __DIR__ . "/../inc/skipif.inc"; ?>
--INI--
assert.active=1
assert.warning=1
assert.bail=0
assert.quiet_eval=0

--FILE--
<?php
$cpu_num = swoole_cpu_num();
echo "cpu_num: $cpu_num";

?>

--EXPECTF--
cpu_num: %d
