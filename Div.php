<?php
/**
 * Created by PhpStorm.
 * User: d17010509
 * Date: 11/12/18
 * Time: 13:03
 */

namespace {

	use Div\DivBuilder;
	use function PHPSTORM_META\elementType;

	class Div {

		//HTML Global Attributes
		private $accesskey;
		private $class;
		private $contenteditable;
		private $data;
		private $dir;
		private $draggable;
		private $dropzone;
		private $hidden;
		private $id;
		private $lang;
		private $spellcheck;
		private $style;
		private $tabindex;
		private $title;
		private $translate;

		//Global Event Attributes incoming


		//Actual content
		private $content;

		public function __construct (DivBuilder $divBuilder) {
			$this->accesskey = $divBuilder->getAccesskey();
			$this->class = $divBuilder->getClass();
			$this->contenteditable = $divBuilder->getContenteditable();
			$this->dir = $divBuilder->getDir();
			$this->draggable = $divBuilder->getDraggable();
			$this->dropzone = $divBuilder->getDropzone();
			$this->hidden = $divBuilder->getHidden();
			$this->id = $divBuilder->getId();
			$this->lang = $divBuilder->getLang();
			$this->spellcheck = $divBuilder->getSpellcheck();
			$this->style = $divBuilder->getStyle();
			$this->tabindex = $divBuilder->getTabindex();
			$this->title = $divBuilder->getTitle();
			$this->translate = $divBuilder->getTranslate();
			$this->content = $divBuilder->getContent();
		}

		public function __toString () {
			$actualDiv = '<div ';
			if (isset($this->accesskey)) {
				$actualDiv .= 'accesskey="'.$this->accesskey.'" ';
			}
			if (isset($this->class)) {
				$actualDiv .= 'class="'.$this->class.'" ';
			}
			if (isset($this->contenteditable)) {
				$actualDiv .= 'contenteditable="'.$this->contenteditable.'" ';
			}
			if (isset($this->dir)) {
				$actualDiv .= 'dir="'.$this->dir.'" ';
			}
			if (isset($this->draggable)) {
				$actualDiv .= 'draggable="'.$this->draggable.'" ';
			}
			if (isset($this->dropzone)) {
				$actualDiv .= 'dropzone="'.$this->dropzone.'" ';
			}
			if (isset($this->hidden)) {
				$actualDiv .= 'hidden="'.$this->hidden.'" ';
			}
			if (isset($this->id)) {
				$actualDiv .= 'id="'.$this->id.'" ';
			}
			if (isset($this->lang)) {
				$actualDiv .= 'lang="'.$this->lang.'" ';
			}
			if (isset($this->spellcheck)) {
				$actualDiv .= 'spellcheck="'.$this->spellcheck.'" ';
			}
			if (isset($this->style)) {
				$actualDiv .= 'style="'.$this->style.'" ';
			}
			if (isset($this->tabindex)) {
				$actualDiv .= 'tabindex="'.$this->tabindex.'" ';
			}
			if (isset($this->title)) {
				$actualDiv .= 'title="'.$this->title.'" ';
			}
			if (isset($this->translate)) {
				$actualDiv .= 'translate="'.$this->translate.'" ';
			}
			$actualDiv .= '>'.$this->content.'</div>';
			return $actualDiv;
		}

	}
}

namespace Div {
	class DivBuilder {

		//HTML Global Attributes
		private $accesskey;
		private $class;
		private $contenteditable;
		private $data;
		private $dir;
		private $draggable;
		private $dropzone;
		private $hidden;
		private $id;
		private $lang;
		private $spellcheck;
		private $style;
		private $tabindex;
		private $title;
		private $translate;

		//Actual content
		private $content;

		/**
		 * DivBuilder constructor.
		 */
		public function __construct ($content) {
			$this->content = $content;
		}

		/* function to make the builder design pattern */
		/**
		 * @param $accesskey
		 * @return $this
		 */
		public function accesskey ($accesskey) {
			$this->accesskey = $accesskey;
			return $this;
		}

		/**
		 * @param $class
		 * @return $this
		 */
		public function dclass ($class) {
			$this->class = $class;
			return $this;
		}

		/**
		 * @param $contentaditable
		 * @return $this
		 */
		public function contenteditable ($contentaditable) {
			$this->contenteditable = $contentaditable;
			return $this;
		}

		/*
		public function data ($data)
		*/

		/**
		 * @param $dir
		 * @return $this
		 */
		public function dir ($dir) {
			$this->dir = $dir;
			return $this;
		}

		/**
		 * @param $draggable
		 * @return $this
		 */
		public function draggable ($draggable) {
			$this->draggable = $draggable;
			return $this;
		}

		/**
		 * @param $dropzone
		 * @return $this
		 */
		public function dropzone ($dropzone) {
			$this->dropzone = $dropzone;
			return $this;
		}

		/**
		 * @param $hidden
		 * @return $this
		 */
		public function hidden ($hidden) {
			$this->hidden = $hidden;
			return $this;
		}

		/**
		 * @param $id
		 * @return $this
		 */
		public function id ($id) {
			$this->id = $id;
			return $this;
		}

		/**
		 * @param $lang
		 * @return $this
		 */
		public function lang ($lang) {
			$this->lang = $lang;
			return $this;
		}

		/**
		 * @param $spellcheck
		 * @return $this
		 */
		public function spellcheck ($spellcheck) {
			$this->spellcheck = $spellcheck;
			return $this;
		}

		/**
		 * @param $style
		 * @return $this
		 */
		public function style ($style) {
			$this->style = $style;
			return $this;
		}

		/**
		 * @param $tabindex
		 * @return $this
		 */
		public function tabindex ($tabindex) {
			$this->tabindex = $tabindex;
			return $this;
		}

		/**
		 * @param $title
		 * @return $this
		 */
		public function title ($title) {
			$this->title = $title;
			return $this;
		}

		/**
		 * @param $translate
		 * @return $this
		 */
		public function translate ($translate) {
			$this->translate = $translate;
			return $this;
		}

		/**
		 * @return \Div
		 */
		public function build () {
			return new \Div($this);
		}

		/**
		 * @return string
		 */
		public function getAccesskey () {
			return $this->accesskey;
		}

		/**
		 * @return string
		 */
		public function getClass () {
			return $this->class;
		}

		/**
		 * @return string
		 */
		public function getContenteditable () {
			return $this->contenteditable;
		}

		/*
		public function getData () {
			return $this->data;
		}
		*/

		/**
		 * @return string
		 */
		public function getDir () {
			return $this->dir;
		}

		/**
		 * @return string
		 */
		public function getDraggable () {
			return $this->draggable;
		}

		/**
		 * @return string
		 */
		public function getDropzone () {
			return $this->dropzone;
		}

		/**
		 * @return string
		 */
		public function getHidden () {
			return $this->hidden;
		}

		/**
		 * @return string
		 */
		public function getId () {
			return $this->id;
		}

		/**
		 * @return string
		 */
		public function getLang () {
			return $this->lang;
		}

		/**
		 * @return string
		 */
		public function getSpellcheck () {
			return $this->spellcheck;
		}

		/**
		 * @return string
		 */
		public function getStyle () {
			return $this->style;
		}

		/**
		 * @return string
		 */
		public function getTabindex () {
			return $this->tabindex;
		}

		/**
		 * @return string
		 */
		public function getTitle () {
			return $this->title;
		}

		/**
		 * @return string
		 */
		public function getTranslate () {
			return $this->translate;
		}

		/**
		 * @return string
		 */
		public function getContent () {
			return $this->content;
		}

	}
}