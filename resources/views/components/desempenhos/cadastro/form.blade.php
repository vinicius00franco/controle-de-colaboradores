<form action="{{ $action }}" method="GET">
    @csrf


    @if($update)
    @method('PUT')
    @endisset

    <label for="nota_desempenho">Nota de Desempenho (0-10)</label><br>
    <input type="number"
     id="nota_desempenho"
      name="nota_desempenho"
       min="0" max="10" 
       required><br><br>
    
    <button type="submit">Salvar</button>

</form>