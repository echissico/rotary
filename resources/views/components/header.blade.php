<header class="site" x-data="{ open: false }" :class="{ 'scrolled': false }">
    <a href="/" class="logo-lockup" aria-label="Página inicial">
        <div class="logo-text">
            <div class="brand">Rotary</div>
            <div class="club">Club of Maputo Metro</div>
        </div>
        <img alt="Rotary Club of Maputo Metro" width="100" height="42" decoding="async" class="logo-mark-img" style="color:transparent" src="https://www.rcmaputometro.com/_next/image?url=%2Fimages%2Flogo1.png&w=256&q=75"/>
    </a>
    
    <nav class="main" :class="{ 'open': open }">
        <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">{{ __('Início') }}</a>
        <a class="{{ request()->is('about-us') ? 'active' : '' }}" href="/about-us">{{ __('Sobre Nós') }}</a>
        <a class="{{ request()->is('projects') ? 'active' : '' }}" href="/projects">{{ __('Projetos') }}</a>
        <a class="{{ request()->is('events') ? 'active' : '' }}" href="/events">{{ __('Eventos') }}</a>
        <a class="{{ request()->is('news') ? 'active' : '' }}" href="/news">{{ __('Notícias') }}</a>
        <a class="{{ request()->is('contact') ? 'active' : '' }}" href="/contact">{{ __('Contactos') }}</a>
        <a class="nav-cta {{ request()->is('get-involved') ? 'active' : '' }}" href="/get-involved">{{ __('Envolver-se') }}</a>
    </nav>
    
    <div style="display:flex;align-items:center;gap:8px">
        <div class="lang-toggle" role="group" aria-label="Idioma / Language">
            <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}" style="text-decoration:none;padding:4px 8px;font-size:12px;font-weight:600;border-radius:4px;display:inline-block">EN</a>
            <a href="{{ route('lang.switch', 'pt') }}" class="{{ app()->getLocale() === 'pt' ? 'active' : '' }}" style="text-decoration:none;padding:4px 8px;font-size:12px;font-weight:600;border-radius:4px;display:inline-block">PT</a>
        </div>
        <button class="theme-toggle" onclick="toggleTheme()" aria-label="Alternar modo escuro/claro" title="Alternar tema">
            <span id="theme-icon">🌙</span>
        </button>
        <button class="burger" :class="{ 'open': open }" @click="open = !open" aria-label="Abrir menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
