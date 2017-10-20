@extends('layouts.admin')

@section('content')
    <h3>Import Products Csv</h3>

    <form method="post" action="{{ route('products.import') }}" enctype="multipart/form-data">

        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label class="control-label">Import</label>
                        <input type="file" name="import" class="form-control-file required" />
                        <p class="help-block"></p>
                        @if($errors->has('import_file'))
                            <p class="help-block">
                                {{ $errors->first('import_file') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" id="submit" value="Submit" class="btn btn-primary" />
    </form>
@endsection