<div class="details accordion" id="detailsAccordion">
    @foreach($trip['details'] as $detail)
        @if($loop->first)
        <a href="#" class="" data-toggle="collapse" data-target="#collapse-{{ $detail->id }}" aria-expanded="true" aria-controls="collapse-{{ $detail->id }}">
        @else
        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse-{{ $detail->id }}" aria-expanded="false" aria-controls="collapse-{{ $detail->id }}"> 
        @endif
            <div class="detail-title" id="headingOne-{{ $detail->id }}">     
                    
                {{ $detail->title }}
                <img class='accordian-arrow' src="{{ asset('img/arrow-down-sign-to-navigate.svg') }}"/>
            </div>    
        </a>
        
        @if($loop->first)
        <div id="collapse-{{ $detail->id }}" class="collapse show" aria-labelledby="headingOne-{{ $detail->id }}" data-parent="#detailsAccordion">
        @else
        <div id="collapse-{{ $detail->id }}" class="collapse" aria-labelledby="headingOne-{{ $detail->id }}" data-parent="#detailsAccordion">
        @endif
             <div class="normalizer">{!! $detail->text !!}</div>
             <hr/>
        </div>
        
        
    @endforeach
</div> 

<h3 class="detail-title"></h3>
