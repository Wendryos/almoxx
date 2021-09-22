<?php 
class Validator {
    public $field;

    public function validate_filed($request, $type) {
        $this->field = $request;

        switch ($type) {
            case 'string':
                    $this->field = filter_var($this->field, FILTER_SANITIZE_STRING);
                    return trim($this->field);
                break;
            }
    }

    
}


?>