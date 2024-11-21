<style type="text/css">
    
    @media screen {
        .print {
            display: none;
        }
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

    .social-links-menu {
      margin: 1em auto;
      padding: 1em;
    }

    .social-links-menu span {
      display: none;
    }

    .social-links-menu li {
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

      .no-print, #gt-nvframe {
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