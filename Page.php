<?php
/**
 * Created by PhpStorm.
 * User: d17010509
 * Date: 28/11/18
 * Time: 11:11
 */

class Page {
    private $doctype;
    private $html;

    private static $error = 'Wola rempli le contenu';

	/**
	 * Page constructor.
	 * @param $doctype
	 * @param Html $html
	 */
    public function __construct ($doctype, Html $html) {
        if (isset($doctype) and isset($html)) {
            $this->doctype = $doctype;
            $this->html = $html;
        }
        else {
            echo '__construct : '.Page::$error;
            die;
        }
    }

	public function __toString () {
		$page = '<!DOCTYPE '.$this->doctype.'>'.PHP_EOL.$this->html;
    	return $page;
	}

}//Page