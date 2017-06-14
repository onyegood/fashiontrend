@extends('layouts.adminlayout')

@section('content')
    @if(Session::has('msg'))
        <div class="alert alert-success">{{ Session::get('msg') }}</div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{ route('updatebrd',$brd->id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="categoryName">Brand Name</label>

                                <div {{ $errors->has('brandName') ? ' has-error' : '' }}>
                                    <input type="text" class="form-control" name="brandName" value="{{ $brd->brandName  }}">
                                </div>
                                @if ($errors->has('brandName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brandName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection