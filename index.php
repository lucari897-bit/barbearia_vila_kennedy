<?php include __DIR__ . '/includes/header.php'; ?>

<section class="hero" id="inicio">
  <div class="hero-bg" role="img" aria-label="Barbearia — imagem de fundo (substitua assets/images/hero.jpg)"></div>
  <div class="hero-geo" aria-hidden="true"><i class="ring"></i><i class="bar"></i></div>
  <div class="wrap hero-in">
    <div class="logo-badge reveal"><img src="assets/images/logo-640.png" alt="Barbinharia" width="320" height="208"></div>
    <h1 class="reveal">SEU ESTILO.<br><span>NOSSO TRABALHO.</span></h1>
    <p class="lead reveal">Cortes, barba e estilo com atendimento profissional.</p>
    <div class="actions reveal"><?php btn_agendar('AGENDAR HORÁRIO'); btn_whats('FALE CONOSCO'); ?></div>
  </div>
  <p class="hero-strip" aria-hidden="true"><span>Hora marcada</span><span>Sem fila</span><span>Sem espera</span></p>
</section>

<section class="sec" id="sobre">
  <div class="wrap about">
    <div class="ph about-img reveal" data-label="Foto da barbearia"><img src="assets/images/sobre.jpg" alt="Interior da Barbinharia" loading="lazy" width="800" height="1000"></div>
    <div class="reveal">
      <p class="eyebrow">Sobre</p>
      <h2>MAIS QUE UM CORTE.</h2>
      <p>Na Barbinharia, cada atendimento é pensado para entregar estilo, precisão e uma experiência diferenciada.</p>
      <ul class="checks">
        <li>Atendimento com hora marcada</li><li>Sem fila</li><li>Sem espera</li>
        <li>Ambiente familiar</li><li>Ambiente climatizado</li>
      </ul>
    </div>
  </div>
</section>

<section class="highlight">
  <div class="wrap reveal">
    <h2>CORTE COM<br>HORA MARCADA.</h2>
    <p>Mais praticidade para você. Atendimento com hora marcada, sem fila e sem espera.</p>
    <?php btn_agendar('MARCAR MEU HORÁRIO','btn-lg'); ?>
  </div>
</section>

<section class="sec" id="servicos">
  <div class="wrap">
    <p class="eyebrow">O que fazemos</p><h2>NOSSOS SERVIÇOS</h2>
    <div class="services">
    <?php
    $ic = [
      '<path d="M3 8h18v4H3zM6 12v6M9 12v6M12 12v6M15 12v6M18 12v6"/>',
      '<circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M8.1 8.1 20 20M8.1 15.9 20 4"/>',
      '<path d="M3 16 14 5l5 5L8 21zM14 5l2.500-2.500L21.500 7.500 19 10"/>',
      '<path d="M5 4c0 9 1 16 7 16s7-7 7-16M8 12c2 2 6 2 8 0"/>',
      '<path d="M4 20 12 12M12 12l6-8 2 2-8 6zM5 14l5 5"/>',
      '<circle cx="12" cy="12" r="9"/><path d="M8 14c2 3 6 3 8 0M9 9h.01M15 9h.01"/>'];
    $serv = [
      ['Corte de cabelo','Estilo e precisão para renovar seu visual.'],
      ['Corte com tesoura','Acabamento detalhado, feito na tesoura.'],
      ['Corte com navalha','Linhas definidas e acabamento limpo.'],
      ['Barba','Cuidado e forma para a sua barba.'],
      ['Aparar a barba','Manutenção para manter o visual em dia.'],
      ['Cortes infantis','Atendimento atencioso para os pequenos.'],
    ];
    foreach ($serv as $i => $s): ?>
      <article class="card reveal">
        <span class="ico"><svg viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?= $ic[$i] ?></svg><em><?= sprintf('%02d', $i+1) ?></em></span>
        <h3><?= e(mb_strtoupper($s[0])) ?></h3>
        <p><?= e($s[1]) ?></p>
        <?php btn_agendar('AGENDAR','btn-sm'); ?>
      </article>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sec" id="equipe">
  <div class="wrap">
    <div class="head reveal"><p class="eyebrow">Nossa equipe</p><h2>NOSSA EQUIPE</h2>
    <p class="sub">Profissionais preparados para cuidar do seu estilo.</p></div>
    <div class="team">
    <?php foreach ($cfg['equipe'] as $k => $m): $n = sprintf('%02d', $k+1); ?>
      <article class="ph t reveal" data-label="<?= e($m['nome']) ?>">
        <img src="assets/images/team/team-<?= $n ?>.jpg" alt="<?= e($m['nome']) ?> — <?= e($m['cargo']) ?>" loading="lazy" width="600" height="800">
        <div class="t-info">
          <span class="t-role"><?= e($m['cargo']) ?></span>
          <h3><?= e($m['nome']) ?></h3>
          <p><?= e($m['desc']) ?></p>
          <?php if (!empty($m['instagram'])): ?>
            <a class="t-ig" href="<?= e($m['instagram']) ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram de <?= e($m['nome']) ?>">Instagram</a>
          <?php endif; ?>
        </div>
      </article>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sec dark2" id="galeria">
  <div class="wrap">
    <p class="eyebrow">Galeria</p><h2>NOSSO TRABALHO</h2>
    <div class="filters" role="group" aria-label="Filtrar galeria">
      <button class="on" data-f="all">Todos</button><button data-f="cortes">Cortes</button><button data-f="barbas">Barbas</button>
      <button data-f="ambiente">Ambiente</button><button data-f="trabalhos">Trabalhos</button><button data-f="barbeiros">Barbeiros</button>
    </div>
    <div class="gallery">
    <?php
    // Troque os arquivos em assets/images/ (galeria-1.jpg ... galeria-8.jpg) pelas fotos reais.
    $g = ['cortes','barbas','ambiente','trabalhos','barbeiros','cortes','ambiente','barbas'];
    foreach ($g as $i => $cat): $n=$i+1; ?>
      <figure class="ph g<?= $n ?>" data-cat="<?= $cat ?>" data-label="<?= ucfirst($cat) ?> — foto <?= $n ?>">
        <img src="assets/images/galeria-<?= $n ?>.jpg" alt="Barbinharia — <?= $cat ?>" loading="lazy" width="600" height="600">
      </figure>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sec" id="localizacao">
  <div class="wrap loc">
    <div class="reveal">
      <p class="eyebrow">Localização</p><h2>ONDE ESTAMOS</h2>
      <p class="addr"><strong>BARBINHARIA</strong><br>Estr. do Quafá, 363<br>Vila Kennedy<br>Rio de Janeiro - RJ<br>23098-030</p>
      <a class="btn btn-line" href="<?= e($cfg['maps_link']) ?>" target="_blank" rel="noopener noreferrer">ABRIR NO GOOGLE MAPS</a>
      <h3 class="mt">HORÁRIO DE FUNCIONAMENTO</h3>
      <dl class="hours">
        <?php foreach ($cfg['horarios'] as $h): ?>
          <div class="<?= $h[1]==='FECHADO' ? 'closed' : '' ?>"><dt><?= e(mb_strtoupper($h[0])) ?></dt><dd><?= e($h[1]) ?></dd></div>
        <?php endforeach; ?>
      </dl>
      <p class="mini"><strong>TELEFONE</strong> <?= e($cfg['telefone']) ?></p>
    </div>
    <div class="map reveal"><iframe title="Mapa — Barbinharia" src="<?= e($cfg['maps_embed']) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div>
  </div>
</section>

<section class="sec dark2 social">
  <div class="wrap center reveal">
    <h2>ACOMPANHE A BARBINHARIA</h2>
    <p><?= e($cfg['ig_handle']) ?> · <?= e($cfg['fb_handle']) ?></p>
    <div class="actions c">
      <a class="btn btn-line" href="<?= e($cfg['instagram']) ?>" target="_blank" rel="noopener noreferrer">INSTAGRAM</a>
      <a class="btn btn-line" href="<?= e($cfg['facebook']) ?>" target="_blank" rel="noopener noreferrer">FACEBOOK</a>
    </div>
  </div>
</section>

<section class="sec" id="contato">
  <div class="wrap center reveal">
    <h2>FALE COM A BARBINHARIA</h2>
    <p>Quer tirar uma dúvida? Entre em contato com a nossa equipe.</p>
    <p class="phone"><a href="tel:+<?= e($cfg['whatsapp']) ?>"><?= e($cfg['telefone']) ?></a></p>
    <div class="actions c">
      <?php btn_agendar('AGENDAR HORÁRIO'); btn_whats('FALE CONOSCO'); btn_whats('CONVERSAR NO WHATSAPP','btn-wa'); ?>
    </div>
    <p class="mini"><a href="<?= e($cfg['instagram']) ?>" target="_blank" rel="noopener noreferrer">Instagram</a> · <a href="<?= e($cfg['facebook']) ?>" target="_blank" rel="noopener noreferrer">Facebook</a></p>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
