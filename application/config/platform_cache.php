<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Keep a cache of certain parts of the Intent tree for faster processing
* So we don't have to make DB calls to figure them out every time!
* See here for all entities cached: https://mench.com/play/4527
*
* ATTENTION: Also search for "en_ids_" and "en_all_" when trying to manage these throughout the code base
*
*/

//Generated 2019-11-21 11:34:57 PST

//BLOGGING. REIMAGINED.:
$config['en_ids_11968'] = array(11969,11980,11984,11972,11977,11976);
$config['en_all_11968'] = array(
    11969 => array(
        'm_icon' => '<i class="fas fa-exchange rotate315" aria-hidden="true"></i>',
        'm_name' => 'INTERACTIVE',
        'm_desc' => 'where micro-blogs are linked together with a flow that\'s either pre-determined or reader-determined to create engaging conversations.',
        'm_parents' => array(11982,11968),
    ),
    11980 => array(
        'm_icon' => '<i class="fas fa-users" aria-hidden="true"></i>',
        'm_name' => 'SOCIAL',
        'm_desc' => 'where players can make new friends based on their interests to discuss or practice something important to them.',
        'm_parents' => array(11982,11968),
    ),
    11984 => array(
        'm_icon' => '<i class="fas fa-puzzle-piece" aria-hidden="true"></i>',
        'm_name' => 'MODULAR',
        'm_desc' => 'where all published blogs can be reused to easily and quickly create an engaging conversation.',
        'm_parents' => array(11968),
    ),
    11972 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'INCLUSIVE',
        'm_desc' => 'where everyone is welcome to share stories and ideas that matter to them, write code or even govern the platform.',
        'm_parents' => array(11968),
    ),
    11977 => array(
        'm_icon' => '<i class="fas fa-atom-alt" aria-hidden="true"></i>',
        'm_name' => 'SCIENCE-BASED',
        'm_desc' => 'where blogs can reference first-principles and best-practices from expert sources like books, videos and articles.',
        'm_parents' => array(11968),
    ),
    11976 => array(
        'm_icon' => '<i class="fas fa-hands-heart" aria-hidden="true"></i>',
        'm_name' => 'NON-PROFIT',
        'm_desc' => 'and on a mission to expand human potential by building and sharing consensus.',
        'm_parents' => array(11968),
    ),
);

//PLAY TABS:
$config['en_ids_11088'] = array(11033,11089);
$config['en_all_11088'] = array(
    11033 => array(
        'm_icon' => '<i class="fas fa-toolbox blue" aria-hidden="true"></i>',
        'm_name' => 'RIGHT TABS',
        'm_desc' => '',
        'm_parents' => array(11088,4527),
    ),
    11089 => array(
        'm_icon' => '<i class="fas fa-eye blue" aria-hidden="true"></i>',
        'm_name' => 'LEFT TABS',
        'm_desc' => '',
        'm_parents' => array(4527,11088),
    ),
);

//PLAY LEFT TABS:
$config['en_ids_11089'] = array(11029,4997);
$config['en_all_11089'] = array(
    11029 => array(
        'm_icon' => '<i class="fas fa-hand-holding-seedling blue" aria-hidden="true"></i>',
        'm_name' => 'PORTFOLIO',
        'm_desc' => '',
        'm_parents' => array(11084,11089,11028),
    ),
    4997 => array(
        'm_icon' => '<i class="fas fa-tools blue" aria-hidden="true"></i>',
        'm_name' => 'MASS UPDATE',
        'm_desc' => '',
        'm_parents' => array(10983,11089,4758,4506,4426,4527),
    ),
);

//Teaching & Academics:
$config['en_ids_10725'] = array(10843,10844,10845,10846,10847,10848,3287,10850,10851,10852);
$config['en_all_10725'] = array(
    10843 => array(
        'm_icon' => '<i class="far fa-wrench"></i>',
        'm_name' => 'Engineering',
        'm_desc' => '',
        'm_parents' => array(10725),
    ),
    10844 => array(
        'm_icon' => '<i class="far fa-landmark"></i>',
        'm_name' => 'Humanities',
        'm_desc' => '',
        'm_parents' => array(10725),
    ),
    10845 => array(
        'm_icon' => '<i class="far fa-calculator-alt" aria-hidden="true"></i>',
        'm_name' => 'Math Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10725),
    ),
    10846 => array(
        'm_icon' => '<i class="far fa-flask-potion" aria-hidden="true"></i>',
        'm_name' => 'Science Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10725),
    ),
    10847 => array(
        'm_icon' => '<i class="far fa-mouse-pointer"></i>',
        'm_name' => 'Online Education',
        'm_desc' => '',
        'm_parents' => array(10725),
    ),
    10848 => array(
        'm_icon' => '<i class="far fa-city"></i>',
        'm_name' => 'Social Science',
        'm_desc' => '',
        'm_parents' => array(10725),
    ),
    3287 => array(
        'm_icon' => '<i class="fas fa-language isblue" aria-hidden="true"></i>',
        'm_name' => 'LANGUAGES',
        'm_desc' => '',
        'm_parents' => array(10725,7552,6122),
    ),
    10850 => array(
        'm_icon' => '<i class="far fa-chalkboard-teacher"></i>',
        'm_name' => 'Teacher Training',
        'm_desc' => '',
        'm_parents' => array(10725),
    ),
    10851 => array(
        'm_icon' => '<i class="far fa-calendar-check"></i>',
        'm_name' => 'Test Prep',
        'm_desc' => '',
        'm_parents' => array(10725),
    ),
    10852 => array(
        'm_icon' => '<i class="far fa-vial"></i>',
        'm_name' => 'Other Teaching & Academics',
        'm_desc' => '',
        'm_parents' => array(10725),
    ),
);

//Lifestyle:
$config['en_ids_10721'] = array(10914,10915,10777,10916,10917,10824,10810,10825,10829,10834,10811,10812,10813,10814,10815,10816);
$config['en_all_10721'] = array(
    10914 => array(
        'm_icon' => '',
        'm_name' => 'Addiction Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10915 => array(
        'm_icon' => '',
        'm_name' => 'Cannabis Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10777 => array(
        'm_icon' => '<i class="far fa-lightbulb-on" aria-hidden="true"></i>',
        'm_name' => 'Creativity Topic',
        'm_desc' => '',
        'm_parents' => array(4305,3311,11097,10721,10711),
    ),
    10916 => array(
        'm_icon' => '',
        'm_name' => 'Disability Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10917 => array(
        'm_icon' => '',
        'm_name' => 'Family Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10824 => array(
        'm_icon' => '<i class="far fa-dumbbell" aria-hidden="true"></i>',
        'm_name' => 'Fitness Topic',
        'm_desc' => '',
        'm_parents' => array(4305,3311,11097,10721),
    ),
    10810 => array(
        'm_icon' => '<i class="far fa-burger-soda" aria-hidden="true"></i>',
        'm_name' => 'Food Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10825 => array(
        'm_icon' => '<i class="far fa-heart-rate" aria-hidden="true"></i>',
        'm_name' => 'Health Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10829 => array(
        'm_icon' => '<i class="far fa-brain" aria-hidden="true"></i>',
        'm_name' => 'Mental Health Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10834 => array(
        'm_icon' => '<i class="far fa-praying-hands" aria-hidden="true"></i>',
        'm_name' => 'Mindfulness Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10811 => array(
        'm_icon' => '<i class="far fa-lips" aria-hidden="true"></i>',
        'm_name' => 'Beauty Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809,10721),
    ),
    10812 => array(
        'm_icon' => '<i class="far fa-plane-departure" aria-hidden="true"></i>',
        'm_name' => 'Travel Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10721),
    ),
    10813 => array(
        'm_icon' => '<i class="far fa-dice" aria-hidden="true"></i>',
        'm_name' => 'Gaming Topic',
        'm_desc' => '',
        'm_parents' => array(4305,3311,11097,10809,10721),
    ),
    10814 => array(
        'm_icon' => '<i class="far fa-home-heart"></i>',
        'm_name' => 'Home Improvement',
        'm_desc' => '',
        'm_parents' => array(10721),
    ),
    10815 => array(
        'm_icon' => '<i class="far fa-dog-leashed"></i>',
        'm_name' => 'Pet Care & Training',
        'm_desc' => '',
        'm_parents' => array(10721),
    ),
    10816 => array(
        'm_icon' => '<i class="far fa-dove"></i>',
        'm_name' => 'Other Lifestyle',
        'm_desc' => '',
        'm_parents' => array(10721),
    ),
);

//Marketing:
$config['en_ids_10720'] = array(10795,10796,10798,10799,10800,10801,10802,10803,10804,10805,10806,10807,10808);
$config['en_all_10720'] = array(
    10795 => array(
        'm_icon' => '<i class="far fa-file-chart-line"></i>',
        'm_name' => 'Digital Marketing',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10796 => array(
        'm_icon' => '<i class="far fa-list-ol"></i>',
        'm_name' => 'Search Engine Optimization',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10798 => array(
        'm_icon' => '<i class="far fa-font"></i>',
        'm_name' => 'Branding',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10799 => array(
        'm_icon' => '<i class="far fa-megaphone"></i>',
        'm_name' => 'Marketing Fundamentals',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10800 => array(
        'm_icon' => '<i class="far fa-robot"></i>',
        'm_name' => 'Analytics & Automation',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10801 => array(
        'm_icon' => '<i class="far fa-user-headset"></i>',
        'm_name' => 'Public Relations',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10802 => array(
        'm_icon' => '<i class="far fa-ad"></i>',
        'm_name' => 'Advertising',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10803 => array(
        'm_icon' => '<i class="far fa-film"></i>',
        'm_name' => 'Video & Mobile Marketing',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10804 => array(
        'm_icon' => '<i class="far fa-folder-open"></i>',
        'm_name' => 'Content Marketing',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10805 => array(
        'm_icon' => '<i class="far fa-chart-line"></i>',
        'm_name' => 'Growth Hacking',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10806 => array(
        'm_icon' => '<i class="far fa-users-medical"></i>',
        'm_name' => 'Affiliate Marketing',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10807 => array(
        'm_icon' => '<i class="far fa-sunglasses"></i>',
        'm_name' => 'Product Marketing',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
    10808 => array(
        'm_icon' => '<i class="far fa-bullhorn"></i>',
        'm_name' => 'Other Marketing',
        'm_desc' => '',
        'm_parents' => array(10720),
    ),
);

//Design:
$config['en_ids_10719'] = array(10784,10785,10786,10787,10788,10789,10790,10791,10792,10793,10794);
$config['en_all_10719'] = array(
    10784 => array(
        'm_icon' => '<i class="far fa-object-group"></i>',
        'm_name' => 'Web Design',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10785 => array(
        'm_icon' => '<i class="far fa-pencil-paintbrush"></i>',
        'm_name' => 'Graphic Design',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10786 => array(
        'm_icon' => '<i class="far fa-pen-nib"></i>',
        'm_name' => 'Design Tools',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10787 => array(
        'm_icon' => '<i class="far fa-hand-pointer"></i>',
        'm_name' => 'User Experience',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10788 => array(
        'm_icon' => '<i class="far fa-puzzle-piece"></i>',
        'm_name' => 'Game Design',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10789 => array(
        'm_icon' => '<i class="far fa-magic"></i>',
        'm_name' => 'Design Thinking',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10790 => array(
        'm_icon' => '<i class="far fa-play-circle"></i>',
        'm_name' => '3d & Animation',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10791 => array(
        'm_icon' => '<i class="far fa-user-crown"></i>',
        'm_name' => 'Fashion',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10792 => array(
        'm_icon' => '<i class="far fa-synagogue"></i>',
        'm_name' => 'Architectural Design',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10793 => array(
        'm_icon' => '<i class="far fa-lamp"></i>',
        'm_name' => 'Interior Design',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
    10794 => array(
        'm_icon' => '<i class="far fa-drafting-compass"></i>',
        'm_name' => 'Other Design',
        'm_desc' => '',
        'm_parents' => array(10719),
    ),
);

//Office Productivity:
$config['en_ids_10718'] = array(4626,4796,2792,10766,10767,10768);
$config['en_all_10718'] = array(
    4626 => array(
        'm_icon' => '<i class="fab fa-microsoft"></i>',
        'm_name' => 'Microsoft',
        'm_desc' => '',
        'm_parents' => array(1326,10718,3084,2750),
    ),
    4796 => array(
        'm_icon' => '<i class="fab fa-apple"></i>',
        'm_name' => 'Apple',
        'm_desc' => '',
        'm_parents' => array(3084,10718,2750,1326),
    ),
    2792 => array(
        'm_icon' => '<i class="fab fa-google" aria-hidden="true"></i>',
        'm_name' => 'Google',
        'm_desc' => '',
        'm_parents' => array(3088,10718,3084,1326,2750),
    ),
    10766 => array(
        'm_icon' => '<i class="far fa-building"></i>',
        'm_name' => 'SAP',
        'm_desc' => '',
        'm_parents' => array(1326,2750,3084,10718),
    ),
    10767 => array(
        'm_icon' => '<i class="far fa-building"></i>',
        'm_name' => 'Oracle',
        'm_desc' => '',
        'm_parents' => array(1326,2750,3084,10718),
    ),
    10768 => array(
        'm_icon' => '<i class="far fa-phone-office"></i>',
        'm_name' => 'Other Office Productivity',
        'm_desc' => '',
        'm_parents' => array(10718),
    ),
);

//IT & Software:
$config['en_ids_10717'] = array(10761,10762,10763,10764,10765);
$config['en_all_10717'] = array(
    10761 => array(
        'm_icon' => '<i class="far fa-file-certificate"></i>',
        'm_name' => 'IT Certification',
        'm_desc' => '',
        'm_parents' => array(10717),
    ),
    10762 => array(
        'm_icon' => '<i class="far fa-network-wired"></i>',
        'm_name' => 'Network & Security',
        'm_desc' => '',
        'm_parents' => array(10717),
    ),
    10763 => array(
        'm_icon' => '<i class="far fa-hdd"></i>',
        'm_name' => 'hardware',
        'm_desc' => '',
        'm_parents' => array(10717),
    ),
    10764 => array(
        'm_icon' => '<i class="far fa-laptop-code"></i>',
        'm_name' => 'Operating Systems',
        'm_desc' => '',
        'm_parents' => array(10717),
    ),
    10765 => array(
        'm_icon' => '<i class="far fa-window"></i>',
        'm_name' => 'Other IT & Sofwtare',
        'm_desc' => '',
        'm_parents' => array(10717),
    ),
);

//Money Topic:
$config['en_ids_10716'] = array(11640,11172,11643,11296,11638,11249,11167,11641,11525,11642,11639);
$config['en_all_10716'] = array(
    11640 => array(
        'm_icon' => '<i class="fal fa-pegasus ismatt"></i>',
        'm_name' => 'benlefort1988',
        'm_desc' => '',
        'm_parents' => array(10716,3311,11158,1278),
    ),
    11172 => array(
        'm_icon' => '<i class="far fa-squirrel ismatt"></i>',
        'm_name' => 'dannymaiorca',
        'm_desc' => '',
        'm_parents' => array(10716,10753,3311,11158,1278),
    ),
    11643 => array(
        'm_icon' => '<i class="far fa-fish yellow"></i>',
        'm_name' => 'gk_',
        'm_desc' => '',
        'm_parents' => array(10716,3311,11158,1278),
    ),
    11296 => array(
        'm_icon' => '<i class="fas fa-pig ispink"></i>',
        'm_name' => 'kimduke_68108',
        'm_desc' => '',
        'm_parents' => array(10716,10810,3311,11158,1278),
    ),
    11638 => array(
        'm_icon' => '<i class="far fa-bat yellow"></i>',
        'm_name' => 'kristinwong5',
        'm_desc' => '',
        'm_parents' => array(10716,3311,11158,1278),
    ),
    11249 => array(
        'm_icon' => '<i class="fas fa-badger-honey blue"></i>',
        'm_name' => 'minutesmag',
        'm_desc' => '',
        'm_parents' => array(11965,11105,10716,3311,11158,1278),
    ),
    11167 => array(
        'm_icon' => '<i class="far fa-elephant ispink"></i>',
        'm_name' => 'NautilusMag',
        'm_desc' => '',
        'm_parents' => array(10845,10846,10114,10716,11123,11131,11150,10753,3311,11158,1278),
    ),
    11641 => array(
        'm_icon' => '<i class="fal fa-hippo blue"></i>',
        'm_name' => 'pauljalvarez',
        'm_desc' => '',
        'm_parents' => array(10716,3311,11158,1278),
    ),
    11525 => array(
        'm_icon' => '<i class="fas fa-narwhal yellow"></i>',
        'm_name' => 'TheAtlantic',
        'm_desc' => '',
        'm_parents' => array(10846,10716,11130,3311,11158,1278),
    ),
    11642 => array(
        'm_icon' => '<i class="fal fa-frog yellow"></i>',
        'm_name' => 'themotleyfool',
        'm_desc' => '',
        'm_parents' => array(10716,3311,11158,1278),
    ),
    11639 => array(
        'm_icon' => '<i class="far fa-deer ismatt"></i>',
        'm_name' => 'timdenning',
        'm_desc' => '',
        'm_parents' => array(11962,11959,10797,10913,11098,11118,10777,10716,3311,11158,1278),
    ),
);

//Business:
$config['en_ids_10712'] = array(10735,10736,10737,10738,10739,10740,10741,10742,10743,10744,10745,7325,10748);
$config['en_all_10712'] = array(
    10735 => array(
        'm_icon' => '<i class="far fa-box-usd"></i>',
        'm_name' => 'Business Finance',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10736 => array(
        'm_icon' => '<i class="far fa-lightbulb-dollar"></i>',
        'm_name' => 'Entrepreneurship',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10737 => array(
        'm_icon' => '<i class="far fa-comments-alt"></i>',
        'm_name' => 'Communications',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10738 => array(
        'm_icon' => '<i class="far fa-piggy-bank"></i>',
        'm_name' => 'Management',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10739 => array(
        'm_icon' => '<i class="far fa-briefcase"></i>',
        'm_name' => 'Sales',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10740 => array(
        'm_icon' => '<i class="far fa-bullseye"></i>',
        'm_name' => 'Strategy',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10741 => array(
        'm_icon' => '<i class="far fa-calculator"></i>',
        'm_name' => 'Operations',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10742 => array(
        'm_icon' => '<i class="far fa-sitemap"></i>',
        'm_name' => 'Project Management',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10743 => array(
        'm_icon' => '<i class="far fa-balance-scale"></i>',
        'm_name' => 'Business Law',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10744 => array(
        'm_icon' => '<i class="far fa-analytics"></i>',
        'm_name' => 'Data & Analytics',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10745 => array(
        'm_icon' => '<i class="far fa-home"></i>',
        'm_name' => 'Home Business',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    7325 => array(
        'm_icon' => '<i class="far fa-users"></i>',
        'm_name' => 'Human Resources',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
    10748 => array(
        'm_icon' => '<i class="far fa-hotel"></i>',
        'm_name' => 'Real Estate',
        'm_desc' => '',
        'm_parents' => array(10712),
    ),
);

//Personal Development:
$config['en_ids_10711'] = array(10769,10770,10771,10772,7392,10773,10774,10775,10776,10777,10778,10779,10780,10781,10782,10783);
$config['en_all_10711'] = array(
    10769 => array(
        'm_icon' => '<i class="far fa-head-side-medical"></i>',
        'm_name' => 'Personal Transformation',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    10770 => array(
        'm_icon' => '<i class="far fa-user-chart" aria-hidden="true"></i>',
        'm_name' => 'Productivity Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10711),
    ),
    10771 => array(
        'm_icon' => '<i class="far fa-mountain" aria-hidden="true"></i>',
        'm_name' => 'Leadership Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10711),
    ),
    10772 => array(
        'm_icon' => '<i class="far fa-wallet"></i>',
        'm_name' => 'Personal Finance',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    7392 => array(
        'm_icon' => '<i class="far fa-user-tie"></i>',
        'm_name' => 'Career Development',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    10773 => array(
        'm_icon' => '<i class="far fa-hands-helping" aria-hidden="true"></i>',
        'm_name' => 'Parenting Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10711),
    ),
    10774 => array(
        'm_icon' => '<i class="far fa-hand-holding-heart"></i>',
        'm_name' => 'Happiness',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    10775 => array(
        'm_icon' => '<i class="far fa-pray" aria-hidden="true"></i>',
        'm_name' => 'Spirituality Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10711),
    ),
    10776 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'Personal Brand Building',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    10777 => array(
        'm_icon' => '<i class="far fa-lightbulb-on" aria-hidden="true"></i>',
        'm_name' => 'Creativity Topic',
        'm_desc' => '',
        'm_parents' => array(4305,3311,11097,10721,10711),
    ),
    10778 => array(
        'm_icon' => '<i class="far fa-expand-arrows"></i>',
        'm_name' => 'Influence',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    10779 => array(
        'm_icon' => '<i class="far fa-grin-hearts" aria-hidden="true"></i>',
        'm_name' => 'Self Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10711),
    ),
    10780 => array(
        'm_icon' => '<i class="far fa-user-clock"></i>',
        'm_name' => 'Stress Management',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    10781 => array(
        'm_icon' => '<i class="far fa-head-side-brain"></i>',
        'm_name' => 'Memory & Study Skills',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    10782 => array(
        'm_icon' => '<i class="far fa-thumbs-up"></i>',
        'm_name' => 'Motivation',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
    10783 => array(
        'm_icon' => '<i class="far fa-star-christmas"></i>',
        'm_name' => 'Other Personal Development',
        'm_desc' => '',
        'm_parents' => array(10711),
    ),
);

//Software Engineering:
$config['en_ids_10710'] = array(10726,10727,10728,10729,10730,10731,10733,10734);
$config['en_all_10710'] = array(
    10726 => array(
        'm_icon' => '<i class="far fa-browser"></i>',
        'm_name' => 'Web Development',
        'm_desc' => '',
        'm_parents' => array(10710),
    ),
    10727 => array(
        'm_icon' => '<i class="far fa-mobile"></i>',
        'm_name' => 'Mobile Apps',
        'm_desc' => '',
        'm_parents' => array(10710),
    ),
    10728 => array(
        'm_icon' => '<i class="far fa-file-code"></i>',
        'm_name' => 'Programming Languages',
        'm_desc' => '',
        'm_parents' => array(10710),
    ),
    10729 => array(
        'm_icon' => '<i class="far fa-gamepad"></i>',
        'm_name' => 'Game Development',
        'm_desc' => '',
        'm_parents' => array(10710),
    ),
    10730 => array(
        'm_icon' => '<i class="far fa-database"></i>',
        'm_name' => 'Databases',
        'm_desc' => '',
        'm_parents' => array(10710),
    ),
    10731 => array(
        'm_icon' => '<i class="far fa-laptop-code"></i>',
        'm_name' => 'Software Testing',
        'm_desc' => '',
        'm_parents' => array(10710),
    ),
    10733 => array(
        'm_icon' => '<i class="far fa-phone-laptop"></i>',
        'm_name' => 'Development Tools',
        'm_desc' => '',
        'm_parents' => array(10710),
    ),
    10734 => array(
        'm_icon' => '<i class="far fa-shopping-cart"></i>',
        'm_name' => 'E-Commerce',
        'm_desc' => '',
        'm_parents' => array(10710),
    ),
);

//Arts & Entertainment:
$config['en_ids_10809'] = array(10811,11958,10907,10908,10909,8866,10813,10910,10724,10722,2999,10911,10797,10826,10227,10912,10913);
$config['en_all_10809'] = array(
    10811 => array(
        'm_icon' => '<i class="far fa-lips" aria-hidden="true"></i>',
        'm_name' => 'Beauty Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809,10721),
    ),
    11958 => array(
        'm_icon' => '',
        'm_name' => 'Books Topic',
        'm_desc' => '',
        'm_parents' => array(10809,3311,11097),
    ),
    10907 => array(
        'm_icon' => '',
        'm_name' => 'Comics Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    10908 => array(
        'm_icon' => '',
        'm_name' => 'Culture Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    10909 => array(
        'm_icon' => '',
        'm_name' => 'Fiction Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    8866 => array(
        'm_icon' => '',
        'm_name' => 'Film Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809,5008),
    ),
    10813 => array(
        'm_icon' => '<i class="far fa-dice" aria-hidden="true"></i>',
        'm_name' => 'Gaming Topic',
        'm_desc' => '',
        'm_parents' => array(4305,3311,11097,10809,10721),
    ),
    10910 => array(
        'm_icon' => '',
        'm_name' => 'Humor Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    10724 => array(
        'm_icon' => '<i class="far fa-music" aria-hidden="true"></i>',
        'm_name' => 'Music Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    10722 => array(
        'm_icon' => '<i class="far fa-camera-retro" aria-hidden="true"></i>',
        'm_name' => 'Photography Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    2999 => array(
        'm_icon' => '<i class="far fa-microphone" aria-hidden="true"></i>',
        'm_name' => 'Podcasts',
        'm_desc' => '',
        'm_parents' => array(10809,10571,4983,7614,6805,3000),
    ),
    10911 => array(
        'm_icon' => '',
        'm_name' => 'Poetry Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    10797 => array(
        'm_icon' => '<i class="far fa-share-alt" aria-hidden="true"></i>',
        'm_name' => 'Social Media Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    10826 => array(
        'm_icon' => '<i class="far fa-futbol"></i>',
        'm_name' => 'Sports',
        'm_desc' => '',
        'm_parents' => array(10809),
    ),
    10227 => array(
        'm_icon' => '',
        'm_name' => 'Style Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809,5008),
    ),
    10912 => array(
        'm_icon' => '',
        'm_name' => 'TV Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
    10913 => array(
        'm_icon' => '',
        'm_name' => 'Writing Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,10809),
    ),
);

//Industry:
$config['en_ids_10746'] = array();
$config['en_all_10746'] = array(
);

//FEATURED TOPICS:
$config['en_ids_10869'] = array(10809,10712,10719,10746,10717,10721,10720,10716,10718,10711,10710,10725);
$config['en_all_10869'] = array(
    10809 => array(
        'm_icon' => '<i class="far fa-palette" aria-hidden="true"></i>',
        'm_name' => 'Arts & Entertainment',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10712 => array(
        'm_icon' => '<i class="far fa-chart-line" aria-hidden="true"></i>',
        'm_name' => 'Business',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10719 => array(
        'm_icon' => '<i class="far fa-pencil-ruler" aria-hidden="true"></i>',
        'm_name' => 'Design',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10746 => array(
        'm_icon' => '<i class="far fa-industry"></i>',
        'm_name' => 'Industry',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10717 => array(
        'm_icon' => '<i class="far fa-desktop"></i>',
        'm_name' => 'IT & Software',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10721 => array(
        'm_icon' => '<i class="far fa-hand-peace"></i>',
        'm_name' => 'Lifestyle',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10720 => array(
        'm_icon' => '<i class="far fa-bullseye-arrow" aria-hidden="true"></i>',
        'm_name' => 'Marketing',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10716 => array(
        'm_icon' => '<i class="far fa-wallet" aria-hidden="true"></i>',
        'm_name' => 'Money Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,4527,10869),
    ),
    10718 => array(
        'm_icon' => '<i class="far fa-clipboard-list-check"></i>',
        'm_name' => 'Office Productivity',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10711 => array(
        'm_icon' => '<i class="far fa-smile"></i>',
        'm_name' => 'Personal Development',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10710 => array(
        'm_icon' => '<i class="far fa-code" aria-hidden="true"></i>',
        'm_name' => 'Software Engineering',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10725 => array(
        'm_icon' => '<i class="far fa-atom-alt"></i>',
        'm_name' => 'Teaching & Academics',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
);

//PLAYER SUBSCRIPTION:
$config['en_ids_11007'] = array(11010,11011,11012);
$config['en_all_11007'] = array(
    11010 => array(
        'm_icon' => '<i class="fas fa-check-circle blue"></i>',
        'm_name' => '2,000 WORDS / MONTH FREE',
        'm_desc' => '',
        'm_parents' => array(11061,11007),
    ),
    11011 => array(
        'm_icon' => '<i class="fas fa-usd-circle ispink" aria-hidden="true"></i>',
        'm_name' => '$5/MONTH UNLIMITED READING',
        'm_desc' => '',
        'm_parents' => array(11162,11007),
    ),
    11012 => array(
        'm_icon' => '<i class="fas fa-usd-circle yellow" aria-hidden="true"></i>',
        'm_name' => '$50/YEAR UNLIMITED READING',
        'm_desc' => '',
        'm_parents' => array(11163,11007),
    ),
);

//SHOW PLAY TAB NAMES:
$config['en_ids_11084'] = array(11029,11030);
$config['en_all_11084'] = array(
    11029 => array(
        'm_icon' => '<i class="fas fa-hand-holding-seedling blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER PORTFOLIO',
        'm_desc' => '',
        'm_parents' => array(11084,11089,11028),
    ),
    11030 => array(
        'm_icon' => '<i class="fas fa-id-badge blue" aria-hidden="true"></i>',
        'm_name' => 'PROFILE',
        'm_desc' => '',
        'm_parents' => array(11084,11033,11028),
    ),
);

//PLAY RIGHT TABS:
$config['en_ids_11033'] = array(11030,7545,10573,4983,4231,4601,7347,6146,11039);
$config['en_all_11033'] = array(
    11030 => array(
        'm_icon' => '<i class="fas fa-id-badge blue" aria-hidden="true"></i>',
        'm_name' => 'PROFILE',
        'm_desc' => '',
        'm_parents' => array(11084,11033,11028),
    ),
    7545 => array(
        'm_icon' => '<i class="fas fa-user-tag blue" aria-hidden="true"></i>',
        'm_name' => 'BLOG PLAYER TAGS',
        'm_desc' => '',
        'm_parents' => array(10983,11033,10990,10594,10589,7703,7551,4593,4485),
    ),
    10573 => array(
        'm_icon' => '<i class="fas fa-bookmark yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG BLOG BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10984,11033,10990,10594,10589,4593,7703,7551,4485),
    ),
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'BLOG AUTHORS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'BLOG MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG TAGS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
    7347 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink" aria-hidden="true"></i>',
        'm_name' => 'BLOG READ BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10964,11033,10990,6771,4527),
    ),
    6146 => array(
        'm_icon' => '<i class="fas fa-book-reader ispink" aria-hidden="true"></i>',
        'm_name' => 'BLOG READ HISTORY',
        'm_desc' => '',
        'm_parents' => array(10964,11033,10990,6771,4527),
    ),
    11039 => array(
        'm_icon' => '<i class="fas fa-caret-down"></i>',
        'm_name' => 'PLAYER ADMIN MENU',
        'm_desc' => '',
        'm_parents' => array(10983,11033,4527,11040),
    ),
);

//READ ALL CONNECTIONS:
$config['en_ids_11081'] = array(4369,4429,4368,4366,4371,4364,4593);
$config['en_all_11081'] = array(
    4369 => array(
        'm_icon' => '<i class="fas fa-hashtag ispink"></i>',
        'm_name' => 'CHILD BLOG',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6202,6232,4341),
    ),
    4429 => array(
        'm_icon' => '<i class="fas fa-at ispink"></i>',
        'm_name' => 'CHILD PLAYER',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6160,6232,4341),
    ),
    4368 => array(
        'm_icon' => '<i class="fas fa-hashtag ispink"></i>',
        'm_name' => 'PARENT BLOG',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6202,6232,4341),
    ),
    4366 => array(
        'm_icon' => '<i class="fas fa-at ispink"></i>',
        'm_name' => 'PARENT PLAYER',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6160,6232,4341),
    ),
    4371 => array(
        'm_icon' => '<i class="fas fa-link ispink"></i>',
        'm_name' => 'PARENT READ',
        'm_desc' => '',
        'm_parents' => array(11081,10692,4367,6232,4341),
    ),
    4364 => array(
        'm_icon' => '<i class="far fa-user-edit ispink"></i>',
        'm_name' => 'PLAYER',
        'm_desc' => '',
        'm_parents' => array(11081,6160,6232,6194,4341),
    ),
    4593 => array(
        'm_icon' => '<i class="fas fa-plug ispink"></i>',
        'm_name' => 'TYPE',
        'm_desc' => '',
        'm_parents' => array(11081,10659,6160,6232,6194,4527,4341),
    ),
);

//PLATFORM VARIABLES:
$config['en_ids_6232'] = array(7585,6202,6159,4356,7596,4737,4736,6207,6203,6208,6168,6283,6228,6165,6162,6170,6161,6169,6167,6197,6198,6160,6172,6177,6199,4369,4429,7694,4367,4358,4372,6103,4368,4366,4371,4364,4370,6186,4362,4593,4739,4735);
$config['en_all_6232'] = array(
    7585 => array(
        'm_icon' => '<i class="fas fa-random yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG FLOW',
        'm_desc' => 'in_completion_method_entity_id',
        'm_parents' => array(6204,10651,6160,6194,6232,4527,6201),
    ),
    6202 => array(
        'm_icon' => '<i class="fas fa-plus-circle yellow"></i>',
        'm_name' => 'BLOG ID',
        'm_desc' => 'in_id',
        'm_parents' => array(6232,6215,6201),
    ),
    6159 => array(
        'm_icon' => '<i class="fas fa-lambda yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG METADATA',
        'm_desc' => 'in_metadata',
        'm_parents' => array(11049,6232,6201,6195),
    ),
    4356 => array(
        'm_icon' => '<i class="fas fa-stopwatch yellow"></i>',
        'm_name' => 'BLOG Read Time',
        'm_desc' => 'in_completion_seconds',
        'm_parents' => array(10888,10650,6232,6201),
    ),
    7596 => array(
        'm_icon' => '<i class="fas fa-triangle yellow"></i>',
        'm_name' => 'BLOG Scope',
        'm_desc' => 'in_level_entity_id',
        'm_parents' => array(10888,6204,7302,6160,6201,6194,6232,4527),
    ),
    4737 => array(
        'm_icon' => '<i class="fas fa-sliders-h yellow"></i>',
        'm_name' => 'BLOG STATUS',
        'm_desc' => 'in_status_entity_id',
        'm_parents' => array(11054,6204,10648,6226,6160,6232,7302,6194,6201,4527),
    ),
    4736 => array(
        'm_icon' => '<i class="fas fa-h1 yellow"></i>',
        'm_name' => 'BLOG TITLE',
        'm_desc' => 'in_outcome',
        'm_parents' => array(11071,10644,6232,6201),
    ),
    6207 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Entity Metadata Algolia ID',
        'm_desc' => 'en__algolia_id',
        'm_parents' => array(6232,6215,6172),
    ),
    6203 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Facebook Attachment ID',
        'm_desc' => 'fb_att_id',
        'm_parents' => array(6232,6215,2793,6103),
    ),
    6208 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Algolia ID',
        'm_desc' => 'in__algolia_id',
        'm_parents' => array(6232,6215,3323,6159),
    ),
    6168 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Common Steps',
        'm_desc' => 'in__metadata_common_steps',
        'm_parents' => array(6232,6214,6159),
    ),
    6283 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Expansion Conditional',
        'm_desc' => 'in__metadata_expansion_conditional',
        'm_parents' => array(6214,6232,6159),
    ),
    6228 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Expansion Steps',
        'm_desc' => 'in__metadata_expansion_steps',
        'm_parents' => array(6232,6214,6159),
    ),
    6165 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Experts',
        'm_desc' => 'in__metadata_experts',
        'm_parents' => array(6232,6214,6159),
    ),
    6162 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Maximum Seconds',
        'm_desc' => 'in__metadata_max_seconds',
        'm_parents' => array(6232,6214,4356,6159),
    ),
    6170 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Maximum Steps',
        'm_desc' => 'in__metadata_max_steps',
        'm_parents' => array(6232,6214,6159),
    ),
    6161 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Minimum Seconds',
        'm_desc' => 'in__metadata_min_seconds',
        'm_parents' => array(6232,6214,4356,6159),
    ),
    6169 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Minimum Steps',
        'm_desc' => 'in__metadata_min_steps',
        'm_parents' => array(6232,6214,6159),
    ),
    6167 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Intent Metadata Sources',
        'm_desc' => 'in__metadata_sources',
        'm_parents' => array(6232,6214,6159),
    ),
    6197 => array(
        'm_icon' => '<i class="fas fa-fingerprint isblue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER FULL NAME',
        'm_desc' => 'en_name',
        'm_parents' => array(6225,11072,10646,5000,4998,4999,6232,6206),
    ),
    6198 => array(
        'm_icon' => '<i class="fas fa-user-circle isblue"></i>',
        'm_name' => 'PLAYER ICON',
        'm_desc' => 'en_icon',
        'm_parents' => array(10653,5943,10625,6232,6206),
    ),
    6160 => array(
        'm_icon' => '<i class="fas fa-user-circle blue"></i>',
        'm_name' => 'PLAYER ID',
        'm_desc' => 'en_id',
        'm_parents' => array(6232,6215,6206),
    ),
    6172 => array(
        'm_icon' => '<i class="fas fa-lambda isblue"></i>',
        'm_name' => 'PLAYER METADATA',
        'm_desc' => 'en_metadata',
        'm_parents' => array(11044,6232,3323,6206,6195),
    ),
    6177 => array(
        'm_icon' => '<i class="fas fa-sliders-h isblue"></i>',
        'm_name' => 'PLAYER STATUS',
        'm_desc' => 'en_status_entity_id',
        'm_parents' => array(11054,7303,6204,5003,10654,6160,6232,6194,6206,4527),
    ),
    6199 => array(
        'm_icon' => '<i class="fas fa-shield-check isblue"></i>',
        'm_name' => 'PLAYER TRUST SCORE',
        'm_desc' => 'en_trust_score',
        'm_parents' => array(6232,4463,6214,6206),
    ),
    4369 => array(
        'm_icon' => '<i class="fas fa-hashtag ispink"></i>',
        'm_name' => 'READ CHILD BLOG',
        'm_desc' => 'ln_child_intent_id',
        'm_parents' => array(11081,10692,6202,6232,4341),
    ),
    4429 => array(
        'm_icon' => '<i class="fas fa-at ispink"></i>',
        'm_name' => 'READ CHILD PLAYER',
        'm_desc' => 'ln_child_entity_id',
        'm_parents' => array(11081,10692,6160,6232,4341),
    ),
    7694 => array(
        'm_icon' => '<i class="fas fa-project-diagram ispink"></i>',
        'm_name' => 'READ EXTERNAL ID',
        'm_desc' => 'ln_external_id',
        'm_parents' => array(6215,6232,4341),
    ),
    4367 => array(
        'm_icon' => '<i class="fas fa-info-circle ispink"></i>',
        'm_name' => 'READ ID',
        'm_desc' => 'ln_id',
        'm_parents' => array(6232,6215,4341),
    ),
    4358 => array(
        'm_icon' => '<i class="far fa-coin"></i>',
        'm_name' => 'READ MARKS',
        'm_desc' => 'tr__assessment_points',
        'm_parents' => array(10984,10663,6103,6410,6232),
    ),
    4372 => array(
        'm_icon' => '<i class="fas fa-sticky-note ispink"></i>',
        'm_name' => 'READ MESSAGE',
        'm_desc' => 'ln_content',
        'm_parents' => array(7578,10679,10657,5001,6232,4341),
    ),
    6103 => array(
        'm_icon' => '<i class="far fa-lambda ispink"></i>',
        'm_name' => 'READ METADATA',
        'm_desc' => 'ln_metadata',
        'm_parents' => array(4527,6232,6195,4341),
    ),
    4368 => array(
        'm_icon' => '<i class="fas fa-hashtag ispink"></i>',
        'm_name' => 'READ PARENT BLOG',
        'm_desc' => 'ln_parent_intent_id',
        'm_parents' => array(11081,10692,6202,6232,4341),
    ),
    4366 => array(
        'm_icon' => '<i class="fas fa-at ispink"></i>',
        'm_name' => 'READ PARENT PLAYER',
        'm_desc' => 'ln_parent_entity_id',
        'm_parents' => array(11081,10692,6160,6232,4341),
    ),
    4371 => array(
        'm_icon' => '<i class="fas fa-link ispink"></i>',
        'm_name' => 'READ PARENT READ',
        'm_desc' => 'ln_parent_link_id',
        'm_parents' => array(11081,10692,4367,6232,4341),
    ),
    4364 => array(
        'm_icon' => '<i class="far fa-user-edit ispink"></i>',
        'm_name' => 'READ PLAYER',
        'm_desc' => 'ln_creator_entity_id',
        'm_parents' => array(11081,6160,6232,6194,4341),
    ),
    4370 => array(
        'm_icon' => '<i class="fas fa-sort ispink"></i>',
        'm_name' => 'READ RANK',
        'm_desc' => 'ln_order',
        'm_parents' => array(10676,10675,6232,4341),
    ),
    6186 => array(
        'm_icon' => '<i class="far fa-sliders-h ispink"></i>',
        'm_name' => 'READ STATUS',
        'm_desc' => 'ln_status_entity_id',
        'm_parents' => array(11054,10677,10661,10656,6204,5865,6160,6232,7304,4527,6194,4341),
    ),
    4362 => array(
        'm_icon' => '<i class="far fa-clock ispink"></i>',
        'm_name' => 'READ TIME',
        'm_desc' => 'ln_timestamp',
        'm_parents' => array(6232,4341),
    ),
    4593 => array(
        'm_icon' => '<i class="fas fa-plug ispink"></i>',
        'm_name' => 'READ TYPE',
        'm_desc' => 'ln_type_entity_id',
        'm_parents' => array(11081,10659,6160,6232,6194,4527,4341),
    ),
    4739 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Unlock Maximum Score',
        'm_desc' => 'tr__conditional_score_max',
        'm_parents' => array(6402,6232),
    ),
    4735 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Unlock Minimum Score',
        'm_desc' => 'tr__conditional_score_min',
        'm_parents' => array(6402,6232),
    ),
);

//MEDIA FILE EXTENSIONS:
$config['en_ids_11080'] = array(4259,4261,4260,4258);
$config['en_all_11080'] = array(
    4259 => array(
        'm_icon' => '<i class="far fa-volume-up blue"></i>',
        'm_name' => 'AUDIO',
        'm_desc' => 'pcm|wav|aiff|mp3|aac|ogg|wma|flac|alac|m4a|m4b|m4p',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4261 => array(
        'm_icon' => '<i class="far fa-file-pdf blue"></i>',
        'm_name' => 'FILE',
        'm_desc' => 'pdc|doc|docx|tex|txt|7z|rar|zip|csv|sql|tar|xml|exe',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4260 => array(
        'm_icon' => '<i class="far fa-image blue"></i>',
        'm_name' => 'IMAGE',
        'm_desc' => 'jpeg|jpg|png|gif|tiff|bmp|img|svg|ico',
        'm_parents' => array(6198,11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4258 => array(
        'm_icon' => '<i class="far fa-video blue"></i>',
        'm_name' => 'VIDEO',
        'm_desc' => 'mp4|m4v|m4p|avi|mov|flv|f4v|f4p|f4a|f4b|wmv|webm|mkv|vob|ogv|ogg|3gp|mpg|mpeg|m2v',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
);

//MESSENGER MEDIA CODES:
$config['en_ids_11059'] = array(4259,4261,4260,4258);
$config['en_all_11059'] = array(
    4259 => array(
        'm_icon' => '<i class="far fa-volume-up blue"></i>',
        'm_name' => 'AUDIO',
        'm_desc' => 'audio',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4261 => array(
        'm_icon' => '<i class="far fa-file-pdf blue"></i>',
        'm_name' => 'FILE',
        'm_desc' => 'file',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4260 => array(
        'm_icon' => '<i class="far fa-image blue"></i>',
        'm_name' => 'IMAGE',
        'm_desc' => 'image',
        'm_parents' => array(6198,11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4258 => array(
        'm_icon' => '<i class="far fa-video blue"></i>',
        'm_name' => 'VIDEO',
        'm_desc' => 'video',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
);

//MESSENGER NOTIFICATION CODES:
$config['en_ids_11058'] = array(4458,4456,4457);
$config['en_all_11058'] = array(
    4458 => array(
        'm_icon' => '<i class="far fa-volume-mute" aria-hidden="true"></i>',
        'm_name' => 'DISABLED',
        'm_desc' => 'NO_PUSH',
        'm_parents' => array(11058,4454),
    ),
    4456 => array(
        'm_icon' => '<i class="far fa-volume-up" aria-hidden="true"></i>',
        'm_name' => 'REGULAR',
        'm_desc' => 'REGULAR',
        'm_parents' => array(11058,4454),
    ),
    4457 => array(
        'm_icon' => '<i class="far fa-volume-down" aria-hidden="true"></i>',
        'm_name' => 'SILENT',
        'm_desc' => 'SILENT_PUSH',
        'm_parents' => array(11058,4454),
    ),
);

//PLATFORM CONFIG VARIABLES:
$config['en_ids_6404'] = array(11062,11094,11095,11071,11069,11079,11076,11077,11074,11075,11064,11985,11986,11065,11063,11060,11067,11066,11072,11092,11093,11073,11057,11056,11061,11162,11163,11070);
$config['en_all_6404'] = array(
    11062 => array(
        'm_icon' => '',
        'm_name' => 'ALGOLIA ENABLED',
        'm_desc' => '1',
        'm_parents' => array(6404),
    ),
    11094 => array(
        'm_icon' => '',
        'm_name' => 'BLOG LEFT COLUMN',
        'm_desc' => 'col-lg-7 col-md-6',
        'm_parents' => array(6404),
    ),
    11095 => array(
        'm_icon' => '',
        'm_name' => 'BLOG RIGHT COLUMN',
        'm_desc' => 'col-lg-5 col-md-6',
        'm_parents' => array(6404),
    ),
    11071 => array(
        'm_icon' => '',
        'm_name' => 'BLOG TITLE MAX LENGTH',
        'm_desc' => '100',
        'm_parents' => array(6404),
    ),
    11069 => array(
        'm_icon' => '',
        'm_name' => 'BYTES PER WORD',
        'm_desc' => '30000',
        'm_parents' => array(6404),
    ),
    11079 => array(
        'm_icon' => '',
        'm_name' => 'DEFAULT PLATFORM TIMEZONE',
        'm_desc' => 'America/Los_Angeles',
        'm_parents' => array(6404),
    ),
    11076 => array(
        'm_icon' => '',
        'm_name' => 'FACEBOOK APP ID',
        'm_desc' => '1782431902047009',
        'm_parents' => array(6404),
    ),
    11077 => array(
        'm_icon' => '',
        'm_name' => 'FACEBOOK DEFAULT GRAPH VERSION',
        'm_desc' => 'v3.2',
        'm_parents' => array(4506,6404),
    ),
    11074 => array(
        'm_icon' => '',
        'm_name' => 'FACEBOOK MESSENGER MAX MESSAGE LENGTH',
        'm_desc' => '2000',
        'm_parents' => array(6404),
    ),
    11075 => array(
        'm_icon' => '',
        'm_name' => 'FACEBOOK PAGE ID',
        'm_desc' => '381488558920384',
        'm_parents' => array(6404),
    ),
    11064 => array(
        'm_icon' => '',
        'm_name' => 'ITEMS PER PAGE',
        'm_desc' => '100',
        'm_parents' => array(6404),
    ),
    11985 => array(
        'm_icon' => '',
        'm_name' => 'LEADERBOARD CUTOFF COUNT',
        'm_desc' => '100',
        'm_parents' => array(6404),
    ),
    11986 => array(
        'm_icon' => '',
        'm_name' => 'LEADERBOARD TOP COUNT',
        'm_desc' => '7',
        'm_parents' => array(6404),
    ),
    11065 => array(
        'm_icon' => '',
        'm_name' => 'MAGIC LINK VALID SECONDS',
        'm_desc' => '3600',
        'm_parents' => array(6404),
    ),
    11063 => array(
        'm_icon' => '',
        'm_name' => 'MAX FILE SIZE [MB]',
        'm_desc' => '25',
        'm_parents' => array(6404),
    ),
    11060 => array(
        'm_icon' => '',
        'm_name' => 'MENCH PLATFORM VERSION',
        'm_desc' => '1.0122',
        'm_parents' => array(6404),
    ),
    11067 => array(
        'm_icon' => '',
        'm_name' => 'NODS PER WORD',
        'm_desc' => '50',
        'm_parents' => array(6404),
    ),
    11066 => array(
        'm_icon' => '',
        'm_name' => 'PASSWORD MIN CHARACTERS',
        'm_desc' => '6',
        'm_parents' => array(6404),
    ),
    11072 => array(
        'm_icon' => '',
        'm_name' => 'PLAYER NAME MAX LENGTH',
        'm_desc' => '140',
        'm_parents' => array(6404),
    ),
    11092 => array(
        'm_icon' => '',
        'm_name' => 'PLAY LEFT COLUMN',
        'm_desc' => 'col-md-6',
        'm_parents' => array(6404),
    ),
    11093 => array(
        'm_icon' => '',
        'm_name' => 'PLAY RIGHT COLUMN',
        'm_desc' => 'col-md-6',
        'm_parents' => array(6404),
    ),
    11073 => array(
        'm_icon' => '',
        'm_name' => 'READABLE MESSAGE MAX LENGTH',
        'm_desc' => '280',
        'm_parents' => array(6404),
    ),
    11057 => array(
        'm_icon' => '',
        'm_name' => 'READ MARKS MAX',
        'm_desc' => '89',
        'm_parents' => array(6404,4358),
    ),
    11056 => array(
        'm_icon' => '',
        'm_name' => 'READ MARKS MIN',
        'm_desc' => '-89',
        'm_parents' => array(6404,4358),
    ),
    11061 => array(
        'm_icon' => '',
        'm_name' => 'READ MONTHLY FREE WORDS',
        'm_desc' => '2000',
        'm_parents' => array(6404),
    ),
    11162 => array(
        'm_icon' => '',
        'm_name' => 'SUBSCRIPTION USD RATE MONTHLY',
        'm_desc' => '5',
        'm_parents' => array(6404),
    ),
    11163 => array(
        'm_icon' => '',
        'm_name' => 'SUBSCRIPTION USD RATE YEARLY',
        'm_desc' => '50',
        'm_parents' => array(6404),
    ),
    11070 => array(
        'm_icon' => '',
        'm_name' => 'UNKNOWN FILE WORDS',
        'm_desc' => '3',
        'm_parents' => array(6404),
    ),
);

//PLATFORM CACHE JS:
$config['en_ids_11054'] = array(4737,6404,6177,6186);
$config['en_all_11054'] = array(
    4737 => array(
        'm_icon' => '<i class="fas fa-sliders-h yellow"></i>',
        'm_name' => 'BLOG STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,6204,10648,6226,6160,6232,7302,6194,6201,4527),
    ),
    6404 => array(
        'm_icon' => '<i class="far fa-lambda" aria-hidden="true"></i>',
        'm_name' => 'PLATFORM CONFIG VARIABLES',
        'm_desc' => '',
        'm_parents' => array(11054,4527,7254,6403),
    ),
    6177 => array(
        'm_icon' => '<i class="fas fa-sliders-h isblue"></i>',
        'm_name' => 'PLAYER STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,7303,6204,5003,10654,6160,6232,6194,6206,4527),
    ),
    6186 => array(
        'm_icon' => '<i class="far fa-sliders-h ispink"></i>',
        'm_name' => 'READ STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,10677,10661,10656,6204,5865,6160,6232,7304,4527,6194,4341),
    ),
);

//BLOG ADMIN MENU:
$config['en_ids_11047'] = array(11051,11049,11050,11048);
$config['en_all_11047'] = array(
    11051 => array(
        'm_icon' => '<i class="fas fa-circle ispink" aria-hidden="true"></i>',
        'm_name' => 'FULL READ HISTORY',
        'm_desc' => '/read/history?any_in_id=',
        'm_parents' => array(11047),
    ),
    11049 => array(
        'm_icon' => '<i class="fas fa-lambda" aria-hidden="true"></i>',
        'm_name' => 'REVIEW METADATA',
        'm_desc' => '/blog/in_review_metadata/',
        'm_parents' => array(11047),
    ),
    11050 => array(
        'm_icon' => '<img src="https://partners.algolia.com/images/logos/algolia-logo-badge.svg">',
        'm_name' => 'UPDATE ALGOLIA',
        'm_desc' => '/read/cron__sync_algolia/in/',
        'm_parents' => array(7279,11047),
    ),
    11048 => array(
        'm_icon' => '<i class="far fa-magic" aria-hidden="true"></i>',
        'm_name' => 'UPDATE REFERENCE CACHE',
        'm_desc' => '/blog/cron__sync_extra_insights/',
        'm_parents' => array(11047),
    ),
);

//PLAYER ADMIN MENU:
$config['en_ids_11039'] = array(11044,11046,11045);
$config['en_all_11039'] = array(
    11044 => array(
        'm_icon' => '<i class="fas fa-lambda" aria-hidden="true"></i>',
        'm_name' => 'METADATA',
        'm_desc' => '/play/en_review_metadata/',
        'm_parents' => array(11039),
    ),
    11046 => array(
        'm_icon' => '<i class="fas fa-circle ispink" aria-hidden="true"></i>',
        'm_name' => 'READ HISTORY',
        'm_desc' => '/read/history?any_en_id=',
        'm_parents' => array(11039),
    ),
    11045 => array(
        'm_icon' => '<img src="https://partners.algolia.com/images/logos/algolia-logo-badge.svg">',
        'm_name' => 'SYNC ALGOLIA',
        'm_desc' => '/read/cron__sync_algolia/en/',
        'm_parents' => array(7279,11039),
    ),
);

//MENCH NAVIGATION:
$config['en_ids_11035'] = array(4269,7291,6225,6287,7256,7540);
$config['en_all_11035'] = array(
    4269 => array(
        'm_icon' => '<i class="fas fa-sign-in-alt" aria-hidden="true"></i>',
        'm_name' => 'LOGIN',
        'm_desc' => '',
        'm_parents' => array(11035),
    ),
    7291 => array(
        'm_icon' => '<i class="fas fa-power-off" aria-hidden="true"></i>',
        'm_name' => 'LOGOUT',
        'm_desc' => '',
        'm_parents' => array(11035),
    ),
    6225 => array(
        'm_icon' => '<i class="fas fa-cog" aria-hidden="true"></i>',
        'm_name' => 'MY ACCOUNT',
        'm_desc' => 'Manage avatar, superpowers, subscription & name',
        'm_parents' => array(11035,4758,4527),
    ),
    6287 => array(
        'm_icon' => '<i class="far fa-tools" aria-hidden="true"></i>',
        'm_name' => 'PRO BLOGGING',
        'm_desc' => '',
        'm_parents' => array(11035,4527,7284),
    ),
    7256 => array(
        'm_icon' => '<i class="fas fa-search" aria-hidden="true"></i>',
        'm_name' => 'SEARCH MENCH',
        'm_desc' => '',
        'm_parents' => array(11035,3323),
    ),
    7540 => array(
        'm_icon' => '<i class="fas fa-balance-scale" aria-hidden="true"></i>',
        'm_name' => 'TERMS OF SERVICE',
        'm_desc' => '',
        'm_parents' => array(11035),
    ),
);

//SHOW BLOG TAB NAMES:
$config['en_ids_11031'] = array(4983,4231,11020,11019,4601);
$config['en_all_11031'] = array(
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'AUTHORS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    11020 => array(
        'm_icon' => '<i class="fas fa-sitemap yellow" aria-hidden="true"></i>',
        'm_name' => 'NEXT',
        'm_desc' => '',
        'm_parents' => array(11031,11018),
    ),
    11019 => array(
        'm_icon' => '<i class="fas fa-sitemap rotate180 yellow" aria-hidden="true"></i>',
        'm_name' => 'PREVIOUS',
        'm_desc' => '',
        'm_parents' => array(11031,11018),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'TAGS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
);

//TREE OF PLAYERS:
$config['en_ids_11028'] = array(11030,11029);
$config['en_all_11028'] = array(
    11030 => array(
        'm_icon' => '<i class="fas fa-id-badge blue" aria-hidden="true"></i>',
        'm_name' => 'PROFILE',
        'm_desc' => 'Describe PLAYER. Where it comes from. It\'s origin.',
        'm_parents' => array(11084,11033,11028),
    ),
    11029 => array(
        'm_icon' => '<i class="fas fa-hand-holding-seedling blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER PORTFOLIO',
        'm_desc' => 'What the PLAYER chooses to focus on. It\'s work. It\'s responsibility.',
        'm_parents' => array(11084,11089,11028),
    ),
);

//TREE OF BLOGS:
$config['en_ids_11018'] = array(11019,11020,11161);
$config['en_all_11018'] = array(
    11019 => array(
        'm_icon' => '<i class="fas fa-sitemap rotate180 yellow" aria-hidden="true"></i>',
        'm_name' => 'PREVIOUS',
        'm_desc' => 'BLOGS that recommended this blog once READ',
        'm_parents' => array(11031,11018),
    ),
    11020 => array(
        'm_icon' => '<i class="fas fa-sitemap yellow" aria-hidden="true"></i>',
        'm_name' => 'NEXT',
        'm_desc' => 'BLOGS to READ after this BLOG',
        'm_parents' => array(11031,11018),
    ),
    11161 => array(
        'm_icon' => '<i class="fas fa-tools yellow" aria-hidden="true"></i>',
        'm_name' => 'MASS UPDATE',
        'm_desc' => '',
        'm_parents' => array(10984,11018,11160),
    ),
);

//BLOG TABS:
$config['en_ids_11021'] = array(10990,11018);
$config['en_all_11021'] = array(
    10990 => array(
        'm_icon' => '<i class="fas fa-toolbox yellow"></i>',
        'm_name' => 'BLOG MANAGEMENT',
        'm_desc' => '',
        'm_parents' => array(11021,4527),
    ),
    11018 => array(
        'm_icon' => '<i class="fas fa-exchange rotate90 yellow"></i>',
        'm_name' => 'TREE OF BLOGS',
        'm_desc' => '',
        'm_parents' => array(4527,11025,11021),
    ),
);

//BLOG MANAGEMENT:
$config['en_ids_10990'] = array(4231,4601,4983,10573,7347,6146,7545,11047);
$config['en_all_10990'] = array(
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'MESSAGES',
        'm_desc' => 'READ over web or Messenger',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'TAGS',
        'm_desc' => 'Alternative terms, keywords and verbs that describe this BLOG. Also used to feature blog.',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'AUTHORS',
        'm_desc' => 'BLOGGERS who are managing this blog and also referenced authors of the original content.',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    10573 => array(
        'm_icon' => '<i class="fas fa-bookmark yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG BOOKMARKS',
        'm_desc' => 'BLOGGERS who bookmarked this BLOG.',
        'm_parents' => array(10984,11033,10990,10594,10589,4593,7703,7551,4485),
    ),
    7347 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink" aria-hidden="true"></i>',
        'm_name' => 'READ BOOKMARKS',
        'm_desc' => 'READERS who bookmarked this BLOG.',
        'm_parents' => array(10964,11033,10990,6771,4527),
    ),
    6146 => array(
        'm_icon' => '<i class="fas fa-book-reader ispink" aria-hidden="true"></i>',
        'm_name' => 'READ HISTORY',
        'm_desc' => '',
        'm_parents' => array(10964,11033,10990,6771,4527),
    ),
    7545 => array(
        'm_icon' => '<i class="fas fa-user-tag blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER TAGS',
        'm_desc' => 'ASSIGNS CREATORS TREE BRANCH to READER',
        'm_parents' => array(10983,11033,10990,10594,10589,7703,7551,4593,4485),
    ),
    11047 => array(
        'm_icon' => '<i class="fas fa-caret-down"></i>',
        'm_name' => 'ADMIN MENU',
        'm_desc' => '',
        'm_parents' => array(10984,4527,11040,10990),
    ),
);

//SUPERPOWERS:
$config['en_ids_10957'] = array(10983,10964,10939,10984);
$config['en_all_10957'] = array(
    10983 => array(
        'm_icon' => '<i class="far fa-narwhal blue" aria-hidden="true"></i>',
        'm_name' => 'NARWHAL',
        'm_desc' => 'PLAY MANAGEMENT',
        'm_parents' => array(10957),
    ),
    10964 => array(
        'm_icon' => '<i class="far fa-elephant ispink" aria-hidden="true"></i>',
        'm_name' => 'ELEPHANT',
        'm_desc' => 'READ HISTORY',
        'm_parents' => array(10957),
    ),
    10939 => array(
        'm_icon' => '<i class="far fa-badger-honey yellow" aria-hidden="true"></i>',
        'm_name' => 'HONEY BADGER',
        'm_desc' => 'BLOG MANAGEMENT',
        'm_parents' => array(10957),
    ),
    10984 => array(
        'm_icon' => '<i class="far fa-deer-rudolph yellow" aria-hidden="true"></i>',
        'm_name' => 'RUDOLPH',
        'm_desc' => 'BLOG ADVANCE TOOLS',
        'm_parents' => array(10957),
    ),
);

//AVATARS:
$config['en_ids_10956'] = array(10965,10979,10978,10963,10966,10976,10962,10975,10982,10970,10972,10969,10959,10960,10981,10968,10974,10958);
$config['en_all_10956'] = array(
    10965 => array(
        'm_icon' => '<i class="far fa-dog"></i>',
        'm_name' => 'DOGY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10979 => array(
        'm_icon' => '<i class="far fa-duck"></i>',
        'm_name' => 'DONALD',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10978 => array(
        'm_icon' => '<i class="far fa-fish"></i>',
        'm_name' => 'FISHY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10963 => array(
        'm_icon' => '<i class="far fa-hippo"></i>',
        'm_name' => 'HIPPOY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10966 => array(
        'm_icon' => '<i class="far fa-deer"></i>',
        'm_name' => 'HONEY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10976 => array(
        'm_icon' => '<i class="far fa-horse"></i>',
        'm_name' => 'HORSY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10962 => array(
        'm_icon' => '<i class="far fa-monkey"></i>',
        'm_name' => 'HUMAN',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10975 => array(
        'm_icon' => '<i class="far fa-kiwi-bird"></i>',
        'm_name' => 'KIWI',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10982 => array(
        'm_icon' => '<i class="far fa-cat"></i>',
        'm_name' => 'MIMY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10970 => array(
        'm_icon' => '<i class="far fa-cow"></i>',
        'm_name' => 'MOMY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10972 => array(
        'm_icon' => '<i class="far fa-turtle"></i>',
        'm_name' => 'NINJA',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10969 => array(
        'm_icon' => '<i class="far fa-pig"></i>',
        'm_name' => 'PIGGY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10959 => array(
        'm_icon' => '<i class="far fa-ram"></i>',
        'm_name' => 'RAMRAM',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10960 => array(
        'm_icon' => '<i class="far fa-rabbit"></i>',
        'm_name' => 'ROGER',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10981 => array(
        'm_icon' => '<i class="far fa-crow"></i>',
        'm_name' => 'RUSSEL',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10968 => array(
        'm_icon' => '<i class="far fa-sheep"></i>',
        'm_name' => 'SHEEPY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10974 => array(
        'm_icon' => '<i class="far fa-snake"></i>',
        'm_name' => 'SNAKY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
    10958 => array(
        'm_icon' => '<i class="far fa-squirrel"></i>',
        'm_name' => 'SQUIRRELY',
        'm_desc' => '',
        'm_parents' => array(10956),
    ),
);

//MENCH:
$config['en_ids_2738'] = array(6205,4536,4535);
$config['en_all_2738'] = array(
    6205 => array(
        'm_icon' => '<i class="fas fa-circle ispink" aria-hidden="true"></i>',
        'm_name' => 'READ',
        'm_desc' => '',
        'm_parents' => array(2738,4463),
    ),
    4536 => array(
        'm_icon' => '<i class="fas fa-circle blue" aria-hidden="true"></i>',
        'm_name' => 'PLAY',
        'm_desc' => '',
        'm_parents' => array(2738,4463),
    ),
    4535 => array(
        'm_icon' => '<i class="fas fa-circle yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG',
        'm_desc' => '',
        'm_parents' => array(2738,4463),
    ),
);

//READ OPTIONAL CONNECTIONS:
$config['en_ids_10692'] = array(4369,4429,4368,4366,4371);
$config['en_all_10692'] = array(
    4369 => array(
        'm_icon' => '<i class="fas fa-hashtag ispink"></i>',
        'm_name' => 'CHILD BLOG',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6202,6232,4341),
    ),
    4429 => array(
        'm_icon' => '<i class="fas fa-at ispink"></i>',
        'm_name' => 'CHILD PLAYER',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6160,6232,4341),
    ),
    4368 => array(
        'm_icon' => '<i class="fas fa-hashtag ispink"></i>',
        'm_name' => 'PARENT BLOG',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6202,6232,4341),
    ),
    4366 => array(
        'm_icon' => '<i class="fas fa-at ispink"></i>',
        'm_name' => 'PARENT PLAYER',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6160,6232,4341),
    ),
    4371 => array(
        'm_icon' => '<i class="fas fa-link ispink"></i>',
        'm_name' => 'PARENT READ',
        'm_desc' => '',
        'm_parents' => array(11081,10692,4367,6232,4341),
    ),
);

//PLATFORM CACHE PHP:
$config['en_ids_4527'] = array(7758,10809,10956,11047,7712,4983,7756,7585,10602,10589,11968,10990,4485,7347,6146,7596,7588,7302,4737,7356,7355,6201,11021,4486,7309,7751,6150,10712,10719,10869,10627,4229,10746,7703,7360,7364,7359,10717,10721,10720,11080,2738,7555,11035,11059,11058,10716,6225,10718,10711,11054,4527,6404,6232,4537,6194,11039,6827,4426,4997,4454,6123,6177,11007,11089,11033,3000,7303,6206,11088,4592,4755,6287,10571,7357,6345,6192,11081,6193,4600,5967,6255,4280,10590,10570,4277,6102,7704,6244,6274,7494,6144,7582,6103,10596,10539,10594,10692,10591,10593,7304,6186,4341,4593,10658,10592,11031,11084,6204,10710,10957,10725,6805,4986,7551,7358,11018,11028);
$config['en_all_4527'] = array(
    7758 => array(
        'm_icon' => '<i class="far fa-mountain"></i>',
        'm_name' => 'Action Plan Blogion Successful',
        'm_desc' => '',
        'm_parents' => array(4527,7493),
    ),
    10809 => array(
        'm_icon' => '<i class="far fa-palette" aria-hidden="true"></i>',
        'm_name' => 'Arts & Entertainment',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10956 => array(
        'm_icon' => '<i class="fas fa-paw blue"></i>',
        'm_name' => 'AVATARS',
        'm_desc' => '',
        'm_parents' => array(6204,11008,4527),
    ),
    11047 => array(
        'm_icon' => '<i class="fas fa-caret-down"></i>',
        'm_name' => 'BLOG ADMIN MENU',
        'm_desc' => '',
        'm_parents' => array(10984,4527,11040,10990),
    ),
    7712 => array(
        'm_icon' => '<i class="far fa-question-circle"></i>',
        'm_name' => 'Blog Answer Types',
        'm_desc' => '',
        'm_parents' => array(10893,4527),
    ),
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'BLOG AUTHORS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    7756 => array(
        'm_icon' => '<i class="far fa-wand-magic"></i>',
        'm_name' => 'Blog Auto Completable',
        'm_desc' => '',
        'm_parents' => array(10893,4527),
    ),
    7585 => array(
        'm_icon' => '<i class="fas fa-random yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG FLOW',
        'm_desc' => '',
        'm_parents' => array(6204,10651,6160,6194,6232,4527,6201),
    ),
    10602 => array(
        'm_icon' => '<i class="far fa-puzzle-piece" aria-hidden="true"></i>',
        'm_name' => 'BLOG FLOW TYPES',
        'm_desc' => '',
        'm_parents' => array(10893,6204,7302,4527),
    ),
    10589 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'BLOGGERS',
        'm_desc' => '',
        'm_parents' => array(4527,10591),
    ),
    11968 => array(
        'm_icon' => '<i class="far fa-lightbulb-on"></i>',
        'm_name' => 'BLOGGING. REIMAGINED.',
        'm_desc' => '',
        'm_parents' => array(4527,4536),
    ),
    10990 => array(
        'm_icon' => '<i class="fas fa-toolbox yellow"></i>',
        'm_name' => 'BLOG MANAGEMENT',
        'm_desc' => '',
        'm_parents' => array(11021,4527),
    ),
    4485 => array(
        'm_icon' => '<i class="fas fa-comment-plus yellow"></i>',
        'm_name' => 'BLOG NOTES',
        'm_desc' => '',
        'm_parents' => array(7552,4535,4527,4463),
    ),
    7347 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink" aria-hidden="true"></i>',
        'm_name' => 'BLOG READ BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10964,11033,10990,6771,4527),
    ),
    6146 => array(
        'm_icon' => '<i class="fas fa-book-reader ispink" aria-hidden="true"></i>',
        'm_name' => 'BLOG READ HISTORY',
        'm_desc' => '',
        'm_parents' => array(10964,11033,10990,6771,4527),
    ),
    7596 => array(
        'm_icon' => '<i class="fas fa-triangle yellow"></i>',
        'm_name' => 'BLOG Scope',
        'm_desc' => '',
        'm_parents' => array(10888,6204,7302,6160,6201,6194,6232,4527),
    ),
    7588 => array(
        'm_icon' => '<i class="far fa-hand-pointer"></i>',
        'm_name' => 'Blog Select Publicly',
        'm_desc' => '',
        'm_parents' => array(10893,4527),
    ),
    7302 => array(
        'm_icon' => '<i class="far fa-chart-bar yellow"></i>',
        'm_name' => 'BLOG STATS',
        'm_desc' => '',
        'm_parents' => array(4527,4535),
    ),
    4737 => array(
        'm_icon' => '<i class="fas fa-sliders-h yellow"></i>',
        'm_name' => 'BLOG STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,6204,10648,6226,6160,6232,7302,6194,6201,4527),
    ),
    7356 => array(
        'm_icon' => '<i class="far fa-check-circle"></i>',
        'm_name' => 'Blog Statuses Active',
        'm_desc' => '',
        'm_parents' => array(10891,4527),
    ),
    7355 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'Blog Statuses Public',
        'm_desc' => '',
        'm_parents' => array(10891,4527),
    ),
    6201 => array(
        'm_icon' => '<i class="far fa-table yellow"></i>',
        'm_name' => 'BLOG TABLE',
        'm_desc' => '',
        'm_parents' => array(4527,7735,4535),
    ),
    11021 => array(
        'm_icon' => '<i class="fas fa-list-alt yellow"></i>',
        'm_name' => 'BLOG TABS',
        'm_desc' => '',
        'm_parents' => array(4527,4535),
    ),
    4486 => array(
        'm_icon' => '<i class="fas fa-code-branch rotate74 yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG TREE BRANCHES',
        'm_desc' => '',
        'm_parents' => array(10984,11025,10662,4527),
    ),
    7309 => array(
        'm_icon' => '<i class="far fa-cubes"></i>',
        'm_name' => 'Blog Type Requirement',
        'm_desc' => '',
        'm_parents' => array(10893,4527),
    ),
    7751 => array(
        'm_icon' => '<i class="far fa-upload"></i>',
        'm_name' => 'Blog Upload File',
        'm_desc' => '',
        'm_parents' => array(10893,4527),
    ),
    6150 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'BOOKMARK REMOVED',
        'm_desc' => '',
        'm_parents' => array(6771,4527),
    ),
    10712 => array(
        'm_icon' => '<i class="far fa-chart-line" aria-hidden="true"></i>',
        'm_name' => 'Business',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10719 => array(
        'm_icon' => '<i class="far fa-pencil-ruler" aria-hidden="true"></i>',
        'm_name' => 'Design',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10869 => array(
        'm_icon' => '<i class="fas fa-megaphone ispink"></i>',
        'm_name' => 'FEATURED TOPICS',
        'm_desc' => '',
        'm_parents' => array(6771,4527),
    ),
    10627 => array(
        'm_icon' => '<i class="far fa-paperclip"></i>',
        'm_name' => 'File Type Attachment',
        'm_desc' => '',
        'm_parents' => array(4527,6771),
    ),
    4229 => array(
        'm_icon' => '<i class="fas fa-question-circle yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW CONDITIONAL',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,4527,6410,6283,4593,4486),
    ),
    10746 => array(
        'm_icon' => '<i class="far fa-industry"></i>',
        'm_name' => 'Industry',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    7703 => array(
        'm_icon' => '<i class="fas fa-rss"></i>',
        'm_name' => 'Interaction Blog Subscription Types',
        'm_desc' => '',
        'm_parents' => array(4527,6771),
    ),
    7360 => array(
        'm_icon' => '<i class="far fa-check-circle"></i>',
        'm_name' => 'Interaction Statuses Active',
        'm_desc' => '',
        'm_parents' => array(10624,4527),
    ),
    7364 => array(
        'm_icon' => '<i class="far fa-spinner fa-spin"></i>',
        'm_name' => 'Interaction Statuses Incomplete',
        'm_desc' => '',
        'm_parents' => array(10624,4527),
    ),
    7359 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'Interaction Statuses Public',
        'm_desc' => '',
        'm_parents' => array(10624,4527),
    ),
    10717 => array(
        'm_icon' => '<i class="far fa-desktop"></i>',
        'm_name' => 'IT & Software',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10721 => array(
        'm_icon' => '<i class="far fa-hand-peace"></i>',
        'm_name' => 'Lifestyle',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10720 => array(
        'm_icon' => '<i class="far fa-bullseye-arrow" aria-hidden="true"></i>',
        'm_name' => 'Marketing',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    11080 => array(
        'm_icon' => '<i class="far fa-file"></i>',
        'm_name' => 'MEDIA FILE EXTENSIONS',
        'm_desc' => '',
        'm_parents' => array(7254,4527),
    ),
    2738 => array(
        'm_icon' => '',
        'm_name' => 'MENCH',
        'm_desc' => '',
        'm_parents' => array(3304,2792,3303,7524,3325,4523,3326,3324,4305,4527,1,2,7312,4762,2750),
    ),
    7555 => array(
        'm_icon' => '<i class="fas fa-paper-plane"></i>',
        'm_name' => 'MENCH CHANNELS',
        'm_desc' => '',
        'm_parents' => array(7305,4527),
    ),
    11035 => array(
        'm_icon' => '<i class="fas fa-list"></i>',
        'm_name' => 'MENCH NAVIGATION',
        'm_desc' => '',
        'm_parents' => array(4527,7305),
    ),
    11059 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger isblue"></i>',
        'm_name' => 'MESSENGER MEDIA CODES',
        'm_desc' => '',
        'm_parents' => array(6196,4527,7254),
    ),
    11058 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger isblue"></i>',
        'm_name' => 'MESSENGER NOTIFICATION CODES',
        'm_desc' => '',
        'm_parents' => array(7254,6196,4527),
    ),
    10716 => array(
        'm_icon' => '<i class="far fa-wallet" aria-hidden="true"></i>',
        'm_name' => 'Money Topic',
        'm_desc' => '',
        'm_parents' => array(3311,11097,4527,10869),
    ),
    6225 => array(
        'm_icon' => '<i class="fas fa-cog" aria-hidden="true"></i>',
        'm_name' => 'MY ACCOUNT',
        'm_desc' => '',
        'm_parents' => array(11035,4758,4527),
    ),
    10718 => array(
        'm_icon' => '<i class="far fa-clipboard-list-check"></i>',
        'm_name' => 'Office Productivity',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10711 => array(
        'm_icon' => '<i class="far fa-smile"></i>',
        'm_name' => 'Personal Development',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    11054 => array(
        'm_icon' => '<i class="fal fa-memory" aria-hidden="true"></i>',
        'm_name' => 'PLATFORM CACHE JS',
        'm_desc' => '',
        'm_parents' => array(4527,7258,7254),
    ),
    4527 => array(
        'm_icon' => '<i class="fas fa-memory" aria-hidden="true"></i>',
        'm_name' => 'PLATFORM CACHE PHP',
        'm_desc' => '',
        'm_parents' => array(4527,7258,7254),
    ),
    6404 => array(
        'm_icon' => '<i class="far fa-lambda" aria-hidden="true"></i>',
        'm_name' => 'PLATFORM CONFIG VARIABLES',
        'm_desc' => '',
        'm_parents' => array(11054,4527,7254,6403),
    ),
    6232 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'PLATFORM VARIABLES',
        'm_desc' => '',
        'm_parents' => array(4527,6212),
    ),
    4537 => array(
        'm_icon' => '<i class="fal fa-spider-web" aria-hidden="true"></i>',
        'm_name' => 'PLAY BRANCH URL',
        'm_desc' => '',
        'm_parents' => array(4758,4527),
    ),
    6194 => array(
        'm_icon' => '<i class="far fa-database"></i>',
        'm_name' => 'PLAY CONNECTIONS',
        'm_desc' => '',
        'm_parents' => array(4758,4527,6212),
    ),
    11039 => array(
        'm_icon' => '<i class="fas fa-caret-down"></i>',
        'm_name' => 'PLAYER ADMIN MENU',
        'm_desc' => '',
        'm_parents' => array(10983,11033,4527,11040),
    ),
    6827 => array(
        'm_icon' => '<i class="far fa-users-crown"></i>',
        'm_name' => 'PLAYER GROUPS',
        'm_desc' => '',
        'm_parents' => array(3303,3314,7303,4527),
    ),
    4426 => array(
        'm_icon' => '<i class="fas fa-lock"></i>',
        'm_name' => 'PLAYER LOCK',
        'm_desc' => '',
        'm_parents' => array(4758,3303,4426,4527),
    ),
    4997 => array(
        'm_icon' => '<i class="fas fa-tools blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER MASS UPDATE',
        'm_desc' => '',
        'm_parents' => array(10983,11089,4758,4506,4426,4527),
    ),
    4454 => array(
        'm_icon' => '<i class="fas fa-volume blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER NOTIFICATION LEVEL',
        'm_desc' => '',
        'm_parents' => array(7552,6225,6204,4527),
    ),
    6123 => array(
        'm_icon' => '<i class="fab fa-twitter-square blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER SOCIAL PROFILES',
        'm_desc' => '',
        'm_parents' => array(6225,4527),
    ),
    6177 => array(
        'm_icon' => '<i class="fas fa-sliders-h isblue"></i>',
        'm_name' => 'PLAYER STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,7303,6204,5003,10654,6160,6232,6194,6206,4527),
    ),
    11007 => array(
        'm_icon' => '<i class="fas fa-usd-circle isblue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER SUBSCRIPTION',
        'm_desc' => '',
        'm_parents' => array(4527,6204,6225),
    ),
    11089 => array(
        'm_icon' => '<i class="fas fa-eye blue" aria-hidden="true"></i>',
        'm_name' => 'PLAY LEFT TABS',
        'm_desc' => '',
        'm_parents' => array(4527,11088),
    ),
    11033 => array(
        'm_icon' => '<i class="fas fa-toolbox blue" aria-hidden="true"></i>',
        'm_name' => 'PLAY RIGHT TABS',
        'm_desc' => '',
        'm_parents' => array(11088,4527),
    ),
    3000 => array(
        'm_icon' => '<i class="far fa-thumbs-up"></i>',
        'm_name' => 'PLAY SOURCES',
        'm_desc' => '',
        'm_parents' => array(7303,10571,4506,4527,4463),
    ),
    7303 => array(
        'm_icon' => '<i class="far fa-chart-bar blue"></i>',
        'm_name' => 'PLAY STATS',
        'm_desc' => '',
        'm_parents' => array(10888,4527,4536),
    ),
    6206 => array(
        'm_icon' => '<i class="far fa-table isblue"></i>',
        'm_name' => 'PLAY TABLE',
        'm_desc' => '',
        'm_parents' => array(4527,7735,4536),
    ),
    11088 => array(
        'm_icon' => '<i class="fas fa-list-alt blue"></i>',
        'm_name' => 'PLAY TABS',
        'm_desc' => '',
        'm_parents' => array(4527,4536),
    ),
    4592 => array(
        'm_icon' => '<i class="fas fa-code-branch rotate74 blue"></i>',
        'm_name' => 'PLAY TREE BRANCHES',
        'm_desc' => '',
        'm_parents' => array(11026,5982,5981,4527),
    ),
    4755 => array(
        'm_icon' => '<i class="fal fa-eye-slash"></i>',
        'm_name' => 'PRIVATE READ',
        'm_desc' => '',
        'm_parents' => array(6771,4463,4426,4527),
    ),
    6287 => array(
        'm_icon' => '<i class="far fa-tools" aria-hidden="true"></i>',
        'm_name' => 'PRO BLOGGING',
        'm_desc' => '',
        'm_parents' => array(11035,4527,7284),
    ),
    10571 => array(
        'm_icon' => '<i class="fas fa-megaphone blue" aria-hidden="true"></i>',
        'm_name' => 'PUBLIC PLAYERS',
        'm_desc' => '',
        'm_parents' => array(4527,4758),
    ),
    7357 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'PUBLIC PLAYER STATUSES',
        'm_desc' => '',
        'm_parents' => array(4527,4758),
    ),
    6345 => array(
        'm_icon' => '<i class="fas fa-comment-check"></i>',
        'm_name' => 'Readable by Readers',
        'm_desc' => '',
        'm_parents' => array(10889,4527),
    ),
    6192 => array(
        'm_icon' => '<i class="fas fa-sitemap" aria-hidden="true"></i>',
        'm_name' => 'READ ALL',
        'm_desc' => '',
        'm_parents' => array(4527,10602),
    ),
    11081 => array(
        'm_icon' => '<i class="far fa-bezier-curve ispink"></i>',
        'm_name' => 'READ ALL CONNECTIONS',
        'm_desc' => '',
        'm_parents' => array(4527,6771),
    ),
    6193 => array(
        'm_icon' => '<i class="fas fa-code-branch rotate180" aria-hidden="true"></i>',
        'm_name' => 'READ ANY',
        'm_desc' => '',
        'm_parents' => array(10602,4527),
    ),
    4600 => array(
        'm_icon' => '<i class="far fa-badge-check"></i>',
        'm_name' => 'Reader Account Types',
        'm_desc' => '',
        'm_parents' => array(4758,4527),
    ),
    5967 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER READ CC Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4506,4527,7569,4755,4593),
    ),
    6255 => array(
        'm_icon' => '<i class="fas fa-book-reader ispink"></i>',
        'm_name' => 'READER READ SUCCESS',
        'm_desc' => '',
        'm_parents' => array(7493,4527),
    ),
    4280 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'Reader Received Messages with Messenger',
        'm_desc' => '',
        'm_parents' => array(6771,4527),
    ),
    10590 => array(
        'm_icon' => '<i class="fas fa-user ispink"></i>',
        'm_name' => 'READERS',
        'm_desc' => '',
        'm_parents' => array(4527,10591),
    ),
    10570 => array(
        'm_icon' => '<i class="far fa-hand-pointer"></i>',
        'm_name' => 'Reader Selectable Completion',
        'm_desc' => '',
        'm_parents' => array(4527,7493),
    ),
    4277 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'Reader Sent Messages with Messenger',
        'm_desc' => '',
        'm_parents' => array(6771,4527),
    ),
    6102 => array(
        'm_icon' => '<i class="far fa-paperclip"></i>',
        'm_name' => 'Reader Sent/Received Attachment',
        'm_desc' => '',
        'm_parents' => array(6771,4527),
    ),
    7704 => array(
        'm_icon' => '<i class="far fa-check-circle"></i>',
        'm_name' => 'Reader Step Answered Successfully',
        'm_desc' => '',
        'm_parents' => array(4527,7493),
    ),
    6244 => array(
        'm_icon' => '<i class="far fa-shoe-prints"></i>',
        'm_name' => 'Reader Steps Double',
        'm_desc' => '',
        'm_parents' => array(7493,4527),
    ),
    6274 => array(
        'm_icon' => '<i class="fas fa-fast-forward"></i>',
        'm_name' => 'Reader Steps Skippable',
        'm_desc' => '',
        'm_parents' => array(7493,4527),
    ),
    7494 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Reader Steps Unlock',
        'm_desc' => '',
        'm_parents' => array(4506,4527,7493),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'READER Submission Required',
        'm_desc' => '',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
    7582 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READ LOGIN REQUIRED',
        'm_desc' => '',
        'm_parents' => array(10893,7493,4527),
    ),
    6103 => array(
        'm_icon' => '<i class="far fa-lambda ispink"></i>',
        'm_name' => 'READ METADATA',
        'm_desc' => '',
        'm_parents' => array(4527,6232,6195,4341),
    ),
    10596 => array(
        'm_icon' => '<i class="fas fa-square-root ispink"></i>',
        'm_name' => 'READ NOD',
        'm_desc' => '',
        'm_parents' => array(11067,4527,10592),
    ),
    10539 => array(
        'm_icon' => '<i class="far fa-file-word ispink"></i>',
        'm_name' => 'READ ONE WORD',
        'm_desc' => '',
        'm_parents' => array(4527,10592,5008),
    ),
    10594 => array(
        'm_icon' => '<i class="fas fa-value-absolute ispink"></i>',
        'm_name' => 'READ ONE WORD + LINKS',
        'm_desc' => '',
        'm_parents' => array(4527,10592),
    ),
    10692 => array(
        'm_icon' => '<i class="fas fa-bezier-curve ispink"></i>',
        'm_name' => 'READ OPTIONAL CONNECTIONS',
        'm_desc' => '',
        'm_parents' => array(4527,6771),
    ),
    10591 => array(
        'm_icon' => '<i class="fas fa-exchange rotate90 ispink"></i>',
        'm_name' => 'READ PLAY DIRECTIONS',
        'm_desc' => '',
        'm_parents' => array(6204,7304,6771,4527,10588),
    ),
    10593 => array(
        'm_icon' => '<i class="fas fa-union ispink"></i>',
        'm_name' => 'READ STATEMENT + LINKS',
        'm_desc' => '',
        'm_parents' => array(4527,10592),
    ),
    7304 => array(
        'm_icon' => '<i class="far fa-chart-bar ispink"></i>',
        'm_name' => 'READ STATS',
        'm_desc' => '',
        'm_parents' => array(10888,4527,6205),
    ),
    6186 => array(
        'm_icon' => '<i class="far fa-sliders-h ispink"></i>',
        'm_name' => 'READ STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,10677,10661,10656,6204,5865,6160,6232,7304,4527,6194,4341),
    ),
    4341 => array(
        'm_icon' => '<i class="far fa-table ispink"></i>',
        'm_name' => 'READ TABLE',
        'm_desc' => '',
        'm_parents' => array(4527,7735,6205),
    ),
    4593 => array(
        'm_icon' => '<i class="fas fa-plug ispink"></i>',
        'm_name' => 'READ TYPE',
        'm_desc' => '',
        'm_parents' => array(11081,10659,6160,6232,6194,4527,4341),
    ),
    10658 => array(
        'm_icon' => '<i class="fas fa-sync ispink"></i>',
        'm_name' => 'READ UPDATES',
        'm_desc' => '',
        'm_parents' => array(4527,6205),
    ),
    10592 => array(
        'm_icon' => '<i class="fas fa-weight ispink"></i>',
        'm_name' => 'READ WORD WEIGHTS',
        'm_desc' => '',
        'm_parents' => array(6204,6771,4527,10588),
    ),
    11031 => array(
        'm_icon' => '<i class="fas fa-text yellow" aria-hidden="true"></i>',
        'm_name' => 'SHOW BLOG TAB NAMES',
        'm_desc' => '',
        'm_parents' => array(6768,4527),
    ),
    11084 => array(
        'm_icon' => '<i class="fas fa-text blue" aria-hidden="true"></i>',
        'm_name' => 'SHOW PLAY TAB NAMES',
        'm_desc' => '',
        'm_parents' => array(4758,4527),
    ),
    6204 => array(
        'm_icon' => '<i class="fas fa-check"></i>',
        'm_name' => 'Single Selectable',
        'm_desc' => '',
        'm_parents' => array(4428,4506,4527,4758),
    ),
    10710 => array(
        'm_icon' => '<i class="far fa-code" aria-hidden="true"></i>',
        'm_name' => 'Software Engineering',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    10957 => array(
        'm_icon' => '<i class="fas fa-alicorn blue"></i>',
        'm_name' => 'SUPERPOWERS',
        'm_desc' => '',
        'm_parents' => array(5007,11008,4527),
    ),
    10725 => array(
        'm_icon' => '<i class="far fa-atom-alt"></i>',
        'm_name' => 'Teaching & Academics',
        'm_desc' => '',
        'm_parents' => array(4527,10869),
    ),
    6805 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'Thing Interaction Content Requires Text',
        'm_desc' => '',
        'm_parents' => array(4527,4758),
    ),
    4986 => array(
        'm_icon' => '<i class="fal fa-at"></i>',
        'm_name' => 'Thing Reference Allowed',
        'm_desc' => '',
        'm_parents' => array(10889,4758,4527),
    ),
    7551 => array(
        'm_icon' => '<i class="fas fa-at"></i>',
        'm_name' => 'Thing Reference Required',
        'm_desc' => '',
        'm_parents' => array(10889,4527,4758),
    ),
    7358 => array(
        'm_icon' => '<i class="far fa-check-circle"></i>',
        'm_name' => 'Thing Statuses Active',
        'm_desc' => '',
        'm_parents' => array(4527,4758),
    ),
    11018 => array(
        'm_icon' => '<i class="fas fa-exchange rotate90 yellow"></i>',
        'm_name' => 'TREE OF BLOGS',
        'm_desc' => '',
        'm_parents' => array(4527,11025,11021),
    ),
    11028 => array(
        'm_icon' => '<i class="fas fa-exchange rotate90 blue"></i>',
        'm_name' => 'TREE OF PLAYERS',
        'm_desc' => '',
        'm_parents' => array(4527,11026),
    ),
);

//READ UPDATES:
$config['en_ids_10658'] = array(10660,10676,10678,10679,10677,10686,10663,10664,10661,10675,10681,10685,10662,10689,10657,10673,10656,10659,10690,10683,7578);
$config['en_all_10658'] = array(
    10660 => array(
        'm_icon' => '<i class="fas fa-angle-double-right"></i>',
        'm_name' => 'BLOG Migrate Parent BLOG',
        'm_desc' => '',
        'm_parents' => array(7703,4593,10638,10589,10594,10658),
    ),
    10676 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG Notes Sorted',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10658,10638),
    ),
    10678 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG Notes Unlinked',
        'm_desc' => '',
        'm_parents' => array(10658,10539,10589,4593,10638),
    ),
    10679 => array(
        'm_icon' => '<i class="fas fa-sticky-note"></i>',
        'm_name' => 'BLOG Notes Update Content',
        'm_desc' => '',
        'm_parents' => array(10589,4593,10593,10658,10638),
    ),
    10677 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Notes Update Status',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10658,10638),
    ),
    10686 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG READ ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(7703,10589,10539,4593,10658,10638),
    ),
    10663 => array(
        'm_icon' => '<i class="far fa-coin"></i>',
        'm_name' => 'BLOG READ Update Points',
        'm_desc' => '',
        'm_parents' => array(4228,7703,10539,10589,10638,4593,10658),
    ),
    10664 => array(
        'm_icon' => '<i class="fas fa-bolt"></i>',
        'm_name' => 'BLOG READ Update Score',
        'm_desc' => '',
        'm_parents' => array(7703,10638,10594,10589,4593,4229,10658),
    ),
    10661 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG READ Update Status',
        'm_desc' => '',
        'm_parents' => array(10638,7703,10539,10589,4593,10658),
    ),
    10675 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG SORTED',
        'm_desc' => '',
        'm_parents' => array(7703,10539,10589,4593,10658,10638),
    ),
    10681 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOGS SORTED',
        'm_desc' => '',
        'm_parents' => array(10638,10589,10596,4755,4593,10658),
    ),
    10685 => array(
        'm_icon' => '<i class="fas fa-sync"></i>',
        'm_name' => 'BLOG Submission Update by READER',
        'm_desc' => '',
        'm_parents' => array(4755,10596,10589,4593,10638,10658),
    ),
    10662 => array(
        'm_icon' => '<i class="fas fa-hashtag"></i>',
        'm_name' => 'BLOG UPDATE BRANCH',
        'm_desc' => '',
        'm_parents' => array(11027,10638,7703,10539,4593,10658),
    ),
    10689 => array(
        'm_icon' => '<i class="fas fa-share-alt rotate90 blue"></i>',
        'm_name' => 'PLAYER MERGED IN PLAYER',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,10658,10645),
    ),
    10657 => array(
        'm_icon' => '<i class="fas fa-sticky-note blue"></i>',
        'm_name' => 'PLAYER TREE CONTENT UPDATE',
        'm_desc' => '',
        'm_parents' => array(10593,4593,10589,10658,10645),
    ),
    10673 => array(
        'm_icon' => '<i class="far fa-trash-alt blue"></i>',
        'm_name' => 'PLAYER TREE REMOVED',
        'm_desc' => '',
        'm_parents' => array(10645,4593,10539,10589,10658),
    ),
    10656 => array(
        'm_icon' => '<i class="far fa-sliders-h blue"></i>',
        'm_name' => 'PLAYER TREE STATUS UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10589,10539,10658,10645),
    ),
    10659 => array(
        'm_icon' => '<i class="fas fa-plug blue"></i>',
        'm_name' => 'PLAYER TREE TYPE UPDATE',
        'm_desc' => '',
        'm_parents' => array(10658,10589,4593,10596,10645),
    ),
    10690 => array(
        'm_icon' => '<i class="fas fa-upload"></i>',
        'm_name' => 'READER Media Uploaded',
        'm_desc' => '',
        'm_parents' => array(6153,10596,10589,4593,10658),
    ),
    10683 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Read Email',
        'm_desc' => '',
        'm_parents' => array(6153,10658,10596,10589,4593,7654),
    ),
    7578 => array(
        'm_icon' => '<i class="far fa-key"></i>',
        'm_name' => 'READER Update Password',
        'm_desc' => '',
        'm_parents' => array(6222,10658,6153,10539,10589,4755,4593),
    ),
);

//READ ONE WORD:
$config['en_ids_10539'] = array(10671,10676,10678,10677,10686,10663,10661,10675,10662,10650,10648,10651,7757,10669,4319,4230,4256,4257,10672,10653,10654,10673,10656,4235,6132,6155,4557,4460,4547,6140,7578,6224);
$config['en_all_10539'] = array(
    10671 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,7703,10638),
    ),
    10676 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG Notes Sorted',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10658,10638),
    ),
    10678 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG Notes Unlinked',
        'm_desc' => '',
        'm_parents' => array(10658,10539,10589,4593,10638),
    ),
    10677 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Notes Update Status',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10658,10638),
    ),
    10686 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG READ ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(7703,10589,10539,4593,10658,10638),
    ),
    10663 => array(
        'm_icon' => '<i class="far fa-coin"></i>',
        'm_name' => 'BLOG READ Update Points',
        'm_desc' => '',
        'm_parents' => array(4228,7703,10539,10589,10638,4593,10658),
    ),
    10661 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG READ Update Status',
        'm_desc' => '',
        'm_parents' => array(10638,7703,10539,10589,4593,10658),
    ),
    10675 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG SORTED',
        'm_desc' => '',
        'm_parents' => array(7703,10539,10589,4593,10658,10638),
    ),
    10662 => array(
        'm_icon' => '<i class="fas fa-hashtag"></i>',
        'm_name' => 'BLOG UPDATE BRANCH',
        'm_desc' => '',
        'm_parents' => array(11027,10638,7703,10539,4593,10658),
    ),
    10650 => array(
        'm_icon' => '<i class="far fa-clock"></i>',
        'm_name' => 'BLOG Update Completion Time',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10648 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Update Status',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10651 => array(
        'm_icon' => '<i class="far fa-shapes"></i>',
        'm_name' => 'BLOG Update Type',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    7757 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'MENCH REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,4593,6150),
    ),
    10669 => array(
        'm_icon' => '<i class="fab fa-font-awesome-alt blue"></i>',
        'm_name' => 'PLAY BRANCH ICON',
        'm_desc' => '',
        'm_parents' => array(10589,10539,4593,6198,4592),
    ),
    4319 => array(
        'm_icon' => '<i class="far fa-sort-numeric-down blue"></i>',
        'm_name' => 'PLAY BRANCH INTEGER',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592),
    ),
    4230 => array(
        'm_icon' => '<i class="far fa-link rotate90 blue"></i>',
        'm_name' => 'PLAY BRANCH RAW',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592),
    ),
    4256 => array(
        'm_icon' => '<i class="far fa-browser blue"></i>',
        'm_name' => 'PLAY BRANCH URL',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592,4537),
    ),
    4257 => array(
        'm_icon' => '<i class="far fa-play-circle blue"></i>',
        'm_name' => 'PLAY BRANCH WIDGET',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592,4537,4506),
    ),
    10672 => array(
        'm_icon' => '<i class="far fa-trash-alt blue"></i>',
        'm_name' => 'PLAYER ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(10539,4593,10589,10645),
    ),
    10653 => array(
        'm_icon' => '<i class="far fa-user-circle blue"></i>',
        'm_name' => 'PLAYER ICON UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10645),
    ),
    10654 => array(
        'm_icon' => '<i class="far fa-sliders-h blue"></i>',
        'm_name' => 'PLAYER STATUS UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10645),
    ),
    10673 => array(
        'm_icon' => '<i class="far fa-trash-alt blue"></i>',
        'm_name' => 'PLAYER TREE REMOVED',
        'm_desc' => '',
        'm_parents' => array(10645,4593,10539,10589,10658),
    ),
    10656 => array(
        'm_icon' => '<i class="far fa-sliders-h blue"></i>',
        'm_name' => 'PLAYER TREE STATUS UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10589,10539,10658,10645),
    ),
    4235 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10539,7347,10589,5967,4755,4593),
    ),
    6132 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'READER BLOGs Sorted',
        'm_desc' => '',
        'm_parents' => array(10539,10639,10589,6153,4506,4755,4593),
    ),
    6155 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'READER REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10888,10539,10639,10589,10570,7703,4506,6150,4593,4755),
    ),
    4557 => array(
        'm_icon' => '<i class="far fa-location-circle"></i>',
        'm_name' => 'READER Sent Location',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4460 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'READER Sent Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4547 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'READER Sent Text',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    6140 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step READ Unlock',
        'm_desc' => '',
        'm_parents' => array(10539,10589,6410,4229,4755,4593),
    ),
    7578 => array(
        'm_icon' => '<i class="far fa-key"></i>',
        'm_name' => 'READER Update Password',
        'm_desc' => '',
        'm_parents' => array(6222,10658,6153,10539,10589,4755,4593),
    ),
    6224 => array(
        'm_icon' => '<i class="far fa-sync"></i>',
        'm_name' => 'READER Update Profile',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,6222,4593),
    ),
);

//File Type Attachment:
$config['en_ids_10627'] = array(4259,4261,4260,4258,4549,4551,4550,4548,4554,4556,4555,4553);
$config['en_all_10627'] = array(
    4259 => array(
        'm_icon' => '<i class="far fa-volume-up blue"></i>',
        'm_name' => 'PLAY BRANCH AUDIO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4261 => array(
        'm_icon' => '<i class="far fa-file-pdf blue"></i>',
        'm_name' => 'PLAY BRANCH FILE',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4260 => array(
        'm_icon' => '<i class="far fa-image blue"></i>',
        'm_name' => 'PLAY BRANCH IMAGE',
        'm_desc' => '',
        'm_parents' => array(6198,11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4258 => array(
        'm_icon' => '<i class="far fa-video blue"></i>',
        'm_name' => 'PLAY BRANCH VIDEO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4549 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'READER Sent Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4551 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'READER Sent File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4550 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'READER Sent Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4548 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'READER Sent Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4554 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'Received Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4556 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'Received File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4555 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'Received Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4553 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'Received Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
);

//READ ONE WORD + LINKS:
$config['en_ids_10594'] = array(10573,10660,7545,10664,4228,4229,4318);
$config['en_all_10594'] = array(
    10573 => array(
        'm_icon' => '<i class="fas fa-bookmark yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG BLOG BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10984,11033,10990,10594,10589,4593,7703,7551,4485),
    ),
    10660 => array(
        'm_icon' => '<i class="fas fa-angle-double-right"></i>',
        'm_name' => 'BLOG Migrate Parent BLOG',
        'm_desc' => '',
        'm_parents' => array(7703,4593,10638,10589,10594,10658),
    ),
    7545 => array(
        'm_icon' => '<i class="fas fa-user-tag blue" aria-hidden="true"></i>',
        'm_name' => 'BLOG PLAYER TAGS',
        'm_desc' => '',
        'm_parents' => array(10983,11033,10990,10594,10589,7703,7551,4593,4485),
    ),
    10664 => array(
        'm_icon' => '<i class="fas fa-bolt"></i>',
        'm_name' => 'BLOG READ Update Score',
        'm_desc' => '',
        'm_parents' => array(7703,10638,10594,10589,4593,4229,10658),
    ),
    4228 => array(
        'm_icon' => '<i class="far fa-play yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW AUTOMATIC',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,6410,4593,4486),
    ),
    4229 => array(
        'm_icon' => '<i class="fas fa-question-circle yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW CONDITIONAL',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,4527,6410,6283,4593,4486),
    ),
    4318 => array(
        'm_icon' => '<i class="far fa-clock blue"></i>',
        'm_name' => 'PLAY BRANCH TIME',
        'm_desc' => '',
        'm_parents' => array(10594,10589,4593,4592),
    ),
);

//READ STATEMENT + LINKS:
$config['en_ids_10593'] = array(4983,4250,4231,10679,4601,10644,4259,4261,4260,4255,4258,4251,10646,10657,7702,4570,4549,4551,4550,4548,4554,4556,4555,6563,4552,4553);
$config['en_all_10593'] = array(
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'BLOG AUTHORS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    4250 => array(
        'm_icon' => '<i class="fas fa-hashtag"></i>',
        'm_name' => 'BLOG CREATED',
        'm_desc' => '',
        'm_parents' => array(10638,10593,10589,4593),
    ),
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'BLOG MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    10679 => array(
        'm_icon' => '<i class="fas fa-sticky-note"></i>',
        'm_name' => 'BLOG Notes Update Content',
        'm_desc' => '',
        'm_parents' => array(10589,4593,10593,10658,10638),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG TAGS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
    10644 => array(
        'm_icon' => '<i class="far fa-bullseye-arrow"></i>',
        'm_name' => 'BLOG Update Title',
        'm_desc' => '',
        'm_parents' => array(7703,10589,10593,4593,10638),
    ),
    4259 => array(
        'm_icon' => '<i class="far fa-volume-up blue"></i>',
        'm_name' => 'PLAY BRANCH AUDIO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4261 => array(
        'm_icon' => '<i class="far fa-file-pdf blue"></i>',
        'm_name' => 'PLAY BRANCH FILE',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4260 => array(
        'm_icon' => '<i class="far fa-image blue"></i>',
        'm_name' => 'PLAY BRANCH IMAGE',
        'm_desc' => '',
        'm_parents' => array(6198,11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4255 => array(
        'm_icon' => '<i class="far fa-align-left blue"></i>',
        'm_name' => 'PLAY BRANCH TEXT',
        'm_desc' => '',
        'm_parents' => array(10593,10589,4593,4592),
    ),
    4258 => array(
        'm_icon' => '<i class="far fa-video blue"></i>',
        'm_name' => 'PLAY BRANCH VIDEO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4251 => array(
        'm_icon' => '<i class="fas fa-at blue"></i>',
        'm_name' => 'PLAYER CREATED',
        'm_desc' => '',
        'm_parents' => array(10645,10593,10589,4593),
    ),
    10646 => array(
        'm_icon' => '<i class="far fa-fingerprint blue"></i>',
        'm_name' => 'PLAYER NAME UPDATE',
        'm_desc' => '',
        'm_parents' => array(10593,4593,10589,10645),
    ),
    10657 => array(
        'm_icon' => '<i class="fas fa-sticky-note blue"></i>',
        'm_name' => 'PLAYER TREE CONTENT UPDATE',
        'm_desc' => '',
        'm_parents' => array(10593,4593,10589,10658,10645),
    ),
    7702 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Received BLOG Email',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4593,4755,7569),
    ),
    4570 => array(
        'm_icon' => '<i class="far fa-envelope"></i>',
        'm_name' => 'READER Received Email',
        'm_desc' => '',
        'm_parents' => array(10683,10593,10590,7569,4755,4593),
    ),
    4549 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'READER Sent Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4551 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'READER Sent File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4550 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'READER Sent Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4548 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'READER Sent Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4554 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'Received Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4556 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'Received File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4555 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'Received Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    6563 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'Received Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4593,4755,4280),
    ),
    4552 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'Received Text',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4755,4593,4280),
    ),
    4553 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'Received Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
);

//READ NOD:
$config['en_ids_10596'] = array(6226,7610,10681,10685,10647,4993,5001,10625,5943,4999,4998,5000,5981,11956,5982,5865,5003,10689,10659,6149,6969,4275,4283,6415,6559,6560,6556,6578,7611,7563,10690,4266,4267,4282,5967,10683,4577,4278,4279,4268,4287,7561,7564,7560,7559,7558,7488,7485,7741,7486,4559,7489,7492,6997,6157,7487,6143,6144,7562,7495,5007,4246,7504,4994);
$config['en_all_10596'] = array(
    6226 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Mass Update Statuses',
        'm_desc' => '',
        'm_parents' => array(11161,10596,10589,4593),
    ),
    7610 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'BLOG READ',
        'm_desc' => '',
        'm_parents' => array(10638,10596,10590,4755,4593),
    ),
    10681 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOGS SORTED',
        'm_desc' => '',
        'm_parents' => array(10638,10589,10596,4755,4593,10658),
    ),
    10685 => array(
        'm_icon' => '<i class="fas fa-sync"></i>',
        'm_name' => 'BLOG Submission Update by READER',
        'm_desc' => '',
        'm_parents' => array(4755,10596,10589,4593,10638,10658),
    ),
    10647 => array(
        'm_icon' => '<i class="far fa-tools"></i>',
        'm_name' => 'BLOG Update Verb',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,10638),
    ),
    4993 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'BLOG Viewed by BLOGGER',
        'm_desc' => '',
        'm_parents' => array(10638,10596,10590,4593),
    ),
    5001 => array(
        'm_icon' => '<i class="fas fa-sticky-note"></i>',
        'm_name' => 'PLAYER MASS CONTENT REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    10625 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'PLAYER MASS ICON REPLACE',
        'm_desc' => '',
        'm_parents' => array(10589,10596,4593,4997),
    ),
    5943 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'PLAYER MASS ICON UPDATE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    4999 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME POSTFIX',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    4998 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME PREFIX',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5000 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5981 => array(
        'm_icon' => '<i class="fas fa-layer-plus"></i>',
        'm_name' => 'PLAYER MASS PROFILE ADD',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    11956 => array(
        'm_icon' => '<i class="far fa-layer-plus" aria-hidden="true"></i>',
        'm_name' => 'PLAYER MASS PROFILE IF ADD',
        'm_desc' => '',
        'm_parents' => array(10589,10596,4593,4997),
    ),
    5982 => array(
        'm_icon' => '<i class="fas fa-layer-minus"></i>',
        'm_name' => 'PLAYER MASS PROFILE REMOVE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5865 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'PLAYER MASS READ STATUS REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5003 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'PLAYER MASS STATUS REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    10689 => array(
        'm_icon' => '<i class="fas fa-share-alt rotate90 blue"></i>',
        'm_name' => 'PLAYER MERGED IN PLAYER',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,10658,10645),
    ),
    10659 => array(
        'm_icon' => '<i class="fas fa-plug blue"></i>',
        'm_name' => 'PLAYER TREE TYPE UPDATE',
        'm_desc' => '',
        'm_parents' => array(10658,10589,4593,10596,10645),
    ),
    6149 => array(
        'm_icon' => '<i class="fas fa-search-plus"></i>',
        'm_name' => 'READER BLOG Considered',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,6153,4755,4593),
    ),
    6969 => array(
        'm_icon' => '<i class="fas fa-megaphone"></i>',
        'm_name' => 'READER BLOG Recommended',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,4593,4755,6153),
    ),
    4275 => array(
        'm_icon' => '<i class="fas fa-search"></i>',
        'm_name' => 'READER BLOG Search',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10589,6554,4755,4593),
    ),
    4283 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER BLOGs Listed',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,6153,4755,4593),
    ),
    6415 => array(
        'm_icon' => '<i class="far fa-function"></i>',
        'm_name' => 'READER Cleared Action Plan',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,6418,4593,6414),
    ),
    6559 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Next',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6560 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Skip',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6556 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Stats',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6578 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Stop',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    7611 => array(
        'm_icon' => '<i class="fas fa-hand-pointer"></i>',
        'm_name' => 'READER Engaged BLOG Post',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,7610,4755,4593),
    ),
    7563 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Magic-READ Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,7569,4593),
    ),
    10690 => array(
        'm_icon' => '<i class="fas fa-upload"></i>',
        'm_name' => 'READER Media Uploaded',
        'm_desc' => '',
        'm_parents' => array(6153,10596,10589,4593,10658),
    ),
    4266 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Messenger Opt-in',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    4267 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Messenger Referral',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    4282 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER Opened Profile',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,6222,4593),
    ),
    5967 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER READ CC Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4506,4527,7569,4755,4593),
    ),
    10683 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Read Email',
        'm_desc' => '',
        'm_parents' => array(6153,10658,10596,10589,4593,7654),
    ),
    4577 => array(
        'm_icon' => '<i class="far fa-user-plus"></i>',
        'm_name' => 'READER Sent Access',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4278 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER Sent Messenger Read',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4279 => array(
        'm_icon' => '<i class="far fa-cloud-download"></i>',
        'm_name' => 'READER Sent Messenger Received',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4268 => array(
        'm_icon' => '<i class="far fa-user-tag"></i>',
        'm_name' => 'READER Sent Postback',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4287 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'READER Sent Unknown Message',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    7561 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin Generally',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7564 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin Success',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7560 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin with BLOGion',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7559 => array(
        'm_icon' => '<i class="fas fa-envelope-open"></i>',
        'm_name' => 'READER Signin with Email',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7558 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Signin with Messenger',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7488 => array(
        'm_icon' => '<i class="fas fa-calendar-times"></i>',
        'm_name' => 'READER Step Answer Timeout',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7485 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Answer Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4593,4755,6146,6255),
    ),
    7741 => array(
        'm_icon' => '<i class="fas fa-times-circle"></i>',
        'm_name' => 'READER Step BLOGion Terminated',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Children Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    4559 => array(
        'm_icon' => '<i class="fas fa-comments"></i>',
        'm_name' => 'READER Step Messages Only',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,6274,6255,4755,6146,4593),
    ),
    7489 => array(
        'm_icon' => '<i class="fas fa-check-double"></i>',
        'm_name' => 'READER Step Multi-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,4755,6255,4593,6146),
    ),
    7492 => array(
        'm_icon' => '<i class="fas fa-times-square"></i>',
        'm_name' => 'READER Step Path Not Found',
        'm_desc' => '',
        'm_parents' => array(10596,10589,6255,4755,4593,6146),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Score Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'READER Step Single-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'READER Step Single-Answered Timely',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
    6143 => array(
        'm_icon' => '<i class="fas fa-fast-forward"></i>',
        'm_name' => 'READER Step Skipped',
        'm_desc' => '',
        'm_parents' => array(10596,10589,6146,4755,4593),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'READER Submission Required',
        'm_desc' => '',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
    7562 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Welcome Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,7569,4593),
    ),
    7495 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ RECOMMENDS',
        'm_desc' => '',
        'm_parents' => array(10596,7347,10590,4755,4593),
    ),
    5007 => array(
        'm_icon' => '<i class="fas fa-toggle-on blue" aria-hidden="true"></i>',
        'm_name' => 'TOGGLE SUPERPOWER',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593),
    ),
    4246 => array(
        'm_icon' => '<i class="far fa-bug"></i>',
        'm_name' => 'Trainer Bug Reports',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
    7504 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'Trainer Review Trigger',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
    4994 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'Trainer View Thing',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4593),
    ),
);

//READERS:
$config['en_ids_10590'] = array(7610,4993,6149,6969,4283,7611,7563,4282,5967,7702,4570,7562,7495,4554,4556,4555,6563,4552,4553,4994);
$config['en_all_10590'] = array(
    7610 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'BLOG READ',
        'm_desc' => '',
        'm_parents' => array(10638,10596,10590,4755,4593),
    ),
    4993 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'BLOG Viewed by BLOGGER',
        'm_desc' => '',
        'm_parents' => array(10638,10596,10590,4593),
    ),
    6149 => array(
        'm_icon' => '<i class="fas fa-search-plus"></i>',
        'm_name' => 'READER BLOG Considered',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,6153,4755,4593),
    ),
    6969 => array(
        'm_icon' => '<i class="fas fa-megaphone"></i>',
        'm_name' => 'READER BLOG Recommended',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,4593,4755,6153),
    ),
    4283 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER BLOGs Listed',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,6153,4755,4593),
    ),
    7611 => array(
        'm_icon' => '<i class="fas fa-hand-pointer"></i>',
        'm_name' => 'READER Engaged BLOG Post',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,7610,4755,4593),
    ),
    7563 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Magic-READ Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,7569,4593),
    ),
    4282 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER Opened Profile',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,6222,4593),
    ),
    5967 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER READ CC Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4506,4527,7569,4755,4593),
    ),
    7702 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Received BLOG Email',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4593,4755,7569),
    ),
    4570 => array(
        'm_icon' => '<i class="far fa-envelope"></i>',
        'm_name' => 'READER Received Email',
        'm_desc' => '',
        'm_parents' => array(10683,10593,10590,7569,4755,4593),
    ),
    7562 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Welcome Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,7569,4593),
    ),
    7495 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ RECOMMENDS',
        'm_desc' => '',
        'm_parents' => array(10596,7347,10590,4755,4593),
    ),
    4554 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'Received Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4556 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'Received File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4555 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'Received Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    6563 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'Received Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4593,4755,4280),
    ),
    4552 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'Received Text',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4755,4593,4280),
    ),
    4553 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'Received Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4994 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'Trainer View Thing',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4593),
    ),
);

//BLOGGERS:
$config['en_ids_10589'] = array(10671,4983,10573,4250,6226,4231,10660,10676,10678,10679,10677,7545,10686,10663,10664,10661,10675,10681,10685,4601,10650,10648,10644,10651,10647,4228,4229,7757,4259,4261,10669,4260,4319,4230,4255,4318,4256,4258,4257,10672,4251,10653,5001,10625,5943,4999,4998,5000,5981,11956,5982,5865,5003,10689,10646,10654,10657,10673,10656,10659,4235,4275,6132,6415,6559,6560,6556,6578,10690,4266,4267,10683,6155,4577,4549,4551,4550,4557,4278,4279,4268,4460,4547,4287,4548,7561,7564,7560,7559,7558,7488,7485,7741,7486,4559,7489,7492,6140,6997,6157,7487,6143,6144,7578,6224,5007,4246,7504);
$config['en_all_10589'] = array(
    10671 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,7703,10638),
    ),
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'BLOG AUTHORS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    10573 => array(
        'm_icon' => '<i class="fas fa-bookmark yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG BLOG BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10984,11033,10990,10594,10589,4593,7703,7551,4485),
    ),
    4250 => array(
        'm_icon' => '<i class="fas fa-hashtag"></i>',
        'm_name' => 'BLOG CREATED',
        'm_desc' => '',
        'm_parents' => array(10638,10593,10589,4593),
    ),
    6226 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Mass Update Statuses',
        'm_desc' => '',
        'm_parents' => array(11161,10596,10589,4593),
    ),
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'BLOG MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    10660 => array(
        'm_icon' => '<i class="fas fa-angle-double-right"></i>',
        'm_name' => 'BLOG Migrate Parent BLOG',
        'm_desc' => '',
        'm_parents' => array(7703,4593,10638,10589,10594,10658),
    ),
    10676 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG Notes Sorted',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10658,10638),
    ),
    10678 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG Notes Unlinked',
        'm_desc' => '',
        'm_parents' => array(10658,10539,10589,4593,10638),
    ),
    10679 => array(
        'm_icon' => '<i class="fas fa-sticky-note"></i>',
        'm_name' => 'BLOG Notes Update Content',
        'm_desc' => '',
        'm_parents' => array(10589,4593,10593,10658,10638),
    ),
    10677 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Notes Update Status',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10658,10638),
    ),
    7545 => array(
        'm_icon' => '<i class="fas fa-user-tag blue" aria-hidden="true"></i>',
        'm_name' => 'BLOG PLAYER TAGS',
        'm_desc' => '',
        'm_parents' => array(10983,11033,10990,10594,10589,7703,7551,4593,4485),
    ),
    10686 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG READ ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(7703,10589,10539,4593,10658,10638),
    ),
    10663 => array(
        'm_icon' => '<i class="far fa-coin"></i>',
        'm_name' => 'BLOG READ Update Points',
        'm_desc' => '',
        'm_parents' => array(4228,7703,10539,10589,10638,4593,10658),
    ),
    10664 => array(
        'm_icon' => '<i class="fas fa-bolt"></i>',
        'm_name' => 'BLOG READ Update Score',
        'm_desc' => '',
        'm_parents' => array(7703,10638,10594,10589,4593,4229,10658),
    ),
    10661 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG READ Update Status',
        'm_desc' => '',
        'm_parents' => array(10638,7703,10539,10589,4593,10658),
    ),
    10675 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG SORTED',
        'm_desc' => '',
        'm_parents' => array(7703,10539,10589,4593,10658,10638),
    ),
    10681 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOGS SORTED',
        'm_desc' => '',
        'm_parents' => array(10638,10589,10596,4755,4593,10658),
    ),
    10685 => array(
        'm_icon' => '<i class="fas fa-sync"></i>',
        'm_name' => 'BLOG Submission Update by READER',
        'm_desc' => '',
        'm_parents' => array(4755,10596,10589,4593,10638,10658),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG TAGS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
    10650 => array(
        'm_icon' => '<i class="far fa-clock"></i>',
        'm_name' => 'BLOG Update Completion Time',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10648 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Update Status',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10644 => array(
        'm_icon' => '<i class="far fa-bullseye-arrow"></i>',
        'm_name' => 'BLOG Update Title',
        'm_desc' => '',
        'm_parents' => array(7703,10589,10593,4593,10638),
    ),
    10651 => array(
        'm_icon' => '<i class="far fa-shapes"></i>',
        'm_name' => 'BLOG Update Type',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10647 => array(
        'm_icon' => '<i class="far fa-tools"></i>',
        'm_name' => 'BLOG Update Verb',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,10638),
    ),
    4228 => array(
        'm_icon' => '<i class="far fa-play yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW AUTOMATIC',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,6410,4593,4486),
    ),
    4229 => array(
        'm_icon' => '<i class="fas fa-question-circle yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW CONDITIONAL',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,4527,6410,6283,4593,4486),
    ),
    7757 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'MENCH REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,4593,6150),
    ),
    4259 => array(
        'm_icon' => '<i class="far fa-volume-up blue"></i>',
        'm_name' => 'PLAY BRANCH AUDIO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4261 => array(
        'm_icon' => '<i class="far fa-file-pdf blue"></i>',
        'm_name' => 'PLAY BRANCH FILE',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    10669 => array(
        'm_icon' => '<i class="fab fa-font-awesome-alt blue"></i>',
        'm_name' => 'PLAY BRANCH ICON',
        'm_desc' => '',
        'm_parents' => array(10589,10539,4593,6198,4592),
    ),
    4260 => array(
        'm_icon' => '<i class="far fa-image blue"></i>',
        'm_name' => 'PLAY BRANCH IMAGE',
        'm_desc' => '',
        'm_parents' => array(6198,11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4319 => array(
        'm_icon' => '<i class="far fa-sort-numeric-down blue"></i>',
        'm_name' => 'PLAY BRANCH INTEGER',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592),
    ),
    4230 => array(
        'm_icon' => '<i class="far fa-link rotate90 blue"></i>',
        'm_name' => 'PLAY BRANCH RAW',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592),
    ),
    4255 => array(
        'm_icon' => '<i class="far fa-align-left blue"></i>',
        'm_name' => 'PLAY BRANCH TEXT',
        'm_desc' => '',
        'm_parents' => array(10593,10589,4593,4592),
    ),
    4318 => array(
        'm_icon' => '<i class="far fa-clock blue"></i>',
        'm_name' => 'PLAY BRANCH TIME',
        'm_desc' => '',
        'm_parents' => array(10594,10589,4593,4592),
    ),
    4256 => array(
        'm_icon' => '<i class="far fa-browser blue"></i>',
        'm_name' => 'PLAY BRANCH URL',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592,4537),
    ),
    4258 => array(
        'm_icon' => '<i class="far fa-video blue"></i>',
        'm_name' => 'PLAY BRANCH VIDEO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4257 => array(
        'm_icon' => '<i class="far fa-play-circle blue"></i>',
        'm_name' => 'PLAY BRANCH WIDGET',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592,4537,4506),
    ),
    10672 => array(
        'm_icon' => '<i class="far fa-trash-alt blue"></i>',
        'm_name' => 'PLAYER ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(10539,4593,10589,10645),
    ),
    4251 => array(
        'm_icon' => '<i class="fas fa-at blue"></i>',
        'm_name' => 'PLAYER CREATED',
        'm_desc' => '',
        'm_parents' => array(10645,10593,10589,4593),
    ),
    10653 => array(
        'm_icon' => '<i class="far fa-user-circle blue"></i>',
        'm_name' => 'PLAYER ICON UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10645),
    ),
    5001 => array(
        'm_icon' => '<i class="fas fa-sticky-note"></i>',
        'm_name' => 'PLAYER MASS CONTENT REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    10625 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'PLAYER MASS ICON REPLACE',
        'm_desc' => '',
        'm_parents' => array(10589,10596,4593,4997),
    ),
    5943 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'PLAYER MASS ICON UPDATE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    4999 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME POSTFIX',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    4998 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME PREFIX',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5000 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5981 => array(
        'm_icon' => '<i class="fas fa-layer-plus"></i>',
        'm_name' => 'PLAYER MASS PROFILE ADD',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    11956 => array(
        'm_icon' => '<i class="far fa-layer-plus" aria-hidden="true"></i>',
        'm_name' => 'PLAYER MASS PROFILE IF ADD',
        'm_desc' => '',
        'm_parents' => array(10589,10596,4593,4997),
    ),
    5982 => array(
        'm_icon' => '<i class="fas fa-layer-minus"></i>',
        'm_name' => 'PLAYER MASS PROFILE REMOVE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5865 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'PLAYER MASS READ STATUS REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5003 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'PLAYER MASS STATUS REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    10689 => array(
        'm_icon' => '<i class="fas fa-share-alt rotate90 blue"></i>',
        'm_name' => 'PLAYER MERGED IN PLAYER',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,10658,10645),
    ),
    10646 => array(
        'm_icon' => '<i class="far fa-fingerprint blue"></i>',
        'm_name' => 'PLAYER NAME UPDATE',
        'm_desc' => '',
        'm_parents' => array(10593,4593,10589,10645),
    ),
    10654 => array(
        'm_icon' => '<i class="far fa-sliders-h blue"></i>',
        'm_name' => 'PLAYER STATUS UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10645),
    ),
    10657 => array(
        'm_icon' => '<i class="fas fa-sticky-note blue"></i>',
        'm_name' => 'PLAYER TREE CONTENT UPDATE',
        'm_desc' => '',
        'm_parents' => array(10593,4593,10589,10658,10645),
    ),
    10673 => array(
        'm_icon' => '<i class="far fa-trash-alt blue"></i>',
        'm_name' => 'PLAYER TREE REMOVED',
        'm_desc' => '',
        'm_parents' => array(10645,4593,10539,10589,10658),
    ),
    10656 => array(
        'm_icon' => '<i class="far fa-sliders-h blue"></i>',
        'm_name' => 'PLAYER TREE STATUS UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10589,10539,10658,10645),
    ),
    10659 => array(
        'm_icon' => '<i class="fas fa-plug blue"></i>',
        'm_name' => 'PLAYER TREE TYPE UPDATE',
        'm_desc' => '',
        'm_parents' => array(10658,10589,4593,10596,10645),
    ),
    4235 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10539,7347,10589,5967,4755,4593),
    ),
    4275 => array(
        'm_icon' => '<i class="fas fa-search"></i>',
        'm_name' => 'READER BLOG Search',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10589,6554,4755,4593),
    ),
    6132 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'READER BLOGs Sorted',
        'm_desc' => '',
        'm_parents' => array(10539,10639,10589,6153,4506,4755,4593),
    ),
    6415 => array(
        'm_icon' => '<i class="far fa-function"></i>',
        'm_name' => 'READER Cleared Action Plan',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,6418,4593,6414),
    ),
    6559 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Next',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6560 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Skip',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6556 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Stats',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6578 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Stop',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    10690 => array(
        'm_icon' => '<i class="fas fa-upload"></i>',
        'm_name' => 'READER Media Uploaded',
        'm_desc' => '',
        'm_parents' => array(6153,10596,10589,4593,10658),
    ),
    4266 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Messenger Opt-in',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    4267 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Messenger Referral',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    10683 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Read Email',
        'm_desc' => '',
        'm_parents' => array(6153,10658,10596,10589,4593,7654),
    ),
    6155 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'READER REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10888,10539,10639,10589,10570,7703,4506,6150,4593,4755),
    ),
    4577 => array(
        'm_icon' => '<i class="far fa-user-plus"></i>',
        'm_name' => 'READER Sent Access',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4549 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'READER Sent Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4551 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'READER Sent File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4550 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'READER Sent Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4557 => array(
        'm_icon' => '<i class="far fa-location-circle"></i>',
        'm_name' => 'READER Sent Location',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4278 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER Sent Messenger Read',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4279 => array(
        'm_icon' => '<i class="far fa-cloud-download"></i>',
        'm_name' => 'READER Sent Messenger Received',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4268 => array(
        'm_icon' => '<i class="far fa-user-tag"></i>',
        'm_name' => 'READER Sent Postback',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4460 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'READER Sent Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4547 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'READER Sent Text',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4287 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'READER Sent Unknown Message',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4548 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'READER Sent Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    7561 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin Generally',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7564 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin Success',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7560 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin with BLOGion',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7559 => array(
        'm_icon' => '<i class="fas fa-envelope-open"></i>',
        'm_name' => 'READER Signin with Email',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7558 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Signin with Messenger',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7488 => array(
        'm_icon' => '<i class="fas fa-calendar-times"></i>',
        'm_name' => 'READER Step Answer Timeout',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7485 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Answer Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4593,4755,6146,6255),
    ),
    7741 => array(
        'm_icon' => '<i class="fas fa-times-circle"></i>',
        'm_name' => 'READER Step BLOGion Terminated',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Children Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    4559 => array(
        'm_icon' => '<i class="fas fa-comments"></i>',
        'm_name' => 'READER Step Messages Only',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,6274,6255,4755,6146,4593),
    ),
    7489 => array(
        'm_icon' => '<i class="fas fa-check-double"></i>',
        'm_name' => 'READER Step Multi-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,4755,6255,4593,6146),
    ),
    7492 => array(
        'm_icon' => '<i class="fas fa-times-square"></i>',
        'm_name' => 'READER Step Path Not Found',
        'm_desc' => '',
        'm_parents' => array(10596,10589,6255,4755,4593,6146),
    ),
    6140 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step READ Unlock',
        'm_desc' => '',
        'm_parents' => array(10539,10589,6410,4229,4755,4593),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Score Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'READER Step Single-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'READER Step Single-Answered Timely',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
    6143 => array(
        'm_icon' => '<i class="fas fa-fast-forward"></i>',
        'm_name' => 'READER Step Skipped',
        'm_desc' => '',
        'm_parents' => array(10596,10589,6146,4755,4593),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'READER Submission Required',
        'm_desc' => '',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
    7578 => array(
        'm_icon' => '<i class="far fa-key"></i>',
        'm_name' => 'READER Update Password',
        'm_desc' => '',
        'm_parents' => array(6222,10658,6153,10539,10589,4755,4593),
    ),
    6224 => array(
        'm_icon' => '<i class="far fa-sync"></i>',
        'm_name' => 'READER Update Profile',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,6222,4593),
    ),
    5007 => array(
        'm_icon' => '<i class="fas fa-toggle-on blue" aria-hidden="true"></i>',
        'm_name' => 'TOGGLE SUPERPOWER',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593),
    ),
    4246 => array(
        'm_icon' => '<i class="far fa-bug"></i>',
        'm_name' => 'Trainer Bug Reports',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
    7504 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'Trainer Review Trigger',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
);

//BLOG READ BOOKMARKS:
$config['en_ids_7347'] = array(4235,7495);
$config['en_all_7347'] = array(
    4235 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10539,7347,10589,5967,4755,4593),
    ),
    7495 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'RECOMMENDS',
        'm_desc' => '',
        'm_parents' => array(10596,7347,10590,4755,4593),
    ),
);

//READ ALL:
$config['en_ids_6192'] = array(7637,6914,6677,6683);
$config['en_all_6192'] = array(
    7637 => array(
        'm_icon' => '<i class="far fa-paperclip"></i>',
        'm_name' => 'ATTACH & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7751,7585,6144,6192),
    ),
    6914 => array(
        'm_icon' => '<i class="fas fa-cubes "></i>',
        'm_name' => 'MEET ALL REQUIREMENTS',
        'm_desc' => '',
        'm_parents' => array(7582,10984,6192,7756,7585,7486,7485,7309,6997),
    ),
    6677 => array(
        'm_icon' => '<i class="far fa-comment" aria-hidden="true"></i>',
        'm_name' => 'READ & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7756,7585,4559,6192),
    ),
    6683 => array(
        'm_icon' => '<i class="far fa-keyboard "></i>',
        'm_name' => 'REPLY & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7585,6144,6192),
    ),
);

//BLOG FLOW TYPES:
$config['en_ids_10602'] = array(6192,6193);
$config['en_all_10602'] = array(
    6192 => array(
        'm_icon' => '<i class="fas fa-sitemap" aria-hidden="true"></i>',
        'm_name' => 'ALL',
        'm_desc' => 'Reader is recommended to continue reading all next blogs.',
        'm_parents' => array(4527,10602),
    ),
    6193 => array(
        'm_icon' => '<i class="fas fa-code-branch rotate180" aria-hidden="true"></i>',
        'm_name' => 'ANY',
        'm_desc' => 'Reader is asked to choose a personalized path forward.',
        'm_parents' => array(10602,4527),
    ),
);

//READ WORD WEIGHTS:
$config['en_ids_10592'] = array(10596,10539,10594,10593);
$config['en_all_10592'] = array(
    10596 => array(
        'm_icon' => '<i class="fas fa-square-root ispink"></i>',
        'm_name' => 'NOD',
        'm_desc' => 'A fraction of a word',
        'm_parents' => array(11067,4527,10592),
    ),
    10539 => array(
        'm_icon' => '<i class="far fa-file-word ispink"></i>',
        'm_name' => 'ONE WORD',
        'm_desc' => 'A single word only',
        'm_parents' => array(4527,10592,5008),
    ),
    10594 => array(
        'm_icon' => '<i class="fas fa-value-absolute ispink"></i>',
        'm_name' => 'ONE WORD + LINKS',
        'm_desc' => 'A single word plus connections',
        'm_parents' => array(4527,10592),
    ),
    10593 => array(
        'm_icon' => '<i class="fas fa-union ispink"></i>',
        'm_name' => 'STATEMENT + LINKS',
        'm_desc' => 'Multiple words based on content plus connections',
        'm_parents' => array(4527,10592),
    ),
);

//READ PLAY DIRECTIONS:
$config['en_ids_10591'] = array(10589,10590);
$config['en_all_10591'] = array(
    10589 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'BLOGGERS',
        'm_desc' => '',
        'm_parents' => array(4527,10591),
    ),
    10590 => array(
        'm_icon' => '<i class="fas fa-user ispink"></i>',
        'm_name' => 'READERS',
        'm_desc' => '',
        'm_parents' => array(4527,10591),
    ),
);

//PUBLIC PLAYERS:
$config['en_ids_10571'] = array(2997,4446,3005,3147,3084,4763,3000,2999,4883,3192,5948,2998);
$config['en_all_10571'] = array(
    2997 => array(
        'm_icon' => '<i class="far fa-newspaper" aria-hidden="true"></i>',
        'm_name' => 'Articles',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    4446 => array(
        'm_icon' => '<i class="far fa-tachometer" aria-hidden="true"></i>',
        'm_name' => 'Assessments',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    3005 => array(
        'm_icon' => '<i class="far fa-book" aria-hidden="true"></i>',
        'm_name' => 'Books',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3147 => array(
        'm_icon' => '<i class="far fa-presentation" aria-hidden="true"></i>',
        'm_name' => 'Courses',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3084 => array(
        'm_icon' => '<i class="fas fa-user-astronaut"></i>',
        'm_name' => 'EXPERTS',
        'm_desc' => '',
        'm_parents' => array(10571,4983,6827,4463),
    ),
    4763 => array(
        'm_icon' => '<i class="far fa-megaphone" aria-hidden="true"></i>',
        'm_name' => 'Marketing Channels',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3000 => array(
        'm_icon' => '<i class="far fa-thumbs-up"></i>',
        'm_name' => 'PLAY SOURCES',
        'm_desc' => '',
        'm_parents' => array(7303,10571,4506,4527,4463),
    ),
    2999 => array(
        'm_icon' => '<i class="far fa-microphone" aria-hidden="true"></i>',
        'm_name' => 'Podcasts',
        'm_desc' => '',
        'm_parents' => array(10809,10571,4983,7614,6805,3000),
    ),
    4883 => array(
        'm_icon' => '<i class="far fa-concierge-bell" aria-hidden="true"></i>',
        'm_name' => 'Services',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3192 => array(
        'm_icon' => '<i class="far fa-compact-disc" aria-hidden="true"></i>',
        'm_name' => 'Software',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    5948 => array(
        'm_icon' => '<i class="far fa-file-invoice" aria-hidden="true"></i>',
        'm_name' => 'Templates',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    2998 => array(
        'm_icon' => '<i class="far fa-film" aria-hidden="true"></i>',
        'm_name' => 'Videos',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
);

//Reader Selectable Completion:
$config['en_ids_10570'] = array(6155);
$config['en_all_10570'] = array(
    6155 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'READER REMOVED BOOKMARK',
        'm_desc' => 'You did NOT accomplish the intention and you want to stop all future updates on this intention',
        'm_parents' => array(10888,10539,10639,10589,10570,7703,4506,6150,4593,4755),
    ),
);

//BLOG AUTHORS:
$config['en_ids_4983'] = array(2997,4446,3005,3147,3084,4763,4430,2999,4883,3192,5948,2998);
$config['en_all_4983'] = array(
    2997 => array(
        'm_icon' => '<i class="far fa-newspaper" aria-hidden="true"></i>',
        'm_name' => 'Articles',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    4446 => array(
        'm_icon' => '<i class="far fa-tachometer" aria-hidden="true"></i>',
        'm_name' => 'Assessments',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    3005 => array(
        'm_icon' => '<i class="far fa-book" aria-hidden="true"></i>',
        'm_name' => 'Books',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3147 => array(
        'm_icon' => '<i class="far fa-presentation" aria-hidden="true"></i>',
        'm_name' => 'Courses',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3084 => array(
        'm_icon' => '<i class="fas fa-user-astronaut"></i>',
        'm_name' => 'EXPERTS',
        'm_desc' => '',
        'm_parents' => array(10571,4983,6827,4463),
    ),
    4763 => array(
        'm_icon' => '<i class="far fa-megaphone" aria-hidden="true"></i>',
        'm_name' => 'Marketing Channels',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    4430 => array(
        'm_icon' => '<i class="far fa-user"></i>',
        'm_name' => 'PLAYERS',
        'm_desc' => '',
        'm_parents' => array(10573,4983,6827,4426,4463),
    ),
    2999 => array(
        'm_icon' => '<i class="far fa-microphone" aria-hidden="true"></i>',
        'm_name' => 'Podcasts',
        'm_desc' => '',
        'm_parents' => array(10809,10571,4983,7614,6805,3000),
    ),
    4883 => array(
        'm_icon' => '<i class="far fa-concierge-bell" aria-hidden="true"></i>',
        'm_name' => 'Services',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3192 => array(
        'm_icon' => '<i class="far fa-compact-disc" aria-hidden="true"></i>',
        'm_name' => 'Software',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    5948 => array(
        'm_icon' => '<i class="far fa-file-invoice" aria-hidden="true"></i>',
        'm_name' => 'Templates',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    2998 => array(
        'm_icon' => '<i class="far fa-film" aria-hidden="true"></i>',
        'm_name' => 'Videos',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
);

//Action Plan Blogion Successful:
$config['en_ids_7758'] = array();
$config['en_all_7758'] = array(
);

//Blog Auto Completable:
$config['en_ids_7756'] = array(6914,6907,6677);
$config['en_all_7756'] = array(
    6914 => array(
        'm_icon' => '<i class="fas fa-cubes "></i>',
        'm_name' => 'MEET ALL REQUIREMENTS',
        'm_desc' => '',
        'm_parents' => array(7582,10984,6192,7756,7585,7486,7485,7309,6997),
    ),
    6907 => array(
        'm_icon' => '<i class="fas fa-cube "></i>',
        'm_name' => 'MEET ONE REQUIREMENT',
        'm_desc' => '',
        'm_parents' => array(10984,7756,7585,7486,7485,7309,6997,6193),
    ),
    6677 => array(
        'm_icon' => '<i class="far fa-comment" aria-hidden="true"></i>',
        'm_name' => 'READ & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7756,7585,4559,6192),
    ),
);

//Blog Upload File:
$config['en_ids_7751'] = array(7637);
$config['en_all_7751'] = array(
    7637 => array(
        'm_icon' => '<i class="far fa-paperclip"></i>',
        'm_name' => 'BLOG ATTACH & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7751,7585,6144,6192),
    ),
);

//READER Submission Required:
$config['en_ids_6144'] = array(7637,6683);
$config['en_all_6144'] = array(
    7637 => array(
        'm_icon' => '<i class="far fa-paperclip"></i>',
        'm_name' => 'ATTACH & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7751,7585,6144,6192),
    ),
    6683 => array(
        'm_icon' => '<i class="far fa-keyboard "></i>',
        'm_name' => 'REPLY & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7585,6144,6192),
    ),
);

//READ METADATA:
$config['en_ids_6103'] = array(6402,6203,4358);
$config['en_all_6103'] = array(
    6402 => array(
        'm_icon' => '<i class="fas fa-bolt"></i>',
        'm_name' => 'Condition Score Range',
        'm_desc' => '',
        'm_parents' => array(10984,10664,6103,6410),
    ),
    6203 => array(
        'm_icon' => '<i class="far fa-lambda"></i>',
        'm_name' => 'Facebook Attachment ID',
        'm_desc' => 'For media files such as videos, audios, images and other files, we cache them with the Facebook Server so we can instantly deliver them to students. This variables in the link metadata is where we store the attachment ID. See the children to better understand which links types support this caching feature.',
        'm_parents' => array(6232,6215,2793,6103),
    ),
    4358 => array(
        'm_icon' => '<i class="far fa-coin"></i>',
        'm_name' => 'READ MARKS',
        'm_desc' => '',
        'm_parents' => array(10984,10663,6103,6410,6232),
    ),
);

//READ TABLE:
$config['en_ids_4341'] = array(4369,4429,7694,4367,4372,6103,4368,4366,4371,4364,4370,6186,4362,4593,10588);
$config['en_all_4341'] = array(
    4369 => array(
        'm_icon' => '<i class="fas fa-hashtag ispink"></i>',
        'm_name' => 'CHILD BLOG',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6202,6232,4341),
    ),
    4429 => array(
        'm_icon' => '<i class="fas fa-at ispink"></i>',
        'm_name' => 'CHILD PLAYER',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6160,6232,4341),
    ),
    7694 => array(
        'm_icon' => '<i class="fas fa-project-diagram ispink"></i>',
        'm_name' => 'EXTERNAL ID',
        'm_desc' => '',
        'm_parents' => array(6215,6232,4341),
    ),
    4367 => array(
        'm_icon' => '<i class="fas fa-info-circle ispink"></i>',
        'm_name' => 'ID',
        'm_desc' => '',
        'm_parents' => array(6232,6215,4341),
    ),
    4372 => array(
        'm_icon' => '<i class="fas fa-sticky-note ispink"></i>',
        'm_name' => 'MESSAGE',
        'm_desc' => '',
        'm_parents' => array(7578,10679,10657,5001,6232,4341),
    ),
    6103 => array(
        'm_icon' => '<i class="far fa-lambda ispink"></i>',
        'm_name' => 'METADATA',
        'm_desc' => '',
        'm_parents' => array(4527,6232,6195,4341),
    ),
    4368 => array(
        'm_icon' => '<i class="fas fa-hashtag ispink"></i>',
        'm_name' => 'PARENT BLOG',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6202,6232,4341),
    ),
    4366 => array(
        'm_icon' => '<i class="fas fa-at ispink"></i>',
        'm_name' => 'PARENT PLAYER',
        'm_desc' => '',
        'm_parents' => array(11081,10692,6160,6232,4341),
    ),
    4371 => array(
        'm_icon' => '<i class="fas fa-link ispink"></i>',
        'm_name' => 'PARENT READ',
        'm_desc' => '',
        'm_parents' => array(11081,10692,4367,6232,4341),
    ),
    4364 => array(
        'm_icon' => '<i class="far fa-user-edit ispink"></i>',
        'm_name' => 'PLAYER',
        'm_desc' => '',
        'm_parents' => array(11081,6160,6232,6194,4341),
    ),
    4370 => array(
        'm_icon' => '<i class="fas fa-sort ispink"></i>',
        'm_name' => 'RANK',
        'm_desc' => 'tr_order empowers the arrangement or disposition of intents, entities or transactions in relation to each other according to a particular sequence, pattern, or method defined by Miners or Masters.',
        'm_parents' => array(10676,10675,6232,4341),
    ),
    6186 => array(
        'm_icon' => '<i class="far fa-sliders-h ispink"></i>',
        'm_name' => 'STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,10677,10661,10656,6204,5865,6160,6232,7304,4527,6194,4341),
    ),
    4362 => array(
        'm_icon' => '<i class="far fa-clock ispink"></i>',
        'm_name' => 'TIME',
        'm_desc' => '',
        'm_parents' => array(6232,4341),
    ),
    4593 => array(
        'm_icon' => '<i class="fas fa-plug ispink"></i>',
        'm_name' => 'TYPE',
        'm_desc' => '',
        'm_parents' => array(11081,10659,6160,6232,6194,4527,4341),
    ),
    10588 => array(
        'm_icon' => '<i class="fas fa-file-word ispink"></i>',
        'm_name' => 'WORDS',
        'm_desc' => '',
        'm_parents' => array(6214,4506,4341),
    ),
);

//PLAY TABLE:
$config['en_ids_6206'] = array(6197,6198,6160,6172,6177,6199);
$config['en_all_6206'] = array(
    6197 => array(
        'm_icon' => '<i class="fas fa-fingerprint isblue" aria-hidden="true"></i>',
        'm_name' => 'FULL NAME',
        'm_desc' => '',
        'm_parents' => array(6225,11072,10646,5000,4998,4999,6232,6206),
    ),
    6198 => array(
        'm_icon' => '<i class="fas fa-user-circle isblue"></i>',
        'm_name' => 'ICON',
        'm_desc' => '',
        'm_parents' => array(10653,5943,10625,6232,6206),
    ),
    6160 => array(
        'm_icon' => '<i class="fas fa-user-circle blue"></i>',
        'm_name' => 'ID',
        'm_desc' => '',
        'm_parents' => array(6232,6215,6206),
    ),
    6172 => array(
        'm_icon' => '<i class="fas fa-lambda isblue"></i>',
        'm_name' => 'METADATA',
        'm_desc' => '',
        'm_parents' => array(11044,6232,3323,6206,6195),
    ),
    6177 => array(
        'm_icon' => '<i class="fas fa-sliders-h isblue"></i>',
        'm_name' => 'STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,7303,6204,5003,10654,6160,6232,6194,6206,4527),
    ),
    6199 => array(
        'm_icon' => '<i class="fas fa-shield-check isblue"></i>',
        'm_name' => 'TRUST SCORE',
        'm_desc' => '',
        'm_parents' => array(6232,4463,6214,6206),
    ),
);

//BLOG TABLE:
$config['en_ids_6201'] = array(7585,6202,6159,4356,7596,4737,4736);
$config['en_all_6201'] = array(
    7585 => array(
        'm_icon' => '<i class="fas fa-random yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW',
        'm_desc' => '',
        'm_parents' => array(6204,10651,6160,6194,6232,4527,6201),
    ),
    6202 => array(
        'm_icon' => '<i class="fas fa-plus-circle yellow"></i>',
        'm_name' => 'ID',
        'm_desc' => '',
        'm_parents' => array(6232,6215,6201),
    ),
    6159 => array(
        'm_icon' => '<i class="fas fa-lambda yellow" aria-hidden="true"></i>',
        'm_name' => 'METADATA',
        'm_desc' => 'Intent metadata contains variables that have been automatically calculated and automatically updates using a cron job. Intent Metadata are the backbone of key functions and user interfaces like the intent landing page or Action Plan completion workflows.',
        'm_parents' => array(11049,6232,6201,6195),
    ),
    4356 => array(
        'm_icon' => '<i class="fas fa-stopwatch yellow"></i>',
        'm_name' => 'Read Time',
        'm_desc' => '',
        'm_parents' => array(10888,10650,6232,6201),
    ),
    7596 => array(
        'm_icon' => '<i class="fas fa-triangle yellow"></i>',
        'm_name' => 'Scope',
        'm_desc' => '',
        'm_parents' => array(10888,6204,7302,6160,6201,6194,6232,4527),
    ),
    4737 => array(
        'm_icon' => '<i class="fas fa-sliders-h yellow"></i>',
        'm_name' => 'STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,6204,10648,6226,6160,6232,7302,6194,6201,4527),
    ),
    4736 => array(
        'm_icon' => '<i class="fas fa-h1 yellow"></i>',
        'm_name' => 'TITLE',
        'm_desc' => '',
        'm_parents' => array(11071,10644,6232,6201),
    ),
);

//Single Selectable:
$config['en_ids_6204'] = array(10956,7585,10602,7596,4737,3290,4454,6177,11007,10591,6186,10592,3289);
$config['en_all_6204'] = array(
    10956 => array(
        'm_icon' => '<i class="fas fa-paw blue"></i>',
        'm_name' => 'AVATARS',
        'm_desc' => '',
        'm_parents' => array(6204,11008,4527),
    ),
    7585 => array(
        'm_icon' => '<i class="fas fa-random yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG FLOW',
        'm_desc' => '',
        'm_parents' => array(6204,10651,6160,6194,6232,4527,6201),
    ),
    10602 => array(
        'm_icon' => '<i class="far fa-puzzle-piece" aria-hidden="true"></i>',
        'm_name' => 'BLOG FLOW TYPES',
        'm_desc' => '',
        'm_parents' => array(10893,6204,7302,4527),
    ),
    7596 => array(
        'm_icon' => '<i class="fas fa-triangle yellow"></i>',
        'm_name' => 'BLOG Scope',
        'm_desc' => '',
        'm_parents' => array(10888,6204,7302,6160,6201,6194,6232,4527),
    ),
    4737 => array(
        'm_icon' => '<i class="fas fa-sliders-h yellow"></i>',
        'm_name' => 'BLOG STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,6204,10648,6226,6160,6232,7302,6194,6201,4527),
    ),
    3290 => array(
        'm_icon' => '<i class="far fa-transgender blue"></i>',
        'm_name' => 'GENDER',
        'm_desc' => '',
        'm_parents' => array(6204),
    ),
    4454 => array(
        'm_icon' => '<i class="fas fa-volume blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER NOTIFICATION LEVEL',
        'm_desc' => '',
        'm_parents' => array(7552,6225,6204,4527),
    ),
    6177 => array(
        'm_icon' => '<i class="fas fa-sliders-h isblue"></i>',
        'm_name' => 'PLAYER STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,7303,6204,5003,10654,6160,6232,6194,6206,4527),
    ),
    11007 => array(
        'm_icon' => '<i class="fas fa-usd-circle isblue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER SUBSCRIPTION',
        'm_desc' => '',
        'm_parents' => array(4527,6204,6225),
    ),
    10591 => array(
        'm_icon' => '<i class="fas fa-exchange rotate90 ispink"></i>',
        'm_name' => 'READ PLAY DIRECTIONS',
        'm_desc' => '',
        'm_parents' => array(6204,7304,6771,4527,10588),
    ),
    6186 => array(
        'm_icon' => '<i class="far fa-sliders-h ispink"></i>',
        'm_name' => 'READ STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,10677,10661,10656,6204,5865,6160,6232,7304,4527,6194,4341),
    ),
    10592 => array(
        'm_icon' => '<i class="fas fa-weight ispink"></i>',
        'm_name' => 'READ WORD WEIGHTS',
        'm_desc' => '',
        'm_parents' => array(6204,6771,4527,10588),
    ),
    3289 => array(
        'm_icon' => '<i class="fas fa-map-marked isblue"></i>',
        'm_name' => 'TIMEZONE',
        'm_desc' => '',
        'm_parents' => array(6204),
    ),
);

//Blog Answer Types:
$config['en_ids_7712'] = array(6684,7231);
$config['en_all_7712'] = array(
    6684 => array(
        'm_icon' => '<i class="fas fa-check-circle" aria-hidden="true"></i>',
        'm_name' => 'ONE',
        'm_desc' => '',
        'm_parents' => array(7712,7588,7585,6157,6193),
    ),
    7231 => array(
        'm_icon' => '<i class="fas fa-check-square" aria-hidden="true"></i>',
        'm_name' => 'SOME',
        'm_desc' => '',
        'm_parents' => array(7712,7489,7588,7585,6193),
    ),
);

//Reader Step Answered Successfully:
$config['en_ids_7704'] = array(7489,6157,7487);
$config['en_all_7704'] = array(
    7489 => array(
        'm_icon' => '<i class="fas fa-check-double"></i>',
        'm_name' => 'Multi-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,4755,6255,4593,6146),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'Single-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'Single-Answered Timely',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
);

//Interaction Blog Subscription Types:
$config['en_ids_7703'] = array(10671,4983,10573,4231,10660,7545,10686,10663,10664,10661,10675,4601,10662,10650,10648,10644,10651,4228,4229,6155,7485,7486,4559,7489,6997,6157,7487,6144);
$config['en_all_7703'] = array(
    10671 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,7703,10638),
    ),
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'BLOG AUTHORS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    10573 => array(
        'm_icon' => '<i class="fas fa-bookmark yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG BLOG BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10984,11033,10990,10594,10589,4593,7703,7551,4485),
    ),
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'BLOG MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    10660 => array(
        'm_icon' => '<i class="fas fa-angle-double-right"></i>',
        'm_name' => 'BLOG Migrate Parent BLOG',
        'm_desc' => '',
        'm_parents' => array(7703,4593,10638,10589,10594,10658),
    ),
    7545 => array(
        'm_icon' => '<i class="fas fa-user-tag blue" aria-hidden="true"></i>',
        'm_name' => 'BLOG PLAYER TAGS',
        'm_desc' => '',
        'm_parents' => array(10983,11033,10990,10594,10589,7703,7551,4593,4485),
    ),
    10686 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG READ ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(7703,10589,10539,4593,10658,10638),
    ),
    10663 => array(
        'm_icon' => '<i class="far fa-coin"></i>',
        'm_name' => 'BLOG READ Update Points',
        'm_desc' => '',
        'm_parents' => array(4228,7703,10539,10589,10638,4593,10658),
    ),
    10664 => array(
        'm_icon' => '<i class="fas fa-bolt"></i>',
        'm_name' => 'BLOG READ Update Score',
        'm_desc' => '',
        'm_parents' => array(7703,10638,10594,10589,4593,4229,10658),
    ),
    10661 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG READ Update Status',
        'm_desc' => '',
        'm_parents' => array(10638,7703,10539,10589,4593,10658),
    ),
    10675 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG SORTED',
        'm_desc' => '',
        'm_parents' => array(7703,10539,10589,4593,10658,10638),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG TAGS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
    10662 => array(
        'm_icon' => '<i class="fas fa-hashtag"></i>',
        'm_name' => 'BLOG UPDATE BRANCH',
        'm_desc' => '',
        'm_parents' => array(11027,10638,7703,10539,4593,10658),
    ),
    10650 => array(
        'm_icon' => '<i class="far fa-clock"></i>',
        'm_name' => 'BLOG Update Completion Time',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10648 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Update Status',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10644 => array(
        'm_icon' => '<i class="far fa-bullseye-arrow"></i>',
        'm_name' => 'BLOG Update Title',
        'm_desc' => '',
        'm_parents' => array(7703,10589,10593,4593,10638),
    ),
    10651 => array(
        'm_icon' => '<i class="far fa-shapes"></i>',
        'm_name' => 'BLOG Update Type',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    4228 => array(
        'm_icon' => '<i class="far fa-play yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW AUTOMATIC',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,6410,4593,4486),
    ),
    4229 => array(
        'm_icon' => '<i class="fas fa-question-circle yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW CONDITIONAL',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,4527,6410,6283,4593,4486),
    ),
    6155 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'READER REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10888,10539,10639,10589,10570,7703,4506,6150,4593,4755),
    ),
    7485 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Answer Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4593,4755,6146,6255),
    ),
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Children Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    4559 => array(
        'm_icon' => '<i class="fas fa-comments"></i>',
        'm_name' => 'READER Step Messages Only',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,6274,6255,4755,6146,4593),
    ),
    7489 => array(
        'm_icon' => '<i class="fas fa-check-double"></i>',
        'm_name' => 'READER Step Multi-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,4755,6255,4593,6146),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Score Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'READER Step Single-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'READER Step Single-Answered Timely',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'READER Submission Required',
        'm_desc' => '',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
);

//BLOG Scope:
$config['en_ids_7596'] = array(7597,7766,7598);
$config['en_all_7596'] = array(
    7597 => array(
        'm_icon' => '<i class="fal fa-sticky-note"></i>',
        'm_name' => 'NOTE',
        'm_desc' => 'Only accessible through parent blogs',
        'm_parents' => array(7596),
    ),
    7766 => array(
        'm_icon' => '<i class="far fa-scroll"></i>',
        'm_name' => 'PAPER',
        'm_desc' => 'Searchable by readers, Reusable by bloggers and accessible through parent blogs',
        'm_parents' => array(7596),
    ),
    7598 => array(
        'm_icon' => '<i class="fas fa-newspaper"></i>',
        'm_name' => 'POST',
        'm_desc' => 'Searchable by readers, reusable by bloggers, accessible through parent blogs & requires readers to sign-in to continue',
        'm_parents' => array(7596),
    ),
);

//FLOW CONDITIONAL:
$config['en_ids_4229'] = array(10664,6140,6997);
$config['en_all_4229'] = array(
    10664 => array(
        'm_icon' => '<i class="fas fa-bolt"></i>',
        'm_name' => 'BLOG READ Update Score',
        'm_desc' => '',
        'm_parents' => array(7703,10638,10594,10589,4593,4229,10658),
    ),
    6140 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step READ Unlock',
        'm_desc' => 'A step that has become available because of the score generated from student answers',
        'm_parents' => array(10539,10589,6410,4229,4755,4593),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Score Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
);

//Blog Select Publicly:
$config['en_ids_7588'] = array(6684,7231);
$config['en_all_7588'] = array(
    6684 => array(
        'm_icon' => '<i class="fas fa-check-circle" aria-hidden="true"></i>',
        'm_name' => 'ONE',
        'm_desc' => '',
        'm_parents' => array(7712,7588,7585,6157,6193),
    ),
    7231 => array(
        'm_icon' => '<i class="fas fa-check-square" aria-hidden="true"></i>',
        'm_name' => 'SOME',
        'm_desc' => '',
        'm_parents' => array(7712,7489,7588,7585,6193),
    ),
);

//READ ANY:
$config['en_ids_6193'] = array(6684,7231,6907);
$config['en_all_6193'] = array(
    6684 => array(
        'm_icon' => '<i class="fas fa-check-circle" aria-hidden="true"></i>',
        'm_name' => 'SELECT ONE',
        'm_desc' => '',
        'm_parents' => array(7712,7588,7585,6157,6193),
    ),
    7231 => array(
        'm_icon' => '<i class="fas fa-check-square" aria-hidden="true"></i>',
        'm_name' => 'SELECT SOME',
        'm_desc' => '',
        'm_parents' => array(7712,7489,7588,7585,6193),
    ),
    6907 => array(
        'm_icon' => '<i class="fas fa-cube "></i>',
        'm_name' => 'MEET ONE REQUIREMENT',
        'm_desc' => '',
        'm_parents' => array(10984,7756,7585,7486,7485,7309,6997,6193),
    ),
);

//BLOG FLOW:
$config['en_ids_7585'] = array(6677,6683,7637,6684,7231,6907,6914);
$config['en_all_7585'] = array(
    6677 => array(
        'm_icon' => '<i class="far fa-comment" aria-hidden="true"></i>',
        'm_name' => 'READ & NEXT',
        'm_desc' => 'User will complete by reading intent messages only. No inputs required.',
        'm_parents' => array(7582,7756,7585,4559,6192),
    ),
    6683 => array(
        'm_icon' => '<i class="far fa-keyboard "></i>',
        'm_name' => 'REPLY & NEXT',
        'm_desc' => 'User will complete by sending a text message',
        'm_parents' => array(7582,7585,6144,6192),
    ),
    7637 => array(
        'm_icon' => '<i class="far fa-paperclip"></i>',
        'm_name' => 'ATTACH & NEXT',
        'm_desc' => 'User completes by uploading a video, audio or image file',
        'm_parents' => array(7582,7751,7585,6144,6192),
    ),
    6684 => array(
        'm_icon' => '<i class="fas fa-check-circle" aria-hidden="true"></i>',
        'm_name' => 'SELECT ONE',
        'm_desc' => 'User will complete by choosing a child intent as their answer',
        'm_parents' => array(7712,7588,7585,6157,6193),
    ),
    7231 => array(
        'm_icon' => '<i class="fas fa-check-square" aria-hidden="true"></i>',
        'm_name' => 'SELECT SOME',
        'm_desc' => 'User will complete by choosing one or more child intents as their answer',
        'm_parents' => array(7712,7489,7588,7585,6193),
    ),
    6907 => array(
        'm_icon' => '<i class="fas fa-cube "></i>',
        'm_name' => 'MEET ONE REQUIREMENT',
        'm_desc' => 'User will complete by (a) choosing intent as their answer or by (b) completing any child intent',
        'm_parents' => array(10984,7756,7585,7486,7485,7309,6997,6193),
    ),
    6914 => array(
        'm_icon' => '<i class="fas fa-cubes "></i>',
        'm_name' => 'MEET ALL REQUIREMENTS',
        'm_desc' => 'User will complete by (a) choosing intent as their answer or by (b) completing all child intents',
        'm_parents' => array(7582,10984,6192,7756,7585,7486,7485,7309,6997),
    ),
);

//READ LOGIN REQUIRED:
$config['en_ids_7582'] = array(7637,6914,6677,6683);
$config['en_all_7582'] = array(
    7637 => array(
        'm_icon' => '<i class="far fa-paperclip"></i>',
        'm_name' => 'ATTACH & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7751,7585,6144,6192),
    ),
    6914 => array(
        'm_icon' => '<i class="fas fa-cubes "></i>',
        'm_name' => 'MEET ALL REQUIREMENTS',
        'm_desc' => '',
        'm_parents' => array(7582,10984,6192,7756,7585,7486,7485,7309,6997),
    ),
    6677 => array(
        'm_icon' => '<i class="far fa-comment" aria-hidden="true"></i>',
        'm_name' => 'READ & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7756,7585,4559,6192),
    ),
    6683 => array(
        'm_icon' => '<i class="far fa-keyboard "></i>',
        'm_name' => 'REPLY & NEXT',
        'm_desc' => '',
        'm_parents' => array(7582,7585,6144,6192),
    ),
);

//READER READ CC Email:
$config['en_ids_5967'] = array(4235,6415,4246,7504);
$config['en_all_5967'] = array(
    4235 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ BOOKMARKS',
        'm_desc' => '&var_en_subscriber_ids=1',
        'm_parents' => array(10539,7347,10589,5967,4755,4593),
    ),
    6415 => array(
        'm_icon' => '<i class="far fa-function"></i>',
        'm_name' => 'READER Cleared Action Plan',
        'm_desc' => '&var_en_subscriber_ids=1',
        'm_parents' => array(10596,10589,5967,4755,6418,4593,6414),
    ),
    4246 => array(
        'm_icon' => '<i class="far fa-bug"></i>',
        'm_name' => 'Trainer Bug Reports',
        'm_desc' => '&var_en_subscriber_ids=1',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
    7504 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'Trainer Review Trigger',
        'm_desc' => '&var_en_subscriber_ids=1',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
);

//MENCH CHANNELS:
$config['en_ids_7555'] = array(3288,6196);
$config['en_all_7555'] = array(
    3288 => array(
        'm_icon' => '<i class="fas fa-envelope-open isblue" aria-hidden="true"></i>',
        'm_name' => 'EMAIL',
        'm_desc' => 'Connect with Mench on a web browser like Chrome or Safari and receive notifications via Email.',
        'm_parents' => array(6225,7555,4426,4755),
    ),
    6196 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger isblue"></i>',
        'm_name' => 'MESSENGER',
        'm_desc' => 'Establish a consistent connection with Mench on Messenger and get everything done in one place. (RECOMMENDED)',
        'm_parents' => array(4426,7555,3320),
    ),
);

//Thing Reference Required:
$config['en_ids_7551'] = array(4983,10573,7545);
$config['en_all_7551'] = array(
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'AUTHORS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    10573 => array(
        'm_icon' => '<i class="fas fa-bookmark yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10984,11033,10990,10594,10589,4593,7703,7551,4485),
    ),
    7545 => array(
        'm_icon' => '<i class="fas fa-user-tag blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER TAGS',
        'm_desc' => '',
        'm_parents' => array(10983,11033,10990,10594,10589,7703,7551,4593,4485),
    ),
);

//Reader Steps Unlock:
$config['en_ids_7494'] = array(7485,7486,6997);
$config['en_all_7494'] = array(
    7485 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Answer Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4593,4755,6146,6255),
    ),
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Children Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Score Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
);

//Blog Type Requirement:
$config['en_ids_7309'] = array(6914,6907);
$config['en_all_7309'] = array(
    6914 => array(
        'm_icon' => '<i class="fas fa-cubes "></i>',
        'm_name' => 'ALL REQUIREMENTS',
        'm_desc' => '',
        'm_parents' => array(7582,10984,6192,7756,7585,7486,7485,7309,6997),
    ),
    6907 => array(
        'm_icon' => '<i class="fas fa-cube "></i>',
        'm_name' => 'ONE REQUIREMENT',
        'm_desc' => '',
        'm_parents' => array(10984,7756,7585,7486,7485,7309,6997,6193),
    ),
);

//PRO BLOGGING:
$config['en_ids_6287'] = array(7257,7258,7274);
$config['en_all_6287'] = array(
    7257 => array(
        'm_icon' => '<i class="fab fa-app-store-ios"></i>',
        'm_name' => 'Mench Moderation Apps',
        'm_desc' => '',
        'm_parents' => array(6287),
    ),
    7258 => array(
        'm_icon' => '<i class="far fa-bookmark"></i>',
        'm_name' => 'Mench Platform Bookmarks',
        'm_desc' => '',
        'm_parents' => array(6287),
    ),
    7274 => array(
        'm_icon' => '<i class="far fa-magic"></i>',
        'm_name' => 'Platform Cron Jobs',
        'm_desc' => '',
        'm_parents' => array(6403,6287),
    ),
);

//Interaction Statuses Incomplete:
$config['en_ids_7364'] = array(6175);
$config['en_all_7364'] = array(
    6175 => array(
        'm_icon' => '<i class="far fa-spinner fa-spin"></i>',
        'm_name' => 'READ DRAFT',
        'm_desc' => '',
        'm_parents' => array(7364,7360,6186),
    ),
);

//Interaction Statuses Active:
$config['en_ids_7360'] = array(6175,6176);
$config['en_all_7360'] = array(
    6175 => array(
        'm_icon' => '<i class="far fa-spinner fa-spin"></i>',
        'm_name' => 'DRAFT',
        'm_desc' => '',
        'm_parents' => array(7364,7360,6186),
    ),
    6176 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'PUBLISH',
        'm_desc' => '',
        'm_parents' => array(7360,7359,6186),
    ),
);

//Interaction Statuses Public:
$config['en_ids_7359'] = array(6176);
$config['en_all_7359'] = array(
    6176 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'READ PUBLISH',
        'm_desc' => '',
        'm_parents' => array(7360,7359,6186),
    ),
);

//Thing Statuses Active:
$config['en_ids_7358'] = array(6180,6181);
$config['en_all_7358'] = array(
    6180 => array(
        'm_icon' => '<i class="far fa-spinner fa-spin"></i>',
        'm_name' => 'DRAFT',
        'm_desc' => '',
        'm_parents' => array(7358,6177),
    ),
    6181 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'PUBLISH',
        'm_desc' => '',
        'm_parents' => array(7358,7357,6177),
    ),
);

//PUBLIC PLAYER STATUSES:
$config['en_ids_7357'] = array(6181);
$config['en_all_7357'] = array(
    6181 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'PLAYER PUBLISH',
        'm_desc' => '',
        'm_parents' => array(7358,7357,6177),
    ),
);

//Blog Statuses Active:
$config['en_ids_7356'] = array(6183,6184);
$config['en_all_7356'] = array(
    6183 => array(
        'm_icon' => '<i class="far fa-spinner fa-spin "></i>',
        'm_name' => 'DRAFT',
        'm_desc' => '',
        'm_parents' => array(7356,4737),
    ),
    6184 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'PUBLISH',
        'm_desc' => '',
        'm_parents' => array(7355,7356,4737),
    ),
);

//Blog Statuses Public:
$config['en_ids_7355'] = array(6184);
$config['en_all_7355'] = array(
    6184 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'BLOG PUBLISH',
        'm_desc' => '',
        'm_parents' => array(7355,7356,4737),
    ),
);

//BLOG STATS:
$config['en_ids_7302'] = array(10602,7596,4737);
$config['en_all_7302'] = array(
    10602 => array(
        'm_icon' => '<i class="far fa-puzzle-piece" aria-hidden="true"></i>',
        'm_name' => 'FLOW TYPES',
        'm_desc' => '',
        'm_parents' => array(10893,6204,7302,4527),
    ),
    7596 => array(
        'm_icon' => '<i class="fas fa-triangle yellow"></i>',
        'm_name' => 'Scope',
        'm_desc' => 'Defines who and how can access intent. Note that all intents are accessible to all users, it\'s just the level of visibility/engagement that is different.',
        'm_parents' => array(10888,6204,7302,6160,6201,6194,6232,4527),
    ),
    4737 => array(
        'm_icon' => '<i class="fas fa-sliders-h yellow"></i>',
        'm_name' => 'STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,6204,10648,6226,6160,6232,7302,6194,6201,4527),
    ),
);

//PLAY STATS:
$config['en_ids_7303'] = array(6827,6177,3000);
$config['en_all_7303'] = array(
    6827 => array(
        'm_icon' => '<i class="far fa-users-crown"></i>',
        'm_name' => 'PLAYER GROUPS',
        'm_desc' => '',
        'm_parents' => array(3303,3314,7303,4527),
    ),
    6177 => array(
        'm_icon' => '<i class="fas fa-sliders-h isblue"></i>',
        'm_name' => 'PLAYER STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,7303,6204,5003,10654,6160,6232,6194,6206,4527),
    ),
    3000 => array(
        'm_icon' => '<i class="far fa-thumbs-up"></i>',
        'm_name' => 'PLAY SOURCES',
        'm_desc' => '',
        'm_parents' => array(7303,10571,4506,4527,4463),
    ),
);

//READ STATS:
$config['en_ids_7304'] = array(10591,6186);
$config['en_all_7304'] = array(
    10591 => array(
        'm_icon' => '<i class="fas fa-exchange rotate90 ispink"></i>',
        'm_name' => 'PLAY DIRECTIONS',
        'm_desc' => '',
        'm_parents' => array(6204,7304,6771,4527,10588),
    ),
    6186 => array(
        'm_icon' => '<i class="far fa-sliders-h ispink"></i>',
        'm_name' => 'STATUS',
        'm_desc' => '',
        'm_parents' => array(11054,10677,10661,10656,6204,5865,6160,6232,7304,4527,6194,4341),
    ),
);

//READ STATUS:
$config['en_ids_6186'] = array(6176,6175,6173);
$config['en_all_6186'] = array(
    6176 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'PUBLISH',
        'm_desc' => 'live and ready to be shared with users',
        'm_parents' => array(7360,7359,6186),
    ),
    6175 => array(
        'm_icon' => '<i class="far fa-spinner fa-spin"></i>',
        'm_name' => 'DRAFT',
        'm_desc' => 'being mined, to be published soon',
        'm_parents' => array(7364,7360,6186),
    ),
    6173 => array(
        'm_icon' => '<i class="far fa-trash-alt" aria-hidden="true"></i>',
        'm_name' => 'ARCHIVE',
        'm_desc' => 'archived',
        'm_parents' => array(10686,10678,10673,6186),
    ),
);

//PLAY CONNECTIONS:
$config['en_ids_6194'] = array(7585,7596,4737,6177,4364,6186,4593);
$config['en_all_6194'] = array(
    7585 => array(
        'm_icon' => '<i class="fas fa-random yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG FLOW',
        'm_desc' => 'SELECT count(in_id) as totals FROM table_intents WHERE in_status_entity_id IN (6183,6184) AND in_completion_method_entity_id=',
        'm_parents' => array(6204,10651,6160,6194,6232,4527,6201),
    ),
    7596 => array(
        'm_icon' => '<i class="fas fa-triangle yellow"></i>',
        'm_name' => 'BLOG Scope',
        'm_desc' => 'SELECT count(in_id) as totals FROM table_intents WHERE in_status_entity_id IN (6183,6184) AND in_level_entity_id=',
        'm_parents' => array(10888,6204,7302,6160,6201,6194,6232,4527),
    ),
    4737 => array(
        'm_icon' => '<i class="fas fa-sliders-h yellow"></i>',
        'm_name' => 'BLOG STATUS',
        'm_desc' => 'SELECT count(in_id) as totals FROM table_intents WHERE in_status_entity_id=',
        'm_parents' => array(11054,6204,10648,6226,6160,6232,7302,6194,6201,4527),
    ),
    6177 => array(
        'm_icon' => '<i class="fas fa-sliders-h isblue"></i>',
        'm_name' => 'PLAYER STATUS',
        'm_desc' => 'SELECT count(en_id) as totals FROM table_entities WHERE en_status_entity_id=',
        'm_parents' => array(11054,7303,6204,5003,10654,6160,6232,6194,6206,4527),
    ),
    4364 => array(
        'm_icon' => '<i class="far fa-user-edit ispink"></i>',
        'm_name' => 'READ PLAYER',
        'm_desc' => 'SELECT count(ln_id) as totals FROM table_links WHERE ln_status_entity_id IN (6175,6176) AND ln_creator_entity_id=',
        'm_parents' => array(11081,6160,6232,6194,4341),
    ),
    6186 => array(
        'm_icon' => '<i class="far fa-sliders-h ispink"></i>',
        'm_name' => 'READ STATUS',
        'm_desc' => 'SELECT count(ln_id) as totals FROM table_links WHERE ln_status_entity_id=',
        'm_parents' => array(11054,10677,10661,10656,6204,5865,6160,6232,7304,4527,6194,4341),
    ),
    4593 => array(
        'm_icon' => '<i class="fas fa-plug ispink"></i>',
        'm_name' => 'READ TYPE',
        'm_desc' => 'SELECT count(ln_id) as totals FROM table_links WHERE ln_status_entity_id IN (6175,6176) AND ln_type_entity_id=',
        'm_parents' => array(11081,10659,6160,6232,6194,4527,4341),
    ),
);

//PLAYER GROUPS:
$config['en_ids_6827'] = array(3084,4430);
$config['en_all_6827'] = array(
    3084 => array(
        'm_icon' => '<i class="fas fa-user-astronaut"></i>',
        'm_name' => 'EXPERTS',
        'm_desc' => 'Experienced in their respective industry with a track record of advancing their field of knowldge',
        'm_parents' => array(10571,4983,6827,4463),
    ),
    4430 => array(
        'm_icon' => '<i class="far fa-user"></i>',
        'm_name' => 'PLAYERS',
        'm_desc' => 'Users who are pursuing their intentions using Mench, mainly to get hired at their dream job',
        'm_parents' => array(10573,4983,6827,4426,4463),
    ),
);

//Thing Interaction Content Requires Text:
$config['en_ids_6805'] = array(3005,3147,4763,2999,4883,3192);
$config['en_all_6805'] = array(
    3005 => array(
        'm_icon' => '<i class="far fa-book" aria-hidden="true"></i>',
        'm_name' => 'Books',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3147 => array(
        'm_icon' => '<i class="far fa-presentation" aria-hidden="true"></i>',
        'm_name' => 'Courses',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    4763 => array(
        'm_icon' => '<i class="far fa-megaphone" aria-hidden="true"></i>',
        'm_name' => 'Marketing Channels',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    2999 => array(
        'm_icon' => '<i class="far fa-microphone" aria-hidden="true"></i>',
        'm_name' => 'Podcasts',
        'm_desc' => '',
        'm_parents' => array(10809,10571,4983,7614,6805,3000),
    ),
    4883 => array(
        'm_icon' => '<i class="far fa-concierge-bell" aria-hidden="true"></i>',
        'm_name' => 'Services',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3192 => array(
        'm_icon' => '<i class="far fa-compact-disc" aria-hidden="true"></i>',
        'm_name' => 'Software',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
);

//Readable by Readers:
$config['en_ids_6345'] = array(4231);
$config['en_all_6345'] = array(
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'BLOG MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
);

//Reader Steps Skippable:
$config['en_ids_6274'] = array(4559);
$config['en_all_6274'] = array(
    4559 => array(
        'm_icon' => '<i class="fas fa-comments"></i>',
        'm_name' => 'READER Step Messages Only',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,6274,6255,4755,6146,4593),
    ),
);

//READER READ SUCCESS:
$config['en_ids_6255'] = array(7485,7486,4559,7489,7492,6997,6157,7487,6144);
$config['en_all_6255'] = array(
    7485 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Step Answer Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4593,4755,6146,6255),
    ),
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Step Children Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    4559 => array(
        'm_icon' => '<i class="fas fa-comments"></i>',
        'm_name' => 'Step Messages Only',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,6274,6255,4755,6146,4593),
    ),
    7489 => array(
        'm_icon' => '<i class="fas fa-check-double"></i>',
        'm_name' => 'Step Multi-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,4755,6255,4593,6146),
    ),
    7492 => array(
        'm_icon' => '<i class="fas fa-times-square"></i>',
        'm_name' => 'Step Path Not Found',
        'm_desc' => '',
        'm_parents' => array(10596,10589,6255,4755,4593,6146),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Step Score Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'Step Single-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'Step Single-Answered Timely',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'Submission Required',
        'm_desc' => '',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
);

//Reader Steps Double:
$config['en_ids_6244'] = array(7486,6157,7487,6144);
$config['en_all_6244'] = array(
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Step Children Unlock',
        'm_desc' => 'Logged initially when the user arrives at a locked intent that has no immediate OR parents to mark it as complete and has children, which means the only way through is to complete all its children. Marks as complete when ANY/ALL children are complete dependant on if its a AND/OR locked intent.',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'Step Single-Answered',
        'm_desc' => 'Logged initially when the user arrives at a regular OR intent, and completed when they submit their answer.',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'Step Single-Answered Timely',
        'm_desc' => 'Logged initially when the user starts to answer a timed OR intent, and will be published if they are successful at answering it on time. If not, will update link type to User Step Answer Timeout.',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'Submission Required',
        'm_desc' => 'Logged initially when the user starts an intent that has a requirement submission (Text, URL, Video, Image, etc...) and is completed when they submit the requirement.',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
);

//BOOKMARK REMOVED:
$config['en_ids_6150'] = array(7757,6155);
$config['en_all_6150'] = array(
    7757 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'MENCH REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,4593,6150),
    ),
    6155 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'READER REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10888,10539,10639,10589,10570,7703,4506,6150,4593,4755),
    ),
);

//Thing Reference Allowed:
$config['en_ids_4986'] = array(4231,4601);
$config['en_all_4986'] = array(
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'TAGS',
        'm_desc' => 'In case it happens it should be referencing verbs',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
);

//MY ACCOUNT:
$config['en_ids_6225'] = array(6197,3288,3286,11007,6123,4454);
$config['en_all_6225'] = array(
    6197 => array(
        'm_icon' => '<i class="fas fa-fingerprint isblue" aria-hidden="true"></i>',
        'm_name' => 'FULL NAME',
        'm_desc' => '',
        'm_parents' => array(6225,11072,10646,5000,4998,4999,6232,6206),
    ),
    3288 => array(
        'm_icon' => '<i class="fas fa-envelope-open isblue" aria-hidden="true"></i>',
        'm_name' => 'EMAIL',
        'm_desc' => '',
        'm_parents' => array(6225,7555,4426,4755),
    ),
    3286 => array(
        'm_icon' => '<i class="fas fa-key isblue" aria-hidden="true"></i>',
        'm_name' => 'PASSWORD',
        'm_desc' => '',
        'm_parents' => array(4426,7578,6225,4755),
    ),
    11007 => array(
        'm_icon' => '<i class="fas fa-usd-circle isblue" aria-hidden="true"></i>',
        'm_name' => 'SUBSCRIPTION',
        'm_desc' => '',
        'm_parents' => array(4527,6204,6225),
    ),
    6123 => array(
        'm_icon' => '<i class="fab fa-twitter-square blue" aria-hidden="true"></i>',
        'm_name' => 'SOCIAL PROFILES',
        'm_desc' => '',
        'm_parents' => array(6225,4527),
    ),
    4454 => array(
        'm_icon' => '<i class="fas fa-volume blue" aria-hidden="true"></i>',
        'm_name' => 'NOTIFICATION LEVEL',
        'm_desc' => '',
        'm_parents' => array(7552,6225,6204,4527),
    ),
);

//BLOG STATUS:
$config['en_ids_4737'] = array(6184,6183,6182);
$config['en_all_4737'] = array(
    6184 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'PUBLISH',
        'm_desc' => 'newly added by miner but not yet checked by moderator',
        'm_parents' => array(7355,7356,4737),
    ),
    6183 => array(
        'm_icon' => '<i class="far fa-spinner fa-spin "></i>',
        'm_name' => 'DRAFT',
        'm_desc' => 'newly added, pending review',
        'm_parents' => array(7356,4737),
    ),
    6182 => array(
        'm_icon' => '<i class="far fa-trash-alt "></i>',
        'm_name' => 'ARCHIVE',
        'm_desc' => 'archived',
        'm_parents' => array(10671,4737),
    ),
);

//PLAYER STATUS:
$config['en_ids_6177'] = array(6181,6180,6178);
$config['en_all_6177'] = array(
    6181 => array(
        'm_icon' => '<i class="fas fa-globe" aria-hidden="true"></i>',
        'm_name' => 'PUBLISH',
        'm_desc' => 'live and ready to be shared with users',
        'm_parents' => array(7358,7357,6177),
    ),
    6180 => array(
        'm_icon' => '<i class="far fa-spinner fa-spin"></i>',
        'm_name' => 'DRAFT',
        'm_desc' => 'being mined, to be published soon',
        'm_parents' => array(7358,6177),
    ),
    6178 => array(
        'm_icon' => '<i class="far fa-trash-alt" aria-hidden="true"></i>',
        'm_name' => 'ARCHIVE',
        'm_desc' => 'archived',
        'm_parents' => array(10672,6177),
    ),
);

//BLOG READ HISTORY:
$config['en_ids_6146'] = array(7488,7485,7741,7486,4559,7489,7492,6997,6157,7487,6143,6144);
$config['en_all_6146'] = array(
    7488 => array(
        'm_icon' => '<i class="fas fa-calendar-times"></i>',
        'm_name' => 'Step Answer Timeout',
        'm_desc' => 'User failed to answer the question within the allocated time',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7485 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Step Answer Unlock',
        'm_desc' => 'When users unlock locked AND or OR intents by simply answering an open OR question',
        'm_parents' => array(10596,10589,7703,7494,4593,4755,6146,6255),
    ),
    7741 => array(
        'm_icon' => '<i class="fas fa-times-circle"></i>',
        'm_name' => 'Step BLOGion Terminated',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Step Children Unlock',
        'm_desc' => 'When users unlock locked AND or OR intents by completing ALL or ANY of their children',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    4559 => array(
        'm_icon' => '<i class="fas fa-comments"></i>',
        'm_name' => 'Step Messages Only',
        'm_desc' => 'Completed when students complete a basic AND intent without any submission requirements',
        'm_parents' => array(10596,10589,7703,6274,6255,4755,6146,4593),
    ),
    7489 => array(
        'm_icon' => '<i class="fas fa-check-double"></i>',
        'm_name' => 'Step Multi-Answered',
        'm_desc' => 'User made a selection as part of a multiple-choice answer question',
        'm_parents' => array(10596,10589,7704,7703,4755,6255,4593,6146),
    ),
    7492 => array(
        'm_icon' => '<i class="fas fa-times-square"></i>',
        'm_name' => 'Step Path Not Found',
        'm_desc' => 'Logged when users arrive at a locked intent that has no public OR parents or no children, which means there is no way to unlock it.',
        'm_parents' => array(10596,10589,6255,4755,4593,6146),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'Step Score Unlock',
        'm_desc' => 'When users unlock locked AND or OR intents by scoring within the range of a conditional intent link',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'Step Single-Answered',
        'm_desc' => 'Completed after the student answers the question to the OR intent.',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'Step Single-Answered Timely',
        'm_desc' => 'When the user answers a question within the defined timeframe',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
    6143 => array(
        'm_icon' => '<i class="fas fa-fast-forward"></i>',
        'm_name' => 'Step Skipped',
        'm_desc' => 'Completed when students skip an intention and all its child intentions from their Action Plan',
        'm_parents' => array(10596,10589,6146,4755,4593),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'Submission Required',
        'm_desc' => 'Completed when students submit the intent completion requirements (text, URL, video, etc...) set by miners',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
);

//PLAYER SOCIAL PROFILES:
$config['en_ids_6123'] = array(2793,3303,3302,3311,3300);
$config['en_all_6123'] = array(
    2793 => array(
        'm_icon' => '<i class="fab fa-facebook" aria-hidden="true"></i>',
        'm_name' => 'Facebook',
        'm_desc' => '',
        'm_parents' => array(6123,1326,1326,2750),
    ),
    3303 => array(
        'm_icon' => '<i class="fab fa-github"></i>',
        'm_name' => 'Github',
        'm_desc' => '',
        'm_parents' => array(6123,4763,1326,2750),
    ),
    3302 => array(
        'm_icon' => '<i class="fab fa-linkedin"></i>',
        'm_name' => 'LinkedIn',
        'm_desc' => '',
        'm_parents' => array(6123,1326,4763,2750),
    ),
    3311 => array(
        'm_icon' => '<i class="fab fa-medium" aria-hidden="true"></i>',
        'm_name' => 'Medium URL',
        'm_desc' => '',
        'm_parents' => array(6123,11157,1326),
    ),
    3300 => array(
        'm_icon' => '<i class="fab fa-twitter"></i>',
        'm_name' => 'Twitter',
        'm_desc' => '',
        'm_parents' => array(6123,2750,1326,3304),
    ),
);

//Reader Sent Messages with Messenger:
$config['en_ids_4277'] = array(7654,6554,7653);
$config['en_all_4277'] = array(
    7654 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'Automated Messages',
        'm_desc' => '',
        'm_parents' => array(4277),
    ),
    6554 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'Command Messages',
        'm_desc' => '',
        'm_parents' => array(4277),
    ),
    7653 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'Manual Messages',
        'm_desc' => '',
        'm_parents' => array(4277),
    ),
);

//Reader Sent/Received Attachment:
$config['en_ids_6102'] = array(4549,4551,4550,4548,4554,4556,4555,4553);
$config['en_all_6102'] = array(
    4549 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'READER Sent Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4551 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'READER Sent File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4550 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'READER Sent Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4548 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'READER Sent Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4554 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'Received Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4556 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'Received File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4555 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'Received Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4553 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'Received Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
);

//Reader Received Messages with Messenger:
$config['en_ids_4280'] = array(4554,4556,4555,6563,4552,4553);
$config['en_all_4280'] = array(
    4554 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4556 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4555 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    6563 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4593,4755,4280),
    ),
    4552 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'Text',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4755,4593,4280),
    ),
    4553 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
);

//PLAYER MASS UPDATE:
$config['en_ids_4997'] = array(5001,10625,5943,4999,4998,5000,5981,11956,5982,5865,5003);
$config['en_all_4997'] = array(
    5001 => array(
        'm_icon' => '<i class="fas fa-sticky-note"></i>',
        'm_name' => 'CONTENT REPLACE',
        'm_desc' => 'Search for occurance of string in child entity link contents and if found, updates it with a replacement string',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    10625 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'ICON REPLACE',
        'm_desc' => 'Search for occurrence of string in child entity icons and if found, updates it with a replacement string',
        'm_parents' => array(10589,10596,4593,4997),
    ),
    5943 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'ICON UPDATE',
        'm_desc' => 'Updates all child entity icons with string which needs to be a valid icon',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    4999 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'NAME POSTFIX',
        'm_desc' => 'Adds string to the end of all child entities',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    4998 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'NAME PREFIX',
        'm_desc' => 'Adds string to the beginning of all child entities. Make sure to include a space for it to look good',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5000 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'NAME REPLACE',
        'm_desc' => 'Search for occurrence of string in child entity names and if found, updates it with a replacement string',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5981 => array(
        'm_icon' => '<i class="fas fa-layer-plus"></i>',
        'm_name' => 'PROFILE ADD',
        'm_desc' => 'If not already done so, will add searched entity as the parent of all child entities',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    11956 => array(
        'm_icon' => '<i class="far fa-layer-plus" aria-hidden="true"></i>',
        'm_name' => 'PROFILE IF ADD',
        'm_desc' => 'Adds a parent entity only IF the entity has another parent entity.',
        'm_parents' => array(10589,10596,4593,4997),
    ),
    5982 => array(
        'm_icon' => '<i class="fas fa-layer-minus"></i>',
        'm_name' => 'PROFILE REMOVE',
        'm_desc' => 'If already added as the parent, this will remove searched entity as the parent of all child entities',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5865 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'READ STATUS REPLACE',
        'm_desc' => 'Updates all child entity link statuses that match the initial link status condition',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5003 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'STATUS REPLACE',
        'm_desc' => 'Updates all child entity statuses that match the initial entity status condition',
        'm_parents' => array(10596,10589,4593,4997),
    ),
);

//PLAYER LOCK:
$config['en_ids_4426'] = array(3288,4426,4997,6196,3286,4430,4755);
$config['en_all_4426'] = array(
    3288 => array(
        'm_icon' => '<i class="fas fa-envelope-open isblue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER EMAIL',
        'm_desc' => '',
        'm_parents' => array(6225,7555,4426,4755),
    ),
    4426 => array(
        'm_icon' => '<i class="fas fa-lock"></i>',
        'm_name' => 'PLAYER LOCK',
        'm_desc' => '',
        'm_parents' => array(4758,3303,4426,4527),
    ),
    4997 => array(
        'm_icon' => '<i class="fas fa-tools blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER MASS UPDATE',
        'm_desc' => '',
        'm_parents' => array(10983,11089,4758,4506,4426,4527),
    ),
    6196 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger isblue"></i>',
        'm_name' => 'PLAYER MESSENGER',
        'm_desc' => '',
        'm_parents' => array(4426,7555,3320),
    ),
    3286 => array(
        'm_icon' => '<i class="fas fa-key isblue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER PASSWORD',
        'm_desc' => '',
        'm_parents' => array(4426,7578,6225,4755),
    ),
    4430 => array(
        'm_icon' => '<i class="far fa-user"></i>',
        'm_name' => 'PLAYERS',
        'm_desc' => '',
        'm_parents' => array(10573,4983,6827,4426,4463),
    ),
    4755 => array(
        'm_icon' => '<i class="fal fa-eye-slash"></i>',
        'm_name' => 'PRIVATE READ',
        'm_desc' => '',
        'm_parents' => array(6771,4463,4426,4527),
    ),
);

//PRIVATE READ:
$config['en_ids_4755'] = array(7610,10681,10685,7757,4783,3288,3286,4235,6149,6969,4275,4283,6132,6415,6559,6560,6556,6578,7611,7563,4266,4267,4282,5967,7702,4570,6155,4577,4549,4551,4550,4557,4278,4279,4268,4460,4547,4287,4548,7561,7564,7560,7559,7558,7488,7485,7741,7486,4559,7489,7492,6140,6997,6157,7487,6143,6144,7578,6224,7562,7495,4554,4556,4555,6563,4552,4553,4246,7504);
$config['en_all_4755'] = array(
    7610 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'BLOG READ',
        'm_desc' => '',
        'm_parents' => array(10638,10596,10590,4755,4593),
    ),
    10681 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOGS SORTED',
        'm_desc' => '',
        'm_parents' => array(10638,10589,10596,4755,4593,10658),
    ),
    10685 => array(
        'm_icon' => '<i class="fas fa-sync"></i>',
        'm_name' => 'BLOG Submission Update by READER',
        'm_desc' => '',
        'm_parents' => array(4755,10596,10589,4593,10638,10658),
    ),
    7757 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'MENCH REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,4593,6150),
    ),
    4783 => array(
        'm_icon' => '<i class="far fa-phone blue"></i>',
        'm_name' => 'PHONE',
        'm_desc' => '',
        'm_parents' => array(4755,4319),
    ),
    3288 => array(
        'm_icon' => '<i class="fas fa-envelope-open isblue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER EMAIL',
        'm_desc' => '',
        'm_parents' => array(6225,7555,4426,4755),
    ),
    3286 => array(
        'm_icon' => '<i class="fas fa-key isblue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER PASSWORD',
        'm_desc' => '',
        'm_parents' => array(4426,7578,6225,4755),
    ),
    4235 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10539,7347,10589,5967,4755,4593),
    ),
    6149 => array(
        'm_icon' => '<i class="fas fa-search-plus"></i>',
        'm_name' => 'READER BLOG Considered',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,6153,4755,4593),
    ),
    6969 => array(
        'm_icon' => '<i class="fas fa-megaphone"></i>',
        'm_name' => 'READER BLOG Recommended',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,4593,4755,6153),
    ),
    4275 => array(
        'm_icon' => '<i class="fas fa-search"></i>',
        'm_name' => 'READER BLOG Search',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10589,6554,4755,4593),
    ),
    4283 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER BLOGs Listed',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,6153,4755,4593),
    ),
    6132 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'READER BLOGs Sorted',
        'm_desc' => '',
        'm_parents' => array(10539,10639,10589,6153,4506,4755,4593),
    ),
    6415 => array(
        'm_icon' => '<i class="far fa-function"></i>',
        'm_name' => 'READER Cleared Action Plan',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,6418,4593,6414),
    ),
    6559 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Next',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6560 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Skip',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6556 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Stats',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6578 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Stop',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    7611 => array(
        'm_icon' => '<i class="fas fa-hand-pointer"></i>',
        'm_name' => 'READER Engaged BLOG Post',
        'm_desc' => '',
        'm_parents' => array(10639,10596,10590,7610,4755,4593),
    ),
    7563 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Magic-READ Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,7569,4593),
    ),
    4266 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Messenger Opt-in',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    4267 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Messenger Referral',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    4282 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER Opened Profile',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,6222,4593),
    ),
    5967 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER READ CC Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4506,4527,7569,4755,4593),
    ),
    7702 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Received BLOG Email',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4593,4755,7569),
    ),
    4570 => array(
        'm_icon' => '<i class="far fa-envelope"></i>',
        'm_name' => 'READER Received Email',
        'm_desc' => '',
        'm_parents' => array(10683,10593,10590,7569,4755,4593),
    ),
    6155 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'READER REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10888,10539,10639,10589,10570,7703,4506,6150,4593,4755),
    ),
    4577 => array(
        'm_icon' => '<i class="far fa-user-plus"></i>',
        'm_name' => 'READER Sent Access',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4549 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'READER Sent Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4551 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'READER Sent File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4550 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'READER Sent Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4557 => array(
        'm_icon' => '<i class="far fa-location-circle"></i>',
        'm_name' => 'READER Sent Location',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4278 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER Sent Messenger Read',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4279 => array(
        'm_icon' => '<i class="far fa-cloud-download"></i>',
        'm_name' => 'READER Sent Messenger Received',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4268 => array(
        'm_icon' => '<i class="far fa-user-tag"></i>',
        'm_name' => 'READER Sent Postback',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4460 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'READER Sent Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4547 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'READER Sent Text',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4287 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'READER Sent Unknown Message',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4548 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'READER Sent Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    7561 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin Generally',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7564 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin Success',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7560 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin with BLOGion',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7559 => array(
        'm_icon' => '<i class="fas fa-envelope-open"></i>',
        'm_name' => 'READER Signin with Email',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7558 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Signin with Messenger',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7488 => array(
        'm_icon' => '<i class="fas fa-calendar-times"></i>',
        'm_name' => 'READER Step Answer Timeout',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7485 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Answer Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4593,4755,6146,6255),
    ),
    7741 => array(
        'm_icon' => '<i class="fas fa-times-circle"></i>',
        'm_name' => 'READER Step BLOGion Terminated',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Children Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    4559 => array(
        'm_icon' => '<i class="fas fa-comments"></i>',
        'm_name' => 'READER Step Messages Only',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,6274,6255,4755,6146,4593),
    ),
    7489 => array(
        'm_icon' => '<i class="fas fa-check-double"></i>',
        'm_name' => 'READER Step Multi-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,4755,6255,4593,6146),
    ),
    7492 => array(
        'm_icon' => '<i class="fas fa-times-square"></i>',
        'm_name' => 'READER Step Path Not Found',
        'm_desc' => '',
        'm_parents' => array(10596,10589,6255,4755,4593,6146),
    ),
    6140 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step READ Unlock',
        'm_desc' => '',
        'm_parents' => array(10539,10589,6410,4229,4755,4593),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Score Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'READER Step Single-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'READER Step Single-Answered Timely',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
    6143 => array(
        'm_icon' => '<i class="fas fa-fast-forward"></i>',
        'm_name' => 'READER Step Skipped',
        'm_desc' => '',
        'm_parents' => array(10596,10589,6146,4755,4593),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'READER Submission Required',
        'm_desc' => '',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
    7578 => array(
        'm_icon' => '<i class="far fa-key"></i>',
        'm_name' => 'READER Update Password',
        'm_desc' => '',
        'm_parents' => array(6222,10658,6153,10539,10589,4755,4593),
    ),
    6224 => array(
        'm_icon' => '<i class="far fa-sync"></i>',
        'm_name' => 'READER Update Profile',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,6222,4593),
    ),
    7562 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Welcome Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,7569,4593),
    ),
    7495 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ RECOMMENDS',
        'm_desc' => '',
        'm_parents' => array(10596,7347,10590,4755,4593),
    ),
    4554 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'Received Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4556 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'Received File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4555 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'Received Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    6563 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'Received Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4593,4755,4280),
    ),
    4552 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'Received Text',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4755,4593,4280),
    ),
    4553 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'Received Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4246 => array(
        'm_icon' => '<i class="far fa-bug"></i>',
        'm_name' => 'Trainer Bug Reports',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
    7504 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'Trainer Review Trigger',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
);

//Reader Account Types:
$config['en_ids_4600'] = array(2750,1278);
$config['en_all_4600'] = array(
    2750 => array(
        'm_icon' => '<i class="fas fa-users" aria-hidden="true"></i>',
        'm_name' => 'Organizations',
        'm_desc' => '',
        'm_parents' => array(4600),
    ),
    1278 => array(
        'm_icon' => '<i class="far fa-users"></i>',
        'm_name' => 'PEOPLE',
        'm_desc' => '',
        'm_parents' => array(4600),
    ),
);

//READ TYPE:
$config['en_ids_4593'] = array(10671,4983,10573,4250,6226,4231,10660,10676,10678,10679,10677,7545,7610,10686,10663,10664,10661,10675,10681,10685,4601,10662,10650,10648,10644,10651,10647,4993,4228,4229,7757,4259,4261,10669,4260,4319,4230,4255,4318,4256,4258,4257,10672,4251,10653,5001,10625,5943,4999,4998,5000,5981,11956,5982,5865,5003,10689,10646,10654,10657,10673,10656,10659,4235,6149,6969,4275,4283,6132,6415,6559,6560,6556,6578,7611,7563,10690,4266,4267,4282,5967,10683,7702,4570,6155,4577,4549,4551,4550,4557,4278,4279,4268,4460,4547,4287,4548,7561,7564,7560,7559,7558,7488,7485,7741,7486,4559,7489,7492,6140,6997,6157,7487,6143,6144,7578,6224,7562,7495,4554,4556,4555,6563,4552,4553,5007,4246,7504,4994);
$config['en_all_4593'] = array(
    10671 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,7703,10638),
    ),
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'BLOG AUTHORS',
        'm_desc' => 'References track intent correlations referenced within expert sources, and represent a core building block of intelligence. References are among the most precious transaction types because they indicate that IF you do A, you will likely accomplish B. As trainers add more sources from more experts, certain intent correlations will receive more references than others, thus gaining more credibility.',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    10573 => array(
        'm_icon' => '<i class="fas fa-bookmark yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG BLOG BOOKMARKS',
        'm_desc' => 'Keeps track of the users who can manage/edit the intent',
        'm_parents' => array(10984,11033,10990,10594,10589,4593,7703,7551,4485),
    ),
    4250 => array(
        'm_icon' => '<i class="fas fa-hashtag"></i>',
        'm_name' => 'BLOG CREATED',
        'm_desc' => '',
        'm_parents' => array(10638,10593,10589,4593),
    ),
    6226 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Mass Update Statuses',
        'm_desc' => ' When all intents within a recursive tree are updated at once.',
        'm_parents' => array(11161,10596,10589,4593),
    ),
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'BLOG MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    10660 => array(
        'm_icon' => '<i class="fas fa-angle-double-right"></i>',
        'm_name' => 'BLOG Migrate Parent BLOG',
        'm_desc' => '',
        'm_parents' => array(7703,4593,10638,10589,10594,10658),
    ),
    10676 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG Notes Sorted',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10658,10638),
    ),
    10678 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG Notes Unlinked',
        'm_desc' => '',
        'm_parents' => array(10658,10539,10589,4593,10638),
    ),
    10679 => array(
        'm_icon' => '<i class="fas fa-sticky-note"></i>',
        'm_name' => 'BLOG Notes Update Content',
        'm_desc' => '',
        'm_parents' => array(10589,4593,10593,10658,10638),
    ),
    10677 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Notes Update Status',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10658,10638),
    ),
    7545 => array(
        'm_icon' => '<i class="fas fa-user-tag blue" aria-hidden="true"></i>',
        'm_name' => 'BLOG PLAYER TAGS',
        'm_desc' => '',
        'm_parents' => array(10983,11033,10990,10594,10589,7703,7551,4593,4485),
    ),
    7610 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'BLOG READ',
        'm_desc' => 'When a user viewes the public intent landing page.',
        'm_parents' => array(10638,10596,10590,4755,4593),
    ),
    10686 => array(
        'm_icon' => '<i class="far fa-trash-alt"></i>',
        'm_name' => 'BLOG READ ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(7703,10589,10539,4593,10658,10638),
    ),
    10663 => array(
        'm_icon' => '<i class="far fa-coin"></i>',
        'm_name' => 'BLOG READ Update Points',
        'm_desc' => '',
        'm_parents' => array(4228,7703,10539,10589,10638,4593,10658),
    ),
    10664 => array(
        'm_icon' => '<i class="fas fa-bolt"></i>',
        'm_name' => 'BLOG READ Update Score',
        'm_desc' => '',
        'm_parents' => array(7703,10638,10594,10589,4593,4229,10658),
    ),
    10661 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG READ Update Status',
        'm_desc' => '',
        'm_parents' => array(10638,7703,10539,10589,4593,10658),
    ),
    10675 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOG SORTED',
        'm_desc' => '',
        'm_parents' => array(7703,10539,10589,4593,10658,10638),
    ),
    10681 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'BLOGS SORTED',
        'm_desc' => '',
        'm_parents' => array(10638,10589,10596,4755,4593,10658),
    ),
    10685 => array(
        'm_icon' => '<i class="fas fa-sync"></i>',
        'm_name' => 'BLOG Submission Update by READER',
        'm_desc' => 'When users update their a step they made previous progress',
        'm_parents' => array(4755,10596,10589,4593,10638,10658),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG TAGS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
    10662 => array(
        'm_icon' => '<i class="fas fa-hashtag"></i>',
        'm_name' => 'BLOG UPDATE BRANCH',
        'm_desc' => '',
        'm_parents' => array(11027,10638,7703,10539,4593,10658),
    ),
    10650 => array(
        'm_icon' => '<i class="far fa-clock"></i>',
        'm_name' => 'BLOG Update Completion Time',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10648 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'BLOG Update Status',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10644 => array(
        'm_icon' => '<i class="far fa-bullseye-arrow"></i>',
        'm_name' => 'BLOG Update Title',
        'm_desc' => 'Logged when trainers update the intent outcome',
        'm_parents' => array(7703,10589,10593,4593,10638),
    ),
    10651 => array(
        'm_icon' => '<i class="far fa-shapes"></i>',
        'm_name' => 'BLOG Update Type',
        'm_desc' => '',
        'm_parents' => array(7703,10539,4593,10589,10638),
    ),
    10647 => array(
        'm_icon' => '<i class="far fa-tools"></i>',
        'm_name' => 'BLOG Update Verb',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,10638),
    ),
    4993 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'BLOG Viewed by BLOGGER',
        'm_desc' => '',
        'm_parents' => array(10638,10596,10590,4593),
    ),
    4228 => array(
        'm_icon' => '<i class="far fa-play yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW AUTOMATIC',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,6410,4593,4486),
    ),
    4229 => array(
        'm_icon' => '<i class="fas fa-question-circle yellow" aria-hidden="true"></i>',
        'm_name' => 'FLOW CONDITIONAL',
        'm_desc' => '',
        'm_parents' => array(10594,10589,7703,4527,6410,6283,4593,4486),
    ),
    7757 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'MENCH REMOVED BOOKMARK',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,4593,6150),
    ),
    4259 => array(
        'm_icon' => '<i class="far fa-volume-up blue"></i>',
        'm_name' => 'PLAY BRANCH AUDIO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4261 => array(
        'm_icon' => '<i class="far fa-file-pdf blue"></i>',
        'm_name' => 'PLAY BRANCH FILE',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    10669 => array(
        'm_icon' => '<i class="fab fa-font-awesome-alt blue"></i>',
        'm_name' => 'PLAY BRANCH ICON',
        'm_desc' => '',
        'm_parents' => array(10589,10539,4593,6198,4592),
    ),
    4260 => array(
        'm_icon' => '<i class="far fa-image blue"></i>',
        'm_name' => 'PLAY BRANCH IMAGE',
        'm_desc' => '',
        'm_parents' => array(6198,11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4319 => array(
        'm_icon' => '<i class="far fa-sort-numeric-down blue"></i>',
        'm_name' => 'PLAY BRANCH INTEGER',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592),
    ),
    4230 => array(
        'm_icon' => '<i class="far fa-link rotate90 blue"></i>',
        'm_name' => 'PLAY BRANCH RAW',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592),
    ),
    4255 => array(
        'm_icon' => '<i class="far fa-align-left blue"></i>',
        'm_name' => 'PLAY BRANCH TEXT',
        'm_desc' => '',
        'm_parents' => array(10593,10589,4593,4592),
    ),
    4318 => array(
        'm_icon' => '<i class="far fa-clock blue"></i>',
        'm_name' => 'PLAY BRANCH TIME',
        'm_desc' => '',
        'm_parents' => array(10594,10589,4593,4592),
    ),
    4256 => array(
        'm_icon' => '<i class="far fa-browser blue"></i>',
        'm_name' => 'PLAY BRANCH URL',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592,4537),
    ),
    4258 => array(
        'm_icon' => '<i class="far fa-video blue"></i>',
        'm_name' => 'PLAY BRANCH VIDEO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4257 => array(
        'm_icon' => '<i class="far fa-play-circle blue"></i>',
        'm_name' => 'PLAY BRANCH WIDGET',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592,4537,4506),
    ),
    10672 => array(
        'm_icon' => '<i class="far fa-trash-alt blue"></i>',
        'm_name' => 'PLAYER ARCHIVED',
        'm_desc' => '',
        'm_parents' => array(10539,4593,10589,10645),
    ),
    4251 => array(
        'm_icon' => '<i class="fas fa-at blue"></i>',
        'm_name' => 'PLAYER CREATED',
        'm_desc' => 'Logged when a new entity is created.',
        'm_parents' => array(10645,10593,10589,4593),
    ),
    10653 => array(
        'm_icon' => '<i class="far fa-user-circle blue"></i>',
        'm_name' => 'PLAYER ICON UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10645),
    ),
    5001 => array(
        'm_icon' => '<i class="fas fa-sticky-note"></i>',
        'm_name' => 'PLAYER MASS CONTENT REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    10625 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'PLAYER MASS ICON REPLACE',
        'm_desc' => '',
        'm_parents' => array(10589,10596,4593,4997),
    ),
    5943 => array(
        'm_icon' => '<i class="far fa-user-circle"></i>',
        'm_name' => 'PLAYER MASS ICON UPDATE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    4999 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME POSTFIX',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    4998 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME PREFIX',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5000 => array(
        'm_icon' => '<i class="far fa-fingerprint"></i>',
        'm_name' => 'PLAYER MASS NAME REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5981 => array(
        'm_icon' => '<i class="fas fa-layer-plus"></i>',
        'm_name' => 'PLAYER MASS PROFILE ADD',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    11956 => array(
        'm_icon' => '<i class="far fa-layer-plus" aria-hidden="true"></i>',
        'm_name' => 'PLAYER MASS PROFILE IF ADD',
        'm_desc' => '',
        'm_parents' => array(10589,10596,4593,4997),
    ),
    5982 => array(
        'm_icon' => '<i class="fas fa-layer-minus"></i>',
        'm_name' => 'PLAYER MASS PROFILE REMOVE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5865 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'PLAYER MASS READ STATUS REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    5003 => array(
        'm_icon' => '<i class="far fa-sliders-h"></i>',
        'm_name' => 'PLAYER MASS STATUS REPLACE',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593,4997),
    ),
    10689 => array(
        'm_icon' => '<i class="fas fa-share-alt rotate90 blue"></i>',
        'm_name' => 'PLAYER MERGED IN PLAYER',
        'm_desc' => 'When an entity is merged with another entity and the links are carried over',
        'm_parents' => array(10596,10589,4593,10658,10645),
    ),
    10646 => array(
        'm_icon' => '<i class="far fa-fingerprint blue"></i>',
        'm_name' => 'PLAYER NAME UPDATE',
        'm_desc' => '',
        'm_parents' => array(10593,4593,10589,10645),
    ),
    10654 => array(
        'm_icon' => '<i class="far fa-sliders-h blue"></i>',
        'm_name' => 'PLAYER STATUS UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10539,10589,10645),
    ),
    10657 => array(
        'm_icon' => '<i class="fas fa-sticky-note blue"></i>',
        'm_name' => 'PLAYER TREE CONTENT UPDATE',
        'm_desc' => '',
        'm_parents' => array(10593,4593,10589,10658,10645),
    ),
    10673 => array(
        'm_icon' => '<i class="far fa-trash-alt blue"></i>',
        'm_name' => 'PLAYER TREE REMOVED',
        'm_desc' => '',
        'm_parents' => array(10645,4593,10539,10589,10658),
    ),
    10656 => array(
        'm_icon' => '<i class="far fa-sliders-h blue"></i>',
        'm_name' => 'PLAYER TREE STATUS UPDATE',
        'm_desc' => '',
        'm_parents' => array(4593,10589,10539,10658,10645),
    ),
    10659 => array(
        'm_icon' => '<i class="fas fa-plug blue"></i>',
        'm_name' => 'PLAYER TREE TYPE UPDATE',
        'm_desc' => 'Iterations happens automatically based on link content',
        'm_parents' => array(10658,10589,4593,10596,10645),
    ),
    4235 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10539,7347,10589,5967,4755,4593),
    ),
    6149 => array(
        'm_icon' => '<i class="fas fa-search-plus"></i>',
        'm_name' => 'READER BLOG Considered',
        'm_desc' => 'When a student chooses to review a given intention from the intentions they have searched or have been recommended after selecting GET STARTED from a mench.com intent landing page.',
        'm_parents' => array(10639,10596,10590,6153,4755,4593),
    ),
    6969 => array(
        'm_icon' => '<i class="fas fa-megaphone"></i>',
        'm_name' => 'READER BLOG Recommended',
        'm_desc' => 'Logged every time an intention is recommended to a user by Mench',
        'm_parents' => array(10639,10596,10590,4593,4755,6153),
    ),
    4275 => array(
        'm_icon' => '<i class="fas fa-search"></i>',
        'm_name' => 'READER BLOG Search',
        'm_desc' => 'When students invokes the [I want to] command and search for a new intention that they would like to add to their Action Plan.',
        'm_parents' => array(10639,10596,10589,6554,4755,4593),
    ),
    4283 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER BLOGs Listed',
        'm_desc' => 'Once a student has added an Intention to their Action Plan, this link will be logged every time they access that Action Plan and view its intentions.',
        'm_parents' => array(10639,10596,10590,6153,4755,4593),
    ),
    6132 => array(
        'm_icon' => '<i class="fas fa-sort"></i>',
        'm_name' => 'READER BLOGs Sorted',
        'm_desc' => 'Student re-prioritized their top-level intentions to focus on intentions that currently matter the most.',
        'm_parents' => array(10539,10639,10589,6153,4506,4755,4593),
    ),
    6415 => array(
        'm_icon' => '<i class="far fa-function"></i>',
        'm_name' => 'READER Cleared Action Plan',
        'm_desc' => 'Removes certain links types as defined by its children from a Student\'s Action Plan. Currently only available for trainers.',
        'm_parents' => array(10596,10589,5967,4755,6418,4593,6414),
    ),
    6559 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Next',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6560 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Skip',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6556 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Stats',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    6578 => array(
        'm_icon' => '<i class="fas fa-wand-magic"></i>',
        'm_name' => 'READER Commanded Stop',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6554),
    ),
    7611 => array(
        'm_icon' => '<i class="fas fa-hand-pointer"></i>',
        'm_name' => 'READER Engaged BLOG Post',
        'm_desc' => 'Logged when a user expands a section of the intent',
        'm_parents' => array(10639,10596,10590,7610,4755,4593),
    ),
    7563 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Magic-READ Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,7569,4593),
    ),
    10690 => array(
        'm_icon' => '<i class="fas fa-upload"></i>',
        'm_name' => 'READER Media Uploaded',
        'm_desc' => 'When a file added by the user is synced to the CDN',
        'm_parents' => array(6153,10596,10589,4593,10658),
    ),
    4266 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Messenger Opt-in',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    4267 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Messenger Referral',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    4282 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER Opened Profile',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,6222,4593),
    ),
    5967 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER READ CC Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4506,4527,7569,4755,4593),
    ),
    10683 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Read Email',
        'm_desc' => '',
        'm_parents' => array(6153,10658,10596,10589,4593,7654),
    ),
    7702 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Received BLOG Email',
        'm_desc' => 'Emails sent to intent subscribers who are looking for updates on an intent.',
        'm_parents' => array(10593,10590,4593,4755,7569),
    ),
    4570 => array(
        'm_icon' => '<i class="far fa-envelope"></i>',
        'm_name' => 'READER Received Email',
        'm_desc' => '',
        'm_parents' => array(10683,10593,10590,7569,4755,4593),
    ),
    6155 => array(
        'm_icon' => '<i class="far fa-bookmark ispink"></i>',
        'm_name' => 'READER REMOVED BOOKMARK',
        'm_desc' => 'Student prematurely removed an intention from their Action Plan without accomplishing it.',
        'm_parents' => array(10888,10539,10639,10589,10570,7703,4506,6150,4593,4755),
    ),
    4577 => array(
        'm_icon' => '<i class="far fa-user-plus"></i>',
        'm_name' => 'READER Sent Access',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4549 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'READER Sent Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4551 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'READER Sent File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4550 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'READER Sent Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    4557 => array(
        'm_icon' => '<i class="far fa-location-circle"></i>',
        'm_name' => 'READER Sent Location',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4278 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'READER Sent Messenger Read',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4279 => array(
        'm_icon' => '<i class="far fa-cloud-download"></i>',
        'm_name' => 'READER Sent Messenger Received',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4268 => array(
        'm_icon' => '<i class="far fa-user-tag"></i>',
        'm_name' => 'READER Sent Postback',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4460 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'READER Sent Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4547 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'READER Sent Text',
        'm_desc' => '',
        'm_parents' => array(10539,10589,7653,4755,4593),
    ),
    4287 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'READER Sent Unknown Message',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7654,4755,4593),
    ),
    4548 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'READER Sent Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10589,7653,6102,4755,4593),
    ),
    7561 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin Generally',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7564 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin Success',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7560 => array(
        'm_icon' => '<i class="fas fa-sign-in"></i>',
        'm_name' => 'READER Signin with BLOGion',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7559 => array(
        'm_icon' => '<i class="fas fa-envelope-open"></i>',
        'm_name' => 'READER Signin with Email',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7558 => array(
        'm_icon' => '<i class="fab fa-facebook-messenger"></i>',
        'm_name' => 'READER Signin with Messenger',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593),
    ),
    7488 => array(
        'm_icon' => '<i class="fas fa-calendar-times"></i>',
        'm_name' => 'READER Step Answer Timeout',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7485 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Answer Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4593,4755,6146,6255),
    ),
    7741 => array(
        'm_icon' => '<i class="fas fa-times-circle"></i>',
        'm_name' => 'READER Step BLOGion Terminated',
        'm_desc' => 'User ended their Action Plan prematurely',
        'm_parents' => array(10596,10589,4755,4593,6146),
    ),
    7486 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Children Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,6244,6146,4755,4593,6255),
    ),
    4559 => array(
        'm_icon' => '<i class="fas fa-comments"></i>',
        'm_name' => 'READER Step Messages Only',
        'm_desc' => 'Logged when a student receives the messages of an AND intent that does not have any completion requirements.',
        'm_parents' => array(10596,10589,7703,6274,6255,4755,6146,4593),
    ),
    7489 => array(
        'm_icon' => '<i class="fas fa-check-double"></i>',
        'm_name' => 'READER Step Multi-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,4755,6255,4593,6146),
    ),
    7492 => array(
        'm_icon' => '<i class="fas fa-times-square"></i>',
        'm_name' => 'READER Step Path Not Found',
        'm_desc' => '',
        'm_parents' => array(10596,10589,6255,4755,4593,6146),
    ),
    6140 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step READ Unlock',
        'm_desc' => 'Created when the student responses to OR branches meets the right % points to unlock the pathway to a conditional intent link.',
        'm_parents' => array(10539,10589,6410,4229,4755,4593),
    ),
    6997 => array(
        'm_icon' => '<i class="fas fa-lock-open"></i>',
        'm_name' => 'READER Step Score Unlock',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7703,7494,4229,6255,4593,4755,6146),
    ),
    6157 => array(
        'm_icon' => '<i class="fas fa-question"></i>',
        'm_name' => 'READER Step Single-Answered',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6255,6244,6146,4755,4593),
    ),
    7487 => array(
        'm_icon' => '<i class="fas fa-stopwatch"></i>',
        'm_name' => 'READER Step Single-Answered Timely',
        'm_desc' => '',
        'm_parents' => array(10596,10589,7704,7703,6244,4755,6255,4593,6146),
    ),
    6143 => array(
        'm_icon' => '<i class="fas fa-fast-forward"></i>',
        'm_name' => 'READER Step Skipped',
        'm_desc' => 'Logged every time a student consciously skips an intent and it\'s recursive children.',
        'm_parents' => array(10596,10589,6146,4755,4593),
    ),
    6144 => array(
        'm_icon' => '<i class="fas fa-cloud-upload-alt"></i>',
        'm_name' => 'READER Submission Required',
        'm_desc' => 'Logged when a student submits the requirements (text, video, etc...) of an AND intent which could not be completed by simply receiving messages.',
        'm_parents' => array(10893,10596,10589,4527,7703,6255,6244,4755,6146,4593),
    ),
    7578 => array(
        'm_icon' => '<i class="far fa-key"></i>',
        'm_name' => 'READER Update Password',
        'm_desc' => '',
        'm_parents' => array(6222,10658,6153,10539,10589,4755,4593),
    ),
    6224 => array(
        'm_icon' => '<i class="far fa-sync"></i>',
        'm_name' => 'READER Update Profile',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4755,6222,4593),
    ),
    7562 => array(
        'm_icon' => '<i class="far fa-envelope-open"></i>',
        'm_name' => 'READER Welcome Email',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4755,7569,4593),
    ),
    7495 => array(
        'm_icon' => '<i class="fas fa-bookmark ispink"></i>',
        'm_name' => 'READ RECOMMENDS',
        'm_desc' => 'Intention recommended by Mench and added to Action Plan to enable the user to complete their intention',
        'm_parents' => array(10596,7347,10590,4755,4593),
    ),
    4554 => array(
        'm_icon' => '<i class="far fa-volume-up"></i>',
        'm_name' => 'Received Audio',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4556 => array(
        'm_icon' => '<i class="far fa-file-pdf"></i>',
        'm_name' => 'Received File',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    4555 => array(
        'm_icon' => '<i class="far fa-image"></i>',
        'm_name' => 'Received Image',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    6563 => array(
        'm_icon' => '<i class="far fa-check"></i>',
        'm_name' => 'Received Quick Reply',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4593,4755,4280),
    ),
    4552 => array(
        'm_icon' => '<i class="far fa-align-left"></i>',
        'm_name' => 'Received Text',
        'm_desc' => '',
        'm_parents' => array(10593,10590,4755,4593,4280),
    ),
    4553 => array(
        'm_icon' => '<i class="far fa-video"></i>',
        'm_name' => 'Received Video',
        'm_desc' => '',
        'm_parents' => array(10627,10593,10590,6102,4755,4593,4280),
    ),
    5007 => array(
        'm_icon' => '<i class="fas fa-toggle-on blue" aria-hidden="true"></i>',
        'm_name' => 'TOGGLE SUPERPOWER',
        'm_desc' => '',
        'm_parents' => array(10596,10589,4593),
    ),
    4246 => array(
        'm_icon' => '<i class="far fa-bug"></i>',
        'm_name' => 'Trainer Bug Reports',
        'm_desc' => '',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
    7504 => array(
        'm_icon' => '<i class="far fa-comment-exclamation"></i>',
        'm_name' => 'Trainer Review Trigger',
        'm_desc' => 'Certain links that match an unknown behavior would require an admin to review and ensure it\'s all good',
        'm_parents' => array(10596,10589,5967,4755,4593),
    ),
    4994 => array(
        'm_icon' => '<i class="far fa-eye"></i>',
        'm_name' => 'Trainer View Thing',
        'm_desc' => '',
        'm_parents' => array(10596,10590,4593),
    ),
);

//PLAY TREE BRANCHES:
$config['en_ids_4592'] = array(4259,4261,10669,4260,4319,4230,4255,4318,4256,4258,4257);
$config['en_all_4592'] = array(
    4259 => array(
        'm_icon' => '<i class="far fa-volume-up blue"></i>',
        'm_name' => 'AUDIO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4261 => array(
        'm_icon' => '<i class="far fa-file-pdf blue"></i>',
        'm_name' => 'FILE',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    10669 => array(
        'm_icon' => '<i class="fab fa-font-awesome-alt blue"></i>',
        'm_name' => 'ICON',
        'm_desc' => 'Icons maping to the Font Awesome database',
        'm_parents' => array(10589,10539,4593,6198,4592),
    ),
    4260 => array(
        'm_icon' => '<i class="far fa-image blue"></i>',
        'm_name' => 'IMAGE',
        'm_desc' => '',
        'm_parents' => array(6198,11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4319 => array(
        'm_icon' => '<i class="far fa-sort-numeric-down blue"></i>',
        'm_name' => 'INTEGER',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592),
    ),
    4230 => array(
        'm_icon' => '<i class="far fa-link rotate90 blue"></i>',
        'm_name' => 'RAW',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592),
    ),
    4255 => array(
        'm_icon' => '<i class="far fa-align-left blue"></i>',
        'm_name' => 'TEXT',
        'm_desc' => '',
        'm_parents' => array(10593,10589,4593,4592),
    ),
    4318 => array(
        'm_icon' => '<i class="far fa-clock blue"></i>',
        'm_name' => 'TIME',
        'm_desc' => '',
        'm_parents' => array(10594,10589,4593,4592),
    ),
    4256 => array(
        'm_icon' => '<i class="far fa-browser blue"></i>',
        'm_name' => 'URL',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592,4537),
    ),
    4258 => array(
        'm_icon' => '<i class="far fa-video blue"></i>',
        'm_name' => 'VIDEO',
        'm_desc' => '',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4257 => array(
        'm_icon' => '<i class="far fa-play-circle blue"></i>',
        'm_name' => 'WIDGET',
        'm_desc' => '',
        'm_parents' => array(10539,10589,4593,4592,4537,4506),
    ),
);

//PLAYER NOTIFICATION LEVEL:
$config['en_ids_4454'] = array(4456,4457,4458);
$config['en_all_4454'] = array(
    4456 => array(
        'm_icon' => '<i class="far fa-volume-up" aria-hidden="true"></i>',
        'm_name' => 'REGULAR',
        'm_desc' => 'User is connected and will be notified by sound & vibration for new Mench messages',
        'm_parents' => array(11058,4454),
    ),
    4457 => array(
        'm_icon' => '<i class="far fa-volume-down" aria-hidden="true"></i>',
        'm_name' => 'SILENT',
        'm_desc' => 'User is connected and will be notified by on-screen notification only for new Mench messages',
        'm_parents' => array(11058,4454),
    ),
    4458 => array(
        'm_icon' => '<i class="far fa-volume-mute" aria-hidden="true"></i>',
        'm_name' => 'DISABLED',
        'm_desc' => 'User is connected but will not be notified for new Mench messages except the red icon indicator on the Messenger app which would indicate the total number of new messages they have',
        'm_parents' => array(11058,4454),
    ),
);

//BLOG NOTES:
$config['en_ids_4485'] = array(4231,4983,4601,10573,7545);
$config['en_all_4485'] = array(
    4231 => array(
        'm_icon' => '<i class="fas fa-comment yellow"></i>',
        'm_name' => 'MESSAGES',
        'm_desc' => '',
        'm_parents' => array(10939,11033,11031,10990,10593,10589,7703,6345,4986,4603,4593,4485),
    ),
    4983 => array(
        'm_icon' => '<i class="fas fa-user-edit yellow"></i>',
        'm_name' => 'AUTHORS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,10990,10593,10589,4527,7703,7551,4985,4593,4485),
    ),
    4601 => array(
        'm_icon' => '<i class="fas fa-tag yellow" aria-hidden="true"></i>',
        'm_name' => 'TAGS',
        'm_desc' => '',
        'm_parents' => array(10939,11031,11033,4986,10990,10593,10589,7703,4593,4485),
    ),
    10573 => array(
        'm_icon' => '<i class="fas fa-bookmark yellow" aria-hidden="true"></i>',
        'm_name' => 'BLOG BOOKMARKS',
        'm_desc' => '',
        'm_parents' => array(10984,11033,10990,10594,10589,4593,7703,7551,4485),
    ),
    7545 => array(
        'm_icon' => '<i class="fas fa-user-tag blue" aria-hidden="true"></i>',
        'm_name' => 'PLAYER TAGS',
        'm_desc' => '',
        'm_parents' => array(10983,11033,10990,10594,10589,7703,7551,4593,4485),
    ),
);

//BLOG TREE BRANCHES:
$config['en_ids_4486'] = array(4228,4229);
$config['en_all_4486'] = array(
    4228 => array(
        'm_icon' => '<i class="far fa-play yellow" aria-hidden="true"></i>',
        'm_name' => 'AUTOMATIC',
        'm_desc' => 'Blogs that follow another blog no matter what',
        'm_parents' => array(10594,10589,7703,6410,4593,4486),
    ),
    4229 => array(
        'm_icon' => '<i class="fas fa-question-circle yellow" aria-hidden="true"></i>',
        'm_name' => 'CONDITIONAL',
        'm_desc' => 'Blogs that follow another blog if the conditional score is met',
        'm_parents' => array(10594,10589,7703,4527,6410,6283,4593,4486),
    ),
);

//PLAY BRANCH URL:
$config['en_ids_4537'] = array(4259,4261,4260,4256,4258,4257);
$config['en_all_4537'] = array(
    4259 => array(
        'm_icon' => '<i class="far fa-volume-up blue"></i>',
        'm_name' => 'AUDIO',
        'm_desc' => 'Link notes contain a URL to a raw audio file.',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4261 => array(
        'm_icon' => '<i class="far fa-file-pdf blue"></i>',
        'm_name' => 'FILE',
        'm_desc' => 'Link notes contain a URL to a raw file.',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4260 => array(
        'm_icon' => '<i class="far fa-image blue"></i>',
        'm_name' => 'IMAGE',
        'm_desc' => 'Link notes contain a URL to a raw image file.',
        'm_parents' => array(6198,11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4256 => array(
        'm_icon' => '<i class="far fa-browser blue"></i>',
        'm_name' => 'URL',
        'm_desc' => 'Link note contains a generic URL only.',
        'm_parents' => array(10539,10589,4593,4592,4537),
    ),
    4258 => array(
        'm_icon' => '<i class="far fa-video blue"></i>',
        'm_name' => 'VIDEO',
        'm_desc' => 'Link notes contain a URL to a raw video file.',
        'm_parents' => array(11080,11059,10627,10593,10589,6203,4593,4592,4537),
    ),
    4257 => array(
        'm_icon' => '<i class="far fa-play-circle blue"></i>',
        'm_name' => 'WIDGET',
        'm_desc' => 'Link note contain a recognizable URL that offers an embed widget for a more engaging play-back experience.',
        'm_parents' => array(10539,10589,4593,4592,4537,4506),
    ),
);

//PLAY SOURCES:
$config['en_ids_3000'] = array(2997,4446,3005,3147,4763,2999,4883,3192,5948,2998);
$config['en_all_3000'] = array(
    2997 => array(
        'm_icon' => '<i class="far fa-newspaper" aria-hidden="true"></i>',
        'm_name' => 'Articles',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    4446 => array(
        'm_icon' => '<i class="far fa-tachometer" aria-hidden="true"></i>',
        'm_name' => 'Assessments',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    3005 => array(
        'm_icon' => '<i class="far fa-book" aria-hidden="true"></i>',
        'm_name' => 'Books',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3147 => array(
        'm_icon' => '<i class="far fa-presentation" aria-hidden="true"></i>',
        'm_name' => 'Courses',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    4763 => array(
        'm_icon' => '<i class="far fa-megaphone" aria-hidden="true"></i>',
        'm_name' => 'Marketing Channels',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    2999 => array(
        'm_icon' => '<i class="far fa-microphone" aria-hidden="true"></i>',
        'm_name' => 'Podcasts',
        'm_desc' => '',
        'm_parents' => array(10809,10571,4983,7614,6805,3000),
    ),
    4883 => array(
        'm_icon' => '<i class="far fa-concierge-bell" aria-hidden="true"></i>',
        'm_name' => 'Services',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    3192 => array(
        'm_icon' => '<i class="far fa-compact-disc" aria-hidden="true"></i>',
        'm_name' => 'Software',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,6805,3000),
    ),
    5948 => array(
        'm_icon' => '<i class="far fa-file-invoice" aria-hidden="true"></i>',
        'm_name' => 'Templates',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
    2998 => array(
        'm_icon' => '<i class="far fa-film" aria-hidden="true"></i>',
        'm_name' => 'Videos',
        'm_desc' => '',
        'm_parents' => array(10571,4983,7614,3000),
    ),
);