<?php
class Route {

    private $_uri = [];

    /**
     * Creazione URL interni ai quali fare riferimento
     * @param type $uri
     */
    public function add($uri) {
       $this->_uri[] = '/' . trim($uri, '/');
    }

    /**
     * Fa andare il tutto
     */
    public function submit() {
        echo $uriGetParam = isset($_GET['uri']) ? $_GET['uri'] : '/';
        
        foreach($this->_uri as $key => $value) {
        
            if (preg_match("#^$value$#", $uriGetParam)) {
                echo 'match!';
            }

        }
     }
}
?>