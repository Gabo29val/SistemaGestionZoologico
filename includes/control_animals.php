<?php
include('dbconnection.php');

$querySelect = "SELECT * FROM  tblanimal";
if (isset($_POST['consulta'])) {
    $filter = $_POST['consulta'];
    $querySelect = "SELECT * FROM  tblanimal where AnimalName like '%" . $filter . "%'";
}
$resultado = mysqli_query($con, $querySelect);
if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        // echo $row['AnimalName'] . '' . $row['Breed'];
?>
        <div class="cont-animal tarjeta-animales">
            <div class="cont-animal__img cont-img">
                <a href="animal-detail.php?anid=<?php echo $row['ID']; ?>"> <img src="admin/images/<?php echo $row['AnimalImage']; ?>" />
                </a>
            </div>

            <div class="cont-animal__info cont-text">
                <h4><a href="animal-detail.php?anid=<?php echo $row['ID']; ?>"><?php echo $row['AnimalName']; ?>(<?php echo $row['Breed']; ?>)</a></h4>

            </div>
            <br>
        </div><?php
            }
        } else {
                ?>
    <div class="alert-error">
        <p>No hay resultados</p>
    </div><?php
        }
