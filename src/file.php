
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
// stsession_start();

// session_start();  // تأكد من بدء الجلسة

// استقبال البيانات
// session_start();  // تأكد من بدء الجلسة

// الاتصال بقاعدة البيانات
// $servername = "localhost";
// $username = "root";
// $password = "123456";
// $dbname  = "database";

// // إنشاء الاتصال
// $conne = new mysqli($servername, $username, $password, $dbname);
// if ($conne->connect_error) {
//     die("Connection failed: " . $conne->connect_error);
// }

// // معالجة تسجيل المستخدم (Sign Up)
// if (isset($_POST["submit"])) {
//     // استقبال البيانات المدخلة
//     $firs_name = $_POST["namee"] ?? '';
//     $email = $_POST["emaile"] ?? '';
//     $passworde = $_POST["passworde"] ?? '';

//     // التحقق من البيانات المدخلة
//     if (empty($firs_name)) {
//         echo "Please enter your first name<br>";
//     } elseif (empty($passworde)) {
//         echo "Please enter your password<br>";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "Please enter a valid email<br>";
//     } else {
//         //  تشفير كلمة المرور قبل حفظها في قاعدة البيانات
//         $hashed_password = password_hash($passworde, PASSWORD_DEFAULT);
        
//         // استخدام prepared statement لتجنب SQL injection
//         $stmt = $conne->prepare("INSERT INTO users (firstname, email, passworde) VALUES (?,?,?)");
//         $stmt->bind_param("sss", $firs_name, $email, $hashed_password);  // "sss" تعني أن المتغيرات هي نوع نصي
//         if ($stmt->execute()) {
//             echo "User data has been recorded successfully<br>";
//         } else {
//             echo "An error occurred while inserting user data: " . $conne->error;
//         }
//         $stmt->close();
//     }
// }

// // معالجة تسجيل الدخول (Sign In)
// if (isset($_POST["signin"])) {
//     // استقبال البيانات المدخلة
//     $email = $_POST["email"] ?? '';
//     $passworde = $_POST["password"] ?? '';

//     // التحقق من البيانات المدخلة
//     if (empty($email) || empty($passworde)) {
//         echo "Please enter both email and password<br>";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "Please enter a valid email<br>";
//     } else {
//         // استخدام prepared statement لتجنب SQL injection
//         $stmt = $conne->prepare("SELECT * FROM users WHERE email = ?");
//         $stmt->bind_param("s", $email);  // "s" تعني أن المتغير هو نوع نصي
//         $stmt->execute();
//         $result = $stmt->get_result();

//         if ($result->num_rows > 0) {
//             $user = $result->fetch_assoc();
//             // التحقق من كلمة المرور
//             if (password_verify($passworde, $user['passworde'])) {
//                 $_SESSION['user_id'] = $user['id'];  // تخزين الـ user_id في الجلسة
//                 echo "Welcome back, " . $user['firstname'] . "<br>";
//             } else {
//                 echo "Incorrect password<br>";
//             }
//         } else {
//             echo "No user found with that email<br>";
//         }
//         $stmt->close();
//     }
// }

// // إغلاق الاتصال بقاعدة البيانات
// $conne->close();


session_start();

// إعداد الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "database";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التأكد من نجاح الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// تسجيل مستخدم جديد
if (isset($_POST["submit"])) {
    $name = $_POST["namee"] ?? '';
    $email = $_POST["emaile"] ?? '';
    $password = $_POST["passworde"] ?? '';

    // التحقق من تعبئة الحقول
    if (empty($name) || empty($email) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        // إدخال البيانات مباشرة بدون تشفير
        $sql = "INSERT INTO users (firstname, email, mod_pass) VALUES ('$name', '$email', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            // إعادة توجيه المستخدم بعد التسجيل
          
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// تسجيل الدخول
if (isset($_POST["signin"])) {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    if (empty($email) || empty($password)) {
        echo "Please fill in both email and password.";
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND mod_pass='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION["id_user"] = $user["id"];
            header("Location: home.php");
            exit();
        } else {
            echo "Incorrect email or password.";
        }
    }
}

// إضافة مهمة
if (isset($_POST["submite"]) && isset($_SESSION['user_id'])) {
    $title = $_POST["title"] ?? '';
    $description = $_POST["description"] ?? '';
    $user_id = $_SESSION['id_user'];

    if (!empty($title)) {
        $sql = "INSERT INTO task (title, descriptione, user_id) VALUES ('$title', '$description', '$user_id')";
        if ($conn->query($sql) === TRUE) {
            echo "Task added successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Task title is required.";
    }
}

// عرض المهام الخاصة بالمستخدم
if (isset($_GET['action']) && $_GET['action'] === 'get_tasks' && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['id_user'];
    $sql = "SELECT * FROM tasks WHERE id_user = '$user_id'";
    $result = $conn->query($sql);

    $tasks = [];
    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($tasks);
    exit();
}

// إغلاق الاتصال
$conn->close();
?>







