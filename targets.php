<?php
/**
 * Configuration for different job applications.
 * Add a new target by adding an entry to the $targets array.
 */

$host = $_SERVER['HTTP_HOST'] ?? '';
$is_cv_subdomain = (stripos($host, 'cv.xarop.com') === 0);
$is_local = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false);
$base_url = ($is_cv_subdomain || $is_local) ? '/' : '/cv/';
// Profile information
$profile = [
    'name' => 'Adrià Julià Lundgren',
    'email' => 'ajl@xarop.com',
    'website' => 'xarop.com',
    'website_url' => 'https://xarop.com',
    'photo' => '/cv/ajl.jpg',
    'location' => 'Barcelona',
    'phone' => '+34 620 58 26 26',
    'phone_raw' => '+34620582626',
    'whatsapp' => '34620582626',
    'linkedin' => 'https://www.linkedin.com/in/xarop/',
    'github' => 'https://github.com/xarop'
];

$targets = [
    // Generic CV
    'generic' => [
        'company' => 'FrontEnd Engineer',
        'intro_title' => 'Senior FrontEnd Engineer',
        'intro_bio' => 'FrontEnd developer with over 20 years of experience building high-performance digital ecosystems. Expert in modern Front-End architecture and high-fidelity UI implementation.',
        'intro_bio_2' => 'Focused on building scalable, responsive, and interactive interfaces. I specialize in bridging technical robustness with seamless user experiences across various frameworks.',
        'intro_bio_3' => 'Dedicated <strong>UI/UX Designer</strong> and <strong>Figma</strong> expert. I act as a strategic <strong>bridge</strong> between creative vision and engineering, architecting scalable <strong>Design Systems</strong> for sophisticated digital products.',
        'intro_bio_4' => 'Expert in <strong>AI-Assisted Development</strong>. I leverage cutting-edge AI tools to accelerate production, specializing in prompt engineering for complex refactoring and building sustainable, high-performance systems.',
        'tech_stack' => '<strong>HTML5</strong>, <strong>CSS3/SASS</strong>, JavaScript, TypeScript, <strong>Figma</strong>, <strong>AI-Assisted Development</strong>, Responsive Design, VueJS, Angular, NodeJS, npm, GIT, SCRUM, modern PHP, WordPress, API Rest, MySQL, Python, SEO',
        'letter_intro' => '20+ years of experience building high-performance digital products with a focus on refined UI/UX and robust front-end architecture.',
        'letter_greeting' => 'To the Hiring Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'I am writing to express my strong interest in joining your team as a <strong>Senior FrontEnd Developer</strong>. With over two decades of experience navigating the evolution of the web, I have developed a unique profile that bridges the gap between sophisticated UI/UX design and robust, scalable engineering.',
            'My career has been defined by delivering high-fidelity digital experiences for industry leaders. During my time at <strong>Newshore</strong>, I contributed to the front-end engineering of <strong>vueling.com</strong>, a high-traffic platform where performance and reliability are paramount. Similarly, at <strong>Editorial Planeta</strong>, I implemented refined interfaces for <strong>Casa del Libro</strong> and <strong>EAE Business School</strong>, leveraging modern frameworks like VueJS within complex enterprise architectures.',
            'What sets me apart is my ability to act as a "Technical Architect of Design." At <strong>xarop.com</strong>, I have been a key part of the team developing sophisticated platforms such as <strong>bandalux.com</strong> and <strong>ccib.es</strong>. These projects required not only deep technical knowledge of SASS and JavaScript but also a strategic approach to <strong>Design Systems</strong> in Figma, ensuring that pixel-perfect designs translate into maintainable and performant code.',
            'I am a strong advocate for modern development workflows. I am an expert in <strong>AI-assisted development</strong>, leveraging advanced tools to accelerate refactoring and build sustainable systems. I am highly proficient in remote-first environments, utilizing <strong>Jira</strong>, <strong>Microsoft Teams</strong>, and Slack for seamless async communication. I thrive on <strong>remote work and flexibility</strong>, as it allows me to balance high-level coordination with the "deep work" required to maintain intense focus on high-quality coding with minimal interruptions.',
            'I am eager to bring my architectural oversight and passion for high-end front-end engineering to your most ambitious projects, while contributing to a culture of efficiency and technical excellence.'
        ]
    ],

     'frontend' => [
        'company' => 'FrontEnd Developer',
        'intro_title' => 'Senior FrontEnd Developer',
        'intro_bio' => 'FrontEnd Developer with 20+ years of experience building high-performance web applications. Expert in modern JavaScript frameworks, responsive design, and component architecture.',
        'intro_bio_2' => 'Specialized in <strong>React, VueJS, and Angular</strong> for building scalable, maintainable SPAs. Deep expertise in state management, component lifecycle, and performance optimization for complex user interfaces.',
        'intro_bio_3' => 'Master of <strong>Modern CSS/SASS</strong> and <strong>Responsive Design Systems</strong>. Expert in Tailwind, BEM methodology, and creating pixel-perfect implementations from Figma designs while maintaining code quality and accessibility standards.',
        'intro_bio_4' => 'Expert in <strong>AI-Assisted Development</strong>. Proficient in advanced prompting techniques for rapid prototyping, refactoring legacy code, and maintaining sustainable architectures in fast-paced environments.',
        'tech_stack' => '<strong>React</strong>, <strong>VueJS</strong>, <strong>Angular</strong>, <strong>TypeScript</strong>, <strong>JavaScript (ES6+)</strong>, <strong>HTML5</strong>, <strong>CSS3/SASS</strong>, <strong>Tailwind</strong>, Webpack, Vite, <strong>Git</strong>, REST APIs, <strong>Node.js</strong>, npm/yarn, Jest, <strong>Figma</strong>, Responsive Design, Performance Optimization, <strong>AI Tools</strong>, SCRUM',
        'letter_intro' => 'Expert <strong>FrontEnd Developer</strong> with 20+ years architecting modern web applications using React, VueJS, Angular, and cutting-edge CSS frameworks for high-traffic platforms.',
        'letter_greeting' => 'To the Engineering Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'I am writing to express my strong interest in the <strong>FrontEnd Developer</strong> position. With over two decades of experience building sophisticated web applications, I have mastered the evolution from jQuery to modern framework ecosystems, always focusing on performance, maintainability, and exceptional user experiences.',
            'My career highlights include engineering the front-end for <strong>vueling.com</strong> at Newshore, where I worked with <strong>Angular</strong> and <strong>VueJS</strong> in a high-traffic, distributed Agile environment. At <strong>Editorial Planeta</strong>, I implemented complex interfaces for <strong>Casa del Libro</strong> and <strong>EAE Business School</strong> using VueJS and modern build tools. More recently, I have been architecting enterprise platforms like <strong>bandalux.com</strong> and <strong>ccib.es</strong>, integrating modern JavaScript with sophisticated SASS architectures.',
            'I excel at <strong>component-driven development</strong>, creating reusable, scalable architectures that work seamlessly across teams. My deep understanding of <strong>TypeScript</strong>, state management patterns (Redux, Vuex, Pinia), and modern build tools (Webpack, Vite) allows me to deliver robust solutions that scale. I am particularly skilled at translating high-fidelity Figma designs into pixel-perfect, responsive implementations while maintaining accessibility and performance standards.',
            'I am a strong advocate for <strong>modern development workflows</strong>. I leverage <strong>AI-assisted tools</strong> to accelerate development, refactor legacy code, and ensure architectural consistency. I thrive in remote-first environments using Jira, Slack, and Microsoft Teams for seamless collaboration, and I excel in balancing async communication with focused deep work.',
            'I am eager to bring my technical expertise, architectural thinking, and passion for clean code to your engineering team, contributing to projects that demand both innovation and reliability.'
        ]
    ],

    'wordpress' => [
        'company' => 'WordPress ',
        'intro_title' => 'Senior WordPress Developer',
        'intro_bio' => 'WordPress developer with 20+ years of experience building high-scale, custom digital solutions. Expert in developing bespoke themes, plugins, and <strong>Laravel</strong>-powered backends from the ground up.',
        'intro_bio_2' => 'Specialized in building <strong>native Gutenberg Blocks</strong> with <strong>React</strong> and official WordPress standards (<code>@wordpress/scripts</code>, Block API, InnerBlocks, <code>block.json</code>), professional <strong>ACF Pro</strong> implementation, and <strong>REST API</strong> integrations. Experience with <strong>Laravel</strong> for custom API backends and middleware layers that power decoupled or hybrid WordPress architectures.',
        'intro_bio_3' => 'Master of <strong>Timber/Twig</strong> templating for clean, MVC-style WordPress themes that separate logic from presentation — and of complex <strong>Multilingual Architectures</strong> (Polylang, WPML) for global enterprise sites, ensuring performance, scalability, and an optimal editing experience for content creators.',
        'intro_bio_4' => 'Power user of <strong>AI-assisted programming</strong> workflows. I use advanced prompting to document architecture and ensure code sustainability.',
        'tech_stack' => '<strong>Modern PHP</strong>, <strong>Laravel</strong>, <strong>React</strong>, <strong>Native Gutenberg Blocks</strong> (@wordpress/scripts, Block API), <strong>Timber/Twig</strong>, HTML5, CSS3, SASS, API Rest, MySQL, Python, VueJS, Responsive Design, <strong>WordPress</strong>, <strong>ACF Pro</strong>, <strong>Figma</strong>, <strong>AI</strong>, Drupal, SEO, eCommerce, WooCommerce, SCRUM, GIT, NodeJS, npm',
        'letter_intro' => 'Expert in bespoke <strong>WordPress & Laravel engineering</strong> — from native <strong>Gutenberg Blocks built with React</strong> and WP standards, to Timber/Twig theming, enterprise multilingual architectures, and custom Laravel REST API backends.',
        'letter_greeting' => 'To the WordPress Engineering Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'As a <strong>Senior WordPress Engineer</strong> with over two decades of experience, I have moved far beyond simple implementations to architecting robust, custom-built ecosystems for global brands.',
            'My expertise lies in building everything from scratch: I develop <strong>bespoke themes and high-performance plugins</strong> that follow modern PHP standards and security best practices. I build <strong>native Gutenberg Blocks using React</strong> and the official WordPress toolchain — <strong><code>@wordpress/scripts</code></strong>, Block API, <code>block.json</code> registration, InnerBlocks, and custom controls via <code>InspectorControls</code> — delivering editors with rich, intuitive block experiences that are clean, accessible, and fully aligned with WordPress core standards. I am also an expert in <strong>Timber/Twig</strong> templating, architecting WordPress themes with a clean MVC separation, and in professional use of <strong>ACF Pro</strong> for advanced field-driven architectures.',
            'I have a proven track record in managing complex <strong>multilingual platforms</strong> using Polylang and WPML, ensuring that large-scale sites remain performant and easy to manage across dozens of regions. Furthermore, my experience with the <strong>REST API</strong> allows me to integrate WordPress into broader technical stacks, whether for decoupled front-ends or complex third-party data synchronizations. I also leverage <strong>Laravel</strong> to build custom API middleware and authentication layers—using Sanctum or Passport—that extend WordPress capabilities far beyond its native scope.',
            'I don’t just build websites; I engineer scalable digital products that bridge the gap between sophisticated design and technical excellence. I am eager to bring my deep WordPress knowledge to your most challenging projects.'
        ]
    ],

    'uiux' => [
        'company' => 'UX/UI Designer',
        'intro_title' => 'UX/UI Designer',
        'intro_bio' => 'Senior UX/UI Designer with 20+ years of experience creating high-conversion digital experiences. Expert in ecommerce design, user experience architecture, and design systems.',
        'intro_bio_2' => 'Specialized in <strong>Ecommerce Optimization</strong>, creating intuitive shopping experiences that balance aesthetics, usability, and conversion. Deep expertise in product pages, checkout flows, and navigation architecture.',
        'intro_bio_3' => 'Master of <strong>Figma</strong> and modern <strong>UX methodologies</strong>. I create comprehensive design systems that ensure visual consistency and scalability across complex digital platforms.',
        'intro_bio_4' => 'Strategic bridge between <strong>Design and Development</strong>. Expert in collaborating with engineering teams to implement designs that are both beautiful and technically feasible, with working knowledge of HTML/CSS.',
        'tech_stack' => '<strong>Figma</strong>, <strong>UX/UI Design</strong>, <strong>Ecommerce</strong>, <strong>Information Architecture</strong>, <strong>Design Systems</strong>, User Research, Prototyping, Usability Testing, Conversion Optimization, HTML5, CSS3, SASS, Responsive Design, <strong>AI-Assisted Design</strong>, Wireframing, User Flows, A/B Testing',
        'letter_intro' => 'Expert in <strong>Ecommerce UX/UI Design</strong>, specializing in high-conversion shopping experiences, information architecture, and design system implementation for digital retail platforms.',
        'letter_greeting' => 'To the Hiring Team,',
        'letter_date' => 'February 2, 2026',
        'letter_body' => [
            'I am writing to express my strong interest in the <strong>UX/UI Designer</strong> position. With over two decades of experience designing high-end digital experiences, I have dedicated a significant part of my career to optimizing ecommerce platforms that combine sophisticated aesthetics with measurable conversion results.',
            'Throughout my career, I have worked on <strong>large-scale ecommerce projects</strong> such as <strong>Casa del Libro</strong> and <strong>Vueling</strong>, where I have led information architecture, designed optimized purchase flows, and implemented coherent design systems that enhance both user experience and business KPIs. My approach combines a deep understanding of <strong>UX methodologies</strong> with advanced mastery of <strong>Figma</strong> and technical knowledge that enables me to collaborate effectively with development teams.',
            'My hybrid profile as both designer and front-end developer allows me to act as a <strong>strategic bridge</strong> between design and technical implementation. I have solid knowledge of HTML and CSS, which facilitates communication with development and ensures that my designs are not only visually compelling but also technically viable and optimized for performance.',
            'I am particularly excited about the opportunity to contribute to the continuous evolution of your ecommerce platform, working on the optimization of key pages (homepage, product page, checkout), refining navigation architecture, and ensuring that every design decision is oriented toward both conversion and brand consistency. My ability to work autonomously and methodically, combined with my results-driven orientation, makes me an ideal candidate for a dynamic environment of continuous improvement.',
            'I have attached my portfolio where you can see examples of web projects that demonstrate my design process and my ability to create exceptional user experiences. I would be delighted to contribute to your company\'s growth and be part of a team that values excellence in digital design.'
        ]
    ],
    'laravel' => [
        'company' => 'Laravel Developer',
        'intro_title' => 'Senior Laravel & PHP Developer',
        'intro_bio' => 'Senior Full-Stack Developer with 20+ years of experience, specializing in <strong>Laravel</strong> and modern <strong>PHP</strong> architectures for scalable, high-performance web applications.',
        'intro_bio_2' => 'Expert in building robust <strong>RESTful APIs</strong> and backend systems with <strong>Laravel</strong>, leveraging <strong>Eloquent ORM</strong>, queues, events, and <strong>MySQL/PostgreSQL</strong> for complex data-driven platforms.',
        'intro_bio_3' => 'Full-stack capability combining <strong>Laravel</strong> backends with modern front-end stacks (<strong>Vue.js / Inertia.js</strong>, Livewire, React). Experienced in <strong>Docker</strong>, CI/CD pipelines, and cloud deployment (AWS, Forge).',
        'intro_bio_4' => 'Expert in <strong>AI-Assisted Development</strong> to accelerate PHP refactoring, generate migrations, and maintain clean <strong>SOLID</strong> architectures at scale.',
        'tech_stack' => '<strong>Laravel</strong>, <strong>PHP 8+</strong>, <strong>MySQL</strong>, <strong>Eloquent ORM</strong>, <strong>REST APIs</strong>, <strong>Vue.js</strong>, <strong>Inertia.js</strong>, Livewire, Composer, Artisan, <strong>Docker</strong>, Redis, Queues, <strong>PHPUnit</strong>, Pest, Git, Figma, <strong>AI Tools</strong>, SCRUM, HTML5, CSS3/SASS, JavaScript',
        'letter_intro' => 'Senior <strong>Laravel & PHP Developer</strong> with 20+ years of experience architecting scalable APIs, full-stack applications, and robust backend systems.',
        'letter_greeting' => 'To the Engineering Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'I am writing to express my strong interest in the <strong>Laravel Developer</strong> position. With over two decades of web development experience and a deep specialization in <strong>PHP and the Laravel ecosystem</strong>, I have built and maintained high-performance applications from API-first platforms to full-stack solutions with Inertia.js and Livewire.',
            'My experience spans the full Laravel stack: designing clean <strong>RESTful APIs</strong> consumed by both web and mobile clients, building complex data models with <strong>Eloquent ORM</strong>, orchestrating background processing with <strong>Queues and Jobs</strong>, and implementing robust authentication flows using <strong>Laravel Sanctum and Passport</strong>. I follow <strong>SOLID principles</strong> and TDD practices using <strong>PHPUnit and Pest</strong> to ensure reliability and long-term maintainability.',
            'On the front-end side, I combine Laravel with <strong>Vue.js and Inertia.js</strong> for fluid SPA-like experiences without the overhead of a separate API, as well as <strong>Livewire</strong> for reactive interfaces that stay close to the backend. My 20+ years of expertise in HTML5, CSS3/SASS, and JavaScript means I can deliver polished, pixel-perfect implementations that align with design specifications.',
            'I have extensive experience with <strong>Docker-based local environments</strong>, Laravel Forge for deployment, and CI/CD pipelines that ensure fast and reliable releases. I leverage <strong>AI-assisted tools</strong> to accelerate development, assist with complex refactoring, and maintain clean, well-documented codebases—without compromising quality.',
            'I am eager to bring my technical depth, full-stack versatility, and passion for clean architecture to your team. I am confident I can contribute from day one to building scalable, maintainable Laravel applications that exceed both technical and business expectations.'
        ]
    ],

    'laravel-timber' => [
        'company' => 'Laravel & Timber/Twig Developer',
        'intro_title' => 'Senior PHP Developer | Laravel & Timber/Twig',
        'intro_bio' => 'Senior PHP Developer with 20+ years of experience specializing in <strong>Laravel</strong> for robust backend architectures and <strong>Timber/Twig</strong> for clean, maintainable WordPress templating.',
        'intro_bio_2' => 'Expert in building scalable <strong>RESTful APIs</strong> with <strong>Laravel</strong> — Eloquent ORM, Queues, Events and Sanctum/Passport — seamlessly integrated with WordPress ecosystems via the <strong>REST API</strong> and custom plugins.',
        'intro_bio_3' => 'Master of <strong>Timber/Twig</strong> templating: architecting clean MVC-style WordPress themes that separate logic from presentation, enabling maintainable, testable codebases at enterprise scale. Deep expertise in <strong>ACF Pro</strong>, custom post types, and advanced Gutenberg block development.',
        'intro_bio_4' => 'Expert in <strong>AI-Assisted Development</strong> to accelerate PHP refactoring, scaffold Laravel modules, and maintain clean <strong>SOLID</strong> architectures in complex full-stack environments.',
        'tech_stack' => '<strong>Laravel</strong>, <strong>PHP 8+</strong>, <strong>Timber/Twig</strong>, <strong>WordPress</strong>, <strong>Eloquent ORM</strong>, <strong>REST APIs</strong>, <strong>ACF Pro</strong>, Gutenberg Blocks, Composer, Artisan, <strong>MySQL</strong>, Redis, Queues, <strong>PHPUnit</strong>, <strong>Docker</strong>, Git, Vue.js, Inertia.js, SASS, Figma, <strong>AI Tools</strong>, SCRUM',
        'letter_intro' => 'Senior PHP Developer specializing in <strong>Laravel</strong> backend systems and <strong>Timber/Twig</strong> WordPress architectures — delivering clean, maintainable, and scalable full-stack solutions.',
        'letter_greeting' => 'To the Engineering Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'I am writing to express my strong interest in this position. With over two decades of PHP development experience, I have built a dual specialization that covers two of the most powerful tools in the modern PHP ecosystem: <strong>Laravel</strong> for robust backend and API development, and <strong>Timber/Twig</strong> for clean, MVC-style WordPress theming.',
            'On the <strong>Laravel</strong> side, I design and build <strong>RESTful APIs</strong> consumed by web and mobile clients, model complex data relationships with <strong>Eloquent ORM</strong>, and orchestrate background processing via <strong>Queues and Jobs</strong>. I implement secure authentication flows using <strong>Laravel Sanctum and Passport</strong>, and I follow <strong>SOLID principles</strong> and TDD practices using <strong>PHPUnit and Pest</strong> to deliver reliable, maintainable systems. I have used Laravel as a standalone backend and as an API middleware layer powering WordPress-based platforms.',
            'My <strong>Timber/Twig</strong> expertise allows me to architect WordPress themes that are a pleasure to work with: clean separation of PHP logic from HTML presentation, reusable template components, and readable, designer-friendly Twig markup. Combined with deep mastery of <strong>ACF Pro</strong>, custom post types, and taxonomies, I create editorial systems that are as powerful for content editors as they are elegant in code.',
            'I have extensive hands-on experience with enterprise <strong>WordPress</strong> projects — custom <strong>Gutenberg blocks</strong>, multilingual architectures with Polylang and WPML, and performance optimization via object caching (Redis, Memcached) and query tuning. Pairing this with <strong>Laravel</strong> backends gives me a complete full-stack PHP profile that covers the entire spectrum from database design to polished front-end implementation.',
            'I leverage <strong>AI-assisted development tools</strong> to accelerate development and maintain architectural consistency. I thrive in remote-first Agile environments and am confident I can contribute from day one to a team that demands technical excellence in the PHP and WordPress ecosystem.'
        ]
    ],

    'sgtech' => [
        'company' => 'Sg Tech (Frontend + LitElement)',
        'intro_title' => 'Senior Frontend Engineer | LitElement & Web Components Specialist',
        'intro_bio' => 'Senior Engineer with 20+ years of experience specializing in modern Frontend architectures, <strong>Web Components</strong>, and <strong>LitElement</strong>.',
        'intro_bio_2' => 'Expert in building scalable, enterprise-level digital ecosystems. Specialist in <strong>BBVA Corporate Frameworks (Cells)</strong> and high-performance UI components using <strong>JavaScript (ES6+)</strong> and <strong>SCSS</strong>.',
        'intro_bio_3' => 'Focus on software quality and reliability. High proficiency in unit testing with <strong>Chai and Mocha</strong>, ensuring robust delivery in production environments through <strong>Node.js</strong> and <strong>NPM</strong> workflows.',
        'intro_bio_4' => 'Expert in <strong>AI-Assisted Development</strong> for complex refactoring and architecture. I excel at translating <strong>APIs REST</strong> into modular, maintainable frontend systems.',
        'tech_stack' => '<strong>LitElement</strong>, <strong>Web Components</strong>, <strong>JavaScript (ES6+)</strong>, <strong>HTML5</strong>, <strong>CSS3</strong>, <strong>SCSS</strong>, <strong>APIs REST</strong>, <strong>Chai</strong>, <strong>Mocha</strong>, <strong>Node.js</strong>, <strong>NPM</strong>, Git, Figma, Agile/SCRUM',
        'letter_intro' => 'Senior Frontend Engineer specializing in <strong>LitElement</strong> and <strong>Web Components</strong>, with extensive experience in enterprise banking frameworks and <strong>Chai/Mocha</strong> testing.',
        'letter_greeting' => 'Hola Miguel,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'I am writing to express my interest in the <strong>Programador/a Frontend + LitElement</strong> position at Sg Tech. Having worked extensively with <strong>Web Components</strong> and <strong>LitElement</strong>—specifically within the <strong>BBVA Foundation</strong> projects via Minsait—I have a deep understanding of the technical requirements and the architectural consistency required for high-scale enterprise platforms.',
            'Throughout my career, I have mastered the <strong>JavaScript (ES6+)</strong> ecosystem, building robust UI systems that rely on <strong>APIs REST</strong>. My experience at the BBVA Foundation allowed me to specialize in <strong>Cells-based environments</strong> and the group\'s corporate Design Systems, where <strong>HTML5</strong>, <strong>CSS3</strong>, and <strong>SCSS</strong> are the pillars of a performant interface.',
            'I understand that the client demands a high level of technical rigor. To meet these standards, I implement <strong>unit testing with Chai and Mocha</strong> as a standard part of my workflow, ensuring that every component is reliable and maintainable. I am fully proficient in <strong>Node.js and NPM</strong> for dependency management and build automation, ensuring a modern and efficient development lifecycle.',
            'My approach combines deep technical expertise with <strong>AI-assisted development</strong> to accelerate production without compromising code quality. I am highly comfortable in 100% remote, Agile environments, utilizing Git and Jira for seamless team collaboration.',
            'I have attached my updated CV where you can find detailed information about the projects and functions performed that match the requirements of this role. I look forward to discussing how my experience with LitElement and enterprise frontend architecture can contribute to your team\'s success.'
        ]
    ],

    'ai-frontend' => [
        'company' => 'AI-Driven FrontEnd Developer',
        'intro_title' => 'FrontEnd Developer · AI Workflow Specialist',
        'intro_bio' => 'Senior FrontEnd Developer with 20+ years of experience and deep specialization in AI-accelerated development workflows. I combine a solid technical foundation with an AI-first methodology to deliver high-quality digital products faster and with greater architectural consistency.',
        'intro_bio_2' => 'Expert in <strong>AI-assisted development as a core methodology</strong> — not a shortcut. I apply advanced <strong>prompt engineering</strong> to architecture planning, complex refactoring, component generation, and automated documentation. My AI-first approach consistently produces clean, maintainable, production-ready code at a fraction of the traditional timeline.',
        'intro_bio_3' => 'Strategic bridge between <strong>Design and Development</strong>. Expert in <strong>Figma</strong> and <strong>Design Systems</strong>, I translate high-fidelity designs into pixel-perfect, performant implementations — with AI-powered workflows accelerating delivery at every layer of the stack.',
        'intro_bio_4' => 'Solid FrontEnd architecture background across <strong>React</strong>, <strong>VueJS</strong>, <strong>Angular</strong>, and modern <strong>CSS/SASS</strong> systems. Two decades of technical depth ensure that AI-generated output is always validated, refined, and truly production-ready.',
        'tech_stack' => '<strong>AI-Assisted Development</strong>, <strong>Prompt Engineering</strong>, <strong>HTML5</strong>, <strong>CSS3/SASS</strong>, JavaScript, TypeScript, <strong>React</strong>, <strong>VueJS</strong>, <strong>Angular</strong>, <strong>Figma</strong>, <strong>Design Systems</strong>, NodeJS, REST APIs, npm, GIT, SCRUM, WordPress, Python',
        'letter_intro' => 'Senior FrontEnd Developer with 20+ years of experience, specializing in <strong>AI-accelerated development workflows</strong> — combining deep technical expertise with advanced prompt engineering to deliver faster, higher-quality digital products.',
        'letter_greeting' => 'To the Hiring Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'I am writing to express my strong interest in joining your team. With over two decades of FrontEnd development experience, I have witnessed every major shift in how we build for the web — and the current AI era is the most transformative of all. I have not just adopted AI tools: I have made AI-assisted development a core part of my professional methodology.',
            'My approach centers on <strong>prompt engineering as a technical discipline</strong>. I use AI throughout the development lifecycle: to plan and validate architectural decisions before writing a single line of code, to generate and refactor modular components at scale, to produce consistent documentation automatically, and to prototype complex interactions in a fraction of the usual time. The result is not just speed — it is a higher baseline of consistency, readability, and maintainability across the codebase.',
            'What makes this approach genuinely effective is the technical depth behind it. Twenty years of FrontEnd experience — across <strong>React</strong>, <strong>VueJS</strong>, <strong>Angular</strong>, <strong>TypeScript</strong>, and sophisticated <strong>CSS/SASS</strong> architectures — means I can evaluate AI output critically, spot what needs refinement, and ensure every generated piece integrates cleanly into the broader system. AI amplifies expertise; it cannot substitute for it.',
            'I also bring a strong design sensibility to this work. As a natural bridge between <strong>Design and Development</strong>, I am a <strong>Figma</strong> expert who architects <strong>Design Systems</strong> and translates high-fidelity designs into pixel-perfect implementations. AI tools allow me to close the design-to-code gap faster than ever, while maintaining the quality that sophisticated digital products demand.',
            'I am eager to bring this AI-first, design-aware FrontEnd profile to your team — contributing not only to the quality of individual deliverables, but to a broader culture of intelligent, efficient, and sustainable development.'
        ]
    ]

];


// Determine the current target
// Support both ?for=target, /cv/target and /cv/letter/target formats

$request_uri = $_SERVER['REQUEST_URI'] ?? '';
if (preg_match('#/cv/letter/([a-z0-9_-]+)#i', $request_uri, $matches)) {
    $target_key = $matches[1];
} elseif (preg_match('#/cv/([a-z0-9_-]+)#i', $request_uri, $matches)) {
    $target_key = $matches[1];
} elseif (preg_match('#^/letter/([a-z0-9_-]+)$#i', $request_uri, $matches)) {
    $target_key = $matches[1];
} elseif (preg_match('#^/letter/?$#i', $request_uri)) {
    $target_key = 'generic';
} else {
    $target_key = $_GET['for'] ?? 'generic';
}

if (!isset($targets[$target_key])) {
    $target_key = 'generic';
}

$current = $targets[$target_key];
