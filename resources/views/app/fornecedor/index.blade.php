
{{-- Comentário com a sintax blade --}}


{{-- @php

@endphp --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Listando {{count($fornecedores)}} fornecedores cadastrados </h3>
    @elseif( count($fornecedores) > 10)
    <h3> Listando {{count($fornecedores)}} cadastrados, acima de 10 </h3>
     @else
    <h3> Não há fornecedor cadastrado </h3>
@endif
@isset($fornecedores)
    @for ($i = 0 ; isset($fornecedores[$i]) ; $i++)
        
    
    <p><strong>Fornecedor:</strong> {{ $fornecedores[$i]['nome'] }}</p>
    <p><strong>Status:</strong> {{ $fornecedores[$i]['status'] }}</p>
    <p>
        <strong>CNPJ:</strong> {{ $fornecedores[$i]['cnpj'] ?? 'Vazio' }}
    </p>
    <p><strong>Telefone:</strong> ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
    <p>
        <strong>Estado:</strong> 
        @switch($fornecedores[$i]['ddd'])
            @case('11') 
                São Paulo - SP
            @break
            @case('85') 
                Fortaleza - CE
            @break
            @case('32') 
                
                Juiz de Fora - MG
            @break
            @default
                Não indentificado
        @endswitch
    </p>
    <hr>
    @endfor
@endisset