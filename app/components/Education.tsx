'use client'

import { motion } from 'framer-motion'
import { fadeIn, textVariant } from '@/app/lib/animations'

const education = [
    {
        level: 'Tertiary Education',
        school: 'Data Center College of the Philippines – Bangued',
        program: 'Bachelor of Science in Information Technology (BSIT)',
        details: [
            'Current Level: 4th Year',
            'Current Year: 2026',
            'Expected Graduation: 2027',
        ],
    },
    {
        level: 'Secondary Education',
        school: 'Manabo National High School',
        program: '',
        details: [
            'Attended: 2022',
            'Graduated: 2023',
        ],
    },
]

export default function Education() {
    return (
        <motion.section
            initial="hidden"
            whileInView="show"
            viewport={{ once: true }}
            className="pb-20 pt-5"
            id="education"
        >
            <motion.div variants={textVariant()}>
                <h2 className="text-3xl md:text-4xl font-bold mb-4">Education</h2>
                <div className="w-20 h-1 bg-gradient-to-r from-purple-600 to-blue-500 mb-8"></div>
            </motion.div>

            <div className="flex flex-col gap-8">
                {education.map((edu, index) => (
                    <motion.div
                        key={index}
                        variants={fadeIn('up', 'spring', 0.1 * index, 1)}
                        className="bg-gray-100 dark:bg-gray-900 rounded-2xl p-6 md:p-8 border border-gray-200 dark:border-gray-800"
                    >
                        <div className="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-4">
                            <h3 className="text-sm font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">
                                {edu.level}
                            </h3>
                        </div>
                        <h4 className="text-xl font-semibold text-gray-900 dark:text-white mb-1">{edu.school}</h4>
                        {edu.program && (
                            <p className="text-gray-600 dark:text-gray-300 mb-3">{edu.program}</p>
                        )}
                        <ul className="flex flex-wrap gap-x-6 gap-y-1 text-gray-600 dark:text-gray-400">
                            {edu.details.map((detail, i) => (
                                <li key={i} className="flex items-center gap-2">
                                    <span className="w-1.5 h-1.5 rounded-full bg-purple-500"></span>
                                    {detail}
                                </li>
                            ))}
                        </ul>
                    </motion.div>
                ))}
            </div>
        </motion.section>
    )
}
