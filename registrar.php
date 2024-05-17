<?php include 'header.php'?>







<div
    class="container" style="margin-top:40px; width: 300px;"
>

<form action="registrar2.php" method="post">
    <div class="mb-3">
        <label for="" class="form-label">Codigo del nuevo cliente</label>
        <input
            type="text"
            class="form-control"
            name="codigo"
            id=""
            aria-describedby="helpId"
            placeholder="Código sólo con números" required
        />
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Nombre del cliente</label>
        <input
            type="text"
            class="form-control"
            name="nombre"
            id=""
            aria-describedby="helpId"
            placeholder="nombre" required
        />
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Correo del cliente</label>
        <input
            type="text"
            class="form-control"
            name="correo"
            id=""
            aria-describedby="helpId"
            placeholder="correo electrónico" required
        />
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de alta de registro</label>
        <input
            type="date"
            class="form-control"
            name="fecha_alta"
            id=""
            aria-describedby="helpId"
            placeholder="" required
        />
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de caducidad de registro</label>
        <input
            type="date"
            class="form-control"
            name="fecha_baja"
            id=""
            aria-describedby="helpId"
            placeholder="" required
        />
        
    </div>

    <button type="submit" value="registrar" style="margin-left:100px; background-color: grey;">Registrar</button>
    
    
    






</form>
    


<?php include 'footer.php'?>


</div>
