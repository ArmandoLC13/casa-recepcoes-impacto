@extends('layout')

@section('title', 'Contrato')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="section-title text-center">Contrato de Locação</h1>
            
            <div class="card">
                <div class="card-body">
                    <h3 class="text-success mb-4">Termos e Condições de Locação</h3>
                    
                    <h5 class="text-success">1. OBJETO DO CONTRATO</h5>
                    <p>A Casa de Recepções Impacto, doravante denominada LOCADORA, cede em locação ao LOCATÁRIO o espaço para realização de eventos, incluindo salão principal, área externa, cozinha e demais dependências conforme especificado na proposta.</p>
                    
                    <h5 class="text-success">2. PRAZO E HORÁRIO</h5>
                    <p>A locação será pelo período especificado no contrato, respeitando os horários de montagem, evento e desmontagem. Horário padrão: das 08h às 02h do dia seguinte.</p>
                    
                    <h5 class="text-success">3. VALOR E FORMA DE PAGAMENTO</h5>
                    <ul>
                        <li>Sinal de 50% na assinatura do contrato</li>
                        <li>Saldo restante até 15 dias antes do evento</li>
                        <li>Caução de R$ 1.000,00 (devolvida em até 30 dias após o evento)</li>
                    </ul>
                    
                    <h5 class="text-success">4. RESPONSABILIDADES DO LOCATÁRIO</h5>
                    <ul>
                        <li>Zelar pela conservação do imóvel e equipamentos</li>
                        <li>Respeitar a capacidade máxima do local</li>
                        <li>Contratar seguro de responsabilidade civil</li>
                        <li>Cumprir normas de segurança e legislação vigente</li>
                        <li>Não permitir uso de drogas ilícitas no local</li>
                    </ul>
                    
                    <h5 class="text-success">5. RESPONSABILIDADES DA LOCADORA</h5>
                    <ul>
                        <li>Entregar o espaço limpo e em perfeitas condições</li>
                        <li>Fornecer equipamentos básicos conforme acordado</li>
                        <li>Disponibilizar equipe de apoio durante o evento</li>
                        <li>Manter sistemas elétrico e hidráulico funcionando</li>
                    </ul>
                    
                    <h5 class="text-success">6. CANCELAMENTO</h5>
                    <p>Em caso de cancelamento pelo locatário:</p>
                    <ul>
                        <li>Até 60 dias antes: devolução de 80% do valor pago</li>
                        <li>Até 30 dias antes: devolução de 50% do valor pago</li>
                        <li>Menos de 30 dias: sem devolução</li>
                    </ul>
                    
                    <h5 class="text-success">7. DISPOSIÇÕES GERAIS</h5>
                    <p>Este contrato é regido pelas leis brasileiras. Eventuais conflitos serão resolvidos no foro da comarca local. Alterações devem ser feitas por escrito e assinadas por ambas as partes.</p>
                    
                    <div class="bg-bege p-3 rounded mt-4">
                        <h6 class="text-success">Importante:</h6>
                        <p class="mb-0">Este é um modelo de contrato. Os termos específicos serão definidos conforme cada evento e necessidade do cliente.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ route('orcamento') }}" class="btn btn-success me-2">Solicitar Orçamento</a>
                <a href="https://wa.me/5511999999999" class="btn btn-outline-success">
                    <i class="fab fa-whatsapp me-2"></i>Falar Conosco
                </a>
            </div>
        </div>
    </div>
</div>

<a href="https://wa.me/5511999999999" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
@endsection