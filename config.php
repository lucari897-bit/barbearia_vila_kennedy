<?php
/* ===== CONFIGURAÇÃO ÚNICA — altere links e dados apenas aqui ===== */
$cfg = [
  'nome'      => 'BARBINHARIA',
  'agendar'   => 'https://cashbarber.com.br/barbinharia?utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAZXh0bgNhZW0CMTEAcGRvZgJzcnRjBmFwcF9pZA85MzY2MTk3NDMzOTI0NTkAAaeOpYoq2HbK8kOq00fuTwdF5UxRFN4emNXQCGRml5NI4iEfovNSLOC9hDgx8w_aem_qHy2NHlqxH1ZnMNOsbL_Vg',
  'telefone'  => '(21) 97154-5111',
  'whatsapp'  => '5521971545111',
  'wa_msg'    => 'Olá! Gostaria de falar com a Barbinharia.',
  'instagram' => 'https://www.instagram.com/barbinharia_/',
  'facebook'  => 'https://www.facebook.com/BarBinHaria', // CONFIRME a URL oficial
  'ig_handle' => '@barbinharia_',
  'fb_handle' => 'BarBinHaria',
  'endereco'  => ['Estr. do Quafá, 363', 'Vila Kennedy', 'Rio de Janeiro - RJ', 'CEP 23098-030'],
  'maps_q'    => 'Estr. do Quafá, 363, Vila Kennedy, Rio de Janeiro - RJ, 23098-030',
  'horarios'  => [
    ['Segunda','10:00 — 20:00'],['Terça','10:00 — 20:00'],['Quarta','10:00 — 20:00'],
    ['Quinta','10:00 — 20:00'],['Sexta','10:00 — 20:00'],['Sábado','08:00 — 15:00'],['Domingo','FECHADO'],
  ],
  // EQUIPE — 5 vagas. Troque nome/cargo/descrição/instagram e a foto em assets/images/team/team-0X.jpg
  'equipe'    => [
    ['nome'=>'FUNCIONÁRIO 01','cargo'=>'Barbeiro','desc'=>'Breve descrição do profissional.','instagram'=>''],
    ['nome'=>'FUNCIONÁRIO 02','cargo'=>'Barbeiro','desc'=>'Breve descrição do profissional.','instagram'=>''],
    ['nome'=>'FUNCIONÁRIO 03','cargo'=>'Barbeiro','desc'=>'Breve descrição do profissional.','instagram'=>''],
    ['nome'=>'FUNCIONÁRIO 04','cargo'=>'Barbeiro','desc'=>'Breve descrição do profissional.','instagram'=>''],
    ['nome'=>'FUNCIONÁRIO 05','cargo'=>'Barbeiro','desc'=>'Breve descrição do profissional.','instagram'=>''],
  ],
];
$cfg['wa_link']   = 'https://wa.me/' . $cfg['whatsapp'] . '?text=' . rawurlencode($cfg['wa_msg']);
$cfg['maps_link'] = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($cfg['maps_q']);
$cfg['maps_embed']= 'https://www.google.com/maps?q=' . rawurlencode($cfg['maps_q']) . '&output=embed';
function e($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
function btn_agendar($label='AGENDAR HORÁRIO',$cls=''){ global $cfg;
  echo '<a class="btn btn-red '.e($cls).'" href="'.e($cfg['agendar']).'" target="_blank" rel="noopener noreferrer">'.e($label).'</a>'; }
function btn_whats($label='FALE CONOSCO',$cls='btn-line'){ global $cfg;
  echo '<a class="btn '.e($cls).'" href="'.e($cfg['wa_link']).'" target="_blank" rel="noopener noreferrer">'.e($label).'</a>'; }
