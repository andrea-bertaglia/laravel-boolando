<div class="card-img position-relative">
    <img class="w-100" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="{{'Articolo: ' . $product['name'] . ' - Brand: ' . $product['name']}}">

    {{-- stampo il like se è presente --}}
    @if($product['isInFavorites'])
    <span class="ms_like"><i class="fa-solid fa-heart"></i></span>
    @endif
    
    {{-- badges (se presenti) --}}
    <div class="ms_labels">
        {{-- separo in due foreach per questioni di layout (per stampare prima lo sconto e poi il tag) --}}
        @foreach ($product['badges'] as $badge)
                {{-- aggiungo una variabile per memorizzare l'importo dello sconto --}}
                @php $amount_discount = 0 @endphp
                @if($badge['type'] === 'discount')
                    <span class="ms_discount">{{$badge['value']}}</span>
                        {{-- se è prsente il value discount, calcolo l'importo dello sconto (valore negativo) --}}
                        @php $amount_discount = round($product['price'] * intval($badge['value']) / 100, 2) @endphp
                @endif
            @endforeach
            @foreach ($product['badges'] as $badge)
                @if($badge['type'] === 'tag')
                    <span class="ms_category">{{$badge['value']}}</span>
                @endif
        @endforeach
    </div>
    {{-- /badges (se presenti) --}}

</div>
<div class="card-text d-flex flex-column pb-4">
    <span class="small">{{$product['brand']}}</span>
    <span class="fw-bold fs-6">{{strtoupper($product['name'])}}</span>
    <div>
        <span class="me-1 text-danger fw-bold fs-6">{{($product['price'] + $amount_discount )}} €</span>

        {{-- se non c'è lo sconto, stampo il prezzo originale --}}
        @if($amount_discount !== 0)
        <span class="text-decoration-line-through">{{$product['price']}} €</span>
        @endif
        
    </div>
</div>
