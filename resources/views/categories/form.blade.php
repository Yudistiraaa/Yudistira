<div class="row">
    <div class="col-md-6">
        <div class="form-group col-md-12 {{ $errors->has('code') ? ' has-error' : '' }}">
            <label for="" class="control-label">Kode Produk</label>
            {!! Form::text('code', null, ['class'=>'form-control']) !!}
            {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group col-md-12 {{ $errors->has('code') ? ' has-error' : '' }}">
            <label for="" class="control-label">Nama Produk</label>
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>



<div class="form-group col-md-12">
    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
@endpush