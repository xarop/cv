<?php $page_title = $current['intro_title']; ?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/head.php'; ?>
<body>
  <header>
    <div class="container">
      <h1 class="title">
        <a href="<?php echo $base_url ?>"><?php echo $profile['name']; ?></a>
        <span>Curriculum Vitae</span>
      </h1>

      <div class="row">
        <section id="intro" class="intro">
          <h2><?php echo $current['intro_title']; ?></h2>
          <p><strong><?php echo $current['intro_bio']; ?></strong></p>
          <p><?php echo $current['intro_bio_2']; ?></p>
          <?php if (isset($current['intro_bio_3'])) : ?>
            <p><?php echo $current['intro_bio_3']; ?></p>
          <?php endif; ?>
          <?php if (isset($current['intro_bio_4'])) : ?>
            <p><?php echo $current['intro_bio_4']; ?></p>
          <?php endif; ?>
          <p class="tech-stack"><em><?php echo $current['tech_stack']; ?></em></p>

          <figure>
            <a href="<?php echo $profile['website_url']; ?>/" target="_blank">
              <img src="logo.svg" width="120" alt="xarop">
            </a>
            <figcaption>
              <em>Portfolio, services, and blog at
                <strong><a href="<?php echo $profile['website_url']; ?>" target="_blank"><?php echo $profile['website']; ?></a></strong>
              </em>
            </figcaption>
          </figure>

          <hr>

          <h3>Cover Letter</h3>
          <p><?php echo $current['letter_intro']; ?></p>
          <div class="no-print cover-letter-link">
            <a href="letter/<?php echo $target_key; ?>" class="big">
              <strong>Read cover letter for <?php echo $current['company']; ?> &rarr;</strong>
            </a>
          </div>
        </section>

        <?php require __DIR__ . '/aside.php'; ?>
      </div>
    </div>
  </header>

  <div class="page-break"></div>

  <main>
    <div class="container">
      <?php require __DIR__ . '/experience.php'; ?>

      <div class="page-break"></div>

      <div class="row">
        <?php require __DIR__ . '/formation.php'; ?>
        <?php require __DIR__ . '/skills.php'; ?>
      </div>
    </div>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
