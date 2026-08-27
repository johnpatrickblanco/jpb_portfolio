'use client'

import { motion } from 'framer-motion'
import { fadeIn, textVariant } from '@/app/lib/animations'
import { skillCategories } from '@/app/lib/constants'

export default function About() {
    return (
        <motion.section
            initial="hidden"
            whileInView="show"
            viewport={{ once: true }}
            className="pb-20 pt-5"
            id="about"
        >
            <motion.div variants={textVariant()}>
                <h2 className="text-3xl md:text-4xl font-bold mb-4">About Me</h2>
                <div className="w-20 h-1 bg-gradient-to-r from-purple-600 to-blue-500 mb-8"></div>
            </motion.div>

            <div className="flex flex-col md:flex-row gap-12">
                <motion.div
                    variants={fadeIn('right', 'spring', 0.1, 1)}
                    className="md:w-1/2"
                >
                    <p className="text-gray-600 dark:text-gray-400 mb-6">
                        I'm John Patrick P. Blanco, also known as JP, a BS Information Technology student at
                        Data Center College of the Philippines – Bangued. I'm a curious and motivated student
                        who enjoys trying new things, exploring technology, and continuously learning new skills.
                    </p>
                    <p className="text-gray-600 dark:text-gray-400 mb-6">
                        I'm interested in coding, graphic design, and creating digital solutions that can be useful
                        in real-life situations. I believe learning is a continuous process — I enjoy experimenting
                        with new ideas and challenging myself to step outside my comfort zone.
                    </p>
                    <p className="text-gray-600 dark:text-gray-400 mb-6">
                        When I'm not studying, I enjoy playing chess, which helps me develop patience, strategy,
                        critical thinking, and problem-solving skills.
                    </p>
                    <p className="text-gray-600 dark:text-gray-400">
                        My goal is to build a successful career in technology, continuously improve my skills,
                        create meaningful solutions, and achieve financial independence.
                    </p>
                </motion.div>

                <motion.div
                    variants={fadeIn('left', 'spring', 0.1, 1)}
                    className="md:w-1/2"
                >
                    <h3 className="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Technical Skills</h3>
                    <p className="text-gray-500 dark:text-gray-400 text-sm mb-6">
                        Technologies I am currently learning and developing.
                    </p>
                    <div className="flex flex-col gap-6">
                        {skillCategories.map((group) => (
                            <div key={group.category}>
                                <h4 className="text-sm font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-3">
                                    {group.category}
                                </h4>
                                <div className="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                    {group.skills.map((skill) => (
                                        <div
                                            key={skill.name}
                                            className="px-4 py-3 bg-gray-100 dark:bg-gray-900 rounded-xl flex items-center gap-2 border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors"
                                        >
                                            <skill.icon className="w-5 h-5 text-blue-400 shrink-0" />
                                            <span className="text-sm">{skill.name}</span>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        ))}
                    </div>
                </motion.div>
            </div>
        </motion.section>
    )
}