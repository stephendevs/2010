<?php

return [

    'programs' => [
        'diploma-in-nursing-direct' => [
            'name' => 'Diploma in Nursing Direct',
            'duration' => '3 years',
            'requirements' => [
                'Advanced level (“A-Level”) in sciences with a Principal Pass in Biology &', 'a subsidiary Pass in Chemistry'
            ]
        ],
        'diploma-in-midwifery-direct' => [
            'name' => 'Diploma in Midwifery  Direct',
            'duration' => '3 years',
            'requirements' => [
                'Advanced level (“A-Level”) in sciences with a Principal Pass in Biology &', 'A subsidiary Pass in Chemistry'
            ]
        ],
        'diploma-in-midwifery-extention' => [
            'name' => 'Diploma in Midwifery  Extension',
            'duration' => '1 and Half years',
            'requirements' => [
                'Advanced level (“A-Level”) in sciences with a Principal Pass in Biology &', 'a subsidiary Pass in Chemistry'
            ]
        ],
        'diploma-in-nursing-extension' => [
            'name' => 'Diploma in Nursing  Extension',
            'duration' => '1 and Half years',
            'requirements' => [
                'Advanced level (“A-Level”) in sciences with a Principal Pass in Biology &', 'a subsidiary Pass in Chemistry'
            ]
        ],
        [
            'url' => 'certificate-in-nursing',
            'name' => 'Certificate in Nursing',
            'duration' => '1 year',
            'requirements' => [
                'Advanced level (“A-Level”) in sciences with a Principal Pass in Biology &', 'a subsidiary Pass in Chemistry'
            ]
        ],
        'certificate-in-midwifery' => [
            'name' => 'Certificate in Midwifery',
            'duration' => '1 year',
            'requirements' => [
                'Advanced level (“A-Level”) in sciences with a Principal Pass in Biology &', 'a subsidiary Pass in Chemistry'
            ]
        ]
    ],

    'posts' => [
        //Courses In AAMSNM
        [
            'post_type' => 'course',
            'extract_text' => 'Diploma in Nursing Direct',
            'post_title' => 'Diploma In Nursing Direct',
            'post_featured_image' => 'aamsnm/img/courses/dn.jpg',
            'post_content' => '<h4>Duration: 3 Years</h4><h5>Admission Requirements</h5><p>Uganda Advanced Certificate Of Education <b>(“A-Level”)</b> in sciences with a Principal Pass in Biology & a subsidiary Pass in Chemistry</p>',
        ],
        [
            'post_type' => 'course',
            'extract_text' => 'Diploma in Midwifery Direct Entry',
            'post_title' => 'Diploma In Midwifery Direct',
            'post_featured_image' => 'aamsnm/img/courses/dm.jpg',
            'post_content' => '<h4>Duration: 3 Years</h4><h5>Admission Requirements</h5><p>Uganda Advanced Certificate Of Education <b>(“A-Level”)</b> in sciences with a Principal Pass in Biology & a subsidiary Pass in Chemistry</p>',
        ],
        [
            'post_type' => 'course',
            'extract_text' => 'Certificate In Nursing',
            'post_title' => 'Certificate In Nursing',
            'post_featured_image' => 'aamsnm/img/courses/cn.jpg',
            'post_content' => '<h4>Duration: 2½ Years</h4><h5>Admission Requirements</h5><ul><li>Ordinary Level ("O" Level) certificate - completed not more that 3 years</li><li>Passes in English, Mathematics, Physics, Chemistry & Biology.</li><li>Must be 18 years andor above</li></ul>'
        ],
        [
            'post_type' => 'course',
            'extract_text' => 'Certificate In Midwifery',
            'post_title' => 'Certificate In Midwifery',
            'post_featured_image' => 'aamsnm/img/courses/cm.jpg',
            'post_content' => '<h4>Duration: 2½ Years</h4><h5>Admission Requirements</h5><ul><li>Ordinary Level ("O" Level) certificate - completed not more that 3 years</li><li>Passes in English, Mathematics, Physics, Chemistry & Biology.</li><li>Must be 18 years andor above</li></ul>'
        ],
        [
            'post_type' => 'course',
            'extract_text' => 'Diploma In Midwifery Extension',
            'post_title' => 'Diploma In Midwifery Extension',
            'post_featured_image' => 'aamsnm/img/courses/dme.jpg',
            'post_content' => '<h4>Duration: 1½ Years</h4><h5>Admission </h5><ul><li>Advanced Level ("A" Level) certificate.</li><li>Principal pass in Biology & a Subsidiary Pass in Chemistry, Physics or Agriculture.</li><li>Must be 18 years andor above</li></ul>'
        ],
        //Facilities In AAMSNM
        [
            'post_type' => 'facility',
            'post_title' => 'The School Library',
            'post_featured_image' => 'aamsnm/img/library.jpg',
            'extract_text' => 'Anume library offers resources and services online and on-campus to enhance the academic',
            'post_content' => '<p>Alice Anume library offers resources and services online and on-campus to enhance the academic interests of our students, and staff. Our digital collection of databases, books, magazines, journals and videos are tailored to learning, research and recreational interests of our students and staff through the Koha Library software program.</p><p> Anume Library also benefit from Hinari Library information system to provide students with a collection of research materials. Our website is designed to provide program-specific assistance through eLearning resources.</p>',
        ],
        [
            'post_type' => 'facility',
            'post_title' => 'The Skills Laboratory',
            'post_featured_image' => 'aamsnm/img/skills.jpg',
            'extract_text' => 'Anume has an excellent skills laboratory with modern models and equipment that assist the students to pass their practical exams with distinctions',
            'post_content' => '<p>Anume has an excellent skills laboratory with modern models and equipment that assist the students to pass their practical exams with distinctions</p>',
        ],
        [
            'post_type' => 'facility',
            'post_title' => 'Transport',
            'post_featured_image' => 'aamsnm/img/transport.jpg',
            'extract_text' => 'The school has suitable transportation that assist in delivery of services to the students and community',
            'post_content' => '<p>The school has suitable transportation that assist in delivery of services to the students and community.  The school bus is available 24/7 to take students to hospital for practice routine.</p>',
        ],
        [
            'post_type' => 'facility',
            'post_title' => 'Computer Laboratory',
            'post_featured_image' => 'aamsnm/img/computer.jpg',
            'extract_text' => 'Computer laboratory with internet connectivity',
            'post_content' => '<p>Computer laboratory with internet connectivity</p>',
        ],

        //AAMSNM Slider
        [
            'post_type' => 'slider',
            'post_title' => 'slide1',
            'post_featured_image' => 'aamsnm/img/slider/slide0.jpg',
        ],
        [
            'post_type' => 'slider',
            'post_title' => 'slide2',
            'post_featured_image' => 'aamsnm/img/slider/slide1.jpg',
        ],
        [
            'post_type' => 'slider',
            'post_title' => 'slide3',
            'post_featured_image' => 'aamsnm/img/slider/slide2.jpg',
        ],
        [
            'post_type' => 'page',
            'post_key' => 'privacy_policy',
            'post_title' => 'privacy policy',
            'post_featured_image' => 'aamsnm/img/about.jpg',
            'post_content' => '
             <p>Please carefully read the terms and conditions for the use of our website.</p>
             <p>By accessing Alice Anume website, you are accepting the terms of use and the practices described
             in this privacy policy</p>
             <p>We respect the privacy of all our website visitors as well as those who subscribe to our newsletters
             or share any personal information with us through the forms within the website. We only collect
             personal information such as names, date of birth, email address, phone numbers etc. voluntarily.
             Your personal information will never be sold, leased, rented, or otherwise disclosed in any manner.</p>
             <p><b>Note:</b> Some of the links on our website will redirect you to a third-party websites; hence, we are
             not responsible for the privacy policy of any other website. Our privacy policy only applies to
             information collected while on the school website.</p>
             <h6>Cookies</h6>
             <p>We may use cookies for tracking page visits and other aggregate website statistics. These cookies
             do not contain any identifiable personal information and are only used to improve the functionality
             of our website and your experience while on our site.</p>
             <h6>Copyright</h6>
             <p>All content on the website, including but not limited to designs, text, graphics, pictures, videos,
             software, and other files are a sole property of AAMSNM, protected by copyright with all rights
             reserved.</p>
             <p>No website content may be modified, copied, distributed, reproduced, republished, or sold in any
             form or by any means without prior written permission from AAMSNM.</p>
            ',
            ''
        ],
        //banner post
        [
            'post_type' => 'banner',
            'post_title' => 'Welcome to AAMSNM',
            'post_content' => '<p>Our mission ie to produce and deliver to society medical practitioners who shall at all times be driven by professional passion to do right for the purposes of saving lives, at whatever cost. </p>',
            'post_featured_image' => 'aamsnm/img/banner/banner.jpg'
        ],
        //team members
        [
            'post_type' => 'team',
            'post_title' => 'stephen okello omoding',
            'extract_text' => 'IT Officer',
            'post_featured_image' => 'aamsnm/img/team-member.jpg'
        ],
        //Default pages
        [
            'post_type' => 'page',
            'post_key' => 'about',
            'post_title' => 'About Us',
            'post_featured_image' => 'aamsnm/img/about.jpg',
            'post_content' => '
            <p>Alice Anume Memorial School of Nursing and Midwifery is a private health training institution established in 2010. It is located in Eastern Uganda, Pallisa Town, 1km off Kumi Road. The school is open to all young and promising high achievers who would like to make a contribution to society through health care/medical profession.</p>
            <p>The institution has successfully trained nurses and midwives at Diploma & Certificate levels. The school performance rate is around 94% and employment rate for the trained nurses and midwives is at 100%. As of now, the nursing and midwifery training programs at certificate level, have successfully graduated more than 160 nurses and midwives, who are effectively serving in various health care facilities in Uganda. The school provides the highest quality nursing and midwifery education in Eastern Uganda.</p>'
        ],
        [
            'post_type' => 'page',
            'post_title' => 'Our Programs',
            'post_featured_image' => 'aamsnm/img/header.jpg',
            'post_key' => 'courses',
            'extract_text' => 'Our training programs are based on Uganda Nurses and Midwives Examinations Board Syllabus as approved by both the ',
            'post_content' => '<h3>Programs We Offer</h3><P>Our training programs are based on Uganda Nurses and Midwives Examinations Board Syllabus as approved by both the Ministry of Health and Ministry of Education and Sports. The programs are delivered under the supervision of the Uganda Nursing and Midwifery Examination Council.</p>'
        ],
        [
            'post_type' => 'page',
            'post_key' => 'news',
            'post_title' => 'Latest news',
            'post_featured_image' => 'aamsnm/img/header.jpg',
            'extract_text' => '',
            'post_content' => ''
        ],
        [
            'post_type' => 'page',
            'post_key' => 'team',
            'post_title' => 'Our Team',
            'post_featured_image' => 'aamsnm/img/header.jpg',
            'extract_text' => '',
            'post_content' => ''
        ],
        [
            'post_type' => 'page',
            'post_key' => 'facility',
            'post_title' => 'Facilities',
            'post_featured_image' => 'aamsnm/img/facilities.jpg',
            'extract_text' => '',
            'post_content' => ''
        ],
        [
            'post_type' => 'page',
            'post_key' => 'contact',
            'post_title' => 'Contact Us',
            'post_featured_image' => 'aamsnm/img/header.jpg',
            'extract_text' => '',
            'post_content' => ''
        ],
        [
            'post_type' => 'page',
            'post_key' => 'admission',
            'post_title' => 'admissions',
            'post_featured_image' => 'aamsnm/img/header.jpg',
            'extract_text' => 'Admissions to AAMSNM is a great start to your career as a health professional. We offer both certificate and diploma courses in nursing and midwifery',
            'post_content' => '<p> Admissions to AAMSNM is a great start to your career as a health professional. We offer both certificate and diploma courses in nursing and midwifery.</p>
            <h2 class="heading">How to apply</h2>
            <p>Application forms can be obtained from the admissions office at school, Or head to the downloads section to download the application form.</p>
            <p>Application forms must be fully filled, and all relevant academic documents must be attached.  Complete applications can be mailed, emailed or hand delivered to the school.</p>'
        ],
        [
            'post_type' => 'page',
            'post_key' => 'faqs',
            'post_title' => 'Frequently Asked Questions',
            'post_featured_image' => 'aamsnm/img/header.jpg',
            'extract_text' => 'The most commonly asked questions about us',
            'post_content' => '<h2><i>Everything you want to know</i></h2>
            <p>Below you will find answers to our most commonly asked questions, if you do not fin the answers you are looking for, please contact us.</p>'
        ],
        [
            'post_type' => 'page',
            'post_key' => 'why_us',
            'post_title' => 'Why choose aamsnm',
            'post_featured_image' => 'aamsnm/img/header.jpg',
            'post_content' => '<ul>
            <li>Healthy choice of programs</li>
            <li>Excellent academic performance and reputation</li>
            <li>Tutors are experts in their fields and practice in nearby District Hospitals</li>
            <li>Students observe and respect professional ethics</li>
            <li>Tuition fees are affordable</li>
            <li>Availability of scholarships and bursaries to those that qualify</li>
            <li>Excellent facilities in place and conducive environment to study</li>
            <li>Excellent extracurricular activities and community health visits</li>
            <li>Our graduates get good jobs in health care institutions</li>
            <li>The school is easily accessible and strategically situated within the community to serve the public</li>
            </ul>'
        ],
        [
            'post_type' => 'page',
            'post_key' => 'terms-and-conditions',
            'post_title' => 'terms and conditions',
            'post_featured_image' => 'aamsnm/img/header.jpg',
        ],

    ],
    'options' => [
        'aamsnm_logo' => 'aamsnm/img/aamsnm_logo.png',
        'aamsnm_favicon' => 'media/favicon.jpg',
        'aamsnm_email' => 'anume.nursing@ymail.com',
        'aamsnm_phone' => '+256 78251 5211',
        'show_slider_homepage' => '1',
        'footer_show_sociallinks' => '1',
        'footer_show_developer_details' => '1',
        'aamsnm_address' => 'P.O BOX 07, Pallisa, Uganda Kalaki Subcounty - 1 KM from Pallisa Town along Pallisa Kumi road.'
    ]

];