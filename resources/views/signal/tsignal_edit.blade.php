@extends('layouts.layout_signal')

@section('content')
        <!-- Display Validation Errors -->
        @include('common.errors')
<div class="container">
    <div class="section" id="tsignal_update">
        <div class="row">
            <form class="col s12" action="{{ url('tsignals/'.$tsignals_find->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">mode_edit</i>
                        <input placeholder="S Name" id="sname" name="sname" type="text" class="validate" value="{{ $tsignals_find->sname }}">
                        <label for="sname">S Name</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="scode" name="scode" type="text" class="validate" value="{{ $tsignals_find->scode }}">
                        <label for="scode">S Code</label>
                        
                    </div>
                    <div class="input-field col s4">
                        <input id="skind" name="skind" type="text" class="validate">
                        <label for="skind" value="{{ $tsignals_find->skind }}">S Kind(K)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">mode_edit</i>
                        <input id="tsignal_color" name="tsignal_color" type="text" class="validate" value="{{ $tsignals_find->tsignal_color }}">
                        <label for="tsignal_color">TS Color</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="tsignal_flag" name="tsignal_flag" type="text" class="validate" value="{{ $tsignals_find->tsignal_flag }}">
                        <label for="tsignal_flag">TS Flag</label>
                    </div>
                    <div class="input-field col s4">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">mode_edit</i>
                        <input placeholder="TS Price" id="tsignal_price" name="tsignal_price" type="text" class="validate" value="{{ $tsignals_find->tsignal_price }}">
                        <label for="tsignal_price">TS Price</label>
                    </div>
                    <div class="input-field col s4">
                        <input placeholder="TS Date" id="tsignal_date" name="tsignal_date" type="text" class="validate" value="{{ $tsignals_find->tsignal_date }}">
                        <label for="tsignal_date">TS Date</label>
                    </div>
                    <div class="input-field col s4">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                    <i class="material-icons prefix">mode_edit</i>
                        <input id="low_price" name="low_price" type="text" class="validate" value="{{ $tsignals_find->low_price }}">
                        <label for="low_price">Low Price</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="low_date" name="low_date" type="text" class="validate" value="{{ $tsignals_find->low_date }}">
                        <label for="low_date">Low Date</label>
                    </div>
                    <div class="input-field col s4">
                        
                    </div>
                </div>
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
