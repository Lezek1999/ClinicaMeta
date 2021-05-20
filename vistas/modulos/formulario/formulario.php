
<style>
        

        *{
	padding:0;
	margin:0;
	font-family: : century gothic;
	text-align: center;
}

caption {
	background-color: rgb(255, 255, 255);
	text-align:center;
}


table, th, td, caption {
 	margin-left: auto; 
 	margin-right: auto;
	border: 2px solid black;
	border-collapse: collapse;
}

td.black{
    background: #36D1DC;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

table.tablita{
    margin-left: auto; 
 	margin-right: auto; 
	border: 2px solid black;
	border-collapse: collapse;
    background-color: rgb(255, 255, 255);
}


table.one tr:nth-child(1) {
	background-color: rgba(245, 84, 79, 0.644);
}

table.one tr:nth-child(2) {
	background-color: rgba(245, 179, 79, 0.609);
}

table.one tr:nth-child(3) {
	background-color: rgba(215, 245, 79, 0.507);
}	

table.one tr:nth-child(4) {
	background-color: rgba(110, 200, 79, 0.555);
}

table.one tr:nth-child(5) {
    background-color: rgba(0, 179, 0, 0.555);
}

tr:hover td{
	background: #0a0a0aa2; color: rgb(255, 255, 255); 
}

form{
    border-style: outset;
    border-radius: 8px;
	padding: 50px 20px ;
	background-color: #eeeeeec5 ;
	margin: 80px;
	margin-top:70px ;
	padding-top : 28px ;
	margin-bottom: 30px;
}

div.section{
    border-style: outset;
    border-radius: 8px;
	background-color: #ffffff;
	margin: 80px;
    
	margin-top:70px ;
	padding-top : 28px ;
	margin-bottom: 30px;
}

div.sect{
	background-color: #ffffff;
	margin: 80px;
	margin-top:70px ;
}

h1,h2,h5,h6{
    font-family: 'Oswald', sans-serif;
	font-weight:200	;
	text-transform:uppercase;
	text-decoration:none;
	color:#16151b;
	letter-spacing:1px;
    display:inline-block;
    font-size: 35pt;
    text-align: center;
    margin: 30px 0px 30px 0px;
}

hr.hr {
  border: 2px solid gray;
}

h1.titulo{
    font-family: 'Oswald', sans-serif;
	font-weight:200	;
	text-transform:uppercase;
	text-decoration:none;
	color:#16151b;
	letter-spacing:1px;
    display:inline-block;
    font-size: 50pt;
    text-align: center;
    
}



h4 {
    font-family: 'Oswald', sans-serif;
	font-weight:200	;
	text-transform:uppercase;
	text-decoration:none;
	color:#16151b;
	letter-spacing:1px;
    display:inline-block;
    font-size: 2em;
    text-align: center;
    
}

p{
    font-family: 'Oswald', sans-serif;
	text-align: left;
    font-size: 20pt;
}

p.center{
    font-family: 'Oswald', sans-serif;
	text-align: center;
    font-size: 20pt;    
}

p.just{
    font-family: 'Oswald', sans-serif;
	text-align: justify;
    font-size: 20pt; 
}

p.bren{
    margin-left: 100px;
    margin-right: 100px; 
    font-family: 'Oswald', sans-serif;
	text-align: justify;
    font-size: 20pt; 
}

label.center{
    font-family: 'Oswald', sans-serif;
	text-align: center;
    font-size: 20pt;
}

p.black{
    font-family: 'Oswald', sans-serif;
	text-align: center;
    font-size: 20pt;
    color:#ffffff;
}



h3.sex{
    font-family: 'Oswald', sans-serif;
	font-weight:200	;
	text-transform:uppercase;
	text-decoration:none;
	color:#16151b;
	letter-spacing:1px;
    display:inline-block;
    font-size: 35pt;
    text-align: center;
    margin: 30px 0px 50px 0px;
}

h3.pop{
    font-family: 'Oswald', sans-serif;
	font-weight:200	;
	text-transform:uppercase;
	text-decoration:none;
	color:#16151b;
	letter-spacing:1px;
    display:inline-block;
    font-size: 30pt;
    text-align: center;
    
}

input {
	width: calc(15% - 20px);
	padding: 9px;
	margin: auto;
	margin-top:12px ;
	font-size: 16px
}

input [type='submit'] { 
	width: calc(50% - 20px);
	padding: 9px;
	margin: auto;
	margin-top:12px ;
	font-size: 16px
}

input[type='number']:focus {
	border: 3px solid #555;
  }


. ok {
	text-align: center;
	width: 100% ;
	padding:  12px ;
	background-color: #4e8;
	color : #fff
}
. bad {
	text-align: center;
	width: 100% ;
	padding: 12px ;
	background-color:  #a22 ;
	color: #fff
}
</style>

<body>

        <?php include "preguntas.php"; ?>
    

    <form method="POST">

    <h1 class="titulo"> Evaluacion de Desempeño.</h1> <br>
    <h3 class="sex"> CARGO: <?php echo $cargoP; ?> </h3>
    <br><br>

    

        <?php 
        include "evaluador.php";
         
        include "evaluado.php";

        if($SJEFE==$JEFE)
        {
            $CC1="123";
            $CC2="123";
            $CC3="123";
        }

        if(($CC1!="") || ($CC2!="") || ($CC3!=""))
        {
            
        ?>
       
        

        <br>
        <br>

         
        

            
        <br><hr class="hr"><br><br>

        <p class="center">Debe asignar a cada item una calificación desde el grado 1 (nunca cumple), hasta el grado 10 (siempre cumple).</h1><br><br>

   

            <!--  Tabla - Escala  -->
            <table style="width:40%" class="one">
            <tr> 
            <caption><p class="center">ESCALA</p></caption> 
            </tr>
            <tr>
                <td><p class="center">1,0</p></td>
                <td><p class="center">1,9</p></td>
                <td><p class="center">Muy Bajo</p></td>
            </tr>
            <tr>
                <td><p class="center">2,0</p></td>
                <td><p class="center">2,9</p></td>
                <td><p class="center">Bajo</p></td>
            </tr>
            <tr>
                <td><p class="center">3,0</p></td>
                <td><p class="center">3,9</p></td>
                <td><p class="center">Medio</p></td>
            </tr>
            <tr>
                <td><p class="center">4,0</p></td>
                <td><p class="center">4,8</p></td>
                <td><p class="center">Alto</p></td>
            </tr>
            <tr>
                <td><p class="center">4,9</p></td>
                <td><p class="center">5,0</p></td>
                <td><p class="center">Excelente</p></td>
            </tr>
            </table>



    <br><br><br><br><hr class="hr"><br/>
    
    <div class="section">
     <!--  RESPONSABILIDAD  -->

    
    <h3 class="sex">RESPONSABILIDAD.</h3>


      <br>
 
        
            <!--  PREGUNTA 1  -->

            
                <p class="bren">Realiza las funciones y deberes propios del cargo sin que requiera supervisión y control permanente:</p>
            
                <input type="number" id="p1" name="p1" min="1" max="5" placeholder="1-5"><br>


            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 2  -->


                <p class="bren">Actitud para completar las tareas y deberes asignados de acuerdo a las metas y plazos acordados:</p>

                <input type="number" id="p2" name="p2" min="1" max="5" placeholder="1-5"><br>


            
            <br>
            <br>
            <br>
            </div>
            <br><hr class="hr"><br/>


    <div class="section">
    <!--  PRESENTACIÓN E HIGIENE   -->

    <h3 class="sex">PRESENTACIÓN E HIGIENE.</h3>

             <!--  PREGUNTA 3  -->

                <p class="bren">Mantiene en orden e higiene el lugar de trabajo:</p>

                <input type="number" id="p3" name="p3" min="1" max="5" placeholder="1-5"><br>

            <br>
            <br>
            <br>
            <br>
            <!--  PREGUNTA 4  -->

                <p class="bren">La presentación personal es acorde al reglamento interno establecido:</p>

                <input type="number" id="p4" name="p4" min="1" max="5" placeholder="1-5"> <br>

            <br>
            <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

            <!--  PRODUCTIVIDAD    -->

        <div class="section">
        <h3 class="sex">PRODUCTIVIDAD.</h3>
 

             <!--  PREGUNTA 5  -->

                <p class="bren">Realiza múltiples tareas cumpliendo con el tiempo establecido:</p>

                <input type="number" id="p5" name="p5" min="1" max="5" placeholder="1-5"><br>


            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 6  -->

                <p class="bren">Minimiza desperdicios en los procedimientos referentes al cargo:</p>

                <input type="number" id="1" name="p6" min="1" max="5" placeholder="1-5"> <br>

            <br>
            <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

            <!--  ACTITUD    -->


        <div class="section">
        <h3 class="sex">ACTITUD.</h3>

             <!--  PREGUNTA 7  -->

                <p class="bren">La actitud hacia los compañeros y superiores genera un clima laboral adecuado:</p>

                <input type="number" id="1" name="p7" min="1" max="5" placeholder="1-5"><br>

            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 8  -->

                <p class="bren">Mantiene una actitud respetuosa con los usuarios:</p>

                <input type="number" id="1" name="p8" min="1" max="5" placeholder="1-5"> <br>

            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 9  -->

                <p class="bren">Recibe positivamente las observaciones, recomendaciones y críticas constructivas:</p>

                <input type="number" id="1" name="p9" min="1" max="5" placeholder="1-5"><br>

            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 10  -->

                <p class="bren">Maneja adecuadamente las emociones frente a situaciones de estrés:</p>

                <input type="number" id="1" name="p10" min="1" max="5" placeholder="1-5"> <br>

            <br>
            <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

        <!--  COMPROMISO    -->

        
        <div class="section">
        <h3 class="sex">COMPROMISO.</h3>


             <!--  PREGUNTA 11  -->


                <p class="bren">Muestra compromiso y dedicación en la realización de las tareas asignadas al cargo:</p>

                <input type="number" id="p11" name="p11" min="1" max="5" placeholder="1-5"><br>

            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 12  -->

                <p class="bren">Sus acciones y comportamiento demuestran sentido de pertenencia hacia la entidad:</p>

                <input type="number" id="p12" name="p12" min="1" max="5" placeholder="1-5"> 

            <br>
            <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

            <!--  CALIDAD EN EL TRABAJO    -->

        <div class="section">
        <h3 class="sex">CALIDAD EN EL TRABAJO.</h3>

             <!--  PREGUNTA 13  -->


                <p class="bren">Realiza su trabajo cumpliendo con los estándares de calidad requeridos:</p>

                <input type="number" id="p13" name="p13" min="1" max="5" placeholder="1-5"><br>

            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 14  -->


                <p class="bren">Realiza su trabajo de acuerdo con los requerimientos en términos de contenido, exactitud, presentación y atención:</p>

                <input type="number" id="p14" name="p14" min="1" max="5" placeholder="1-5"> <br>

            <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

            <!--  TRABAJO EN EQUIPO    -->

        <div class="section">
        <h3 class="sex">TRABAJO EN EQUIPO.</h3>

             <!--  PREGUNTA 15  -->

                <p class="bren">Participa y coopera con el equipo de trabajo para el cumplimiento de los objetivos organizacionales:</p>

                <input type="number" id="p15" name="p15" min="1" max="5" placeholder="1-5">
                
            <br>
            <br>
            <br>
            <br>
   
            <!--  PREGUNTA 16  -->

                <p class="bren">Establece y mantiene comunicación respetuosa con los demás colaboradores, sin importar la jerarquía:</p>

                <input type="number" id="p16" name="p16" min="1" max="5" placeholder="1-5"> <br>

            <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

            <!--  CUMPLIMIENTO DE LOS PROCEDIMIENTOS    -->

        <div class="section">
        <h3 class="sex">CUMPLIMIENTO DE LOS PROCEDIMIENTOS.</h3>

             <!--  PREGUNTA 17  -->

                <p class="bren">Conoce y cumple los procedimientos establecidos para el cargo correspondiente:</p>

                <input type="number" id="p17" name="p17" min="1" max="5" placeholder="1-5"><br>

            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 18  -->

                <p class="bren">Lleva un registro de los procedimientos realizados, para no generar repeticiones, errores o inconformidades:</p>

                <input type="number" id="p18" name="p18" min="1" max="5" placeholder="1-5"> <br>

            <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

        <!--  LIDERAZGO    -->

        <div class="section">
        <h3 class="sex">LIDERAZGO.</h3>

             <!--  PREGUNTA 19  -->

                <p class="bren">Inspira y motiva a otros frente a diferentes situaciones:</p>

                <input type="number" id="p19" name="p19" min="1" max="5" placeholder="1-5"><br>

            <br>
            <br>
            <br>
            <br>
            <!--  PREGUNTA 20  -->

                <p class="bren">Promueve e incentiva la comunicación, la resolucion de conflictos y el trabajo en equipo:</p>

                <input type="number" id="p20" name="p20" min="1" max="5" placeholder="1-5"> <br>

                <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

            <!--  EFICIENCIA    -->

        <div class="section">
        <h3 class="sex">EFICIENCIA.</h3>

             <!--  PREGUNTA 21  -->

                <p class="bren">Emplea de manera óptima los recursos asignados para la realización de las actividades:</p>

                <input type="number" id="p21" name="p21" min="1" max="5" placeholder="1-5"><br>

            <br>
            <br>
            <br>
            <br>

            <!--  PREGUNTA 22  -->

            
                <p class="bren">Brinda atención a los usuarios de manera ágil y oportuna :</p>
            
                <input type="number" id="p22" name="p22" min="1" max="5" placeholder="1-5"> <br>
            

                <br>
            <br>
            </div>
            <br><hr class="hr"><br/>

            <?php
            include "if.php";
            ?>



                            <!--  Comentarios  -->

    
                            <div class="section">
                            <h3 class="sex">Comentarios.</h3>
                                <br>

                                
                                <textarea name="comentarios" rows="10" cols="40" placeholder="Escriba aca sus comentarios"></textarea>
                                

                            <!--  Enviar  -->

                            <br>    <br><br>
                                <br>
                                <br>

                            </div>

                                <input type="submit" name="register">
                        
                               
                            

                        <br /><br />

                        


    </form>

    <?php 
        include "registrar.php";
    }
        ?>

    

</body>
</html> 