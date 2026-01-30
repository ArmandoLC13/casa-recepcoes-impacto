@extends('layout')

@section('title', 'Termo de Responsabilidade')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="section-title text-center">Termo de Responsabilidade</h1>
            
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>Importante:</strong> Leia atentamente todos os termos antes de assinar o contrato.
                    </div>
                    
                    <h3 class="text-success mb-4">Declaração de Responsabilidade</h3>
                    
                    <h5 class="text-success">1. RESPONSABILIDADE CIVIL</h5>
                    <p>O LOCATÁRIO assume total responsabilidade por danos causados ao patrimônio da Casa de Recepções Impacto, incluindo:</p>
                    <ul>
                        <li>Danos ao imóvel, móveis, equipamentos e decoração</li>
                        <li>Quebra de objetos, louças, copos e utensílios</li>
                        <li>Danos causados por convidados, fornecedores ou terceiros</li>
                        <li>Prejuízos decorrentes de uso inadequado das instalações</li>
                    </ul>
                    
                    <h5 class="text-success">2. SEGURANÇA E ORDEM</h5>
                    <p>O LOCATÁRIO se compromete a:</p>
                    <ul>
                        <li>Manter a ordem e segurança durante todo o evento</li>
                        <li>Controlar o acesso de pessoas ao local</li>
                        <li>Não permitir comportamentos que perturbem a vizinhança</li>
                        <li>Respeitar os limites de som conforme legislação municipal</li>
                        <li>Não exceder a capacidade máxima do local</li>
                    </ul>
                    
                    <h5 class="text-success">3. PROIBIÇÕES</h5>
                    <p>É expressamente proibido:</p>
                    <ul>
                        <li>Uso, porte ou comercialização de drogas ilícitas</li>
                        <li>Porte de armas de qualquer natureza</li>
                        <li>Comportamentos violentos ou agressivos</li>
                        <li>Danificar propositalmente o patrimônio</li>
                        <li>Alterar a estrutura física sem autorização</li>
                    </ul>
                    
                    <h5 class="text-success">4. LIMPEZA E CONSERVAÇÃO</h5>
                    <p>O LOCATÁRIO é responsável por:</p>
                    <ul>
                        <li>Manter o local limpo durante o evento</li>
                        <li>Recolher lixo e detritos ao final</li>
                        <li>Devolver o espaço nas mesmas condições recebidas</li>
                        <li>Comunicar imediatamente qualquer dano ocorrido</li>
                    </ul>
                    
                    <h5 class="text-success">5. SEGURO OBRIGATÓRIO</h5>
                    <p>É obrigatória a contratação de seguro de responsabilidade civil com cobertura mínima de R$ 50.000,00 para eventos com mais de 100 pessoas.</p>
                    
                    <h5 class="text-success">6. PENALIDADES</h5>
                    <p>O descumprimento deste termo pode resultar em:</p>
                    <ul>
                        <li>Retenção total ou parcial da caução</li>
                        <li>Cobrança de multa contratual</li>
                        <li>Encerramento antecipado do evento</li>
                        <li>Ação judicial para ressarcimento de danos</li>
                    </ul>
                    
                    <div class="bg-danger text-white p-3 rounded mt-4">
                        <h6><i class="fas fa-shield-alt me-2"></i>Cláusula de Exoneração</h6>
                        <p class="mb-0">A Casa de Recepções Impacto não se responsabiliza por furtos, roubos, acidentes pessoais ou danos a veículos no estacionamento. Recomendamos a contratação de seguro específico.</p>
                    </div>
                    
                    <div class="bg-bege p-3 rounded mt-3">
                        <h6 class="text-success">Declaração do Locatário</h6>
                        <p class="mb-0">Declaro ter lido, compreendido e aceito todos os termos deste documento, comprometendo-me a cumpri-los integralmente durante a realização do evento.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ route('contrato') }}" class="btn btn-success me-2">Ver Contrato Completo</a>
                <a href="https://wa.me/5511999999999" class="btn btn-outline-success">
                    <i class="fab fa-whatsapp me-2"></i>Esclarecer Dúvidas
                </a>
            </div>
        </div>
    </div>
</div>

<a href="https://wa.me/5511999999999" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
@endsection