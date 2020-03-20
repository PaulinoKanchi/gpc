<?php include_once('error.php');?>
<!doctype html>
<html class="no-js h-100" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SEIM - Licitacion</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css"> </head>
    <body class="h-100">
  <?php
include_once('conexiondb.php');
$conn=new Conexion();
$link= $conn->conectarse();

$id=$_GET['id'];

$consulta= mysqli_query($link, "SELECT * FROM usuarios where id=$id");

while ($row = mysqli_fetch_row($consulta)) {
  $usertra=$row[0];
  $tipoo=$row[20];
  $nombre=$row[2];
  $APaterno=$row[4];
  $AMaterno=$row[5];
     }
?>

    <div class="container-fluid">
      <div class="row">
        <main class="main-content col-lg-12 col-md-9 col-sm-12 p-0 offset-lg-0 offset-md-3">
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Medicamentos</span>
                <h3 class="page-title">Nueva Evaluación Legal y Administrativa</h3>
<?php if($tipoo=="Administrador") {
     ?>
                <a href="index.php?id=<?php echo $id;?>">Regresar</a>

                <?php } 

                else if($tipoo=="Legal"){
                  ?>
                <a href="indexlegal.php?id=<?php echo $id;?>">Regresar</a>
                <?php        }
              ?>
              
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">

<br><br>
                 
<form class="add-new-post" method="post" action="guardado-leg-med.php?id=<?php echo $id;?>">

  
</select>

RAZON SOCIAL: <input size =50 class="mi-selector form-control-lg mb-3" style="margin-left:5px;margin-right:5px" name="proveedor" value="<?php echo $proveedor ;?>" readonly>

PROCESO:<input size=50 class="mi-selector form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:0px" name="proceso" value="<?php echo $proceso; ?>" required readonly>
<br>
 RFC:<input style="margin-left:10px;margin-right:10px" id="rfc" name="rfc" class="form-control-lg mb-3" type="text" placeholder="RFC" >
 <br>
 PAIS DE ORIGEN: <?php
                        include('mostrar-paises.php');
                      ?>
                      <select class="mi-selector form-control-lg mb-3" style="margin-left:5px;margin-right:5px" name="pais" required>
                        <option>Pais de Origen</option>
                        <?php
                        while ($row = mysqli_fetch_row($mostrar)) {
                        ?>
                          <option value="<?php echo "$row[1]"; ?>"><?php echo "$row[1]"; ?></option>
                        <?php } ?>
                      </select>
<br>REPRESENTANTE LEGAL:<input size=50 style="margin-left:10px;margin-right:10px" id="replegal" name="replegal" class="form-control-lg mb-3" type="text" placeholder="Representante Legal">


                      

<!--style="display:none"-->



                      <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <!--<div class="card-header border-bottom">
                    <h6 class="m-0">247 resultados encontrados</h6>
                  </div>-->
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">DOCUMENTACIÓN LEGAL Y AMINSTRATIVA </th>
                          <th scope="col" class="border-0">CUMPLE</th>
                          <th scope="col" class="border-0">NO CUMPLE</th>
                          <th scope="col" class="border-0">NO APLICA</th>
                          
                        </tr>
                      </thead>
                   
                      <tbody>

                        <tr>

                        <td>  <?php echo "1. Acreditación de la personalidad jurídica. (OBLIGATORIO)";?></td>
                          
                          <td> <input type="radio" name="cumple1" value="Cumple" onclick="mostrar1(1)" ></td>
                          <td> <input type="radio" name="cumple1" value="No Cumple" onclick="mostrar1(0)" ></td>
                          <td> <input type="radio" name="cumple1" value="No Aplica" checked onclick="mostrar1(3)")></td>
                          

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "2.Copia simple por ambos lados de la identificación oficial vigente con fotografía. Verificar el nombre, firma autógrafa y fotografía del LICITANTE y/o su Representante Legal. (OBLIGATORIO)";?></td>
                          <td> <input type="radio" name="cumple2" value="Cumple" onclick="mostrar2(1)" ></td>
                          <td> <input type="radio" name="cumple2" value="No Cumple" onclick="mostrar2(0)" ></td>
                          <td> <input type="radio" name="cumple2" value="No Aplica" checked onclick="mostrar2(3)"></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "3. RFC (OBLIGATORIO)";?></td>
                          <td> <input type="radio" name="cumple3" value="Cumple" onclick="mostrar3(1)" ></td>
                          <td> <input type="radio" name="cumple3" value="No Cumple" onclick="mostrar3(0)" ></td>
                          <td> <input type="radio" name="cumple3" value="No Aplica" checked onclick="mostrar3(3)"></td>

                         
                          <tbody>

<tr>
                          <td>  <?php echo "4. Comprobante de domicilio (OBLIGATORIO)";?></td>
                          <td> <input type="radio" name="cumple4" value="Cumple" onclick="mostrar4(1)" ></td>
                          <td> <input type="radio" name="cumple4" value="No Cumple" onclick="mostrar4(0)" ></td>
                          <td> <input type="radio" name="cumple4" value="No Aplica" checked onclick="mostrar4(3)"></td>


                          <tbody>

<tr>
                          <td>  <?php echo "5. MANIFIESTO DE NACIONALIDAD Que el LICITANTE y el Representante Legal manifieste su nacionalidad. (OBLIGATORIO)";?></td>
                          <td> <input type="radio" name="cumple5" value="Cumple" onclick="mostrar5(1)" ></td>
                          <td> <input type="radio" name="cumple5" value="No Cumple" onclick="mostrar5(0)" ></td>
                          <td> <input type="radio" name="cumple5" value="No Aplica" checked onclick="mostrar5(3)"></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "6. Escrito de no encontrarse en los supuestos de los artículos 50 y 60 de la LAASSP. (OBLIGATORIO)"?></td> 
                          <td> <input type="radio" name="cumple6" value="Cumple" onclick="mostrar6(1)" ></td>
                          <td> <input type="radio" name="cumple6" value="No Cumple" onclick="mostrar6(0)" ></td>
                          <td> <input type="radio" name="cumple6" value="No Aplica" checked onclick="mostrar6(3)"></td>

                          </tr>
                          
                          <tbody>

<tr>

                          <td>  <?php echo "7. Declaración de Integridad. (OBLIGATORIO)"?></td>
                          <td> <input type="radio" name="cumple7" value="Cumple" onclick="mostrar7(1)" ></td>
                          <td> <input type="radio" name="cumple7" value="No Cumple" onclick="mostrar7(0)" ></td>
                          <td> <input type="radio" name="cumple7" value="No Aplica" checked onclick="mostrar7(3)"></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "8. Manifestación de estratificación de MIPYME para LICITANTES de nacionalidad mexicana. Que el LICITANTE manifieste cuál es su nivel de estratificación empresarial conforme al Formato L de la presente convocatoria. (NO OBLIGATORIO)"?></td> 
                          <td> <input type="radio" name="cumple8" value="Cumple" onclick="mostrar8(3)" ></td>
                          <td> <input type="radio" name="cumple8" value="No Cumple" onclick="mostrar8(3)" ></td>
                          <td> <input type="radio" name="cumple8" value="No Aplica" checked onclick="mostrar8(3)"></td>

                          </tr>
                          <tbody>

<tr>

                          <td>  <?php echo "9. Origen de los Bienes y margen de preferencia. (OBLIGATORIO)"?></td>
                          <td> <input type="radio" name="cumple9" value="Cumple" onclick="mostrar9(1)" ></td>
                          <td> <input type="radio" name="cumple9" value="No Cumple" onclick="mostrar9(0)" ></td>
                          <td> <input type="radio" name="cumple9" value="No Aplica" checked onclick="mostrar9(3)"></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "10. Acta constitutiva (OBLIGATORIO )"?></td>
                          <td> <input type="radio" name="cumple10" value="Cumple" onclick="mostrar10(1)" ></td>
                          <td> <input type="radio" name="cumple10" value="Cumple" onclick="mostrar10(0)" ></td>
                          <td> <input type="radio" name="cumple10" value="No Aplica" checked onclick="mostrar10(3)"></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "11.  Conflicto de interes  (OBLIGATORIO)"?></td>
                          <td> <input type="radio" name="cumple11" value="Cumple" onclick="mostrar11(1)" ></td>
                          <td> <input type="radio" name="cumple11" value="No Cumple" onclick="mostrar11(0)" ></td>
                          <td> <input type="radio" name="cumple11" value="No Aplica" checked onclick="mostrar11(3)"></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "12. Opinión positiva de cumplimiento de obligaciones 'IMSS' (OBLIGATORIO)"?></td>
                          <td> <input type="radio" name="cumple12" value="Cumple" onclick="mostrar12(1)" ></td>
                          <td> <input type="radio" name="cumple12" value="No Cumple" onclick="mostrar12(0)" ></td>
                          <td> <input type="radio" name="cumple12" value="No Aplica" checked onclick="mostrar12(3)"></td>

                          </tr>
                          <tbody>

</tr>
<tbody>

<tr>
                          <td>  <?php echo "13. Opinión positiva de cumplimiento de obligaciones 'SAT'(OBLIGATORIO )"?></td>
                          <td> <input type="radio" name="cumple13" value="Cumple" onclick="mostrar13(1)" ></td>
                          <td> <input type="radio" name="cumple13" value="Cumple" onclick="mostrar13(0)" ></td>
                          <td> <input type="radio" name="cumple13" value="No Aplica" checked onclick="mostrar13(3)"></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "14.  Opinión positiva de cumplimiento de obligaciones 'INFONAVIT'  (OBLIGATORIO)"?></td>
                          <td> <input type="radio" name="cumple14" value="Cumple" onclick="mostrar14(1)" ></td>
                          <td> <input type="radio" name="cumple14" value="No Cumple" onclick="mostrar14(0)" ></td>
                          <td> <input type="radio" name="cumple14" value="No Aplica" checked onclick="mostrar14(3)"></td>

                          </tr>
                          <tbody>

<tr>
                          <td>  <?php echo "15. Documento que acredite la titularidad de derechos exclusivos, patente o fuente única a nombre del proveedor que se evalúa y emitido por la autoridad competente (OBLIGATORIO)"?></td>
                          <td> <input type="radio" name="cumple15" value="Cumple" onclick="mostrar15(3)" ></td>
                          <td> <input type="radio" name="cumple15" value="No Cumple" onclick="mostrar15(3)" ></td>
                          <td> <input type="radio" name="cumple15" value="No Aplica" checked onclick="mostrar15(3)"></td>

                          </tr>
                          <tbody>



</tr>

</tbody>
</table>

</div>
                 <?php 

                 ?>
               Nombre del Evaluador:<input class="form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:10px"  type="text" name="evaluador" value="<?php  echo $nombre ." ";echo $APaterno ." ";echo $AMaterno;?>" readonly required>
               Dictamen Final:
  <input id="dictamen" class="form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:10px"  type="text" name="dictamen" readonly >
  <!--<input id="dictamen1" class="form-control-lg mb-3" style="padding:12px;background-color:#dddddd;margin-left:10px;margin-right:10px"  type="text" name="dictamen1" required>-->
<!--  <select class="form-control-lg mb-3" name="dictamen" style="margin-left:10px;margin-right:10px" requiered>
                      <option>Dictamen Final</option>
                      <option>CUMPLE</option>
                      <option>NO CUMPLE</option>
                      
                      </select>-->

             Comentarios:         <input class="form-control-lg mb-3" style="margin-left:10px;margin-right:10px"  type="text" name="comentarios" placeholder="Comentarios">
                      
                      <button class="btn btn-sm btn-accent ml-auto">
                          <i class="material-icons">file_copy</i> Guardar</button>
                      
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="scripts/app/app-blog-new-post.1.1.0.js"></script>
    <script type="text/javascript">
  
var dic1=3;
var dic2=3;
var dic3=3;
var dic4=3;
var dic5=3;
var dic6=3;
var dic7=3;
var dic8=3;
var dic9=3;
var dic10=3;
function mostrar1(num) {
  if(num==1) {
    dic1=1;
  }else if(num==0){
    dic1=0;
  }else{
    dic1=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar2(num) {
  if(num==1) {
    dic2=1;
  }else if(num==0){
    dic2=0;
  }else{
    dic2=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar3(num) {
  if(num==1) {
    dic3=1;
  }else if(num==0){
    dic3=0;
  }else{
    dic3=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}


function mostrar4(num) {
  if(num==1) {
    dic4=1;
  }else if(num==0){
    dic4=0;
  }else{
    dic4=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar5(num) {
  if(num==1) {
    dic5=1;
  }else if(num==0){
    dic5=0;
  }else{
    dic5=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar6(num) {
  if(num==1) {
    dic6=1;
  }else if(num==0){
    dic6=0;
  }else{
    dic6=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar7(num) {
  if(num==1) {
    dic7=1;
  }else if(num==0){
    dic7=0;
  }else{
    dic7=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar8(num) {
  if(num==1) {
    dic8=1;
  }else if(num==0){
    dic8=0;
  }else{
    dic8=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar9(num) {
  if(num==1) {
    dic9=1;
  }else if(num==0){
    dic9=0;
  }else{
    dic9=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar10(num) {
  if(num==1) {
    dic10=1;
  }else if(num==0){
    dic10=0;
  }else{
    dic10=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar11(num) {
  if(num==1) {
    dic11=1;
  }else if(num==0){
    dic11=0;
  }else{
    dic11=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar12(num) {
  if(num==1) {
    dic12=1;
  }else if(num==0){
    dic12=0;
  }else{
    dic12=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";
  }
}

function mostrar13(num) {
  if(num==1) {
    dic13=1;
  }else if(num==0){
    dic13=0;
  }else{
    dic13=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";

  }
}

function mostrar14(num) {
  if(num==1) {
    dic14=1;
  }else if(num==0){
    dic14=0;
  }else{
    dic14=3;
  }
  if((dic1==0)||(dic2==0)||(dic3==0)||(dic4==0)||(dic5==0)||(dic6==0)||(dic7==0)||(dic8==0)||(dic9==0)
  ||(dic10==0)){
    document.getElementById('dictamen').value="No Cumple";
  }else if((dic1==3)&&(dic2==3)&&(dic3==3)&&(dic4==3)&&(dic5==3)&&(dic6==3)&&(dic7==3)&&(dic8==3)&&(dic9==3)
  &&(dic10==3)){
    document.getElementById('dictamen').value=" ";
  }else{
    document.getElementById('dictamen').value="Cumple";

  }
  
}


      jQuery(document).ready(function($){
      $(document).ready(function() {
      $('.mi-selector').select2();
      });
      });
        {
            document.getElementById('clave12').value=document.getElementById('partida2').value;
           ;
        }

        function myFunction(){
      if("No Cumple"=="No Cumple"){
        document.getElementById('dictamen').value="hola";

        document.write("No cumple"); 
      }else{
        document.getElementById('dictamen').value="hola";
      }
        }

        
        function myFunction() {
alert("Guardado");
location.href="index.php?id=<?php echo $id;?>";
        }

    </script>
  </body>
</html> 