<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center
         text-uppercase
          text-success
           mt-3 mb-3">Quản lý bệnh nhân</h3>
        <a href="?controller=addPatient" class="btn btn-success">Thêm bệnh nhân mới</a>
    <table class="table mt-33">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?PHP  
        foreach($patients as $patient){
    ?>
    <tr>
      <th scope="row"><?=$patient->getId();?></th>
      <td><?=$patient->getFullName();?></td>
      <td><?php echo ($patient->getGender() == '0') ? 'Nam' : 'Nữ'; ?></td>
     <td>
       <a href="?controller=editPatient&id=<?=$patient->getId()?>">
    <i class="bi bi-pencil-square"></i>
    
</td>
<td>
    <!-- <a href="<?= DOMAIN . 'app/views/patient/delete.php?id=' . $patient->getId() ?>">
     -->
    <a href="?controller=deletePatient&id=<?=$patient->getId()?>">
    <i class="bi bi-trash3"></i>
    </a>
</td>
    </tr>
  <?PHP }?>
   
  </tbody>
</table>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>