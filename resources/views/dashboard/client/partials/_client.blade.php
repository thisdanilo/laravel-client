<div class="card card-outline card-secondary">

    <div class="card-header">
        <h3 class="card-title">
            Dados do Clientes
        </h3>
    </div>

    <div class="card-body">
        <div class="row">

            @if ($show ?? false)
                {{-- Nome --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nome:</span></label>
                        <input type="text" class="form-control" readonly value="{{ $client->name }}">
                    </div>
                </div>

                {{-- CPF --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>CPF:</span></label>
                        <input type="text" class="form-control" readonly value="{{ $client->cpf }}">
                    </div>
                </div>

                {{-- Email --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Email:</span></label>
                        <input type="text" class="form-control" readonly value="{{ $client->email }}">
                    </div>
                </div>

                {{-- Ativo --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Ativo:</label>
                        <input type="text" class="form-control" readonly value="{{ $client->formatted_active }}">
                    </div>
                </div>
            @elseif (isset($client))
                {{-- Nome --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nome:<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ $client->name }}" required>
                    </div>
                </div>

                {{-- CPF --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>CPF:<span class="text-danger">*</span></label>
                        <input type="text" name="cpf" class="form-control cpf" value="{{ $client->cpf }}" required>
                    </div>
                </div>

                {{-- Email --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Email:<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" value="{{ $client->email }}" required>
                    </div>
                </div>

                {{-- Ativo --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Ativo:<span class="text-danger">*</span></label>
                        <select name="active" class="form-control" style="width: 100%;" required>

                            <option value="1" @if ($client->active) selected @endif>Sim</option>
                            <option value="0" @if (!$client->active) selected @endif>Não</option>

                        </select>
                    </div>
                </div>
            @else
                {{-- Nome --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nome:<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>

                {{-- CPF --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>CPF:<span class="text-danger">*</span></label>
                        <input type="text" name="cpf" class="form-control cpf" required>
                    </div>
                </div>

                {{-- Email --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Email:<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>

                {{-- Ativo --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Ativo:<span class="text-danger">*</span></label>
                        <select name="active" class="form-control" style="width: 100%;" required>

                            <option value="1" selected>Sim</option>
                            <option value="0">Não</option>

                        </select>
                    </div>
                </div>
            @endif

        </div>
    </div>

    <div class="card-footer"></div>

</div>
