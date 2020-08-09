<?php

class GalleryModel {

    public $GalleryID;
    public $Name;

    public function GetAll() {

        $conn = sqlsrv_connect(SERVER_NAME, array("Database" => DATABASE, "UID" => UID, "PWD" => PWD));

        if ($conn) {
            $sql = "SELECT [GalleryID],[Name]  FROM [dbo].[Gallery]";
            $stmt = sqlsrv_query($conn, $sql);
            $galeries = array();

            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $banner = new GalleryModel();
                $banner->GalleryID = $row['GalleryID'];
                $banner->Name = $row['Name'];
                array_push($galeries, $banner);
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
        return $galeries;
    }

    public function Get() {

        $conn = sqlsrv_connect(SERVER_NAME, array("Database" => DATABASE, "UID" => UID, "PWD" => PWD));

        if ($conn) {
            $sql = "SELECT [GalleryID],[Name]  FROM [dbo].[Gallery] WHERE GalleryID = ?";
            $params = array($this->GalleryID);
            $stmt = sqlsrv_query($conn, $sql, $params);

            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $this->GalleryID = $row['GalleryID'];
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
            $sql = "INSERT INTO [dbo].[Gallery] (Name) VALUES (?)";
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
            $sql = "UPDATE [Gallery] SET Name = ? WHERE GalleryID = ?";
            $params = array($this->Name, $this->GalleryID);

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
            $sql = "DELETE FROM [Gallery] WHERE GalleryID = ? ";
            $params = array($this->GalleryID);

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
