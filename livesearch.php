<?php
include('connect.php');
if(isset($_POST['input'])){
    $input=$_POST['input'];
   // $query="SELECT * FROM teacher_details  WHERE teacher_name LIKE '{$input}%' ";
   $query = "SELECT * FROM teacher_details 
          WHERE teacher_name LIKE '{$input}%' 
          OR email LIKE '{$input}%' 
          OR mobile LIKE '{$input}%' ";

    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result) >0){?>

   <table class="table table-boarded table-striped mt-4">
      <thead>
        <tr>
            <th>Id</th>
            <th>teacher_name</th>
            <th>email</th>
            <th>mobile</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $teacher_name = $row['teacher_name'];
            $email = $row['email'];
            $mobile = $row['mobile'];

            ?>
            <tr>
                <td> <?php echo $id;?></td>
                <td> <?php echo $teacher_name;?></td>
                <td> <?php echo $email;?></td>
                <td> <?php echo $mobile;?></td>
            </tr>
            

            <?php

            
          }
        ?>
      </tbody>
    </table>

<?php

    }else{
        echo "data not found";
    }
}
?>