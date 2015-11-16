<?php

/**
 * Created by PhpStorm.
 * User: obada
 * Add class
 * insert data into DB
 * Date: 11/15/2015
 * Time: 5:04 PM
 */
class Add extends General
{
    private $data;
    private $tablename;
//    private $cxn;

    /**
     * Add constructor.
     * @param $data
     */
    public function __construct($data, $tablename)
    {
        if (is_array($data)) {
            $this->data = $data;
            $this->tablename = $tablename;
        } else {
            throw new Exception("Error: the data must be in an array");
        }

        // connect to DB
        $this->connectToDb();

        //insert into DB
        $this->AddData();

        // close
        $this->close();
    }

    /**
     *
     */
    function AddData()
    {
        foreach ($this->data as $key => $value) {
            $keys[] = $key;
            $values[] = $value;
        }

        $tblKeys = implode($keys, ",");
        $dataValues = '"' . implode($values, '","') . '"';

        $query = "INSERT INTO $this->tablename ($tblKeys) VALUES ($dataValues)";

        if ($sql = mysql_query($query)) {
            return true;
        } else {
            throw new Exception("Error: Can not execute query");
            return false;
        }
    }
}