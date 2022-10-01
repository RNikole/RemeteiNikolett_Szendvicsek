<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szendvicsek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
    
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Szendvicsek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Szendvicsek listázása</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="felvetel.php">Szendvicsek felvétele</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <h1 class="my-4">Szendvicsek felvétele</h1>

        <form action="felvetel.php" method="post" name="szendvics_felvetel" onsubmit="return validalas();">
            <div class="mb-3">
                <label for="szendvics_input">Szendvics megnevezés</label>
                <input class="form-control" type="text" id="szendvics_input" name="szendvics" placeholder="Szendvics megnevezés" required>
            </div>
            <div class="mb-3">
                <label for="suly_input">Súlya (gramm)</label>
                <input class="form-control" type="number" id="suly_input" name="suly" placeholder="Súlya" required>
            </div>
            <div class="mb-3">
                <label for="alap_input">Alap</label>
                <select class="form-select" name="alap" id="alap_input" required>
                    <option value=""></option>
                    <option value="vaj">vaj</option>
                    <option value="vajkrém">vajkrém</option>
                    <option value="sajtkrém">sajtkrém</option>
                </select>
            </div>
            <div class="mb-3">
                <p>Kenyér típusa:</p>
                <input type="radio" id="sima" name="kenyer_tipusa" value="sima" checked>
                <label for="sima">sima</label><br>
                <input type="radio" id="glutenmentes" name="kenyer_tipusa" value="gluténmentes">
                <label for="glutenmentes">gluténmentes</label><br>
            </div>
            <div class="mb-3">
                <p>Feltétek:</p>
                <input class="form-check-input" type="checkbox" id="feltet1" name="feltet1" value="sonka">
                <label for="feltet1">sonka</label><br>
                <input class="form-check-input" type="checkbox" id="feltet2" name="feltet2" value="szalámi">
                <label for="feltet2">szalámi</label><br>
                <input class="form-check-input" type="checkbox" id="feltet3" name="feltet3" value="sajt">
                <label for="feltet3">sajt</label><br>
                <input class="form-check-input" type="checkbox" id="feltet4" name="feltet4" value="paprika">
                <label for="feltet4">paprika</label><br>
                <input class="form-check-input" type="checkbox" id="feltet5" name="feltet5" value="hagyma">
                <label for="feltet5">hagyma</label><br>
            </div>
            
            <button class="btn btn-outline-secondary" type="submit">Felvétel</button>
        </form>
    </main>
    
</body>
</html>