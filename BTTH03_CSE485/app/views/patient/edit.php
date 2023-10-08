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
          <form method="post" action=<?=DOMAIN."/public/index.php?controller=patient&action=edit"?>>
            <div class="mb-3">
              <label for="id" class="form-label">Mã bệnh nhân</label>
              <input type="text" name="id" id="id" class="form-control" readonly value="<?= $patient->getId(); ?>">
            </div>
            <div class="mb-3">
              <label for="nameDoctor" class="form-label">Tên bệnh nhân</label>
              <input type="name" name="namePatient" id="namePatient" class="form-control" value="<?= $patient->getName(); ?>">
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Ngày khám</label>
              <input type="date" name="date" id="date" class="form-control" value="<?= $patient->getDate(); ?>">
            </div>
            <div class="mb-3">
              <label for="specialist" class="form-label">Triệu chứng</label>
              <input type="text" name="specialist" id="specialist" class="form-control" value="<?= $patient->getSignal(); ?>">
            </div>
            <div class="mb-3">
              <label for="IdDoctor" class="form-label">Mã bác sĩ</label>
              <input type="text" name="IdDoctor" id="IdDoctor" class="form-control" value="<?= $patient->getIdDoctor(); ?>">
            </div>
            <button type = "submit"class="btn btn-primary">Sửa</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>