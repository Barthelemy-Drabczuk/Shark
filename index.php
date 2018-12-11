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

$divBuilder = new \Div\DivBuilder('Bonjour !');
$divBuilder->title('oui')->dir('rtl');
$div = new Div($divBuilder);

echo $div;

$page->end();