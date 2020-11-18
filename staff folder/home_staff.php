<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <style type="text/css">
            @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap");
/*===== VARIABLES CSS Y SASS =====*/
/*Varibles sass*/
/*Variables css*/
/*===== Colores =====*/
:root {
  --first-color: #12192C;
  --second-color: #F5A623;
  --white-color: #EDEDED;
}

/*===== Fuente y tipografia =====*/
:root {
  --body-font: 'Quicksand', sans-serif;
  --small-font-size: 0.875rem;
}

@media screen and (min-width: 768px) {
  :root {
    --small-font-size: 0.938rem;
  }
}

/*===== z index =====*/
:root {
  --z-back: -10;
  --z-normal: 1;
  --z-tooltip: 10;
  --z-fixed: 100;
  --z-modal: 1000;
}

/*===== BASE =====*/
*, ::before, ::after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  position: relative;
  margin: 0;
  padding: 1rem 0 0 5rem;
  font-family: var(--body-font);
  background-color: var(--white-color);
  -webkit-transition: .5s;
  transition: .5s;
}

h1 {
  margin: 0;
}

ul, li {
  margin: 0;
  padding: 0;
  list-style: none;
}

a {
  text-decoration: none;
}

/*=====  NAV =====*/
.l-navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 56px;
  height: 100vh;
  background-color: var(--first-color);
  padding: 1.25rem .5rem 2rem;
  -webkit-transition: .5s;
  transition: .5s;
  z-index: var(--z-fixed);
}

.nav {
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  overflow: hidden;
}

.nav__logo {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 2rem;
  padding: 0 .5rem;
}

.nav__logo-icon {
  margin-right: 1.2rem;
}

.nav__logo-text {
  color: var(--white-color);
  font-weight: 700;
}

.nav__toggle {
  position: absolute;
  top: 1.10rem;
  right: -.6rem;
  width: 18px;
  height: 18px;
  background-color: var(--second-color);
  border-radius: 50%;
  font-size: 1.25rem;
  color: var(--first-color);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  cursor: pointer;
  -webkit-transition: .5s;
  transition: .5s;
}

.nav__link {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: .5rem;
  margin-bottom: 1rem;
  border-radius: .5rem;
  color: var(--white-color);
  -webkit-transition: .3s;
  transition: .3s;
}

.nav__link:hover {
  background-color: var(--second-color);
  color: var(--first-color);
}

.nav__icon {
  font-size: 1.5rem;
  margin-right: 1rem;
}

.nav__text {
  font-weight: 700;
}

/*Show menu*/
.show {
  width: 168px;
}

/*Rotate toggle*/
.rotate {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
  -webkit-transition: .5s;
  transition: .5s;
}

/*Active links menu*/
.active {
  background-color: var(--second-color);
  color: var(--first-color);
}

/*Add padding body*/
.expander {
  padding: 1rem 0 0 12rem;
  -webkit-transition: .5s;
  transition: .5s;
}
        </style>
        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>TUITION MANAGEMENT</title>
    </head>
    <form action="" method="POST">
    <body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div id="page-wrapper">
                    <a href="" class="nav__logo">
                        <img src="assets/icons/logo.svg" alt="" class="nav__logo-icon">
                        <span class="nav__logo-text"></span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list">
                        <a href="coursemanage.php" class="nav__link">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">COURSE 
                            MANAGEMENT</span>

                        </a>
                        <a href="student_attendance.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__text">STUDENT 
                            ATTENDENCE</span>
                        </a>
                        <a href="announcement.php" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__text">ANNOUNCEMENT</span>
                        </a>
                        <a href="liveclass.php" class="nav__link">
                            <i class='bx bx-heart nav__icon'></i>
                            <span class="nav__text">LIVE<br>
                            CLASSES</span>
                        </a>
                        <a href="markuptation.php" class="nav__link">
                            <i class='bx bx-bookmark nav__icon'></i>
                              <span class="nav__text">STUDENT<br>
                               MARKS</span>
                        </a>
                        <a href="staff_fee.php" class="nav__link">
                            <i class='bx bx-message-rounded nav__icon' ></i>
                            <span class="nav__text">FEES<br> 
                            DETAILS</span>
                        </a>                 
                    </ul>
                </div>
                <a href="index.php" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Close</span>
                </a>
            </nav>
        </div>
        <div id="page-wrapper">
        </div>
       </div>
      </div>
    </body>
  </form>
    <!-- MAIN JS -->
    <script src="main.js"></script>
</html>   