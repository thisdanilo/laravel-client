<div class="card card-outline card-secondary">

    <div class="card-header">
        <h3 class="card-title">
            Dados do Endereço
        </h3>
    </div>

    <div class="card-body">
        <div class="row">

            @if ($show ?? false)
                {{-- CEP --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">CEP</label>
                        <input type="tel" name="zipcode" class="form-control zipcode" readonly value="{{ $address->zipcode }}" />
                    </div>
                </div>

                {{-- Logradouro --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Logradouro</label>
                        <input type="text" class="form-control" readonly value="{{ $address->street }}" />
                    </div>
                </div>

                {{-- Número --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Número</label>
                        <input type="text" class="form-control" readonly value="{{ $address->number }}" />
                    </div>
                </div>

                {{-- Complemento --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Complemento</label>
                        <input type="text" class="form-control" readonly value="{{ $address->comp }}" />
                    </div>
                </div>

                {{-- Bairro --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Bairro</label>
                        <input type="text" class="form-control district" readonly value="{{ $address->district }}" />
                    </div>
                </div>

                {{-- Ponto de Referência --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Ponto de Referência</label>
                        <input type="text" class="form-control" readonly value="{{ $address->info }}" />
                    </div>
                </div>

                {{-- UF --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">UF</label>
                        <input type="text" class="form-control" readonly value="{{ $address->uf }}" />
                    </div>
                </div>

                {{-- Cidade --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Cidade</label>
                        <input type="text" class="form-control" readonly value="{{ $address->city }}" />
                    </div>
                </div>
            @elseif (isset($address))
                {{-- CEP --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">CEP<span class="text-danger">*</span></label>
                        <input type="tel" name="zipcode" class="form-control zipcode" required minlength="9" value="{{ $address->zipcode }}" />
                    </div>
                </div>

                {{-- Logradouro --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Logradouro<span class="text-danger">*</span></label>
                        <input type="text" name="street" class="form-control" required value="{{ $address->street }}" />
                    </div>
                </div>

                {{-- Número --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Número<span class="text-danger">*</span></label>
                        <input type="text" name="number" class="form-control" required value="{{ $address->number }}" />
                    </div>
                </div>

                {{-- Complemento --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Complemento</label>
                        <input type="text" name="comp" class="form-control" value="{{ $address->comp }}" />
                    </div>
                </div>

                {{-- Bairro --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Bairro<span class="text-danger">*</span></label>
                        <input type="text" name="district" class="form-control district" required value="{{ $address->district }}"/>
                    </div>
                </div>

                {{-- Ponto de Referência --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Ponto de Referência</label>
                        <input type="text" name="info" class="form-control" value="{{ $address->info }}"/>
                    </div>
                </div>

                {{-- UF --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">UF<span class="text-danger">*</span></label>
                        <input type="text" name="uf" class="form-control" required value="{{ $address->uf }}"/>
                    </div>
                </div>

                {{-- Cidade --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Cidade<span class="text-danger">*</span></label>
                        <input type="text" name="city" class="form-control" required value="{{ $address->city }}"/>
                    </div>
                </div>
            @else
                {{-- CEP --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">CEP<span class="text-danger">*</span></label>
                        <input type="tel" name="zipcode" class="form-control zipcode" required minlength="9" />
                    </div>
                </div>

                {{-- Logradouro --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Logradouro<span class="text-danger">*</span></label>
                        <input type="text" name="street" class="form-control" required />
                    </div>
                </div>

                {{-- Número --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Número<span class="text-danger">*</span></label>
                        <input type="text" name="number" class="form-control" required />
                    </div>
                </div>

                {{-- Complemento --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Complemento</label>
                        <input type="text" name="comp" class="form-control" />
                    </div>
                </div>

                {{-- Bairro --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Bairro<span class="text-danger">*</span></label>
                        <input type="text" name="district" class="form-control district" required />
                    </div>
                </div>

                {{-- Ponto de Referência --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Ponto de Referência</label>
                        <input type="text" name="info" class="form-control" />
                    </div>
                </div>

                {{-- UF --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">UF<span class="text-danger">*</span></label>
                        <input type="text" name="uf" class="form-control" required />
                    </div>
                </div>

                {{-- Cidade --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">Cidade<span class="text-danger">*</span></label>
                        <input type="text" name="city" class="form-control" required />
                    </div>
                </div>
            @endif

        </div>
    </div>

    <div class="card-footer"></div>

</div>
