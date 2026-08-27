'use client'

import { motion } from 'framer-motion'
import { fadeIn } from '@/app/lib/animations'
import Link from 'next/link'
import { FiSmartphone, FiFacebook } from 'react-icons/fi'
import { smoothScrollTo } from '@/app/utils/scroll'

export default function CTA() {
    const handleScroll = (id: string) => {
        smoothScrollTo(id);
    };

    return (
        <motion.section
            initial="hidden"
            whileInView="show"
            viewport={{ once: true }}
            className="py-20"
            id="contact"
        >
            <motion.div
                variants={fadeIn('up', 'spring', 0.1, 1)}
                className="bg-gradient-to-r from-purple-900/80 to-blue-900/80 dark:from-purple-900/40 dark:to-blue-900/40 rounded-2xl p-8 md:p-12 border border-gray-200 dark:border-gray-800"
            >
                <div className="max-w-4xl mx-auto text-center">
                    <h2 className="text-3xl md:text-4xl font-bold mb-6 text-white dark:text-white">Let's Work Together!</h2>
                    <div className="mb-8">
                        <p className="text-gray-100 mb-4">
                            Prefer to talk it over? Feel free to call or text me anytime — I'd be
                            happy to answer your questions and help you get started!
                        </p>
                        <a
                            href="tel:+639065657910"
                            className="inline-flex items-center gap-3 text-2xl md:text-3xl font-bold bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent"
                        >
                            <FiSmartphone className="w-7 h-7" />
                            0906 565 7910
                        </a>
                    </div>
                    <div className="flex flex-col sm:flex-row justify-center gap-4">
                        <a
                            href="https://www.facebook.com/johnpatrick.blanco.33/"
                            target="_blank"
                            rel="noopener noreferrer"
                            className="px-8 py-4 rounded-full bg-gradient-to-r from-purple-600 to-blue-500 text-white hover:opacity-90 transition-opacity font-medium inline-flex items-center gap-2"
                        >
                            <FiFacebook />
                            Message Me
                        </a>
                        <Link
                            href="/projects"
                            onClick={(e) => {
                                e.preventDefault();
                                handleScroll('projects');
                            }}
                            className="px-8 py-4 rounded-full border border-gray-700 text-white hover:bg-gray-800 transition-colors font-medium"
                        >
                            View My Work
                        </Link>
                    </div>
                </div>
            </motion.div>
        </motion.section>
    )
}