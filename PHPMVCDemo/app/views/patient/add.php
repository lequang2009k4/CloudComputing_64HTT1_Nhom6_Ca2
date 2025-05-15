<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thêm bệnh nhân</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
   <style>
      form {
         width: 30%;
         margin: auto;
      }
      button{
         width: 100%;
         margin-top: 10px;
      }
   </style>
</head>
<body>
   <div class="container">
      <h3 class="text-center text-uppercase text-success mt-3 mb-3">Thêm bệnh nhân</h3>
      <form action="?controller=addPatient" method="post">

         <div class="mb-3">
            <label for="name" class="form-label">Họ tên</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Điền họ tên bệnh nhân">
         </div>

         <div class="mb-3">
            <label for="gender" class="form-label">Giới tính</label>
            <select class="form-control" id="gender" name="gender" required>
               <option value="">Chọn giới tính</option>
               <option value="0">Nam</option>
               <option value="1">Nữ</option>
            </select>
         </div>
      <button type="submit" class="btn btn-primary" name="btn_create">Thêm</button>

      </form>
   </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script>
   document.querySelector('form').addEventListener('submit', function(e) {
      if (document.querySelector('#gender').value ===''){
         e.preventDefault();
         alert('Vui lòng chọn giới tính');
      }
   });
</script>
   
</body>
</html>
