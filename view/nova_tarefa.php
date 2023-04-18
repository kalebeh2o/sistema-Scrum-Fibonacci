<div class="container my-5">
  <h1 class="mb-4">Nova Tarefa</h1>
  <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="criar">
    <div class="form-group">
      <label for="exampleFormControlInput1">Nome da sua tarefa:</label>
      <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Dificuldade Fibonacci:</label>
      <select class="form-control" id="exampleFormControlSelect2" name="fibonacci">
        <option value="1">1 - POP 100</option>
        <option value="2">2 - Yamaha 600</option>
        <option value="3">3 - Mercedes Benz</option>
        <option value="5">5 - Monoposto F1</option>
        <option value="8">8 - Satélite XPT32</option>
        <option value="13">13 - Foguete SpaceX</option>
        <option value="21">21 - Máquina do Tempo</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descrição da sua tarefa:</label>
      <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Criar Tarefa</button>
    </div>
  </form>
</div>