<?php

include('config/db_connect.php');
$title = $email = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');



if (isset($_POST['submit'])) {


    if (empty($_POST['email'])) {
        $errors['email'] = 'Email Required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'please enter valid email address';
        }
    }

    if (empty($_POST['title'])) {
        $errors['title'] = 'Pizza Style <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letter and spaces please';
        }
    }

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $ingredients)) {
            // if (!preg_match('/^[a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'space between';
        }
    }

    if (array_filter($errors)) {
        //echo 'errors in the form';
    } else {
        header('Location: index.php');

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        //create sql
        $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES( '$title', '$email', '$ingredients')";

        // save to db and check
        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
        } else {
            echo 'query error:' . mysqli_error($conn);
        }
    }
}

?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>

<section class="container darkgrey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label>Ingredients (space between):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand">
        </div>
    </form>
</section>

<?php include('templates/footer.php'); ?>




</html>