<?php
// projects.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>MushhDev | Portafolio</title>
<style>
  body {
    margin: 0;
    background: #0e1015;
    color: #e0e0e0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }
  header {
    background: #1a1d23;
    padding: 1rem 2rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.8);
    position: sticky;
    top: 0;
    z-index: 1000;
    user-select: none;
  }
  header h1 {
    margin: 0;
    color: #00ffe0;
    font-size: 2rem;
  }
  nav ul {
    margin: 0.5rem 0 0;
    padding: 0;
    list-style: none;
    display: flex;
    gap: 1.5rem;
  }
  nav ul li a {
    color: #a0a0a0;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
  }
  nav ul li a:hover,
  nav ul li a:focus {
    color: #00ffe0;
    outline: none;
  }
  main {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 3rem 1rem 4rem;
  }
  .container {
    background: #1a1d23;
    max-width: 900px;
    width: 100%;
    border-radius: 16px;
    box-shadow: 0 0 24px rgba(0, 255, 255, 0.12);
    padding: 2.5rem 3rem;
  }
  h2 {
    font-size: 2.8rem;
    color: #00ffe0;
    text-align: center;
    margin-bottom: 2.5rem;
    user-select: none;
  }
  article.proyecto {
    background: #15181e;
    padding: 2rem 2.2rem;
    border-radius: 14px;
    box-shadow: 0 8px 20px rgba(0, 229, 255, 0.18);
    margin-bottom: 2.5rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  article.proyecto:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 38px rgba(0, 229, 255, 0.32);
  }
  article.proyecto h3 {
    color: #00ffe0;
    font-size: 2rem;
    margin-bottom: 0.7rem;
  }
  article.proyecto p {
    font-size: 1.15rem;
    line-height: 1.7;
    margin: 0.5rem 0;
  }
  article.proyecto a {
    color: #00e4ff;
    text-decoration: none;
    font-weight: 600;
  }
  article.proyecto a:hover,
  article.proyecto a:focus {
    text-decoration: underline;
    outline: none;
  }
  footer {
    background: #1a1d23;
    color: #7a7a7a;
    text-align: center;
    padding: 1.3rem 2rem;
    font-size: 0.9rem;
    user-select: none;
    box-shadow: 0 -4px 12px rgba(0,0,0,0.8);
  }
  @media (max-width: 600px) {
    .container {
      padding: 2rem 1.5rem;
      border-radius: 12px;
    }
    article.proyecto {
      padding: 1.4rem 1.6rem;
    }
    h2 {
      font-size: 2rem;
      margin-bottom: 1.8rem;
    }
    article.proyecto h3 {
      font-size: 1.6rem;
    }
    article.proyecto p {
      font-size: 1rem;
    }
    nav ul {
      gap: 1rem;
    }
    header h1 {
      font-size: 1.6rem;
    }
  }
</style>
</head>
<body>
  <header>
    <h1>MushhDev</h1>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="projects.php" aria-current="page">Proyectos</a></li>
        <li><a href="contact.php">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="container" role="main">
      <h2>Mis Proyectos</h2>

      <article class="proyecto" tabindex="0">
        <h3>AdNull 🛡️</h3>
        <p><strong>Tipo:</strong> Extensión para Google Chrome</p>
        <p><strong>Descripción:</strong> Bloqueador de anuncios ligero, eficiente y respetuoso con la privacidad. Funciona en todos los sitios web usando Manifest V3 y sin recolectar datos.</p>
        <p><strong>Repositorio:</strong> <a href="https://github.com/MushhDev/AdNull" target="_blank" rel="noopener noreferrer">GitHub - MushhDev/AdNull</a></p>
      </article>
    </div>
  </main>

  <footer>
    &copy; <?php echo date("Y"); ?> MushhDev. Todos los derechos reservados.
  </footer>
</body>
</html>
