<x-layouts.app>
    <div class="page-in sol-layout">
        
        <!-- HERO SECTION (SOL Style: Typography focused, dark grid) -->
        <div class="sol-hero-section">
            <div class="sol-container sol-hero-grid">
                <div class="sol-hero-content">
                    <div class="sol-pill-eyebrow">
                        <span class="dot"></span> DISTRITO 9400
                    </div>
                    <h1>
                        {!! nl2br(e(__('Pessoas de Ação.'))) !!}<br>
                        <span class="sol-gold-text">{!! nl2br(e(__('Servir com Propósito.'))) !!}</span>
                    </h1>
                    <p class="sol-lead">
                        {{ __('O Rotary Club of Maputo Metro é um clube vibrante de líderes, profissionais e voluntários dedicados, unidos pelo compromisso de criar mudanças positivas e duradouras em nossa comunidade.') }}
                    </p>
                    <div class="sol-hero-actions">
                        <a href="/get-involved" class="btn-sol-primary">{{ __('Quero Envolver-me') }} <span>→</span></a>
                        <a href="/projects" class="btn-sol-outline">{{ __('Conhecer Projetos') }}</a>
                    </div>
                </div>
                <div class="sol-hero-image-wrapper">
                    <img src="https://www.rcmaputometro.com/images/gallery/photo-43.jpg" alt="Membros do Rotary Club of Maputo Metro" class="sol-hero-img" />
                    <div class="sol-hero-img-glow"></div>
                </div>
            </div>
        </div>
        
        <!-- CLIENTS / TRUST BAND -->
        <div class="sol-trust-section">
            <div class="sol-container">
                <div class="sol-trust-eyebrow">{{ __('UMA REDE GLOBAL') }}</div>
                <h2>{{ __('O poder da nossa comunidade') }}</h2>
                <div class="sol-trust-logos">
                    <!-- Subtle text placeholders acting as logos for now -->
                    <span>Rotary International</span>
                    <span>Distrito 9400</span>
                    <span>Maputo Metro</span>
                    <span>Pessoas de Ação</span>
                </div>
            </div>
        </div>
        
        <!-- BENTO GRID (The SOL Advantage Style) -->
        <div class="sol-bento-section">
            <div class="sol-container">
                <div class="sol-bento-header">
                    <div class="sol-trust-eyebrow">{{ __('A NOSSA FORÇA') }}</div>
                    <h2>{{ __('O impacto do nosso clube em Moçambique e no mundo.') }}</h2>
                </div>
                
                <div class="sol-bento-grid">
                    
                    <!-- Card 1: Membros (Growth chart style) -->
                    <div class="sol-bento-card bento-large">
                        <div class="bento-inner">
                            <div class="bento-top">
                                <div class="bento-icon">↗</div>
                                <span>{{ __('Rede Global') }}</span>
                            </div>
                            <div class="bento-chart">
                                <!-- Abstract curved line simulating growth -->
                                <svg viewBox="0 0 400 100" preserveAspectRatio="none"><path d="M0 80 Q 100 20, 200 60 T 400 10" fill="none" stroke="var(--sol-gold)" stroke-width="3"/></svg>
                            </div>
                            <div class="bento-bottom">
                                <div class="bento-stat">1.2M+</div>
                                <h3>{{ __('MEMBROS NO MUNDO') }}</h3>
                                <p>{{ __('Uma rede global de impacto humanitário, dedicados a resolver os problemas mais prementes do mundo.') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2: Fundação (Timeline style) -->
                    <div class="sol-bento-card">
                        <div class="bento-inner">
                            <div class="bento-top">
                                <div class="bento-icon">⏱</div>
                                <span>{{ __('Histórico') }}</span>
                            </div>
                            <div class="bento-timeline">
                                <div class="tl-item"><span class="tl-dot"></span> 2023 - {{ __('Fundação do clube') }}</div>
                                <div class="tl-item"><span class="tl-dot"></span> 2024 - {{ __('Primeiros projetos') }}</div>
                                <div class="tl-item"><span class="tl-dot active"></span> {{ date('Y') }} - {{ __('Expansão de impacto') }}</div>
                            </div>
                            <div class="bento-bottom mt-auto">
                                <div class="bento-stat">2023</div>
                                <h3>{{ __('FUNDAÇÃO EM MAPUTO') }}</h3>
                                <p>{{ __('Iniciando uma nova era de serviço local.') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 3: WASH Project (Image background style) -->
                    <div class="sol-bento-card bento-large has-image">
                        <img class="bento-bg" src="https://www.rcmaputometro.com/images/events/wash-khongolote/05.jpg" alt="Projeto WASH" />
                        <div class="bento-overlay"></div>
                        <div class="bento-inner relative z-10">
                            <div class="bento-top">
                                <span class="sol-pill-eyebrow small">{{ __('EM DESTAQUE') }}</span>
                            </div>
                            <div class="bento-bottom mt-auto">
                                <h3>{{ __('Projeto WASH — Khongolote') }}</h3>
                                <p>{{ __('Instalação de furo de água, sistemas de saneamento e educação em higiene para beneficiar centenas de alunos.') }}</p>
                                <a href="/projects/wash-khongolote" class="btn-text-gold mt-4">{{ __('Ler História do Projeto') }} <span>→</span></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 4: Eventos -->
                    <div class="sol-bento-card">
                        <div class="bento-inner">
                            <div class="bento-top">
                                <div class="bento-icon">⚡</div>
                                <span>{{ __('Ação Constante') }}</span>
                            </div>
                            <div class="bento-bottom mt-auto">
                                <div class="bento-stat">6+</div>
                                <h3>{{ __('EVENTOS REALIZADOS') }}</h3>
                                <p>{{ __('Projetos que já tocam vidas moçambicanas através de ação direta.') }}</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- CTA SECTION -->
        <div class="sol-cta-section">
            <div class="sol-container">
                <div class="sol-cta-box">
                    <div class="cta-content">
                        <h2>{{ __('Junte-se a nós') }}</h2>
                        <p>{{ __('Quer pretenda servir a sua comunidade, colaborar em projetos de impacto, ou apoiar a nossa missão através de parcerias ou doações, será muito bem-vindo(a). Juntos, podemos construir amanhãs melhores.') }}</p>
                        <a class="btn-sol-primary mt-6" href="/get-involved">{{ __('Quero Envolver-me') }} <span>→</span></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</x-layouts.app>
