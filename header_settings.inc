<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<header class="header_class">
   <!-- <a href="index.php"><img src="styles/images/OS_icon.png" alt="" 
            class="logo"></a> -->
    <div class="top_header">
    <h1> Oliver's Portfolio</h1>
    <div class="icon_buttons">
    <button id="theme-switch">
        <!--DARK MODE: Moon Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0071ff"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z"/></svg>
        <!--LIGHT MODE: Sun Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0071ff"><path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z"/></svg>
        </button> 
        </div>
        <div class="right-spacer"></div>
        </div>
        <hr id="hr">
    <?php $current_page = basename($_SERVER['PHP_SELF']); ?> 
    <div class="navigation">   
      <nav class="nav">
        <ul class="nav_links">
          <li><a href="index.php" <?php if ($current_page == 'index.php') echo 'class="active"'; ?>>Home</a></li>
          <li><a href="aboutme.php" <?php if ($current_page == 'aboutme.php') echo 'class="active"'; ?>>About Me</a></li>
        </ul>
      </nav>
    </div>
    <div class="header-tray">
      <br><br><br><br>
      <a id="cta" href="mailto:olliechina1516@gmail.com?subject=Business%20and%20Work%20Inquiry%20-%20Company%20Name&body=Hello%20Oliver%20Scott,%0D%0A%0D%0AI%20am%20emailing%20you%20regarding%20a%20possible%20business%20and%20work%20inquiry.%0D%0AHere%20are%20the%20details:%0D%0A%0D%0AKind%20regards,%0D%0A-%20FULL%20NAME,%20Company%20Name"> Email Us </a>
    </div>
</header>