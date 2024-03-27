<link rel="stylesheet" href="../../Assets/css/filtro.css">
<link rel="stylesheet" href="../../Assets/css/filtroMQ.css">
<menu class="filtros" id="filtros">
    <div class="tipo">
        <p>Tipo</p>
        <select name="tipo" id="tipo" >
        <option value="monitor">Monitor</option>
         <option value="cpu" selected>Cpu</option>
        <option value="caixa-de-som">Caixa de som</option>
        <option value="televisão">Televisõa</option>
        </select>
    </div>
    <div class="marca">
        <select name="marca" id="marca">
            <option value="hp">HP</option>
            <option value="dell">Dell</option>
            <option value="lenovo" selected>Lenovo</option>
            <option value="samsung">Samsung</option>
            <option value="aoc">AOC</option>
            <option value="apple">Apple</option>
        </select>
    </div>
    <div class="funciona">
        <select name="funciona" id="funciona">
            <option value="sim">Sim</option>
            <option value="não">Não</option>
        </select>
    </div>
    <div class="descricao">
        <p>Descricão</p>
        <input type="text" name="descricao" id="descricao">
    </div>
    <div class="modelo">
        <p>Modelo</p>
        <input type="text" name="modelo" id="modelo">
    </div>
</menu>
<script src="../../Assets/js/filtro.js"></script>