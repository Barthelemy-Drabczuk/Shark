<?php
/**
 * Created by PhpStorm.
 * User: percevase
 * Date: 15/12/18
 * Time: 14:46
 */

class Body {
	private $bodyContent = array ();


	/**
	 * Body constructor.
	 * @param $bodyContent
	 */
	public function __construct ($bodyContent) {
		array_push($this->bodyContent, $bodyContent);
	}

	/**
	 * default constructor
	 */
	public function Body () {}

	/**
	 * @param $tag
	 */
	public function add ($tag) {
		array_push($this->bodyContent, $tag);
	}

	/**
	 * @param array $multipleTags
	 */
	public function addAll (array $multipleTags) {
		array_push($this->bodyContent, $multipleTags);
	}

	public function __toString () {
		$bodyTag = "\t".'<body>'.PHP_EOL;
		foreach ($this->bodyContent as $tag) {
			$bodyTag .= "\t\t".$tag.PHP_EOL;
		}
		$bodyTag .= "\t".'</body>';
		return $bodyTag;
	}


}