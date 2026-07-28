<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ $title ?? 'Rotary Club of Maputo Metro — Pessoas de Ação, a Servir com Propósito' }}</title>
        <meta name="description" content="O Rotary Club of Maputo Metro (Distrito 9400) é um clube vibrante de líderes, profissionais e voluntários dedicados, unidos pelo compromisso de criar mudanças positivas e duradouras em Maputo e em todo o Moçambique.">
        
        <link rel="icon" href="/favicon.ico" sizes="any">
        
        <!-- Site CSS -->
        <link rel="stylesheet" href="/css/rc.css">
        <link rel="stylesheet" href="/css/rc-main.css">
        
        <!-- Laravel Vite -->
        <!-- Removed Vite as it fails to build on Node v16. Using static CSS instead. -->
    </head>
    <body class="__variable_7d7e1d __variable_8b3a0b">
        <x-header />
        
        <main>
            {{ $slot }}
        </main>
        
        <x-footer />
    </body>
</html>
