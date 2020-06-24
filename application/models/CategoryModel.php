<?php

class CategoryModel {

    public $BlogCategoryID;
    public $Name;

    public function GetAll() {

        $conn = sqlsrv_connect(SERVER_NAME, array("Database" => DATABASE, "UID" => UID, "PWD" => PWD));

        if ($conn) {
            $sql = "SELECT [BlogCategoryID],[Name]  FROM [dbo].[BlogCategory]";
            $stmt = sqlsrv_query($conn, $sql);
            $banners = array();

            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $banner = new CategoryModel();
                $banner->BlogCategoryID = $row['BlogCategoryID'];
                $banner->Name = $row['Name'];
                array_push($banners, $banner);
            }
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
        return $banners;
    }

    public function Get() {

        $conn = sqlsrv_connect(SERVER_NAME, array("Database" => DATABASE, "UID" => UID, "PWD" => PWD));

        if ($conn) {
            $sql = "SELECT [BlogCategoryID],[Name]  FROM [dbo].[BlogCategory] WHERE BlogCategoryID = ?";
            $params = array($this->BlogCategoryID);
            $stmt = sqlsrv_query($conn, $sql, $params);

            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $this->BlogCategoryID = $row['BlogCategoryID'];
                $this->Name = $row['Name'];
            }
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);

        return $this;
    }

    public function Save() {

        $conn = sqlsrv_connect(SERVER_NAME, array("Database" => DATABASE, "UID" => UID, "PWD" => PWD));

        if ($conn) {
            $sql = "INSERT INTO [dbo].[BlogCategory] (Name) VALUES (?)";
            $params = array($this->Name);

            $stmt = sqlsrv_query($conn, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
                return false;
            }
            return true;
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
            return false;
        }

        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }

    public function Update() {

        $conn = sqlsrv_connect(SERVER_NAME, array("Database" => DATABASE, "UID" => UID, "PWD" => PWD));

        if ($conn) {
            $sql = "UPDATE [BlogCategory] SET Name = ? WHERE BlogCategoryID = ?";
            $params = array($this->Name, $this->BlogCategoryID);

            $stmt = sqlsrv_query($conn, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
                return false;
            }
            return true;
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
            return false;
        }

        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }

    public function Delete() {

        $conn = sqlsrv_connect(SERVER_NAME, array("Database" => DATABASE, "UID" => UID, "PWD" => PWD));

        if ($conn) {
            $sql = "DELETE FROM [BlogCategory] WHERE BlogCategoryID = ? ";
            $params = array($this->BlogCategoryID);

            $stmt = sqlsrv_query($conn, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
                return false;
            }
            return true;
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
            return false;
        }

        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }


}
