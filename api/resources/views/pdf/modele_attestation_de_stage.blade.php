<!DOCTYPE html>
<html >
  <head>  
    <meta charset="utf-8">
    <style>
p { text-align: justify;}
.rectangle{ width: 40%;position: absolute; 
border: 1px solid rgb(10, 12, 10) ; 
border-top: 0px;
background-color: rgb(101, 75, 253);
height: 50px;
width: 600px;
left: 10%; 
top: 20px;
margin-right:50px;
margin-left:50px}
.gauche{float: left;}
.droite{float: right;}
.centrer{text-align: center;}
.espax{margin-top:120px;}
body { margin-left:50px; margin-right:50px; margin-top:30px; margin-bottom:30px }
</style>
  </head>
  <body>


    <div class="rectangle">
   <p class="centrer"><strong> ATTESTATION DE STAGE</strong></p>
   </div>
   <div class="espax">
   <div>
<p>Je soussigné {{$nom_representant_entreprise}}, {{$poste_representant_entreprise}} de <strong>{{$nom_entreprise}}</strong>, société de {{$specialites_entreprise}}, atteste par la présente que {{$mme_mr_mlle}} {{$nom_prenom_employe}} a effectué un stage au poste de <span style="color: blue;">{{$poste_occupe}}</span> pendant la période du <span style="color: blue;">{{$periode_stage}}</span>.</p>
<p>Cette attestation a été délivrée à la demande de l’intéressée pour servir et valoir ce que de droit.</p>

<div class="droite">
<p>{{$ville}}, le {{$date_du_jour}}</p><br>
<div class="couleur"><strong> {{$poste_representant_entreprise}}</strong></div>
<div>{{$nom_representant_entreprise}}</div>
</div>
</div>
</div>

 </body>
</html>