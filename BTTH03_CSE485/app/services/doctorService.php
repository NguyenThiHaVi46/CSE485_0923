<?php
 include(APP_ROOT . "/app/models/doctor.php");
 include(APP_ROOT . "/app/libs/DBconnection.php");

 class DoctorService{
    public function getAllDoctor(){
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        $sql = "SELECT * FROM bacsi";
        if($conn != null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
            $allDoctor = [];
            foreach($results as $each){
                $doctor = new Doctorr($each[0], $each[1], $each[2]);
                $allDoctor[] = $doctor;
            }
            return $allDoctor;
        }
        
    }
    public function addDoctor($nameDoctor, $specialist){
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        if($conn != null){
                $sql = "INSERT INTO bacsi (tenBacSi, chuyenKhoa) values('$nameDoctor', '$specialist')";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                return true; 
        }
        return false;  

    }
    public function deleteDoctor($id){
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        $sql = "DELETE FROM bacsi where id = '$id'";
        if($conn != null){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return true;
            }
            return false;
    }
 }
?>