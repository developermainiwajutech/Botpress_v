<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PhpOffice\PhpWord;
use PhpOffice\PhpWord\SimpleType\JcTable;
use PhpOffice\PhpWord\IOFactory;
class GenerationController extends Controller
{
 //methode generation lettre motivation  
function genererLettreMotivation(Request $request){
        
    $nom_prenom = "" ; 
    $adresse = ""; 
    $telephone = ""; 
    $email = "";
    $date = "" ; 
    $ville ="";
    $poste_destinataire ="";
    $objet ="";
    $poste_a_occupe ="";
    $votre_formation ='';
    $experience_professionnelle ='';
    $inputData = $request->all();
    $nom_prenom = $inputData["nom_prenom"];
    $adresse = $inputData["adresse"];
    $telephone = $inputData["telephone"];
    $email = $inputData["email"];
    $date = $inputData["date"];
    $ville = $inputData["ville"];
    $poste_destinataire = $inputData["poste_destinataire"];
    $objet = $inputData["objet"];
    $poste_a_occupe = $inputData["poste_a_occupe"];
    $votre_formation = $inputData["votre_formation"];
    $experience_professionnelle= $inputData["experience_professionnelle"];
    $pathToFile = storage_path('app\fichier.docx');
    $phpWord =  new \PhpOffice\PhpWord\PhpWord(); 
    //$writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007'); 
    //$writer->save($pathToFile);
 
    // new \\PhpOffice\\PhpWord\\PhpWord(); 
    $properties = $phpWord->getDocInfo();
    $properties->setCreator('Iwaju');
    $properties->setCompany('Iwajutech');
    $properties->setTitle('LettreMotivation');
    $phpWord->setDefaultFontName('Arial');
    $section = $phpWord->addSection();
    $table = $section->addTable();
    $table->addRow(100);
    $table->addCell(400)->addText($nom_prenom);
    $table->addRow();
    $table->addCell(400)->addText($adresse);
    $table->addRow();
    $table->addCell(400)->addText($telephone);
    $table->addRow();
    $table->addCell(400)->addText($email);
    $section->addTextBreak(1);

    $table->addRow(100);
    $table->addCell(400)->addText($ville.' le '. $date);
    $table->addRow(100);
    $table->addCell(400)->addText( 'À Monsieur/Madame le/la'. $poste_destinataire );
    $table->addRow(100);
    $table->addCell(400)->addText('Objet: ' . $objet);
    $section->addText("Monsieur/Madame le/la ".$poste_destinataire);
    $section->addText("Etant actuellement à la recherche d’un emploi, je me permets de vous proposer ma candidature au poste de ". $poste_a_occupe.".");
    $section->addText("En effet, mon profil correspond à la description recherchée sur l’offre d’emploi. Ma formation en ". $votre_formation." m’a permis d'acquérir de nombreuses compétences parmi celles que vous recherchez. Je possède tous les atouts qui me permettront de réussir dans le rôle que vous voudrez bien me confier. Motivation, rigueur et écoute sont les maîtres mots de mon comportement professionnel."
    );
    $section->addText("Mon expérience en tant que ". $experience_professionnelle." m’a permis d’acquérir toutes les connaissances nécessaires à la bonne exécution des tâches du poste à pourvoir. Régulièrement confronté aux aléas du métier, je suis capable de répondre aux imprévus en toute autonomie. Intégrer votre entreprise, représente pour moi un réel enjeu d’avenir dans lequel mon travail et mon honnêteté pourront s’exprimer pleinement.");
    $section->addText("Restant à votre disposition pour toute information complémentaire, je suis disponible pour vous rencontrer lors d’un entretien à votre convenance. Veuillez agréer,  Monsieur, l’expression de mes sincères salutations.");
    $section->addText("Signature");
    $section->addText("");

    $section->addText($nom_prenom);

  
        
     $writer = IOFactory::createWriter($phpWord, 'Word2007');
     $writer->save($pathToFile);
     return 'Fichier exporté.';
}//end genererLetrreMotivation



// Creating the new document...


    //use \PhpOffice\PhpWord;
     //use PhpOffice\PhpWord\TemplateProcessor;
     function genererLettre() {
     
    $pathToFile = storage_path('app/lettremotiv.doc');

    

    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($pathToFile);

    return $pathToFile;
 
    $templateProcessor->setValue('date', date("d/m/Y"));
    $templateProcessor->setValue('nom_prenom', 'John Doe');
    $templateProcessor->setValue('adresse', 'cotonou');
    $templateProcessor->setValue('telephone', '0000000');
    $templateProcessor->setValue('email', 'gfuhfu@gmail.com');
    $templateProcessor->setValue('ville', 'cotonou');
    $templateProcessor->setValue('destinataire', 'John Doe');
    $templateProcessor->setValue('poste_destinataire', 'director');
    $templateProcessor->setValue('poste_a_occupe', 'commercial');
    $templateProcessor->setValue('votre_formation', 'licence en gddv ');
    $templateProcessor->setValue('experience_professionnelle', 'caissière');

    $pathDestination = storage_path('app\generation.doc');

   // $templateProcessor->saveAs($pathDestination); 
    return 'fichier envoyé';

    ;
}

}
?>