<?php

class HTMLInput {
    private $name;
    private $id;
    private $type;
    private $value;
    private $style;
    private $border;
    private $autocomplete;
    private $autofocus;
    private $form;
    private $formaction;
    private $formenctype;
    private $formmethod;
    private $formnovalidate;
    private $formtarget;
    private $height;
    private $width;
    private $list;
    private $min;
    private $max;
    private $multiple;
    private $pattern;
    private $placeholder;
    private $required;
    private $step;
    
    function __construct($name = null, $id = null) {
        if ($name) {
            $this->name;
            if (!$id)
                $this->id = $name;
        }
        
        if ($id) {
            $this->id = $id;
        }
    }
    
    function val($val) {
        $this->value = $val;
    }
    
    function setValue($field, $value) {
        $this->$field = $value;
    }
}
?>