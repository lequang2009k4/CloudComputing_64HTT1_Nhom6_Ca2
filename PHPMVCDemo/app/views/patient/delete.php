<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Xóa thông tin bệnh nhân</title>
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
      <h3 class="text-center text-uppercase text-success mt-3 mb-3">Xóa thông tin bệnh nhân</h3>

      <form action="?controller=deletePatient&id=<?=$patient->getId()?>" method="post">

         <div class="mb-3">
            <label for="name" class="form-label">Họ tên</label>
            <input type="text" class="form-control" id="name" name="name" value="<?=$patient->getFullname();?>" required>

         </div>

         <div class="mb-3">
            <label for="gender" class="form-label">Giới tính</label>
            <select class="form-control" id="gender" name="gender" required>
               <option value="0" <?php echo ($patient->getGender() == '0') ? 'selected' : ''; ?>>Nam</option>
               <option value="1" <?php echo ($patient->getGender() == '1') ? 'selected' : ''; ?>>Nữ</option>
            </select>
         </div>
      <button type="submit" class="btn btn-danger" name="btn_delete" onclick="return confirm('Bạn có chắc chắn muốn xóa bệnh nhân này không?')">Xóa</button>

   </form>
   </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

   
</body>
</html>
