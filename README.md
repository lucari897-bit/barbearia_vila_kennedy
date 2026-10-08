# Barbinharia — site-vitrine (PHP)
Suba a pasta inteira em qualquer hospedagem com PHP 7.4+. Sem banco de dados.

- **Configuração única:** `config.php` (link do CashBarber, WhatsApp, Instagram, Facebook, endereço, horários).
- **Facebook:** a URL em `config.php` é a presumida a partir de "BarBinHaria" — confirme a oficial.
- **Fotos:** substitua em `assets/images/`: `hero.jpg` (fundo, ideal 1920×1080), `sobre.jpg` (4:5), `galeria-1.jpg` … `galeria-8.jpg`. Enquanto não existirem, aparecem blocos "placeholder" (a galeria usa categorias definidas em `index.php`).
- **Logo:** `assets/images/logo.png` é o original; `logo-640.png` é só uma versão menor recortada (sem distorção).
- Teste local: `php -S localhost:8000`

## Equipe
Edite os 5 profissionais em `config.php` (chave `equipe`: nome, cargo, descrição, instagram opcional). Fotos: `assets/images/team/team-01.jpg` … `team-05.jpg` (proporção 3:4). Sem foto, aparece um placeholder.
