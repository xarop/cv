<?php
/**
 * Configuration for different job applications.
 * Add a new target by adding an entry to the $targets array.
 */

$targets = [
    'default' => [
        'company' => 'Fueled / 10up',
        'intro_title' => 'Senior Web Engineer',
        'intro_bio' => 'Senior engineer specialized in architecting enterprise-level WordPress ecosystems. Expert in modern PHP, sophisticated Gutenberg architecture, and high-performance system design.',
        'intro_bio_2' => 'Bridge between elegant design and robust engineering, with a focus on building maintainable, scalable solutions for global brands like BBVA, Vueling, and Ed. Planeta.',
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
        'intro_bio' => 'Senior engineer specialized in architecting enterprise-level WordPress ecosystems. Expert in modern PHP, sophisticated Gutenberg architecture, and high-performance system design.',
        'intro_bio_2' => 'Bridge between elegant design and robust engineering, with a focus on building maintainable, scalable solutions.',
        'letter_greeting' => 'To the Hiring Team,',
        'letter_date' => date('F j, Y'),
        'letter_body' => [
            'I am writing to express my interest in joining your engineering team as a Senior Web Engineer.',
            'With over 20 years of experience, I have developed a deep expertise in WordPress architecture, modern PHP, and building high-performance web applications.',
            'I am passionate about creating clean, maintainable code and bridging the gap between design and technology.',
            'Thank you for considering my application.'
        ]
    ]
];

// Determine the current target
$target_key = $_GET['for'] ?? 'generic';
if (!isset($targets[$target_key])) {
    $target_key = 'generic';
}

$current = $targets[$target_key];
