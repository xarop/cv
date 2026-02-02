<?php require_once 'targets.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $profile['name']; ?> | CV Targets</title>

  <link rel="icon" href="//xarop.com/favicon.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="/cv/styles.css" rel="stylesheet">
</head>

<body>
  <main id="page0">
    <div class="container">
      <h1 class="title"><?php echo $profile['name']; ?><span>CV Targets</span></h1>
 
      <p>
        <small>
          <?php 
            $links = [];
            foreach ($targets as $key => $target) {
                $links[] = '<a href="#' . htmlspecialchars($key) . '">' . htmlspecialchars($target['intro_title']) . '</a>';
            }
            echo implode(' | ', $links);
            ?>
        </small>
      </p>
      <hr>
      <?php foreach ($targets as $key => $target): ?>
        <article id="<?php echo htmlspecialchars($key); ?>">
          <h4><?php echo htmlspecialchars($target['intro_title']); ?></h4>
          <strong><?php echo htmlspecialchars($target['company']); ?></strong>
          <p><?php echo $target['intro_bio']; ?></p>
          <p><strong><?php echo $profile['website_url']; ?>/cv/<?php echo htmlspecialchars($key); ?></strong></p>
          <p>
            <a href="/cv/<?php echo htmlspecialchars($key); ?>">View CV</a> | 
            <a href="/cv/letter/<?php echo htmlspecialchars($key); ?>">Cover Letter</a>
          </p>
        </article>
        <hr>
      <?php endforeach; ?>
      <p><a href="/cv/">← Back to Generic CV</a></p>
    </div>
  </main>

  <?php require 'footer.php'; ?>
</body>

</html>
