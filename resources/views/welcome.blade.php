<x-layouts.app>
    <div class="page-in">
        <div class="layout-hero">
            <div class="layout-hero-content">
                <div class="pill-eyebrow">Rotary International Distrito 9400</div>
                <h1>{!! nl2br(e(__('Pessoas de Ação, a Servir com Propósito'))) !!}</h1>
                <p class="lead">{{ __('O Rotary Club of Maputo Metro é um clube vibrante de líderes, profissionais e voluntários dedicados, unidos pelo compromisso de criar mudanças positivas e duradouras em nossa comunidade.') }}</p>
                <div class="layout-hero-ctas">
                    <a class="btn btn-hero-primary" href="/get-involved">{{ __('Quero Envolver-me') }}</a>
                    <a class="btn btn-hero-outline" href="/projects">{{ __('Conhecer Projetos') }}</a>
                </div>
            </div>
            <div class="layout-hero-image">
                <img src="https://www.rcmaputometro.com/images/gallery/photo-43.jpg" alt="Membros do Rotary Club of Maputo Metro" />
            </div>
        </div>
        
        <div class="layout-stats-band">
            <div class="layout-stat">
                <div class="num">1.2M+</div>
                <div class="label">{{ __('MEMBROS NO MUNDO') }}<br>{{ __('Uma rede global de impacto humanitário') }}</div>
            </div>
            <div class="layout-stat-divider"></div>
            <div class="layout-stat">
                <div class="num">2023</div>
                <div class="label">{{ __('FUNDAÇÃO EM MAPUTO') }}<br>{{ __('Iniciando uma nova era de serviço local') }}</div>
            </div>
            <div class="layout-stat-divider"></div>
            <div class="layout-stat">
                <div class="num">6+</div>
                <div class="label">{{ __('EVENTOS REALIZADOS') }}<br>{{ __('Projetos que já tocam vidas moçambicanas') }}</div>
            </div>
        </div>
        
        <!-- Projetos em destaque -->
        <div class="section layout-featured-section">
            <div class="layout-section-head">
                <div>
                    <div class="eyebrow-text">{{ __('EM DESTAQUE') }}</div>
                    <h2>{{ __('Projetos que fazem a diferença') }}</h2>
                </div>
                <a class="btn-text-link" href="/projects">{{ __('Ver todos os projetos') }} <span>→</span></a>
            </div>
            
            <div class="layout-featured-grid">
                <!-- Left Feature Card -->
                <div class="layout-feat-card-main">
                    <img class="bg-img" src="https://www.rcmaputometro.com/images/events/wash-khongolote/05.jpg" alt="Projeto WASH" />
                    <div class="overlay"></div>
                    <div class="content">
                        <span class="pill-tag-yellow">{{ __('Água, Saneamento e Higiene') }}</span>
                        <h3>{{ __('Projeto WASH — Escola Básica de Khongolote') }}</h3>
                        <p>{{ __('Instalação de furo de água, sistemas de saneamento e educação em higiene para beneficiar diretamente centenas de alunos e a comunidade local.') }}</p>
                        <a href="/projects/wash-khongolote" class="btn btn-white">{{ __('Ler História do Projeto') }}</a>
                    </div>
                </div>
                
                <!-- Right Info Card -->
                <div class="layout-feat-card-side">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3>{{ __('Impacto Sustentável') }}</h3>
                    <p>{{ __('Nossos projetos não são apenas doações; são investimentos em infraestrutura e educação que capacitam a comunidade a prosperar por conta própria a longo prazo.') }}</p>
                    <div class="bottom-stat">
                        <div class="stat-circle">500+</div>
                        <div class="stat-text">{!! __('Vidas impactadas em<br>Khongolote') !!}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA global -->
        <div class="section layout-cta-section">
            <div class="layout-cta-box">
                <div class="circles-bg">
                    <div class="circle c1"></div>
                    <div class="circle c2"></div>
                    <div class="circle c3"></div>
                </div>
                <div class="content">
                    <h3>{{ __('Junte-se a nós') }}</h3>
                    <p>{{ __('Quer pretenda servir a sua comunidade, colaborar em projetos de impacto, ou apoiar a nossa missão através de parcerias ou doações, será muito bem-vindo(a). Juntos, podemos construir amanhãs melhores.') }}</p>
                </div>
                <div class="action">
                    <a class="btn btn-yellow-large" href="/get-involved">{{ __('Quero Envolver-me') }}</a>
                </div>
            </div>
        </div>
        
        <!-- Últimos eventos -->
        <div class="section layout-events-section">
            <div class="layout-section-head">
                <div>
                    <div class="eyebrow-text">{{ __('ATIVIDADE RECENTE') }}</div>
                    <h2>{{ __('Últimos eventos do clube') }}</h2>
                </div>
                <a class="btn btn-outline-gray" href="/events">{{ __('Ver todos os eventos') }}</a>
            </div>
            
            <div class="layout-events-list">
                <div class="layout-event-card">
                    <div class="media">
                        <img src="https://www.rcmaputometro.com/images/events/doacao-alimentos/02.jpg" alt="Doação de Alimentos" />
                        <div class="date-box">
                            <span class="d">25</span>
                            <span class="m">ABR</span>
                            <span class="y">2026</span>
                        </div>
                    </div>
                    <div class="info">
                        <h3>{{ __('Doação de Alimentos, Roupas e Cosméticos') }}</h3>
                        <p class="location">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            {{ __('Dom Orione Maputo Centre — 10h00 às 13h00') }}
                        </p>
                        <div class="actions">
                            <a href="#" class="btn-action"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> {{ __('Ver local no mapa') }}</a>
                            <a href="#" class="btn-action"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg> {{ __('Ver fotos (8)') }}</a>
                        </div>
                    </div>
                </div>
                
                <div class="layout-event-card">
                    <div class="media">
                        <img src="https://www.rcmaputometro.com/images/events/dia-da-crianca/01.jpg" alt="Dia da Criança" />
                        <div class="date-box">
                            <span class="d">01</span>
                            <span class="m">JUN</span>
                            <span class="y">2026</span>
                        </div>
                    </div>
                    <div class="info">
                        <h3>{{ __('Dia da Criança — "A Minha História Tem Cores"') }}</h3>
                        <p class="desc">{{ __('Pintura, palhaço, danças culturais, exposição de arte infantil e leilão solidário para as crianças do centro Dom Orione.') }}</p>
                        <p class="location">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            {{ __('Zimpeto, Maputo — 10h00') }}
                        </p>
                        <div class="actions">
                            <a href="#" class="btn-action"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> {{ __('Ver local no mapa') }}</a>
                            <a href="#" class="btn-action"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg> {{ __('Ver fotos (8)') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
