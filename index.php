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


$anotherDivBuilder = new \Div\DivBuilder('Salut je suis à l\'intérieur !');
$anotherDivBuilder->title('inside')->id('ociinside')->data('bird', 'duck')->build();
$anotherDiv = new Div($anotherDivBuilder);
$divBuilder = new \Div\DivBuilder('Bonjour !'.$anotherDiv);
$scriptBuilder = new \Script\ScriptBuilder('$(document).isReady(){}');
$script = new Script($scriptBuilder);
$anotherScriptBuilder = new \Script\ScriptBuilder();
$anotherScriptBuilder->src('Script.php')->async()->defer();
$anotherScript = new Script($anotherScriptBuilder);
$yetAnotherScriptBuilder = new \Script\ScriptBuilder();
$yetAnotherScriptBuilder->defer()->async()->charset('UTF-8')->translate('yes')->src('Script.php');
$yetAnoyherScript = new Script($yetAnotherScriptBuilder);
$divBuilder->title('oui')->dir('rtl')->onclick($script)->onpaste($anotherScript);
$div = new Div($divBuilder);

$head = new Head($yetAnoyherScript);
$body = new Body ($div);

$htmlBuilder = new \Html\HtmlBuilder();
$htmlBuilder->lang('fr');
$html = new Html($htmlBuilder, $head, $body);
$page = new Page('html', $html);

echo $div;
?>
<!DOCTYPE html>
<html lang="fr">
	<?php echo $div?>
</html>
