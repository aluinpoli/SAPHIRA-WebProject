<?php
class DatabaseConnect {

    public $_db;
    /*
     * connect database when create new instance
     */
    public function __construct() {

        $db = new mysqli('localhost','root', '', 'jokehunter');
        if ($db->connect_errno) {
            header('Location: errorPages' . DS . 'database.php');
            exit;
        } else {
            $this->_db = $db;
        }
    }
    /*
     * this function execute sql
     */
    public function execute($sql) {

        $this->_db->query('SET NAMES utf8');
        $query = $this->_db->query($sql);
        if (!$query) {
            echo $this->_db->error;
        } else {
            return $query;
        }
    }
    /*
     * this function escape string (for sql injection)
     */
    public function escape($string) {

        $escaped = $this->_db->real_escape_string($string);

        return $escaped;
    }

    /*
     * close connection
     */
    public function __destruct() {
        $this->_db->close();
    }
    /*
     * this function tell us next insert id 
     * 
     */
    public function inserted_id() {
        return $this->_db->insert_id;
    }
    

}
