<?php

include('config/db_connect.php');
//query
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
$result = mysqli_query($conn, $sql);

//fetch result as array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

//explode(',', $pizzas[0]['ingredients']);




?>

<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>

<h4 class="center darkgrey-text">Pizzas!</h4>
<div class="container">
    <div class="row">

        <?php foreach ($pizzas as $pizza) : ?>

            <div class="col s6 md3">
                <div class="card z-depth-3">
                    <img src="img/pizza2.png" class="pizza" alt="pizza">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <ul>
                            <?php foreach (explode(' ', $pizza['ingredients']) as $ing) : ?>
                                <li><?php echo htmlspecialchars($ing); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>


                    <div class="card-action center">
                        <a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">More Info</a>

                    </div>
                </div>
            </div>


        <?php endforeach; ?>

    </div>

</div>




<?php include('templates/footer.php'); ?>

</html>