<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidature</title>

    <!-- Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: rgb(7, 41, 77);
            color: #fff;
            text-align: center;
            padding: 10px 0;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        .form-control-file {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            padding: 7px 10px;
        }

        .btn-primary {
            background-color: rgb(7, 41, 77);
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-primary:hover {
            background-color: rgb(7, 41, 77);
        }

        .btn-primary:hover {
            background-color: rgb(254, 202, 0);
        }

        .btn-secondary {
            background-color: rgb(7, 41, 77);
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
            text-decoration: none;
            /* Enlève la décoration de lien par défaut */
            display: inline-block;
            /* Assure que le bouton se comporte comme un bloc en ligne */
            transition: background-color 0.3s ease;
            /* Transition douce pour le survol */
        }

        .btn-secondary:hover {
            background-color: rgb(254, 202, 0);
        }
    </style>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h3>Ajout de candidature</h3>
            </div>
            <div class="card-body">
                <form action="/add" method="post" enctype="multipart/form-data" id="add-form">
                    <div class="form-group">
                        <label for="NometPrenoms">Nom et Prénoms</label>
                        <input name="NometPrenoms" required placeholder="Entrez votre nom et prénoms" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input name="Email" required placeholder="Entrez votre email" type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="NumeroDeTelephone">Numéro de téléphone</label>
                        <input type="tel" name="NumeroDeTelephone" required placeholder="Entrez votre numéro de téléphone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="filiere">Filière</label>
                        <select class="form-control" id="filiere" name="filiere" required>
                            <option value="">Choisir une filière</option>
                            <option value="Informatique">Informatique</option>
                            <option value="Gestion">Gestion</option>
                            <option value="Marketing">Marketing</option>
                            <!-- Ajoutez d'autres options de filière ici -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fichier">Votre CV (PDF, DOC, DOCX)</label>
                        <input type="file" name="fichier" accept=".pdf,.doc,.docx" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Enregistrer</button>
                    </div>
                </form>
                <div class="text-center">
                    <a href="./index.php" class="btn btn-secondary">Retour</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#filiere").select2({
                tags: true,
                placeholder: "Choisir une filière",
                allowClear: true,
                minimumInputLength: 1,
            });
        });
    </script>

</body>

</html>