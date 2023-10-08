<?php
 include(APP_ROOT . '/app/services/patientService.php');
 
 class PatientController{
    public function index(){
        $patientService = new PatientService();
        $allPatient = $patientService->getAllPatient();
        require(APP_ROOT . '/app/views/patient/index.php');
    }

    public function addForm(){
        require(APP_ROOT .'/app/views/patient/add.php');
    }
    
    public function add(){
        if(isset($_POST["namePatient"]) && isset($_POST["date"]) && isset($_POST["signal"]) && isset($_POST["idDoctor"])){
            $name = $_POST["namePatient"];
            $date = $_POST["date"];
            $signal = $_POST["signal"];
            $idDoctor = $_POST["idDoctor"];
            $patientService = new PatientService();
            $patientAdd = $patientService->addPatient($name, $date, $signal, $idDoctor);

            if($patientAdd){
                header("Location:".DOMAIN."/public/index.php?controller=patient&action=index");
                echo "Thêm thành công";
            }else{
                $PatientService = new PatientService();
                $allPatient = $patientService->getAllPatient();
                require(APP_ROOT."/app/views/patient/index.php");
                echo "Thêm thất bại";
            }
        }
    }

    public function delete(){
        if(isset($_GET["id"])){
            $id = ($_GET['id']);
            $patientService = new PatientService();
            $delete=$patientService->deletePatient($id);
            if($delete){
                header("Location:".DOMAIN."/public/index.php?controller=patient&action=index");
            }
            else{
                require(APP_ROOT."/app/views/patient/index.php");
                echo "Xóa thất bại";
            }

        }else{
            header("Location:".DOMAIN."/public/index.php?controller=patient&action=index");
        }
    }

    public function edit(){
        if(isset($_POST["id"])&&isset($_POST["namePatient"]) && isset($_POST["date"]) && isset($_POST["signal"]) && isset($_POST["IdDoctor"])){
            $id=$_POST["id"];
            $name=($_POST["namePatient"]);
            $date=($_POST["date"]);
            $signal=($_POST["signal"]);
            $idDoctor=($_POST["IdDoctor"]);
            $patientService=new PatientService();
            $patient=$patientService->editPatient($id, $name, $date, $signal, $idDoctor);
            if($patient==false){
                require_once(APP_ROOT."/app/views/Error/index.php");
            }
            else{
                header("Location:".DOMAIN."/public/index.php?controller=patient&action=index");
            }
        }
        else{
            if(isset($_GET["id"])){
                $id=$_GET["id"];
                $patientService=new PatientService();
                $patient=$patientService->getPatient($id);
                require_once(APP_ROOT."/app/views/patient/edit.php");
            }        
        }
    }
    public function editForm(){
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $patientService=new PatientService();
            $patient=$patientService->getAllPatient($id);
            require_once(APP_ROOT."/app/views/patient/edit.php");
        }
    }
}
class ErrorController{
    public function index(){
        require_once(APP_ROOT."/app/views/error/index.php");
    }
 }
?>