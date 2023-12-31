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
    public function getDoctor($id){
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        $sql = "SELECT * FROM bacsi where id = ?";
        if($conn != null){
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$id);
            $stmt->execute();
            $results = $stmt->fetch();
            $doctor = new Doctorr($results[0], $results[1], $results[2]);
            return $doctor;
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

    public function editDoctor($id, $name, $specialist)
    {
        $DBconnection = new DBconnection();
        $conn = $DBconnection->getConnection();
        if($conn != null){
            $sql = "Update bacsi set tenBacSi =?, chuyenKhoa =? where id =?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $name);
                $stmt->bindParam(2, $specialist);
                $stmt->bindParam(3, $id);
                $stmt->execute();
                return true; 
        }
        return false;  
    }
 }
?>