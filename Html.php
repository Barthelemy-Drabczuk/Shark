<?php
/**
 * Created by PhpStorm.
 * User: percevase
 * Date: 15/12/18
 * Time: 15:05
 */

namespace {
	use Html\HtmlBuilder;

	class Html {
		private static $error = 'unsetted element';

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

		//page content
		private $head;
		private $body;

		/**
		 * Html constructor.
		 * @param HtmlBuilder $htmlBuilder
		 * @param Head $head
		 * @param Body $body
		 */
		public function __construct (HtmlBuilder $htmlBuilder, Head $head, Body $body) {
			if (isset($htmlBuilder)) {
				$this->accesskey = $htmlBuilder->getAccesskey();
				$this->class = $htmlBuilder->getClass();
				$this->contenteditable = $htmlBuilder->getContenteditable();
				$this->data = $htmlBuilder->getData();
				$this->dir = $htmlBuilder->getDir();
				$this->draggable = $htmlBuilder->getDraggable();
				$this->dropzone = $htmlBuilder->getDropzone();
				$this->hidden = $htmlBuilder->getHidden();
				$this->id = $htmlBuilder->getId();
				$this->lang = $htmlBuilder->getLang();
				$this->spellcheck = $htmlBuilder->getSpellcheck();
				$this->style = $htmlBuilder->getStyle();
				$this->tabindex = $htmlBuilder->getTabindex();
				$this->title = $htmlBuilder->getTitle();
				$this->translate = $htmlBuilder->getTranslate();
			}
			if (isset($head)) {
				$this->head = $head;
			}
			if (isset($body)) {
				$this->body = $body;
			}
			else {
				echo '__construct : '.Html::$error;
				die;
			}
		}//__construct

		/**
		 * @return string
		 */
		public function __toString () {
			$htmlTag = '<html ';
			if (isset($this->accesskey)) {
				$htmlTag .= 'accesskey="'.$this->accesskey.'" ';
			}
			if (isset($this->class)) {
				$htmlTag .= 'class="'.$this->class.'" ';
			}
			if (isset($this->contenteditable)) {
				$htmlTag .= 'contenteditable="'.$this->contenteditable.'" ';
			}
			if (isset($this->data)) {
				$htmlTag .= 'data-'.$this->data[0].'="'.$this->data[1].'" ';
			}
			if (isset($this->dir)) {
				$htmlTag .= 'dir="'.$this->dir.'" ';
			}
			if (isset($this->draggable)) {
				$htmlTag .= 'draggable'.$this->draggable.'" ';
			}
			if (isset($this->dropzone)) {
				$htmlTag .= 'dropzone="'.$this->dropzone.'" ';
			}
			if (isset($this->hidden)) {
				$htmlTag .= 'hidden="'.$this->hidden.'" ';
			}
			if (isset($this->id)) {
				$htmlTag .= 'id="'.$this->id.'" ';
			}
			if (isset($this->lang)) {
				$htmlTag .= 'lang="'.$this->lang.'" ';
			}
			if (isset($this->spellcheck)) {
				$htmlTag .= 'spellcheck="'.$this->spellcheck.'" ';
			}
			if (isset($this->style)) {
				$htmlTag .= 'style="'.$this->style.'" ';
			}
			if (isset($this->tabindex)) {
				$htmlTag .= 'tabindex="'.$this->tabindex.'" ';
			}
			if (isset($this->title)) {
				$htmlTag .= 'title="'.$this->title.'" ';
			}
			if (isset($this->translate)) {
				$htmlTag .= 'translate="'.$this->translate.'" ';
			}
			$htmlTag .= '>'.PHP_EOL.$this->head.PHP_EOL.PHP_EOL.$this->body.PHP_EOL.'</html>';

			return $htmlTag;
		}


	}
}

namespace Html {
	class HtmlBuilder {
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

		/**
		 * HtmlBuilder constructor.
		 */
		public function __construct () {
		}


		/* function to make the builder design pattern */
		//HTML Global attributes
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
		 * @param $datatype
		 * @param $data
		 * @return $this
		 */
		public function data ($datatype, $data) {
			$this->data = array ($datatype, $data);
			return $this;
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

		/**
		 * @return string
		 */
		public function getData () {
			return $this->data;
		}

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


	}
}