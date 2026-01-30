@extends('layout')

@section('title', 'Orçamento')

@section('content')
<div class="container py-5">
    <h1 class="section-title text-center">Solicitar Orçamento</h1>
    
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-success mb-4">Preencha os dados do seu evento</h3>
                    
                    <form action="{{ route('orcamento.enviar') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nome" class="form-label">Nome Completo *</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telefone" class="form-label">Telefone/WhatsApp *</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="evento" class="form-label">Tipo de Evento *</label>
                                <select class="form-select" id="evento" name="evento" required>
                                    <option value="">Selecione...</option>
                                    <option value="Casamento">Casamento</option>
                                    <option value="Aniversário">Aniversário</option>
                                    <option value="Formatura">Formatura</option>
                                    <option value="Confraternização">Confraternização</option>
                                    <option value="Evento Corporativo">Evento Corporativo</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="data" class="form-label">Data do Evento *</label>
                                <input type="date" class="form-control" id="data" name="data" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="convidados" class="form-label">Número de Convidados *</label>
                                <select class="form-select" id="convidados" name="convidados" required>
                                    <option value="">Selecione...</option>
                                    <option value="Até 50">Até 50 pessoas</option>
                                    <option value="51 a 100">51 a 100 pessoas</option>
                                    <option value="101 a 150">101 a 150 pessoas</option>
                                    <option value="151 a 200">151 a 200 pessoas</option>
                                    <option value="201 a 250">201 a 250 pessoas</option>
                                    <option value="251 a 300">251 a 300 pessoas</option>
                                    <option value="Mais de 300">Mais de 300 pessoas</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="horario" class="form-label">Horário Preferido</label>
                                <select class="form-select" id="horario" name="horario">
                                    <option value="">Selecione...</option>
                                    <option value="Manhã">Manhã (8h às 12h)</option>
                                    <option value="Tarde">Tarde (12h às 18h)</option>
                                    <option value="Noite">Noite (18h às 2h)</option>
                                    <option value="Dia todo">Dia todo</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="observacoes" class="form-label">Observações Adicionais</label>
                            <textarea class="form-control" id="observacoes" name="observacoes" rows="4" placeholder="Descreva detalhes específicos do seu evento, necessidades especiais, decoração desejada, etc."></textarea>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="fab fa-whatsapp me-2"></i>Enviar via WhatsApp
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <h2 class="section-title text-center">Tabela de Preços</h2>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card price-card h-100">
                        <div class="card-body text-center">
                            <h4 class="text-success">Pacote Básico</h4>
                            <h2 class="text-success">R$ 2.500</h2>
                            <p class="text-muted">Até 100 pessoas</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Salão por 8 horas</li>
                                <li><i class="fas fa-check text-success me-2"></i>Mesas e cadeiras</li>
                                <li><i class="fas fa-check text-success me-2"></i>Som básico</li>
                                <li><i class="fas fa-check text-success me-2"></i>Iluminação</li>
                                <li><i class="fas fa-check text-success me-2"></i>Estacionamento</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card price-card h-100 border-success">
                        <div class="card-body text-center">
                            <div class="badge bg-success mb-2">Mais Popular</div>
                            <h4 class="text-success">Pacote Completo</h4>
                            <h2 class="text-success">R$ 4.200</h2>
                            <p class="text-muted">Até 200 pessoas</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Salão por 12 horas</li>
                                <li><i class="fas fa-check text-success me-2"></i>Mesas e cadeiras</li>
                                <li><i class="fas fa-check text-success me-2"></i>Som profissional</li>
                                <li><i class="fas fa-check text-success me-2"></i>Iluminação especial</li>
                                <li><i class="fas fa-check text-success me-2"></i>Área externa</li>
                                <li><i class="fas fa-check text-success me-2"></i>Decoração básica</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card price-card h-100">
                        <div class="card-body text-center">
                            <h4 class="text-success">Pacote Premium</h4>
                            <h2 class="text-success">R$ 6.800</h2>
                            <p class="text-muted">Até 300 pessoas</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Salão por 16 horas</li>
                                <li><i class="fas fa-check text-success me-2"></i>Mesas e cadeiras</li>
                                <li><i class="fas fa-check text-success me-2"></i>Som e DJ</li>
                                <li><i class="fas fa-check text-success me-2"></i>Iluminação cênica</li>
                                <li><i class="fas fa-check text-success me-2"></i>Área externa completa</li>
                                <li><i class="fas fa-check text-success me-2"></i>Decoração personalizada</li>
                                <li><i class="fas fa-check text-success me-2"></i>Equipe de apoio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle me-2"></i>
                <strong>Importante:</strong> Os preços podem variar conforme data, horário e serviços adicionais. Entre em contato para um orçamento personalizado.
            </div>
        </div>
    </div>
</div>

<a href="https://wa.me/5511999999999" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
@endsection