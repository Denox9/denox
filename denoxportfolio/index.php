    <!-- index.php -->
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kierwin Ramos</title>
        <!-- Link to your CSS file -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    </head>

    <body>
        <nav style="display: flex; align-items: center;">
            <a href="index.php">
                <img src="css/img/logo.png" alt="Logo" style="height: 50px; margin-right:2rem; margin-left:2rem;">
            </a>
            <ul style="display: flex; list-style: none; margin: 0; padding: 0;">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=author">About Me</a></li>
            </ul>
        </nav>

        <?php
        switch ($page) {
            case 'home':
                include 'pages/home.php';
                break;
            case 'author':
                include 'pages/author.php';
                break;
            case 'contact':
                include 'pages/contact.php';
                break;
            default:
                include 'pages/home.php';
        }
        ?>

        <footer>
            <div class="footcontainer">
                <p>&copy; <?php echo date('Y'); ?> My Portfolio. All rights reserved.</p>
            </div>
        </footer>

        <script>
            // Navbar color change on scroll
            window.addEventListener('scroll', function() {
                const nav = document.querySelector('nav');
                if (window.scrollY > 50) {
                    nav.classList.add('scrolled');
                } else {
                    nav.classList.remove('scrolled');
                }
            });

            // Smooth scroll for the scroll-down arrow
            document.querySelector('.scroll-down').addEventListener('click', function() {
                const portfolioSection = document.querySelector('.portfolio-section');
                portfolioSection.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        </script>
    </body>

    </html>