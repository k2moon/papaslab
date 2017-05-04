@extends('layouts.layout_signal')

@section('content')

<div class="container">
    <div class="section">
        <div class="row">
            <ul class="collapsible" data-collapsible="expandable">
            @forelse($tsignals as $tsignal)
                <li>
                    <div class="collapsible-header">
                    @if($tsignal->tsignal_color == "fb") 
                        <span class="badge blue white-text" data-badge-caption="">{{ $tsignal->tsignal_flag }}</span> 
                        <i class="material-icons blue-text">filter_drama</i>
                        <i class="material-icons blue-text">call_received</i>
                    @elseif($tsignal->tsignal_color == "wr") 
                        <span class="badge red white-text" data-badge-caption="">{{ $tsignal->tsignal_flag }}</span> 
                        <i class="material-icons red-text">whatshot</i>
                        <i class="material-icons red-text">call_made</i>
                    @else
                        <span class="badge grey white-text" data-badge-caption="">{{ $tsignal->tsignal_flag }}</span> 
                        <i class="material-icons">swap_vert</i>
                        <i class="material-icons">swap_horiz</i>
                        
                    @endif 
                       {{ $tsignal->sname }} ({{ $tsignal->scode }}) S : ({{ $tsignal->tsignal_price }} / {{ $tsignal->tsignal_date }}) L : ({{ $tsignal->low_price }} / {{ $tsignal->low_date }})
                    </div>
                    <div class="collapsible-body">
                        <div class="row">
                            <div class="col s3">
                                <img src="http://chart.mt.co.kr/chart_body.php?Code={{ $tsignal->scode }} " width="10px" alt="" />
                            </div>
                            <div class="col s7"> {{-- contents --}} </div>
                            <div class="col s1">
                                <a href="{{ url('tsignals/'.$tsignal->id.'/edit') }}">
                                    <button type="button" name="update" value="3" class="btn-floating btn-tiny waves-effect waves-light blue">
                                        <i class="material-icons">mode_edit</i>
                                    </button>
                                </a>
                            </div>
                            <div class="col s1">
                                <form action="{{ url('tsignals/'.$tsignal->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-task-{{ $tsignal->id }}" name="action" class="btn-floating btn-tiny waves-effect waves-light red">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li>{{ trans('errors.not_found_description') }}</li>
            @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection