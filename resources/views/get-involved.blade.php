<x-layouts.app title="Envolver-se - Rotary Club of Maputo Metro">
    <div class="page-in">
        <div class="gi-hero">
            <h1>Junte-se ao Rotary Club of Maputo Metro e apoie impacto real na comunidade</h1>
            <p class="lead">Quer tornar-se membro, voluntariar, doar ou apoiar com serviços ou bens — diga-nos como, e a nossa equipa entrará em contacto.</p>
        </div>
        <div class="reveal in" style="transition-delay:0ms">
            <h2 class="sr-only">O que oferecemos</h2>
            <div class="gi-trust-row">
                <div class="gi-trust-card">
                    <h3>Serviço à Comunidade</h3>
                    <p>Projetos locais concretos que respondem a necessidades reais.</p>
                    <span class="card-toggle-hint"><span>Ler mais</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                </div>
                <div class="gi-trust-card">
                    <h3>Rede de Profissionais</h3>
                    <p>Ligue-se a líderes de diversas áreas comprometidos com o serviço.</p>
                    <span class="card-toggle-hint"><span>Ler mais</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                </div>
                <div class="gi-trust-card">
                    <h3>Impacto Sustentável</h3>
                    <p>Iniciativas de longo prazo desenhadas com, e para, as pessoas que servem.</p>
                    <span class="card-toggle-hint"><span>Ler mais</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                </div>
            </div>
        </div>
        <div class="form-wrap">
            <form>
                <div class="form-group">
                    <label for="gi-name"><span>Nome completo</span> <span class="req">*</span></label>
                    <input id="gi-name" type="text" placeholder="ex: Ana Machava" required name="name"/>
                </div>
                <div class="form-group">
                    <label for="gi-email"><span>Endereço de email</span> <span class="req">*</span></label>
                    <input id="gi-email" type="email" placeholder="ex: ana@exemplo.com" required name="email"/>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="gi-origin"><span>País de origem</span> <span>(recomendado)</span></label>
                        <select id="gi-origin" name="origin">
                            <option value="MZ" selected>Moçambique</option>
                            <option value="ZA">África do Sul</option>
                            <option value="PT">Portugal</option>
                            <option value="other">Outro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gi-residence"><span>País de residência</span> <span class="req">*</span></label>
                        <select id="gi-residence" name="residence" required>
                            <option value="MZ" selected>Moçambique</option>
                            <option value="ZA">África do Sul</option>
                            <option value="other">Outro</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="gi-address"><span>Endereço de contacto</span> <span>(opcional)</span></label>
                        <input id="gi-address" type="text" name="address"/>
                    </div>
                    <div class="form-group">
                        <label for="gi-profession"><span>Profissão / organização</span> <span>(opcional)</span></label>
                        <input id="gi-profession" type="text" name="profession"/>
                    </div>
                </div>
                <div class="form-group">
                    <label><span>Como pretende participar?</span> <span class="req">*</span></label>
                    <div class="check-grid">
                        <label class="check-item"><input type="checkbox" name="participation" value="join"/><span>Juntar-me ao Rotary</span></label>
                        <label class="check-item"><input type="checkbox" name="participation" value="donate"/><span>Doar</span></label>
                        <label class="check-item"><input type="checkbox" name="participation" value="volunteer"/><span>Voluntariar</span></label>
                        <label class="check-item"><input type="checkbox" name="participation" value="services"/><span>Prestar serviços</span></label>
                        <label class="check-item"><input type="checkbox" name="participation" value="partner"/><span>Apoiar como parceiro</span></label>
                        <label class="check-item"><input type="checkbox" name="participation" value="info"/><span>Pedir mais informação</span></label>
                    </div>
                </div>
                <div class="form-group">
                    <label><span>Como pretende contribuir/doar?</span> <span class="req">*</span></label>
                    <div class="check-grid">
                        <label class="check-item"><input type="checkbox" name="contribution" value="monetary"/><span>Monetário</span></label>
                        <label class="check-item"><input type="checkbox" name="contribution" value="services"/><span>Serviços</span></label>
                        <label class="check-item"><input type="checkbox" name="contribution" value="food"/><span>Alimentos</span></label>
                        <label class="check-item"><input type="checkbox" name="contribution" value="clothing"/><span>Roupas</span></label>
                        <label class="check-item"><input type="checkbox" name="contribution" value="property"/><span>Propriedade/espaço</span></label>
                        <label class="check-item"><input type="checkbox" name="contribution" value="school"/><span>Material escolar</span></label>
                        <label class="check-item"><input type="checkbox" name="contribution" value="furniture"/><span>Mobiliário</span></label>
                        <label class="check-item"><input type="checkbox" name="contribution" value="other"/><span>Outro</span></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gi-details"><span>Detalhes adicionais</span> <span>(opcional)</span></label>
                    <textarea id="gi-details" rows="3" name="details" placeholder="Conte-nos um pouco mais..."></textarea>
                </div>
                <label class="consent-box">
                    <input type="checkbox" required name="consent"/>
                    <span>Confirmo o consentimento para ser contactado(a) pelo Rotary Club of Maputo Metro e para o tratamento dos dados submetidos.</span>
                </label>
                <div class="submit-row">
                    <button type="submit" class="btn btn-primary">Enviar Interesse</button>
                </div>
                <div style="text-align:center;margin-top:14px">
                    <a style="font-size:12.5px;color:var(--pewter);text-decoration:underline" href="/contact">Prefere falar diretamente? Falar com o Clube</a>
                </div>
            </form>
        </div>
        <div style="height:60px"></div>
    </div>
</x-layouts.app>
