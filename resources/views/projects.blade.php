<x-layouts.app title="Projetos - Rotary Club of Maputo Metro">
    <div class="page-in">
        <div class="section tight">
            <div class="eyebrow">Projetos</div>
            <h1 style="font-size:28px">Onde o nosso serviço acontece</h1>
            <p class="lead" style="margin-top:10px">Iniciativas comunitárias ativas e concluídas, lideradas pelos nossos membros e parceiros.</p>
        </div>
        
        <div class="section" style="padding-top:0">
            <!-- Os botões de filtro (estáticos para já) -->
            <div class="filter-row">
                <button class="filter-chip active" aria-pressed="true"><span class="filter-chip-bg"></span><span class="filter-chip-label">Todos</span></button>
                <button class="filter-chip" aria-pressed="false"><span class="filter-chip-label">Água, Saneamento e Higiene</span></button>
                <button class="filter-chip" aria-pressed="false"><span class="filter-chip-label">Saúde</span></button>
                <button class="filter-chip" aria-pressed="false"><span class="filter-chip-label">Educação</span></button>
                <button class="filter-chip" aria-pressed="false"><span class="filter-chip-label">Juventude</span></button>
                <button class="filter-chip" aria-pressed="false"><span class="filter-chip-label">Ativos</span></button>
                <button class="filter-chip" aria-pressed="false"><span class="filter-chip-label">Concluídos</span></button>
            </div>
            
            <div class="reveal in" style="transition-delay:0ms">
                <h2 class="sr-only">Lista de projetos</h2>
                <div class="card-grid four">
                    <a class="proj-card" href="/projects/wash-khongolote">
                        <div class="photo-frame">
                            <img alt="Projeto WASH — Escola Básica de Khongolote" loading="lazy" decoding="async" class="w-full h-full object-cover" style="position:absolute;inset:0" src="https://www.rcmaputometro.com/images/events/wash-khongolote/05.jpg"/>
                        </div>
                        <div class="body">
                            <span class="tagchip cat-completed">Água, Saneamento e Higiene</span>
                            <h3>Projeto WASH — Escola Básica de Khongolote</h3>
                            <p>Furo de água, saneamento e educação em higiene para os alunos e a comunidade de Khongolote.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
