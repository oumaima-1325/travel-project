<?php
// Assuming you have your MySQL connection details
$servername = "localhost";
$username = "root";
$password = "2513";
$dbname = "travel";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the user_preferences table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS user_preferences (
  id INT AUTO_INCREMENT PRIMARY KEY,
  discover VARCHAR(50),
  food VARCHAR(50),  
  suggestion1 TEXT,
  photo_path1 VARCHAR(255),
  suggestion2 TEXT,
  photo_path2 VARCHAR(255)
)";

$conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $discover = $_POST['discover'];
    $food = $_POST['food'];

    // Prepare and execute the SQL statement to insert user preferences
    $sql = "INSERT INTO user_preferences (discover, food) VALUES ('$discover', '$food')";

    if ($conn->query($sql) === TRUE) {
        

        // Retrieve the suggestions from the table based on the user's choices
        $sql = "SELECT * FROM user_preferences WHERE discover = '$discover' AND food = '$food'  "  ;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $suggestion1 = explode(", ", $row["suggestion1"]);
            $suggestion2 = explode(", ", $row["suggestion2"]);
            $photoPath1 = $row['photo1'];
            $photoPath2 = $row['photo2'];
            $website = "options.php";

            echo"<style>
            body{
                margin:40px;
                font-family: Arial, sans-serif;
             background-color: #f5f5f5;
      
                }
            p{
                font-family: Arial, sans-serif;
                font-size: 16px;
                line-height: 1.2;
                color: #333;
                margin-bottom: 10px;
                font-style: italic;
                text-align:center;
            }
            h2{
                text-align: center;   
            }
            h3{
                text-align: center;
                color: #1fa56f;
            }
            img{
                max-width: 100%;
      height: auto;
      margin-bottom: 10px;
            }
            
            div{
                display: flex;
                 flex-direction: column;
             justify-content: space-between;
          

            }
            button{
                border: none;
                padding: 15px 35px;
                background-color: #1fa56f;
                color: #ffffff;
                transition: 0.4s all;
                align-self: center;
            }
            button:hover{
                cursor: pointer;
                opacity: .7;
            }
           
    
           
            </style>";

            echo ' <a href="' . $website . '"><button>Return</button></a>';
            echo "<body><h2>Here are the best suggestions for you:</h2>";
        
            
            echo "<div><h3>first suggestion:</h3><img src='$photoPath1'  alt='Image'></div>";
            echo "<div>";
            foreach ($suggestion1 as $suggestion1) {
                echo "<p>$suggestion1</p>";
            }
            echo "<div>";
            echo "<div><h3 >second suggestion:</h3><img src='$photoPath2'  alt='Image'></div>";
            foreach ($suggestion2 as $suggestion2) {
                echo "<p>$suggestion2</p>";
            }
            echo "</body>";
            
        } else {
            echo "No suggestions available for the selected preferences.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>