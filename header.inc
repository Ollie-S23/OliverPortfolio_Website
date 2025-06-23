<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<header class="header_class">
   <!-- <a href="index.php"><img src="styles/images/OS_icon.png" alt="" 
            class="logo"></a> -->
    <nav class="nav">
        <ul class="nav_links">
            <li><a href="index.php" <?php if ($current_page == 'index.php') echo 'class="active"'; ?>>Home</a></li>
            <li><a href="about.php" <?php if ($current_page == 'about.php') echo 'class="active"'; ?>>About Me</a></li>
        </ul>
    </nav>
    <a id="cta" href="mailto:olliechina1516@gmail.com?subject=Business%20and%20Work%20Inquiry%20-%20Company%20Name&body=Hello%20Oliver%20Scott%2C%0D%0A%0D%0AI%20am%20emailing%20you%20regarding%20a%20possible%20business%20and%20work%20inquiry.%0D%0AHere%20are%20the%20details%3A%0D%0A%0D%0A%0D%0AKind%20regards%2C%0D%0A-%20FULL%20NAME%2C%20Company%20Name">
  Email Us
</a>

</header>