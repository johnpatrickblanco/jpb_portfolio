# John Patrick P. Blanco — Portfolio

A static single-page portfolio built with [Vite](https://vite.dev/) and [Tailwind CSS](https://tailwindcss.com/).

## Development

```bash
npm install
npm run dev
```

The dev server runs at http://localhost:5173.

## Build

```bash
npm run build
```

The production output is generated in `dist/`.

## Preview the production build

```bash
npm run preview
```

## Deploy to Vercel

The project includes a `vercel.json` with the required settings:

- **Build Command:** `npm run build`
- **Output Directory:** `dist`

Import the repository into Vercel and deploy. No additional configuration is required.

## Project structure

```
index.html        Single static page (all sections)
src/app.css       Tailwind entry point and custom styles
src/main.js       Theme toggle, mobile menu, scroll reveal, carousels
public/           Static assets (images, favicons, robots.txt)
vite.config.js    Vite configuration (outputs to dist)
vercel.json       Vercel deployment configuration
```
