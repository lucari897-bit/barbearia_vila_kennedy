</main>
<footer class="footer">
  <div class="wrap foot-grid">
    <div>
      <img src="assets/images/logo-640.png" alt="Logo Barbinharia" width="154" height="100" loading="lazy">
      <p class="slogan">SEU ESTILO. NOSSO TRABALHO.</p>
    </div>
    <div>
      <h3>Endereço</h3>
      <p>Estr. do Quafá, 363<br>Vila Kennedy<br>Rio de Janeiro - RJ</p>
      <h3>Telefone</h3><p><a href="tel:+<?= e($cfg['whatsapp']) ?>"><?= e($cfg['telefone']) ?></a></p>
    </div>
    <div>
      <h3>Links</h3>
      <ul><li><a href="#inicio">Início</a></li><li><a href="#sobre">Sobre</a></li><li><a href="#servicos">Serviços</a></li><li><a href="#equipe">Nossa Equipe</a></li>
      <li><a href="#galeria">Galeria</a></li><li><a href="#localizacao">Localização</a></li><li><a href="#contato">Contato</a></li></ul>
    </div>
    <div>
      <h3>Redes</h3>
      <ul><li><a href="<?= e($cfg['instagram']) ?>" target="_blank" rel="noopener noreferrer">Instagram</a></li>
      <li><a href="<?= e($cfg['facebook']) ?>" target="_blank" rel="noopener noreferrer">Facebook</a></li></ul>
      <div class="stack"><?php btn_agendar('AGENDAR HORÁRIO'); btn_whats('FALE CONOSCO'); ?></div>
    </div>
  </div>
  <p class="copy">© <?= date('Y') ?> Barbinharia. Todos os direitos reservados.</p>
</footer>
<a class="wa-float" href="<?= e($cfg['wa_link']) ?>" target="_blank" rel="noopener noreferrer" aria-label="Conversar no WhatsApp">
  <svg viewBox="0 0 32 32" width="30" height="30" aria-hidden="true"><path fill="#fff" d="M16 3C9 3 3.4 8.6 3.4 15.5c0 2.3.6 4.4 1.7 6.300L3 29l7.400-2c1.800 1 3.800 1.500 5.600 1.500 7 0 12.600-5.600 12.600-12.500S23 3 16 3zm0 22.900c-1.800 0-3.500-.5-5-1.400l-.4-.2-4.400 1.200 1.200-4.300-.3-.4a10 10 0 0 1-1.500-5.300C5.600 9.900 10.300 5.400 16 5.400s10.400 4.500 10.400 10.100S21.700 25.900 16 25.900zm5.700-7.500c-.3-.2-1.900-.9-2.200-1s-.5-.2-.7.200-.8 1-1 1.200-.4.200-.7.100a8.300 8.300 0 0 1-4.100-3.600c-.3-.5.300-.5.900-1.600.1-.2 0-.4 0-.5l-1-2.300c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.6.100-.9.400s-1.200 1.200-1.200 2.900 1.200 3.300 1.400 3.500 2.400 3.700 5.900 5.200c2.200.9 3 1 4.100.8.700-.1 1.900-.8 2.200-1.500s.3-1.400.2-1.500-.3-.2-.6-.4z"/></svg>
</a>
<dialog class="lightbox" aria-label="Imagem ampliada"><button class="lb-close" aria-label="Fechar">×</button><img alt=""></dialog>
<script src="assets/js/script.js" defer></script>
</body>
</html>
