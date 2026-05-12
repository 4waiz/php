<?php
/**
 * Site config: navigation, stats, services, news, awards, contact details.
 * Edit content here to update across the site.
 */

if (!isset($CURRENT_PAGE)) {
    $CURRENT_PAGE = basename($_SERVER['PHP_SELF']);
}

$SITE_TITLE = 'BRIDGE — Innovate. Transform. Elevate.';

$NAV_ITEMS = [
    ['label' => 'Home',          'href' => 'index.php'],
    ['label' => 'About Us',      'href' => 'about-us.php'],
    ['label' => 'Our Services',  'href' => 'our-services.php'],
    ['label' => 'Our Ecosystem', 'href' => 'ecosystem.php'],
    ['label' => 'News',          'href' => 'news.php'],
    ['label' => 'Contact Us',    'href' => 'contact-us.php'],
];

$STATS_PRIMARY = [
    ['label' => 'Programs launched',                'target' => 72,    'format' => 'd',       'plus' => true],
    ['label' => 'Interactive simulations and games','target' => 25,    'format' => 'd',       'plus' => true],
    ['label' => 'Global certifications',            'target' => 7,     'format' => 'd',       'plus' => false],
];

$STATS_SECONDARY = [
    ['label' => 'Trainee days',                                'target' => 22098, 'format' => '(,ddd)', 'plus' => true,  'suffix' => null],
    ['label' => 'NPS participation, advocacy, and satisfaction','target' => 95,   'format' => 'd',      'plus' => false, 'suffix' => '%', 'gt' => true],
];

$SERVICES = [
    ['index' => '01', 'name' => 'Strategic Consulting'],
    ['index' => '02', 'name' => 'Business Transformation and Advanced Solutions'],
    ['index' => '03', 'name' => 'Upskilling Programs'],
    ['index' => '04', 'name' => 'Hackathons, Makeathons, Innovation Challenges'],
];

$NEWS_ITEMS = [
    [
        'tags'    => ['Defence', 'Manufacturing'],
        'title'   => 'EDGE CHARTS DEFENCE MANUFACTURING PROGRESS AT MAKE IT IN THE EMIRATES 2026',
        'excerpt' => "EDGE Group will participate as an Enablement Partner at Make It in the Emirates (MIITE) 2026, spotlighting its landmark achievements in supply chain localisation, smart manufacturing, talent development, and technological advancements. The Group's participation underscores its pivotal role in advancing the UAE's industrial defence sovereignty and its full alignment with Operation 300bn and the MIITE initiative.",
        'image'   => 'assets/images/news_01.webp',
        'alt'     => 'EDGE Group at Make It In The Emirates 2026',
        'href'    => 'https://edgegroup.ae/news/edge-charts-defence-manufacturing-progress-make-it-emirates-2026',
    ],
    [
        'tags'    => ['Defence', 'Made in UAE'],
        'title'   => 'EDGE CHAMPIONS MADE IN UAE DEFENCE CAPABILITIES AT MIITE 2025',
        'excerpt' => "As the UAE's national champion for advanced technology and defence manufacturing, EDGE Group is using its presence at the Make it in the Emirates Forum 2025 (MIITE 2025) to showcase its central role in accelerating the UAE's sovereign defence industry and building a globally competitive industrial ecosystem.",
        'image'   => 'assets/images/news_02.webp',
        'alt'     => 'EDGE Group at MIITE 2025',
        'href'    => 'https://edgegroup.ae/news/edge-champions-made-uae-defence-capabilities-miite-2025',
    ],
    [
        'tags'    => ['Partnerships', 'Innovation'],
        'title'   => 'EDGE BRIDGE ESTABLISHES PARTNERSHIP WITH QUANTASIM TO EMPOWER LOCAL TALENT IN INNOVATIVE ENGINEERING',
        'excerpt' => "EDGE's Learning and Innovation Factory (BRIDGE), a hub that offers advanced upskilling and technology-driven solutions to enhance manufacturing excellence and innovation in the defence and industrial sectors, has announced a collaboration with QuantaSim, a leading consulting and training firm specialising in cutting-edge engineering solutions, for an Engineering Bootcamp Program.",
        'image'   => 'assets/images/news_03.webp',
        'alt'     => 'EDGE BRIDGE and Quantasim partnership',
        'href'    => 'https://edgegroup.ae/news/edge-lif-establishes-partnership-quantasim-empower-local-talent-innovative-engineering',
    ],
    [
        'tags'    => ['MoU', 'Industry 4.0'],
        'title'   => "EDGE AND MINISTRY OF INDUSTRY AND ADVANCED TECHNOLOGY SIGN MOU TO ADVANCE UAE'S INDUSTRY 4.0",
        'excerpt' => "Under the National Strategy for Industry and Advanced Technology, Operation 300bn, EDGE Group's Learning & Innovation Factory (BRIDGE) and the Ministry of Industry and Advanced Technology (MoIAT) have signed a Memorandum of Understanding (MoU). BRIDGE is a hub that offers advanced upskilling and technology-driven solutions to enhance manufacturing excellence and innovation in the defence and industrial sectors.",
        'image'   => 'assets/images/news_04.webp',
        'alt'     => 'EDGE and MoIAT MoU signing',
        'href'    => 'https://edgegroup.ae/news/edge-and-ministry-industry-and-advanced-technology-sign-mou-advance-uaes-industry-40',
    ],
];

$AWARDS = [
    ['title' => 'ISO 21001:2025 Certification',     'delay' => '0.06s'],
    ['title' => 'Lead Operational Excellence Award','delay' => '0.12s'],
];

$ECOSYSTEM_LOGOS = [
    'assets/images/ecosystem/logo-1.png',
    'assets/images/ecosystem/logo-2.png',
    'assets/images/ecosystem/logo-3.png',
    'assets/images/ecosystem/logo-4.png',
    'assets/images/ecosystem/logo-5.png',
    'assets/images/ecosystem/logo-6.png',
    'assets/images/ecosystem/logo-7.png',
];

$CONTACT = [
    'address'      => 'Al Rubban Street, Al Bahyah <br> P.O. Box 43221,<br>Abu Dhabi, UAE',
    'address_link' => 'https://maps.google.com/?q=Rabdan+Al+Maqta+Abu+Dhabi+UAE',
    'phone'        => '+97122056500',
    'email'        => 'BRIDGE@edgegroup.ae',
];

/**
 * Helper: render the small orange/white arrow icon used on every CTA.
 * $orange_first true => first arrow is orange (#FE5620), second is white
 * $orange_first false => both white (hero button style)
 */
if (!function_exists('bridge_btn_icon')):
function bridge_btn_icon(bool $orange_first = true, string $second_color = 'white'): string {
    $a_color = $orange_first ? '#FE5620' : 'white';
    $b_color = $second_color;
    $svg = function(string $cls, string $stroke) {
        return '<svg class="btn__arrow ' . $cls . '" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">'
             . '<path d="M2 11L11 2M11 2H5M11 2V8" stroke="' . htmlspecialchars($stroke) . '" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />'
             . '</svg>';
    };
    return '<span class="btn__icon" aria-hidden="true">'
        . $svg('btn__arrow--a', $a_color)
        . $svg('btn__arrow--b', $b_color)
        . '</span>';
}

endif;

/** Helper: render the service-card arrow (uses currentColor). */
if (!function_exists('bridge_service_arrow')):
function bridge_service_arrow(): string {
    return '<span class="services__arrow" aria-hidden="true">'
        . '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">'
        . '<path d="M4 14L14 4M14 4H7.5M14 4V10.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />'
        . '</svg>'
        . '</span>';
}
endif;
