<?php 
        if(isset($_POST['email'])){
			//connection
            include("connection.php");
			//รับค่า user & password
            $Username = $_POST['email'];
            $Password = md5($_POST['password']);
			    
            //query 
            // prepare and bind
            $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $firstname, $lastname, $email);

            // set parameters and execute
            $firstname = "John";
            $lastname = "Doe";
            $email = "john@example.com";
            if($stmt->execute()){

                
				
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