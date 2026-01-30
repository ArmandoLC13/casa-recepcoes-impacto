@extends('layout')

@section('title', 'Quem Somos')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="section-title text-center">Quem Somos</h1>
            
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="text-success mb-3">Nossa História</h3>
                    <p>A Casa de Recepções Impacto nasceu do sonho de criar um espaço único e especial para celebrar os momentos mais importantes da vida. Há mais de 10 anos no mercado, nos dedicamos a transformar eventos em experiências inesquecíveis.</p>
                    
                    <p>Localizada em uma área privilegiada, nossa casa oferece toda a infraestrutura necessária para receber desde eventos íntimos até grandes celebrações, sempre com o mesmo cuidado e atenção aos detalhes.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="text-success mb-3">Nossa Missão</h3>
                    <p>Proporcionar experiências únicas e memoráveis através de eventos excepcionais, oferecendo um ambiente acolhedor, serviços de qualidade e atendimento personalizado que supere as expectativas de nossos clientes.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="text-success mb-3">Nossos Valores</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-heart text-success me-2"></i>Excelência no atendimento</li>
                                <li><i class="fas fa-heart text-success me-2"></i>Compromisso com a qualidade</li>
                                <li><i class="fas fa-heart text-success me-2"></i>Transparência e honestidade</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-heart text-success me-2"></i>Respeito aos clientes</li>
                                <li><i class="fas fa-heart text-success me-2"></i>Inovação constante</li>
                                <li><i class="fas fa-heart text-success me-2"></i>Responsabilidade social</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-bege p-4 rounded text-center">
                <h4 class="text-success mb-3">Entre em Contato</h4>
                <p>Estamos prontos para tornar seu evento especial realidade!</p>
                <a href="{{ route('orcamento') }}" class="btn btn-success me-2">Solicitar Orçamento</a>
                <a href="https://wa.me/5511999999999" class="btn btn-outline-success">
                    <i class="fab fa-whatsapp me-2"></i>WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<a href="https://wa.me/5511999999999" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
@endsection