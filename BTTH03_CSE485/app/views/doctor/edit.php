<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sửa sinh viên</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-25 mt-5">
          <form method="post" action=<?=DOMAIN."/public/index.php?controller=doctor&action=edit"?>>
            <div class="mb-3">
              <label for="id" class="form-label">Mã bác sĩ</label>
              <input type="text" name="id" id="id" class="form-control" readonly value="<?= $doctor->getId(); ?>">
            </div>
            <div class="mb-3">
              <label for="nameDoctor" class="form-label">Tên bác sĩ</label>
              <input type="name" name="nameDoctor" id="nameDoctor" class="form-control" value="<?= $doctor->getName(); ?>">
            </div>
            <div class="mb-3">
              <label for="specialist" class="form-label">Chuyên khoa</label>
              <input type="text" name="specialist" id="specialist" class="form-control" value="<?= $doctor->getSpecialist(); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>