<?php

class DatabaseConnection
{
    var $_cursor = null;
    var $_sql = '';

    public function database()
    {
        $serverName = "localhost";
        $userName = "root";
        $password = "";

        try {
            $this->_dbh = new PDO("mysql:host = $serverName ; dbname = employee_management_system", $userName, $password);

            $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected Successfully";
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }
    public function setQuery($sql) {
        $this->_sql = $sql;
    }

    //Execute the Query

    public function execute($option = array())
    {
        $this->_cursor = $this->_dbh->prepare($this->_sql);
        if ($option) {
            for ($i = 0; $i < count($option); $i++) {
                $this->_cursor->bindParam($i + 1, $option[$i]);
            }
        }
        $this->_cursor->execute();
        return $this->_cursor;
    }

    //load data on the table 
    public function loadAllRows($option = array())
    {
        if (!$option) {
            if (!$result = $this->execute()) {
                return false;
            }
        } else {
            if (!$result = $this->execute($option)) {
                return false;
            }
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
    //function load 1 data on tabele
    public function loadRows($option = array())
    {
        if (!$option) {
            if (!$result = $this->execute()) {
                return false;
            }
        } else {
            if (!$result = $this->execute($option)) {
                return false;
            }
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }
    public function getlastId()
    {
        return $this-> _dbh->lastInsertId();
    }
}
