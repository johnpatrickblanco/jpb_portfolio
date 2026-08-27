'use client'

import { motion } from 'framer-motion'
import { fadeIn, textVariant } from '@/app/lib/animations'
import { projects } from '@/app/lib/constants'
import { FiGithub, FiExternalLink } from 'react-icons/fi'

export default function Projects() {
    return (
        <motion.section
            initial="hidden"
            whileInView="show"
            viewport={{ once: true }}
            className="py-20"
            id="projects"
        >
            <motion.div variants={textVariant()}>
                <h2 className="text-3xl md:text-4xl font-bold mb-4">My Projects</h2>
                <div className="w-20 h-1 bg-gradient-to-r from-purple-600 to-blue-500 mb-8"></div>
                <p className="text-gray-500 dark:text-gray-400 max-w-3xl mb-12">
                    Here are some of my recent projects. Each one was built to solve a specific problem or explore new technologies.
                </p>
            </motion.div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {projects.map((project, index) => (
                    <motion.div
                        key={project.name}
                        variants={fadeIn('up', 'spring', index * 0.2, 0.75)}
                        className="bg-gray-100 dark:bg-gray-900 rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:border-gray-400 dark:hover:border-gray-700 transition-colors"
                    >
                        <div className="p-6">
                            <div className="flex justify-between items-start mb-4">
                                <h3 className="text-xl font-semibold text-gray-900 dark:text-white">{project.name}</h3>
                                <div className="flex gap-3">
                                    {project.githubUrl && (
                                        <a
                                            href={project.githubUrl}
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            className="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors"
                                            aria-label="GitHub"
                                        >
                                            <FiGithub className="w-5 h-5" />
                                        </a>
                                    )}
                                    {project.liveUrl && (
                                        <a
                                            href={project.liveUrl}
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            className="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors"
                                            aria-label="Live Demo"
                                        >
                                            <FiExternalLink className="w-5 h-5" />
                                        </a>
                                    )}
                                </div>
                            </div>
                            <p className="text-gray-600 dark:text-gray-400 mb-4">{project.description}</p>
                            {project.status && (
                                <p className="text-blue-600 dark:text-blue-400 text-sm mb-4 font-medium">
                                    {project.status}
                                </p>
                            )}
                            <div className="flex flex-wrap gap-2">
                                {project.technologies.map((tech) => (
                                    <span
                                        key={tech}
                                        className="px-3 py-1 text-xs bg-gray-200 dark:bg-gray-800 rounded-full text-gray-700 dark:text-gray-300"
                                    >
                    {tech}
                  </span>
                                ))}
                            </div>
                        </div>
                    </motion.div>
                ))}
            </div>
        </motion.section>
    )
}