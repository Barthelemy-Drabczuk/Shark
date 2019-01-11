<?php
/**
 * Created by PhpStorm.
 * User: percevase
 * Date: 15/12/18
 * Time: 14:17
 */


class Head {
	private $headContent = array ();

	/**
	 * Head constructor.
	 * @param $headContent mixed
	 */
	public function __construct ($headContent) {
		array_push($this->headContent, $headContent);
	}

	/**
	 * default constructor
	 */
	public function Head () {}

	/**
	 * add a tag in the head tag itself
	 * @param $tag
	 */
	public function add ($tag) {
		array_push($this->headContent, $tag);
	}

	/**
	 * add multiple tags in the head tag
	 * @param array $multipleTags
	 */
	public function addAll (array $multipleTags) {
		array_push($this->headContent, $multipleTags);
	}

	public function __toString () {
		$headTag = "\t".'<head>'.PHP_EOL;
		foreach ($this->headContent as $tag) {
			$headTag .= "\t\t".$tag.PHP_EOL;
		}
		$headTag .= "\t".'</head>';
		return $headTag;
	}
}