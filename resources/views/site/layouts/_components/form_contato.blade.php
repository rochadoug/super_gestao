{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf {{-- token requisitado pelo laravel --}}
    <input name="nome" type="text" value="{{old('nome')}}" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" type="text" value="{{old('telefone')}}" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" type="text" value="{{old('email')}}" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo"  class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_c as $id => $motivo)
        <option value="{{ $motivo->id }}" {{ old('motivo') == $motivo->id ? 'selected' :'' }}>{{ $motivo->motivo_contato}}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem"  class="{{ $classe }}">{{ (old('mensagem')) != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
