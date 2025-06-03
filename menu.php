<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menú - La Taza Poblana</title>
    <link rel="stylesheet" href="css/menu.css">
    <style>
        /* Importa las fuentes de Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Caveat:wght@400..700&family=Lobster&family=Righteous&family=Rubik+Dirt&display=swap');
    </style>
</head>
<body>
    <!-- Encabezado del menú con título y descripción -->
    <header class="header-menu">
        <div class="container">
            <h1>Nuestro Menú</h1>
            <p>El café perfecto para cada momento.</p>
        </div>
    </header>

    <!-- Contenedor principal del menú -->
    <main>
        <div class="container menu-container">
            <!-- Sección de Cafés Calientes -->
            <section class="menu-category">
                <h2>Cafés Calientes ☕</h2>
                <div class="menu-items">
                    <!-- Ítem: Café de Olla -->
                    <div class="menu-item">
                        <img src="images/cafe-olla.jpg" alt="Café de Olla">
                        <h3>Café de Olla</h3>
                        <p>Preparado con piloncillo y canela, el sabor tradicional de México.</p>
                        <span class="price">$40 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                    <!-- Ítem: Espresso -->
                    <div class="menu-item">
                        <img src="images/espresso.jpg" alt="Espresso">
                        <h3>Espresso</h3>
                        <p>Fuerte y concentrado, para los amantes del café puro.</p>
                        <span class="price">$35 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                    <!-- Ítem: Capuchino Artesanal -->
                    <div class="menu-item">
                        <img src="images/capuchino.jpg" alt="Capuchino Artesanal">
                        <h3>Capuchino Artesanal</h3>
                        <p>Equilibrio perfecto entre café, leche y espuma.</p>
                        <span class="price">$45 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                </div>
            </section>

            <!-- Sección de Bebidas Frías -->
            <section class="menu-category">
                <h2>Bebidas Frías ❄️</h2>
                <div class="menu-items">
                    <!-- Ítem: Frappé de Café -->
                    <div class="menu-item">
                        <img src="images/frappe.jpg" alt="Frappé de Café">
                        <h3>Frappé de Café</h3>
                        <p>Refrescante mezcla de café con hielo y crema batida.</p>
                        <span class="price">$50 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                    <!-- Ítem: Té Chai Latte -->
                    <div class="menu-item">
                        <img src="images/te-chai.jpg" alt="Té Chai Latte">
                        <h3>Té Chai Latte</h3>
                        <p>Infusión especiada con leche y un toque de miel.</p>
                        <span class="price">$48 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                    <!-- Ítem: Cold Brew -->
                    <div class="menu-item">
                        <img src="images/cold-brew.jpg" alt="Cold Brew">
                        <h3>Cold Brew</h3>
                        <p>Café infusionado en frío para una suavidad excepcional.</p>
                        <span class="price">$55 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                </div>
            </section>

            <!-- Sección de Postres -->
            <section class="menu-category">
                <h2>Postres 🍰</h2>
                <div class="menu-items">
                    <!-- Ítem: Panqué de Nuez -->
                    <div class="menu-item">
                        <img src="images/panque.jpg" alt="Panqué de Nuez">
                        <h3>Panqué de Nuez</h3>
                        <p>Esponjoso y con el toque crujiente de nueces caramelizadas.</p>
                        <span class="price">$35 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                    <!-- Ítem: Brownie de Chocolate -->
                    <div class="menu-item">
                        <img src="images/brownie.jpg" alt="Brownie de Chocolate">
                        <h3>Brownie de Chocolate</h3>
                        <p>Denso y delicioso con trozos de chocolate semi amargo.</p>
                        <span class="price">$40 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                    <!-- Ítem: Pay de Fresa -->
                    <div class="menu-item">
                        <img src="images/pay-fresa.jpg" alt="Pay de Fresa">
                        <h3>Pay de Fresa</h3>
                        <p>Cremoso y refrescante, el toque perfecto de dulzura.</p>
                        <span class="price">$45 MXN</span>
                        <button class="buy-btn" onclick="alert('Artículo agregado')">Comprar Ahora</button>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Pie de página del menú -->
    <footer>
        <div class="container">
            <p>&copy; 2025 La Taza Poblana - Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
