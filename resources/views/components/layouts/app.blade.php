<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
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
        
        <!-- Prevent FOUC: set theme before render -->
        <script>
            (function() {
                var saved = localStorage.getItem('rc-theme');
                var pref = saved || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
                document.documentElement.setAttribute('data-theme', pref);
            })();
        </script>
        
        <!-- Alpine.js for interactivity -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
        <x-header />
        
        <main>
            {{ $slot }}
        </main>
        
        <x-footer />
        
        <!-- Theme toggle script -->
        <script>
            function toggleTheme() {
                var html = document.documentElement;
                var current = html.getAttribute('data-theme');
                var next = current === 'dark' ? 'light' : 'dark';
                html.setAttribute('data-theme', next);
                localStorage.setItem('rc-theme', next);
                updateThemeIcon(next);
            }
            
            function updateThemeIcon(theme) {
                var icon = document.getElementById('theme-icon');
                if (icon) {
                    icon.textContent = theme === 'dark' ? '☀️' : '🌙';
                }
            }
            
            // Set icon on load
            document.addEventListener('DOMContentLoaded', function() {
                var theme = document.documentElement.getAttribute('data-theme') || 'light';
                updateThemeIcon(theme);
            });
        </script>
    </body>
</html>
