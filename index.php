<?php include 'header.php'; ?>

<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ipsFile = 'ips.txt';

if (!file_exists($ipsFile)) {
    file_put_contents($ipsFile, '');
}

$ips = file($ipsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (!in_array($ip, $ips)) {
    file_put_contents($ipsFile, $ip . PHP_EOL, FILE_APPEND);
}

$uniqueVisits = count($ips);
?>

<section>
  <h2>Bienvenido a mi portafolio</h2>
  <p>¡Hola! Soy <strong>MushhDev</strong>, un apasionado de la informática y los videojuegos, aunque mi verdadera pasión es la informática.</p>
  <p>Me encanta programar y crear proyectos interesantes y útiles. Este portafolio es donde comparto mis creaciones más chulas, que podrás explorar aquí mismo y en mi <a href="https://github.com/MushhDev" target="_blank" rel="noopener noreferrer">GitHub</a>.</p>
  <p>Estoy siempre aprendiendo, experimentando y mejorando para ofrecer lo mejor. ¡Gracias por pasarte por aquí!</p>
</section>

<section class="visitas">
  <h3>Visitas únicas</h3>
  <p>Este sitio ha sido visitado por <strong><?php echo $uniqueVisits; ?></strong> personas diferentes.</p>
</section>

<?php include 'footer.php'; ?>
