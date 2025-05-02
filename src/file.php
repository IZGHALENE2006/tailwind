
<?php 

// $firs_name = $_POST["firstname"];
// $last_name = $_POST["lastname"];
// $email     = $_POST["email"];
// $passworde  = $_POST["password"];

// //connection database
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname  = "database";

// $conne = new mysqli($servername,$username,$password,$dbname);
// if ($conne->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";
 
//  if(isset($_POST["submit"])){

//     if(empty($firs_name)){
//        echo"Please enter your first name<br>";
//     }
//     elseif(empty($last_name)){
//        echo"Please enter your last name<br>";
//     }
//     elseif(empty($passworde )){
//       echo"PPlease enter your password name<br>";
//    }   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//     echo"PPlease enter your Email valid <br>";
//  }
//    else{
//     $sql = "INSERT INTO users(firstname,lastname,email,passwod)
//     VALUES ('$firs_name','$last_name','$email','$passworde')";
//     if(mysqli_query($conne,$sql)){
//       echo "Data has been recorded successfully";
   
//     }
//     else{
//       echo"An error occurred";
//       header("locaion : file.php");
//     };
//    }
   
    
//  } 


//  /////add a new task

//  $tite = $_POST["title"];
//  $description = $_POST["description"];

//  if(isset($_POST["submite"]){
//   $sql = "INSERT INTO task(title,descriptione) VALUES ('$tite',' $description')"
//   mysqli_query($conne,$sql)
//  })
// التأكد من أن البيانات أُرسلت عبر POST
stsession_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // استقبال البيانات
    $firs_name = $_POST["firstname"] ?? '';
    $last_name = $_POST["lastname"] ?? '';
    $email     = $_POST["email"] ?? '';
    $passworde = $_POST["password"] ?? '';
    $title     = $_POST["title"] ?? '';
    $description = $_POST["description"] ?? '';
    $user_id = $_SESSION['id_usere'] ?? null;


    // الاتصال بقاعدة البيانات
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname  = "database";

    $conne = new mysqli($servername, $username, $password, $dbname);
    if ($conne->connect_error) {
        die("Connection failed: " . $conne->connect_error);
    }

    // معالجة تسجيل المستخدم
    if (isset($_POST["submit"])) {
        if (empty($firs_name)) {
            echo "Please enter your first name<br>";
        } elseif (empty($last_name)) {
            echo "Please enter your last name<br>";
        } elseif (empty($passworde)) {
            echo "Please enter your password<br>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please enter a valid email<br>";
        } else {
            $sql = "INSERT INTO users (firstname, lastname, email, passwod)
                    VALUES ('$firs_name', '$last_name', '$email', '$passworde')";
            if ($conne->query($sql) === TRUE) {
                echo "User data has been recorded successfully<br>";
            } else {
                echo "An error occurred while inserting user data: " . $conne->error;
            }
        }
    }

    // معالجة إضافة مهمة جديدة
    if (isset($_POST["submite"])) {
        $sql = "INSERT INTO task (titel, descriptione,id_usere)
                VALUES ('$title', '$description',' $user_id')";
        if ($conne->query($sql) === TRUE) {
            echo "Task added successfully<br>";
        } else {
            echo "An error occurred while adding task: " . $conne->error;
        }
    }

    $conne->close();
}
?>

