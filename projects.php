<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MushhDev | Portafolio</title>
  <style>
    body {
      background: #0e1015;
      color: #e0e0e0;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
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
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      gap: 1.5rem;
      margin-top: 0.5rem;
    }
    nav ul li a {
      color: #a0a0a0;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    nav ul li a:hover {
      color: #00ffe0;
    }

    main {
      max-width: 900px;
      margin: 3rem auto 4rem;
      padding: 0 1.5rem;
    }

    section {
      background: #1a1d23;
      padding: 2rem;
      border-radius: 16px;
      box-shadow: 0 0 24px rgba(0, 255, 255, 0.1);
    }

    h2 {
      font-size: 2.5rem;
      color: #00ffe0;
      text-align: center;
      margin-bottom: 2rem;
      user-select: none;
    }

    article.proyecto {
      background: #15181e;
      padding: 1.8rem;
      border-radius: 14px;
      box-shadow: 0 8px 20px rgba(0, 229, 255, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin-bottom: 2em;
      user-select: none;
    }

    article.proyecto:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 30px rgba(0, 229, 255, 0.25);
    }

    article.proyecto h3 {
      color: #00ffe0;
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
    }

    article.proyecto p {
      font-size: 1.1rem;
      line-height: 1.6;
      margin: 0.4rem 0;
    }

    article.proyecto a {
      color: #00e4ff;
      text-decoration: none;
    }

    article.proyecto a:hover {
      text-decoration: underline;
    }

    footer {
      background: #1a1d23;
      color: #7a7a7a;
      text-align: center;
      padding: 1rem 2rem;
      font-size: 0.9rem;
      user-select: none;
      box-shadow: 0 -4px 12px rgba(0,0,0,0.8);
    }
  </style>
</head>
<body>
  <header>
    <h1>MushhDev</h1>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="projects.php">Proyectos</a></li>
        <li><a href="contact.php">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Mis Proyectos</h2>

      <article class="proyecto">
        <h3>AdNull 🛡️</h3>
        <p><strong>Tipo:</strong> Extensión para Google Chrome</p>
        <p><strong>Descripción:</strong> Bloqueador de anuncios ligero, eficiente y respetuoso con la privacidad. Funciona en todos los sitios web usando Manifest V3 y sin recolectar datos.</p>
        <p><strong>Repo:</strong> <a href="https://github.com/MushhDev/AdNull" target="_blank" rel="noopener noreferrer">GitHub - MushhDev/AdNull</a></p>
      </article>

    </section>
  </main>

  <footer>
    &copy; <?php echo date("Y"); ?> MushhDev. Todos los derechos reservados.
  </footer>
</body>
</html>
