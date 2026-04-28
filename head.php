<?php require_once __DIR__ . '/targets.php'; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $profile['name']; ?><?php if (isset($page_title)) { echo ' | ' . $page_title;
         } ?><?php if (isset($current)) { echo ' | ' . $current['company'];
} ?></title>

  <link rel="icon" href="//xarop.com/favicon.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="<?php echo $base_url ?>styles.css" rel="stylesheet">
</head>
