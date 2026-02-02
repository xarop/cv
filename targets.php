<?php
/**
 * Configuration for different job applications.
 * Add a new target by adding an entry to the $targets array.
 */

$targets = [
    '10up' => [
        'company' => 'Fueled / 10up',
        'intro_title' => 'Senior Web Engineer',
        'intro_bio' => 'Senior engineer specialized in architecting enterprise-level WordPress ecosystems. Expert in modern PHP, sophisticated Gutenberg architecture, and high-performance system design.',
        'intro_bio_2' => 'Bridge between elegant design and robust engineering, with a focus on building maintainable, scalable solutions for global brands like BBVA, Vueling, and Ed. Planeta.',
        'intro_bio_4' => 'Power user of <strong>AI-assisted programming</strong> workflows (Cursor, VS Code) to build sustainable, well-documented, and scalable enterprise systems.',
        'tech_stack' => '<strong>Modern PHP</strong>, HTML5, CSS3, SASS, React, <strong>Gutenberg Blocks</strong>, <strong>Timber/Twig</strong>, API Rest, MySQL, Python, Angular, VueJS, Responsive Design, <strong>WordPress</strong>, <strong>Figma</strong>, <strong>AI (Cursor/Copilot)</strong>, Drupal, SEO, eCommerce, WooCommerce, SCRUM, GIT, NodeJS, npm',
        'letter_intro' => 'Architecting enterprise-level WordPress ecosystems for over 20 years, focusing on high-performance system design and sophisticated Gutenberg architecture.',
        'letter_greeting' => 'To the Fueled / 10up Hiring Team,',
        'letter_date' => 'February 2, 2026',
        'letter_body' => [
            'I am writing to express my strong interest in the <strong>Contract Senior Web Engineer</strong> position. With over two decades of experience at the intersection of high-end design and scalable engineering, I have dedicated my career to pushing the boundaries of what WordPress can achieve for enterprise-level clients.',
            'Throughout my recent work as a Lead Developer at Byteberry Studio, I have architected foundational systems for large-scale digital experiences, such as the <strong>Barcelona International Convention Centre (CCIB)</strong> and <strong>Bandalux</strong>. My approach combines deep WordPress expertise with modern PHP practices and sophisticated Gutenberg architecture using React.js. I thrive on transforming complex business requirements into performant, maintainable, and elegant technical solutions.',
            'My background as both a designer (Degree from Llotja) and a Senior Engineer allows me to bridge the gap between creative vision and technical execution. I am a master of the back-end lifecycle, a champion of code quality through meticulous peer reviews, and an expert in solving performance and caching challenges for platforms that handle high-volume traffic.',
            'Working in a distributed, remote-first environment like yours is where I perform best. I am a proactive collaborator and a strategic communicator, comfortable leading technical discussions and mentoring teams to elevate our collective output.',
            'I am eager to contribute my architectural expertise to your team and help shape the next generation of digital products for world-class brands. Thank you for your time and consideration.'
        ]
    ],
    
    // Example of another target:
    'generic' => [
        'company' => 'xarop.com',
        'intro_title' => 'Senior Web Engineer',
        'intro_bio' => 'Senior Engineer with over 20 years of experience architecting enterprise-level digital ecosystems. Expert in modern PHP, sophisticated WordPress architecture, and high-performance system design.',
        'intro_bio_2' => 'Expert <strong>Front-end Developer</strong> focused on building high-performance, responsive, and interactive interfaces. I specialize in bridging technical robustness with seamless user experiences.',
        'intro_bio_3' => 'Dedicated <strong>UI/UX Designer</strong> and <strong>Figma</strong> expert. I act as a strategic <strong>bridge</strong> between creative vision and engineering, architecting scalable <strong>Design Systems</strong> for sophisticated digital products.',
        'intro_bio_4' => 'Expert in <strong>AI-Assisted Development</strong>. I leverage <strong>Cursor</strong>, <strong>VS Code</strong>, and <strong>Antigravity</strong> using advanced models to accelerate production. I specialize in prompt engineering for complex refactoring, automated documentation, and building sustainable, high-performance systems.',
        'tech_stack' => '<strong>Modern PHP</strong>, HTML5, CSS3, SASS, React, <strong>Gutenberg Blocks</strong>, <strong>Timber/Twig</strong>, API Rest, MySQL, Python, Angular, VueJS, Responsive Design, <strong>WordPress</strong>, <strong>Figma</strong>, <strong>AI (Cursor/Copilot)</strong>, Drupal, SEO, eCommerce, WooCommerce, SCRUM, GIT, NodeJS, npm',
        'letter_intro' => '20+ years of experience in high-performance WordPress architecture and a proven ability to bridge the gap between sophisticated design and robust engineering.',
        'letter_greeting' => 'To the Hiring Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'I am writing to express my interest in joining your engineering team as a Senior Web Engineer.',
            'With over 20 years of experience, I have developed a deep expertise in WordPress architecture, modern PHP, and building high-performance web applications.',
            'I am passionate about creating clean, maintainable code and bridging the gap between design and technology.',
            'Thank you for considering my application.'
        ]
    ],

    'wordpress' => [
        'company' => 'WordPress Specialist',
        'intro_title' => 'Senior WordPress Engineer',
        'intro_bio' => 'Senior WordPress Architect with 20+ years of experience building high-scale, custom digital solutions. Expert in developing bespoke themes and plugins from the ground up.',
        'intro_bio_2' => 'Specialized in <strong>Custom Gutenberg Blocks</strong> , professional <strong>ACF Pro</strong> implementation, and <strong>REST API</strong> integrations to create seamless, decoupled or hybrid experiences.',
        'intro_bio_3' => 'Master of complex <strong>Multilingual Architectures</strong> (Polylang, WPML) for global enterprise sites, ensuring performance, scalability, and an optimal editing experience for content creators.',
        'intro_bio_4' => 'Power user of <strong>Cursor</strong> and <strong>AI-assisted programming</strong> workflows. I use advanced prompting to document architecture and ensure code sustainability.',
        'tech_stack' => '<strong>Modern PHP</strong>, HTML5, CSS3, SASS, React, <strong>Gutenberg Blocks</strong>, <strong>Timber/Twig</strong>, API Rest, MySQL, Python, Angular, VueJS, Responsive Design, <strong>WordPress</strong>, <strong>Figma</strong>, <strong>AI (Cursor/Copilot)</strong>, Drupal, SEO, eCommerce, WooCommerce, SCRUM, GIT, NodeJS, npm',
        'letter_intro' => 'Expert in bespoke <strong>WordPress engineering</strong>, from sophisticated custom Gutenberg blocks to enterprise-level multilingual architectures and REST API integrations.',
        'letter_greeting' => 'To the WordPress Engineering Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'As a <strong>Senior WordPress Engineer</strong> with over two decades of experience, I have moved far beyond simple implementations to architecting robust, custom-built ecosystems for global brands.',
            'My expertise lies in building everything from scratch: I develop <strong>bespoke themes and high-performance plugins</strong> that follow modern PHP standards and security best practices. I am an expert in the professional use of <strong>ACF Pro</strong> and have a deep command of <strong>Custom Gutenberg Blocks</strong> development, providing clients with intuitive and powerful editing tools.',
            'I have a proven track record in managing complex <strong>multilingual platforms</strong> using Polylang and WPML, ensuring that large-scale sites remain performant and easy to manage across dozens of regions. Furthermore, my experience with the <strong>REST API</strong> allows me to integrate WordPress into broader technical stacks, whether for decoupled front-ends or complex third-party data synchronizations.',
            'I don’t just build websites; I engineer scalable digital products that bridge the gap between sophisticated design and technical excellence. I am eager to bring my deep WordPress knowledge to your most challenging projects.'
        ]
    ]
];

// Determine the current target
$target_key = $_GET['for'] ?? 'generic';
if (!isset($targets[$target_key])) {
    $target_key = 'generic';
}

$current = $targets[$target_key];
