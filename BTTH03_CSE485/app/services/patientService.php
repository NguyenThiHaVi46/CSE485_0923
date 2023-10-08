<?php
 include(APP_ROOT . '/app/models/patient.php');
 include(APP_ROOT . '/app/libs/DBconnection.php');

 class PatientService{
    public function getAllPatient(){
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        $sql = "SELECT * from benhnhan";
        if($conn != null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
            $allPatient = [];
            foreach($results as $each){
                $patient = new Patients($each[0], $each[1], $each[2], $each[3], $each[4]);
                $allPatient[] = $patient;
            }
            return $allPatient;
        }
    }

    public function getPatient($id){
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        $sql = "SELECT * FROM benhnhan where id = ?";
        if($conn != null){
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$id);
            $stmt->execute();
            $results = $stmt->fetch();
            $patient = new Patients($results[0], $results[1], $results[2], $results[3], $results[4]);
            return $patient;
        }
        
    }

    public function addPatient($namePatient, $date, $signal, $idDoctor){
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        if($conn != null){
                $sql = "INSERT INTO benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacSi) values('$namePatient', '$date', '$signal', '$idDoctor')";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                return true; 
        }
        return false;  

    }
    public function deletePatient($id){
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        $sql = "DELETE FROM benhnhan where id = '$id'";
        if($conn != null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return true;
            }
            return false;
    }
    public function editPatient($id, $name, $date, $signal, $idDoctor)
    {
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        if($conn != null){
            $sql = "Update benhnhan set tenBenhNhan =?, ngayKham=?, trieuChung=?, idBacSi=? where id =?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $name);
                $stmt->bindParam(2, $date);
                $stmt->bindParam(3, $signal);
                $stmt->bindParam(4, $idDoctor);
                $stmt->bindParam(5, $id);
                $stmt->execute();
                return true; 
        }
        return false;  
    }
 }
?>