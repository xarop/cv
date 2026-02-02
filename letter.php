<?php require_once 'targets.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adrià Julià Lundgren | Cover Letter | <?php echo $current['company']; ?></title>
  <link rel="icon" href="//xarop.com/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>

<body>
  <header id="page0">
    <div class="container">
      <h1 class="title">Adrià Julià Lundgren<span>Cover Letter</span></h1>
      <div class="row">
        <section class="intro">
          <h2><?php echo $current['intro_title']; ?></h2>
          <div class="no-print" style="margin-top: 20px;">
            <a href="javascript:window.print()" class="big">Print Letter</a> |
            <a href="https://translate.google.com/translate?sl=en&tl=es&u=https://xarop.com/cv/letter.php?for=<?php echo $target_key; ?>" class="big">Translate</a> |
            <a href="index.php?for=<?php echo $target_key; ?>" class="big">Back to CV</a>
          </div>
        </section>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row">
        <section class="intro">
          <p style="color: var(--text-muted); margin-bottom: 30px;"><?php echo $current['letter_date']; ?></p>

          <p><?php echo $current['letter_greeting']; ?></p>

          <?php foreach ($current['letter_body'] as $paragraph): ?>
            <p><?php echo $paragraph; ?></p>
          <?php endforeach; ?>

          <div style="margin-top: 40px;">
            <p>Best regards,</p>
            <p><strong>Adrià Julià Lundgren</strong><br>
              <?php echo $current['intro_title']; ?> | <a href="https://xarop.com">xarop.com</a></p>
          </div>
        </section>
      </div>
    </div>
  </main>

  <?php require 'footer.php'; ?>
</body>

</html>
