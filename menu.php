 <ul>

            <?php if ($_SESSION['role']==1) { ?>

            <li><a href="home.php"><i class="home"></i>Home</a></li>
            <li><a href="staff.php"><i class="fas fa-user"></i>Manage Staff</a></li>
            <li><a href="insert_service.php"><i class="fas fa-project-diagram"></i>Manage Service</a></li>
            <li><a href="view_staff.php"><i class="fas fa-address-card"></i>View Staff</a></li>
            <li><a href="view_customer.php"><i class="fas fa-address-card"></i>View Customer</a></li>
            <li><a href="view_service.php"><i class="fas fa-blog"></i>View Service</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>View Booking</a></li>
            <li><a href="index.php"><i class="fas fa-map-pin"></i>Log out</a></li>

        <?php } else if ($_SESSION['role']==2) { ?>

            <li><a href="home.php"><i class="home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Manage Service</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>View Service</a></li>
            <li><a href="view_customer.php"><i class="fas fa-address-card"></i>View Customer</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>View Booking</a></li>
            <li><a href="index.php"><i class="fas fa-map-pin"></i>Log out</a></li>

            <?php } else { ?>

            <li><a href="home.php"><i class="home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>View Service</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>View Booking</a></li>
            <li><a href="index.php"><i class="fas fa-map-pin"></i>Log out</a></li>

            <?php } ?>

        </ul> 