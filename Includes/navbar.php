<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="./Resources/css/style.css">
</head>
<body>
    <style>
       
    </style>

    <div class="menu-icon" onclick="toggleNavbar()">
        ☰
    </div>

    <nav class="navbar" id="navbar">
        <ul class="nav-links">
            <li>
                <img class=logo123 src="Resources\css\logo4.png" alt="logo">
            </li>

            <li>
                <div class="dropdown nav">
                        <a href="home.php"><i class="fas fa-home"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                                </svg>
                        </a>
                </div>
                
            </li>

            <li>
                <a href="About.php"><i class="fas fa-info-circle"></i> About</a>
            </li>

            <li>
                <a href="Contacts.php"><i class="fas fa-envelope"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                    </svg>
                </a>
            </li>

            <!-- <li>
                <a href="Blog.php"><i class="fas fa-envelope"></i> Blog</a>
            </li> -->

            <li>
                <a href="Service.php"><i class="fas fa-envelope"></i> Our Services</a>
            </li>
            
            <li>                                      
                <!-- <a href="search.php"><i class="fas fa-envelope"></i><i class="bi bi-search"></i>
                <i class="bi bi-search"></i> -->
                <a href="Search.php">
                    <i class="fas fa-envelope"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                </a>
            </li>
            
        </ul>
    </nav>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        function toggleNavbar() {
            const navbar = document.getElementById('navbar');
            navbar.classList.toggle('active');
        }
    </script>

   