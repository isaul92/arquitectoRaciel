<!DOCTYPE html>
<html lang="es">





<?php include("head.php"); ?>



<?php include("header.php"); ?>
<div class="contenedor">

    <!--menu-->



    <section class="contenido">
        <h1>CONTACTO</h1>
        <div class="box">

            <form action="#" method="POST" id="fomrcontac">
                <h1 for="name">NOMBRE</h1>
                <input type="text" name="name" data-validation="required" data-validation="alphanumeric"></input>

                <h1 for="surname">TELEFONO</h1>
                <input type="number" name="telefono" data-validation="required"></input>

                <h1 for="email" data-validation="required" data-validation="email">EMAIL</h1>
                <input type="email"></input>
                <h1 for="surname">MENSAJE</h1>
                <textarea name="mensaje" id="" cols="30" rows="10"></textarea>

                <br>
                <button type="sumbit" value="enviar">ENVIAR </BUtton>
            </form>
        </div>



        <div id="contacto ">
         
            <form action="#" method="POST" id="fomrcontac">
                <h1 for="name">NOMBRE</h1>
                <input type="text" name="name" data-validation="required" data-validation="alphanumeric"></input>

                <h1 for="surname">TELEFONO</h1>
                <input type="number" name="telefono" data-validation="required"></input>

                <h1 for="email" data-validation="required" data-validation="email">EMAIL</h1>
                <input type="email"></input>
                <h1 for="surname">MENSAJE</h1>
                <textarea name="mensaje" id="" cols="30" rows="10"></textarea>

                <br>
                <button type="sumbit" value="enviar">ENVIAR </BUtton>
            </form>





        </div>

    </section>

</div>





<div class="clear">
    <section class="clearfix"></section>
</div>









<?php include("footer.php"); ?>
<!--contenedor-->

<script src="./js/main.js"></script>
</body>

</html>