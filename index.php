<?php

function displayAllPosts($posts_count = 5, $excerpt_length = 75) {
    $base_url = 'https://xarop.com/wp-json/wp/v2/';

    // Construct the API endpoint URL for all posts
    $api_url = $base_url . 'posts?per_page=' . $posts_count;

    // Initialize cURL session
    $ch = curl_init($api_url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        die('Error fetching data from the WordPress API: ' . curl_error($ch));
    }

    // Close cURL session
    curl_close($ch);

    // Decode the JSON response
    $posts = json_decode($response);

    // Check for JSON decoding errors
    if (json_last_error() != JSON_ERROR_NONE) {
        die('Error decoding JSON: ' . json_last_error_msg());
    }
    echo '<h4> </h4>';

    // Display all posts
    foreach ($posts as $post) {
        echo '<p class="post"><a href="' . $post->link . '" target="_blank">';
        echo '<strong>' . $post->title->rendered . '</strong><br/>';
        // Display a shorter excerpt
        $excerpt = substr(strip_tags($post->excerpt->rendered), 0, $excerpt_length);
        echo '<small>' . $excerpt . '...</small>';
        echo '</a></p>';
    }
}

// Example usage to fetch and display all posts
//displayAllPosts();

?>





<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adrià Julià Lundgren | UI/UX designer and FrontEnd developer | Barcelona</title>

  <link rel="icon" href="//xarop.com/favicon.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

    <link  href="styles.css" rel="stylesheet">

  
</head>

<body>
  <?php include_once('header.php'); ?>
  <?php include_once('content.php'); ?>

  <script>
    document.getElementById('printButton').addEventListener('click', function() {
      window.print();
    });
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1298554-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-1298554-2');
  </script>


</body>

</html>