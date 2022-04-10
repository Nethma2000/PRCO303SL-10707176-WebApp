<?php

require_once 'companyDatabase.php';

class companyusers extends Database
{
    protected $tableName = "companies";

    //function to add companies

    public function add($data)
    {
        if (!empty($data)) {
            $fields = $placeholder = [];
            foreach ($data as $field => $value) {
                $fields[] = $field;
                $placeholder[] = ":{$field}";
            }
        }



        // $sql="INSERT INTO{$this->tableName} (company_name,field,address,company_contact,HRhead,HRphone,website,email,password)
        //  VALUES (:company_name,:field,:company_address,:company_contact,:HRhead,:HRphone,:website,:email,:comp_password)";

        $sql = "INSERT INTO{$this->tableName} (" . implode(',', $fields) . ") Values(" . implode(',', $placeholder) . ")";

        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();

            $stmt->execute($data);
            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error occured" . $e->getMessage();
            $this->conn->rollBack();
        }
    }





    //function to get rows

    public function getRows($start = 0, $limit = 4)
    {
        $sql = "SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }

        return $results;
    }




    //function to get single row

    public function getRow($field, $value)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE {$field}=:{$field}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }

        return $result;
    }






    //function to count number of rows

    public function getCount()
    {
        $sql = "SELECT count(*) as pcount FROM {$this->tableName}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        return $result['pcount'];
    }






    //function to update





    //function to delete






    //function to search

}
