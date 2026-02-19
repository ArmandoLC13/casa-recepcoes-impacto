<?php

echo "<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Casa de Recepções Impacto - Eventos Inesquecíveis</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600;700&display=swap' rel='stylesheet'>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; line-height: 1.6; color: #333; overflow-x: hidden; }
        
        /* Header */
        .header { background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); color: #333; padding: 1rem 0; position: fixed; width: 100%; top: 0; z-index: 1000; box-shadow: 0 2px 30px rgba(0,0,0,0.1); transition: all 0.3s; }
        .nav { display: flex; justify-content: space-between; align-items: center; max-width: 1400px; margin: 0 auto; padding: 0 2rem; }
        .logo { font-family: 'Playfair Display', serif; font-size: 2rem; font-weight: 700; color: #28a745; position: relative; display: inline-block; }
        .logo .crown { position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 1.5rem; color: #ffc107; }
        .nav-links { display: flex; list-style: none; gap: 2.5rem; }
        .nav-links a { color: #333; text-decoration: none; font-weight: 500; transition: color 0.3s; position: relative; }
        .nav-links a:hover { color: #28a745; }
        .nav-links a::after { content: ''; position: absolute; bottom: -5px; left: 0; width: 0; height: 2px; background: #28a745; transition: width 0.3s; }
        .nav-links a:hover::after { width: 100%; }
        
        /* Hero Section */
        .hero { background: linear-gradient(135deg, rgba(0,0,0,0.4), rgba(0,0,0,0.3)), url('Imagens/f3e61461-3947-4ee0-a066-68cfbc1297c1.jfif'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; color: white; position: relative; transition: background-image 1s ease-in-out; }
        .hero::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.3); }
        .hero-content { position: relative; z-index: 2; max-width: 800px; padding: 0 2rem; }
        .hero-content h1 { font-family: 'Playfair Display', serif; font-size: 4rem; margin-bottom: 1.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 1s ease; }
        .hero-content .subtitle { font-size: 1.4rem; margin-bottom: 2.5rem; opacity: 0.95; animation: fadeInUp 1s ease 0.3s both; }
        .cta-buttons { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; animation: fadeInUp 1s ease 0.6s both; }
        .cta-btn { background: #ffc107; color: #333; padding: 1.2rem 2.5rem; border: none; border-radius: 50px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; }
        .cta-btn:hover { transform: translateY(-3px); box-shadow: 0 15px 35px rgba(255,193,7,0.4); }
        .cta-btn.secondary { background: transparent; color: white; border: 2px solid white; }
        .cta-btn.secondary:hover { background: white; color: #333; }
        
        /* Animations */
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        
        /* Sections */
        .section { padding: 6rem 2rem; max-width: 1400px; margin: 0 auto; }
        .section h2 { font-family: 'Playfair Display', serif; text-align: center; font-size: 3rem; margin-bottom: 1rem; color: #28a745; }
        .section-subtitle { text-align: center; font-size: 1.2rem; color: #666; margin-bottom: 4rem; max-width: 600px; margin-left: auto; margin-right: auto; }
        
        /* Info Section */
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 3rem; margin-top: 3rem; }
        .info-card { background: white; padding: 3rem; border-radius: 20px; box-shadow: 0 15px 50px rgba(0,0,0,0.1); transition: transform 0.3s; border-left: 5px solid #28a745; }
        .info-card:hover { transform: translateY(-10px); }
        .info-card h3 { font-family: 'Playfair Display', serif; font-size: 1.8rem; margin-bottom: 1.5rem; color: #28a745; }
        .info-card p { color: #666; line-height: 1.8; }
        
        /* Services */
        .services { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; }
        .service-card { background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s; position: relative; overflow: hidden; }
        .service-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #28a745, #20c997); }
        .service-card:hover { transform: translateY(-15px); box-shadow: 0 25px 60px rgba(0,0,0,0.15); }
        .service-icon { font-size: 3.5rem; color: #28a745; margin-bottom: 1.5rem; }
        .service-card h3 { font-family: 'Playfair Display', serif; font-size: 1.6rem; margin-bottom: 1rem; color: #333; }
        
        /* Gallery */
        .gallery { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 3rem; }
        .gallery-item { height: 250px; background-size: cover; background-position: center; border-radius: 15px; transition: all 0.3s; position: relative; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
        .gallery-item:hover { transform: scale(1.05); box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        
        /* Contact */
        .contact-info { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem; }
        .contact-card { background: linear-gradient(135deg, #f8f9fa, white); padding: 2.5rem; border-radius: 20px; text-align: center; transition: all 0.3s; border: 1px solid #e9ecef; }
        .contact-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .contact-icon { font-size: 3rem; color: #28a745; margin-bottom: 1.5rem; }
        .contact-card h3 { font-family: 'Playfair Display', serif; font-size: 1.5rem; margin-bottom: 1rem; color: #333; }
        
        /* Instagram Follow Section */
        .instagram-follow { background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045); color: white; padding: 4rem 2rem; text-align: center; margin: 4rem 0; border-radius: 20px; position: relative; overflow: hidden; }
        .instagram-follow::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.1); }
        .instagram-follow .content { position: relative; z-index: 2; }
        .instagram-follow h3 { font-size: 2.5rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif; }
        .instagram-follow p { font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9; }
        .instagram-btn { background: white; color: #833ab4; padding: 1.2rem 2.5rem; border: none; border-radius: 50px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; }
        .instagram-btn:hover { transform: translateY(-3px); box-shadow: 0 15px 35px rgba(255,255,255,0.3); }
        
        /* WhatsApp Button */
        .whatsapp-btn { position: fixed; bottom: 2rem; right: 2rem; background: #25d366; color: white; width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; text-decoration: none; box-shadow: 0 8px 30px rgba(37,211,102,0.4); transition: all 0.3s; z-index: 1000; animation: pulse 2s infinite; }
        .whatsapp-btn:hover { transform: scale(1.1); animation: none; }
        @keyframes pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
        
        /* Footer */
        .footer { background: #333; color: white; text-align: center; padding: 3rem 2rem; }
        .footer p { margin-bottom: 0.5rem; }
        
        /* Responsive */
        @media (max-width: 1200px) {
            .nav { padding: 0 1rem; }
            .section { max-width: 100%; }
        }
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .nav-links { display: none; }
            .section { padding: 4rem 1rem; }
            .cta-buttons { flex-direction: column; align-items: center; }
            .info-grid { grid-template-columns: 1fr; }
            .services { grid-template-columns: 1fr; }
            .gallery { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
            .contact-info { grid-template-columns: 1fr; }
            .whatsapp-btn { bottom: 1rem; right: 1rem; width: 60px; height: 60px; }
        }
        @media (max-width: 480px) {
            .hero-content h1 { font-size: 2rem; }
            .hero-content .subtitle { font-size: 1.2rem; }
            .section h2 { font-size: 2.5rem; }
            .info-card { padding: 2rem; }
            .service-card { padding: 2rem; }
            .contact-card { padding: 2rem; }
            .gallery { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class='header'>
        <nav class='nav'>
            <div class='logo'>
                Casa de Recepções Impacto
                <i class='fas fa-crown crown'></i>
            </div>
            <ul class='nav-links'>
                <li><a href='#inicio'>Início</a></li>
                <li><a href='#informacoes'>Informações</a></li>
                <li><a href='#servicos'>Serviços</a></li>
                <li><a href='#galeria'>Galeria</a></li>
                <li><a href='#eventos'>Eventos</a></li>
                <li><a href='#contato'>Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class='hero' id='inicio'>
        <div class='hero-content'>
            <h1>Casa de Recepções Impacto</h1>
            <p class='subtitle'>Transformamos seus sonhos em eventos inesquecíveis. Elegância, sofisticação e momentos únicos em um ambiente encantador.</p>
            <div class='cta-buttons'>
                <a href='#contato' class='cta-btn'><i class='fas fa-calendar-alt'></i> Solicitar Orçamento</a>
                <a href='#informacoes' class='cta-btn secondary'><i class='fas fa-info-circle'></i> Saiba Mais</a>
            </div>
        </div>
    </section>

    <!-- Information Section -->
    <section class='section' id='informacoes'>
        <h2>Informações</h2>
        <p class='section-subtitle'>Descubra todos os detalhes que fazem da Casa de Recepções Impacto o cenário perfeito para o seu evento inesquecível.</p>
        <div class='info-grid'>
            <div class='info-card'>
                <h3><i class='fas fa-heart'></i> Sobre Nós</h3>
                <p>A Casa de Recepções Impacto oferece flexibilidade, sofisticação e diversidade de ambientes para a realização de diferentes tipos de eventos. Aqui, você e seus convidados encontram beleza, conforto e uma estrutura completa, pensada para transformar cada ocasião em uma experiência memorável. Agende uma visita e descubra nossos espaços internos e externos, ideais para celebrar momentos especiais com estilo e elegância.</p>
            </div>
            <div class='info-card'>
                <h3><i class='fas fa-home'></i> Espaços e Capacidade</h3>
                <p>A Casa de Recepções Impacto conta com diferenciais que superam as expectativas e garantem comodidade a todos os presentes. Os clientes podem acomodar seus convidados tanto no salão coberto quanto na área ao ar livre, distribuindo com harmonia a decoração, a mesa do bolo e a pista de dança.</p>
            </div>
            <div class='info-card'>
                <h3><i class='fas fa-map-marker-alt'></i> Localização</h3>
                <p>A Casa de Recepções Impacto recebe o seu evento com muito requinte seja diurno ou noturno. O local é de fácil acesso e encontra-se na região de Sabará. Desfrute do cenário ideal para o seu enlace e entre em contato agora mesmo com a empresa.</p>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class='section' id='servicos'>
        <h2>Nossos Serviços</h2>
        <p class='section-subtitle'>Oferecemos uma gama completa de serviços para tornar seu evento perfeito</p>
        <div class='services'>
            <div class='service-card'>
                <div class='service-icon'><i class='fas fa-ring'></i></div>
                <h3>Casamentos</h3>
                <p>Cerimônias e recepções dos seus sonhos com toda elegância e sofisticação que seu grande dia merece.</p>
            </div>
            <div class='service-card'>
                <div class='service-icon'><i class='fas fa-birthday-cake'></i></div>
                <h3>Aniversários</h3>
                <p>Celebrações especiais para todas as idades, desde festas infantis até bodas de ouro.</p>
            </div>
            <div class='service-card'>
                <div class='service-icon'><i class='fas fa-briefcase'></i></div>
                <h3>Eventos Corporativos</h3>
                <p>Espaço profissional para confraternizações, lançamentos e reuniões empresariais.</p>
            </div>
            <div class='service-card'>
                <div class='service-icon'><i class='fas fa-glass-cheers'></i></div>
                <h3>Formaturas</h3>
                <p>Comemore essa conquista especial em um ambiente elegante e acolhedor.</p>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class='section' id='galeria'>
        <h2>Nossa Galeria</h2>
        <p class='section-subtitle'>Conheça nossos espaços únicos e encantadores</p>
        <div class='gallery'>
            <div class='gallery-item' style='background-image: url(Imagens/21912923-1ae4-4ada-89eb-6f6fea967b94.jfif);'></div>
            <div class='gallery-item' style='background-image: url(Imagens/271a2c30-a823-4ec8-97a8-c0e3745ac98e.jfif);'></div>
            <div class='gallery-item' style='background-image: url(Imagens/c60fb225-52b4-4efb-b9a7-5a4326779ca5.jfif);'></div>
            <div class='gallery-item' style='background-image: url(Imagens/f3e61461-3947-4ee0-a066-68cfbc1297c1.jfif);'></div>
            <div class='gallery-item' style='background-image: url(Imagens/764b150f-edda-4145-a214-4233e9416c8f.jfif);'></div>
            <div class='gallery-item' style='background-image: url(Imagens/9404311a-e954-40c0-a79b-a6c61f570d27.jfif);'></div>
            <div class='gallery-item' style='background-image: url(Imagens/a5e26462-5b0c-4ce5-aa08-998bbdefa3e2.jfif);'></div>
            <div class='gallery-item' style='background-image: url(Imagens/373ff2f0-31ca-4b3f-9605-6669aea153fe.jfif);'></div>
        </div>
    </section>

    <!-- Events Section -->
    <section class='section' id='eventos' style='background: linear-gradient(135deg, #f8f9fa, #ffffff);'>
        <h2>Próximos Eventos</h2>
        <p class='section-subtitle'>Confira os eventos que acontecerão em nosso espaço</p>
        
        <!-- Destaque Baile Dançante -->
        <div style='background: white; color: #333; padding: 3rem; border-radius: 20px; margin-bottom: 3rem; text-align: center; box-shadow: 0 15px 50px rgba(0,0,0,0.2);'>
            <div style='display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;'>
                <div style='text-align: left;'>
                    <h3 style='font-size: 2.5rem; margin-bottom: 1.5rem; font-family: Playfair Display, serif; color: #28a745;'>BAILE DANÇANTE</h3>
                    <h4 style='font-size: 2rem; margin-bottom: 2rem; color: #28a745;'>QUARTETO HILUX</h4>
                    <p style='font-size: 1.3rem; margin-bottom: 1rem;'><strong>DATA:</strong> 06 de março</p>
                    <p style='font-size: 1.3rem; margin-bottom: 1rem;'><strong>HORÁRIO:</strong> 20h</p>
                    <p style='font-size: 1.1rem; margin-bottom: 0.5rem;'>Monitores</p>
                    <p style='font-size: 1.1rem; margin-bottom: 0.5rem;'>Caipirinha, cerveja gelada e porções</p>
                    <p style='font-size: 1.1rem; margin-bottom: 1.5rem;'>Serviço de comanda</p>
                    <div style='background: #28a745; color: white; padding: 1.5rem; border-radius: 15px; margin-top: 2rem;'>
                        <p style='font-size: 1.2rem; font-weight: bold; margin-bottom: 0.5rem;'>Reservas de mesas:</p>
                        <p style='font-size: 1.3rem; font-weight: bold;'>31 98679-1243</p>
                        <p style='font-size: 1.3rem; font-weight: bold;'>31 98679-1244</p>
                    </div>
                </div>
                <div>
                    <img src='Imagens/713e0c02-c07c-49fc-8da5-a68ed23c012d.jfif' style='width: 100%; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);' alt='Baile Dançante'>
                </div>
            </div>
        </div>
        
        <div class='services'>
            <div class='service-card'>
                <div class='service-icon'><i class='fas fa-calendar-check'></i></div>
                <h3>Casamento Ana & João</h3>
                <p><strong>Data:</strong> 15 de Março, 2024</p>
                <p><strong>Horário:</strong> 18h00</p>
                <p>Cerimônia e recepção no salão principal</p>
            </div>
            <div class='service-card'>
                <div class='service-icon'><i class='fas fa-birthday-cake'></i></div>
                <h3>Aniversário 15 Anos Maria</h3>
                <p><strong>Data:</strong> 22 de Março, 2024</p>
                <p><strong>Horário:</strong> 20h00</p>
                <p>Festa de debutante com decoração temática</p>
            </div>
            <div class='service-card'>
                <div class='service-icon'><i class='fas fa-briefcase'></i></div>
                <h3>Confraternização Empresa XYZ</h3>
                <p><strong>Data:</strong> 30 de Março, 2024</p>
                <p><strong>Horário:</strong> 19h00</p>
                <p>Evento corporativo com jantar</p>
            </div>
            <div class='service-card'>
                <div class='service-icon'><i class='fas fa-glass-cheers'></i></div>
                <h3>Formatura Turma 2024</h3>
                <p><strong>Data:</strong> 05 de Abril, 2024</p>
                <p><strong>Horário:</strong> 21h00</p>
                <p>Baile de formatura com DJ</p>
            </div>
        </div>
    </section>

    <!-- Instagram Follow Section -->
    <section class='instagram-follow'>
        <div class='content'>
            <h3><i class='fab fa-instagram'></i> Siga-nos no Instagram!</h3>
            <p>Acompanhe nossos eventos, dicas e inspirações para tornar seu dia ainda mais especial</p>
            <a href='https://instagram.com/impactorecepcoes' target='_blank' class='instagram-btn'>
                <i class='fab fa-instagram'></i> @impactorecepcoes
            </a>
        </div>
    </section>

    <!-- Contact -->
    <section class='section' id='contato'>
        <h2>Entre em Contato</h2>
        <p class='section-subtitle'>Estamos prontos para tornar seu evento inesquecível</p>
        <div class='contact-info'>
            <div class='contact-card'>
                <div class='contact-icon'><i class='fab fa-whatsapp'></i></div>
                <h3>WhatsApp</h3>
                <p>(31) 9 8679-1244</p>
                <p>Atendimento personalizado</p>
            </div>
            <div class='contact-card'>
                <div class='contact-icon'><i class='fas fa-envelope'></i></div>
                <h3>E-mail</h3>
                <p>Katinha.rodriguess@gmail.com</p>
                <p>Resposta rápida</p>
            </div>
            <div class='contact-card'>
                <div class='contact-icon'><i class='fab fa-instagram'></i></div>
                <h3>Instagram</h3>
                <p>@impactorecepcoes</p>
                <p>Siga-nos nas redes sociais</p>
            </div>
            <div class='contact-card'>
                <div class='contact-icon'><i class='fas fa-map-marker-alt'></i></div>
                <h3>Endereço</h3>
                <p>Av. Albert Scharlet, 1626</p>
                <p>Sabará - MG</p>
            </div>
        </div>
    </section>

    <!-- WhatsApp Float Button -->
    <a href='https://wa.me/553186791244?text=Olá! Gostaria de solicitar um orçamento para meu evento.' class='whatsapp-btn' target='_blank'>
        <i class='fab fa-whatsapp'></i>
    </a>

    <!-- Footer -->
    <footer class='footer'>
        <p>&copy; 2024 Casa de Recepções Impacto. Todos os direitos reservados.</p>
        <p>Criando momentos inesquecíveis em Sabará - MG</p>
    </footer>
    
    <script>
        const images = [
            'Imagens/f3e61461-3947-4ee0-a066-68cfbc1297c1.jfif',
            'Imagens/271a2c30-a823-4ec8-97a8-c0e3745ac98e.jfif',
            'Imagens/c60fb225-52b4-4efb-b9a7-5a4326779ca5.jfif',
            'Imagens/764b150f-edda-4145-a214-4233e9416c8f.jfif',
            'Imagens/9404311a-e954-40c0-a79b-a6c61f570d27.jfif',
            'Imagens/373ff2f0-31ca-4b3f-9605-6669aea153fe.jfif',
            'Imagens/21912923-1ae4-4ada-89eb-6f6fea967b94.jfif'
        ];
        let currentIndex = 0;
        
        setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length;
            document.querySelector('.hero').style.backgroundImage = 
                'linear-gradient(135deg, rgba(0,0,0,0.4), rgba(0,0,0,0.3)), url(' + images[currentIndex] + ')';
        }, 5000);
    </script>
</body>
</html>";