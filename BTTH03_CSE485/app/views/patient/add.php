<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-25 mt-5">
          <form method="POST" action="?controller=patient&action=add">
            <div class="mb-3">
              <label for="id" class="form-label">Mã bệnh nhân</label>
              <input type="text" name="id" id="id" class="form-control">
            </div>
            <div class="mb-3">
              <label for="fullname" class="form-label">Tên bệnh nhân</label>
              <input type="text" name="namePatient" id="namePatient" class="form-control">
            </div>
            <div class="mb-3">
              <label for="fullname" class="form-label">Ngày khám</label>
              <input type="text" name="date" id="date" class="form-control">
            </div>
            <div class="mb-3">
              <label for="fullname" class="form-label">Triệu chứng</label>
              <input type="text" name="signal" id="signal" class="form-control">
            </div>
            <div class="mb-3">
              <label for="fullname" class="form-label">Mã bác sĩ</label>
              <input type="text" name="idDoctor" id="idDoctor" class="form-control">
            </div>
            <button class="btn btn-success">Thêm</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>