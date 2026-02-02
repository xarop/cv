<?php require_once __DIR__ . '/targets.php'; ?>
<?php $page_title = 'Cover Letter'; ?>
<!DOCTYPE html>
<html lang="en">

<?php require __DIR__ . '/head.php'; ?>

<body>
  <main id="page0">
    <div class="container">
      
       <h1 class="title">
        <a href="/cv/"><?php echo $profile['name']; ?></a>
        <span>Cover Letter</span>
      </h1>
      
      <div class="row">
       
        <main>
    
      <div class="row">
        <section class="intro">
          <h2><?php echo $current['intro_title']; ?></h2>
          <p style="color: var(--text-muted); margin-bottom: 30px;"><?php echo $current['letter_date']; ?></p>

          <p><?php echo $current['letter_greeting']; ?></p>

          <?php foreach ($current['letter_body'] as $paragraph) : ?>
            <p><?php echo $paragraph; ?></p>
          <?php endforeach; ?>

          <div style="margin-top: 40px;">
            <p>Best regards,</p>
            <p>
              <strong>Adrià Julià Lundgren</strong><br />
              <?php echo $current['intro_title']; ?> | <a href="https://xarop.com">xarop.com</a>
            </p>
          </div>

          <hr>
          <p class="no-print"><a href="../<?php echo $target_key; ?>">→ View Full CV</a></p>
        </section>
      </div>
   
  </main>

        <?php require __DIR__ . '/aside.php'; ?>
      </div>
    </div>
  </main>

  

  <?php require __DIR__ . '/footer.php'; ?>
</body>

</html>
