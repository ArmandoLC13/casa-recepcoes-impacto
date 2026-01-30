@extends('layout')

@section('title', 'Início')

@section('content')
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Casa de Recepções Impacto</h1>
        <p class="lead mb-4">O local perfeito para tornar seu evento inesquecível</p>
        <a href="{{ route('orcamento') }}" class="btn btn-light btn-lg me-3">
            <i class="fas fa-calculator me-2"></i>Solicitar Orçamento
        </a>
        <a href="https://wa.me/5511999999999" class="btn btn-outline-light btn-lg">
            <i class="fab fa-whatsapp me-2"></i>WhatsApp
        </a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Eventos Sociais</h5>
                        <p class="card-text">Casamentos, aniversários, formaturas e celebrações especiais</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-building fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Eventos Corporativos</h5>
                        <p class="card-text">Confraternizações, palestras, workshops e reuniões</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-star fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Estrutura Completa</h5>
                        <p class="card-text">Som, iluminação, decoração e equipe especializada</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-bege py-5">
    <div class="container text-center">
        <h2 class="section-title d-inline-block">Por que escolher a Casa Impacto?</h2>
        <div class="row mt-4">
            <div class="col-md-3 mb-3">
                <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                <h6>Localização Privilegiada</h6>
            </div>
            <div class="col-md-3 mb-3">
                <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                <h6>Estacionamento Amplo</h6>
            </div>
            <div class="col-md-3 mb-3">
                <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                <h6>Equipe Especializada</h6>
            </div>
            <div class="col-md-3 mb-3">
                <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                <h6>Preços Competitivos</h6>
            </div>
        </div>
    </div>
</section>

<a href="https://wa.me/5511999999999" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
@endsection