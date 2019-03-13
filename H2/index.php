<?php
/**
 * Created by PhpStorm.
 * User: pascu
 * Date: 13-3-2019
 * Time: 10:14
 */

$aantal = "moe.";
$deze_jongen = "Deze jongen is ";

echo $deze_jongen."<u><b>hella</b></u> ".$aantal."<br><br><br>";

//

//
$cursiveStart = '<i>';
$cursiveEnd = '</i>';

//

$quote_lijst = "Quotes lijst:";

echo $quote_lijst. "<br><br>";

//

$a = "\"Ik heb niet gefaald. ";
$b = "Ik heb alleen ";
$c = 10000;
$d = " manieren gevonden die niet werken.\"";
$e = " - <i>Thomas Edison</i>";

echo $a.$b.$c.$d."<br>".$e."<br><br>";

//

$f = "\"Mensen die geen fout";
$g = "en maken, werken ";
$h = "niet.\"";
$i = "- " . $cursiveStart. "Albert Plesman (KLM)" . $cursiveEnd;

echo $f.$g.$h."<br>".$i."<br><br>";

//

$j = "\"T";
$k = "ry and fail";
$l = ", but never ";
$m = "fail to try.\"";
$n = "-" . $cursiveStart. "Tyra Banks" . $cursiveEnd;

echo $j.$k.$l.$m."<br>".$n."<br><br>";

//

$o = "\"De cursus \"omgaan ";
$p = "met";
$q = " teleu";
$r = "rstellingen\" kan vanavond helaas niet doorgaan.\"";
$s = "-". $cursiveStart. "Herman Finkers". $cursiveEnd;

echo $o.$p.$q.$r."<br>".$s

?>