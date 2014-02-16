<?php  //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * convert xml string to php array - useful to get a serializable value
 *
 * @param string $xmlstr
 * @return array
 * @author Adrien aka Gaarf
 */
if ( ! function_exists('xmlstr_to_array'))
{
    function xmlstr_to_array($xmlstr) {
      $doc = new DOMDocument();
      $doc->loadXML($xmlstr);
      return domnode_to_array($doc->documentElement);
    }
}

if ( ! function_exists('domnode_to_array'))
{
    function domnode_to_array($node) {
      $output = array();
      switch ($node->nodeType) {
       case XML_CDATA_SECTION_NODE:
       case XML_TEXT_NODE:
        $output = trim($node->textContent);
       break;
       case XML_ELEMENT_NODE:
        for ($i=0, $m=$node->childNodes->length; $i<$m; $i++) {
         $child = $node->childNodes->item($i);
         $v = domnode_to_array($child);
         if(isset($child->tagName)) {
           $t = $child->tagName;
           if(!isset($output[$t])) {
            $output[$t] = array();
           }
           $output[$t][] = $v;
         }
         elseif($v) {
          $output = (string) $v;
         }
        }
        if(is_array($output)) {
         if($node->attributes->length) {
          $a = array();
          foreach($node->attributes as $attrName => $attrNode) {
           $a[$attrName] = (string) $attrNode->value;
          }
          $output['@attributes'] = $a;
         }
         foreach ($output as $t => $v) {
          if(is_array($v) && count($v)==1 && $t!='@attributes') {
           $output[$t] = $v[0];
          }
         }
        }
       break;
      }
      return $output;
    }
}

if ( ! function_exists('obj2array'))
{
    function obj2array($obj) {
          $out = array();
          foreach ($obj as $key => $val) {
            switch(true) {
                case is_object($val):
                 $out[$key] = obj2array($val);
                 break;
              case is_array($val):
                 $out[$key] = obj2array($val);
                 break;
              default:
                $out[$key] = $val;
            }
          }
          return $out;
     }
}
?>