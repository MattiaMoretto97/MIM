<?php
class Route {

    private $_uri = [];
    private $_method = [];

    /**
     * Creazione URL interni ai quali fare riferimento
     * @param type $uri
     */
    public function add($uri, $method = null) {
       $this->_uri[] = '/' . trim($uri, '/');

       if ($method != null) {
           $this->_method[] = $method;
       }
    }

    /**
     * Fa andare il tutto
     */
    public function submit() {

        $uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
        
        foreach($this->_uri as $key => $value) {
        
            if (preg_match("#^$value$#", $uriGetParam)) {

                if (is_string($this->_method[$key])) {

                    $useMethod = $this->_method[$key];
                    new $useMethod();
                } else {

                    call_user_func($this->_method[$key]);
                }
            }
        }
     }
}
?>