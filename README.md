# 👨🏻‍💻 John Patrick Blanco — Web Developer Portfolio

A modern, responsive personal portfolio website built for **John Patrick P. Blanco**, a BS Information Technology student and aspiring full-stack web developer. The site showcases skills, education, projects, and a clear way for visitors to get in touch.

---

## ✨ Features

- ⚡ **Fast & SEO-friendly** – Vite static build for optimal performance
- 🎨 **Smooth animations** – Page transitions and hover effects powered by Framer Motion
- 📱 **Fully responsive** – Seamless experience on mobile, tablet, and desktop
- 🧭 **Single-page navigation** – Smooth-scroll sections for Home, About, Education, Projects, and Contact
- 💼 **Project showcase** – Highlights academic and web development work
- 🌙 **Dark-mode friendly** – Tailwind-powered theming across the UI

---

## 🚀 Tech Stack

| Layer       | Technology                                                                 |
|-------------|----------------------------------------------------------------------------|
| Build Tool  | [Vite](https://vite.dev/)                                                  |
| Framework   | [React](https://react.dev/)                                                |
| Language    | [TypeScript](https://www.typescriptlang.org/)                              |
| Styling     | [Tailwind CSS](https://tailwindcss.com/)                                   |
| Animations  | [Framer Motion](https://www.framer.com/motion/)                            |
| Icons       | [React Icons](https://react-icons.github.io/react-icons/)                  |
| Deployment  | [Vercel](https://vercel.com/)                                              |

---

## 📂 Project Structure

```
src/
├── components/          # UI sections (Hero, About, Projects, CTA, Footer, etc.)
├── lib/                 # Constants, skill data, and animation variants
├── utils/               # Helper utilities (smooth scroll)
├── App.tsx              # Single-page layout
├── main.tsx             # React entry point
└── index.css            # Global styles
index.html               # Vite HTML entry
vite.config.js           # Vite configuration (builds to dist/)
vercel.json              # Vercel deployment configuration
```

---

## 📦 Getting Started

### Prerequisites

- [Node.js](https://nodejs.org/) (v18 or later)
- npm (included with Node.js)

### Installation

Clone the repository:

```bash
git clone https://github.com/johnpatrickblanco/web-dev-portfolio
```

Navigate into the project directory:

```bash
cd web-dev-portfolio
```

Install dependencies:

```bash
npm install
```

Start the development server:

```bash
npm run dev
```

Open [http://localhost:5173](http://localhost:5173) in your browser.

### Production Build

```bash
npm run build
npm run preview
```

The static output is generated in `dist/`.

---

## 🛠️ Customization

- **Personal info, skills & social links** – edit `src/lib/constants.ts`
- **Animations** – tweak variants in `src/lib/animations.ts`
- **Sections** – modify individual components in `src/components/`
- **Theme & styling** – adjust classes in `tailwind.config.ts` and `src/index.css`

---

## 📖 Documentation

- [`docs/PROJECTS.md`](./docs/PROJECTS.md) – Academic projects, including the Casa Nostra Resort System and Bayugo Dental Clinic Record Management System.

---

## 💌 Get In Touch

Have a question, a project idea, or want to collaborate? Feel free to reach out:

[![Facebook](https://img.shields.io/badge/-Facebook-1877F2?style=for-the-badge&logo=facebook&logoColor=white)](https://www.facebook.com/johnpatrick.blanco.33/)
[![GitHub](https://img.shields.io/badge/-GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/johnpatrickblanco)
![Phone](https://img.shields.io/badge/-0906_565_7910-0e5255?style=for-the-badge&logo=whatsapp&logoColor=white)

---

## 📄 License

This project is for personal use. Feel free to use it as inspiration for your own portfolio.
