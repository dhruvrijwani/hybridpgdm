<?php
/*
 * All words on the Hybrid PGDM landing page.
 *
 * Source: "Welingkar Landing page Content.docx" (November 2026), with the approved
 * wording of the earlier content PDF where the new document leaves a gap (FAQ answers,
 * eligibility, alumni quotes and figures from the live page).
 *
 * Editing: change the text between the quotes. Keep the keys (the words before =>).
 * Allowed inline tags in text: <b>, <strong>, <em>, <br>, <span class="hl">.
 * Items marked 'placeholder' => true are dummy content waiting for Welingkar material.
 */

return [

    'meta' => [
        'title'       => 'Welingkar 360° Hybrid PGDM | Online PGDM for Working Professionals | WeSchool',
        'description' => 'Experience our online PGDM programme designed for working professionals, combining flexible learning, global credentials, industry exposure, expert interactions and collaboration. 42 Harvard ManageMentor® courses, 18 specialisations, AICTE approved.',
        'og_image'    => 'assets/img/og-image.jpg',
    ],

    // Section order on the page. Remove a key to hide a section, move it to reorder.
    'order' => [
        'hero', 'proof', 'programme', 'harvard', 'accolades', 'who', 'comparison', 'why',
        'stories', 'fees', 'evolve', 'learn', 'playbook', 'certifications', 'specialisations',
        'legacy', 'alumni', 'steps', 'curriculum', 'faq',
    ],

    'nav' => [
        ['label' => 'Programme',                'href' => '#programme'],
        ['label' => 'About',                    'href' => '#legacy'],
        ['label' => 'Experience',               'href' => '#learn'],
        ['label' => 'Admission & fees',         'href' => '#fees'],
        ['label' => 'Alumni & Student Stories', 'href' => '#stories'],
    ],

    /* 1 ─ Hero (Figma: "Landing page final") */
    'hero' => [
        'label'    => 'Welingkar Institute of Management',   // the page's H1
        'h1'       => 'We are GenWe',
        'sub'      => '360° Hybrid PGDM',
        'chips'    => ['2-Year Programme', 'AICTE Approved', '18 Specialisations', 'AI-first curriculum'],
        'harvard'  => '42 Interactive Harvard Courses',
        'tags'     => ['Global meets future', 'Largest network', 'Multi-modal learning', 'Rankings'],
        'trust'    => [
            ['logo' => 'logo-aicte.webp', 'alt' => 'AICTE', 'text' => 'Recognised by AICTE, Government of India.'],
            ['logo' => 'logo-acbsp.webp', 'alt' => 'ACBSP', 'text' => 'A global business education accreditation'],
        ],
        'cta'      => 'Apply Now',
        'cta_alt'  => 'Download Brochure',
        'seo_note' => 'For learners comparing an online MBA program with a Hybrid PGDM, Welingkar Institute of Management provides programme information to help you review the learning format, curriculum and qualification. If you are exploring an online PGDM in Mumbai, check the official programme details before applying.',
    ],

    /* 2 ─ Proof points (Figma) */
    'proof' => [
        ['value' => '40',   'suffix' => '',  'label' => 'Years of Welingkar Legacy'],
        ['value' => '1.5',  'suffix' => 'L', 'label' => 'Alumni Community'],
        ['value' => '18',   'suffix' => '',  'label' => 'Future-forward Specialisations'],
    ],

    /* 3 ─ Programme */
    'programme' => [
        'title' => 'Welingkar 360° Hybrid PGDM',
        'intro' => 'Experience our online PGDM programme designed for working professionals, combining flexible learning, global credentials, industry exposure, expert interactions and collaboration to build capabilities for an evolving world.',
        'image' => ['src' => 'photo-classroom.webp', 'alt' => 'Students in a WeSchool classroom'],
        'image_caption' => 'Learning at WeSchool',
        'features' => [
            ['icon' => 'experiential', 'title' => 'Experiential Learning',            'text' => 'Go beyond course material through workshops and practical learning experiences.'],
            ['icon' => 'factory',      'title' => 'Workshops & Industry Visits',      'text' => 'Extend classroom learning through workshops, industry visits and simulation-based activities.'],
            ['icon' => 'book',         'title' => 'Cutting-Edge Curriculum',          'text' => 'Study through a contemporary management curriculum supported by relevant case studies and practical learning.'],
            ['icon' => 'people',       'title' => 'Personal Contact Programs',        'text' => 'Opt for Personal Contact Programs for additional academic interaction.'],
            ['icon' => 'mic',          'title' => 'Learn from Industry Experts',      'text' => 'Gain learning exposure through online and offline training led by industry professionals.'],
            ['icon' => 'clock',        'title' => 'Flexible Lecture & Exam Timings',  'text' => 'Manage your learning around your professional and personal commitments.'],
            ['icon' => 'always',       'title' => '24/7 Learning Access',             'text' => 'Access your online PGDM learning content whenever it fits your schedule.'],
            ['icon' => 'screen',       'title' => 'Virtual Classroom',                'text' => 'Learn through an accessible online classroom environment for flexible PGDM learning.'],
        ],
        'cta' => 'Apply Now',
    ],

    /* 4 ─ Harvard */
    'harvard' => [
        'kicker' => 'Harvard Business Impact',
        'title'  => '42 Courses. Harvard Insights. More Ways to Grow.',
        'intro'  => 'Complimentary access to 42 Harvard ManageMentor® certification courses during the first year, developed by Harvard Business Publishing.',
        'points' => [
            ['icon' => 'tap',    'title' => 'Interactive Learning', 'text' => 'Explore management concepts through engaging, interactive learning experiences.'],
            ['icon' => 'ribbon', 'title' => 'Expert Instruction',   'text' => 'Access management insights and learning content developed by Harvard Business Publishing.'],
            ['icon' => 'target', 'title' => 'Actionable Learning',  'text' => 'Connect management concepts to practical workplace challenges.'],
            ['icon' => 'check',  'title' => 'Self-Assessment',      'text' => 'Test your understanding and reflect on your learning progress.'],
            ['icon' => 'badge',  'title' => 'Digital Badges',       'text' => 'Earn digital badges for completed courses to recognise and showcase your learning achievements.'],
        ],
    ],

    /* 5 ─ Recognition */
    'accolades' => [
        'title'    => 'Recognised. Accredited. Assured.',
        'ranks'    => [
            ['value' => '1',  'label' => 'Private Business School in Mumbai'],
            ['value' => '14', 'label' => 'Private Business School in India'],
        ],
        'rank_source' => [
            ['name' => 'Business India', 'logo' => 'logo-business-india.webp'],
            ['name' => 'Outlook Money',  'logo' => 'logo-outlook-money.webp'],
        ],
        'seals'    => [
            ['logo' => 'logo-nirf.webp',  'name' => 'NIRF 2025',  'status' => 'Recognised'],
            ['logo' => 'logo-acbsp.webp', 'name' => 'ACBSP Accreditation', 'status' => '10 Years'],
            ['logo' => 'logo-aicte.webp', 'name' => 'AICTE',      'status' => 'Approved'],
        ],
        'cta' => 'Apply Now',
    ],

    /* 6 ─ Who should apply */
    'who' => [
        'kicker'   => 'Who should apply',
        'title'    => 'You are GenWe',
        'personas' => [
            ['title' => 'Working Professional', 'img' => 'persona-professional.webp', 'tone' => 'lime',   'text' => 'Strengthen your management capabilities with a flexible online PGDM while continuing your professional journey.'],
            ['title' => 'Recent Graduate',      'img' => 'persona-graduate.webp',     'tone' => 'lilac',  'text' => 'Build a strong foundation through a flexible PGDM and prepare for the next stage of your career.'],
            ['title' => 'Career Growth Seeker', 'img' => 'persona-growth.webp',       'tone' => 'green',  'text' => 'Add formal management education to your experience and prepare for your next career move through Online PGDM.'],
            ['title' => 'Business Builder',     'img' => 'persona-builder.webp',      'tone' => 'purple', 'text' => 'Develop structured management knowledge to strengthen the way you build and manage your business through practical PGDM learning.'],
            ['title' => 'Flexible Learner',     'img' => 'persona-flexible.webp',     'tone' => 'lav',    'text' => 'Pursue a PGDM through a flexible hybrid format that works around your existing commitments, with flexible online learning.'],
        ],
    ],

    /* 7 ─ MBA vs PGDM */
    'comparison' => [
        'title' => 'MBA vs PGDM: Which Keeps Pace With Business?',
        'lead'  => 'Both build management foundations. The difference lies in how the curriculum can respond to a changing business world.',
        'rows'  => [
            ['label' => 'Curriculum',         'mba' => 'University-led academic framework',                       'pgdm' => 'Greater curriculum flexibility within an autonomous management institute'],
            ['label' => 'Industry Relevance', 'mba' => 'Follows the framework of the university offering the degree', 'pgdm' => 'Can be refreshed to reflect changing industry practices, technologies and business needs'],
            ['label' => 'Learning Approach',  'mba' => 'Management concepts and academic learning',               'pgdm' => 'Greater emphasis on application, projects and industry exposure'],
            ['label' => 'Specialisation',     'mba' => 'Specialisations vary by university and programme',        'pgdm' => 'Focused specialisations and electives aligned with contemporary business functions'],
        ],
        'approach_label' => 'Welingkar’s Approach',
        'approach'       => 'PGDM at Welingkar: Continuously evolving curriculum + technology-embedded education + application-oriented learning',
        'context'        => 'Welingkar’s current programme ecosystem demonstrates this through areas including <b>AI/ML, business analytics, digital marketing, technology, design thinking and emerging business practices</b>, within a contemporary Welingkar PGDM.',
        'closing'        => 'As business evolves, your management education should be flexible enough to keep pace.',
        'cta'            => 'Apply Now',
    ],

    /* 8 ─ Why choose + programme highlights */
    'why' => [
        'title' => 'Hybrid PGDM Built for the Real World.',
        'lead'  => 'Explore flexible management learning with the Welingkar PGDM at Welingkar Institute of Management.',
        'cards' => [
            ['icon' => 'globe',   'title' => 'Earn a Global Career Advantage',          'text' => 'Strengthen your professional profile with globally recognised certifications like Harvard ManageMentor and prepare for leadership in international business environments.'],
            ['icon' => 'growth',  'title' => 'Accelerate Career Growth & Opportunities', 'text' => 'Unlock opportunities for better roles, stronger salary potential and professional advancement across industries.'],
            ['icon' => 'target',  'title' => 'Learn What the Industry Actually Demands', 'text' => 'Master data-driven decision-making, modern business frameworks and industry-relevant skills aligned with today’s evolving corporate landscape through the Welingkar PGDM.'],
            ['icon' => 'network', 'title' => 'Build Powerful Industry Networks',         'text' => 'Connect with ambitious peers, experienced faculty, industry leaders and alumni to create opportunities that extend far beyond the classroom.'],
            ['icon' => 'crown',   'title' => 'Become a World-Class Business Leader',     'text' => 'Develop the vision, adaptability and managerial expertise to lead teams, businesses and transformation in a global economy.'],
            ['icon' => 'spark',   'title' => 'Gain the WeSchool Edge',                   'text' => 'Benefit from WeSchool’s industry-oriented learning approach, innovation-driven culture, strong corporate connections and respected brand credibility.'],
        ],
        'highlights_title' => 'PROGRAM HIGHLIGHTS',
        'highlights' => [
            ['icon' => 'crown',  'title' => 'The Elite WeSchool Legacy',          'text' => 'Fast-track your career with an AICTE-approved qualification from a recognised management institution.'],
            ['icon' => 'ribbon', 'title' => 'The Harvard Advantage',              'text' => 'Gain a competitive edge with access to Harvard ManageMentor (HMM) content and recognised certifications.'],
            ['icon' => 'play',   'title' => 'The High-Tech "We-Learning" Ecosystem', 'text' => 'Access a 24/7 digital campus with on-demand WeTube video lectures, audiobooks and interactive e-learning kits. The flexible format supports online PGDM learning alongside your professional commitments.'],
            ['icon' => 'mic',    'title' => 'Exclusive CXO Insights',             'text' => 'Explore real-world corporate strategy through exclusive WeLounge interviews with global business leaders and entrepreneurs.'],
            ['icon' => 'campus', 'title' => 'Campus Immersions',                  'text' => 'Combine online flexibility with optional weekend workshops, business simulations and valuable on-campus networking. This hybrid approach brings together digital learning and practical campus experiences.'],
            ['icon' => 'spark',  'title' => 'Zero Entrance Exam Friction',        'text' => 'Focus on your management learning journey with a profile-based admission process and an examination structure designed for busy professionals. Applicants can explore the Welingkar Hybrid PGDM without the CAT/GMAT route, subject to the programme’s stated eligibility and admission criteria.'],
        ],
        'cta' => 'Apply Now',
    ],

    /* 9 ─ Impact stories (placeholders until Welingkar supplies the stories) */
    'stories' => [
        'title' => 'Impact Stories',
        'lead'  => 'Hear from our Alumfluencers',
        'items' => [
            ['img' => 'story-1.webp', 'title' => 'The Hybrid Experience',   'quote' => 'The weekend workshops and live sessions let me keep my job and still learn with people from very different industries.', 'name' => 'Learner name', 'role' => 'Designation, Organisation', 'video' => '', 'placeholder' => true],
            ['img' => 'story-2.webp', 'title' => 'The Hybrid PGDM Impact',  'quote' => 'I could plan my exams around work. The case studies were from businesses I deal with every week.',                       'name' => 'Learner name', 'role' => 'Designation, Organisation', 'video' => '', 'placeholder' => true],
            ['img' => 'story-3.webp', 'title' => 'The Career Leap',         'quote' => 'The Harvard ManageMentor courses in year one gave me a vocabulary I now use in every review meeting.',                    'name' => 'Learner name', 'role' => 'Designation, Organisation', 'video' => '', 'placeholder' => true],
        ],
        'cta' => 'Apply Now',
    ],

    /* 18 ─ Fees and eligibility (placed above "Build to evolve", as the content document asks) */
    'fees' => [
        'title'     => 'Flexible Payment Options That Fit Your Journey',
        'programme' => '2-Year Welingkar Hybrid PGDM',
        'eligibility' => [
            'title'  => 'Eligibility for Welingkar PGDM Hybrid Course',
            'points' => [
                'Graduation from a recognized Indian university',
                'Graduation from International university recognized by IGNOU/UGC/AIU/state universities or associations such as AMBA, AACSB, or EQUIS',
            ],
            'note'   => 'You don’t need to undertake any entrance exam or GD to apply for a Hybrid PGDM at WeSchool. You only need to meet the graduation criteria.',
        ],
        'options' => [
            ['label' => 'Option 01', 'price' => '₹1,26,000', 'text' => 'Programme Fee at Enrolment'],
            ['label' => 'Option 02', 'years' => [['Year 1', '₹66,000'], ['Year 2', '₹65,000']], 'text' => 'Pay-as-you-progress for greater flexibility while pursuing the Welingkar PGDM.'],
        ],
        'pcp' => [
            'title' => 'PCP', 'name' => 'Personal Contact Programme',
            'lines' => [['₹3,600', 'at the time of admission'], ['₹400', 'per subject if PCP is opted for later.']],
        ],
        'methods' => [
            ['icon' => 'card', 'title' => 'Online Admission',    'text' => 'Net Banking | Debit Card | Credit Card'],
            ['icon' => 'bank', 'title' => 'On-Campus Admission', 'text' => 'Cheque | Demand Draft | Bank Transfer'],
        ],
        'seo' => [
            'When comparing online MBA programs, an online MBA program or an MBA degree online, look at the qualification awarded, curriculum, delivery format, eligibility and fees. Learners also researching executive MBA programs should compare entry requirements and work-experience expectations. Searches for the best MBA online or best MBA programs can help build a shortlist, but decisions should be based on official programme details and personal goals.',
            'A shortlist of online MBA programs and executive MBA programs should be assessed against the same criteria. The best MBA online option and the best MBA programs for you depend on your goals, while an MBA degree online may have a different structure and recognition context from a PGDM.',
        ],
        'cta' => 'Apply Now',
    ],

    /* 10 ─ Build to evolve */
    'evolve' => [
        'kicker' => 'Build to Evolve',
        'title'  => 'Built for what’s next',
        'lead'   => 'Build the knowledge, skills and confidence to take on your next professional challenge through practical Welingkar PGDM management education.',
        'points' => [
            ['title' => 'Think strategically',        'text' => 'Understand how business, technology and changing market dynamics shape the decisions leaders make.'],
            ['title' => 'Solve with perspective',     'text' => 'Build awareness of how AI and emerging technologies are changing the way businesses work and decisions get made.'],
            ['title' => 'Lead with confidence',       'text' => 'Strengthen your ability to communicate, collaborate, solve problems and take on greater responsibility.'],
            ['title' => 'Put learning into action',   'text' => 'Apply management concepts to real situations and bring what you learn into your professional environment.'],
        ],
        'closing' => 'Learn today. Apply it tomorrow. Be ready for what comes next.',
        'cta'     => 'Apply Now',
    ],

    /* 11 ─ How you'll learn (pinned while the six steps play) */
    'learn' => [
        'kicker' => 'How You’ll Learn',
        'title'  => 'Hybrid That Actually Works.',
        'lead'   => 'Not just videos and PDFs. This is active, immersive management education through the Welingkar Hybrid PGDM, engineered for flexibility without compromising depth.',
        'steps'  => [
            ['tag' => 'Online',   'img' => 'learn-online.webp',   'title' => 'Online Learning Core',   'text' => 'Live online interactive lectures, webinars, WeTube video lectures and an e-learning toolkit: access flexible online PGDM learning at your pace, on your schedule.'],
            ['tag' => 'Campus',   'img' => 'learn-campus.webp',   'title' => 'On-Campus Immersion',    'text' => 'Personal Contact Programs bring you to campus for workshops, collaborative sessions and direct faculty interaction as part of the Welingkar Hybrid PGDM.'],
            ['tag' => 'Industry', 'img' => 'learn-industry.webp', 'title' => 'Industry Exposure',      'text' => 'Live industry visits, experiential learning programmes and Newswire services keep you connected to the real business world through the Welingkar PGDM.'],
            ['tag' => 'Projects', 'img' => 'learn-projects.webp', 'title' => 'Projects & Assessment',  'text' => 'Exams, viva and project submissions across two years, with a 4-year window to complete the programme at your own pace.'],
            ['tag' => 'Peers',    'img' => 'learn-peers.webp',    'title' => 'Peer-to-Peer Learning',  'text' => 'Collaborative knowledge sharing that brings diverse perspectives and experiences into the learning process.'],
            ['tag' => 'Upskill',  'img' => 'learn-upskill.webp',  'title' => 'We Upskill',             'text' => 'Interactive virtual sessions to sharpen soft skills, alongside business simulations, movie-based case studies and experiential workshops.'],
        ],
        'cta' => 'Apply Now',
    ],

    /* GenWe Playbook (Figma) */
    'playbook' => [
        'title' => 'GenWe Playbook',
        'lead'  => 'The people, tools and experiences that power your journey.',
        'pillars' => [
            ['name' => 'WeAhead',   'char' => 'char-weahead.svg',   'text' => 'Develop an adaptable mindset with global management knowledge and future-focused learning.',
             'tags' => ['42 Harvard ManageMentor courses', 'Harvard Business Publishing simulations', '18 industry specialisations']],
            ['name' => 'WeGuild',   'char' => 'char-weguild.svg',   'text' => 'Build meaningful relationships that open doors to new perspectives, opportunities and collaborations.',
             'tags' => ['Industry visits', 'Train with industry leaders', '1.5L Alumni community', 'Peer-to-peer exchange']],
            ['name' => 'WeUpskill', 'char' => 'char-weupskill.svg', 'text' => 'Learn at your own pace and earn additional credentials in emerging areas such as AI and finance.',
             'tags' => ['Career + life-skills workshops', '500+ WeTube videos', 'Bloomberg certificates', 'Weekend workshops']],
            ['name' => 'WeGuide',   'char' => 'char-weguide.svg',   'text' => 'Navigate your next career move with insights into industry trends and what employers look for.',
             'tags' => ['Career toolkit', '40+ Industry sectors', 'Vacancy information', 'Interview samples']],
            ['name' => 'WeSupport', 'char' => 'char-wesupport.svg', 'text' => 'Get dedicated guidance and seamless assistance at every stage, from enrolment to graduation.',
             'tags' => ['One ERP, admission to certificate', 'Success counsellors', '24x7 helpline']],
        ],
        'cta' => 'Apply Now',
    ],

    /* 12 ─ Two certifications */
    'certifications' => [
        'title' => 'Two Years. Two Certifications.',
        'lead'  => 'Build your management qualification progressively through the two-year Welingkar PGDM, with a certification milestone at the end of each year.',
        'years' => [
            ['year' => '01', 'title' => 'Advance Diploma in Business Administration', 'text' => 'Successfully complete the first year, including the required examinations, viva and project submission, and receive the Advance Diploma in Business Administration in soft-copy format.', 'format' => 'Soft copy'],
            ['year' => '02', 'title' => 'PGDM (Specialization) Hybrid Certification',  'text' => 'Complete the second year requirements and receive the PGDM (Specialization) Hybrid certification as a hard copy.', 'format' => 'Hard copy'],
        ],
        'milestone' => 'One Programme. Two Milestones.',
        'condition' => 'Both certifications are awarded upon successful completion of the required examinations, viva and projects.',
        'cta'       => 'Apply Now',
    ],

    /* 13 ─ Specialisations */
    'specialisations' => [
        'kicker' => 'Find your future fit',
        'badge'  => 'Industry 5.0-aligned',
        'title'  => '18 Specialisations. One Programme. Your Direction.',
        'lead'   => 'Choose the management specialisation that aligns with the area you want to build your expertise in through the Welingkar PGDM.',
        'detail' => 'Welingkar Institute of Management currently offers 18 Hybrid PGDM specialisations across management, business, industry and functional domains.',
        'items'  => [
            ['Marketing Management', 'Explore consumer behaviour, marketing research, brand management, digital marketing and marketing analytics to understand changing customer needs.'],
            ['Finance Management', 'Build financial management skills across accounting, taxation, trade finance and investment decisions to support business performance.'],
            ['Human Resource Management', 'Develop people-management capabilities through recruitment, industrial relations, HR systems, learning and development, and performance management.'],
            ['Retail Management', 'Explore retail operations, merchandising and customer needs to understand how retail businesses manage products, sales and service.'],
            ['Operations Management', 'Learn production planning, lean manufacturing and process improvement to support efficient operations and resource utilisation.'],
            ['Supply Chain Management', 'Study purchasing, inventory optimisation, logistics and global supply chains to understand how businesses manage the flow of goods.'],
            ['Business Administration', 'Build a foundation across core business functions, including management, finance, marketing, human resources and strategic decision-making.'],
            ['E-Business Management', 'Explore digital business models and technology-enabled operations to understand how organisations conduct and grow business online.'],
            ['Banking, Investment & Insurance', 'Understand banking operations, investment principles and insurance practices to build knowledge of financial services and risk.'],
            ['Rural & Agribusiness Management', 'Explore rural markets, agricultural business and enterprise management to understand commercial opportunities across rural and agribusiness sectors.'],
            ['Hospitality Management', 'Build management knowledge relevant to hospitality operations, service delivery and customer experience.'],
            ['Healthcare Management', 'Explore healthcare administration, operational processes and service management within the evolving healthcare sector.'],
            ['Services Excellence', 'Understand service quality, customer satisfaction and process improvement to strengthen service delivery across organisations.'],
            ['Travel & Tourism Management', 'Explore travel services, tourism operations and destination management across the travel and tourism industry.'],
            ['IT Project Management', 'Build knowledge of project planning, coordination and delivery to support technology-focused business initiatives.'],
            ['E-Commerce Management', 'Explore online retail, digital transactions and e-commerce operations to understand how businesses serve customers through digital channels.'],
            ['International Business Management', 'Develop an understanding of global markets, international trade and cross-border business operations.'],
            ['Media & Advertising Management', 'Explore advertising strategy, media planning and brand communication across changing media platforms.'],
        ],
        'cta' => 'Apply Now',
    ],

    /* 14 ─ Legacy */
    'legacy' => [
        'kicker'   => 'The WeSchool Legacy',
        'title'    => '40+ Years of Welingkar',
        'overlay'  => 'A Legacy of Learning. Built for What’s Next.',
        'text'     => 'From the S.P. Mandali Trust, one of India’s oldest educational trusts, WeSchool has grown into a recognised name in progressive management education. With generations of alumni and a continued focus on evolving business needs, its approach brings legacy and contemporary thinking together.',
        'past'     => ['src' => 'photo-library.webp',    'alt' => 'The WeSchool library'],
        'now'      => ['src' => 'photo-auditorium.webp', 'alt' => 'A packed WeSchool auditorium session'],
        'proof'    => [
            ['value' => '100+ YEARS', 'text' => 'S.P. Mandali Trust'],
            ['value' => 'NIRF TOP 100', 'text' => 'Consistently ranked among India’s top institutions'],
            ['value' => 'PROGRESSIVE MANAGEMENT EDUCATION', 'text' => 'Built around an evolving business landscape'],
        ],
        'closing' => 'A legacy that keeps moving forward.',
        'cta'     => 'Apply Now',
    ],

    /* 15 ─ Alumfluencers (quotes and figures from the current live page) */
    'alumni' => [
        'title'  => 'Alumfluencers',
        'lead'   => 'Alumni speak about their Welingkar PGDM experience and what it meant for their professional journey and flexible management education.',
        'quotes' => [
            ['img' => 'testimonial-1.webp', 'name' => 'Kush Shah',                       'role' => 'CEO, Core Corporation',        'quote' => 'Through knowledge sharing and networking with professionals from varied industries, I acquired a new outlook towards things I already knew.'],
            ['img' => 'testimonial-2.webp', 'name' => 'Ms. Navmita Nandi',               'role' => 'Product Specialist, Citibank', 'quote' => 'Welingkar Distance Learning Program helped me to prosper in my career growth through HR Specialization. The program helps you to understand and perform your role better in an organization.'],
            ['img' => 'testimonial-3.webp', 'name' => 'Mr. Vipul Gala',                  'role' => 'Director, Vertical Solutions', 'quote' => 'Welingkar Distance Learning Program allowed me to work and study simultaneously at my own pace. The best things about the program are the experiential learning workshops.'],
            ['img' => 'testimonial-4.webp', 'name' => 'Mr. Parthasarathi Bandhopadhyay', 'role' => 'GM, Reliance Industries',      'quote' => 'The Program’s course content, online lectures, workshops, etc. helped me to grasp the concepts easily and acquire management skills efficiently.'],
        ],
        'growth_title' => 'Discover their career growth',
        'growth' => [
            ['value' => '60%', 'text' => 'Expecting positive impact on work performance in the near future'],
            ['value' => '19%', 'text' => 'Confident of getting better job / recognition'],
            ['value' => '195', 'text' => 'Received promotion immediately'],
        ],
        'cta' => 'Apply Now',
    ],

    /* 16 ─ Admission steps */
    'steps' => [
        'title' => 'A Simple 4-Step Journey to Your Welingkar PGDM',
        'items' => [
            ['icon' => 'register', 'title' => 'Register Your Interest',          'text' => 'Connect with the Welingkar admissions team and understand the Welingkar PGDM with guidance from a counsellor.'],
            ['icon' => 'docs',     'title' => 'Complete Your Application',       'text' => 'Register for the programme and submit the required academic, identity and supporting documents for your PGDM application.'],
            ['icon' => 'pay',      'title' => 'Choose Your Payment Option',      'text' => 'Select the payment method that works for you and complete the applicable programme fee payment.'],
            ['icon' => 'confirm',  'title' => 'Get Your Admission Confirmation', 'text' => 'Once your documents and payment are verified, receive confirmation of your admission.'],
        ],
        'journey' => ['Register', 'Submit Documents', 'Payment', 'Confirmation'],
        'cta'     => 'Apply Now',
    ],

    /* 17 ─ What you'll learn */
    'curriculum' => [
        'title' => 'What You’ll Learn',
        'lead'  => 'Explore how your learning journey is structured, from the first semester to your specialisation and beyond.',
        'semesters' => [
            ['Semester 01', '6', 'subjects'],
            ['Semester 02', '5', 'subjects + Project We-Like'],
            ['Semester 03', '5', 'subjects'],
            ['Semester 04', '4', 'subjects + Career Toolkit + Project Report'],
        ],
        'questions' => [
            ['q' => 'What does the two-year journey look like?', 'type' => 'semesters', 'a' => 'The programme runs across four semesters, with the specialisation component coming into focus in Year 2.'],
            ['q' => 'Where do I build my specialisation?',       'type' => 'specialisations', 'a' => '<b>Year 2 is where you specialise.</b> Choose from <b>18 specialisations</b> across areas including Marketing, Finance, Human Resources, Operations, Supply Chain Management, E-Business, International Business, Media &amp; Advertising, Healthcare, Hospitality and IT Project Management.', 'link' => 'Explore 18 Specialisations'],
            ['q' => 'How can I access my learning material?',    'a' => '<b>Multiple modes support the hybrid learning experience</b>, giving students access to programme learning material across different formats.'],
            ['q' => 'What comes with the E-Learning Toolkit?',   'a' => 'Additional academic support is available through the <b>E-Learning Toolkit in your student login</b>. It gives you access to supplementary academic resources alongside your programme.'],
            ['q' => 'How do I stay connected to my field?',      'a' => 'The <b>Newswire Service</b> provides specialisation-wise news and developments from around the globe, helping you stay updated with what is happening in your chosen field.'],
        ],
        'cta' => 'Apply Now',
    ],

    /* 19 ─ FAQ (also published as FAQPage structured data) */
    'faq' => [
        'title' => 'Frequently Asked Questions',
        'lead'  => 'Everything you need to know before you apply for the Welingkar PGDM.',
        'items' => [
            ['cat' => 'Programme', 'q' => 'How long is the programme?', 'a' => [
                'The Hybrid PGDM is a two-year programme designed to combine structured management learning with the flexibility to continue your professional commitments. The Welingkar PGDM gives learners access to online PGDM learning alongside interactive academic experiences, making it a flexible management education option.',
                'For learners comparing online MBA programs, an online MBA program, and executive MBA programs, the key consideration is how the programme fits their work commitments and learning goals. Those exploring the best MBA online options or the best MBA programs can compare curriculum, learning format, academic support and programme duration before deciding. The Welingkar PGDM is a postgraduate diploma in management, so learners should compare the qualification awarded rather than assume it is an MBA degree online.',
            ]],
            ['cat' => 'Programme', 'q' => 'How does the hybrid learning format work?', 'a' => [
                'The Hybrid PGDM combines online learning, live interactive sessions, practical application and academic interaction. The Welingkar Hybrid PGDM offers a flexible learning format for learners comparing online PGDM and PGDM distance learning options while continuing their professional commitments.',
                'The format may also interest people researching online MBA programs, an online MBA, or MBA online learning because flexibility and interaction are important factors when studying alongside work. If you are comparing executive MBA programs, online MBA programs and the best MBA programs, review the balance of self-paced study, live sessions and practical learning. Search terms such as distance learning, MBA part-time, and Welingkar part-time MBA may describe what a learner is looking for, but they should not be taken as the official name of this programme. The Welingkar Hybrid PGDM is a hybrid PGDM, not an online MBA degree. Some learners may also search for Welingkar online distance MBA, hybrid Welingkar, online PGDM in Mumbai or a distance PGDM course; these are search phrases and should not be mistaken for the programme\'s official title or delivery description.',
            ]],
            ['cat' => 'Programme', 'q' => 'Is this still relevant in 2026', 'a' => [
                'Yes. The programme remains relevant for learners looking to strengthen their management capabilities through structured, practical learning. The Welingkar PGDM combines contemporary management learning with flexible online PGDM access, making it an option for professionals evaluating current MBA courses and other management programmes.',
                'In 2026, professionals comparing online MBA programs, an online MBA program, executive MBA programs and other MBA courses should assess how well each option matches their career goals, schedule and preferred learning experience. Searches for best MBA online, best MBA programs and MBA degree online can be a starting point for comparison, but the qualification, curriculum and learning support matter more than the search label. Welingkar Institute of Management offers the Hybrid PGDM as a management education pathway for learners who want structured learning with flexibility.',
            ]],
            ['cat' => 'Eligibility & Admission', 'q' => 'Who is eligible to apply?', 'a' => [
                'Graduates who meet the stated eligibility criteria can apply for the Welingkar Hybrid PGDM. The programme is designed for learners looking to build formal management knowledge while continuing their professional journey.',
                'People searching for an MBA for working professionals, an online MBA, or online MBA programs should first check the stated eligibility criteria and the qualification awarded by each institution. The same applies when comparing executive MBA programs, the best MBA programs or an MBA degree online: eligibility, admission requirements and programme structure can differ. Welingkar Institute of Management applicants should refer to the official admission requirements for the Hybrid PGDM rather than relying only on general search terms.',
            ]],
            ['cat' => 'Eligibility & Admission', 'q' => 'Is there an entrance exam or GD?', 'a' => [
                'No entrance exam or GD is required, subject to the stated graduation criteria. Eligible applicants can proceed through the programme\'s admission process and pursue the Welingkar PGDM without a separate entrance-test requirement.',
                'Applicants comparing an online MBA program, online MBA programs and executive MBA programs should check the admission process for each specific course, since entrance requirements can vary. Whether you are researching the best MBA online options, the best MBA programs or other MBA courses, confirm the eligibility rules directly with the institution. For the Welingkar PGDM, applicants should follow the stated Hybrid PGDM admission process.',
            ]],
            ['cat' => 'Eligibility & Admission', 'q' => 'What documents are required for admission?', 'a' => [
                'Applicants need to submit the required academic, identity and supporting documents as part of the admission process. These documents are reviewed as part of the application and admission confirmation process for the Welingkar PGDM.',
                'If you are comparing online MBA programs, an online MBA, executive MBA programs or other MBA courses, review each institution\'s document checklist before applying. Search phrases such as MBA degree online, best MBA online and best MBA programs do not indicate identical admission requirements across providers. Welingkar Institute of Management applicants should use the official checklist for the Hybrid PGDM and submit the documents requested through the admission process.',
            ]],
            ['cat' => 'Learning & Curriculum', 'q' => 'How are lectures conducted?', 'a' => [
                'Lectures are delivered through the Hybrid PGDM learning format, combining accessible online classroom learning with interactive academic engagement. This gives learners the flexibility associated with online PGDM courses while retaining opportunities for direct interaction through the Welingkar Hybrid PGDM.',
                'Learners comparing online MBA programs, an online MBA program, and MBA online learning can look at how lectures, faculty interaction and practical application are organised. Those researching executive MBA programs, the best MBA online options or the best MBA programs should compare the actual learning experience rather than relying on labels alone. Distance learning, pgdm online courses and pgdm distance learning are related search terms, but the Welingkar Hybrid PGDM has its own stated format and programme structure.',
            ]],
            ['cat' => 'Fees & Payment', 'q' => 'Are payment options available?', 'a' => [
                'The programme follows a structured fee and payment process, with options designed to provide greater flexibility for learners. The pay-as-you-progress approach can make it easier to manage programme payments while pursuing the Welingkar PGDM.',
                'When comparing online MBA programs, an online MBA, executive MBA programs or other MBA courses, review the total fee, payment schedule and any applicable terms before making a decision. People researching the best MBA online, best MBA programs or an MBA degree online should compare the overall cost alongside curriculum, support and qualification. For the Welingkar PGDM, applicants should confirm the current fee and payment details through the official programme information.',
            ]],
            ['cat' => 'Programme', 'q' => 'MBA vs PGDM', 'a' => [
                'MBA and PGDM are both postgraduate management education pathways, but their structure and awarding framework can differ. The Welingkar PGDM focuses on practical, industry-relevant management learning through a flexible format, making it an option for learners also comparing an online MBA programme.',
                'When comparing a PGDM with online MBA programs, an online MBA program or an MBA degree online, check the awarding body, recognition, curriculum and the exact qualification granted. Executive MBA programs can also differ in entry requirements, duration and target audience. Searches for best MBA online and best MBA programs can help build a shortlist, but they should not replace a direct comparison of programme details. Welingkar Institute of Management offers the Hybrid PGDM as a PGDM qualification; it should not be described as an MBA degree.',
            ]],
            ['cat' => 'Programme', 'q' => 'Does this have more value than regular MBA', 'a' => [
                'The value of a management programme depends on the learner\'s goals, learning format and career requirements. The Welingkar Hybrid PGDM combines practical management learning, industry interaction, specialisation and flexible online access, making it relevant for learners comparing a regular MBA, online MBA or MBA degree online.',
                'For a fair comparison, review the Welingkar PGDM alongside online MBA programs, an online MBA program, executive MBA programs and other MBA courses based on curriculum, schedule, practical exposure, academic support, qualification and total cost. Learners searching for the best MBA online or the best MBA programs should define what “value” means for their career goals rather than rely on rankings or keywords alone. MBA degree online is a search phrase, not a guarantee of a particular qualification or outcome. Welingkar Institute of Management\'s Hybrid PGDM should be evaluated on its stated programme details and the learner\'s needs.',
            ]],
            ['cat' => 'Programme', 'q' => 'Do u have placements', 'a' => [
                'The Welingkar PGDM is designed to strengthen management knowledge, practical skills and professional readiness. Learners can use the academic and industry-oriented experience to support their professional growth and next career move.',
                'If placement support is an important factor while comparing online MBA programs, an online MBA, executive MBA programs or the best MBA programs, ask each institution for its current, programme-specific placement information and the terms that apply. People researching the best MBA online or an MBA degree online should distinguish between career development, placement assistance and guaranteed placement outcomes. For accurate details, refer to the official Welingkar Hybrid PGDM information and confirm what support is available to learners.',
            ]],
        ],
    ],

    'contact' => [
        'title'  => 'Contact Us',
        'phones' => ['18005478003', '1800123500047'],
        'email'  => 'hybrid.yangpoo@welingkarmail.org',
    ],

    'thank_you' => [
        'title' => 'Thank you. We’ve received your enquiry.',
        'text'  => 'A Welingkar admissions counsellor will call you shortly to take you through the Hybrid PGDM. Meanwhile, you can download the brochure or go back to the programme page.',
    ],
];
