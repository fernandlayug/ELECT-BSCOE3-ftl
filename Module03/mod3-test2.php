<?php
echo "Encoded using STR_ROT13";
echo "<br>";
$samplestring = "Hello World";
$encoded = str_rot13($samplestring);
echo $encoded;
echo "<br>";
echo "<br>";
$decoded = str_rot13($encoded);
echo $decoded;
echo "<br>";
echo "<br>";
echo "Encoding using base64_encode and base64_decode";
echo "<br>";
$samplebase64 = "Hello World!2";
$encoded_base64 = base64_encode($samplebase64);
echo $encoded_base64;
echo "<br>";
$decode_base64 = base64_decode($encoded_base64);
echo $decode_base64;
echo "<br>";
echo "<br>";
echo "Encoding using MD5 Function";
echo "<br>";

$passwordDB= "a";

$passwordUSER="a";

$md5codeDB = md5($passwordDB);
$md5codeUSER = md5($passwordUSER);

echo $md5codeDB;
echo "<br>";
echo $md5codeUSER;
echo "<br>";
echo "<br>";

echo "Trim functions in PHP";
echo "<br>";
$str = "Hello";
$str2 = " World";
$str3 = trim($str2);
echo "<br>";
echo $str . $str2;
echo "<br>";
echo $str . $str3;
echo "<br>";
echo "<br>";

echo "Trim Functions using Ltrim";
echo "<br>";
$ltrim = "Hello World";
echo rtrim($ltrim, "World");
echo "<br>";
echo "<br>";

echo "Using substr function";
echo "<br>";
$examplestring = "woodworking project";
echo substr($examplestring, 5, -2);


?>