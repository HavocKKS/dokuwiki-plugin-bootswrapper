<?php
/**
 * Bootstrap Wrapper Plugin: List Group
 * 
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Giuseppe Di Terlizzi <giuseppe.diterlizzi>
 * @copyright  (C) 2015, Giuseppe Di Terlizzi
 */
 
// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

require_once(dirname(__FILE__).'/bootstrap.php');

class syntax_plugin_bootswrapper_list extends syntax_plugin_bootswrapper_bootstrap {

    protected $pattern_start = '<list-group>';
    protected $pattern_end   = '</list-group>';

    protected $template_start = '<div class="bs-wrap bs-wrap-list-group">';
    protected $template_end   = '</div>';

    function getPType() { return 'block';}

}
