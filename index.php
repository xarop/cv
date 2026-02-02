<?php require_once 'targets.php'; ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adrià Julià Lundgren | <?php echo $current['intro_title']; ?> | <?php echo $current['company']; ?></title>

  <link rel="icon" href="//xarop.com/favicon.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="styles.css" rel="stylesheet">
</head>

<body>
  <header id="page0">
    <div class="container">
      <h1 class="title">Adrià Julià Lundgren<span>Curriculum Vitae</span></h1>

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
          <p style="opacity:.75;"><em><?php echo $current['tech_stack']; ?></em></p>

          <figure style="margin-top:2em;">
            <a href="//xarop.com/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="120" fill="none" viewBox="0 0 189 61">
                <path fill="#EE2455" d="M5.879 43.742c-1.737 0-3.04-.136-3.908-.407-.814-.271-1.221-.624-1.221-1.058 0-.434.299-1.113.896-2.035l12.293-18.236L2.379 4.42c-.598-.923-.896-1.629-.896-2.117 0-.434.407-.787 1.22-1.058.87-.272 2.172-.407 3.909-.407h2.605c1.194 0 2.198.081 3.012.244.868.108 1.52.543 1.954 1.302l4.966 8.06c.217.326.407.651.57.977l.651.977c.271-.38.516-.733.733-1.058.217-.326.434-.679.651-1.059l5.048-7.897c.434-.76 1.058-1.194 1.872-1.302.868-.163 1.9-.244 3.094-.244h2.36c3.42 0 5.13.488 5.13 1.465 0 .434-.299 1.113-.896 2.035L26.476 21.924 38.525 40.16c.597.923.895 1.628.895 2.117 0 .434-.434.787-1.302 1.058-.814.271-2.09.407-3.827.407h-2.605c-1.194 0-2.225-.081-3.093-.244a2.742 2.742 0 0 1-1.873-1.303l-5.617-8.955a7.404 7.404 0 0 0-.57-.814 13.258 13.258 0 0 0-.489-.895c-.162.27-.352.57-.57.895l-.488.814-5.699 8.955c-.434.706-1.085 1.14-1.954 1.303-.814.163-1.818.244-3.012.244H5.88Zm46.189.488c-4.397 0-7.517-1.14-9.363-3.419-1.79-2.333-2.686-5.156-2.686-8.466 0-1.683.244-3.392.733-5.13.542-1.79 1.6-3.446 3.174-4.965 1.575-1.52 3.908-2.741 7.002-3.664 3.148-.922 7.3-1.384 12.456-1.384v-2.686c0-1.574-.516-2.741-1.547-3.501-.977-.76-2.578-1.14-4.803-1.14-1.954 0-3.664.217-5.13.652-1.41.434-2.577.868-3.5 1.302-.868.434-1.465.651-1.79.651-.544 0-1.168-.407-1.873-1.22a16.517 16.517 0 0 1-1.71-2.85c-.434-1.086-.651-1.9-.651-2.443 0-.922.651-1.818 1.954-2.686 1.356-.868 3.202-1.574 5.535-2.117C52.259.621 54.945.35 57.93.35c4.288 0 7.707.597 10.258 1.791 2.55 1.14 4.396 2.741 5.536 4.803 1.14 2.009 1.71 4.342 1.71 7.002V29.25c0 2.822.081 4.993.244 6.513.163 1.465.325 2.578.488 3.338.163.705.245 1.357.245 1.954 0 .488-.38.895-1.14 1.22-.706.326-1.601.598-2.687.815a30.5 30.5 0 0 1-3.093.488c-.977.055-1.71.082-2.198.082-.869 0-1.52-.299-1.954-.896-.38-.651-.652-1.41-.814-2.28a48.358 48.358 0 0 0-.489-2.441c-.163.325-.733 1.004-1.71 2.035-.922.977-2.252 1.926-3.989 2.85-1.682.867-3.772 1.302-6.268 1.302Zm3.989-9.524c1.574 0 3.012-.489 4.315-1.466 1.356-.977 2.36-2.198 3.012-3.663v-4.478c-1.954 0-3.637.136-5.048.407-1.41.271-2.605.651-3.582 1.14-.922.488-1.628 1.113-2.116 1.872-.435.76-.652 1.629-.652 2.605 0 1.032.326 1.9.977 2.606.706.65 1.737.977 3.094.977Zm31.581 9.036c-3.257 0-4.885-.868-4.885-2.605V15.33c0-2.714-.081-4.803-.244-6.269-.163-1.465-.326-2.55-.488-3.256-.163-.76-.245-1.411-.245-1.954 0-.489.353-.896 1.059-1.221.76-.326 1.655-.597 2.686-.815a22.044 22.044 0 0 1 3.094-.407c1.031-.108 1.79-.162 2.28-.162.868 0 1.492.298 1.872.895.434.597.733 1.303.895 2.117a79.9 79.9 0 0 0 .489 2.28 16.663 16.663 0 0 1 3.338-4.234C98.845 1.001 100.69.35 103.025.35c2.008 0 3.283.407 3.826 1.221.543.814.814 1.873.814 3.175 0 .489-.108 1.303-.326 2.443a12.87 12.87 0 0 1-.814 3.012c-.38.922-.841 1.384-1.384 1.384a5 5 0 0 1-1.709-.326c-.597-.217-1.303-.325-2.117-.325-1.085 0-2.062.244-2.93.732a7.482 7.482 0 0 0-2.199 1.628c-.597.598-1.058 1.167-1.384 1.71v26.133c0 1.737-1.628 2.605-4.885 2.605h-2.28Zm38.237.488c-6.459 0-11.37-1.899-14.735-5.698-3.365-3.8-5.048-9.227-5.048-16.282 0-7.11 1.683-12.538 5.048-16.283C114.505 2.223 119.416.35 125.875.35s11.343 1.873 14.654 5.617c3.365 3.745 5.048 9.173 5.048 16.283 0 7.055-1.683 12.483-5.048 16.282-3.311 3.8-8.195 5.699-14.654 5.699Zm0-9.524c2.605 0 4.505-1.059 5.699-3.175 1.194-2.117 1.791-5.21 1.791-9.281 0-4.07-.597-7.137-1.791-9.2-1.194-2.117-3.094-3.175-5.699-3.175s-4.532 1.059-5.78 3.175c-1.194 2.063-1.791 5.13-1.791 9.2 0 4.07.597 7.164 1.791 9.28 1.248 2.117 3.175 3.176 5.78 3.176ZM156.35 60.35c-3.256 0-4.884-.868-4.884-2.605V15.33c0-2.714-.082-4.803-.245-6.269-.163-1.465-.325-2.55-.488-3.256-.163-.76-.244-1.411-.244-1.954 0-.489.352-.896 1.058-1.221.76-.326 1.655-.597 2.687-.815a22.025 22.025 0 0 1 3.093-.407c1.031-.108 1.791-.162 2.28-.162.868 0 1.492.298 1.872.895.434.597.733 1.303.896 2.117.162.814.325 1.547.488 2.198.923-1.737 2.334-3.175 4.233-4.315 1.954-1.194 4.18-1.79 6.676-1.79 2.931 0 5.536.84 7.816 2.523 2.333 1.682 4.152 4.179 5.454 7.49 1.303 3.256 1.954 7.245 1.954 11.967 0 6.622-1.492 11.94-4.478 15.957-2.985 3.962-7.218 5.943-12.7 5.943-1.899 0-3.555-.272-4.966-.814-1.357-.543-2.469-1.113-3.338-1.71v16.038c0 1.737-1.628 2.605-4.884 2.605h-2.28Zm12.863-25.644c2.551 0 4.451-1.032 5.699-3.094 1.248-2.117 1.872-5.21 1.872-9.28 0-3.963-.542-6.975-1.628-9.038-1.085-2.062-2.741-3.093-4.966-3.093-1.52 0-2.822.488-3.908 1.465a14.885 14.885 0 0 0-2.768 3.338V33.16c.652.38 1.439.733 2.361 1.058.977.326 2.09.489 3.338.489Z" />
              </svg>
            </a>

            <label style="opacity:.75;">
              <em>Portfolio, services, and blog at <strong><a href="//www.xarop.com" target="_blank">xarop.com</a></strong></em>
            </label>
          </figure>

          <hr />

          <h3>Cover Letter</h3>
          <p><?php echo $current['letter_intro']; ?></p>
          <div class="no-print" style="margin-top: 20px;">
            <a href="letter.php?for=<?php echo $target_key; ?>" class="big"><strong>Read cover letter for <?php echo $current['company']; ?> &rarr;</strong></a>
          </div>
        </section>

        <?php require 'aside.php'; ?>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <section id="experience">
        <h3>PROFESSIONAL EXPERIENCE</h3>

        <article>
          <h4 class="title">Senior Web Engineer | xarop.com<span>2019 – Present</span></h4>

          <p><strong>Architecting foundational systems for large-scale enterprise platforms at ByteBerry Studio:</strong><br />
            Technical strategy and development of robust corporate ecosystems.<br />
            <strong><a href="https://ccib.es" target="_blank">ccib.es</a>:</strong> Complex multilingual architecture for the Barcelona International Convention Centre.<br />
            <strong><a href="https://bandalux.com" target="_blank">bandalux.com</a>:</strong> High-end UI/UX for a global solar protection leader, leveraging Timber/Twig and modern PHP.<br />
            <small>WordPress, <strong>Timber/Twig</strong>, ACF, Sophisticated PHP, SASS, Performance & Caching, Code Reviews.</small>
          </p>

          <p><strong>WordPress Developer at Minsait</strong> (<a href="https://www.fbbva.es/" target="_blank">fbbva.es</a>)<br />
            Advanced WordPress development and implementation of the <strong>OpenWeb</strong> for the BBVA Foundation portal.<br />
            <small>WordPress, OpenWeb, PHP, JavaScript, SASS, Corporate Frameworks.</small>
          </p>

          <p><strong>Senior Engineer at BeeData analytics</strong> (<a href="//beedataanalytics.com/" target="_blank">beedataanalytics.com</a>)<br />
            Developing complex PDF reporting engines for energy companies. Architecting scalable corporate platforms and high-performance <em>webapps</em> using BigData integration.<br />
            <small>BigData, Figma, modern HTML/SASS, jQuery, D3, Python, Git, React, Responsive Systems, WordPress.</small>
          </p>

          <p><strong>FrontEnd Engineer for Editorial Planeta</strong> (<a href="//www.casadellibro.com/" target="_blank">casadellibro.com</a> and <a href="//www.eae.es/" target="_blank">eae.es</a>)<br />
            Implementation of refined digital experiences for Casa del Libro and EAE Business School.<br />
            <small>HTML5, SASS, JavaScript, VueJS, Drupal, PHP, Symfony, Twig Architecture.</small>
          </p>

          <p><strong><em>Web Engineer</em> at SomMobilitat</strong> (<a href="//www.sommobilitat.coop" target="_blank">sommobilitat.coop</a>)<br />
            Scalable WordPress development and custom API integrations.<br />
            <small>WordPress, ACF, HTML5, CSS3, jQuery, PHP, Git, GoogleMaps API.</small>
          </p>

          <p>
            <strong>Architecting and Developing High-Scale Sites (WordPress)</strong><br />

            <a href="//junglemows.com" target="_blank">JungleMows.com</a>
            <small>Full-cycle eCommerce design and development.</small>
            <a href="https://memorimage.reus.cat/" target="_blank">memorimage.reus.cat</a>
            <small>Redesign of the Reus Film Festival platform.</small>
            <a href="//beedataanalytics.com" target="_blank">beedataanalytics.com</a>
            <small>Enterprise WordPress Corporate Website.</small>

            <small>Figma, WordPress, WooCommerce, ACF, Polylang, Gutenberg, React components, Git, performance optimization.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Senior FrontEnd Engineer at Newshore <span>2017 – 2020</span></h4>

          <p><strong><em>Front End development</em> for Vueling Airlines</strong> (<a href="//vueling.com" target="_blank">vueling.com</a>)<br />
            Engineering the front-end for high-traffic projects and <em>webapps</em> in a global distributed team (Agile/SCRUM).<br />
            <small>Angular 2+, VueJS, SASS, Node, GIT, SCRUM, Jira, MS Teams, Azure.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Freelance<span>2009 – 2019</span></h4>

          <p class="no-print"><strong>Engineering diverse high-conversion LandingPages for advertising campaigns:</strong><br />
            <a href="//oakleycantstopchallenge.es" target="_blank">oakleycantstopchallenge.es</a>
            <small>LandingPage developed using the CodeIgniter framework.</small>
            <a href="//www.gallopastalover.es" target="_blank">gallopastalover.es</a>
            <small>OnePage with Jquery/CSS3 animations and background videos.</small>
            <a href="//www.ayondosocialtrading.com" target="_blank">ayondosocialtrading.com</a>
            <small>Microsite with a private user registration area.</small>
            <small>Responsive design, WordPress, CodeIgniter, Bootstrap 4, HTML5, CSS3, jQuery, PHP...</small>
          </p>

          <p><strong>Design and Development for a specialized online travel agency</strong> (<a href="//www.levoyageurmediterraneen.com" target="_blank">levoyageurmediterraneen.com</a>)<br />
            End-to-end design and engineering of an adaptive travel platform.<br />
            <small>Responsive design, WordPress, ACF, Polylang, Bootstrap 4, HTML5, CSS3, jQuery, PHP...</small>
          </p>

          <p><strong>Design and Development for the Memorimage Film Festival</strong> (<a href="https://memorimage.reus.cat/" target="_blank">memorimagefestival.org</a>)<br />
            Architected a multilingual, responsive platform for the international documentary festival.<br />
            <small>Responsive design, WordPress, ACF, Polylang, Bootstrap 4, HTML5, CSS3, jQuery, PHP...</small>
          </p>

          <p><strong>Design and Development for ElDocumentalDelMes</strong> (<a href="//www.eldocumentaldelmes.com/" target="_blank">eldocumentaldelmes.com</a>)<br />
            Engineering a multilingual documentary catalog and distribution portal.<br />
            <small>Responsive design, WordPress, Types, Polylang, Bootstrap 3, HTML5, CSS3, Less, jQuery, PHP...</small>
          </p>

          <p><strong>E-commerce Engineering for Easy Baby Kit</strong> (<a href="//easybabykit.eu/shop/" target="_blank">easybabykit.eu</a>)<br />
            Custom theme integration for PrestaShop. Configured payment gateways and CRM modules.<br />
            <small>Responsive design, PrestaShop, Smarty, TPV, CRM, Bootstrap 3, HTML5, CSS3, jQuery, ...</small>
          </p>

          <p><strong>Design and Development for the DocsBarcelona Film Festival</strong> (<a href="//www.docsbarcelona.com/" target="_blank">docsbarcelona.com</a>)<br />
            Architected a multilingual ecosystem integrating registration e-commerce, automated newsletters, and session catalogs.<br />
            <small>Responsive design, WordPress, Types, WPML, Woocommerce, Bootstrap 3, HTML5, CSS3, Less, jQuery, PHP...</small>
          </p>

          <p><strong>UI/UX Design and Development for <a href="//www.adamo.es/" target="_blank">adamo.es</a></strong><br />
            UI Design and engineering using Bootstrap and Less. Integrated Google Maps API and registration workflows.<br />
            <small>Fireworks, Responsive design, WordPress, Bootstrap 3, HTML5, CSS3, Less, jQuery, PHP...</small>
          </p>

          <p class="no-print"><strong>Frontend Prototyping for the e-Learning platform <a href="//www.witcamp.com/" target="_blank">witcamp.com</a></strong>.<br />
            UI Design and functional prototype creation for an e-Learning community.<br />
            <small>Fireworks, Bootstrap 2, HTML5, CSS3, jQuery, PHP...</small>
          </p>

          <p><strong><em>UI Designer</em> at <a title="" href="//www.infojobs.net/" target="_blank">Infojobs.</a></strong><br />
            Redesigned the UI for the candidate portal of infojobs.net. Created wireframes and designs for the entire application lifecycle.<br />
            <small>Firework, HTML, CSS, jQuery, PHP...</small>
          </p>

          <p class="no-print"><strong><em>Web Designer</em> at <a title="" href="//www.socialtec.es/" target="_blank">Socialtec.</a></strong><br />
            Lead UI Designer for Social Ibericus e-commerce and various high-traffic tourism portals like Hosteltur and the official site for La Palma island.<br />
            <small>Fireworks, WordPress, e-commerce, HTML, CSS, jQuery, PHP...</small>
          </p>

          <p><strong>WordPress Enterprise Implementation</strong> for major brands: <a href="//www.volotea.com/" target="_blank">Volotea</a>, <a href="//vuelingnews.com/" target="_blank">Vueling</a>, <a href="//www.activotrade.com/" target="_blank">Activotrade</a>, <a href="//eternwellness.com/" target="_blank">EternWellness</a>, <a href="//www.ub.edu/mei/">University of Barcelona</a>.<br />
            <small>WordPress, HTML, CSS, jQuery, PHP...</small>
          </p>

          <h4 class="title">Telefonica I+D<span>2008 – 2009</span></h4>
          <p><strong>Design, markup, and programming of social network mockups and prototypes.</strong><br />
            Wireframing and UI/UX development within an agile environment (SCRUM).<br />
            <small>Fireworks, SCRUM, HTML5, CSS3, jQuery, PHP, Drupal.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Vueling Airlines<span>2006 – 2008</span></h4>
          <p><strong>Web Engineering</strong>, design, implementation, and maintenance of the <a href="//www.vueling.com/hotels/">hotel booking</a> and <a href="//www.vueling.com/cars/">car rental</a> engines.<br />
            Layout and UI development for <a href="//www.vueling.com/">vueling.com</a>, covering marketing campaigns (newsletters, promotions) and core booking flows.<br />
            <small>Photoshop, Fireworks, Illustrator, Dreamweaver, HTML, CSS, PHP, jQuery</small>
          </p>

          <h4 class="title">Freelance<span>2002 – 2005</span></h4>
          <p><strong>Web Development</strong> for projects including the Pain Congress Canarias 2005 and the Serenity Amadores complex. Flash programming and integration for **Miquel Rius** (<a href="//www.miquelrius.com/" target="_blank">miquelrius.com</a>) and the official **Agatha Ruiz de la Prada** site (<a href="//www.agatharuizdelaprada.com/">agatharuizdelaprada.com</a>).<br />
            <strong>Project Manager</strong> (design, programming, maintenance) for the mental health portal <a href="//www.esquizo.com/" target="_blank">esquizo.com</a>.<br />
            Corporate identity and web development for Digital Events, Les Cols, and eLearning workshops.<br />
            <small>Flash, Director, ActionScript, Lingo, Photoshop, Fireworks, FreeHand, Dreamweaver, HTML, CSS,</small>
          </p>

          <h4 class="title">Creative Director at IT&amp;C<span>2000 – 2002</span></h4>
          <p><strong>Creative Director</strong> at IT&amp;C (E-commerce and ISP services):<br />
            Coordinated design and webmaster teams for corporate branding and diverse websites (e-commerce stores like <a title="Motorcycle accessories" href="//www.bikercom.com/" target="_blank">bikercom.com</a> and portals like <a title="Mortadelo y Filemon - official web" href="//www.mortadeloyfilemon.com/" target="_blank">mortadeloyfilemon.com</a>).
          </p>
        </article>

        <article>
          <h4 class="title">Enciclopedia Catalana<span>1999 - 2000</span></h4>
          <p><strong>Multimedia Development</strong> for "Rutes de Catalunya", a 28-CDROM collection co-published by El Periódico, Enciclopedia Catalana, and TV3.<br />
            Development for the <a href="//www.grec.net/home/escolar/PRIMARIA/qestiucd8.htm" target="_blank">Interactive Summer Notebooks</a>.<br />
            <small>Macromedia Director, Photoshop, Freehand</small>
          </p>
        </article>

        <article>
          <h4 class="title">Freelance<span>1998 - 1999</span></h4>
          <p><strong>Graphic Computing and Multimedia Instructor</strong> (Photoshop, FreeHand, Internet) at Esbes Formació and Doménech Formació.<br />
            Created interactive educational tools for the Municipal Institute for People with Disabilities.<br />
            <strong>Multimedia Integration</strong> (Macromedia Director) for an interactive game for Signos Particulares.<br />
            Developed corporate CD-ROMs at Spain Biz Point.<br />
          </p>
        </article>

        <article>
          <h4 class="title">Grupo Z<span>1997 - 1999</span></h4>
          <p><strong>Multimedia Programmer and Integrator</strong> at Somni Systems (Zeta Group):<br />
            CD-ROMs: Interactive Summer Notebooks for Enciclopedia Catalana, "Great Rock Encyclopedia" for Man Magazine, and interactive product demos for Zeta Multimedia.</p>
        </article>

        <article>
          <h4 class="title">Links International<span>1996 - 1997</span></h4>
          <p><strong>Multimedia Technician and Designer</strong> at LINKS International:<br />
            Development of CD-ROMs: Architectural Design, Interior Spaces, and European Furniture.</p>
        </article>
      </section>

      <div class="row">
        <section id="formation">
          <h3>FORMATION</h3>
          <article>
            <h4 class="title">Education</h4>
            <ul class="data-list">
              <li>
                <div class="item-header">
                  <span class="item-title">Postgraduate in Multimedia Programming</span>
                  <span class="item-year">1999</span>
                </div>
                <span class="item-subtitle">Universitat Pompeu Fabra (UPF)</span>
              </li>
              <li>
                <div class="item-header">
                  <span class="item-title">Degree in Graphic Design</span>
                  <span class="item-year">1994</span>
                </div>
                <span class="item-subtitle">EAAOA Llotja, Barcelona</span>
              </li>
              <li>
                <div class="item-header">
                  <span class="item-title">Technician in Multimedia Treatment</span>
                  <span class="item-year">1996</span>
                </div>
                <span class="item-subtitle">ITES - Imatge i Sò</span>
              </li>
            </ul>
          </article>
          <article>
            <h4 class="title">Continuous Training</h4>
            <ul class="data-list">
              <li>
                <div class="item-header">
                  <span class="item-title">Advanced React/Redux Architecture</span>
                  <span class="item-year">2020</span>
                </div>
                <span class="item-subtitle">ImaginaGroup</span>
              </li>
              <li>
                <div class="item-header">
                  <span class="item-title">Angular: Zero to Expert</span>
                  <span class="item-year">2017</span>
                </div>
                <span class="item-subtitle">Udemy</span>
              </li>
              <li>
                <div class="item-header">
                  <span class="item-title">Web App Engineering</span>
                  <span class="item-year">2017</span>
                </div>
                <span class="item-subtitle">Barcelona Activa</span>
              </li>
              <li>
                <div class="item-header">
                  <span class="item-title">Agile Methodologies & SCRUM</span>
                  <span class="item-year">2017</span>
                </div>
                <span class="item-subtitle">Barcelona Activa</span>
              </li>
              <li>
                <div class="item-header">
                  <span class="item-title">High-Performance System Design</span>
                  <span class="item-year">2015</span>
                </div>
                <span class="item-subtitle">Barcelona Activa</span>
              </li>
            </ul>
          </article>
          <article>
            <h4 class="title">Languages</h4>
            <p><strong>English</strong>: Professional Working Proficiency<br />
              <strong>Spanish & Catalan</strong>: Native<br />
            </p>
          </article>
        </section>

        <section id="skills">
          <h3>TECHNICAL EXPERTISE</h3>

          <h4 class="title">Web Engineering & Architecture</h4>
          <table class="skill">
            <tr>
              <td class="first">High-Level WordPress <small>Gutenberg, custom themes and plugins</small></td>
              <td>
                <div class="skill-bar"><span class="skill-bar-fill" style="width:100%;"></span></div>
              </td>
              <td class="last">10/10</td>
            </tr>
            <tr>
              <td class="first">Full-Stack Development <small>PHP, JavaScript, React, VueJS </small></td>
              <td>
                <div class="skill-bar"><span class="skill-bar-fill" style="width:95%;"></span></div>
              </td>
              <td class="last">9.5/10</td>
            </tr>
            <tr>
              <td class="first">API Integration & Design <small>REST, WP-API, Google Cloud, AI Services</small></td>
              <td>
                <div class="skill-bar"><span class="skill-bar-fill" style="width:90%;"></span></div>
              </td>
              <td class="last">9/10</td>
            </tr>
            <tr>
              <td class="first">Cloud & DevOps <small>AWS, Azure, Docker, CI/CD</small></td>
              <td>
                <div class="skill-bar"><span class="skill-bar-fill" style="width:80%;"></span></div>
              </td>
              <td class="last">8/10</td>
            </tr>
          </table>

          <h4 class="title">Front-End & UX/UI Design</h4>
          <table class="skill">
            <tr>
              <td class="first">UX/UI Design <small>Figma, Design Systems Architecture </small></td>
              <td>
                <div class="skill-bar"><span class="skill-bar-fill" style="width:95%;"></span></div>
              </td>
              <td class="last">10/10</td>
            </tr>
            <tr>
              <td class="first">Modern CSS <small>Tailwind / SASS / BEM</small></td>
              <td>
                <div class="skill-bar"><span class="skill-bar-fill" style="width:100%;"></span></div>
              </td>
              <td class="last">10/10</td>
            </tr>

            <tr>
              <td class="first">Optimization & Standards <small>SEO, Core Web Vitals, Caching</small></td>
              <td>
                <div class="skill-bar"><span class="skill-bar-fill" style="width:95%;"></span></div>
              </td>
              <td class="last">9.5/10</td>
            </tr>
          </table>

          <ul class="simple-list">
            <li><strong>AI & Workflow:</strong> Expert in AI-Assisted Development using <strong>Cursor</strong>, <strong>VS Code</strong> and <strong>Copilot</strong>. Advanced Prompt Engineering for modular architecture, automated documentation, and sustainable code refactoring.</li>
            <li><strong>Agile & Collaboration:</strong> <strong>SCRUM</strong>, Agile Methodologies, <strong>Jira</strong>, Atlassian Suite, Slack, Microsoft Teams, Google Workspace. High proficiency in <strong>Git Flow</strong> and collaborative environments.</li>
            <li><strong>Architecture & Tools:</strong> VS Code, Docker, Webpack/Vite, PHPUnit, Redis, Memcached, MySQL Optimization.</li>
            <li><strong>Web Ecosystem:</strong> Timber/Twig, Advanced Custom Fields (ACF), Bedrock/Sage, Laravel Eloquent, Blade.</li>
            <li><strong>Leadership:</strong> Technical Project Management, Mentorship, Code Review Standards, Strategic Communication.</li>
          </ul>
        </section>
      </div>
    </div>
  </main>

  <?php require 'footer.php'; ?>
</body>

</html>
