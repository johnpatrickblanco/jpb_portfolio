import {
    FiGithub,
    FiLinkedin,
    FiFacebook,
    FiSmartphone,
} from 'react-icons/fi'
import {
    SiOpenjdk,
    SiCplusplus,
    SiPython,
    SiSharp,
    SiHtml5,
    SiJavascript,
    SiPhp,
    SiMysql,
    SiXampp,
    SiLinux,
} from 'react-icons/si'
import { DiVisualstudio } from 'react-icons/di'

export const navLinks = [
    { name: 'Home', href: 'home' },
    { name: 'About', href: 'about' },
    { name: 'Education', href: 'education' },
    { name: 'Projects', href: 'projects' },
    { name: 'Contact', href: 'contact' },
];

export const socialLinks = [
    { name: 'GitHub', url: 'https://github.com/johnpatrickblanco', icon: FiGithub },
    { name: 'Phone', url: 'tel:+639065657910', icon: FiSmartphone },
    { name: 'Facebook', url: 'https://www.facebook.com/johnpatrick.blanco.33/', icon: FiFacebook },
]

export const skillCategories = [
    {
        category: 'Programming',
        skills: [
            { name: 'Java', icon: SiOpenjdk },
            { name: 'C++', icon: SiCplusplus },
            { name: 'Python', icon: SiPython },
            { name: 'C#', icon: SiSharp },
        ],
    },
    {
        category: 'Web Development',
        skills: [
            { name: 'HTML', icon: SiHtml5 },
            { name: 'JavaScript', icon: SiJavascript },
            { name: 'PHP', icon: SiPhp },
        ],
    },
    {
        category: 'Databases & Tools',
        skills: [
            { name: 'MySQL', icon: SiMysql },
            { name: 'XAMPP', icon: SiXampp },
            { name: 'Visual Studio', icon: DiVisualstudio },
            { name: 'Linux', icon: SiLinux },
        ],
    },
]

export const projects = [
    {
        name: 'Casa Nostra Resort and Event Information System with Reservation System', 
        image: '/images/screenshot.png',
        description: 'A resort and event information system with an online reservation feature designed to make the booking process easier, faster, and more organized. The system allows guests to view resort information, check room availability, submit reservations, and view booking details.',
        technologies: ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
        status: 'Ongoing / Academic Thesis Project',
        githubUrl: '',
        liveUrl: ''
    },
    {
        name: 'Bayugo Dental Clinic Online Record Management System',
        image: '/images/screenshot.png',
        description: 'An online dental clinic management system designed to help organize patient information, appointments, and dental clinic records. The system aims to reduce manual work and make patient information easier for authorized clinic personnel to manage and access.',
        technologies: ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL', 'Laravel'],
        status: 'Academic Project / Ongoing',
        githubUrl: '',
        liveUrl: ''
    }
]

export const testimonials = [
    {
        name: 'Jane Smith',
        role: 'CEO at TechCorp',
        quote: 'JP delivered our project ahead of schedule with exceptional quality. Highly recommended!'
    },
    {
        name: 'Mike Johnson',
        role: 'Product Manager',
        quote: 'Working with JP was a pleasure. His attention to detail and problem-solving skills are top-notch.'
    },
    {
        name: 'Sarah Williams',
        role: 'Marketing Director',
        quote: 'Our website performance improved dramatically after JP optimized it. Great work!'
    }
]