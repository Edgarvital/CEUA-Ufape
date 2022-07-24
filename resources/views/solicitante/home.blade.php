<div class="container">
    <div class="row" style="border-bottom: #131833 2px solid">
        <span class="titulo text-center">Solicitações</span>
    </div>
</div>

<div class="container text-center">
    <div class="row justify-content-center mt-5">
        <div class="col-1">
        </div>
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-1">
                </div>
                <div class="col-4">
                    <div class="text-center p-5 shadow caixaSelecao" style="background-color: #131833">
                        <a data-toggle="modal" data-target="#solicitacaoModal">
                            <div class="col-md-12 pt-4">
                                <div class="text-center">
                                    <img class="pb-3" src="images/solicitacao.svg" height="120px">
                                </div>
                                <div class="text-center align-middle">
                                    <div class="textoCaixa">Solicitar</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2">
                </div>
                <div class="col-4">
                    <div class="text-center p-5 shadow caixaSelecao" style="background-color: #143BC2">
                        <a href="#">
                            <div class="text-center">
                                <img class="pb-3" src="images/vertical_split.svg" height="120px">
                            </div>
                            <div class="text-center">
                                <div style="color: white" class="textoCaixa">Minhas Solicitações</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
        <div class="col-1">

        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="solicitacaoModal" tabindex="-1" role="dialog" aria-labelledby="solicitacaoModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center pb-0">
                    <h5 class="modal-title w-100 titulo" id="solicitacaoModalTitle" style="font-size: 24px">Criar Solicitação</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form method="POST" action="{{route('solicitacao.inicio')}}">
                @csrf
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <h5>Selecione o tipo da sua solicitação:</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="Ensino" checked>
                                <label class="form-check-label" for="tipo1">
                                    Ensino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="tipo2" value="Extencao">
                                <label class="form-check-label" for="tipo2">
                                    Extenção
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="tipo3" value="Pesquisa">
                                <label class="form-check-label" for="tipo3">
                                    Pesquisa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="tipo4" value="Treinamento">
                                <label class="form-check-label" for="tipo4">
                                    Treinamento
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                    <button type="submit" class="btn btn-success">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>
