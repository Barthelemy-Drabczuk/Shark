<?php
/**
 * Created by PhpStorm.
 * User: d17010509
 * Date: 28/11/18
 * Time: 11:11
 */

require_once 'page.utils.php';

class Page {
    private $title;
    private static $error = 'Wola remplie le contenu';

    /**
     * Page constructor.
     * @param $title
     */
    public function __construct ($title) {
        if (isset($title)) {
            $this->title = $title;
        }
        else {
            echo '__construct : '.Page::$error;
            die;
        }
    }


    /**
     *
     */
    public function start () {
        start_page($this->title);
    }//start

    public function end () {
        end_page();
    }//end

    /**
     * @param $content
     * @param string $id
     */
    public function addDiv ($content, $id = '') {
        if (isset($content)) {
            echo PHP_EOL . '<div id="' . $id . '">'
                . PHP_EOL . $content .
                PHP_EOL . '</div>' . PHP_EOL;
        }
        else {
            echo 'addDiv : '.Page::$error;
            die;
        }
    }//addDiv

    /**
     * @param $content
     * @param string $id
     * @return string
     */
    public function createDiv ($content, $id = '') {
        if (isset($content)) {
            return PHP_EOL . '<div id="' . $id . '">'
                . PHP_EOL . $content .
                PHP_EOL . '</div>' . PHP_EOL;
        }
        else {
            echo 'addDiv : '.Page::$error;
            die;
        }
    }

    /**
     * @param string $content
     * @param string $id
     */
    public function addNav ($content, $id = '') {

        if (isset($content)) {

            echo PHP_EOL . '<nav id ="' . $id . '">' .
                PHP_EOL . $content .
                PHP_EOL . '</nav>' . PHP_EOL;
        }
        else {
            echo 'addNav : '.Page::$error;
            die;
        }
    }//addNav

    /**
     * @param array $content
     * @param string $id
     */
    public function addList ($content, $id = '') {
        if (isset($content) and (count($content) > 0)) {
            echo '<ul id="'.$id.'">'.PHP_EOL;
            foreach ($content as $item) {
                if (isset($item)) {
                    echo '<li>' . $item . '</li>';
                }
                else {
                    echo 'addList->$content : '.Page::$error;
                    die;
                }
            }
            echo '</ul>';
        }
        else {
            echo 'addList : '.Page::$error;
            die;
        }
    }//addList

    public function createList ($content, $id = '') {
        if (isset($content) and (count($content) > 0)) {
            $var = '<ul id="'.$id.'">'.PHP_EOL;
            foreach ($content as $item) {
                if (isset($item)) {
                    $var .= '<li>' . $item . '</li>';
                }
                else {
                    echo 'addList->$content : '.Page::$error;
                    die;
                }
            }

            $var .= '</ul>';
        }
        else {
            echo 'addList : '.Page::$error;
            die;
        }
        return $var;
    }

}//Page