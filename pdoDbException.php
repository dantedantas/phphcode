<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 09.07.2017
 * Time: 13:50
 */
class pdoDbException extends PDOException {

    public function __construct(PDOException $e) {
        if(strstr($e->getMessage(), 'SQLSTATE[')) {
            preg_match('/SQLSTATE\[(\w+)\] \[(\w+)\] (.*)/', $e->getMessage(), $matches);
            $this->code = ($matches[1] == 'HT000' ? $matches[2] : $matches[1]);
            $this->message = $matches[3];
        }
    }
}
?>