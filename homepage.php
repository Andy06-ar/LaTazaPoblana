<?php
// Inicia la sesión para poder acceder a las variables de sesión
session_start();

// Si el usuario no ha iniciado sesión, muestra un mensaje y redirige a la página de login
if (!isset($_SESSION['username'])) {
    echo "<script>
            alert('Debes iniciar sesión para acceder a esta página');
            window.location.href = 'login.php';
          </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Homepage</title>
    <link rel="stylesheet" href="css/homepage.css" />
    <!-- Importación de fuentes desde Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Caveat:wght@400..700&family=Lobster&family=Righteous&family=Rubik+Dirt&display=swap');
    </style>
</head>
<body>
    <!-- HEADER: Muestra el mensaje de bienvenida -->
    <header>
        <div class="container">
            <div class="header-content fade-in">
                <!-- htmlspecialchars para evitar inyección de código -->
                <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            </div>
        </div>
    </header>

    <!-- NAVIGATION: Barra de navegación principal -->
    <nav>
        <div class="container">
            <ul class="nav-list fade-in-up">
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="menu.php">Menú</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT: Contenedor principal de la página -->
    <main>
        <div class="container">
            <!-- Sección: Introducción -->
            <section id="intro" class="section-content fade-in-up">
                <div class="section-header">
                    <h2>¿Quiénes somos?</h2>
                </div>
                <div class="section-body">
                    <!-- Imagen representativa de la introducción -->
                    <div class="img-intro">
                        <img src="images/logo.png" alt="Imagen introductoria">
                    </div>
                    <!-- Texto descriptivo de la cafetería -->
                    <div class="text-section">
                        <p>
                            Bienvenido a La Taza Poblana, donde cada sorbo te invita a un viaje sensorial en el corazón de Puebla. 
                            En nuestro espacio, el café se transforma en arte y tradición, fusionando la calidez de nuestras raíces con un ambiente moderno y acogedor. 
                            Aquí celebramos momentos, emociones y la pasión por el buen café, haciendo de cada taza una experiencia inolvidable. Encuentranos <a href="https://maps.app.goo.gl/nQHH2LppprHFL6o39">aquí,</a> en Juan Pablo II to Av 39 Poniente 3515, Centro Comercial Galería las Animas, 72180 Heroica Puebla de Zaragoza, Pue.
                        </p>            
                    </div>
                </div>
            </section>

            <!-- Sección: Contenido -->
            <section id="contenido" class="section-content fade-in-up delay-1">
                <div class="section-header">
                    <h2>El Alma de Nuestra Taza</h2>
                </div>
                <div class="section-body">
                    <!-- Imagen que ilustra el contenido -->
                    <div class="img-contenido">
                        <img src="images/content.png" alt="Imagen de contenido">
                    </div>
                    <!-- Descripción detallada sobre la experiencia y el producto -->
                    <div class="text-section">
                        <p>
                            En La Taza Poblana creemos que cada taza de café cuenta una historia. 
                            Trabajamos con granos seleccionados y técnicas artesanales que resaltan la intensidad, el aroma y el sabor en cada preparación. 
                            Nuestro local es un rincón donde la creatividad y la tradición se unen: un ambiente ideal para reuniones, encuentros espontáneos o simplemente para disfrutar de un momento de paz en medio del bullicio de la ciudad. 
                            Ya sea que busques inspiración en una charla amena o un instante de relajación, aquí cada detalle —desde la decoración hasta el sabor de nuestro café— está cuidado para ofrecerte una experiencia única y envolvente.
                        </p>            
                    </div>
                </div>
            </section>

            <!-- Sección: Recursos (Galería) -->
            <section id="recursos" class="section-content fade-in-up delay-2">
                <div class="section-header">
                    <h2>Galería de Sabores Icónicos</h2>
                </div>
                <div class="resource-container">
                    <!-- Elemento de recurso con imagen y descripción -->
                    <div class="resource-item">
                        <img src="images/c3.png" alt="cafe 1" />
                        <p>
                            Sumérgete en la tradición con nuestro Café de Olla, una receta ancestral que combina el aroma de la canela y el dulzor del piloncillo. Transportándote a esos momentos cálidos y llenos de historia
                        </p>
                    </div>
                    <div class="resource-item">
                        <img src="images/c2.png" alt="cafe 2" />
                        <p>
                            Experimenta la fuerza y la intensidad en cada gota. El Espresso Poblano es sinónimo de carácter y energía concentrada. 
                            Acompañado de visuales que capturan su rica textura y el contraste perfecto entre luz y sombra, este café es el aliado ideal para despertar los sentidos y animar cada instante.
                        </p>
                    </div>
                    <div class="resource-item">
                        <img src="images/c1.png" alt="cafe 3" />
                        <p>
                            Descubre el equilibrio ideal entre suavidad y potencia en nuestro Capuchino Artesanal.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Sección: Extras -->
            <section id="extras" class="section-content fade-in-up delay-3">
                <div class="section-header">
                    <h2>El Rincón de las Novedades</h2>
                </div>
                <div class="section-body">
                    <!-- Texto informativo sobre novedades y actualizaciones -->
                    <p>
                        En este rincón de La Taza Poblana siempre encontrarás algo nuevo. Nuestro espacio de Novedades está en constante crecimiento y pronto incluirá noticias, actualizaciones, widgets y contenido interactivo que te mantendrán al tanto de lo último en el mundo del café y la cultura local. 
                        Permanece atento, pues cada actualización es una invitación a explorar, sorprenderte y redescubrir el placer de lo auténtico. 
                    </p>
                </div>
            </section>
        </div>
    </main>

    <!-- FOOTER: Información legal y derechos de autor -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>
