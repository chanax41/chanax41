<?php session_start();
        if(isset($_POST['username'])){
			//connection
            include("includes/conn.php");
			//รับค่า user & password
            $Username = $_POST['username'];
            $Password = md5($_POST['password']);
            
			    
            //query 
            $sql="SELECT * FROM users Where email='".$Username."' and password='".$Password."' ";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)==1){
 
                $row = mysqli_fetch_array($result);
 
                $_SESSION["UserID"] = $row["id"];
                $_SESSION["User"] = $row["name"];
                echo"login สำเร็จ";
                // $_SESSION["Userlevel"] = $row["Userlevel"];
 
                // if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                //     Header("Location: admin_page.php");
 
                // }
                // if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                //     Header("Location: user_page.php");
                // }
 
            }else{
                echo "<script>";
                    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                    echo "window.history.back()";
                echo "</script>";
 
                  }
        }else{
            Header("Location: index.php"); //user & password incorrect back to login again
        }
?>