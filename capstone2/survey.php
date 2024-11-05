<?php
session_start();
include("database_connection.php");

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $question1 = $_POST['question1'];
    $question2 = isset($_POST['question2']) ? implode(", ", $_POST['question2']) : '';
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = isset($_POST['question5']) ? implode(", ", $_POST['question5']) : '';
    $question6 = isset($_POST['question6']) ? implode(", ", $_POST['question6']) : '';
    $question7 = isset($_POST['question7']) ? implode(", ", $_POST['question7']) : '';
    $question8 = isset($_POST['question8']) ? implode(", ", $_POST['question8']) : '';
    $question9 = isset($_POST['question9']) ? implode(", ", $_POST['question9']) : '';
    $question10 = isset($_POST['question10']) ? implode(", ", $_POST['question10']) : '';
    $question11 = isset($_POST['question11']) ? implode(", ", $_POST['question11']) : '';

    // Add database insert query if needed here
    // Example:
    // $sql = "INSERT INTO survey_responses (...) VALUES (...)";
    // $result = mysqli_query($conn, $sql);

    // Assuming user ID is set after survey, set session (example, replace 123 with actual user ID)
    $_SESSION['user_id'] = 123; // Ensure user ID is set correctly here

    // Redirect to budget_categories.php after form submission
    header("Location: budget_categories.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <style>
        body {
            background: rgba(212, 244, 228, 0.80);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden; /* Prevent body scrolling */
        }
        .form-container {
            max-height: 90vh; /* Allow some height for the scrollable area */
            overflow-y: auto; /* Enable vertical scrolling */
            width: 80%; /* Adjust width as needed */
            max-width: 600px; /* Optional: Set a max width for larger screens */
            padding: 20px;
            background: white; /* Optional: Change the form background for better contrast */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input {
            margin: 5px 0;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50; /* Button color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #45a049; /* Darker shade on hover */
        }
    </style>
</head>
<body>

<div class="form-container">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h2>Please complete the survey</h2>
        
        <!-- Question 1 -->
        <label for="question1">1. Do you feel in control of your spending today?</label>
        <input type="radio" name="question1" value="Stressed - I want to hide" required> Stressed - I want to hide<br>
        <input type="radio" name="question1" value="Unsure - Not much direction"> Unsure - Not much direction<br>
        <input type="radio" name="question1" value="Stable - No fires to put out"> Stable - No fires to put out<br>
        <input type="radio" name="question1" value="Confident - Ready to shine!"> Confident - Ready to shine!<br>
       
        <!-- Question 2 -->
        <label for="question2">2. Who do you spend money on?</label>
        <input type="checkbox" name="question2[]" value="Myself"> Myself<br>
        <input type="checkbox" name="question2[]" value="Partner"> Partner<br>
        <input type="checkbox" name="question2[]" value="Family"> Family<br>
        <input type="checkbox" name="question2[]" value="Kids"> Kids<br>
        <input type="checkbox" name="question2[]" value="Pets"> Pets<br>

        <!-- Question 3 --> 
        <label for="question3">3. Tell us about your home</label>
        <input type="radio" name="question3" value="I own" required> I own<br>
        <input type="radio" name="question3" value="I rent"> I rent<br>
        
        <!-- Question 4 -->
        <label for="question4">4. Do you have a mortgage?</label>
        <input type="radio" name="question4" value="Yes" required> Yes<br>
        <input type="radio" name="question4" value="No, my house is paid off"> No, my house is paid off<br>

        <!-- Question 5 -->
        <label for="question5">5. Do you currently have any debt?</label>
        <input type="checkbox" name="question5[]" value="Credit Card"> Credit Card<br>
        <input type="checkbox" name="question5[]" value="Auto Loans"> Auto Loans<br>
        <input type="checkbox" name="question5[]" value="Personal Loans"> Personal Loans<br>
        <input type="checkbox" name="question5[]" value="Student Loans"> Student Loans<br>
        <input type="checkbox" name="question5[]" value="Medical Debt"> Medical Debt<br>
        <input type="checkbox" name="question5[]" value="I don't have debt"> I don't have debt<br>

        <!-- Question 6 -->
        <label for="question6">6. How do you get around?</label>
        <input type="checkbox" name="question6[]" value="Car"> Car<br>
        <input type="checkbox" name="question6[]" value="Bike"> Bike<br>
        <input type="checkbox" name="question6[]" value="Walk"> Walk<br>
        <input type="checkbox" name="question6[]" value="Wheelchair"> Wheelchair<br>
        <input type="checkbox" name="question6[]" value="Public Transit"> Public Transit<br>
        <input type="checkbox" name="question6[]" value="Rideshare (Moveit,Maxim,Angkas,etc.)"> Rideshare (Moveit,Maxim,Angkas,etc.)<br>
        <input type="checkbox" name="question6[]" value="Motorcycle"> Motorcycle<br>

        <!-- Question 7 -->
        <label for="question7">7. Which of these do you regularly spend on?</label>
        <input type="checkbox" name="question7[]" value="Bills"> Bills<br>
        <input type="checkbox" name="question7[]" value="Groceries"> Groceries<br>
        <input type="checkbox" name="question7[]" value="Internet"> Internet<br>
        <input type="checkbox" name="question7[]" value="Personal Care"> Personal Care<br>
        <input type="checkbox" name="question7[]" value="Clothing"> Clothing<br>

        <!-- Question 8 -->
        <label for="question8">8. Which of these subscriptions do you have?</label>
        <input type="checkbox" name="question8[]" value="Music"> Music<br>
        <input type="checkbox" name="question8[]" value="TV Streaming"> TV Streaming <br>
        <input type="checkbox" name="question8[]" value="Fitness"> Fitness<br>
        <input type="checkbox" name="question8[]" value="Meal Delivery"> Meal Delivery<br>
        <input type="checkbox" name="question8[]" value="Online Course"> Online Course<br>
        <input type="checkbox" name="question8[]" value="Academic Subscription"> Academic Subscription<br>
        
        <!-- Question 9 -->
        <label for="question9">9. What are some expenses that always sneak up on you?</label>
        <input type="checkbox" name="question9[]" value="Annual credit card fees"> Annual credit card fees<br>
        <input type="checkbox" name="question9[]" value="Medical expenses"> Medical expenses<br>
        <input type="checkbox" name="question9[]" value="Taxes or other fees"> Taxes or other fees<br>
        <input type="checkbox" name="question9[]" value="Auto registration"> Auto registration<br>

        <!-- Question 10 -->
        <label for="question10">10. Are you saving, or planning for any of these?</label>
        <input type="checkbox" name="question10[]" value="Emergency fund"> Emergency fund<br>
        <input type="checkbox" name="question10[]" value="Investments"> Investments<br>
        <input type="checkbox" name="question10[]" value="New Home or Car"> New Home or Car<br>
        <input type="checkbox" name="question10[]" value="Vacation"> Vacation<br>
        <input type="checkbox" name="question10[]" value="Wedding"> Wedding<br>
        <input type="checkbox" name="question10[]" value="Baby"> Baby<br>

        <!-- Question 11 -->
        <label for="question11">11. What else do you want to include - without stress or guilt?</label>
        <input type="checkbox" name="question11[]" value="Dining out"> Dining out<br>
        <input type="checkbox" name="question11[]" value="Entertainment"> Entertainment<br>
        <input type="checkbox" name="question11[]" value="Hobbies"> Hobbies<br>
        <input type="checkbox" name="question11[]" value="Gift"> Gift<br>
        <input type="checkbox" name="question11[]" value="Celebrations"> Celebrations<br>
        <input type="checkbox" name="question11[]" value="Charity"> Charity<br>

        <button type="submit">Submit Survey</button>
    </form>
</div>

</body>
</html>
