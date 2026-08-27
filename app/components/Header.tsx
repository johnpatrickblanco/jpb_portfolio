'use client'

import { motion } from 'framer-motion'
import Link from 'next/link'
import { navLinks } from '@/app/lib/constants'
import { fadeIn } from '@/app/lib/animations'
import { useEffect, useState } from 'react'
import { FiMenu, FiX, FiSun, FiMoon } from 'react-icons/fi'
import { smoothScrollTo } from '@/app/utils/scroll'

export default function Header() {
    const [isOpen, setIsOpen] = useState(false)
    const [isDark, setIsDark] = useState(false)

    useEffect(() => {
        setIsDark(document.documentElement.classList.contains('dark'))
    }, [])

    const toggleTheme = () => {
        const next = !isDark
        setIsDark(next)
        document.documentElement.classList.toggle('dark', next)
    }

    const handleNavClick = (id: string) => {
        smoothScrollTo(id);
        setIsOpen(false);
    };

    return (
        <motion.header
            initial="hidden"
            animate="visible"
            variants={fadeIn as any}
            className="sticky top-0 z-50 bg-white/80 dark:bg-gray-950/80 backdrop-blur-md"
        >
            <nav className="max-w-7xl mx-auto flex justify-between items-center py-6 px-4 sm:px-6 lg:px-8">
                <button 
                    onClick={() => smoothScrollTo('home')}
                    className="text-2xl font-bold bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent"
                >
                    John Patrick P. Blanco
                </button>

                {/* Desktop Navigation */}
                <ul className="hidden md:flex space-x-8">
                    {navLinks.map((link) => (
                        <li key={link.name}>
                            <button
                                onClick={() => handleNavClick(link.href)}
                                className="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white transition-colors"
                            >
                                {link.name}
                            </button>
                        </li>
                    ))}
                </ul>

                <div className="flex items-center gap-4">
                    {/* Theme toggle icon */}
                    <button
                        onClick={toggleTheme}
                        aria-label="Toggle theme"
                        className="p-2 rounded-full text-gray-600 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800 transition-colors"
                    >
                        {isDark ? <FiSun size={22} /> : <FiMoon size={22} />}
                    </button>

                    {/* Mobile menu button */}
                    <button
                        className="md:hidden text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white focus:outline-none"
                        onClick={() => setIsOpen(!isOpen)}
                    >
                        {isOpen ? <FiX size={24} /> : <FiMenu size={24} />}
                    </button>
                </div>

                {/* Mobile Menu */}
                {isOpen && (
                    <motion.div
                        initial={{ y: -300, opacity: 0 }}
                        animate={{ y: 0, opacity: 1 }}
                        exit={{ y: -300, opacity: 0 }}
                        transition={{ type: 'spring', damping: 25 }}
                        className="fixed top-16 left-0 right-0 bg-white dark:bg-gray-900 z-50 shadow-2xl md:hidden border-b border-gray-200 dark:border-gray-800"
                    >
                        <div className="flex flex-col p-6">
                            <ul className="flex flex-col space-y-6">
                                {navLinks.map((link) => (
                                    <li key={link.name}>
                                        <button
                                            onClick={() => handleNavClick(link.href)}
                                            className="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white text-lg transition-colors"
                                        >
                                            {link.name}
                                        </button>
                                    </li>
                                ))}
                            </ul>
                        </div>
                    </motion.div>
                )}
            </nav>
        </motion.header>
    )
}