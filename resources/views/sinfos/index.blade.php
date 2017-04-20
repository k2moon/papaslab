@extends('layouts.sinfos_master')

@section('content')
        <!-- Display Validation Errors -->
        @include('common.errors')
<div class="section" id="signal_list">
    <div class="row">
        <table class="bordered">
        <thead>
          <tr>
              <th>::Scode::</th>
              <th>::SName::</th>
              <th>::Del::</th>
          </tr>
        </thead>
        <tbody>
         @forelse($sinfos as $sinfo)
          <tr>
            <td>{{ $sinfo->scode }}</td>
            <td>{{ $sinfo->sname }}
            @if($sinfo->skind == "kd") (K) @endif
            </td>
            <td>
                <form action="{{ url('sinfos/'.$sinfo->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" id="delete-task-{{ $sinfo->id }}" name="action" class="btn-floating btn-tiny waves-effect waves-light red">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
          </tr>
            @empty
            <tr>
            <td colspan="3">{{ trans('errors.not_found_description') }}</td>
          </tr>
        @endforelse  
        </tbody>
      </table>
    </div>
</div>
<div class="section" id="sinfo_list">
    <div class="row">
        <table class="bordered">
        <thead>
          <tr>
              <th>::Scode::</th>
              <th>::SName::</th>
              <th>::Del::</th>
          </tr>
        </thead>
        <tbody>
         @forelse($sinfos as $sinfo)
          <tr>
            <td>{{ $sinfo->scode }}</td>
            <td>{{ $sinfo->sname }}
            @if($sinfo->skind == "kd") (K) @endif
            </td>
            <td>
                <form action="{{ url('sinfos/'.$sinfo->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" id="delete-task-{{ $sinfo->id }}" name="action" class="btn-floating btn-tiny waves-effect waves-light red">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
          </tr>
            @empty
            <tr>
            <td colspan="3">{{ trans('errors.not_found_description') }}</td>
          </tr>
        @endforelse  
        </tbody>
      </table>
    </div>
</div>
<div class="section" id="sinfo_create">
    <div class="row">
        <form class="col s12" action="{{ route('sinfos.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="history" value="first isnert">
            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">mode_edit</i>
                    <input placeholder="Placeholder" id="scode" name="scode" type="text" class="validate">
                    <label for="scode">S Code</label>
                </div>
                <div class="input-field col s4">
                    <input id="sname" name="sname" type="text" class="validate">
                    <label for="sname">S Name</label>
                </div>
                <div class="input-field col s4">
                    <p>
                    <input name="skind" type="radio" id="skind1" checked="checked" value="kp" />
                    <label for="skind1">KP</label>
                    
                    <input name="skind" type="radio" id="skind2" value="kd" />
                    <label for="skind2">KD</label>
                    </p>
                    <label for="skind">S Kind</label>
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
<div class="section" id="tsignal_create">
    <div class="row">
        <form class="col s12" action="{{ route('tsignals.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">mode_edit</i>
                    <input placeholder="S Code" id="scode" name="scode" type="text" class="validate">
                    <label for="scode">S Code</label>
                </div>
                <div class="input-field col s4">
                    <input id="sname" name="sname" type="text" class="validate">
                    <label for="sname">S Name</label>
                </div>
                <div class="input-field col s4">
                    
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">mode_edit</i>
                    <input id="tsignal_color" name="tsignal_color" type="text" class="validate">
                    <label for="tsignal_color">TS Color</label>
                </div>
                <div class="input-field col s4">
                    <input id="tsignal_flag" name="tsignal_flag" type="text" class="validate">
                    <label for="tsignal_flag">TS Flag</label>
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
<div class="section" id="buynsell_create">
    <div class="row">
        <form class="col s12" action="{{ route('sinfos.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="history" value="first isnert">
            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">mode_edit</i>
                    <input placeholder="Placeholder" id="scode" name="scode" type="text" class="validate">
                    <label for="scode">S Code</label>
                </div>
                <div class="input-field col s4">
                    <input id="sname" name="sname" type="text" class="validate">
                    <label for="sname">S Name</label>
                </div>
                <div class="input-field col s4">
                    <p>
                    <input name="skind" type="radio" id="skind1" checked="checked" value="kp" />
                    <label for="skind1">KP</label>
                    
                    <input name="skind" type="radio" id="skind2" value="kd" />
                    <label for="skind2">KD</label>
                    </p>
                    <label for="skind">S Kind</label>
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

@endsection
