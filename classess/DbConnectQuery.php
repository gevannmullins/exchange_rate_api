<?php


class DbConnectQuery
{

    private $conn = null;

    public function __construct($hostname, $username, $password, $database, $port, $dbpath=null, $sqlitefile=null)
    {
        try {
            $this->conn = new mysqli($hostname, $username, $password, $database);
        } catch(\mysqli_sql_exception $e) {
            trigger_error('Error: Could not make a database link ( ' . $e->getMessage() . '). Error Code : ' . $e->getCode() . ' <br />');
            exit();
        }
    }

    public function mysqlQuery($sql)
    {
        if (mysqli_query($this->conn, $sql)) {
            return "New record created successfully";
        } else {
            return "Error: " . $sql . "" . mysqli_error($this->conn);
        }
    }

    public function escape($value) {
        $search = array("\\", "\0", "\n", "\r", "\x1a", "'", '"');
        $replace = array("\\\\", "\\0", "\\n", "\\r", "\Z", "\'", '\"');
        return str_replace($search, $replace, $value);
    }


    public function getLastId() {
        return $this->conn->insert_id;
    }

    public function __destruct() {
        $this->conn = null;
    }

}