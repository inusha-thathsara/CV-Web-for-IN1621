<?php
$cv_data = [
    'header' => [
        'name' => 'Inusha Gunasekara',
        'title' => 'IT Undergraduate | Full Stack Developer | AI Enthusiast',
        'links' => [
            'github' => 'https://github.com/inusha-thathsara',
            'devto' => 'https://dev.to/inushathathsara',
            'linkedin' => '#' // Placeholder or if user provided one
        ]
    ],
    'summary' => "IT Undergraduate at the University of Moratuwa and Co-founder of Tekkeys. Experienced in building Agentic AI tools and full-stack applications using Next.js, Supabase, and Flutter. Passionate about entrepreneurship and bridging the gap between AI theory and real-world automation products like 'Autopost'.",
    'experience' => [
        [
            'role' => 'Co-Founder & Lead Developer',
            'company' => 'Tekkeys',
            'dates' => 'Oct 2025 – Present',
            'description' => [
                'Co-founded a startup focused on AI automation tools.',
                'Leading the development of "Autopost," an AI-driven automation tool built using the Agent Development Kit (ADK).',
                'Focusing on product-market fit and GTM strategies for early-stage AI products.'
            ]
        ]
    ],
    'projects' => [
        [
            'name' => 'Recall.io (AI Quiz Bot)',
            'stack' => 'Telegram API, Google Gemini API, Supabase, PostgreSQL',
            'description' => 'Developed a Telegram bot that converts user notes into interactive quizzes using Generative AI.',
            'achievement' => 'Integrated Supabase for persistent data storage and utilized Row Level Security (RLS) to ensure user data privacy.'
        ],
        [
            'name' => 'Sigillo (Email Signature Generator)',
            'stack' => 'Web Technologies, Hosted Deployment',
            'description' => 'Built and deployed a web application allowing users to generate professional email signatures.',
            'achievement' => 'Managed the full lifecycle from requirement gathering to deployment in January 2026.'
        ],
        [
            'name' => 'The 80% (Attendance Tracking App)',
            'stack' => 'Flutter, Dart, Gemini API, Firebase',
            'description' => 'Designed a mobile application to help university students track their attendance percentage against the mandatory 80% requirement.',
            'achievement' => 'Solved a specific pain point for undergraduates, focusing on intuitive UI/UX.'
        ],
        [
            'name' => 'Mission Control (Portfolio Site)',
            'stack' => 'Next.js, Google Cloud Run',
            'description' => 'Developed a high-performance personal portfolio site with a dashboard aesthetic.',
            'achievement' => 'Successfully containerized and deployed the application using Google Cloud Run for scalability.'
        ]
    ],
    'education' => [
        'degree' => 'B.Sc. (Hons) in Information Technology',
        'university' => 'University of Moratuwa, Sri Lanka',
        'status' => 'Level 1, Semester 2',
        'modules' => [
            'Programming Fundamentals', 'Digital System Design', 'Fundamentals of Mathematics',
            'Computer Organization', 'Multimedia Technologies', 'Elements of Probability and Statistics',
            'Data Structures and Algorithms', 'Fundamentals of Database', 'Data Communication',
            'Web Technologies', 'Microcontroller Based Application Development Project', 'Principles of Management'
        ]
    ],
    'skills' => [
        'Languages' => ['Python', 'Dart', 'JavaScript/TypeScript', 'SQL'],
        'Frameworks' => ['Flutter', 'Next.js'],
        'Cloud & Backend' => ['Supabase (PostgreSQL, RLS)', 'Google Cloud Run', 'Firebase'],
        'AI/ML' => ['Agentic AI', 'Google Gemini API', 'Agent Development Kit (ADK)'],
        'Tools' => ['Git', 'VS Code', 'Canva', 'Antigravity', 'Figma']
    ],
    'volunteering' => [
        [
            'role' => 'Technical Writer',
            'description' => 'Regularly publish technical articles on Dev.to/Hashnode regarding AI and software development.'
        ],
        [
            'role' => 'Participant',
            'description' => '10th International Conference on Information Technology Research (ICITR 2025).'
        ],
        [
            'role' => 'Participant',
            'description' => 'Web3Ceylon Tour 2025.'
        ]
    ]
];
?>
