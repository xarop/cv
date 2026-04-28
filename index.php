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
      <section id="experience">
        <h3>Professional Experience</h3>

        <article>
          <h4 class="title">Senior Web Engineer | xarop.com <span>2019 – Present</span></h4>

          <p><strong>Zara Web Challenge – Napptilus / Inditex</strong>
            (<a href="https://napptilius.onrender.com" target="_blank">napptilius.onrender.com</a>)<br>
            Full-stack SPA for a smartphone catalog. React 19 frontend with a Node.js/Express BFF featuring
            server-side image processing (background removal, WebP conversion via Sharp), API proxy with
            response normalisation and LRU caching. Multilingual (ES/CA/EN), dark mode, skeleton loaders
            and animated page transitions.<br>
            <small><strong>React 19</strong>, <strong>Vite</strong>, <strong>Styled Components</strong>,
              <strong>React Context API</strong>, <strong>Node.js/Express</strong>, <strong>Sharp</strong>,
              <strong>i18next</strong>, <strong>Vitest</strong>, <strong>React Testing Library</strong>,
              Render, GitHub Pages.</small>
          </p>

          <p><strong>Custom Block Development &amp; Architecture for ByteBerry Studio:</strong><br>
            Focused on building robust corporate ecosystems through clean data structures and modular
            frontend components.<br>
            <strong><a href="https://ccib.es" target="_blank">ccib.es</a>:</strong>
            Implementation of a complex multilingual modular system for the Barcelona International
            Convention Centre using a block-based architecture.<br>
            <strong><a href="https://bandalux.com" target="_blank">bandalux.com</a>:</strong>
            High-end UI/UX for a global brand, utilizing <strong>Node.js</strong> build tools and a
            scalable <strong>SCSS</strong> architecture.<br>
            Developed custom <strong>WordPress</strong> themes using <strong>ACF</strong> for data modeling
            and <strong>Twig (Timber)</strong> for logic-view separation, ensuring high performance and
            maintainability.<br>
            <small>WordPress, <strong>ACF (Custom Blocks)</strong>, <strong>Twig/Timber</strong>, PHP,
              <strong>JavaScript (ES6)</strong>, <strong>SASS/SCSS</strong>, <strong>NPM</strong>,
              Performance &amp; Caching.</small>
          </p>

          <p><strong>Frontend Engineer at Minsait | BBVA Foundation</strong>
            (<a href="https://www.fbbva.es/" target="_blank">fbbva.es</a>)<br>
            Advanced development for <strong>OpenWeb</strong> ecosystem. Architected modular interfaces
            using <strong>Web Components</strong> and <strong>LitElement</strong>, ensuring full
            compatibility with <strong>BBVA Corporate Frameworks (Cells)</strong>. Responsible for
            consuming <strong>REST APIs</strong> and implementing quality standards using
            <strong>Chai</strong> and <strong>Mocha</strong> for unit testing.<br>
            <small><strong>LitElement</strong>, <strong>Web Components</strong>,
              <strong>JavaScript (ES6+)</strong>, <strong>REST APIs</strong>,
              <strong>Chai/Mocha</strong>, <strong>Node.js/NPM</strong>,
              <strong>SCSS</strong>, <strong>HTML5</strong>.</small>
          </p>

          <p><strong>Senior Engineer at BeeData Analytics</strong>
            (<a href="//beedataanalytics.com/" target="_blank">beedataanalytics.com</a>)<br>
            Developing complex reporting engines. Implementation of custom <strong>Web Components</strong>
            for data visualization interfaces integrated with <strong>REST APIs</strong>. Scalable frontend
            architectures built on <strong>Node.js</strong> environments.<br>
            <small><strong>JavaScript (ES6+)</strong>, <strong>Web Components</strong>,
              <strong>REST APIs</strong>, <strong>HTML5/CSS3</strong>, <strong>SCSS</strong>,
              <strong>NPM</strong>, D3.js, Python.</small>
          </p>

          <p><strong>FrontEnd Engineer for Editorial Planeta</strong>
            (<a href="//www.casadellibro.com/" target="_blank">casadellibro.com</a>)<br>
            Implementation of refined digital experiences. Migration of legacy components to modern
            <strong>JavaScript</strong> modular structures.<br>
            <small><strong>HTML5</strong>, <strong>SCSS</strong>, <strong>JavaScript</strong>,
              <strong>REST APIs</strong>, VueJS, PHP, Symfony.</small>
          </p>

          <p><strong>Web Engineer at SomMobilitat</strong>
            (<a href="//www.sommobilitat.coop" target="_blank">sommobilitat.coop</a>)<br>
            Scalable development and custom <strong>API integrations</strong> for cooperative mobility
            services.<br>
            <small><strong>JavaScript</strong>, <strong>HTML5/CSS3</strong>, <strong>REST APIs</strong>,
              <strong>Laravel</strong>, PHP, Git, GoogleMaps API.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Senior FrontEnd Engineer at Newshore <span>2017 – 2020</span></h4>
          <p><strong>Front End development for Vueling Airlines</strong>
            (<a href="//vueling.com" target="_blank">vueling.com</a>)<br>
            Engineering high-traffic interfaces and webapps. Development of modular components integrated
            with <strong>REST APIs</strong>. Use of <strong>Node.js</strong> for tooling and
            <strong>SCSS</strong> for large-scale Design Systems (SCRUM).<br>
            <small><strong>JavaScript</strong>, <strong>Node.js</strong>, <strong>NPM</strong>,
              <strong>SCSS</strong>, <strong>HTML5</strong>, <strong>REST APIs</strong>, Angular, Git.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Freelance <span>2009 – 2019</span></h4>
          <p><strong>Engineering diverse high-conversion platforms:</strong><br>
            Development of custom themes and applications focusing on <strong>JavaScript</strong>
            interactions and <strong>HTML5/CSS3</strong> semantic standards.<br>
            <small><strong>HTML5</strong>, <strong>CSS3</strong>, <strong>JavaScript</strong>,
              <strong>SCSS</strong>, <strong>REST APIs</strong>, WordPress, PHP, Git.</small>
          </p>

          <p><strong>UI/UX Design and Development for
            <a href="//www.adamo.es/" target="_blank">adamo.es</a></strong><br>
            UI Engineering using <strong>SCSS/Less</strong> and <strong>JavaScript</strong>. Integrated
            complex registration workflows with external <strong>APIs</strong>.<br>
            <small><strong>HTML5</strong>, <strong>CSS3</strong>, <strong>JavaScript</strong>,
              <strong>REST APIs</strong>, Bootstrap, WordPress.</small>
          </p>

          <p><strong><em>UI Designer</em> at
            <a href="//www.infojobs.net/" target="_blank">Infojobs</a></strong><br>
            Redesigned the UI for the candidate portal. Created modular <strong>HTML/CSS</strong>
            structures for the entire application lifecycle.<br>
            <small>UI/UX, <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong>,
              PHP.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Telefonica I+D <span>2008 – 2009</span></h4>
          <p><strong>Design and markup of social network prototypes.</strong><br>
            UI/UX development using <strong>JavaScript</strong> and <strong>HTML/CSS</strong> standards
            in agile environments.<br>
            <small><strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong>, SCRUM, PHP,
              Drupal.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Vueling Airlines <span>2006 – 2008</span></h4>
          <p><strong>Web Engineering</strong> and implementation of hotel and car rental booking engines.
            Layout and UI development for core booking flows.<br>
            <small><strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong>, PHP.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Freelance <span>2002 – 2005</span></h4>
          <p><strong>Web Development</strong> for projects including the Pain Congress Canarias 2005 and
            the Serenity Amadores complex. Flash programming and integration for Miquel Rius
            (<a href="//www.miquelrius.com/" target="_blank">miquelrius.com</a>) and the official Agatha
            Ruiz de la Prada site
            (<a href="//www.agatharuizdelaprada.com/">agatharuizdelaprada.com</a>).<br>
            <strong>Project Manager</strong> (design, programming, maintenance) for the mental health
            portal <a href="//www.esquizo.com/" target="_blank">esquizo.com</a>.<br>
            Corporate identity and web development for Digital Events, Les Cols, and eLearning
            workshops.<br>
            <small>Flash, Director, ActionScript, Lingo, Photoshop, Fireworks, FreeHand, Dreamweaver,
              HTML, CSS.</small>
          </p>
        </article>

        <article>
          <h4 class="title">Creative Director at IT&amp;C <span>2000 – 2002</span></h4>
          <p><strong>Creative Director</strong> at IT&amp;C (E-commerce and ISP services):<br>
            Coordinated design and webmaster teams for corporate branding and diverse websites
            (e-commerce stores like
            <a href="//www.bikercom.com/" target="_blank" title="Motorcycle accessories">bikercom.com</a>
            and portals like
            <a href="//www.mortadeloyfilemon.com/" target="_blank">mortadeloyfilemon.com</a>).
          </p>
        </article>

        <article>
          <h4 class="title">Enciclopedia Catalana <span>1999 – 2000</span></h4>
          <p><strong>Multimedia Development</strong> for "Rutes de Catalunya", a 28-CDROM collection
            co-published by El Periódico, Enciclopedia Catalana, and TV3.
            Development for the
            <a href="//www.grec.net/home/escolar/PRIMARIA/qestiucd8.htm" target="_blank">Interactive
              Summer Notebooks</a>.<br>
            <small>Macromedia Director, Photoshop, Freehand</small>
          </p>
        </article>

        <article>
          <h4 class="title">Freelance <span>1998 – 1999</span></h4>
          <p><strong>Graphic Computing and Multimedia Instructor</strong> (Photoshop, FreeHand, Internet)
            at Esbes Formació and Doménech Formació.<br>
            Created interactive educational tools for the Municipal Institute for People with
            Disabilities.<br>
            <strong>Multimedia Integration</strong> (Macromedia Director) for an interactive game for
            Signos Particulares.
          </p>
        </article>

        <article>
          <h4 class="title">Grupo Z <span>1997 – 1999</span></h4>
          <p><strong>Multimedia Programmer and Integrator</strong> at Somni Systems (Zeta Group):<br>
            CD-ROMs: Interactive Summer Notebooks for Enciclopedia Catalana, "Great Rock Encyclopedia"
            for Man Magazine, and interactive product demos for Zeta Multimedia.</p>
        </article>

        <article>
          <h4 class="title">Links International <span>1996 – 1997</span></h4>
          <p><strong>Multimedia Technician and Designer</strong> at LINKS International:<br>
            Development of CD-ROMs: Architectural Design, Interior Spaces, and European Furniture.</p>
        </article>
      </section>

      <div class="page-break"></div>

      <div class="row">
        <section id="formation">
          <h3>Formation</h3>

          <article>
            <h4 class="title">Education</h4>
            <ul class="data-list">
              <li>
                <div class="item-header">
                  <span class="item-title">Postgraduate in Multimedia Programming</span>
                  <span class="item-year">1999</span>
                </div>
                <span class="item-subtitle">Universitat Pompeu Fabra (UPF)</span>
                <small>PHP, JavaScript, HTML, CSS</small>
              </li>
              <li>
                <div class="item-header">
                  <span class="item-title">Degree in Graphic Design</span>
                  <span class="item-year">1994</span>
                </div>
                <span class="item-subtitle">EAAOA Llotja, Barcelona</span>
                <small>Graphic Design, Typography, Visual Communication</small>
              </li>
              <li>
                <div class="item-header">
                  <span class="item-title">Technician in Multimedia Treatment</span>
                  <span class="item-year">1996</span>
                </div>
                <span class="item-subtitle">ITES - Imatge i So</span>
                <small>Multimedia, Graphic Design, Typography, CDRom development</small>
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
                  <span class="item-title">Agile Methodologies &amp; SCRUM</span>
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
            <p><strong>English</strong>: Professional Working Proficiency<br>
              <strong>Spanish &amp; Catalan</strong>: Native
            </p>
          </article>
        </section>

        <section id="skills">
          <h3>Technical Skills</h3>

          <h4 class="title">Web Engineering &amp; Architecture</h4>
          <ul class="skill-list">
            <li>
              <span>High-Level WordPress <small>Gutenberg, custom themes and plugins</small></span>
              <meter value="10" min="0" max="10" title="10/10"></meter>
              <span class="skill-score">10/10</span>
            </li>
            <li>
              <span>Full-Stack Development <small>PHP, JavaScript, React, VueJS</small></span>
              <meter value="9.5" min="0" max="10" title="9.5/10"></meter>
              <span class="skill-score">9.5/10</span>
            </li>
            <li>
              <span>API Integration &amp; Design <small>REST, Google Cloud, AI Services</small></span>
              <meter value="9" min="0" max="10" title="9/10"></meter>
              <span class="skill-score">9/10</span>
            </li>
            <li>
              <span>Cloud &amp; DevOps <small>AWS, Azure, Docker, CI/CD</small></span>
              <meter value="8" min="0" max="10" title="8/10"></meter>
              <span class="skill-score">8/10</span>
            </li>
            <li>
              <span>Unit Testing <small>Vitest, React Testing Library, Chai/Mocha</small></span>
              <meter value="9" min="0" max="10" title="9/10"></meter>
              <span class="skill-score">9/10</span>
            </li>
          </ul>

          <h4 class="title">Front-End &amp; UX/UI Design</h4>
          <ul class="skill-list">
            <li>
              <span>UX/UI Design <small>Figma, Design Systems Architecture</small></span>
              <meter value="10" min="0" max="10" title="10/10"></meter>
              <span class="skill-score">10/10</span>
            </li>
            <li>
              <span>Modern CSS <small>Tailwind / SASS / BEM</small></span>
              <meter value="10" min="0" max="10" title="10/10"></meter>
              <span class="skill-score">10/10</span>
            </li>
            <li>
              <span>Optimization &amp; Standards <small>SEO, Core Web Vitals, Caching</small></span>
              <meter value="9.5" min="0" max="10" title="9.5/10"></meter>
              <span class="skill-score">9.5/10</span>
            </li>
          </ul>

          <ul class="simple-list">
            <li><strong>AI &amp; Workflow:</strong> AI-Assisted Development. Advanced Prompt Engineering
              for modular architecture, automated documentation, and sustainable code refactoring.</li>
            <li><strong>Agile &amp; Collaboration:</strong> <strong>SCRUM</strong>, Agile Methodologies,
              <strong>Jira</strong>, Atlassian Suite, Slack, Microsoft Teams, Google Workspace.
              <strong>Git Flow</strong> and collaborative environments.</li>
            <li><strong>Architecture &amp; Tools:</strong> VS Code, Docker, Webpack/Vite, PHPUnit, Redis,
              Memcached, MySQL Optimization.</li>
            <li><strong>Web Ecosystem:</strong> Timber/Twig, Advanced Custom Fields (ACF), Bedrock/Sage,
              Laravel Eloquent, Blade.</li>
          </ul>
        </section>
      </div>
    </div>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
