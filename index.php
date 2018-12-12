<?php
/**
 * Created by PhpStorm.
 * User: percevase
 * Date: 11/12/18
 * Time: 19:31
 */

/*test page*/

require_once 'Div.php';
require_once 'Page.php';

$page = new Page('page');
$page->start();

$anotherDivBuilder = new \Div\DivBuilder('Salut je suis à l\'intérieur !');
$anotherDivBuilder->title('inside')->id('ociinside')->data('bird', 'duck')->build();
$anotherDiv = new Div($anotherDivBuilder);
$divBuilder = new \Div\DivBuilder('Bonjour !'.$anotherDiv);
$divBuilder->title('oui')->dir('rtl')->build();
$div = new Div($divBuilder);

echo $div;

$page->end();