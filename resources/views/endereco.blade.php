@extends('layout')

@section('title', 'Endereço e Localização')

@section('content')
<div class="container py-5">
    <h1 class="section-title text-center">Endereço e Localização</h1>
    
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="text-success mb-4">
                        <i class="fas fa-map-marker-alt me-2"></i>Nossa Localização
                    </h3>
                    
                    <div class="mb-3">
                        <h6 class="text-success">Endereço:</h6>
                        <p>Rua das Flores, 123 - Jardim Primavera<br>
                        São Paulo - SP, CEP: 01234-567</p>
                    </div>
                    
                    <div class="mb-3">
                        <h6 class="text-success">Telefones:</h6>
                        <p><i class="fas fa-phone me-2"></i>(11) 3456-7890<br>
                        <i class="fab fa-whatsapp me-2"></i>(11) 99999-9999</p>
                    </div>
                    
                    <div class="mb-3">
                        <h6 class="text-success">E-mail:</h6>
                        <p><i class="fas fa-envelope me-2"></i>contato@casaimpacto.com.br</p>
                    </div>
                    
                    <div class="mb-3">
                        <h6 class="text-success">Horário de Atendimento:</h6>
                        <p>Segunda a Sexta: 9h às 18h<br>
                        Sábado: 9h às 16h<br>
                        Domingo: Apenas com agendamento</p>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <a href="https://wa.me/5511999999999" class="btn btn-success">
                            <i class="fab fa-whatsapp me-2"></i>Falar no WhatsApp
                        </a>
                        <a href="https://maps.google.com/?q=Rua+das+Flores+123+São+Paulo" target="_blank" class="btn btn-outline-success">
                            <i class="fas fa-directions me-2"></i>Ver no Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="text-success mb-4">
                        <i class="fas fa-route me-2"></i>Como Chegar
                    </h3>
                    
                    <div class="mb-4">
                        <h6 class="text-success">De Carro:</h6>
                        <ul>
                            <li>Pela Marginal Tietê: Saída Ponte da Casa Verde</li>
                            <li>Pela Radial Leste: Acesso pela Av. Celso Garcia</li>
                            <li>Estacionamento gratuito para 150 veículos</li>
                        </ul>
                    </div>
                    
                    <div class="mb-4">
                        <h6 class="text-success">Transporte Público:</h6>
                        <ul>
                            <li>Metrô: Estação Vila Madalena (Linha 2-Verde)</li>
                            <li>Ônibus: Linhas 702M, 856P, 917T</li>
                            <li>A 5 minutos a pé da estação</li>
                        </ul>
                    </div>
                    
                    <div class="mb-4">
                        <h6 class="text-success">Pontos de Referência:</h6>
                        <ul>
                            <li>Próximo ao Shopping Center Norte</li>
                            <li>Em frente ao Parque da Juventude</li>
                            <li>Ao lado da Escola Municipal Santos Dumont</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-success mb-4">
                        <i class="fas fa-map me-2"></i>Mapa da Região
                    </h3>
                    <div class="ratio ratio-16x9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1975!2d-46.6333824!3d-23.5505199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDMzJzAxLjkiUyA0NsKwMzgnMDAuMiJX!5e0!3m2!1spt-BR!2sbr!4v1234567890"
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-bege p-4 rounded text-center mt-5">
        <h4 class="text-success mb-3">Agende uma Visita</h4>
        <p>Venha conhecer pessoalmente nossos espaços e tirar todas as suas dúvidas!</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="https://wa.me/5511999999999?text=Olá! Gostaria de agendar uma visita à Casa Impacto." class="btn btn-success btn-lg w-100">
                    <i class="fab fa-whatsapp me-2"></i>Agendar Visita
                </a>
            </div>
        </div>
    </div>
</div>

<a href="https://wa.me/5511999999999" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
@endsection