@include('top')
    <h2>Adicionar Filme</h2>
    <form action="/create" method="post" class="mt-3">
        @csrf
        <label for="nome" class="form-label mt-1">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">
        <label for="sinopse" class="form-label mt-1">Sinopse</label>
        <textarea name="sinopse" id="sinopse" cols="30" rows="10" class="form-control"></textarea>
        <label for="ano" class="form-label mt-1">Ano de Lançamento</label>
        <input type="number" name="ano" id="ano" min=0 class="form-control">
        <label for="trailer" class="form-label mt-1">Link do Trailer</label>
        <input type="text" name="trailer" id="trailer" min=0 class="form-control">
        <button type="submit" class="btn btn-success mt-2">Enviar</button>
    </form>
@include('bottom')