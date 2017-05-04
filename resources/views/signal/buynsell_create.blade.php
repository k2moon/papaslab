@extends('layouts.layout_signal')

@section('content')

<div class="container">
    <div class="section">
        <div class="row">
           <form class="col s12" action="{{ route('buynsells.store') }}" method="POST">
            {{ csrf_field() }}
            <input id="tsignal_id" name="tsignal_id" type="hidden" class="validate" value="{{ $tsignals_show->id }}">
            <input id="sname" name="sname" type="hidden" class="validate" value="{{ $tsignals_show->sname }}">
            <input id="scode" name="scode" type="hidden" class="validate" value="{{ $tsignals_show->scode }}">
            
            <div class="row">
                <div class="input-field col s12">
                    <h4>
                    <i class="material-icons">shopping_cart</i>
                    Buy N Sell Create
                    </h4>                    
                </div>
            </div>
           
            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">mode_edit</i>
                    <input id="buy_price" name="buy_price" type="text" class="validate">
                    <label for="buy_price">BUY Price</label>
                </div>
                <div class="input-field col s4">
                    <input id="base_price" name="base_price" type="text" class="validate">
                    <label for="base_price">BASE Price</label>
                </div>
                <div class="input-field col s4">
                    <input id="buy_date" name="buy_date" type="text" class="validate">
                    <label for="buy_date">BUY Date</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                <i class="material-icons prefix">mode_edit</i>
                    <input id="sell_price" name="sell_price" type="text" class="validate" value="0">
                    <label for="sell_price">SELL Price</label>
                </div>
                <div class="input-field col s4">
                    <input id="sell_date" name="sell_date" type="text" class="validate">
                    <label for="sell_date">SELL Date</label>
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