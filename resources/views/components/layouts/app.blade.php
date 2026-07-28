<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="sol-theme">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ $title ?? 'Rotary Club of Maputo Metro — Pessoas de Ação, a Servir com Propósito' }}</title>
        <meta name="description" content="O Rotary Club of Maputo Metro (Distrito 9400) é um clube vibrante de líderes, profissionais e voluntários dedicados, unidos pelo compromisso de criar mudanças positivas e duradouras em Maputo e em todo o Moçambique.">
        
        <link rel="icon" href="/favicon.ico" sizes="any">
        
        <!-- Google Fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- Site CSS -->
        <link rel="stylesheet" href="/css/rc-main.css">
        <link rel="stylesheet" href="/css/enhancements.css">
        
        <!-- Alpine.js for interactivity -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        <style>
            /* Force the background and text color immediately to prevent flash */
            html.sol-theme {
                background: #060b18;
                color: #e2e8f0;
            }
            body {
                background-color: var(--bg-primary) !important;
                background-image: var(--bg-pattern) !important;
                background-attachment: fixed !important;
            }
        </style>
    </head>
    <body>
        <x-header />
        
        <main>
            {{ $slot }}
        </main>
        
        <x-footer />
        
        <!-- Scroll handler for sticky header -->
        <script>
            document.addEventListener('scroll', function() {
                var header = document.querySelector('header.site');
                if (window.scrollY > 50) {
                    header.classList.add('scrolled-pill');
                } else {
                    header.classList.remove('scrolled-pill');
                }
            });
        </script>
    </body>
</html>
