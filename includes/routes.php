<?php
// Define known paths and their corresponding metadata for frontend
$routes = [
    '' => [
        'file' => 'home.php',
        'meta' => '<title>Green Fort UAE | Welcome to Our Homepage</title>
                   <meta name="description" content="Welcome to Green Fort UAE, a leader in sustainable construction in Dubai.">
                   <meta name="keywords" content="Green Fort UAE, homepage, sustainable construction, Dubai">',
    ],
    'about' => [
        'file' => 'about.php',
        'meta' => '<title>About Us | Green Fort UAE</title>
                   <meta name="description" content="Learn more about Green Fort UAE, our values, vision, and mission.">
                   <meta name="keywords" content="about us, Green Fort UAE, company values, vision, mission">',
    ],
    'portfolio' => [
        'file' => 'portfolio.php',
        'meta' => '<title>Our Portfolio | Green Fort UAE</title>
                   <meta name="description" content="Explore our portfolio showcasing various construction projects completed by Green Fort UAE.">
                   <meta name="keywords" content="portfolio, projects, construction, Green Fort UAE">',
    ],
    'services' => [
        'file' => 'services.php',
        'meta' => '<title>Our Services | Green Fort UAE</title>
                   <meta name="description" content="Discover the wide range of construction services offered by Green Fort UAE.">
                   <meta name="keywords" content="services, construction, building, Green Fort UAE">',
    ],

    'contact' => [
        'file' => 'contact.php',
        'meta' => '<title>Contact Us | Green Fort UAE</title>
                   <meta name="description" content="Get in touch with Green Fort UAE for inquiries and quotes.">
                   <meta name="keywords" content="contact, inquiries, Green Fort UAE, quote">',
    ],
    'careers' => [ // New careers section
        'file' => 'careers.php',
        'meta' => '<title>Careers | Green Fort UAE</title>
               <meta name="description" content="Join our team at Green Fort UAE and explore exciting career opportunities in construction.">
               <meta name="keywords" content="careers, jobs, employment, Green Fort UAE, construction opportunities">',
    ],
    'job-apply' => [ // Job Apply section
        'file' => 'job-apply.php',
        'meta' => '<title>Job Application | Green Fort UAE</title>
               <meta name="description" content="Apply for a job at Green Fort UAE and become a part of our innovative team.">
               <meta name="keywords" content="job application, careers, apply, Green Fort UAE, construction jobs">',
    ],
    'privacy-policy' => [ // Privacy Policy section
        'file' => 'privacy-policy.php',
        'meta' => '<title>Privacy Policy | Green Fort UAE</title>
               <meta name="description" content="Read the privacy policy of Green Fort UAE to understand how we collect, use, and protect your personal information.">
               <meta name="keywords" content="privacy policy, data protection, personal information, Green Fort UAE, user privacy">',
    ],

];

$adminRoutes = [
    'login' => [
        'file' => 'login.php',
        'title' => 'Login to Admin Dashboard',
        'description' => 'Login to Admin Dashboard',
    ],
    'home' => [
        'file' => 'home.php',
        'title' => 'Admin Dashboard',
        'description' => 'This is the admin dashboard',
        'label' => 'Dashboard',
        'icon' => 'fa-home'
    ],
    'addnewimage' => [
        'file' => 'add-new-image.php',
        'title' => 'Add New Images',
        'description' => 'Images',
        'label' => 'Add Images',
        'icon' => 'fa-plus'
    ],
    'hero' => [
        'file' => 'hero-images.php',
        'title' => 'Manage Hero Slider Images',
        'description' => 'Manage Hero Slider Images',
        'label' => 'Hero Slider',
        'icon' => 'fa-sliders-h'
    ],
    'photoshoot' => [
        'file' => 'photoshoot.php',
        'title' => 'Manage PhotoShoot Images',
        'description' => 'Manage PhotoShoot Images',
        'label' => 'PhotoShoot',
        'icon' => 'fa-camera'
    ],
    'gallery' => [
        'file' => 'gallery.php',
        'title' => 'Manage Gallery Images',
        'description' => 'Manage Gallery Images',
        'label' => 'Gallery',
        'icon' => 'fa-images'
    ],
    'blogpost' => [
        'file' => 'blogpost.php',
        'title' => 'Add/Edit Blog Post',
        'description' => 'Manage Blog Post',
        'label' => 'Manage Blog Post',
        'icon' => 'fa-tasks'
    ],
    'blogs' => [
        'file' => 'blogs.php',
        'title' => 'Manage Blog Posts',
        'description' => 'Manage Blog Posts',
        'label' => 'Blogs',
        'icon' => 'fa-blog'
    ],
    'contact-form' => [
        'file' => 'contact-form-data.php',
        'title' => 'Contact Form Data',
        'description' => 'Contact Form Data Filled by Users.',
        'label' => 'Contact Form Data',
        'icon' => 'fa-envelope'
    ],
    'getquote-form' => [
        'file' => 'getquote-form-data.php',
        'title' => 'Get Quote Form Data',
        'description' => 'Get Quote Form Data Filled by Users.',
        'label' => 'Get Quote Form Data',
        'icon' => 'fa-file-alt'
    ],
    'settings' => [
        'file' => 'settings.php',
        'title' => 'Settings',
        'description' => 'This is the admin settings page',
        'label' => 'Settings',
        'icon' => 'fa-cog'
    ],
    // Add more routes as needed
];


$apiRoutes = [
    "send-mail" => "send-mail.php",
];

// Default 404 route
$defaultRoute = [
    'file' => '404.php',
    'meta' => '<title>Welcome to homepage</title>
                   <meta name="description" content="This is the landing page">
                   <meta name="keywords" content="homepage, welcome, landing page">'
];
