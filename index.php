<?php
include('header.php');
?>

</br></br>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <h3>Calculadora de consumo de energia elétrica</h3>
            </br>
        </div>
    </div>
    <script src="main.js"></script>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <form method="get">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Quantidade de dias:</label>
                    <input type="number" class="form-control" name="qtdDias" id="qtdDias" placeholder="Quantidade">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Horas de uso por dia:</label>
                    <input type="number" class="form-control" name="qtdHoras" id="qtdHoras" placeholder="Horas">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Potência do aparelho:</label>
                    <input type="number" class="form-control" name="potencia" id="potencia" placeholder="Potência">
                </div>
                </br><input type="button" class="btn btn-primary" value="Calcular" onClick="main()">
            </form></br>
            <div class="resposta"></div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>