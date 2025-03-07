--TEST--
Check for vtiful presence
--SKIPIF--
<?php
require __DIR__ . '/include/skipif.inc';
skip_disable_reader();
?>
--FILE--
<?php
$config   = ['path' => './tests'];
$excel    = new \Vtiful\Kernel\Excel($config);
$filePath = $excel->fileName('tutorial.xlsx')
    ->header(['Item', 'Cost'])
    ->output();

$data = $excel->openFile('tutorial.xlsx');

var_dump($data);
?>
--CLEAN--
<?php
@unlink(__DIR__ . '/tutorial.xlsx');
?>
--EXPECT--
object(Vtiful\Kernel\Excel)#1 (2) {
  ["config":"Vtiful\Kernel\Excel":private]=>
  array(1) {
    ["path"]=>
    string(7) "./tests"
  }
  ["fileName":"Vtiful\Kernel\Excel":private]=>
  string(21) "./tests/tutorial.xlsx"
}