<!-- To get  value of a checked checkbox -------------------------------------------------->



<form action="#" method="post">
    <input type="checkbox" name="gender" value="Male">Male</input>
    <input type="checkbox" name="gender" value="Female">Female</input>
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if (isset($_POST['gender'])) {
    echo $_POST['gender']; // Displays value of checked checkbox.
}
?>



<!-- To get value of multiple checked checkboxes -------------------------------------------------->
<form action="#" method="post">
    <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br />
    <input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br />
    <input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if (isset($_POST['submit'])) { //to run PHP script on submit
    if (!empty($_POST['check_list'])) {
        // Loop to store and display values of individual checked checkbox.
        foreach ($_POST['check_list'] as $selected) {
            echo $selected . "</br>";
        }
    }
}
?>



<!-- Counting number of checked checkboxes. -------------------------------------------------->

<!DOCTYPE html>
<html>

<head>
    <title>PHP: Get Values of Multiple Checked Checkboxes</title>
    <link rel="stylesheet" href="css/php_checkbox.css" />
</head>

<body>
    <div class="container">
        <div class="main">
            <h2>PHP: Get Values of Multiple Checked Checkboxes</h2>
            <form action="php_checkbox.php" method="post">
                <label class="heading">Select Your Technical Exposure:</label>
                <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label>
                <input type="checkbox" name="check_list[]" value="Java"><label>Java</label>
                <input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label>
                <input type="checkbox" name="check_list[]" value="HTML/CSS"><label>HTML/CSS</label>
                <input type="checkbox" name="check_list[]" value="UNIX/LINUX"><label>UNIX/LINUX</label>
                <input type="submit" name="submit" Value="Submit" />
                <!----- Including PHP Script ----->
                <?php include 'checkbox_value.php'; ?>
            </form>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['check_list'])) {
        // Counting number of checked checkboxes.
        $checked_count = count($_POST['check_list']);
        echo "You have selected following " . $checked_count . " option(s): <br/>";
        // Loop to store and display values of individual checked checkbox.
        foreach ($_POST['check_list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
        echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
    } else {
        echo "<b>Please Select At least One Option.</b>";
    }
}
?>