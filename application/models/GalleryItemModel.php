<?php

class GalleryItemModel {

    public $BannerID;
    public $Name;
    public $Url;

    public function GetAll() {

        $conn = sqlsrv_connect(SERVER_NAME, array("Database" => DATABASE, "UID" => UID, "PWD" => PWD));

        if ($conn) {
            $sql = "SELECT [BannerID],[Name],[Url]  FROM [dbo].[Banner]";
            $stmt = sqlsrv_query($conn, $sql);
            $banners = array();

            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $banner = new BannerModel();
                $banner->BannerID = $row['BannerID'];
                $banner->Name = $row['Name'];
                $banner->Url = $row['Url'];
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
            $sql = "SELECT [BannerID],[Name],[Url]  FROM [dbo].[Banner] WHERE BannerID = ?";
            $params = array($this->BannerID);
            $stmt = sqlsrv_query($conn, $sql, $params);

            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $this->BannerID = $row['BannerID'];
                $this->Name = $row['Name'];
                $this->Url = $row['Url'];
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
            $sql = "INSERT INTO [dbo].[Banner] (Name,Url) VALUES (?, ?)";
            $params = array($this->Name, $this->Url);

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
            $sql = "UPDATE [Banner] SET Name = ?, Url = ? WHERE BannerID = ?";
            $params = array($this->Name, $this->Url, $this->BannerID);

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
            $sql = "DELETE FROM [Banner] WHERE BannerID = ? ";
            $params = array($this->UserID);

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
