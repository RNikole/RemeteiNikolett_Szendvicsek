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
                        <a class="nav-link active" aria-current="page" href="index.php">Szendvicsek listázása</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="felvetel.php">Szendvicsek felvétele</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <h1 class="my-4">Szendvicsek listázása</h1>

        <table class="table table-striped m-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Szendvics megnevezés</th>
                    <th>Súlya</th>
                    <th>Alap</th>
                    <th>Kenyér típusa</th>
                    <th>Feltétek</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $file = fopen("adatok.csv", "r");
                    $i = 0;
                    
                    while ($sor = fgets($file)) :
                        $i++;
                        $adatok = explode(';', trim($sor));
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $adatok[0] ?></td>
                    <td><?php echo $adatok[1] ?></td>
                    <td><?php echo $adatok[2] ?></td>
                    <td><?php echo $adatok[3] ?></td>
                    <td>
                        <?php 
                            $j = 4;
                            while ($j < count($adatok)) {
                                if ($j != 4) {
                                    echo ", ";
                                }
                                echo $adatok[$j];
                                $j++;  
                            }
                        ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Szendvics megnevezés</th>
                    <th>Súlya</th>
                    <th>Alap</th>
                    <th>Kenyér típusa</th>
                    <th>Feltétek</th>
                </tr>
            </tfoot>
        </table>
    </main>

</body>
</html>