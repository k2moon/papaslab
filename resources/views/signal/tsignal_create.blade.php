@extends('layouts.layout_signal')

@section('content')
        <!-- Display Validation Errors -->
        @include('common.errors')

<div class="container">
    <div class="section">
        <div class="row">
            <form class="col s12" action="{{ route('tsignals.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">mode_edit</i>
                        <input placeholder="S Name" id="sname" name="sname" type="text" class="validate">
                        <label for="sname">S Name</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="scode" name="scode" type="text" class="validate">
                        <label for="scode">S Code</label>
                        
                    </div>
                    <div class="input-field col s4">
                        <input id="skind" name="skind" type="text" class="validate">
                        <label for="skind">S Kind(K)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">mode_edit</i>
                        <input id="tsignal_color" name="tsignal_color" type="text" class="validate">
                        <label for="tsignal_color">TS Color(fb,wr)</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="tsignal_flag" name="tsignal_flag" type="text" class="validate">
                        <label for="tsignal_flag">TS Flag(1,2,3)</label>
                    </div>
                    <div class="input-field col s4">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">mode_edit</i>
                        <input placeholder="TS Price" id="tsignal_price" name="tsignal_price" type="text" class="validate">
                        <label for="tsignal_price">TS Price</label>
                    </div>
                    <div class="input-field col s4">
                        <input placeholder="TS Date" id="tsignal_date" name="tsignal_date" type="text" class="validate">
                        <label for="tsignal_date">TS Date</label>
                    </div>
                    <div class="input-field col s4">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                    <i class="material-icons prefix">mode_edit</i>
                        <input id="low_price" name="low_price" type="text" class="validate">
                        <label for="low_price">Low Price</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="low_date" name="low_date" type="text" class="validate">
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
