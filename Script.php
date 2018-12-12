<?php
/**
 * Created by PhpStorm.
 * User: percevase
 * Date: 12/12/18
 * Time: 22:47
 */

namespace {

	use Script\ScriptBuilder;

	class Script {

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

		//Script tag special attributes
		private $async;
		private $charset;
		private $defer;
		private $src;
		private $type;

		//Actual content
		private $content;

		/**
		 * Script constructor.
		 */
		public function __construct (ScriptBuilder $scriptBuilder) {
			$this->accesskey = $scriptBuilder->getAccesskey();
			$this->class = $scriptBuilder->getClass();
			$this->contenteditable = $scriptBuilder->getContenteditable();
			$this->data = $scriptBuilder->getData();
			$this->dir = $scriptBuilder->getDir();
			$this->draggable = $scriptBuilder->getDraggable();
			$this->dropzone = $scriptBuilder->getDropzone();
			$this->hidden = $scriptBuilder->getHidden();
			$this->id = $scriptBuilder->getId();
			$this->lang = $scriptBuilder->getLang();
			$this->spellcheck = $scriptBuilder->getSpellcheck();
			$this->style = $scriptBuilder->getStyle();
			$this->tabindex = $scriptBuilder->getTabindex();
			$this->title = $scriptBuilder->getTitle();
			$this->translate = $scriptBuilder->getTranslate();
			$this->async = $scriptBuilder->getAsync();
			$this->charset = $scriptBuilder->getCharset();
			$this->defer = $scriptBuilder->getDefer();
			$this->src = $scriptBuilder->getSrc();
			$this->type = $scriptBuilder->getType();
			if (!isset($this->src)) {
				$this->content = $scriptBuilder->getContent();
			}
		}//__construct

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
			if (isset($this->data)) {
				$actualDiv .= 'data-'.$this->data[0].'="'.$this->data[1].'" ';
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
			if (isset($this->charset)) {
				$actualDiv .= 'charset="'.$this->charset.'" ';
			}
			if (isset($this->type)) {
				$actualDiv .= 'type="'.$this->type.'" ';
			}
			if (isset($this->async)) {
				$actualDiv .= 'async ';
			}
			if (isset($this->defer)) {
				$actualDiv .= 'defer ';
			}
			if (isset($this->src)) {
				$actualDiv .= 'scr="'.$this->src.'" ';
				$actualDiv .= '></div>';
			}
			else {
				$actualDiv .= '>' . $this->content . '</div>';
			}
			return $actualDiv;
		}//__toString
	}
}

namespace Script {
	class ScriptBuilder {
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

		//Script tag special attributes
		private $async;
		private $charset;
		private $defer;
		private $src;
		private $type;

		//Actual content
		private $content;

		/**
		 * DivBuilder constructor.
		 * @param string $content
		 */
		public function __construct ($content = '') {
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
		 * @return $this
		 */
		public function async () {
			$this->async = true;
			return $this;
		}

		/**
		 * @param $charset
		 * @return $this
		 */
		public function charset ($charset) {
			$this->charset = $charset;
			return $this;
		}

		/**
		 * @return $this
		 */
		public function defer (){
			$this->defer = true;
			return $this;
		}

		/**
		 * @param $src
		 * @return $this
		 */
		public function src ($src) {
			$this->src = $src;
			return $this;
		}

		/**
		 * @param $type
		 * @return $this
		 */
		public function type ($type) {
			$this->type = $type;
			return $this;
		}

		/*builder function*/

		/**
		 * @return \Script
		 */
		public function build () {
			return new \Script ($this);
		}

		/*getters to access attributes from Script class*/

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
		 * @return array
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

		/**
		 * @return string
		 */
		public function getContent () {
			return $this->content;
		}

		/**
		 * @return bool
		 */
		public function getAsync () {
			return $this->async;
		}

		/**
		 * @return string
		 */
		public function getCharset () {
			return $this->charset;
		}

		/**
		 * @return bool
		 */
		public function getDefer () {
			return $this->defer;
		}

		/**
		 * @return string
		 */
		public function getSrc () {
			return $this->src;
		}

		/**
		 * @return string
		 */
		public function getType () {
			return $this->type;
		}


	}
}