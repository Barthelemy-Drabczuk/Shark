<?php
/**
 * Created by PhpStorm.
 * User: d17010509
 * Date: 11/12/18
 * Time: 13:03
 */

namespace {

	use Div\DivBuilder;

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

		//Global Event Attributes

		//Keyboard events
		private $onkeydown;
		private $onkeypress;
		private $onkeyup;
		//Mouse events
		private $onclick;
		private $ondblclick;
		private $onmousedown;
		private $onmousemove;
		private $onmouseout;
		private $onmouseover;
		private $onmouseup;
		private $onwheel;
		//Drag events
		private $ondrag;
		private $ondragend;
		private $ondragenter;
		private $ondragleave;
		private $ondragover;
		private $ondragstart;
		private $ondrop;
		private $onscroll;
		//Clipboard events
		private $oncopy;
		private $oncut;
		private $onpaste;

		//Actual content
		private $content;

		public function __construct (DivBuilder $divBuilder) {
			$this->accesskey = $divBuilder->getAccesskey();
			$this->class = $divBuilder->getClass();
			$this->contenteditable = $divBuilder->getContenteditable();
			$this->data = $divBuilder->getData();
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
			$this->onkeydown = $divBuilder->getOnkeydown();
			$this->onkeypress = $divBuilder->getOnkeypress();
			$this->onkeyup = $divBuilder->getOnkeyup();
			$this->onclick = $divBuilder->getOnclick();
			$this->ondblclick = $divBuilder->getOndblclick();
			$this->onmousedown = $divBuilder->getOnmousedown();
			$this->onmousemove = $divBuilder->getOnmousemove();
			$this->onmouseout = $divBuilder->getOnmouseout();
			$this->onmouseover = $divBuilder->getOnmouseover();
			$this->onmouseup = $divBuilder->getOnmouseup();
			$this->onwheel = $divBuilder->getOnwheel();
			$this->ondrag = $divBuilder->getOndrag();
			$this->ondragend = $divBuilder->getOndragend();
			$this->ondragenter = $divBuilder->getOndragenter();
			$this->ondragleave = $divBuilder->getOndragleave();
			$this->ondragover = $divBuilder->getOndragover();
			$this->ondragstart = $divBuilder->getOndragstart();
			$this->ondrop = $divBuilder->getOndrop();
			$this->onscroll = $divBuilder->getOnscroll();
			$this->oncopy = $divBuilder->getOncopy();
			$this->oncut = $divBuilder->getOncut();
			$this->onpaste = $divBuilder->getOnpaste();
			$this->content = $divBuilder->getContent();
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
			if (isset($this->onkeydown)) {
				$actualDiv .= 'onkeydown="'.$this->onkeydown->getScript().'" ';
			}
			if (isset($this->onkeypress)) {
				$actualDiv .= 'onkeypress="'.$this->onkeypress->getScript().'" ';
			}
			if (isset($this->onkeyup)) {
				$actualDiv .= 'onkeyup="'.$this->onkeyup->getScript().'" ';
			}
			if (isset($this->onclick)) {
				$actualDiv .= 'onclick="'.$this->onclick->getScript().'" ';
			}
			if (isset($this->ondblclick)) {
				$actualDiv .= 'ondblclick="'.$this->ondblclick->getScript().'" ';
			}
			if (isset($this->onmousedown)) {
				$actualDiv .= 'onmousedown="'.$this->onmousedown->getScript().'" ';
			}
			if (isset($this->onmousemove)) {
				$actualDiv .= 'onmousemove="'.$this->onmousemove->getScript().'" ';
			}
			if (isset($this->onmouseout)) {
				$actualDiv .= 'onmouseout="'.$this->onmouseout->getScript().'" ';
			}
			if (isset($this->onmouseover)) {
				$actualDiv .= 'onmouseover="'.$this->onmouseover->getScript().'" ';
			}
			if (isset($this->onmouseup)) {
				$actualDiv .= 'onmouseup="'.$this->onmouseup->getScript().'" ';
			}
			if (isset($this->onwheel)) {
				$actualDiv .= 'onwheel="'.$this->onwheel->getScript().'" ';
			}
			if (isset($this->ondrag)) {
				$actualDiv .= 'ondrag="'.$this->ondrag->getScript().'" ';
			}
			if (isset($this->ondragend)) {
				$actualDiv .= 'ondragend="'.$this->ondragend->getScript().'" ';
			}
			if (isset($this->ondragenter)) {
				$actualDiv .= 'ondragenter="'.$this->ondragenter->getScript().'" ';
			}
			if (isset($this->ondragleave)) {
				$actualDiv .= 'ondragleave="'.$this->ondragleave->getScript().'" ';
			}
			if (isset($this->ondragover)) {
				$actualDiv .= 'ondragover="'.$this->ondragover->getScript().'" ';
			}
			if (isset($this->ondragstart)) {
				$actualDiv .= 'ondragstart="'.$this->ondragstart->getScript().'" ';
			}
			if (isset($this->ondrop)) {
				$actualDiv .= 'ondrop="'.$this->ondrop->getScript().'" ';
			}
			if (isset($this->onscroll)) {
				$actualDiv .= 'onscroll="'.$this->onscroll->getScript().'" ';
			}
			if (isset($this->oncopy)) {
				$actualDiv .= 'oncopy="'.$this->oncopy->getScript().'" ';
			}
			if (isset($this->oncut)) {
				$actualDiv .= 'oncut="'.$this->oncut->getScript().'" ';
			}
			if (isset($this->onpaste)) {
				$actualDiv .= 'onpaste="'.$this->onpaste->getScript().'" ';
			}
			$actualDiv .= '>'.$this->content.'</div>';
			return $actualDiv;
		}//__toString

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

		//Global Event Attributes

		//Keyboard events
		private $onkeydown;
		private $onkeypress;
		private $onkeyup;
		//Mouse events
		private $onclick;
		private $ondblclick;
		private $onmousedown;
		private $onmousemove;
		private $onmouseout;
		private $onmouseover;
		private $onmouseup;
		private $onwheel;
		//Drag events
		private $ondrag;
		private $ondragend;
		private $ondragenter;
		private $ondragleave;
		private $ondragover;
		private $ondragstart;
		private $ondrop;
		private $onscroll;
		//Clipboard events
		private $oncopy;
		private $oncut;
		private $onpaste;

		//Actual content
		private $content;

		/**
		 * DivBuilder constructor.
		 */
		public function __construct ($content) {
			$this->content = $content;
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

		//HMTL Global Events
		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onkeydown (\Script $script) {
			$this->onkeydown = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onkeypress (\Script $script) {
			$this->onkeypress = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onkeyup (\Script $script) {
			$this->onkeyup = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onclick (\Script $script) {
			$this->onclick = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function ondblclick (\Script $script) {
			$this->ondblclick = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onmousedown (\Script $script) {
			$this->onmousedown = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onmousemove (\Script $script) {
			$this->onmousemove = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onmouseout (\Script $script) {
			$this->onmouseout = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onmouseover (\Script $script) {
			$this->onmouseover = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onmouseup (\Script $script) {
			$this->onmouseup = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onwheel (\Script $script) {
			$this->onwheel = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function ondrag (\Script $script) {
			$this->ondrag = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function ondragend (\Script $script) {
			$this->ondragend = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function ondragenter (\Script $script) {
			$this->ondragenter = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function ondragleave (\Script $script) {
			$this->ondragleave = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function ondragover (\Script $script) {
			$this->ondragover = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function ondragstart (\Script $script) {
			$this->ondragstart = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function ondrop (\Script $script) {
			$this->ondrop = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onscroll (\Script $script) {
			$this->onscroll = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function oncopy (\Script $script) {
			$this->oncopy = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function oncut (\Script $script) {
			$this->oncut = $script;
			return $this;
		}

		/**
		 * @param \Script $script
		 * @return $this
		 */
		public function onpaste (\Script $script) {
			$this->onpaste = $script;
			return $this;
		}

		/*builder function*/

		/**
		 * @return \Div
		 */
		public function build () {
			return new \Div($this);
		}

		/*getters to access attributes from Div class*/

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
		 * @return \Script
		 */
		public function getOnkeydown () {
			return $this->onkeydown;
		}

		/**
		 * @return \Script
		 */
		public function getOnkeypress () {
			return $this->onkeypress;
		}

		/**
		 * @return \Script
		 */
		public function getOnkeyup () {
			return $this->onkeyup;
		}

		/**
		 * @return \Script
		 */
		public function getOnclick () {
			return $this->onclick;
		}

		/**
		 * @return \Script
		 */
		public function getOndblclick () {
			return $this->ondblclick;
		}

		/**
		 * @return \Script
		 */
		public function getOnmousedown () {
			return $this->onmousedown;
		}

		/**
		 * @return \Script
		 */
		public function getOnmousemove () {
			return $this->onmousemove;
		}

		/**
		 * @return \Script
		 */
		public function getOnmouseout () {
			return $this->onmouseout;
		}

		/**
		 * @return \Script
		 */
		public function getOnmouseover () {
			return $this->onmouseover;
		}

		/**
		 * @return \Script
		 */
		public function getOnmouseup () {
			return $this->onmouseup;
		}

		/**
		 * @return \Script
		 */
		public function getOnwheel () {
			return $this->onwheel;
		}

		/**
		 * @return \Script
		 */
		public function getOndrag () {
			return $this->ondrag;
		}

		/**
		 * @return \Script
		 */
		public function getOndragend () {
			return $this->ondragend;
		}

		/**
		 * @return \Script
		 */
		public function getOndragenter () {
			return $this->ondragenter;
		}

		/**
		 * @return \Script
		 */
		public function getOndragleave () {
			return $this->ondragleave;
		}

		/**
		 * @return \Script
		 */
		public function getOndragover () {
			return $this->ondragover;
		}

		/**
		 * @return \Script
		 */
		public function getOndragstart () {
			return $this->ondragstart;
		}

		/**
		 * @return \Script
		 */
		public function getOndrop () {
			return $this->ondrop;
		}

		/**
		 * @return \Script
		 */
		public function getOnscroll () {
			return $this->onscroll;
		}

		/**
		 * @return \Script
		 */
		public function getOncopy () {
			return $this->oncopy;
		}

		/**
		 * @return \Script
		 */
		public function getOncut () {
			return $this->oncut;
		}

		/**
		 * @return \Script
		 */
		public function getOnpaste () {
			return $this->onpaste;
		}


	}
}