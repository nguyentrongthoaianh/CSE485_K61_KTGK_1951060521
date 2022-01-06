<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QLDH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
            
            <h2>Quản Lý Đại Học</h2> 
                 </div>
                <div>
                    <a class="btn btn-primary "href="add.php">Thêm </a>
                </div>
                    <table class="table">
                <thead>
                    <tr>
                    <th scope="col">MÃ giao viên </th>
                    <th scope="col">HỌ và Tên </th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">Giới Tính</th>
                    <th scope="col">Trình độ </th>
                    <th scope="col">chuyên Môn </th>
                    <th scope="col">Học Hàm</th>
                    <th scope="col">Học vị</th>
                    <th scope="col">Cơ Quan</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            $conn= mysqli_connect('localhost','root','','1951060521_university');

            $sql="SELECT * from giangvien";
            mysqli_set_charset($conn,"utf8");
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr> 
                <th scope="row"> <?php echo $row['magv'];?></th>
                <th scope="row"> <?php echo $row['hovaten'];?></th>
                <th scope="row"> <?php echo $row['ngaysinh'];?></th>
                <th scope="row"> <?php echo $row['gioitinh'];?></th>
                <th scope="row"> <?php echo $row['trinhdo'];?></th>
                <th scope="row"> <?php echo $row['chuyenmon'];?></th>
                <th scope="row"> <?php echo $row['hocham'];?></th>
                <th scope="row"> <?php echo $row['hocvi'];?></th>
                <th scope="row"> <?php echo $row['coquan'];?></th>
                <td><a href="edit.php"><button class ="btn btn-success">Sửa</button></a></td>
                <td><a href="#"><button class ="btn btn-success">Xóa</button></a></td>
                <td><a href="index.php"><button class ="btn btn-success">Chi Tiết</button></a></td>

            </tr>
            <?php
            }
        }
        ?>
        </tbody>
               
        
        
        
     
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>