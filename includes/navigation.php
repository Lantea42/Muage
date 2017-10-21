

<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Muage</a>
    </div>
    <ul class="nav navbar-nav">



      <li class= <?php if($currentPage == 'home'){echo 'active';} ?> >
        <a class="nav-link" href="home.php">Home</a>
      </li>




      <li class= <?php if($currentPage == 'behandelingen'){echo 'active';} ?> >
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Behandelingen<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="massages.php"/>Massages</a></li>
            <li><a href="gezichtsverzorgingen.php">Gezichtsverzorgingen</a></li>
            <!--<li><a href="arrangementen.php">Arrangementen</a></li>-->
          </ul>
      </li>




      <li class= <?php if($currentPage == 'makeup'){echo 'active';} ?> >
        <a class="nav-link" href="makeup.php">Make-up</a>
      </li>

      <li class= <?php if($currentPage == 'prijslijst'){echo 'active';} ?> >          
        <a class="nav-link" href="prijslijst.php">Prijslijst</a>
      </li>

      <li class= <?php if($currentPage == 'promoties'){echo 'active';} ?> >          
        <a class="nav-link" href="promoties.php">Promoties</a>
      </li>

       <li class= <?php if($currentPage == 'contact'){echo 'active';} ?> >
        <a class="nav-link" href="contact.php">Contact</a>
      </li>


    </ul>
  </nav>
 </div>
