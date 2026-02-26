<?php $page_title = $current['intro_title']; ?>
<!DOCTYPE html>

<html lang="en">

<?php require __DIR__ . '/head.php'; ?>

<body>
  <header id="page0">
    <div class="container">
      
      <h1 class="title">
        <a href="/cv/"><?php echo $profile['name']; ?></a>
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
          <p style="opacity:.75;"><em><?php echo $current['tech_stack']; ?></em></p>

          <figure style="margin-top:2em;">
            <a href="<?php echo $profile['website_url']; ?>/" target="_blank">
              <img src="logo.svg" width="120" alt="xarop">
            </a>

            <label style="opacity:.75;">
              <em>Portfolio, services, and blog at <strong><a href="<?php echo $profile['website_url']; ?>" target="_blank"><?php echo $profile['website']; ?></a></strong></em>
            </label>
          </figure>

          <hr />

          <h3>Cover Letter</h3>
          <p><?php echo $current['letter_intro']; ?></p>
          <div class="no-print" style="margin-top: 20px;">
            <a href="letter/<?php echo $target_key; ?>" class="big"><strong>Read cover letter for <?php echo $current['company']; ?> &rarr;</strong></a>
          </div>
        </section>

        <?php require __DIR__ . '/aside.php'; ?>
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
            <small>WordPress, Timber/Twig, ACF, Sophisticated PHP, SASS, Performance & Caching, Code Reviews.</small>
          </p>

          <p><strong>Frontend Engineer at Minsait | BBVA Foundation</strong> (<a href="https://www.fbbva.es/" target="_blank">fbbva.es</a>)<br />
              Advanced development and implementation of the <strong>OpenWeb</strong> platform for the BBVA Foundation. Specialist in <strong>BBVA Corporate Frameworks</strong>, ensuring seamless integration between WordPress and <strong>Cells-based</strong> environments. Expert alignment with corporate Design Systems using <strong>Web Components</strong> and <strong>LitElement</strong> to maintain architectural consistency across the banking group’s digital assets.<br />
              <small>Cells Ecosystem, Web Components, LitElement, JavaScript (ES6+), OpenWeb, SASS, BBVA Corporate Design System.</small>
          </p>

          <p><strong>Senior Engineer at BeeData analytics</strong> (<a href="//beedataanalytics.com/" target="_blank">beedataanalytics.com</a>)<br />
            Developing complex PDF reporting engines for energy companies. Architecting scalable corporate platforms and high-performance <em>webapps</em> using BigData integration.<br />
            <small>BigData, Figma, modern HTML/SASS, jQuery, D3, Python, Git, React, Responsive Systems, WordPress.</small>
          </p>

          <p><strong>FrontEnd Engineer for Editorial Planeta</strong> (<a href="//www.casadellibro.com/" target="_blank">casadellibro.com</a> and <a href="//www.eae.es/" target="_blank">eae.es</a>)<br />
            Implementation of refined digital experiences for Casa del Libro and EAE Business School.<br />
            <small>HTML5, SASS, JavaScript, VueJS, Drupal, PHP, Symfony, Twig Architecture.</small>
          </p>

          <p><strong>Web Engineer at SomMobilitat</strong> (<a href="//www.sommobilitat.coop" target="_blank">sommobilitat.coop</a>)<br />
            Scalable WordPress development and custom API integrations.<br />
            <small>WordPress, ACF, HTML5, CSS3, jQuery, PHP, Git, GoogleMaps API.</small>
          </p>

          <p>
            <strong>Frontend Architecture & High-Scale Platforms</strong><br />

            <a href="//beedataanalytics.com" target="_blank">beedataanalytics.com</a>
            <small>Enterprise platform for energy data analytics. Implementation of custom <strong>React components</strong> and data visualization interfaces integrated with <strong>REST APIs</strong>.</small>

            <a href="//junglemows.com" target="_blank">JungleMows.com</a>
            <small>Full-cycle eCommerce architecture. Development of modular UI systems and complex <strong>WooCommerce</strong> logic for high-conversion user flows.</small>

            <a href="//memorimage.reus.cat/" target="_blank">memorimage.reus.cat</a>
            <small>Refactor of the Film Festival platform. Focus on <strong>Performance Optimization</strong> and accessible UI/UX for high-traffic event management.</small>

            <small><strong>Tech Stack:</strong> React, JavaScript (ES6+), Web Components, REST APIs, Figma, WordPress, Git, Performance Tuning.</small>
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
          <h3>TECHNICAL SKILLS</h3>

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
            <!-- <li><strong>Leadership:</strong> Technical Project Management, Mentorship, Code Review Standards, Strategic Communication.</li> -->
          </ul>
        </section>
      </div>
    </div>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
</body>

</html>
