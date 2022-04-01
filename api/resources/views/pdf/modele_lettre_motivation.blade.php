<!DOCTYPE html>
<html >
  <head>  
    <meta charset="utf-8">
    <style>
p { text-align: justify;}
.droite{ float: right; }
.ligne_entete{ width: 100%;   }
div.interlignes{  line-height: 15%;    }
body { margin-left:100px; margin-right:100px; margin-top:30px; margin-bottom:30px }
 div.destinataire{text-indent: 5% ; }
 .text-identation {text-indent: 2% ;}
 .gauche_entete{ width: 40%; }
 .droite_entete{ width: 40%; float: right; clear: both; }
 .text-right{text-align: right;}
 .espax1{margin-bottom:10px;}
 .espax2{margin-top:50px;}

 /*test code*/ 


    </style>
                                                            
  </head>

  <body>
 <div class="interlignes">

     <!-- mise à gauche de la première partie du haut-->
      <div class="ligne_entete">

            <div class="droite_entete">
                <div class="">
                    <p class="text-right">{{$ville}} le {{$date}} </p>							
                </div>
            </div>

          <div class="gauche_entete">
            <div>
                <p><strong>{{$nom_prenom}}</strong></p>                                                                             
            <p> {{$adresse}}</p>
            <p>{{$telephone}}</p> 
            <p> {{$email}}</p>
            <!--fin mise à gauche de la première partie du haut-->
            <!-- mise à droite de la deuxième partie du haut-->
            </div>
        </div>
    
   

  </div> 
   <!-- fin mise à droite de la deuxième partie du haut-->

   
</div> 
 
   <!-- séparation du bloc de haut du blocc du bas-->
<div style="clear:both"></div>
   <!-- fin séparation -->

    <div class="droite">
        <p>À  {{$destinataire}}</span></p> 
        
          <p>{{$poste_destinataire}}</span></p>
    </div><br>
<br><div>
<h4><strong> Objet :</strong> {{$objet}}</h4>
</div><br>
<br><div>
<div class="destinataire">{{$destinataire}}</div>
<p>Etant actuellement à la recherche d’un emploi, je me permets de vous proposer ma candidature au poste de {{$poste_a_occupe}}</p>  

<p>En effet, mon profil correspond à la description recherchée sur l’offre d’emploi. Ma formation en {{$votre_formation}} m'a permis d'acquérir de nombreuses compétences parmi celles que vous recherchez. Je possède tous les atouts qui me permettront de réussir dans le rôle que vous voudrez bien me confier. Motivation, rigueur et écoute sont les maîtres mots de mon comportement professionnel.</p>

<p>Mon expérience en tant que {{$experience_professionnelle}} m’a permis d’acquérir toutes les connaissances nécessaires à la bonne exécution des tâches du poste à pourvoir. Régulièrement confronté aux aléas du métier, je suis capable de répondre aux imprévus en toute autonomie. Intégrer votre entreprise, représente pour moi un réel enjeu d’avenir dans lequel mon travail et mon honnêteté pourront s’exprimer pleinement. Restant à votre disposition pour toute information complémentaire, je suis disponible pour vous rencontrer lors d’un entretien à votre convenance.</p> 

<p> Veuillez agréer,  Monsieur, l’expression de mes sincères salutations.</p>
<div class="droite">
<p class="espax1"> <strong>Signature</strong></p>
                                                                                                                                                                                                                                                                             </p>
                                                                                                      

<p class="espax2"> {{$nom_prenom}}</p>

</div>
</div>

 </body>
</html>

                                                                                                         
                             
