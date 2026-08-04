<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Rakesh Varma Singothu — Full-Stack Developer</title>

    <meta name="description" content="Rakesh Varma Singothu - Full-Stack Developer | Specializing in PHP, Java, Spring Boot, React.js, MySQL" />
    <meta name="keywords" content="Rakesh Varma, Full Stack Developer, PHP, Java, Spring Boot, React.js, MySQL, MLM Systems" />
    <meta name="author" content="Rakesh Varma Singothu" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
    href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet" />

    <style>
        /* ============================================
                   COLOR PALETTE — Cosmic Sunset (warm neon)
                   ============================================ */
        :root {
            --color-bg: #0a0616;
            --color-surface: #130d20;
            --color-card: #1c1430;
            --color-elevated: #261a3f;

            --color-neon-orange: #ff6b35;
            --color-neon-magenta: #ff2d75;
            --color-neon-cyan: #00f0ff;
            --color-neon-gold: #ffd700;
            --color-neon-purple: #b44aff;
            --color-neon-green: #34d399;

            --color-glow-orange: rgba(255, 107, 53, 0.15);
            --color-glow-magenta: rgba(255, 45, 117, 0.12);
            --color-glow-cyan: rgba(0, 240, 255, 0.10);

            /* Text */
            --text-primary: #f5edff;
            --text-secondary: #cdc0e8;
            --text-muted: #8a7aa8;

            /* Borders */
            --border-subtle: rgba(255, 255, 255, 0.05);
            --border-medium: rgba(255, 255, 255, 0.08);
            --border-strong: rgba(255, 255, 255, 0.15);

            /* Accent aliases */
            --blue: var(--color-neon-cyan);
            --purple: var(--color-neon-purple);
            --pink: var(--color-neon-magenta);
            --cyan: var(--color-neon-cyan);
            --green: var(--color-neon-green);
            --yellow: var(--color-neon-gold);
            --orange: var(--color-neon-orange);

            /* Backgrounds */
            --bg-primary: var(--color-bg);
            --bg-secondary: var(--color-surface);
            --bg-card: var(--color-card);
            --bg-elevated: var(--color-elevated);

            /* Typography */
            --display: "Space Grotesk", sans-serif;
            --body: "Manrope", sans-serif;
            --mono: "DM Mono", monospace;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-width: 320px;
            overflow-x: hidden;
            background: var(--bg-primary);
            color: var(--text-primary);
            font-family: var(--body);
            perspective: 1200px;
            position: relative;
            isolation: isolate;
        }

        /* ---- Animated background grain + glow ---- */
        body::before {
            content: "";
            position: fixed;
            z-index: 1;
            inset: 0;
            pointer-events: none;
            background:
                radial-gradient(ellipse 80% 60% at 20% 10%, rgba(255, 107, 53, 0.06), transparent 60%),
                radial-gradient(ellipse 60% 50% at 90% 80%, rgba(255, 45, 117, 0.07), transparent 50%),
                radial-gradient(ellipse 40% 40% at 50% 50%, rgba(0, 240, 255, 0.04), transparent 40%);
            animation: bgPulse 8s ease-in-out infinite alternate;
        }

        body::after {
            content: "";
            position: fixed;
            z-index: 1;
            inset: 0;
            pointer-events: none;
            opacity: 0.035;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.92' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='.48'/%3E%3C/svg%3E");
        }

        @keyframes bgPulse {
            0% {
                opacity: 0.6;
            }
            100% {
                opacity: 1;
            }
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            border: 0;
            cursor: pointer;
            font: inherit;
        }

        a:focus-visible,
        button:focus-visible {
            outline: 2px solid var(--color-neon-cyan);
            outline-offset: 5px;
        }

        .container {
            width: min(1240px, calc(100% - 40px));
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .mono {
            font-family: var(--mono);
        }

        .display {
            font-family: var(--display);
        }

        .section {
            border-top: 1px solid var(--border-subtle);
            padding: 110px 0;
            position: relative;
            z-index: 2;
            transform-style: preserve-3d;
        }

        .section-label {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--color-neon-orange);
            font: 10px var(--mono);
            letter-spacing: 0.2em;
            text-transform: uppercase;
            text-shadow: 0 0 20px var(--color-glow-orange);
        }

        .section-label span {
            display: block;
            height: 1px;
            width: 32px;
            background: var(--color-neon-orange);
            box-shadow: 0 0 12px var(--color-neon-orange);
        }

        /* ============================================
                   HEADER — glass + 3D hover
                   ============================================ */
        .site-header {
            position: fixed;
            z-index: 100;
            top: 0;
            left: 0;
            right: 0;
            height: 76px;
            border-bottom: 1px solid var(--border-subtle);
            background: rgba(10, 6, 22, 0.82);
            backdrop-filter: blur(20px) saturate(1.2);
            transform-style: preserve-3d;
            perspective: 800px;
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 100%;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 0px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.16em;
            transform-style: preserve-3d;
            transition: transform 0.4s cubic-bezier(.34, 1.56, .64, 1);
        }

        .brand:hover {
            transform: translateZ(20px) rotateY(-6deg) scale(1.02);
        }

        .brand-mark {
            position: relative;
            display: grid;
            width: 38px;
            height: 38px;
            place-items: center;
            background: linear-gradient(135deg, var(--color-neon-orange), var(--color-neon-magenta));
            color: #fff;
            font: 700 14px var(--display);
            transition: all 0.4s cubic-bezier(.34, 1.56, .64, 1);
            border-radius: 6px;
            box-shadow: 0 0 30px rgba(255, 107, 53, 0.2);
        }

        .brand:hover .brand-mark {
            transform: rotate(8deg) scale(1.06) translateZ(12px);
            box-shadow: 0 0 50px rgba(255, 107, 53, 0.35);
        }

        .brand-mark::after {
            content: "";
            position: absolute;
            right: -4px;
            bottom: -4px;
            width: 8px;
            height: 8px;
            background: var(--color-neon-cyan);
            border-radius: 2px;
            box-shadow: 0 0 16px var(--color-neon-cyan);
        }

        .desktop-nav {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .desktop-nav a {
            position: relative;
            padding: 8px 0;
            color: var(--text-secondary);
            font: 600 11px var(--body);
            letter-spacing: 0.18em;
            text-transform: uppercase;
            transition: color 0.3s ease;
            transform-style: preserve-3d;
        }

        .desktop-nav a:hover {
            color: var(--color-neon-orange);
            transform: translateZ(8px);
        }

        .desktop-nav a.active {
            color: var(--color-neon-orange);
        }

        .desktop-nav a.active::after {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--color-neon-orange), var(--color-neon-magenta));
            border-radius: 2px;
            box-shadow: 0 0 20px var(--color-neon-orange);
        }

        .menu-button {
            display: none;
            width: 40px;
            height: 40px;
            background: transparent;
            border: 1px solid var(--border-medium);
            color: var(--text-primary);
            font-size: 20px;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .menu-button:hover {
            border-color: var(--color-neon-orange);
            box-shadow: 0 0 30px var(--color-glow-orange);
        }

        .mobile-nav {
            display: none;
            border-top: 1px solid var(--border-subtle);
            background: var(--bg-secondary);
            backdrop-filter: blur(12px);
        }

        .mobile-nav.open {
            display: block;
        }

        .mobile-nav a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 20px;
            border-bottom: 1px solid var(--border-subtle);
            color: var(--text-secondary);
            font: 13px var(--body);
            letter-spacing: 0.14em;
            text-transform: uppercase;
            transition: all 0.3s;
        }

        .mobile-nav a:hover {
            color: var(--color-neon-orange);
            background: rgba(255, 107, 53, 0.04);
        }

        .mobile-nav a::after {
            content: "→";
            color: var(--color-neon-orange);
        }

        /* ============================================
                   HERO — video background only here
                   ============================================ */
        .hero {
            position: relative;
            min-height: 880px;
            display: flex;
            align-items: center;
            overflow: hidden;
            padding-top: 76px;
            transform-style: preserve-3d;
            perspective: 1000px;
            z-index: 2;
        }

        .hero-video-wrap {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .hero-video-wrap video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.75;
            filter: saturate(1.15) contrast(1.1) brightness(0.45) blur(0.2px);
            display: block;
        }

        .hero-video-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(5, 8, 20, 0.72) 0%, rgba(5, 8, 20, 0.5) 45%, rgba(5, 8, 20, 0.8) 100%);
            pointer-events: none;
        }

        .hero-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
            animation: orbFloat 12s ease-in-out infinite alternate;
            z-index: 0;
        }

        .hero-orb.orb1 {
            top: 10%;
            left: 2%;
            width: 500px;
            height: 500px;
            background: var(--color-glow-orange);
            animation-delay: 0s;
        }

        .hero-orb.orb2 {
            bottom: 10%;
            right: 2%;
            width: 400px;
            height: 400px;
            background: var(--color-glow-magenta);
            animation-delay: -4s;
        }

        .hero-orb.orb3 {
            top: 40%;
            left: 50%;
            width: 300px;
            height: 300px;
            background: var(--color-glow-cyan);
            animation-delay: -8s;
            filter: blur(100px);
        }

        @keyframes orbFloat {
            0% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -40px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
            100% {
                transform: translate(10px, -10px) scale(1.05);
            }
        }

        .float-shape {
            position: absolute;
            pointer-events: none;
            opacity: 0.15;
            animation: floatShape 18s ease-in-out infinite alternate;
            z-index: 1;
        }

        .float-shape.triangle {
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 35px solid var(--color-neon-orange);
            filter: drop-shadow(0 0 20px var(--color-neon-orange));
        }

        .float-shape.square {
            width: 30px;
            height: 30px;
            border: 2px solid var(--color-neon-magenta);
            transform: rotate(25deg);
            box-shadow: 0 0 30px var(--color-glow-magenta);
        }

        .float-shape.circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid var(--color-neon-cyan);
            box-shadow: 0 0 30px var(--color-glow-cyan);
        }

        .float-shape.one {
            top: 15%;
            left: 8%;
            animation-delay: 0s;
        }
        .float-shape.two {
            bottom: 20%;
            right: 12%;
            animation-delay: -4s;
        }
        .float-shape.three {
            top: 55%;
            left: 85%;
            animation-delay: -8s;
        }
        .float-shape.four {
            top: 70%;
            left: 5%;
            animation-delay: -12s;
        }

        @keyframes floatShape {
            0% {
                transform: translate(0, 0) rotate(0deg) scale(1);
            }
            33% {
                transform: translate(20px, -30px) rotate(120deg) scale(1.2);
            }
            66% {
                transform: translate(-15px, 20px) rotate(240deg) scale(0.8);
            }
            100% {
                transform: translate(10px, -10px) rotate(360deg) scale(1);
            }
        }

        .hero-copy {
            position: relative;
            z-index: 10;
            max-width: 700px;
            transform: translateY(-20px) translateZ(40px);
            transform-style: preserve-3d;
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 32px;
            color: var(--color-neon-gold);
            font: 10px var(--mono);
            letter-spacing: 0.24em;
            text-shadow: 0 0 30px rgba(255, 215, 0, 0.2);
        }

        .eyebrow::before {
            content: "";
            width: 40px;
            height: 1px;
            background: var(--color-neon-gold);
            box-shadow: 0 0 20px var(--color-neon-gold);
        }

        .hero h1 {
            font: 600 clamp(3.6rem, 8vw, 7.2rem) / 0.9 var(--display);
            letter-spacing: -0.07em;
            transform-style: preserve-3d;
        }

        .hero h1 .highlight-orange {
            color: var(--color-neon-orange);
            text-shadow: 0 0 40px var(--color-glow-orange);
        }

        .hero h1 .highlight-gold {
            color: var(--color-neon-gold);
            text-shadow: 0 0 40px rgba(255, 215, 0, 0.2);
        }

        .hero h1 .highlight-green {
            color: var(--color-neon-green);
            text-shadow: 0 0 40px rgba(52, 211, 153, 0.2);
        }

        .hero h1 .muted {
            color: var(--text-muted);
        }

        .typewriter {
            display: inline-block;
            border-right: 2px solid var(--color-neon-orange);
            padding-right: 4px;
            animation: blinkCursor 0.8s step-end infinite;
            color: var(--color-neon-orange);
            font-weight: 500;
        }

        @keyframes blinkCursor {
            0%,
            100% {
                border-color: var(--color-neon-orange);
            }
            50% {
                border-color: transparent;
            }
        }

        .hero-description {
            max-width: 540px;
            margin-top: 36px;
            color: var(--text-secondary);
            font-size: 17px;
            line-height: 1.75;
            min-height: 3.5rem;
        }

        .hero-description strong {
            color: var(--text-primary);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 36px;
            transform-style: preserve-3d;
        }

        .button-primary,
        .button-outline {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 15px 20px;
            font: 700 11px var(--body);
            letter-spacing: 0.15em;
            text-transform: uppercase;
            transition: all 0.4s cubic-bezier(.34, 1.56, .64, 1);
            border-radius: 60px;
            transform-style: preserve-3d;
            position: relative;
        }

        .button-primary {
            background: linear-gradient(135deg, var(--color-neon-orange), var(--color-neon-magenta));
            color: #fff;
            box-shadow: 0 4px 40px rgba(255, 107, 53, 0.3);
        }

        .button-primary:hover {
            transform: translateY(-6px) translateZ(20px) scale(1.04);
            box-shadow: 0 8px 60px rgba(255, 107, 53, 0.5);
        }

        .button-primary::after {
            content: "";
            position: absolute;
            inset: -2px;
            border-radius: 60px;
            background: linear-gradient(135deg, var(--color-neon-orange), var(--color-neon-magenta), var(--color-neon-cyan));
            z-index: -1;
            filter: blur(20px);
            opacity: 0;
            transition: opacity 0.4s;
        }

        .button-primary:hover::after {
            opacity: 0.8;
        }

        .button-outline {
            border: 1px solid var(--border-medium);
            color: var(--text-secondary);
            background: rgba(255, 255, 255, 0.02);
        }

        .button-outline:hover {
            border-color: var(--color-neon-orange);
            color: var(--color-neon-orange);
            transform: translateY(-6px) translateZ(20px) scale(1.04);
            box-shadow: 0 0 40px var(--color-glow-orange);
        }

        .hero-visual {
            position: absolute;
            top: 120px;
            right: 0;
            width: 480px;
            height: 540px;
            transform-style: preserve-3d;
            perspective: 800px;
            animation: float3D 8s ease-in-out infinite alternate;
            z-index: 5;
        }
        /* mobile size */
        

        @keyframes float3D {
            0% {
                transform: translateY(0) rotateY(-2deg) rotateX(2deg);
            }
            100% {
                transform: translateY(-20px) rotateY(4deg) rotateX(-2deg);
            }
        }

        .hero-visual::before,
        .hero-visual::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            border: 1px solid rgba(255, 107, 53, 0.15);
            animation: ringPulse 6s ease-in-out infinite alternate;
        }

        .hero-visual::before {
            inset: 6%;
            border-color: rgba(255, 107, 53, 0.12);
            animation-delay: 0s;
        }

        .hero-visual::after {
            inset: 14%;
            border-style: dashed;
            border-color: rgba(255, 45, 117, 0.15);
            animation-delay: -2s;
        }

        @keyframes ringPulse {
            0% {
                transform: scale(1) rotate(0deg);
                opacity: 0.4;
            }
            100% {
                transform: scale(1.08) rotate(6deg);
                opacity: 1;
            }
        }

        .portrait-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 107, 53, 0.15), transparent 70%);
            filter: blur(50px);
            transform: translate(-50%, -50%);
            animation: glowPulse 4s ease-in-out infinite alternate;
        }

        @keyframes glowPulse {
            0% {
                transform: translate(-50%, -50%) scale(0.9);
                opacity: 0.5;
            }
            100% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 1;
            }
        }

        .portrait-wrap {
            position: absolute;
            z-index: 3;
            top: 50%;
            left: 50%;
            width: 280px;
            height: 280px;
            overflow: hidden;
            border: 2px solid rgba(255, 107, 53, 0.4);
            border-radius: 50%;
            background: var(--bg-card);
            box-shadow:
                0 0 0 12px rgba(255, 107, 53, 0.04),
                0 30px 90px rgba(0, 0, 0, 0.6);
            transform: translate(-50%, -50%) translateZ(60px);
            transition: all 0.6s cubic-bezier(.34, 1.56, .64, 1);
            transform-style: preserve-3d;
        }

        .portrait-wrap:hover {
            transform: translate(-50%, -50%) translateZ(80px) scale(1.04);
            border-color: var(--color-neon-orange);
            box-shadow:
                0 0 0 20px rgba(255, 107, 53, 0.06),
                0 40px 120px rgba(0, 0, 0, 0.7),
                0 0 80px rgba(255, 107, 53, 0.1);
        }

        .portrait-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            mix-blend-mode: screen;
            opacity: 0.92;
        }

        .code-label {
            position: absolute;
            z-index: 4;
            padding: 9px 12px;
            border: 1px solid var(--border-medium);
            background: rgba(10, 6, 22, 0.92);
            backdrop-filter: blur(12px);
            color: var(--color-neon-orange);
            font: 10px var(--mono);
            animation: drift3D 6s ease-in-out infinite alternate;
            border-radius: 6px;
            transform-style: preserve-3d;
            box-shadow: 0 0 30px rgba(255, 107, 53, 0.05);
        }

        .code-label.top {
            top: 18%;
            left: 2%;
            animation-delay: 0s;
        }

        .code-label.bottom {
            right: 2%;
            bottom: 12%;
            color: var(--color-neon-magenta);
            animation-delay: -2s;
            border-color: rgba(255, 45, 117, 0.2);
        }

        @keyframes drift3D {
            0% {
                transform: translate3d(0, 0, 20px) rotateX(0deg) rotateY(0deg);
            }
            50% {
                transform: translate3d(10px, -16px, 40px) rotateX(2deg) rotateY(4deg);
            }
            100% {
                transform: translate3d(-6px, -8px, 30px) rotateX(-2deg) rotateY(-3deg);
            }
        }

        .orbit-icon {
            position: absolute;
            z-index: 5;
            top: 50%;
            left: 50%;
            display: grid;
            width: 40px;
            height: 40px;
            place-items: center;
            border: 1px solid rgba(255, 107, 53, 0.5);
            border-radius: 50%;
            background: var(--bg-primary);
            color: var(--color-neon-orange);
            font: 12px var(--mono);
            animation: orbit3D 18s linear infinite;
            transform-style: preserve-3d;
            box-shadow: 0 0 30px rgba(255, 107, 53, 0.1);
        }

        @keyframes orbit3D {
            from {
                transform: translate(-50%, -50%) rotate(0deg) translateX(155px) rotate(0deg) translateZ(20px);
            }
            to {
                transform: translate(-50%, -50%) rotate(360deg) translateX(155px) rotate(-360deg) translateZ(20px);
            }
        }

        .dot {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            box-shadow: 0 0 30px currentColor;
            animation: dotPulse 3s ease-in-out infinite alternate;
        }

        .dot.cyan-dot {
            top: 10%;
            right: 16%;
            background: var(--color-neon-cyan);
            color: var(--color-neon-cyan);
            animation-delay: 0s;
        }

        .dot.magenta-dot {
            bottom: 12%;
            left: 12%;
            background: var(--color-neon-magenta);
            color: var(--color-neon-magenta);
            animation-delay: -1s;
        }

        .dot.gold-dot {
            top: 45%;
            right: 6%;
            background: var(--color-neon-gold);
            color: var(--color-neon-gold);
            animation-delay: -2s;
        }

        @keyframes dotPulse {
            0% {
                transform: scale(0.6);
                opacity: 0.4;
            }
            100% {
                transform: scale(1.4);
                opacity: 1;
            }
        }

        .scroll-note {
            position: absolute;
            bottom: 32px;
            left: 0;
            display: flex;
            align-items: center;
            gap: 16px;
            color: var(--text-muted);
            font: 10px var(--mono);
            letter-spacing: 0.2em;
            text-transform: uppercase;
            animation: scrollBounce 3s ease-in-out infinite;
            transform-style: preserve-3d;
            z-index: 10;
        }

        .scroll-note::before {
            content: "";
            width: 1px;
            height: 32px;
            background: var(--color-neon-orange);
            box-shadow: 0 0 20px var(--color-neon-orange);
        }

        @keyframes scrollBounce {
            0%,
            100% {
                transform: translateY(0);
                opacity: 0.6;
            }
            50% {
                transform: translateY(8px);
                opacity: 1;
            }
        }

        /* ============================================
                   STATS — animated counters
                   ============================================ */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 48px;
            border-top: 1px solid var(--border-subtle);
            padding-top: 48px;
        }

        .stat-item {
            text-align: center;
            transform-style: preserve-3d;
            transition: all 0.4s;
        }

        .stat-item:hover {
            transform: translateZ(20px);
        }

        .stat-number {
            font: 700 clamp(2.4rem, 5vw, 4.2rem) var(--display);
            background: linear-gradient(135deg, var(--color-neon-orange), var(--color-neon-magenta));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.03em;
        }

        .stat-label {
            margin-top: 8px;
            color: var(--text-muted);
            font: 10px var(--mono);
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        /* ============================================
                   ABOUT
                   ============================================ */
        .about-grid {
            display: grid;
            grid-template-columns: 0.7fr 1.3fr;
            gap: 56px;
        }

        .about h2,
        .contact h2 {
            max-width: 760px;
            font: 500 clamp(2.6rem, 4.5vw, 4.8rem) / 0.97 var(--display);
            letter-spacing: -0.055em;
        }

        .about h2 span,
        .contact h2 span {
            color: var(--color-neon-orange);
            text-shadow: 0 0 40px var(--color-glow-orange);
        }

        .about-text {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
            margin-top: 36px;
            color: var(--text-secondary);
            font-size: 15px;
            line-height: 1.9;
        }

        .about-text strong {
            color: var(--text-primary);
        }

        .strengths {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 48px;
        }

        .strength {
            padding: 10px 16px;
            border: 1px solid var(--border-medium);
            background: var(--bg-card);
            color: var(--text-secondary);
            font: 10px var(--mono);
            letter-spacing: 0.16em;
            text-transform: uppercase;
            border-radius: 60px;
            transition: all 0.4s cubic-bezier(.34, 1.56, .64, 1);
            transform-style: preserve-3d;
            cursor: default;
        }

        .strength:hover {
            border-color: var(--color-neon-orange);
            color: var(--color-neon-orange);
            transform: translateZ(16px) scale(1.04);
            box-shadow: 0 0 40px var(--color-glow-orange);
        }

        /* ============================================
                   WORK
                   ============================================ */
        .work {
            background: var(--bg-secondary);
            position: relative;
            overflow: hidden;
        }

        .work::before {
            content: "";
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: var(--color-glow-magenta);
            filter: blur(120px);
            pointer-events: none;
            opacity: 0.3;
        }

        .work-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 28px;
            margin-bottom: 64px;
            position: relative;
            z-index: 2;
        }

        .work h2,
        .stack h2 {
            margin-top: 24px;
            font: 500 clamp(2.6rem, 5vw, 5rem) / 0.9 var(--display);
            letter-spacing: -0.065em;
        }

        .work h2 span {
            color: var(--color-neon-orange);
            text-shadow: 0 0 40px var(--color-glow-orange);
        }

        .work-intro {
            max-width: 280px;
            color: var(--text-secondary);
            font-size: 14px;
            line-height: 1.7;
        }

        .project-list {
            display: grid;
            gap: 20px;
            position: relative;
            z-index: 2;
        }

        .project-card {
            display: grid;
            grid-template-columns: 90px 1fr 150px;
            align-items: center;
            gap: 24px;
            padding: 32px;
            border: 1px solid var(--border-subtle);
            background: var(--bg-primary);
            transition: all 0.5s cubic-bezier(.34, 1.56, .64, 1);
            border-radius: 16px;
            transform-style: preserve-3d;
            perspective: 600px;
            cursor: default;
            position: relative;
        }

        .project-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(255, 107, 53, 0.02), rgba(255, 45, 117, 0.02));
            opacity: 0;
            transition: opacity 0.5s;
            pointer-events: none;
        }

        .project-card:hover {
            border-color: rgba(255, 107, 53, 0.25);
            transform: translateY(-6px) translateZ(30px) rotateX(2deg) rotateY(-2deg);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5), 0 0 60px rgba(255, 107, 53, 0.04);
        }

        .project-card:hover::before {
            opacity: 1;
        }

        .project-card:hover .project-icon {
            transform: rotateY(12deg) rotateX(4deg) translateZ(20px) scale(1.06);
            border-color: var(--color-neon-orange);
            box-shadow: 0 0 40px var(--color-glow-orange);
        }

        .project-icon {
            display: grid;
            width: 56px;
            height: 56px;
            place-items: center;
            border: 1px solid rgba(255, 107, 53, 0.2);
            color: var(--color-neon-orange);
            font-size: 28px;
            transition: all 0.5s cubic-bezier(.34, 1.56, .64, 1);
            border-radius: 14px;
            background: rgba(255, 107, 53, 0.04);
            transform-style: preserve-3d;
        }

        .project-card:nth-child(1) .project-icon {
            content: "💻";
        }
        .project-card:nth-child(2) .project-icon {
            content: "📈";
        }
        .project-card:nth-child(3) .project-icon {
            content: "🌍";
        }
        .project-card:nth-child(4) .project-icon {
            content: "🚀";
        }
        .project-card:nth-child(5) .project-icon {
            content: "🧠";
        }
        .project-card:nth-child(6) .project-icon {
            content: "⚙️";
        }
        .project-card:nth-child(7) .project-icon {
            content: "🛒";
        }

        .project-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
            color: var(--text-muted);
            font: 10px var(--mono);
            letter-spacing: 0.16em;
        }

        .project-meta span:nth-child(2) {
            width: 20px;
            height: 1px;
            background: var(--border-medium);
        }

        .project-title {
            color: var(--text-primary);
            font: 600 22px / 1.2 var(--display);
        }

        .project-description {
            max-width: 680px;
            margin-top: 12px;
            color: var(--text-secondary);
            font-size: 14px;
            line-height: 1.7;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 20px;
        }

        .tag {
            padding: 6px 10px;
            background: var(--bg-card);
            color: var(--color-neon-orange);
            font: 10px var(--mono);
            border-radius: 4px;
            border: 1px solid var(--border-subtle);
            transition: all 0.3s;
        }

        .tag:hover {
            border-color: var(--color-neon-orange);
            box-shadow: 0 0 20px var(--color-glow-orange);
        }

        .project-link {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
            color: var(--color-neon-orange);
            font: 10px var(--mono);
            letter-spacing: 0.16em;
            text-transform: uppercase;
            transition: all 0.3s;
        }

        .project-link a {
            color: var(--color-neon-orange);
            transition: all 0.3s;
        }

        .project-link a:hover {
            text-shadow: 0 0 30px var(--color-glow-orange);
        }

        .live-links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 20px;
            margin-top: 40px;
            padding-top: 24px;
            border-top: 1px solid var(--border-subtle);
            position: relative;
            z-index: 2;
        }

        .live-links .label {
            color: var(--text-muted);
            font: 10px var(--mono);
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }

        .live-links a {
            color: var(--text-secondary);
            font-size: 14px;
            transition: all 0.3s;
            position: relative;
        }

        .live-links a:hover {
            color: var(--color-neon-orange);
            text-shadow: 0 0 30px var(--color-glow-orange);
        }

        /* ============================================
                   STACK
                   ============================================ */
        .stack-grid {
            display: grid;
            grid-template-columns: 0.7fr 1.3fr;
            gap: 64px;
        }

        .stack h2 {
            color: var(--text-primary);
        }

        .stack h2 span {
            color: var(--color-neon-green);
            text-shadow: 0 0 40px rgba(52, 211, 153, 0.2);
        }

        .stack-intro {
            max-width: 260px;
            margin-top: 32px;
            color: var(--text-secondary);
            font-size: 14px;
            line-height: 1.7;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px 40px;
        }

        .skill-head {
            display: flex;
            align-items: end;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .skill-name {
            color: var(--text-primary);
            font: 600 18px var(--display);
        }

        .skill-detail {
            margin-top: 5px;
            color: var(--text-muted);
            font: 10px var(--mono);
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .skill-percent {
            color: var(--color-neon-gold);
            font: 12px var(--mono);
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.2);
        }

        .skill-bar {
            height: 3px;
            background: var(--border-medium);
            border-radius: 4px;
            overflow: hidden;
            transform-style: preserve-3d;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--color-neon-orange), var(--color-neon-magenta));
            border-radius: 4px;
            animation: pulseLine 3.4s ease-in-out infinite;
            box-shadow: 0 0 20px var(--color-glow-orange);
            width: 0;
            transition: width 1.2s cubic-bezier(.34, 1.56, .64, 1);
        }

        .skill-progress.animated {
            animation: none;
        }

        @keyframes pulseLine {
            0%,
            100% {
                opacity: 0.5;
            }
            50% {
                opacity: 1;
            }
        }

        /* ============================================
                   PATH
                   ============================================ */
        .path {
            background: var(--bg-secondary);
            position: relative;
            overflow: hidden;
        }

        .path::before {
            content: "";
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: var(--color-glow-magenta);
            filter: blur(120px);
            pointer-events: none;
            opacity: 0.15;
        }

        .timeline {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 56px;
            position: relative;
            z-index: 2;
        }

        .timeline-card {
            padding: 28px;
            border: 1px solid var(--border-subtle);
            transition: all 0.5s cubic-bezier(.34, 1.56, .64, 1);
            border-radius: 16px;
            background: var(--bg-primary);
            transform-style: preserve-3d;
            perspective: 500px;
            cursor: default;
        }

        .timeline-card:hover {
            border-color: rgba(52, 211, 153, 0.3);
            transform: translateY(-8px) translateZ(30px) rotateX(2deg);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4), 0 0 60px rgba(52, 211, 153, 0.04);
        }

        .timeline-top {
            display: flex;
            justify-content: space-between;
            color: var(--color-neon-gold);
            font: 12px var(--mono);
        }

        .timeline-dot {
            width: 10px;
            height: 10px;
            border: 2px solid var(--color-neon-green);
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(52, 211, 153, 0.2);
            transition: all 0.3s;
        }

        .timeline-card:hover .timeline-dot {
            transform: scale(1.3);
            box-shadow: 0 0 40px rgba(52, 211, 153, 0.4);
        }

        .timeline-card h3 {
            margin-top: 48px;
            color: var(--text-primary);
            font: 22px / 1.15 var(--display);
        }

        .timeline-place {
            margin-top: 8px;
            color: var(--color-neon-green);
            font-size: 14px;
        }

        .timeline-note {
            margin-top: 20px;
            color: var(--text-secondary);
            font-size: 14px;
            line-height: 1.7;
        }

        .timeline-note strong {
            color: var(--text-primary);
        }

        .profile-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-top: 56px;
            padding-top: 28px;
            border-top: 1px solid var(--border-subtle);
            position: relative;
            z-index: 2;
        }

        .detail-title {
            color: var(--color-neon-orange);
            font: 10px var(--mono);
            letter-spacing: 0.2em;
            text-transform: uppercase;
            text-shadow: 0 0 20px var(--color-glow-orange);
        }

        .detail-value {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 12px;
            color: var(--text-secondary);
            font-size: 14px;
        }

        /* ============================================
                   CONTACT
                   ============================================ */
        .contact {
            position: relative;
            overflow: hidden;
        }

        .contact::before {
            content: "";
            position: absolute;
            top: -20%;
            right: -10%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: var(--color-glow-orange);
            filter: blur(120px);
            pointer-events: none;
            opacity: 0.15;
        }

        .contact-orbit {
            position: absolute;
            top: 40px;
            right: -80px;
            width: 320px;
            height: 320px;
            border: 1px solid rgba(255, 107, 53, 0.08);
            border-radius: 50%;
            animation: spinSlow 40s linear infinite;
        }

        .contact-orbit::after {
            content: "";
            position: absolute;
            top: 56px;
            left: 56px;
            width: 210px;
            height: 210px;
            border: 1px solid rgba(255, 45, 117, 0.08);
            border-radius: 50%;
            animation: spinSlow 30s linear infinite reverse;
        }

        @keyframes spinSlow {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .contact-grid {
            position: relative;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: end;
            gap: 56px;
            margin-top: 32px;
            z-index: 2;
        }

        .contact-description {
            max-width: 450px;
            margin-top: 32px;
            color: var(--text-secondary);
            font-size: 16px;
            line-height: 1.8;
        }

        .contact-info {
            padding-left: 32px;
            border-left: 2px solid var(--color-neon-orange);
            box-shadow: -4px 0 40px rgba(255, 107, 53, 0.04);
            transform-style: preserve-3d;
        }

        .contact-label {
            color: var(--text-muted);
            font: 10px var(--mono);
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }

        .email {
            display: block;
            margin-top: 16px;
            color: var(--text-primary);
            font: 600 18px var(--display);
            word-break: break-all;
            transition: all 0.3s;
        }

        .email:hover {
            color: var(--color-neon-orange);
            text-shadow: 0 0 30px var(--color-glow-orange);
        }

        .copy-email {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            background: transparent;
            color: var(--color-neon-gold);
            font: 10px var(--mono);
            letter-spacing: 0.18em;
            text-transform: uppercase;
            padding: 8px 16px;
            border: 1px solid var(--border-subtle);
            border-radius: 60px;
            transition: all 0.4s cubic-bezier(.34, 1.56, .64, 1);
            transform-style: preserve-3d;
        }

        .copy-email:hover {
            border-color: var(--color-neon-gold);
            color: var(--color-neon-gold);
            background: rgba(255, 215, 0, 0.04);
            transform: translateZ(16px) scale(1.04);
            box-shadow: 0 0 40px rgba(255, 215, 0, 0.08);
        }

        .phone {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            color: var(--text-secondary);
            font-size: 14px;
            transition: all 0.3s;
        }

        .phone:hover {
            color: var(--color-neon-orange);
        }

        .phone a {
            color: var(--text-secondary);
            transition: all 0.3s;
        }

        .phone a:hover {
            color: var(--color-neon-orange);
            text-shadow: 0 0 30px var(--color-glow-orange);
        }

        .contact-links {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            margin-top: 80px;
            padding-top: 24px;
            border-top: 1px solid var(--border-subtle);
            position: relative;
            z-index: 2;
        }

        .contact-links a {
            color: var(--text-secondary);
            font: 12px var(--body);
            letter-spacing: 0.16em;
            text-transform: uppercase;
            transition: all 0.3s;
            position: relative;
        }

        .contact-links a:hover {
            color: var(--color-neon-orange);
            text-shadow: 0 0 30px var(--color-glow-orange);
        }

        /* ============================================
                   FOOTER
                   ============================================ */
        footer {
            border-top: 1px solid var(--border-subtle);
            background: var(--bg-secondary);
            position: relative;
            z-index: 2;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 32px 0;
            color: var(--text-muted);
            font: 10px var(--mono);
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }

        /* ============================================
                   RESPONSIVE
                   ============================================ */
        @media (max-width: 900px) {
            .hero {
                min-height: 1050px;
                align-items: flex-start;
            }

            .hero-copy {
                transform: none;
                padding-top: 80px;
            }

            .hero-visual {
                top: auto;
                right: 50%;
                bottom: 40px;
                transform: translateX(50%);
                width: 380px;
                height: 400px;
            }

            .portrait-wrap {
                width: 200px;
                height: 200px;
            }

            .scroll-note {
                display: none;
            }

            .about-grid,
            .stack-grid {
                grid-template-columns: 1fr;
            }

            .project-card {
                grid-template-columns: 70px 1fr;
            }

            .project-link {
                grid-column: 2;
                justify-content: flex-start;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero-orb.orb1 {
                width: 300px;
                height: 300px;
            }
            .hero-orb.orb2 {
                width: 250px;
                height: 250px;
            }
            .stats-grid {
                grid-template-columns: 1fr 1fr;
                gap: 16px;
            }
            .stats-grid .stat-item:last-child {
                grid-column: span 2;
            }
        }

        @media (max-width: 680px) {
            .container {
                width: min(100% - 32px, 1240px);
            }

            .site-header {
                height: 68px;
            }

            .brand {
                font-size: 12px;
            }

            .desktop-nav {
                display: none;
            }

            .menu-button {
                display: block;
            }

            .hero {
                min-height: 860px;
                padding-top: 68px;
            }

            .hero-copy {
                padding-top: 40px;
            }

            .hero h1 {
                font-size: clamp(3rem, 16vw, 5rem);
            }

            .hero-description {
                font-size: 15px;
                min-height: 3rem;
            }

            .hero-visual {
                width: 300px;
                height: 320px;
            }

            .portrait-wrap {
                width: 160px;
                height: 160px;
            }

            .about-text,
            .skills-grid,
            .profile-details {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 70px 0;
            }

            .work-heading {
                display: block;
            }

            .work-intro {
                margin-top: 24px;
            }

            .project-card {
                display: block;
                padding: 24px;
            }

            .project-icon {
                margin-bottom: 24px;
            }

            .project-link {
                margin-top: 24px;
            }

            .timeline {
                grid-template-columns: 1fr;
            }

            .contact-info {
                padding-left: 20px;
            }

            .footer-inner {
                flex-direction: column;
                line-height: 1.7;
                text-align: center;
            }

            .orbit-icon {
                width: 30px;
                height: 30px;
                font-size: 10px;
            }
            @keyframes orbit3D {
                from {
                    transform: translate(-50%, -50%) rotate(0deg) translateX(110px) rotate(0deg) translateZ(10px);
                }
                to {
                    transform: translate(-50%, -50%) rotate(360deg) translateX(110px) rotate(-360deg) translateZ(10px);
                }
            }
            .code-label {
                font-size: 8px;
                padding: 6px 10px;
            }
            .code-label.top {
                top: 10%;
                left: 0%;
            }
            .code-label.bottom {
                right: 0%;
                bottom: 8%;
            }
            .float-shape {
                display: none;
            }
            .stats-grid {
                grid-template-columns: 1fr;
            }
            .stats-grid .stat-item:last-child {
                grid-column: span 1;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }
            *,
            *::before,
            *::after {
                animation-duration: 0.001ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.001ms !important;
            }
        }

        /* ============================================
                   UTILITY — scroll reveal
                   ============================================ */
        .reveal {
            opacity: 0;
            transform: translateY(40px) translateZ(-20px);
            transition: all 0.9s cubic-bezier(.34, 1.56, .64, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0) translateZ(0);
        }

        .reveal-delay-1 {
            transition-delay: 0.1s;
        }
        .reveal-delay-2 {
            transition-delay: 0.2s;
        }
        .reveal-delay-3 {
            transition-delay: 0.3s;
        }
        .reveal-delay-4 {
            transition-delay: 0.4s;
        }
        .reveal-delay-5 {
            transition-delay: 0.5s;
        }
        .reveal-delay-6 {
            transition-delay: 0.6s;
        }

        .section {
            position: relative;
        }
        .section::after {
            content: '';
            position: absolute;
            top: -1px;
            left: 20%;
            right: 20%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--color-neon-orange), var(--color-neon-magenta), transparent);
            filter: blur(4px);
            opacity: 0.3;
            animation: borderGlow 4s ease-in-out infinite alternate;
        }
        @keyframes borderGlow {
            0% {
                opacity: 0.2;
                transform: scaleX(0.8);
            }
            100% {
                opacity: 0.6;
                transform: scaleX(1.2);
            }
        }
    </style>
</head>

<body>
    <!-- Particle canvas removed -->

    <header class="site-header">
        <div class="container header-inner">
            <a href="#top" class="brand" aria-label="Rakesh Varma home">
                <span class="brand-mark">RV</span>
            </a>

            <nav class="desktop-nav" aria-label="Primary navigation">
                <a href="#about">About</a>
                <a href="#work">Projects</a>
                <a href="#stack">Stack</a>
                <a href="#path">Path</a>
                <a href="#contact">Contact</a>
            </nav>

            <button class="menu-button" id="menuButton" aria-label="Open navigation" aria-expanded="false">
                ☰
            </button>
        </div>

        <nav class="mobile-nav" id="mobileNav" aria-label="Mobile navigation">
            <a href="#about">About</a>
            <a href="#work">Projects</a>
            <a href="#stack">Stack</a>
            <a href="#path">Path</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- ========================================== -->
    <!-- HERO                                       -->
    <!-- ========================================== -->
    <section class="hero" id="top">
        <div class="hero-video-wrap">
            <video autoplay muted loop playsinline>
                <source src="./video/add_this_person_to_video.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
            <div class="hero-video-overlay"></div>
        </div>

        <div class="hero-orb orb1"></div>
        <div class="hero-orb orb2"></div>
        <div class="hero-orb orb3"></div>

        <div class="float-shape triangle one"></div>
        <div class="float-shape square two"></div>
        <div class="float-shape circle three"></div>
        <div class="float-shape triangle four"></div>

        <div class="container">
            <div class="hero-copy">
                <div class="eyebrow">
                    <span>Welcome to my portfolio</span>
                </div>
                <h1>
                    Full-Stack <span class="highlight-orange">Developer</span>
                    <span class="muted">&amp;</span> Problem
                    <span class="highlight-green">Solver</span>
                </h1>
                <p class="hero-description">
                    <span class="typewriter" id="typewriter"></span>
                </p>
                <div class="hero-actions">
                    <a href="#contact" class="button-primary">Get in touch</a>
                    <a href="#work" class="button-outline">See my work</a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="portrait-glow"></div>
                <div class="portrait-wrap">
                    <img src="./video/RV.png" alt="Rakesh Varma portrait" />
                </div>
                <div class="code-label top">
                    &lt;/code&gt;
                </div>
                <div class="code-label bottom">
                    &lt;developer&gt;
                </div>
                <div class="orbit-icon">◆</div>
                <div class="dot cyan-dot"></div>
                <div class="dot magenta-dot"></div>
                <div class="dot gold-dot"></div>
            </div>
        </div>

        <div class="scroll-note mono">
            <span>Scroll to explore</span>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- STATS                                      -->
    <!-- ========================================== -->
    <section class="section" style="padding-top:0; border-top: none;">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item reveal reveal-delay-1">
                    <div class="stat-number" data-count="7">0</div>
                    <div class="stat-label">Projects Delivered</div>
                </div>
                <div class="stat-item reveal reveal-delay-2">
                    <div class="stat-number" data-count="3">0</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item reveal reveal-delay-3">
                    <div class="stat-number" data-count="5">0</div>
                    <div class="stat-label">Technologies Mastered</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- ABOUT                                      -->
    <!-- ========================================== -->
    <section class="section about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="reveal">
                    <h2>About <span>Me</span></h2>
                </div>
                <div>
                    <p class="about-text reveal reveal-delay-1">
                        <span>
                            I'm <strong>Rakesh Varma Singothu</strong>, a dedicated full-stack developer with a Bachelor's degree in Computer Science from Acharya Nagarjuna University. My journey in tech is driven by a deep curiosity for how systems work and a passion for building applications that solve real-world problems.
                        </span>
                        <span class="reveal reveal-delay-2">
                            I work across the full stack — from crafting responsive UIs with React.js to building robust APIs with Spring Boot and PHP. I enjoy learning new technologies and applying them to create efficient, user-friendly solutions. My projects range from MLM income systems to full-stack user management platforms.
                        </span>
                    </p>

                    <div class="strengths reveal reveal-delay-3">
                        <div class="strength">Full-Stack Development</div>
                        <div class="strength">React.js</div>
                        <div class="strength">Spring Boot</div>
                        <div class="strength">PHP &amp; MySQL</div>
                        <div class="strength">Java (Maven)</div>
                        <div class="strength">Gemini AI Integration</div>
                        <div class="strength">Quick Learner</div>
                        <div class="strength">Team Player</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- WORK                                       -->
    <!-- ========================================== -->
    <section class="section work" id="work">
        <div class="container">
            <div class="work-heading">
                <div>
                    <div class="section-label">
                        <span></span>
                        Portfolio
                    </div>
                    <h2 class="reveal">Selected <span>Projects</span></h2>
                </div>
                <p class="work-intro reveal reveal-delay-1">
                    A collection of projects showcasing my full-stack development skills and problem-solving approach.
                </p>
            </div>

            <div class="project-list">
                <div class="project-card reveal reveal-delay-1">
                    <div class="project-icon">💻</div>
                    <div>
                        <div class="project-meta">
                            <span>2024</span>
                            <span></span>
                            <span>Full-Stack App</span>
                        </div>
                        <h3 class="project-title">User Management &amp; Database System</h3>
                        <p class="project-description">
                            Built a full-stack CRUD application using <strong>Spring Boot</strong> for the backend and
                            <strong>React.js</strong> for the frontend. Implemented automatic table creation and data insertion
                            using Java (Maven). Enables seamless save, retrieve, edit, and delete operations on database records.
                        </p>
                        <div class="tags">
                            <span class="tag">Spring Boot</span>
                            <span class="tag">React.js</span>
                            <span class="tag">Java</span>
                            <span class="tag">Maven</span>
                            <span class="tag">MySQL</span>
                        </div>
                    </div>
                    <div class="project-link">
                        <span>View</span>
                        <span>→</span>
                    </div>
                </div>

                <div class="project-card reveal reveal-delay-2">
                    <div class="project-icon">📈</div>
                    <div>
                        <div class="project-meta">
                            <span>2024</span>
                            <span></span>
                            <span>MLM Platform</span>
                        </div>
                        <h3 class="project-title">MLM Income Systems (Multiple Architectures)</h3>
                        <p class="project-description">
                            Developed <strong>Matrix Floor</strong>, <strong>Unilevel Auto Upgrade</strong>, and
                            <strong>Two Matrix MLM</strong> projects using PHP, MySQL, and JavaScript. Also built an
                            <strong>Autopool &amp; Level Income</strong> project integrating <strong>Gemini AI</strong>
                            capabilities for intelligent income distribution.
                        </p>
                        <div class="tags">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">Gemini AI</span>
                            <span class="tag">MLM Architecture</span>
                        </div>
                    </div>
                    <div class="project-link">
                        <span>View</span>
                        <span>→</span>
                    </div>
                </div>

                <div class="project-card reveal reveal-delay-3">
                    <div class="project-icon">🌍</div>
                    <div>
                        <div class="project-meta">
                            <span>2024</span>
                            <span></span>
                            <span>Live Production</span>
                        </div>
                        <h3 class="project-title">Live MLM Deployments</h3>
                        <p class="project-description">
                            Successfully deployed MLM income systems to production environments. Live sites include
                            <strong>www.successslp.com</strong> and <strong>www.themythri.com</strong> — both fully
                            functional platforms with real-time income tracking and user management.
                        </p>
                        <div class="tags">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">cPanel</span>
                            <span class="tag">Live Deployment</span>
                            <span class="tag">Production</span>
                        </div>
                    </div>
                    <div class="project-link">
                        <a href="https://www.successslp.com" target="_blank" style="color:var(--color-neon-orange);">Visit Site →</a>
                    </div>
                </div>

                <div class="project-card reveal reveal-delay-4">
                    <div class="project-icon">🚀</div>
                    <div>
                        <div class="project-meta">
                            <span>2025</span>
                            <span></span>
                            <span>Business Website</span>
                        </div>
                        <h3 class="project-title">Global IAI</h3>
                        <p class="project-description">
                            Built a polished business website for <strong>Global IAI</strong> with a modern layout,
                            responsive sections, and clear presentation of services to improve online visibility and user experience.
                        </p>
                        <div class="tags">
                            <span class="tag">PHP</span>
                            <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">Responsive UI</span>
                        </div>
                    </div>
                    <div class="project-link">
                        <a href="https://globaliai.com/" target="_blank" style="color:var(--color-neon-orange);">Visit Site →</a>
                    </div>
                </div>

                <div class="project-card reveal reveal-delay-5">
                    <div class="project-icon">🧠</div>
                    <div>
                        <div class="project-meta">
                            <span>2025</span>
                            <span></span>
                            <span>Business Website</span>
                        </div>
                        <h3 class="project-title">Vision 5CR</h3>
                        <p class="project-description">
                            Developed a professional website for <strong>Vision 5CR</strong> with a strong brand-first layout,
                            clear content sections, and a responsive experience suited for modern business presentation.
                        </p>
                        <div class="tags">
                            <span class="tag">PHP</span>
                            <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">Responsive UI</span>
                        </div>
                    </div>
                    <div class="project-link">
                        <a href="https://vision5cr.com/" target="_blank" style="color:var(--color-neon-orange);">Visit Site →</a>
                    </div>
                </div>

                <div class="project-card reveal reveal-delay-6">
                    <div class="project-icon">⚙️</div>
                    <div>
                        <div class="project-meta">
                            <span>2025</span>
                            <span></span>
                            <span>Business Website</span>
                        </div>
                        <h3 class="project-title">Beptitan</h3>
                        <p class="project-description">
                            Built a modern web presence for <strong>Beptitan</strong> focused on clean navigation,
                            polished visuals, and a smooth experience across desktop and mobile screens.
                        </p>
                        <div class="tags">
                            <span class="tag">PHP</span>
                            <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">Responsive UI</span>
                        </div>
                    </div>
                    <div class="project-link">
                        <a href="https://beptitan.com/" target="_blank" style="color:var(--color-neon-orange);">Visit Site →</a>
                    </div>
                </div>

                <div class="project-card reveal reveal-delay-1">
                    <div class="project-icon">🛒</div>
                    <div>
                        <div class="project-meta">
                            <span>2025</span>
                            <span></span>
                            <span>E-commerce Website</span>
                        </div>
                        <h3 class="project-title">99 Shope</h3>
                        <p class="project-description">
                            Created an online store experience for <strong>99 Shope</strong> with a user-friendly layout,
                            product-focused presentation, and responsive design for better conversion and browsing.
                        </p>
                        <div class="tags">
                            <span class="tag">PHP</span>
                            <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">E-commerce UI</span>
                        </div>
                    </div>
                    <div class="project-link">
                        <a href="https://99shope.com/" target="_blank" style="color:var(--color-neon-orange);">Visit Site →</a>
                    </div>
                </div>
            </div>

            <div class="live-links">
                <span class="label">Explore more:</span>
                <a href="https://github.com/SingothuRakeshVarma" target="_blank">GitHub Profile</a>
                <a href="https://www.successslp.com" target="_blank">successslp.com</a>
                <a href="https://www.themythri.com" target="_blank">themythri.com</a>
                <a href="https://globaliai.com/" target="_blank">globaliai.com</a>
                <a href="https://vision5cr.com/" target="_blank">vision5cr.com</a>
                <a href="https://beptitan.com/" target="_blank">beptitan.com</a>
                <a href="https://99shope.com/" target="_blank">99shope.com</a>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- STACK                                      -->
    <!-- ========================================== -->
    <section class="section stack" id="stack">
        <div class="container">
            <div class="stack-grid">
                <div>
                    <div class="section-label">
                        <span></span>
                        Technical Skills
                    </div>
                    <h2 class="reveal">My <span>Stack</span></h2>
                    <p class="stack-intro reveal reveal-delay-1">
                        Technologies I work with to build scalable, performant web applications.
                    </p>
                </div>

                <div>
                    <div class="skills-grid">
                        <div class="reveal reveal-delay-1">
                            <div class="skill-head">
                                <span class="skill-name">Languages</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-detail">PHP, Java, JavaScript, HTML, CSS</div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width:90%"></div>
                            </div>
                        </div>

                        <div class="reveal reveal-delay-2">
                            <div class="skill-head">
                                <span class="skill-name">Frameworks</span>
                                <span class="skill-percent">85%</span>
                            </div>
                            <div class="skill-detail">Spring Boot, React.js</div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width:85%"></div>
                            </div>
                        </div>

                        <div class="reveal reveal-delay-3">
                            <div class="skill-head">
                                <span class="skill-name">Database</span>
                                <span class="skill-percent">80%</span>
                            </div>
                            <div class="skill-detail">MySQL</div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width:80%"></div>
                            </div>
                        </div>

                        <div class="reveal reveal-delay-4">
                            <div class="skill-head">
                                <span class="skill-name">Tools &amp; AI</span>
                                <span class="skill-percent">75%</span>
                            </div>
                            <div class="skill-detail">Gemini AI, Maven, MS Office, Windows</div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width:75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- PATH                                       -->
    <!-- ========================================== -->
    <section class="section path" id="path">
        <div class="container">
            <div class="section-label">
                <span></span>
                Journey
            </div>
            <h2 style="font:500 clamp(2.6rem,5vw,5rem)/0.9 var(--display);letter-spacing:-0.065em;margin-top:24px;" class="reveal">
                My <span style="color:var(--color-neon-green);text-shadow:0 0 40px rgba(52,211,153,0.2);">Path</span>
            </h2>

            <div class="timeline">
                <div class="timeline-card reveal reveal-delay-1">
                    <div class="timeline-top">
                        <span>2023 - Present</span>
                        <div class="timeline-dot"></div>
                    </div>
                    <h3>Full-Stack Developer</h3>
                    <p class="timeline-place">Independent &amp; Freelance</p>
                    <p class="timeline-note">
                        Building full-stack applications with Spring Boot, React.js, PHP, and MySQL. Developed MLM income
                        systems, user management platforms, and integrated Gemini AI capabilities into production-grade
                        projects. Live deployments at successslp.com and themythri.com.
                    </p>
                </div>

                <div class="timeline-card reveal reveal-delay-2">
                    <div class="timeline-top">
                        <span>2018 - 2025</span>
                        <div class="timeline-dot"></div>
                    </div>
                    <h3>B.Sc Computer Science</h3>
                    <p class="timeline-place">Acharya Nagarjuna University, Guntur</p>
                    <p class="timeline-note">
                        Graduated with <strong>73%</strong>. Built a strong foundation in programming, data structures,
                        algorithms, and software engineering principles. Developed early projects in Java, PHP, and MySQL.
                    </p>
                </div>

                <div class="timeline-card reveal reveal-delay-3">
                    <div class="timeline-top">
                        <span>2016 - 2018</span>
                        <div class="timeline-dot"></div>
                    </div>
                    <h3>Intermediate</h3>
                    <p class="timeline-place">Vyshnavi Junior College, Tenali</p>
                    <p class="timeline-note">
                        Completed with <strong>60%</strong>. Developed analytical and problem-solving skills that
                        laid the groundwork for my journey into computer science and software development.
                    </p>
                </div>
            </div>

            <div class="profile-details">
                <div class="reveal reveal-delay-1">
                    <div class="detail-title">📍 Location</div>
                    <div class="detail-value">Andhra Pradesh, India</div>
                </div>
                <div class="reveal reveal-delay-2">
                    <div class="detail-title">🎓 Education</div>
                    <div class="detail-value">B.Sc Computer Science · 2025</div>
                </div>
                <div class="reveal reveal-delay-3">
                    <div class="detail-title">📅 Date of Birth</div>
                    <div class="detail-value">01 June 2001</div>
                </div>
                <div class="reveal reveal-delay-4">
                    <div class="detail-title">🌐 Languages</div>
                    <div class="detail-value">Telugu, English</div>
                </div>
                <div class="reveal reveal-delay-5">
                    <div class="detail-title">🎯 Strengths</div>
                    <div class="detail-value">Quick Learner · Analytical · Dedicated · Team Player</div>
                </div>
                <div class="reveal reveal-delay-6">
                    <div class="detail-title">🎵 Hobbies</div>
                    <div class="detail-value">Listening to songs · Playing Cricket</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- CONTACT                                    -->
    <!-- ========================================== -->
    <section class="section contact" id="contact">
        <div class="contact-orbit"></div>
        <div class="container">
            <h2 class="reveal">Let's Build Something <span>Extraordinary</span></h2>

            <p class="contact-description reveal reveal-delay-1">
                I'm always open to discussing new projects, creative ideas, or opportunities to contribute to your team.
                Whether you need a full-stack developer, technical consultation, or collaboration on an exciting project,
                let's connect and create something amazing together!
            </p>

            <div class="contact-grid">
                <div></div>
                <div class="contact-info reveal reveal-delay-2">
                    <p class="contact-label">Email</p>
                    <a href="mailto:Rakeshvarmasingothu@outlook.com" class="email">Rakeshvarmasingothu@outlook.com</a>
                    <button class="copy-email" onclick="navigator.clipboard.writeText('Rakeshvarmasingothu@outlook.com')">
                        <span>📋 Copy Email</span>
                    </button>

                    <p class="phone" style="margin-top:32px;">
                        <span>📞</span>
                        <span>+91 99633 32593</span>
                    </p>

                    <p class="phone" style="margin-top:16px;">
                        <span>📍</span>
                        <span>Andhra Pradesh, India</span>
                    </p>

                    <p class="phone" style="margin-top:16px;">
                        <span>🐙</span>
                        <a href="https://github.com/SingothuRakeshVarma" target="_blank" style="color:var(--text-secondary);">github.com/SingothuRakeshVarma</a>
                    </p>
                </div>
            </div>

            <div class="contact-links">
                <a href="https://github.com/SingothuRakeshVarma" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a href="https://www.successslp.com" target="_blank" rel="noopener noreferrer">successslp.com</a>
                <a href="https://www.themythri.com" target="_blank" rel="noopener noreferrer">themythri.com</a>
                <a href="https://globaliai.com/" target="_blank" rel="noopener noreferrer">globaliai.com</a>
                <a href="https://vision5cr.com/" target="_blank" rel="noopener noreferrer">vision5cr.com</a>
                <a href="https://beptitan.com/" target="_blank" rel="noopener noreferrer">beptitan.com</a>
                <a href="https://99shope.com/" target="_blank" rel="noopener noreferrer">99shope.com</a>
                <a href="mailto:Rakeshvarmasingothu@outlook.com">Email</a>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- FOOTER                                     -->
    <!-- ========================================== -->
    <footer>
        <div class="container footer-inner">
            <span>&copy; 2026 Rakesh Varma Singothu. All rights reserved.</span>
            <span>Full-Stack Developer | Built with 💙 &amp; JavaScript</span>
        </div>
    </footer>

    <script>
        // ============================================
        // TYPEWRITER EFFECT
        // ============================================
        (function() {
            const el = document.getElementById('typewriter');
            const phrases = [
                'I build scalable web applications using PHP, Java (Spring Boot), React.js, and MySQL.',
                'Passionate about crafting clean, efficient code and delivering digital solutions.',
                'Let\'s build something great together.'
            ];
            let phraseIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let currentText = '';

            function type() {
                const fullText = phrases[phraseIndex];
                if (isDeleting) {
                    currentText = fullText.substring(0, charIndex--);
                } else {
                    currentText = fullText.substring(0, charIndex++);
                }
                el.textContent = currentText;

                let speed = isDeleting ? 40 : 80;
                if (!isDeleting && charIndex === fullText.length) {
                    speed = 2000;
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                    speed = 400;
                }
                setTimeout(type, speed);
            }
            type();
        })();

        // ============================================
        // ANIMATED COUNTERS
        // ============================================
        (function() {
            const counters = document.querySelectorAll('.stat-number');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.dataset.animated) {
                        entry.target.dataset.animated = 'true';
                        const target = parseInt(entry.target.dataset.count);
                        let current = 0;
                        const increment = target / 60;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                entry.target.textContent = target;
                                clearInterval(timer);
                            } else {
                                entry.target.textContent = Math.floor(current);
                            }
                        }, 20);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(c => observer.observe(c));
        })();

        // ============================================
        // MOBILE MENU
        // ============================================
        const menuButton = document.getElementById('menuButton');
        const mobileNav = document.getElementById('mobileNav');

        menuButton.addEventListener('click', () => {
            const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', !isOpen);
            mobileNav.classList.toggle('open');
        });

        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menuButton.setAttribute('aria-expanded', 'false');
                mobileNav.classList.remove('open');
            });
        });

        // ============================================
        // SMOOTH SCROLL
        // ============================================
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // ============================================
        // ACTIVE NAV HIGHLIGHT
        // ============================================
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('.section, #top');
            const navLinks = document.querySelectorAll('.desktop-nav a');

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionBottom = sectionTop + section.offsetHeight;
                const scrollPosition = window.scrollY;

                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + section.id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });

        // ============================================
        // SCROLL REVEAL
        // ============================================
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));

        // ============================================
        // 3D TILT ON PROJECT CARDS
        // ============================================
        const cards = document.querySelectorAll('.project-card');

        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = ((y - centerY) / centerY) * -4;
                const rotateY = ((x - centerX) / centerX) * 4;
                card.style.transform =
                    `translateY(-6px) translateZ(30px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0px) translateZ(0px) rotateX(0deg) rotateY(0deg)';
            });
        });

        // ============================================
        // PARALLAX 3D on hero-visual
        // ============================================
        const heroVisual = document.querySelector('.hero-visual');
        if (heroVisual) {
            document.addEventListener('mousemove', (e) => {
                const x = (e.clientX / window.innerWidth - 0.5) * 8;
                const y = (e.clientY / window.innerHeight - 0.5) * 8;
                heroVisual.style.transform =
                    `translateY(-10px) rotateY(${x}deg) rotateX(${-y}deg)`;
            });
        }

        // ============================================
        // SKILL BARS
        // ============================================
        const skillBars = document.querySelectorAll('.skill-progress');
        const barObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.width = entry.target.style.width || '90%';
                }
            });
        }, { threshold: 0.3 });

        skillBars.forEach(bar => barObserver.observe(bar));

        // ============================================
        // VIDEO – click to unmute
        // ============================================
        const video = document.querySelector('.hero-video-wrap video');
        if (video) {
            document.addEventListener('click', () => {
                if (video.muted) {
                    video.muted = false;
                    video.play().catch(() => {});
                }
            }, { once: false });
        }

        console.log('🚀 Rakesh Varma — Full-Stack Developer Portfolio');
        console.log('🎥 Video background only in hero section');
        console.log('✨ Particle canvas removed for cleaner experience');
    </script>
</body>

</html>