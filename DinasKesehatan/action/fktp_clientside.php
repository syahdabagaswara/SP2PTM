<?php
include '../koneksi.php';
    $user_id=$_SESSION['id'];
    $data=array();
    $result = mysqli_query($koneksi,"SELECT b.name as coordi,c.*,d.role as role FROM user a,user b, user c,role d WHERE a.id='$user_id' AND b.child_id=a.id AND c.child_id=b.id AND c.role_id=d.id ");
    $rowresult = mysqli_num_rows($result);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
     for ($i = 0; $i < $rowresult; $i++){  
                    $last_login=date("d F Y",strtotime($data[$i]['last_login']));
                    
                    echo '["'.$data[$i]['id'].'","'.$data[$i]['name'].'","'.$data[$i]['person'].'","'.$data[$i]['phonenumber'].'","'.$data[$i]['area'].'","'.$data[$i]['role'].'","'.$data[$i]['username'].'","'.$data[$i]['password'].'","'.$data[$i]['email'].'","'.$data[$i]['child_id'].'","'.$data[$i]['coordi'].'","'.$data[$i]['address'].'","'.$data[$i]['role_id'].'","'.$last_login.'"],';
                    } 

 ?>