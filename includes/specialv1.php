<div class="section-special">
    <div class="section-container">
        <div class="details">
            <h3>Detalles</h3>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="animals.php">Animales</a></li>
                <li><a href="admin/index.php">Admin</a></li>
            </ul>
        </div>
        <div class="contact">
            <h3>Contáctanos</h3>
            <?php
            $query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
            while ($row = mysqli_fetch_array($query)) {


            ?>
                <address>
                    <p>Correo : <?php echo $row['Email']; ?></p>
                    <p>Celular : <?php echo $row['MobileNumber']; ?></p>
                    <p><?php echo $row['PageDescription']; ?></p>
                </address><?php } ?>
        </div>
        <div class="social">
            <h3>Sociales</h3>
            <ul>
                <li><a href="https://www.facebook.com/zoohuachipa/?ref=bookmarks">facebook</a></li>
                <li><a href="#">twitter</a></li>
                <li><a href="#">google+</a></li>
                <li><a href="#">vimeo</a></li>
            </ul>
        </div>
    </div>
</div>