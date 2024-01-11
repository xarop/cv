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

  <style type="text/css">
    .print #gt-nvframe {
      display: none;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Asap', sans-serif;
      font-size: 14px;
      line-height: 1.6;
      margin: 0 auto;
      padding: 40px;
      max-width: 800px;
      color: #111;
    }


    figure {
      margin: 0;
    }

    label {
      display: block;
      font-size: .75em;
    }

    img {
      max-width: 100%;
    }

    header {
      background: #F3F3F3;
      padding: 40px;
      display: table;
      border-bottom: #CCC 1px solid;
      border-top: #CCC 1px solid;
      margin-bottom: 50px;
    }

    footer {
      text-align: right;
      font-size: .8em;
      border-top: 1px dotted #ddd;
      padding-top: 1em;
      margin-top: 1em;
    }

    section {
      padding-top: 40px;
      display: block;
      page-break-before: always;
    }

    h1 {
      font-size: 36px;
      font-weight: 400;
    }

    h2 {
      font-size: 28px;
      font-weight: 100;
    }

    h3 {
      font-size: 18px;
      color: #aaa;
      font-weight: 100;
    }

    h4 {
      font-size: 18px;
      font-weight: 600;
    }
    h5 {
        margin: 0;
    }

    small {
      font-size: 12px;
      color: #aaa;
    }

    .big {
      font-size: 1.1em;
    }

    nav ul {
      padding: 1em;
      display: table;
      margin: 0 auto;
    }

    nav li {
      list-style: none;
      padding: .25em;
      border-bottom: dotted 1px #ddd;
      width: 100%;
    }

    .icon-menu {
      margin: 1em auto;
      padding: 1em;
    }

    .icon-menu span {
      display: none;
    }

    .icon-menu li {
      display: inline;
      padding: .25em;
    }

    .clear {
      clear: both;
    }

    .post {
       font-size:.75em;
       line-height: 1;
    }

    .title {
      border-bottom: #EE2455 dotted 1px;
      color: #EE2455;
    }

    .title span,
    .right {
      float: right;
      font-weight: 100;
      text-align: right;
      color: #aaa;
    }

    .title span {
      font-size: 70%;
    }

    .sidebar {
      float: right;
      color: #666;
      width: 30%;
      border-left: dotted 1px #ccc;
      
    }

    .sidebar figure {
      width: 140px;
      height: 140px;
      border-radius: 90px;
      overflow: hidden;
      margin: 0 auto;
      margin-bottom: 2em;
    }

    .intro {
      font-size: 18px;
      color: #666;
      font-weight: 400;
      float: left;
      width: 65%;
    }

    .intro em {
      color: #bbb;
    }

    header a {
      border: none;
    }

    a {
      color: #999;
      text-decoration: none;
    }

    a:hover {
      color: black;
    }

    table.skill {
      width: 100%;
      margin-bottom: 20px;
    }

    table.skill td {
      border: none;
      border-bottom: #CCC dotted 1px;
      padding: 2px;
      margin: 2px;
    }

    table.skill td.first {
      width: 140px;
    }

    table.skill td.last {
      text-align: right;
      width: 40px;
      color: #aaa;
    }

    table.skill td span {
      height: 4px;
      display: block;
      background: #aaa;
    }


    .row {
      display: flex;
      gap: 4em;
    }



    /* Smartphones (landscape) ----------- */
    @media (max-width : 600px) {
      .row {
        display: block;
      }

      header {
        text-align: center;
      }

      .intro {
        width: 100%;
        padding-bottom: 2em;
      }

      .sidebar {
        float: none;
        width: 100%;
        margin-top: 2em;
        border: none;
      }
    }

    /* Print ----------- */
    @media print {

      #gt-nvframe {
        display: none;
      }
      .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
        overflow: hidden;
      }


      .print {
        display: block !important;
      }

      .no-print {
        display: none !important;
      }

      body {
        font-size: 12px;
        line-height: 1.2;
      }

      .page {
        position: relative;
      }

      footer {
        position: absolute;
        top: 0;
        right: 0;
        border: none;
        width: 100%;
        display: table;
      }

      small {
        font-size: 10px;
      }

      header {
        margin: -40px;
      }

      .intro {
        /* width: 70%; */
      }

      .sidebar {
        float: right;
        /* width: 30%; */
        padding-left: 0;
        padding-top: 2em;
        margin-top: 2em;
      }

      .sidebar img {
        float: right;
        margin-right: 0;
        max-width: 100%;
      }

      .title {
        margin: 0;
        margin-top: 1em;
      }
    }
  </style>
  

  <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

</head>

<body>
  <header id="page0" class="page">
    <h1 class="title">Adrià Julià Lundgren<span>currículum vitae</span></h1>

    <div class="intro">
      <h2>UI/UX designer & FrontEnd Developer</h2>

      <p><strong>Diseñador gráfico y programador multimedia especializado en el diseño de Interficies de Usuario con las
          tecnologias mas actuales:</strong></p>
      <p><em>Figma, HTML5, CSS3, SASS, JavaScript, API Rest, jQuery, PHP, React, Angular, VueJS, Python, Bootstrap, Responsive Design,
          WordPress, Drupal, SEO, eCommerce, WooCommerce, PrestaShop, SCRUM, GIT, NodeJS, npm</em></p>

      <figure style="margin-top:2em;">
        <a href="//xarop.com/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="189" height="61" fill="none" viewBox="0 0 189 61">
            <path fill="#EE2455"
              d="M5.879 43.742c-1.737 0-3.04-.136-3.908-.407-.814-.271-1.221-.624-1.221-1.058 0-.434.299-1.113.896-2.035l12.293-18.236L2.379 4.42c-.598-.923-.896-1.629-.896-2.117 0-.434.407-.787 1.22-1.058.87-.272 2.172-.407 3.909-.407h2.605c1.194 0 2.198.081 3.012.244.868.108 1.52.543 1.954 1.302l4.966 8.06c.217.326.407.651.57.977l.651.977c.271-.38.516-.733.733-1.058.217-.326.434-.679.651-1.059l5.048-7.897c.434-.76 1.058-1.194 1.872-1.302.868-.163 1.9-.244 3.094-.244h2.36c3.42 0 5.13.488 5.13 1.465 0 .434-.299 1.113-.896 2.035L26.476 21.924 38.525 40.16c.597.923.895 1.628.895 2.117 0 .434-.434.787-1.302 1.058-.814.271-2.09.407-3.827.407h-2.605c-1.194 0-2.225-.081-3.093-.244a2.742 2.742 0 0 1-1.873-1.303l-5.617-8.955a7.404 7.404 0 0 0-.57-.814 13.258 13.258 0 0 0-.489-.895c-.162.27-.352.57-.57.895l-.488.814-5.699 8.955c-.434.706-1.085 1.14-1.954 1.303-.814.163-1.818.244-3.012.244H5.88Zm46.189.488c-4.397 0-7.517-1.14-9.363-3.419-1.79-2.333-2.686-5.156-2.686-8.466 0-1.683.244-3.392.733-5.13.542-1.79 1.6-3.446 3.174-4.965 1.575-1.52 3.908-2.741 7.002-3.664 3.148-.922 7.3-1.384 12.456-1.384v-2.686c0-1.574-.516-2.741-1.547-3.501-.977-.76-2.578-1.14-4.803-1.14-1.954 0-3.664.217-5.13.652-1.41.434-2.577.868-3.5 1.302-.868.434-1.465.651-1.79.651-.544 0-1.168-.407-1.873-1.22a16.517 16.517 0 0 1-1.71-2.85c-.434-1.086-.651-1.9-.651-2.443 0-.922.651-1.818 1.954-2.686 1.356-.868 3.202-1.574 5.535-2.117C52.259.621 54.945.35 57.93.35c4.288 0 7.707.597 10.258 1.791 2.55 1.14 4.396 2.741 5.536 4.803 1.14 2.009 1.71 4.342 1.71 7.002V29.25c0 2.822.081 4.993.244 6.513.163 1.465.325 2.578.488 3.338.163.705.245 1.357.245 1.954 0 .488-.38.895-1.14 1.22-.706.326-1.601.598-2.687.815a30.5 30.5 0 0 1-3.093.488c-.977.055-1.71.082-2.198.082-.869 0-1.52-.299-1.954-.896-.38-.651-.652-1.41-.814-2.28a48.358 48.358 0 0 0-.489-2.441c-.163.325-.733 1.004-1.71 2.035-.922.977-2.252 1.926-3.989 2.85-1.682.867-3.772 1.302-6.268 1.302Zm3.989-9.524c1.574 0 3.012-.489 4.315-1.466 1.356-.977 2.36-2.198 3.012-3.663v-4.478c-1.954 0-3.637.136-5.048.407-1.41.271-2.605.651-3.582 1.14-.922.488-1.628 1.113-2.116 1.872-.435.76-.652 1.629-.652 2.605 0 1.032.326 1.9.977 2.606.706.65 1.737.977 3.094.977Zm31.581 9.036c-3.257 0-4.885-.868-4.885-2.605V15.33c0-2.714-.081-4.803-.244-6.269-.163-1.465-.326-2.55-.488-3.256-.163-.76-.245-1.411-.245-1.954 0-.489.353-.896 1.059-1.221.76-.326 1.655-.597 2.686-.815a22.044 22.044 0 0 1 3.094-.407c1.031-.108 1.79-.162 2.28-.162.868 0 1.492.298 1.872.895.434.597.733 1.303.895 2.117a79.9 79.9 0 0 0 .489 2.28 16.663 16.663 0 0 1 3.338-4.234C98.845 1.001 100.69.35 103.025.35c2.008 0 3.283.407 3.826 1.221.543.814.814 1.873.814 3.175 0 .489-.108 1.303-.326 2.443a12.87 12.87 0 0 1-.814 3.012c-.38.922-.841 1.384-1.384 1.384a5 5 0 0 1-1.709-.326c-.597-.217-1.303-.325-2.117-.325-1.085 0-2.062.244-2.93.732a7.482 7.482 0 0 0-2.199 1.628c-.597.598-1.058 1.167-1.384 1.71v26.133c0 1.737-1.628 2.605-4.885 2.605h-2.28Zm38.237.488c-6.459 0-11.37-1.899-14.735-5.698-3.365-3.8-5.048-9.227-5.048-16.282 0-7.11 1.683-12.538 5.048-16.283C114.505 2.223 119.416.35 125.875.35s11.343 1.873 14.654 5.617c3.365 3.745 5.048 9.173 5.048 16.283 0 7.055-1.683 12.483-5.048 16.282-3.311 3.8-8.195 5.699-14.654 5.699Zm0-9.524c2.605 0 4.505-1.059 5.699-3.175 1.194-2.117 1.791-5.21 1.791-9.281 0-4.07-.597-7.137-1.791-9.2-1.194-2.117-3.094-3.175-5.699-3.175s-4.532 1.059-5.78 3.175c-1.194 2.063-1.791 5.13-1.791 9.2 0 4.07.597 7.164 1.791 9.28 1.248 2.117 3.175 3.176 5.78 3.176ZM156.35 60.35c-3.256 0-4.884-.868-4.884-2.605V15.33c0-2.714-.082-4.803-.245-6.269-.163-1.465-.325-2.55-.488-3.256-.163-.76-.244-1.411-.244-1.954 0-.489.352-.896 1.058-1.221.76-.326 1.655-.597 2.687-.815a22.025 22.025 0 0 1 3.093-.407c1.031-.108 1.791-.162 2.28-.162.868 0 1.492.298 1.872.895.434.597.733 1.303.896 2.117.162.814.325 1.547.488 2.198.923-1.737 2.334-3.175 4.233-4.315 1.954-1.194 4.18-1.79 6.676-1.79 2.931 0 5.536.84 7.816 2.523 2.333 1.682 4.152 4.179 5.454 7.49 1.303 3.256 1.954 7.245 1.954 11.967 0 6.622-1.492 11.94-4.478 15.957-2.985 3.962-7.218 5.943-12.7 5.943-1.899 0-3.555-.272-4.966-.814-1.357-.543-2.469-1.113-3.338-1.71v16.038c0 1.737-1.628 2.605-4.884 2.605h-2.28Zm12.863-25.644c2.551 0 4.451-1.032 5.699-3.094 1.248-2.117 1.872-5.21 1.872-9.28 0-3.963-.542-6.975-1.628-9.038-1.085-2.062-2.741-3.093-4.966-3.093-1.52 0-2.822.488-3.908 1.465a14.885 14.885 0 0 0-2.768 3.338V33.16c.652.38 1.439.733 2.361 1.058.977.326 2.09.489 3.338.489Z" />
          </svg>
        </a>

        <label>
          Portfolio, servicios y blog en <strong><a href="//www.xarop.com" target="_blank">xarop.com</a></strong>
        </label>
      </figure>

      <?php displayAllPosts();?>


    </div>
    <nav class="sidebar">
      <figure>
        <img title="Adrià Julià Lundgren" src="//xarop.com/cv/ajl0.jpg" alt="Adrià Julià Lundgren" />
      </figure>
      <ul>
        <li><small>Nacido el: </small>11/09/1968</li>
        <li><small>Residencia: </small>Barcelona</li>
        <li><small>Tel: </small><a href="tel:+34 620582626" target="_blank" class="big">+34 <strong>620 58 26
              26</strong></a></li>
        <!-- <li><a href="//xarop.com/" target="_blank">xarop.com</a></li> -->
        <li><small>eMail: </small><strong><em><a href="mailto:ajl@xarop.com" target="_blank"
                class="big">ajl@xarop.com</a></em></strong></li>
        <!-- <a href="//twitter.com/xarop/">@xarop</a> -->
      </ul>
      <ul id="menu-social" class="icon-menu">
        <!-- <li><a href="https://twitter.com/xarop"><span>Twitter</span><svg class="svg-icon" width="32" height="32"
              aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path
                fill="currentColor"
                d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z">
              </path>
            </svg></a></li> -->
        <li><a href="http://www.linkedin.com/in/xarop" title="linkedin profile"
            target="_blank"><span>Linkedin</span><svg class="svg-icon" width="32" height="32" aria-hidden="true"
              role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="currentColor"
                d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z">
              </path>
            </svg></a></li>
        <li><a href="https://www.behance.net/xarop" title="behance portfolio" target="_blank"><span>Behance</span><svg
              class="svg-icon" width="32" height="32" aria-hidden="true" role="img" focusable="false"
              viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="currentColor"
                d="M7.799,5.698c0.589,0,1.12,0.051,1.606,0.156c0.482,0.102,0.894,0.273,1.241,0.507c0.344,0.235,0.612,0.546,0.804,0.938 c0.188,0.387,0.281,0.871,0.281,1.443c0,0.619-0.141,1.137-0.421,1.551c-0.284,0.413-0.7,0.751-1.255,1.014 c0.756,0.218,1.317,0.601,1.689,1.146c0.374,0.549,0.557,1.205,0.557,1.975c0,0.623-0.12,1.161-0.359,1.612 c-0.241,0.457-0.569,0.828-0.973,1.114c-0.408,0.288-0.876,0.5-1.399,0.637C9.052,17.931,8.514,18,7.963,18H2V5.698H7.799 M7.449,10.668c0.481,0,0.878-0.114,1.192-0.345c0.311-0.228,0.463-0.603,0.463-1.119c0-0.286-0.051-0.523-0.152-0.707 C8.848,8.315,8.711,8.171,8.536,8.07C8.362,7.966,8.166,7.894,7.94,7.854c-0.224-0.044-0.457-0.06-0.697-0.06H4.709v2.874H7.449z M7.6,15.905c0.267,0,0.521-0.024,0.759-0.077c0.243-0.053,0.457-0.137,0.637-0.261c0.182-0.12,0.332-0.283,0.441-0.491 C9.547,14.87,9.6,14.602,9.6,14.278c0-0.633-0.18-1.084-0.533-1.357c-0.356-0.27-0.83-0.404-1.413-0.404H4.709v3.388L7.6,15.905z M16.162,15.864c0.367,0.358,0.897,0.538,1.583,0.538c0.493,0,0.92-0.125,1.277-0.374c0.354-0.248,0.571-0.514,0.654-0.79h2.155 c-0.347,1.072-0.872,1.838-1.589,2.299C19.534,18,18.67,18.23,17.662,18.23c-0.701,0-1.332-0.113-1.899-0.337 c-0.567-0.227-1.041-0.544-1.439-0.958c-0.389-0.415-0.689-0.907-0.904-1.484c-0.213-0.574-0.32-1.21-0.32-1.899 c0-0.666,0.11-1.288,0.329-1.863c0.222-0.577,0.529-1.075,0.933-1.492c0.406-0.42,0.885-0.751,1.444-0.994 c0.558-0.241,1.175-0.363,1.857-0.363c0.754,0,1.414,0.145,1.98,0.44c0.563,0.291,1.026,0.686,1.389,1.181 c0.363,0.493,0.622,1.057,0.783,1.69c0.16,0.632,0.217,1.292,0.171,1.983h-6.428C15.557,14.84,15.795,15.506,16.162,15.864 M18.973,11.184c-0.291-0.321-0.783-0.496-1.384-0.496c-0.39,0-0.714,0.066-0.973,0.2c-0.254,0.132-0.461,0.297-0.621,0.491 c-0.157,0.197-0.265,0.405-0.328,0.628c-0.063,0.217-0.101,0.413-0.111,0.587h3.98C19.478,11.969,19.265,11.509,18.973,11.184z M15.057,7.738h4.985V6.524h-4.985L15.057,7.738z">
              </path>
            </svg></a></li>
        <li><a href="https://github.com/xarop" title="github repositories" target="_blank"><span>Github</span><svg
              class="svg-icon" width="32" height="32" aria-hidden="true" role="img" focusable="false"
              viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="currentColor"
                d="M12,2C6.477,2,2,6.477,2,12c0,4.419,2.865,8.166,6.839,9.489c0.5,0.09,0.682-0.218,0.682-0.484 c0-0.236-0.009-0.866-0.014-1.699c-2.782,0.602-3.369-1.34-3.369-1.34c-0.455-1.157-1.11-1.465-1.11-1.465 c-0.909-0.62,0.069-0.608,0.069-0.608c1.004,0.071,1.532,1.03,1.532,1.03c0.891,1.529,2.341,1.089,2.91,0.833 c0.091-0.647,0.349-1.086,0.635-1.337c-2.22-0.251-4.555-1.111-4.555-4.943c0-1.091,0.39-1.984,1.03-2.682 C6.546,8.54,6.202,7.524,6.746,6.148c0,0,0.84-0.269,2.75,1.025C10.295,6.95,11.15,6.84,12,6.836 c0.85,0.004,1.705,0.114,2.504,0.336c1.909-1.294,2.748-1.025,2.748-1.025c0.546,1.376,0.202,2.394,0.1,2.646 c0.64,0.699,1.026,1.591,1.026,2.682c0,3.841-2.337,4.687-4.565,4.935c0.359,0.307,0.679,0.917,0.679,1.852 c0,1.335-0.012,2.415-0.012,2.741c0,0.269,0.18,0.579,0.688,0.481C19.138,20.161,22,16.416,22,12C22,6.477,17.523,2,12,2z">
              </path>
            </svg></a></li>
      </ul>

      <ul class="no-print">
        <li><a href="#page1"> EXPERIENCIA PROFESIONAL</a></li>
        <li><a href="#page2">FORMACIÓN</a></li>
        <li><a href="#page3">COMPETENCIAS TÉCNICAS</a></li>
      </ul>

      <ul id="menu-print" class="icon-menu no-print">

        <li>
          <a href="https://xarop-com.translate.goog/cv/?_x_tr_sl=es&_x_tr_tl=en&_x_tr_hl=ca&_x_tr_pto=wapp" target="_blank" title="Translate"><span>Translate</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M27.85 29H30l-6-15h-2.35l-6 15h2.15l1.6-4h6.85zm-7.65-6l2.62-6.56L25.45 23zM18 7V5h-7V2H9v3H2v2h10.74a14.71 14.71 0 0 1-3.19 6.18A13.5 13.5 0 0 1 7.26 9h-2.1a16.47 16.47 0 0 0 3 5.58A16.84 16.84 0 0 1 3 18l.75 1.86A18.47 18.47 0 0 0 9.53 16a16.92 16.92 0 0 0 5.76 3.84L16 18a14.48 14.48 0 0 1-5.12-3.37A17.64 17.64 0 0 0 14.8 7z"/></svg>
          </a>
        </li>


        <li>
          <a id="printToPdf" href="javascript:;" target="_blank" title="Descargar PDF"><span>Descargar PDF</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
              <path fill="currentColor"
                d="M30 18v-2h-6v10h2v-4h3v-2h-3v-2zm-11 8h-4V16h4a3.003 3.003 0 0 1 3 3v4a3.003 3.003 0 0 1-3 3m-2-2h2a1.001 1.001 0 0 0 1-1v-4a1.001 1.001 0 0 0-1-1h-2zm-6-8H6v10h2v-3h3a2.003 2.003 0 0 0 2-2v-3a2.002 2.002 0 0 0-2-2m-3 5v-3h3l.001 3z" />
              <path fill="currentColor"
                d="M22 14v-4a.91.91 0 0 0-.3-.7l-7-7A.909.909 0 0 0 14 2H4a2.006 2.006 0 0 0-2 2v24a2 2 0 0 0 2 2h16v-2H4V4h8v6a2.006 2.006 0 0 0 2 2h6v2Zm-8-4V4.4l5.6 5.6Z" />
            </svg> </a>
        </li>

        <li>
          <a id="printButton" href="javascript:;" title="Imprimir"><span>Imprimir</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
              <path fill="currentColor"
                d="M24 6.5V8h1a5 5 0 0 1 5 5v7.5a3.5 3.5 0 0 1-3.5 3.5H25v1.5a3.5 3.5 0 0 1-3.5 3.5h-11A3.5 3.5 0 0 1 7 25.5V24H5.5A3.5 3.5 0 0 1 2 20.5V13a5 5 0 0 1 5-5h1V6.5A3.5 3.5 0 0 1 11.5 3h9A3.5 3.5 0 0 1 24 6.5m-14 0V8h12V6.5A1.5 1.5 0 0 0 20.5 5h-9A1.5 1.5 0 0 0 10 6.5m-1 19a1.5 1.5 0 0 0 1.5 1.5h11a1.5 1.5 0 0 0 1.5-1.5v-6a1.5 1.5 0 0 0-1.5-1.5h-11A1.5 1.5 0 0 0 9 19.5zM25 22h1.5a1.5 1.5 0 0 0 1.5-1.5V13a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v7.5A1.5 1.5 0 0 0 5.5 22H7v-2.5a3.5 3.5 0 0 1 3.5-3.5h11a3.5 3.5 0 0 1 3.5 3.5z" />
            </svg> 
          </a>
        </li>

      </ul>


    </nav>

  </header>




  <section id="page1" class="page">
    <h3>EXPERIENCIA PROFESIONAL</h3>

    <article>

      <h4 class="title">Freelance<span>2019 – actualidad</span></h4>

      <p><strong>FrontEnd developer en BeeData analytics</strong> 
        (<a href="//beedataanalytics.com/" target="_blank">beedataanalytics.com</a>)<br />
        Desarrollo FrontEnd en la generación de informes personalizadosen PDF para diversas compañias eléctricas, así
        como el desarrollo de la web coorporativa y diversas <em>webapps</em>
        <br />
        <small>BigData, Figma, HTML, CSS/SASS, jQuery, D3, Python, Git, React, PDF, Responsive design, WordPress, ACF,
          Polylang.</small>
      </p>

      <p><strong>FrontEnd developer para Editorial Planeta</strong> 
        (<a href="//www.casadellibro.com/" target="_blank">casadellibro.com</a> y <a href="//www.eae.es/"
          target="_blank">eae.es</a>)<br />
        Implementación de los nuevos websites de la Casa del Libro y de la EAE Business School.
        <br />
        <small>HTML5, CSS/SASS, JavaScript, VueJS, Drupal, PHP, Symfony, Twig, ...</small>
      </p>

      <!-- 
        <p><strong>Diseño y desarrollo del <em>website</em> Learning By Docs</strong> 
        (<a href="//edu.docsbarcelona.com/" target="_blank">edu.docsbarcelona.com</a>)<br />
        Diseño, maquetación y programación del <em>website</em> adaptativo con áre privada y gestion de miembros. <br />
        <small>Responsive design, WordPress, ACF, Polylang, HTML5, CSS3, jQuery, PHP, Git, Guthenberg, Ultimate Members,
          Vimeo, ...</small>
      </p>

      <p><strong>Diseño y desarrollo del <em>website</em> Garatge JCA</strong> 
        (<a href="//www.garatgejca.eu/wp/" target="_blank">garatgejca.eu</a>)<br />
        Diseño, maquetación y programación del <em>website</em> adaptativo. <br />
        <small>Responsive design, WordPress, ACF, Polylang, HTML5, CSS3, jQuery, PHP, Git, Guthenberg, ...</small>
      </p> 
      -->

      <p><strong><em>FrontEnd developer</em> en SomMobilitat</strong> 
        (<a href="//www.sommobilitat.coop" target="_blank">sommobilitat.coop</a>)<br />
        Desarrollo FrontEnd con <em>WordPress</em>. <br />
        <small>Responsive design, WordPress, ACF, HTML5, CSS3, jQuery, PHP, Git, GoogleMaps, Caldera Forms ...</small>
      </p>
      <!-- 
      <p><strong>Diseño y desarrollo del <em>website</em> del Master de Estudios internacionales de la Universitat de
          Barcelona</strong> 
        (<a href="//ub.edu/mei" target="_blank">ub.edu.mei</a>)<br />
        Diseño, maquetación y programación del <em>website</em> adaptativo. <br />
        <small>Responsive design, WordPress, ACF, Polylang, Bootstrap 4, HTML5, CSS3, jQuery, PHP...</small>
      </p> -->

      <p><strong>Diseño y desarrollo de diversos sites bajo el CMS WordPress</strong> <br />
        <strong><a href="//junglemows.com" target="_blank">JungleMows.com</a></strong>: Diseño, maquetación <em>ecommerce</em>.<br />
        <strong><a href="//ub.edu/mei" target="_blank">ub.edu.mei</a></strong>: Diseño, maquetación y programación del
        website adaptativo para la Universitat de Barcelona<br />
        <strong><a href="//beedataanalytics.com/" target="_blank">beedataanalytics.com/</a></strong>: Web
        corporativa<br />
        <strong><a href="//www.garatgejca.eu/" target="_blank">garatgeJCA.eu</a></strong>: Diseño, maquetación y
        programación del website adaptativo de comercio local.<br />
        <small>Figma, WordPress, Woocommerce, ACF, Polylang, GoogleMaps Api, HTML, CSS/SASS, jQuery, PHP, Git, Guthenberg, Ultimate Members, Vimeo, ...</small>
      </p>


    </article>

    <article>
      <h4 class="title">FrontEnd developer en Newshore <span>2017 – 2020</span></h4>

      <p><strong><em>Front End designer & developer</em> para Vueling</strong> 
        (<a href="//vueling.com" target="_blank">vueling.com</a>)<br />
        Maquetación y programación del <em>Front End</em> en varios proyectos web y <em>webapps</em> en un equipo
        multidisciplinar y con metodologias <em>agile</em>. <br />
        <small>Angular 2+, VueJS, SASS, Node, GIT, SCRUM, Jira, MS Teams, Azure, ...</small>
      </p>
    </article>

    <article>

      <h4 class="title">Freelance<span>2009 – 2019</span></h4>

      <p class="no-print"><strong>Desarrollo de diversas <em>LandingPages</em> de campañas publicitarias:</strong><br />
        <a href="//oakleycantstopchallenge.es" target="_blank">oakleycantstopchallenge.es</a>
        <small><em>LandingPage</em> realizada con el <em>Feramework</em> CodeIgniter..</small><br />
        <a href="//www.gallopastalover.es" target="_blank">gallopastalover.es</a>
        <small><em>OnePage</em> con animaciones Jquery/CSS3 y videos en background.</small><br />
        <a href="//www.ayondosocialtrading.com" target="_blank">ayondosocialtrading.com</a>
        <small><em>MicroSite</em> con parte privada que requiere un registro de usuarios.</small><br />
        <small>Responsive design, WordPress, CodeIgniter, Bootstrap 4, HTML5, CSS3, jQuery, PHP...</small>
      </p>

      <p><strong>Diseño y desarrollo del <em>website</em> de la agencia de viajes online</strong> (<a
          href="//www.levoyageurmediterraneen.com" target="_blank">levoyageurmediterraneen.com</a>)<br />
        Diseño, maquetación y programación del <em>website</em> adaptativo. <br />
        <small>Responsive design, WordPress, ACF, Polylang, Bootstrap 4, HTML5, CSS3, jQuery, PHP...</small>
      </p>

      <p><strong>Diseño y desarrollo del <em>website</em> del memorimage Festival de Reus</strong> (<a
          href="//memorimage.reus.cat/" target="_blank">memorimagefestival.org</a>)<br />
        Diseño, maquetación y programación del <em>website</em> adaptativo y multilingue. <br />
        <small>Responsive design, WordPress, ACF, Polylang, Bootstrap 4, HTML5, CSS3, jQuery, PHP...</small>
      </p>

      <p><strong>Diseño y desarrollo del <em>website</em> ElDocumentalDelMes</strong> (<a
          href="//www.eldocumentaldelmes.com/" target="_blank">eldocumentaldelmes.com</a>)<br />
        Diseño, maquetación y programación del <em>website</em> adaptativo y multilingue. Programa y catálogo de
        documentales.<br />
        <small>Responsive design, WordPress, Types, Polylang, Bootstrap 3, HTML5, CSS3, Less, jQuery, PHP...</small>
      </p>

      <p><strong>Desarrollo del <em>ecommerce</em> Easy Baby Kit</strong> (<a href="//easybabykit.eu/shop/"
          target="_blank">easybabykit.eu</a>)<br />
        Diseño e integración de un <em>custom theme</em> para PrestaShop. Motaje y configuración del ecommerce con TPV,
        modulo de transportista y modulo CRM.<br />
        <small>Responsive design, PrestaShop, Smarty, TPV, CRM, Bootstrap 3, HTML5, CSS3, jQuery, ...</small>
      </p>

      <p><strong>Diseño y desarrollo del <em>website</em> del Festival DocsBarcelona</strong> (<a
          href="//www.docsbarcelona.com/" target="_blank">docsbarcelona.com</a>)<br />
        Diseño, maquetación y programación del <em>website</em> multilingue, integrando un <em>ecoomerce</em> para
        inscripciones y un gestor de <em>newsletter</em> además de un catálogo de productos con localizaciones y
        sesiones.
        <br />
        <small>Responsive design, WordPress, Types, WPML, Woocommerce, Bootstrap 3, HTML5, CSS3, Less, jQuery,
          PHP...</small>
      </p>

      <p><strong>Diseño y desarrollo del <em>website</em> de <a href="//www.adamo.es/"
            target="_blank">adamo.es</a></strong><br />
        Diseño del UI y maquetación de un nuevo Interficie e Usuario utilizando Bootstrap y Less. Integración de
        GoogleMaps
        y formularios de registro.<br />
        <small>Fireworks, Responsive design, WordPress, Bootstrap 3, HTML5, CSS3, Less, jQuery, PHP...</small>
      </p>

      <p class="no-print"><strong>Diseño y prototipaje <em>frontend</em> del sitio de <em>elearning</em> <a
            href="//www.witcamp.com/" target="_blank">witcamp.com</a></strong>.<br />
        Diseño del UI y creación del prototipo de la comundad de <em>eLearning</em>.<br />
        <small>Fireworks, Bootstrap 2, HTML5, CSS3, jQuery, PHP...</small>
      </p>

      <p><strong><em>UI designer</em> en <a title="" href="//www.infojobs.net/" target="_blank">Infojobs.<br />
          </a></strong>Rediseño del UI de la sección de candidatos de la web <a href="//www.infojobs.net/"
          target="_blank">infojobs.net</a>. <em>Wireframes</em> y diseños de todo el proceso de inscripción de
        candidatos
        a
        las ofertas de empleo.<br />
        <small>Firework, HTML, CSS, jQuery, PHP...</small>
      </p>

      <p class="no-print"><strong><em>Web designer</em> en <a title="" href="//www.socialtec.es/"
            target="_blank">Socialtec.<br />
          </a></strong>Responsable del diseño del UI del ecommerce <a href="//www.socialibericus.com/"
          target="new">Social Ibericus</a> , y de diversas webs turisticas como la <a href="//comunidad.hosteltur.com/"
          target="_blank">Comunidad Hosteltur</a> y el portal de la isla canaria
        de <a href="//www.lapalma.es/" target="_blank">La Palma</a>, así como el desarrollo de webs para casas
        rurales como <a href="//www.riojania.com" target="_blank">Riojania</a>, comunidades verticales como <a
          title="Comunidad para mayores" href="//www.post55.es/" target="_blank">post55 </a>orientada a mayores
        o <a title="La c omunidad para autonomos y pymes" href="//econred.es/" target="_blank">econred</a> para
        autónomos.<br />
        <small>Fireworks, WordPress, ecommerce, HTML, CSS, jQuery, PHP...</small>
      </p>

      <p><strong>Implementación de <em>WordPress</em></strong> para <a href="//www.volotea.com/"
          target="_blank">Volotea</a>, <a href="//vuelingnews.com/" target="_blank">Vueling</a>,  <a
          href="//www.activotrade.com/" target="_blank">Activotrade</a>, <a href="//eternwellness.com/"
          target="_blank">EternWellness</a>,  <a href="//www.ub.edu/mei/">Universitat de Barcelona</a>.<br />
        <small>WordPress,HTML, CSS, jQuery, PHP...</small>
      </p>

    </article>

    <footer class="print">
      Adrià Julià Lundgren CV |
      <a href="mailto:ajl@xarop.com">ajl@xarop.com</a> |
      <a href="tel:+34 620582626">+34 620 58 26 26</a> |
      <a href="//xarop.com">xarop.com</a>
    </footer>

  </section>

  <section id="page1b" class="page">
    <article>
      <h4 class="title">Telefonica I+D<span>2008 – 2009</span></h4>
      <p> <strong>Diseño,  maquetación y  programación de </em><em>mockups </em>o prototipos de redes
          sociales.</strong><br />
        <em>Wireframing</em> y desarrollo de en el equipo <em>UI/UX</em> con metodologias de desarrollo ágil
        (SCRUM).<br />
        <small>Fireworks, SCRUM. HTML5, CSS3, jQuery, PHP, Drupal.</small>

      <h4 class="title">Vueling Airlines<span>2006 – 2008</span></h4>
      <p> <strong>Desarrollo web</strong>, diseño, realización y mantenimiento de los apartados de <a
          href="//www.vueling.com/hotels/">reserva de hoteles </a>y <a href="//www.vueling.com/cars/">alquiler
          de coches</a>.<br />
        Mantenimiento, diseño y maquetación del <em>website </em><a href="//www.vueling.com/">vueling.com</a>,
        tanto
        en áreas de marketing (newsletters, promociones) como en el proceso de compra y web corporativa.<br />
        <small>Photoshop, Fireworks, Illustrator, Dreamweaver, HTML, CSS, PHP, jQuery</small>
      </p>


      <h4 class="title">Freelance<span>2002 – 2005</span></h4>
      <p> <strong>Desarrollo web</strong>, entre otros, de los <em>websites</em> del Congreso del Dolor Canarias 2005
        y
        del complejo turístico Serenity Amadores. Desarrollo (programación e integración Flash)
        del <em>website</em> de
        la
        empresa <strong>Miquel Rius</strong> (<a href="//www.miquelrius.com/" target="_blank">miquelrius.com</a>).
        Desarrollo (programación e integración Flash) de la <em>web</em> oficial de<strong> Agatha Ruiz de la Prada
        </strong>(<a href="//www.agatharuizdelaprada.com/">agatharuizdelaprada.com</a>)<br />
        <strong>Project manager</strong> (diseño, programación, realización, mantenimiento, gestión, …) del portal
        sobre
        enfermedades mentales <a href="//www.esquizo.com/" target="_blank">esquizo.com</a>.<br />
        Realización de diversos <em>websites</em> e imágenes corporativas (Digital Events, les Cols, eLearning
        workshops).
        <br />
        <small>Flash, Director, ActionScript, Lingo, Photoshop, Fireworks, FreeHand, Dreamweaver, HTML, CSS,</small>
      </p>


      <h4 class="title">Director creativo en IT&amp;C<span>2000 – 2002</span></h4>
      <p> <strong>Director creativo</strong> en IT&amp;C, empresa de <em>e-commerce</em> y servicios de
        Internet:<br />
        Coordinación del equipo de diseñadores y <em>webmasters</em> para la realización de la imagen corporativa y
        <em>webs</em> de diversa tipologia (tiendas virtuales, <a title="Tienda de accesorios para moticicletas"
          href="//www.bikercom.com/" target="_blank">bikercom.com</a> o portales, <a
          title="Mortadelo y Filemon - web oficial" href="//www.mortadeloyfilemon.com/"
          target="_blank">mortadeloyfilemon.com</a>, etc.).
      </p>

    </article>

    <article>
      <h4 class="title">Enciclopedia Catalana<span>1999 - 2000</span></h4>
      <p> <strong>Desarrollo multimedia</strong> en la obra Rutes de Catalunya, colección de 28 CDRoms coeditados por El
        Periódico, Enciclopedia Catalana y TV3.<br />
        Desarrollo en los <a href="//www.grec.net/home/escolar/PRIMARIA/qestiucd8.htm" target="_blank">Quaderns
          d&rsquo;Estiu Multimèdia</a>.<br />
        <small>Macromedia Director, Photoshop, Freehand</small>
      </p>
    </article>
    <article>
      <h4 class="title">Freelance<span>1998 - 1999</span></h4>
      <p> <strong>Profesor de informática gráfica y multimedia</strong> (Photoshop, FreeHand, Internet) en las academias
        Esbes Formació y Doménech Formació.<br />
        Creación de varios interactivos educativos para el Institut Municipal de Persones amb Disminució.<br />
        <strong>Integrador bajo Macromedia Director</strong> en un juego interactivo (CD-Rom) para Signos
        Particulares.<br />
        Desarrollo de diversos CD-Roms corporativos en Spain Biz Point.<br />
    </article>


    <article>

      <h4 class="title">Grupo Z<span>1997 - 1999</span></h4>
      <p> <strong>Integrador y programador multimedia</strong> en la productora Somni Systems:<br />
        CD-Roms: Quaderns d&rsquo;Estiu para la Enciclopedia Catalana, La Gran Enciclopedia del Rock para la revista Man
        y la demostración interactiva de los productos de Zeta Multimedia.</p>
    </article>

    <article>
      <h4 class="title">Links International<span>1996 - 1997</span></h4>
      <p> <strong>Técnico y diseñador Multimedia</strong> en la editorial LINKS international:<br />
        Elaboración de los CD-Rom Architectural Design, Interior Spaces y European Furniture.</p>
    </article>

    <footer class="print">
      Adrià Julià Lundgren CV |
      <a href="mailto:ajl@xarop.com">ajl@xarop.com</a> |
      <a href="tel:+34 620582626">+34 620 58 26 26</a> |
      <a href="//xarop.com">xarop.com</a>
    </footer>

  </section>


  <div class="row">
    <section id="page2" class="page">
      <h3>FORMACIÓN</h3>
      <article>
        <h4 class="title">Universitat Pompeu Fabra<span>2003</span></h4>
        <p><strong>Postgrado de Programación Multimedia</strong><br />
          Programación multimedia, HTML, CSS, PHP, MySQL, ActionScript, JavaScript, Lingo...</p>
      </article>
      <article>
        <h4 class="title">Escola Superior de Disseny i d'Arts Plàstiques de Catalunya<span>1995 - 1999</span></h4>
        <p><strong>Título Oficial de Diseño Gráfico</strong> en la E.A.A.O.A. Llotja. <br />
          Especialidad Gráfica Publicitaria. El diseñador gráfico es el responsable de traducir al lenguaje visual las
          ideas y conceptos que han de llegar al público objetivo.</p>
      </article>
      <article>
        <h4 class="title">Multimedia<span>1995 - 1996</span></h4>
        <p> <strong>Técnico en tratamientos Multimedia</strong>, estudios en ITES-Imatge i só (proyectos
          multimedia).<br />
          Diseño y desarrollo de Proyectos Multimedia (CDRom), Macromedia Director, Lingo, Adobe Premiere, Photoshop,
          edición de video y audio.<br />
        </p>
      </article>
      <article>
        <h4 class="title">Bachillerato y COU<span>1985 - 1989</span></h4>
        <p> <strong>Institut de Batxillerat Montserrat</strong>, Barcelona..<br />
        </p>
      </article>
      <article>
        <h4 class="title">Otra formación</h4>
        <p>
          <strong>React/Redux avanzado</strong> o en ImaginaGroup<span class="right">2020</span><br />
          <strong>Angular de cero a experto</strong> en Udemy<span class="right">2017</span><br />
          <strong>Creación de webapps</strong> en Barcelona Activa<span class="right">2017</span><br />
          <strong>Angular JS </strong> en Barcelona Activa<span class="right">2017</span><br />
          <strong>Creación de Android apps </strong> en Barcelona Activa<span class="right">2012</span><br />
          <strong>Habilidades directivas</strong> en Barcelona Activa<span class="right">2003</span><br />
          <strong>Supervisor de sistemas PC</strong>, Barcelona Activa (200h).<span class="right">1995</span><br />
          <strong>Diseño asistido por ordenador</strong> (AUTOCAD) en CENEC.<span class="right">1992</span><br />
        </p>
      </article>
      <article>
        <h4 class="title">Idiomas</h4>
        <p> <strong>Español y Català</strong>: nativo<br />
          <strong>Inglés</strong>: nivel profesional<br />
        </p>
      </article>

    </section>

    <section id="page3" class="page">
      <h3>COMPETENCIAS TÉCNICAS</h3>
      <h4 class="title">Diseño y maquetación</h4>
      <table class="skill">
        <!-- <tr>
        <td class="first">Fireworks</td>
        <td><span style="width:90%;"><span></td>
        <td class="last">9/10</td>
      </tr> -->
        <tr>
          <td class="first">Photoshop</td>
          <td><span style="width:80%;"><span></td>
          <td class="last">8/10</td>
        </tr>
        <tr>
          <td class="first">Illustrator</td>
          <td><span style="width:70%;"><span></td>
          <td class="last">7/10</td>
        </tr>
        <!-- <tr>
    <td class="first">Responsive design</td>
    <td><span style="width:90%;"><span></td>
    <td class="last">9/10</td>
  </tr> -->
        <tr>
          <td class="first">Figma / Sketch / XD</td>
          <td><span style="width:90%;"><span></td>
          <td class="last">9/10</td>
        </tr>
        <!-- <tr>
    <td class="first">Flash</td>
    <td><span style="width:80%;"><span></td>
    <td class="last">8/10</td>
  </tr> -->
      </table>
      <h4 class="title">Programación</h4>
      <table class="skill">
        <tr>
        <tr>
          <td class="first">HTML5</td>
          <td><span style="width:90%;"><span></td>
          <td class="last">9/10</td>
        </tr>
        <tr>
          <td class="first">CSS3</td>
          <td><span style="width:90%;"><span></td>
          <td class="last">9/10</td>
        </tr>
        <!-- <tr>
    <td class="first">Less</td>
    <td><span style="width:70%;"><span></td>
    <td class="last">7/10</td>
  </tr> -->
        <tr>
          <td class="first">Sass / Less</td>
          <td><span style="width:80%;"><span></td>
          <td class="last">8/10</td>
        </tr>
        <tr>
          <td class="first">PHP / MySQL</td>
          <td><span style="width:80%;"><span></td>
          <td class="last">8/10</td>
        </tr>
        <tr>
          <td class="first">JavaScript</td>
          <td><span style="width:70%;"><span></td>
          <td class="last">8/10</td>
        </tr>
        <!-- <tr>
        <td class="first">MySQL</td>
        <td><span style="width:60%;"><span></td>
        <td class="last">6/10</td>
      </tr> -->
        <!-- <tr>
    <td class="first">VSCode</td>
    <td><span style="width:90%;"><span></td>
    <td class="last">9/10</td>
  </tr> -->
        <tr>
          <td class="first">Git</td>
          <td><span style="width:80%;"><span></td>
          <td class="last">8/10</td>
        </tr>
      </table>
      <h4 class="title">Librerias, frameworks y CMS</h4>
      <table class="skill">
        <tr>
          <td class="first">jQuery</td>
          <td><span style="width:80%;"><span></td>
          <td class="last">8/10</td>
        </tr>
        <tr>
          <td class="first">Angular</td>
          <td><span style="width:60%;"><span></td>
          <td class="last">6/10</td>
        </tr>

        <tr>
          <td class="first">React</td>
          <td><span style="width:60%;"><span></td>
          <td class="last">6/10</td>
        </tr>

        <tr>
          <td class="first">Bootstrap</td>
          <td><span style="width:90%;"><span></td>
          <td class="last">9/10</td>
        </tr>
        <tr>
          <td class="first">Foundation</td>
          <td><span style="width:70%;"><span></td>
          <td class="last">7/10</td>
        </tr>
        <tr>
          <td class="first">WordPress</td>
          <td><span style="width:90%;"><span></td>
          <td class="last">9/10</td>
        </tr>
        <tr>
          <td class="first">Drupal</td>
          <td><span style="width:70%;"><span></td>
          <td class="last">7/10</td>
        </tr>
        <tr>
          <td class="first">Prestashop</td>
          <td><span style="width:80%;"><span></td>
          <td class="last">8/10</td>
        </tr>
      </table>
      <p><small>Diseño y prototipado: Figma, PhotoShop, Fireworks, Sketch, Illustrator, InDesign, Axure, …<br />
          Multimedia: Flash/ActionScript, Director/Lingo, Adobe Premiere y otros editores.<br />
          Dessarrollo web: VS Code, Sublime, Atom, Jira, AWS, GIT, Dreamweaver, HTML, DHTML, CSS, Sass, Less,
          JavaScript,
          jQuery, Angular, React, VueJs, PHP, MySQL.<br />
          Ofimática: Microsoft Office, Open Office, Google Docs, ..<br />
          Entornos: PC-Windows, Linux y Apple Macintosh.</small></p>

      <footer>
        Adrià Julià Lundgren |
        <a href="mailto:ajl@xarop.com">ajl@xarop.com</a> |
        <a href="tel:+34 620582626">620 58 26 26</a> |
        <a href="//xarop.com">xarop.com</a>
        <span class="no-print"> | 
          <a href="#">top</a>
        </span>
      </footer>

    </section>
  </div>


  <script>
    document.getElementById('printButton').addEventListener('click', function() {
      window.print();
    });

    document.getElementById('printToPdf').addEventListener('click', function() {
        // Use html2pdf library to convert the current webpage to PDF
        html2pdf(document.body, {
            margin: 10,
            filename: 'ajlcv.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
            // Inject print styles directly into the generated PDF
            onBeforeCreate: function (pdf) {
                pdf.internal.addHTML(document.body.outerHTML, function() {
                    // Add additional processing if needed
                });
            }
        });
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