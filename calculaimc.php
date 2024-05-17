<?php include 'header.php'?>

<h1 style="text-align:center;">CALCULA TU IMC</h1>
<br><br>

<div>
    <div class="mb-3" style="margin-right:auto; margin-left:auto; width: 300px;">
        <label for="" class="form-label"><h5>Introduzca tu peso en kg (por ej. 65)</h5></label>
        <input
            type="number"
            class="form-control"
            name=""
            id="valor1"
            aria-describedby="helpId"
            placeholder=""
            oninput="Total()"
        />

        <label for="" class="form-label"><h5>Introduzca tu altura en cm (por. ej. 165)</h5></label>
        <input
            type="text"
            class="form-control"
            name=""
            id="valor2"
            aria-describedby="helpId"
            placeholder=""
            oninput="Total()"
        />

        <label for="" class="form-label"><h5>Tu IMC es:</h5></label>
        <input
            type="text"
            class="form-control"
            name=""
            id="total"
            aria-describedby="helpId"
            placeholder=""
            oninput=""
        />


    </div>





<script>
function Total(){
    try{
        var a=parseFloat(document.getElementById("valor1").value) || 0;
        var b=parseFloat(document.getElementById("valor2").value) / 100 || 0;
        var result = a / (b * b);
        var roundedResult = result.toFixed(1); // Redondear a 2 decimales!!!
        document.getElementById("total").value = roundedResult;

        if (result <= 15) {
            document.getElementById("total").value = roundedResult + " - Delgadez muy severa";
        }
        if (result > 15 && result <= 15.9) {
            document.getElementById("total").value = roundedResult + " - Delgadez severa";
        }
        if (result > 16 && result <= 18.4) {
            document.getElementById("total").value = roundedResult + " - Delgadez";
        }
        if (result > 18.5 && result <= 24.9) {
            document.getElementById("total").value = roundedResult + " - Peso saludable";
        }
        if (result > 25 && result <= 29.9) {
            document.getElementById("total").value = roundedResult + " - Sobrepeso";
        }
        if (result > 30 && result <= 34.9) {
            document.getElementById("total").value = roundedResult + " - Obesidad Moderada";
        }
        if (result > 35 && result <= 39.9) {
            document.getElementById("total").value = roundedResult + " - Obesidad Severa";
        }
        if (result > 40) {
            document.getElementById("total").value = roundedResult + " - Obesidad muy severa";
    } else {
            
        }
    } catch(e) {
        console.error("Error:", e);}
}

        
    </script>
    
    </div>




<p style="margin-left: 40px;">*Para la mayoría de los adultos, un IMC ideal está en el rango de 18,5 a 24,9.</p>


<div
    class="table-responsive"
>
    <table
        class="table table-primary" style="width: 700px; margin-left:140px;"
    >
        <thead>
            <tr>
                <th scope="col">Indica de Masa Corporal</th>
                <th scope="col">Tu rango</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">15 o menos</td>
                <td>Delgadez muy severa</td>
            </tr>
            <tr class="">
                <td scope="row">15-15.9</td>
                <td>Delgadez severa</td>
            </tr>
            <tr class="">
                <td scope="row">16-18.4</td>
                <td>Delgadez</td>
            </tr>
            <tr class="">
                <td scope="row">18.5-24.9</td>
                <td>Peso saludable</td>
            </tr>
            <tr class="">
                <td scope="row">25-29.9</td>
                <td>Sobrepeso</td>
            </tr>
            <tr class="">
                <td scope="row">30-34.9</td>
                <td>Obesidad Moderada</td>
            </tr>
            <tr class="">
                <td scope="row">35-39.9</td>
                <td>Obesidad Severa</td>
            </tr>
            <tr class="">
                <td scope="row">40 o más</td>
                <td>Obesidad muy severa (Obesidad mórbida)</td>
            </tr>
        </tbody>
    </table>


    
</div>

<?php include 'footer.php'?>


    

