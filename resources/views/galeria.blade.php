@extends('layout')

@section('title', 'Galeria de Fotos')

@section('content')
<div class="container py-5">
    <h1 class="section-title text-center">Galeria de Fotos</h1>
    
    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <p class="lead">Conheça nossos espaços e veja alguns dos eventos realizados na Casa Impacto</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/28a745/ffffff?text=Salão+Principal" class="card-img-top gallery-img" alt="Salão Principal">
                <div class="card-body">
                    <h5 class="card-title text-success">Salão Principal</h5>
                    <p class="card-text">Amplo salão com capacidade para até 300 pessoas, com pé direito alto e iluminação moderna.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/F5F5DC/333333?text=Área+Externa" class="card-img-top gallery-img" alt="Área Externa">
                <div class="card-body">
                    <h5 class="card-title text-success">Área Externa</h5>
                    <p class="card-text">Jardim com área verde, perfeito para cerimônias ao ar livre e cocktails.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/28a745/ffffff?text=Cozinha+Industrial" class="card-img-top gallery-img" alt="Cozinha">
                <div class="card-body">
                    <h5 class="card-title text-success">Cozinha Industrial</h5>
                    <p class="card-text">Cozinha completa e equipada para atender grandes eventos com segurança.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/F5F5DC/333333?text=Casamento" class="card-img-top gallery-img" alt="Casamento">
                <div class="card-body">
                    <h5 class="card-title text-success">Casamentos</h5>
                    <p class="card-text">Ambiente romântico e elegante para celebrar o dia mais especial do casal.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/28a745/ffffff?text=Formatura" class="card-img-top gallery-img" alt="Formatura">
                <div class="card-body">
                    <h5 class="card-title text-success">Formaturas</h5>
                    <p class="card-text">Espaço solene e festivo para celebrar conquistas acadêmicas importantes.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/F5F5DC/333333?text=Aniversário" class="card-img-top gallery-img" alt="Aniversário">
                <div class="card-body">
                    <h5 class="card-title text-success">Aniversários</h5>
                    <p class="card-text">Ambiente descontraído e alegre para comemorar datas especiais.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/28a745/ffffff?text=Evento+Corporativo" class="card-img-top gallery-img" alt="Evento Corporativo">
                <div class="card-body">
                    <h5 class="card-title text-success">Eventos Corporativos</h5>
                    <p class="card-text">Ambiente profissional para confraternizações e eventos empresariais.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/F5F5DC/333333?text=Estacionamento" class="card-img-top gallery-img" alt="Estacionamento">
                <div class="card-body">
                    <h5 class="card-title text-success">Estacionamento</h5>
                    <p class="card-text">Amplo estacionamento coberto e descoberto para comodidade dos convidados.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/28a745/ffffff?text=Decoração" class="card-img-top gallery-img" alt="Decoração">
                <div class="card-body">
                    <h5 class="card-title text-success">Decoração</h5>
                    <p class="card-text">Exemplos de decorações temáticas realizadas em nossos eventos.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-bege p-4 rounded text-center mt-5">
        <h4 class="text-success mb-3">Gostou do que viu?</h4>
        <p>Entre em contato conosco e agende uma visita para conhecer pessoalmente nossos espaços!</p>
        <a href="{{ route('orcamento') }}" class="btn btn-success me-2">Solicitar Orçamento</a>
        <a href="https://wa.me/5511999999999" class="btn btn-outline-success">
            <i class="fab fa-whatsapp me-2"></i>Agendar Visita
        </a>
    </div>
</div>

<a href="https://wa.me/5511999999999" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
@endsection