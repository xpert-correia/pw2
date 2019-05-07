<?php
// Opens a connection to the database
// Since it is a php file it won't open in a browser 
// It should be saved outside of the main web documents folder
// and imported when needed

/*
Command that gives the database user the least amount of power
as is needed.
GRANT INSERT, SELECT, DELETE, UPDATE ON test3.* 
TO 'studentweb'@'localhost' 
IDENTIFIED BY 'turtledove';
SELECT : Select rows in tables
INSERT : Insert new rows into tables
UPDATE : Change data in rows
DELETE : Delete existing rows (Remove privilege if not required)
*/

// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'studentweb');
DEFINE ('DB_PASSWORD', 'turtledove');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test3');

// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>

getstudentinfo.php

<?php
// Get a connection for the database
require_once('../mysqli_connect.php');

// Create a query for the database
$query = "SELECT first_name, last_name, email, street, city, state, zip,
phone, birth_date FROM students";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Street</b></td>
<td align="left"><b>City</b></td>
<td align="left"><b>State</b></td>
<td align="left"><b>Zip</b></td>
<td align="left"><b>Phone</b></td>
<td align="left"><b>Birth Day</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['first_name'] . '</td><td align="left">' . 
$row['last_name'] . '</td><td align="left">' .
$row['email'] . '</td><td align="left">' . 
$row['street'] . '</td><td align="left">' .
$row['city'] . '</td><td align="left">' . 
$row['state'] . '</td><td align="left">' .
$row['zip'] . '</td><td align="left">' . 
$row['phone'] . '</td><td align="left">' .
$row['birth_date'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>

addstudent.php

<html>
<head>
<title>Add Student</title>
</head>
<body>
<form action="http://localhost/studentadded.php" method="post">

<b>Add a New Student</b>

<p>First Name:
<input type="text" name="first_name" size="30" value="" />
</p>

<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
</p>

<p>Email:
<input type="text" name="email" size="30" value="" />
</p>

<p>Street:
<input type="text" name="street" size="30" value="" />
</p>

<p>City:
<input type="text" name="city" size="30" value="" />
</p>

<p>State (2 Characters):
<input type="text" name="state" size="30" maxlength="2" value="" />
</p>

<p>Zip Code:
<input type="text" name="zip" size="30" maxlength="5" value="" />
</p>

<p>Phone Number:
<input type="text" name="phone" size="30" value="" />
</p>

<p>Birth Date (YYYY-MM-DD):
<input type="text" name="birth_date" size="30" value="" />
</p>

<p>Sex (M or F):
<input type="text" name="sex" size="30" maxlength="1" value="" />
</p>

<p>Lunch Cost:
<input type="text" name="lunch" size="30" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>

</form>
</body>
</html>

studentadded.php

<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['first_name'])){

        // Adds name to array
        $data_missing[] = 'First Name';

    } else {

        // Trim white space from the name and store the name
        $f_name = trim($_POST['first_name']);

    }

    if(empty($_POST['last_name'])){

        // Adds name to array
        $data_missing[] = 'Last Name';

    } else{

        // Trim white space from the name and store the name
        $l_name = trim($_POST['last_name']);

    }

    if(empty($_POST['email'])){

        // Adds name to array
        $data_missing[] = 'Email';

    } else {

        // Trim white space from the name and store the name
        $email = trim($_POST['email']);

    }

    if(empty($_POST['street'])){

        // Adds name to array
        $data_missing[] = 'Street';

    } else {

        // Trim white space from the name and store the name
        $street = trim($_POST['street']);

    }

    if(empty($_POST['city'])){

        // Adds name to array
        $data_missing[] = 'City';

    } else {

        // Trim white space from the name and store the name
        $city = trim($_POST['city']);

    }

    if(empty($_POST['state'])){

        // Adds name to array
        $data_missing[] = 'State';

    } else {

        // Trim white space from the name and store the name
        $state = trim($_POST['state']);

    }

    if(empty($_POST['zip'])){

        // Adds name to array
        $data_missing[] = 'Zip Code';

    } else {

        // Trim white space from the name and store the name
        $zip = trim($_POST['zip']);

    }

    if(empty($_POST['phone'])){

        // Adds name to array
        $data_missing[] = 'Phone Number';

    } else {

        // Trim white space from the name and store the name
        $phone = trim($_POST['phone']);

    }

    if(empty($_POST['birth_date'])){

        // Adds name to array
        $data_missing[] = 'Birth Date';

    } else {

        // Trim white space from the name and store the name
        $b_date = trim($_POST['birth_date']);

    }

    if(empty($_POST['sex'])){

        // Adds name to array
        $data_missing[] = 'Sex';

    } else {

        // Trim white space from the name and store the name
        $sex = trim($_POST['sex']);

    }

    if(empty($_POST['lunch'])){

        // Adds name to array
        $data_missing[] = 'Lunch Cost';

    } else {

        // Trim white space from the name and store the name
        $lunch = trim($_POST['lunch']);

    }
    
    if(empty($data_missing)){
        
        require_once('../mysqli_connect.php');
        
        $query = "INSERT INTO students (first_name, last_name, email,
        street, city, state, zip, phone, birth_date, sex, date_entered,
        lunch_cost, student_id) VALUES (?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, NOW(), ?, NULL)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        i Integers
        d Doubles
        b Blobs
        s Everything Else
        
        mysqli_stmt_bind_param($stmt, "ssssssisssd", $f_name,
                               $l_name, $email, $street, $city,
                               $state, $zip, $phone, $b_date,
                               $sex, $lunch);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Student Entered';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>

<form action="http://localhost/studentadded.php" method="post">
    
    <b>Add a New Student</b>
    
    <p>First Name:
<input type="text" name="first_name" size="30" value="" />
</p>

<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
</p>

<p>Email:
<input type="text" name="email" size="30" value="" />
</p>

<p>Street:
<input type="text" name="street" size="30" value="" />
</p>

<p>City:
<input type="text" name="city" size="30" value="" />
</p>

<p>State (2 Characters):
<input type="text" name="state" size="30" maxlength="2" value="" />
</p>

<p>Zip Code:
<input type="text" name="zip" size="30" maxlength="5" value="" />
</p>

<p>Phone Number:
<input type="text" name="phone" size="30" value="" />
</p>

<p>Birth Date (YYYY-MM-DD):
<input type="text" name="birth_date" size="30" value="" />
</p>

<p>Sex (M or F):
<input type="text" name="sex" size="30" maxlength="1" value="" />
</p>

<p>Lunch Cost:
<input type="text" name="lunch" size="30" value="" />
</p>

<p>
    <input type="submit" name="submit" value="Send" />
</p>
    
</form>
</body>
</html>

