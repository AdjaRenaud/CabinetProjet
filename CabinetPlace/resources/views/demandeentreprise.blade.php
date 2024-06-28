<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Offre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          
        }

        form.offreForm{
            display: none;
        }

        h1,
        h2,
        h3 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        textarea {
            resize: vertical;
        }

        button[type="submit"],
        .btn-back {
            background-color: rgb(7, 41, 77);
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
            display: inline-block;
            transition: background-color 0.3s ease;
            text-decoration: none;
            /* Enlève la décoration de lien par défaut */
            margin-top: 10px;
        }

        button[type="submit"]:hover,
        .btn-back:hover {
            background-color: rgb(254, 202, 0);
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .info p {
            margin: 5px 0;
        }

        .economipig {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            padding: 10px;
            margin-top: 20px;
        }

        .contactpig,
        .infopig {
            flex: 1;
            text-align: left;
        }

        .infopig {
            text-align: right;
        }

        .devise {
            margin-top: 20px;
            color: #777;
        }
    </style>
    <!-- Inclusion de jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
</head>

<body>
    <div class="container">
        

        <h2>Formulaire à remplir</h2>
        <form class="offreForm" id="offreForm">
            <table>
                <tr>
                    <td><label for="nomEtablissement">NOM DE L'ETABLISSEMENT:</label></td>
                    <td><input type="text" id="nomEtablissement" name="nomEtablissement"></td>
                </tr>
                <tr>
                    <td><label for="directeur">DIRECTEUR:</label></td>
                    <td><input type="text" id="directeur" name="directeur"></td>
                </tr>
                <tr>
                    <td><label for="drh">DIRECTEUR DES RESSOURCES HUMAINES:</label></td>
                    <td><input type="text" id="drh" name="drh"></td>
                </tr>
                <tr>
                    <td><label for="adresse">Adresse Postale:</label></td>
                    <td><input type="text" id="adresse" name="adresse"></td>
                </tr>
                <tr>
                    <td><label for="localisation">Localisation:</label></td>
                    <td><input type="text" id="localisation" name="localisation"></td>
                </tr>
                <tr>
                    <td><label for="telephone">Telephone:</label></td>
                    <td><input type="text" id="telephone" name="telephone"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="siteWeb">Site web:</label></td>
                    <td><input type="text" id="siteWeb" name="siteWeb"></td>
                </tr>
                <tr>
                    <td><label for="activites">Nature des activités:</label></td>
                    <td><input type="text" id="activites" name="activites"></td>
                </tr>
                <tr>
                    <td><label for="effectif">Effectif de l'établissement:</label></td>
                    <td><input type="text" id="effectif" name="effectif"></td>
                </tr>
            </table>

            <h2>2- Informations sur le service d'accueil</h2>
            <table>
                <tr>
                    <td><label for="contact">Nom du contact pour information sur l'offre:</label></td>
                    <td><input type="text" id="contact" name="contact"></td>
                </tr>
                <tr>
                    <td><label for="fonction">Fonction:</label></td>
                    <td><input type="text" id="fonction" name="fonction"></td>
                </tr>
                <tr>
                    <td><label for="telContact">Télephone:</label></td>
                    <td><input type="text" id="telContact" name="telContact"></td>
                </tr>
                <tr>
                    <td><label for="emailContact">Email:</label></td>
                    <td><input type="text" id="emailContact" name="emailContact"></td>
                </tr>
            </table>

            <h2>3- Informations sur l'offre, sur la mission</h2>
            <table>
                <tr>
                    <td><label for="typeOffre">Type d'offre:</label></td>
                    <td><input type="text" id="typeOffre" name="typeOffre"></td>
                </tr>
                <tr>
                    <td><label for="intitulePoste">Intitulé du poste:</label></td>
                    <td><input type="text" id="intitulePoste" name="intitulePoste"></td>
                </tr>
                <tr>
                    <td><label for="nbPostes">NB de postes:</label></td>
                    <td><input type="text" id="nbPostes" name="nbPostes"></td>
                </tr>
            </table>

            <h2>Détail de la mission, détails des tâches</h2>
            <textarea placeholder="Entrez les détails de la mission ici..." name="detailsMission" id="detailsMission" rows="6"></textarea>

            <h2>Conditions de l'offre</h2>
            <table>
                <tr>
                    <td><label for="ageMin">Age Min:</label></td>
                    <td><input type="text" id="ageMin" name="ageMin"></td>
                    <td><label for="ageMax">Age Max:</label></td>
                    <td><input type="text" id="ageMax" name="ageMax"></td>
                </tr>
                <tr>
                    <td><label for="nationalite">Nationalité:</label></td>
                    <td><input type="text" id="nationalite" name="nationalite"></td>
                    <td><label for="langue">2eme langue:</label></td>
                    <td><input type="text" id="langue" name="langue"></td>
                </tr>
                <tr>
                    <td><label for="debutMission">Début mission:</label></td>
                    <td><input type="text" id="debutMission" name="debutMission"></td>
                    <td><label for="finMission">Fin Mission:</label></td>
                    <td><input type="text" id="finMission" name="finMission"></td>
                    <td><label for="dureeMission">Durée Mission:</label></td>
                    <td><input type="text" id="dureeMission" name="dureeMission"></td>
                </tr>
            </table>

            <h2>Spécialité / Diplôme souhaité</h2>
            <table>
                <tr>
                    <td><label for="specialite">Spécialité / Diplôme souhaité:</label></td>
                    <td><input type="text" id="specialite" name="specialite"></td>
                    <td><label for="niveauFormation">Niveau de formation (Bac+...):</label></td>
                    <td><input type="text" id="niveauFormation" name="niveauFormation"></td>
                </tr>
            </table>

            <h2>Expérience Professionnelle souhaitée</h2>
            <textarea placeholder="Entrez l'expérience professionnelle souhaitée ici..." name="experienceSouhaitee" id="experienceSouhaitee" rows="3"></textarea>

            <h2>Remarque ou compétences particulières</h2>
            <textarea placeholder="Entrez les remarques ou compétences particulières ici..." name="remarquesCompetences" id="remarquesCompetences" rows="3"></textarea>

            <h2>Rémunération ou gratification</h2>
            <input type="text" id="remuneration" name="remuneration">

            <div align="right">
                 Abidjan le : <input type="text" name="date" width="10px" id="date"> 
                <p>Signature et cachet de l'employeur</p>
            </div>

            <footer>
                <h3 class="devise">Formation - Placement - Consultation</h3>
                <div class="economipig">
                    <div class="contactpig">
                        <p>Tel : (225)20 30 35 00 / Fax : (225)20 22 67 64</p>
                        <p>E-mail: pigierci@pigierci.com</p>
                        <p>01 BP 1585 Abidjan République de Côte d'Ivoire</p>
                        <p>23, Boulevard de la République - Plateau</p>
                    </div>
                    <div class="infopig">
                        <p>SARL au capital de 300.000.000 FCFA</p>
                        <p>RCCM N° CI-ABJ-1977-B-26872</p>
                        <p>CC : 7702508 P / Centre des impôts : DGE</p>
                        <p>Régime d'imposition : Réel Normal</p>
                    </div>
                </div>
            </footer>

            <div style="text-align: center;">
                <button type="button" onclick="generatePDF()">Télécharger PDF</button>
            </div>
        </form>
        <div style="text-align: center;">
                <button type="button" onclick="generatePDF()">Télécharger PDF</button>
            </div>
      
    </div>

    <script>
        // Fonction pour générer le PDF
        function generatePDF() {
            const { jsPDF } = window.jspdf;

            // Créer un nouveau document PDF
            const doc = new jsPDF();

            // Ajouter le contenu du formulaire au PDF
            doc.text("Formulaire d'Offre", 10, 10);

            // Récupérer les données du formulaire
            const formElements = document.querySelectorAll('#offreForm input, #offreForm textarea');
            let y = 20; // Position de départ pour le texte dans le PDF
            formElements.forEach(element => {
                if (element.type !== 'button') {
                    const label = document.querySelector(`label[for=${element.id}]`);
                    const text = label ? `${label.innerText} ${element.value}` : `${element.value}`;
                    doc.text(text, 10, y);
                    y += 10;
                }
            });

            // Sauvegarder le PDF
            doc.save('formulaire_offre.pdf');
        }
    </script>





<div class="container">
         

        <h2>Soumettre la demande</h2>
        
@if(session('status'))
 <div class="alert alert-succes">
    {{session('status')}}
 </div>
@endif



<ul>
@foreach($errors->all() as $error)

<li class="alert alert-danger">
{{$error}}
</li>
@endforeach


        <form action="{{ route('adddemandeentrepise') }}" enctype="multipart/form-data" method="POST">
        @csrf  
        <div style="text-align: center;">
                        <label for="Email">Email</label>
                        <input name="Email" required placeholder="Entrez votre email" type="email" class="form-control">
                    </div>

            <div style="text-align: center;">
             <input type="file" name="fichier" id="" required>  </div>
             <div style="text-align: center;">
                <button type="submit">Envoyer</button>
            </div>
            <!-- Affichage des erreurs de validation -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </form>
        
        
    </div>
    <div style="text-align: center; margin-top: 20px;">
            <a href="./index.php" class="btn-back">Retour</a>
        </div>
</body>

</html>
