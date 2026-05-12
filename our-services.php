<?php
$CURRENT_PAGE = 'our-services.php';
$PAGE_TITLE   = 'BRIDGE — Our Services';
$BODY_CLASS   = 'inner-page';
$MAIN_CLASS   = 'services-page inner-page-top';
require __DIR__ . '/includes/config.php';
include   __DIR__ . '/includes/header.php';

$SERVICE_PANELS = [
    [
        'id'         => 'service-01',
        'index'      => '01',
        'short'      => '01 Strategic Consulting',
        'nav_label'  => 'Strategic Consulting',
        'title'      => 'Strategic Consulting',
        'copy'       => [
            "BRIDGE collaborates with organisations to turn strategy into action and challenges into opportunities for growth. Our consultancy services are grounded in extensive expertise in Lean management, quality management, Six Sigma, agile methodology, Industry 5.0, analytics, and artificial intelligence – integrated to create sustainable, end-to-end transformations.",
            "From operational excellence and process optimisation to digital innovation and data-driven decision-making, we work side by side with your teams to identify opportunities, eliminate inefficiencies, and unlock value.",
            "Our approach is pragmatic and impact-focused: BRIDGE doesn't just advise, we implement, coach, and ensure capabilities are embedded within your organisation. This begins with understanding customer needs, followed by assessments and roadmap design. We complement this with training and people development, then implement pilots, scale up, and finally validate the results.",
            "Whether your goal is to improve performance, accelerate innovation, or build a future-ready operation, BRIDGE guides you to achieve tangible results with lasting impact.",
        ],
        'capabilities' => [
            'Operational excellence assessments and transformation roadmaps',
            'ITTI assessments and roadmaps',
            'Value delivery and improvement programs',
            'Process transformation and continuous improvement (Kaizen)',
            'Lean enterprise transformation',
            'Performance management and operational intelligence',
            'Production preparation process (Lean 3P)',
            'Simulations and advanced analytics',
        ],
        'cta' => true,
    ],
    [
        'id'         => 'service-02',
        'index'      => '02',
        'short'      => '02 Business Transformation',
        'nav_label'  => 'Business Transformation and Advanced Solutions',
        'title'      => 'Business Transformation and Advanced Solutions',
        'copy'       => [
            "Organisational success involves elevating operations to the next level. With expertise across a range of business transformation capabilities, BRIDGE assists companies in achieving key objectives such as increased productivity, greater agility, improved collaboration, enhanced resilience, and better preparation for business uncertainties, opportunities, and risks.",
            "BRIDGE leverages some of the most impactful organisational transformation tools, technologies, and techniques, including generative AI and agentic systems, data analytics, agile and readiness assessments, transformation roadmaps, and scenario planning.",
        ],
        'capabilities' => [
            'Artificial intelligence',
            'Analytics',
            'Agile and business agility',
            'Agile methodology',
            'Industry 5.0',
            'Strategic scenario planning',
        ],
    ],
    [
        'id'         => 'service-03',
        'index'      => '03',
        'short'      => '03 Upskilling Programs',
        'nav_label'  => 'Upskilling Programs',
        'title'      => 'Upskilling Programs',
        'copy'       => [
            "In a business environment of constant flux, with emerging challenges and opportunities, BRIDGE delivers the breadth and depth of training and development programs to equip your leaders and teams with the skills essential for success. Our training curricula combine proven methodologies – Lean management, Six Sigma, agile methodology and quality – with cutting-edge capabilities in Industry 5.0, analytics and artificial intelligence.",
            "Designed to deliver practical, results-driven outcomes, our sessions go beyond theory, enabling teams to solve real problems, optimise performance, and build a culture of excellence.",
            "Whether you are starting your transformation journey or accelerating advanced capabilities, BRIDGE provides the tools, mindset, and expertise to turn your ambitions into success.",
        ],
        'capabilities' => [
            'Lean management', 'Six Sigma', 'Agile methodology', 'ISO standards', 'Innovation management',
            'Industry 5.0', 'Data analytics and IoT', 'Artificial intelligence', 'Engineering',
        ],
    ],
    [
        'id'         => 'service-04',
        'index'      => '04',
        'short'      => '04 Hackathons & Challenges',
        'nav_label'  => 'Hackathons, Makeathons, Innovation Challenges',
        'title'      => 'Hackathons, Makeathons, Innovation Challenges',
        'copy'       => [
            "Many organisations struggle to turn ideas into execution. Innovation is often slowed by siloed teams, rigid processes, and a lack of clear pathways from concept to deployment. As a result, most ideas never get the oxygen or space they need to succeed.",
            "BRIDGE creates opportunities for organisations to nurture and accelerate innovation – fast. Through structured, high-impact innovation events, we compress months of discovery into days of results, enabling teams to collaborate, prototype, and validate solutions in real time.",
            "What does this mean? Ten-times faster idea-to-prototype cycles, three times more validated concepts generated, up to 40% implementation rate of devised solution, and long-lasting culture benefits, including higher employee engagement and an embedded innovation mindset.",
        ],
        'capabilities' => [
            'Hackathons (digital and data innovation)',
            'Makeathons (hardware, IoT, prototyping)',
            'Innovation challenges (strategic problem solving)',
            'Rapid prototyping and concept validation',
            'Cross-functional collaboration and facilitation',
            'Innovation pipeline design and execution',
            'From idea to pilot to scale-up',
        ],
        'technologies' => [
            'Smart IoT and connected systems solutions',
            'Advanced digital twin and simulation technologies',
            'AI-enabled cloud, edge, and cyber-physical systems',
            'Smart manufacturing, automation, robotics, and additive technologies',
            'Immersive and human-centric technologies',
            'Sustainable and autonomous systems',
        ],
    ],
];
?>

<section class="services-page__hero inner-page-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-page__intro">
                    <h1 class="services-page__title title-animation">Our Services</h1>
                    <p class="services-page__subtitle title-animation">Transformation begins with knowledge.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-page__section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-page__panel">
                    <aside class="services-page__nav revealmetop">
                        <div class="services-page__mobile-select-wrap">
                            <span class="services-page__mobile-label">Service</span>
                            <div class="services-page__mobile-tabs" role="tablist" aria-label="Select service">
                                <?php foreach ($SERVICE_PANELS as $i => $sp): ?>
                                    <button class="services-page__mobile-tab<?= $i === 0 ? ' services-page__mobile-tab--active' : '' ?>"
                                        type="button" data-service-target="<?= $sp['id'] ?>" aria-pressed="<?= $i === 0 ? 'true' : 'false' ?>">
                                        <?= htmlspecialchars($sp['short']) ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <?php foreach ($SERVICE_PANELS as $i => $sp): ?>
                            <button class="services-page__nav-item<?= $i === 0 ? ' services-page__nav-item--active' : '' ?>" type="button"
                                data-service-target="<?= $sp['id'] ?>" aria-pressed="<?= $i === 0 ? 'true' : 'false' ?>">
                                <span class="services-page__nav-index"><?= htmlspecialchars($sp['index']) ?></span>
                                <span class="services-page__nav-label"><?= htmlspecialchars($sp['nav_label']) ?></span>
                            </button>
                        <?php endforeach; ?>
                    </aside>

                    <div class="services-page__content-wrap">
                        <?php foreach ($SERVICE_PANELS as $i => $sp): ?>
                            <article class="services-page__content<?= $i === 0 ? ' services-page__content--active' : '' ?>"
                                data-service-panel="<?= $sp['id'] ?>"<?= $i === 0 ? '' : ' hidden' ?>>
                                <div class="services-page__content-header revealmetop">
                                    <span class="services-page__content-index"><?= htmlspecialchars($sp['index']) ?></span>
                                    <h3 class="services-page__content-title title-animation"><?= htmlspecialchars($sp['title']) ?></h3>
                                </div>

                                <div class="services-page__copy">
                                    <?php foreach ($sp['copy'] as $p): ?>
                                        <p><?= htmlspecialchars($p) ?></p>
                                    <?php endforeach; ?>
                                </div>

                                <?php if (!empty($sp['capabilities'])): ?>
                                    <div class="services-page__capabilities revealmetop">
                                        <h3 class="services-page__capabilities-title">Capabilities</h3>
                                        <ul class="services-page__capabilities-list">
                                            <?php foreach ($sp['capabilities'] as $cap): ?>
                                                <li><?= htmlspecialchars($cap) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($sp['technologies'])): ?>
                                    <div class="services-page__capabilities revealmetop">
                                        <h3 class="services-page__capabilities-title">Technologies</h3>
                                        <ul class="services-page__capabilities-list">
                                            <?php foreach ($sp['technologies'] as $t): ?>
                                                <li><?= htmlspecialchars($t) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($sp['cta'])): ?>
                                    <a class="btn btn--outline services-page__cta revealmetop" href="#" data-case-study-open>
                                        <span>View Case Study</span>
                                        <span class="btn__icon" aria-hidden="true">
                                            <svg class="btn__arrow btn__arrow--a" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.145 10.855L10.855 2.145M4.322 2H11V8.678" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <svg class="btn__arrow btn__arrow--b" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.145 10.855L10.855 2.145M4.322 2H11V8.678" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="case-study-modal" data-case-study-modal hidden>
    <div class="case-study-modal__backdrop" data-case-study-close></div>
    <div class="case-study-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="case-study-title">
        <button class="case-study-modal__close" type="button" aria-label="Close case study" data-case-study-close>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L18 18M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </button>
        <div class="case-study-modal__content">
            <h2 class="case-study-modal__title" id="case-study-title">Case Study: Long Lead Time</h2>
            <div class="case-study-modal__copy">
                <p>With customer proposal lead times undermining service competitiveness and customer satisfaction, a client asked BRIDGE to facilitate a solution. Leveraging its Lean Management expertise, BRIDGE led a focused office Kaizen event to diagnose and address these issues and position the team to win more contracts.</p>
                <p>Working with the client, BRIDGE began with a mapping exercise to understand the status quo by collecting facts and data from across the process. This work identified various forms of waste and the root causes of the slow turnaround. With clear visibility into the challenges, BRIDGE and the client defined a new workflow that addressed the root causes of delays and shrank the proposal response time by 73%. Customer satisfaction has also fully recovered.</p>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
