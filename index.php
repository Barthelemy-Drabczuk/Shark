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
require_once 'Script.php';
require_once 'Head.php';
require_once 'Html.php';
require_once 'Body.php';

$anotherDivBuilder = new \Div\DivBuilder('Salut je suis à l\'intérieur !');
$anotherDivBuilder->title('inside')->id('ociinside')->data('bird', 'duck')->build();
$anotherDiv = new Div($anotherDivBuilder);
$divBuilder = new \Div\DivBuilder('Bonjour !'.$anotherDiv);
$scriptBuilder = new \Script\ScriptBuilder('$(document).ready(function(){alert(\'bonjour\');});');
$script = new Script($scriptBuilder);
$jQueryScriptBuilder = new \Script\ScriptBuilder();
$jQueryScriptBuilder->src('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
$jQueryScript = new Script($jQueryScriptBuilder);
$anotherScriptBuilder = new \Script\ScriptBuilder();
$anotherScriptBuilder->src('Script.php')->async()->defer();
$anotherScript = new Script($anotherScriptBuilder);
$yetAnotherScriptBuilder = new \Script\ScriptBuilder();
$yetAnotherScriptBuilder->defer()->async()->charset('UTF-8')->translate('yes')->src('Script.php');
$yetAnoyherScript = new Script($yetAnotherScriptBuilder);
$divBuilder->title('oui')->dir('rtl')->onclick($script)->onpaste($anotherScript);
$div = new Div($divBuilder);

$yetAnotherDivBuilder = new \Div\DivBuilder('blab bla vioehjsiehjfiosefji');
$yetAnotherDivBuilder->title('newtitle')->id('wesh');
$yetAnotherDiv = new Div($yetAnotherDivBuilder);

$head = new Head($yetAnoyherScript);
$head->add($jQueryScript);
$body = new Body ($div);
$body->add($yetAnotherDiv);

$htmlBuilder = new \Html\HtmlBuilder();
$htmlBuilder->lang('fr');
$html = new Html($htmlBuilder, $head, $body);
$page = new Page('html', $html);

echo $page;