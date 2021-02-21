<?php

class database
{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $database = "project_class";
    public $conn;
    public $_sql = "";

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        } catch (Exception $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    public function select($vars = "*", $table, $join = "", $where = "", $groupby = "", $orderby = "")
    {
        if ($vars != "*") {
            if (is_array($vars)) {
                $vars = implode(",", $vars);
            }
        }
        $selectSql = "SELECT " . $vars . " FROM " . $table;
        // print_r($selectSql);die();
        if ($join !== "") {
            $selectSql .= " " . $join;
        }
        if ($where !== "") {
            $selectSql .= ' WHERE ' . $where;
            // print_r($selectSql);die();
        }
        if ($groupby !== "") {
            $selectSql .= ' GROUP BY ' . $groupby;
            // print_r($selectSql);die();
        }
        if ($orderby !== "") {
            $selectSql .= ' ORDER BY ' . $orderby;
        }
        // print_r($selectSql);
        // die();

        $results = mysqli_query($this->conn, $selectSql);
        // print_r($results);die();
        return $results;

        // $row=mysqli_fetch_assoc($results);
        // return $row;
        // print_r($row);
        // die;

    }

    public function insert($table, $dbFields)
    {
        $fields = array();
        $value = array();
        foreach ($dbFields as $k => $v) {
            $v = (stripslashes($v));
            $fields[] = $k;
            $qmark[] = "'" . $v . "'";
            $value[":" . $k] = $v;
        }

        $f = implode("`,`", $fields);
        $q = implode(",", $qmark);
        $val = implode("','", $value);

        $insertSql = "INSERT INTO `$table` (`$f`) VALUES ($q)";
        // print_r($insertSql);die();
        $stmt = $this->conn->prepare($insertSql);
        $stmt->execute();
        return $stmt;
    }

    public function getInsertId()
    {
        $_result = mysqli_insert_id($this->conn);
        $this->_insertId = $_result;
        return $_result;
    }

    public function update($table, $dbFields, $where)
    {

        $updateSql = "UPDATE $table SET ";
        $i = 0;
        $values = array();

        foreach ($dbFields as $k => $v) {

            if ($i == 0) {
                $updateSql .= " $k = '$v'";
            } else {
                $updateSql .= ", $k = '$v' ";
            }

            $values[] = $v;
            $i++;
        }

        $updateSql .= "WHERE $where";
        $stmt = $this->conn->prepare($updateSql);
        $_result = $stmt->execute();
        // print_r($_result);die();
        return $_result;
    }

    public function delete($var = '', $table, $join = '', $where)
    {
        $deleteSql = "DELETE ";
        if ($var !== '') {
            $deleteSql .= " " . $var . " FROM " . $table;
        } else {
            $deleteSql .= "FROM " . $table;
        }

        if ($join !== '') {
            $deleteSql .= " " . $join;
        }
        if ($where != '') {
            $deleteSql .= ' WHERE ' . $where;
        }
        // print_r($deleteSql);
        // die();
        // $results = mysqli_query($this->conn, $deleteSql);

        $stmt = $this->conn->prepare($deleteSql);
        $stmt->execute();
        // return $results;
    }

    public function query($sql)
    {
        $array = array();
        $result = mysqli_query($this->conn, $sql);
        // print_r($result);die();
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        // print_r($array);die();
        return $array;
    }
}
