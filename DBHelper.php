<?php
/**
 * Created by PhpStorm.
 * User: )0(
 * Date: 03.02.2019
 * Time: 14:35
 */

class DBHelper{

    private
        $host,
        $database,
        $username,
        $password;
    /**
     * DBHelper constructor.
     * @param $host
     * @param $database
     * @param $username
     * @param $password
     */
    public function __construct($host, $database, $username, $password)
    {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

    }

    public function connect(){
        $connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        return $connect;

    }


    public function read($query){}

    public function write($string){
        $connect = connect();
        $query = mysqli_query($connect, $string);
        mysqli_close($connect);
    }

    public function delete($query){}


}