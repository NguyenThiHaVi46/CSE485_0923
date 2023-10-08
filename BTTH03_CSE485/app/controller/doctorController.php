<?php
 include(APP_ROOT . '/app/services/doctorService.php');
 
 class DoctorController{
    public function index(){
        $doctorService = new DoctorService();
        $allDoctor = $doctorService->getAllDoctor();
        require(APP_ROOT . '/app/views/doctor/index.php');
    }

    public function addForm(){
        require(APP_ROOT .'/app/views/doctor/add.php');
    }
    
    public function add(){
        if(isset($_POST["nameDoctor"]) && isset($_POST["specialist"])){
            $name = $_POST["nameDoctor"];
            $specialist = $_POST["specialist"];
            $doctorService = new DoctorService();
            $doctorAdd = $doctorService->addDoctor($name, $specialist);

            if($doctorAdd){
                header("Location:".DOMAIN."/public/index.php?controller=doctor&action=index");
                echo "Thêm thành công";
            }else{
                $DoctorService = new DoctorService();
                $allDoctor = $DoctorService->getAllDoctor();
                require(APP_ROOT."/app/views/doctor/index.php");
                echo "Thêm thất bại";
            }
        }
    }

    public function delete(){
        if(isset($_GET["id"])){
            $id = ($_GET['id']);
            $doctorService = new DoctorService();
            $delete=$doctorService->deleteDoctor($id);
            if($delete){
                header("Location:".DOMAIN."/public/index.php?controller=doctor&action=index");
            }
            else{
                require(APP_ROOT."/app/views/doctor/index.php");
                echo "Xóa thất bại";
            }

        }else{
            header("Location:".DOMAIN."/public/index.php?controller=doctor&action=index");
        }
    }

    public function edit(){
        if(isset($_POST["id"])&&isset($_POST["nameDoctor"]) && isset($_POST["specialist"])){
            $id=$_POST["id"];
            $name=($_POST["nameDoctor"]);
            $specialist=($_POST["specialist"]);
            $doctorService=new DoctorService();
            $doctor=$doctorService->editDoctor($id, $name, $specialist);
            if($doctor==false){
                require_once(APP_ROOT."/app/views/Error/index.php");
            }
            else{
                header("Location:".DOMAIN."/public/index.php?controller=doctor&action=index");
            }
        }
        else{
            if(isset($_GET["id"])){
                $id=$_GET["id"];
                $doctorService=new DoctorService();
                $doctor=$doctorService->getDoctor($id);
                require_once(APP_ROOT."/app/views/doctor/edit.php");
            }        
        }
    }
    public function editForm(){
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $doctorService=new DoctorService();
            $doctor=$doctorService->getAllDoctor($id);
            require_once(APP_ROOT."/app/views/doctor/edit.php");
        }
    }
}
class ErrorController{
    public function index(){
        require_once(APP_ROOT."/app/views/error/index.php");
    }
 }
?>