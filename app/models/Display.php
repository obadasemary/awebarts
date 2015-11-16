<?php

/**
 * Created by PhpStorm.
 * User: obada
 * Display Data From DB
 * Date: 11/15/2015
 * Time: 5:06 PM
 */
class Display extends General
{
    private $tablename;

    public function __construct($tablename)
    {
        $this->tablename = $tablename;

        $this->connectToDb();

        //$this->getData();

        //$this->close();
    }

    function getAllData()
    {
        $query = "SELECT * FROM $this->tablename ORDER BY `id` DESC  ";
        if (!$sql = mysql_query($query)) {
            throw new Exception("Error: Can not execute query");
        } else {
            $num = mysql_num_rows($sql);
            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $data[$i] = mysql_fetch_assoc($sql);
                }
            }
        }
        return $data;
    }

    function getDataLastRecordDESC()
    {
        $query = "SELECT * FROM $this->tablename ORDER BY `id` DESC limit 1 ";
        if (!$sql = mysql_query($query)) {
            throw new Exception("Error: Can not execute query");
        } else {
            $num = mysql_num_rows($sql);
            while ($num > 0) {
                $data = mysql_fetch_assoc($sql);
                $num--;
            }
            return $data;
        }
    }


}