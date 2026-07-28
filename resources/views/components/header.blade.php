<header class="site" x-data="{ open: false }" :class="{ 'scrolled': false }">
    <a href="https://admin.rcmaputometro.com/login" class="logo-lockup" aria-label="Acesso ao painel de administração">
        <div class="logo-text">
            <div class="brand">Rotary</div>
            <div class="club">Club of Maputo Metro</div>
        </div>
        <img alt="Rotary Club of Maputo Metro" width="100" height="42" decoding="async" class="logo-mark-img" style="color:transparent" src="https://www.rcmaputometro.com/_next/image?url=%2Fimages%2Flogo1.png&w=256&q=75"/>
    </a>
    
    <nav class="main" :class="{ 'open': open }">
        <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Início</a>
        <a class="{{ request()->is('about-us') ? 'active' : '' }}" href="/about-us">Sobre Nós</a>
        <a class="{{ request()->is('projects') ? 'active' : '' }}" href="/projects">Projetos</a>
        <a class="{{ request()->is('events') ? 'active' : '' }}" href="/events">Eventos</a>
        <a class="{{ request()->is('news') ? 'active' : '' }}" href="/news">Notícias</a>
        <a class="{{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contactos</a>
        <a class="nav-cta" href="/get-involved">Envolver-se</a>
    </nav>
    
    <div style="display:flex;align-items:center;gap:10px">
        <div class="lang-toggle" role="group" aria-label="Idioma / Language">
            <button class="" aria-pressed="false">EN</button>
            <button class="active" aria-pressed="true">PT</button>
        </div>
        <button class="burger" :class="{ 'open': open }" @click="open = !open" aria-label="Abrir menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
