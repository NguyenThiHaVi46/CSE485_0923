<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>


    <div class="container">
    <!-- <?php
   include '../menu.php';
     ?> -->
        <h3 class ="text-center text-uppercase text-success my-3" >HOSPITAL MANAGEMENT</h3>
        <a href="<?=DOMAIN."/public/index.php?controller=doctor&action=addForm"?>"class ='btn btn-success'>ADD</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Doctor</th>
      <th scope="col">Name Doctor</th>
      <th scope="col">Specialist</th>   
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <?php
     foreach($allDoctor as $each){
     ?>
        <tr>
            <th scope="row"><?= $each->getId(); ?></th>
            <td><?= $each->getName(); ?></td>
            <td><?= $each->getSpecialist(); ?></td>
            <td>
              <a href="<?= DOMAIN.'app/views/doctor/edit.php?id=' .$each->getId(); ?>"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
              <a href="" data-bs-toggle="modal" data-bs-target="#id<?= $each->getID() ?>"><i class="bi bi-trash"></i></a>
              <!-- Modal -->
              <div class="modal fade" id="id<?= $each->getID() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure delete student have id: <?= $each->getID() ?>?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="<?= DOMAIN."/public/index.php?controller=doctor&action=delete&id=".$each->getId(); ?>">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
            </td>
        </tr> 
    <?php
      }
    ?>  
  </tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>