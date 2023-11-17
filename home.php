<?php
include("config.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>world cup</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="" class="img-fluid img-thumbnail" style="max-height: 50px; max-width: 50px;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-md-auto gap-2">
                        <li class="nav-item rounded">
                            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill me-2"></i>Home</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
        <section class="text-white row d-flex flex-row text-center align-items-center pt-5 ">
            <h1 class="pt-5 display-1 " style="font-weight: bold; ">FIFA WORLD CUP <br> <br> MOROCCO 2030</h1>

        </section>

    </header>
    <main>

        <section>
            <form class="p-5  row" action="" method="post">
                <label for="" class="text-white p-3 h1 display-6">filter teams by group</label> <br>
                <select class="col-10" name="groupe" class="form-select">
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">E</option>
                    <option value="6">F</option>
                    <option value="7">G</option>
                    <option value="8">H</option>
                </select>
                <input type="submit" value="go" name="go" class="col-2 col  btn btn-info">
            </form>
            <table class="table table-warning text-center mb-5 container">
                <thead class="table-danger">
                    <th class="groupe">Groupe  </th>
                    <th>match joué</th>
                    <th>victoire</th>
                    <th>null</th>
                    <th>défaites</th>
                    <th>but marqué</th>
                    <th>points</th>
                </thead>
                <tbody>
                    <?php
                    if (@$_POST["go"]) {
                        $idG = $_POST["groupe"];
                        $sql = "select * from equipe where idGroup = $idG";
                        $req = mysqli_query($conn, $sql);
                        while ($group = mysqli_fetch_row($req)) {

                    ?>
                            <tr>
                                <td><img class="flag" src="<?php echo $group[2]; ?>" alt="flag" data-id="<?php echo $group[0]; ?>">
                                    <?php echo $group[1] ?></td>
                                <td><?php echo $group[8] ?></td>
                                <td><?php echo $group[10] ?></td>
                                <td><?php echo $group[12] ?></td>
                                <td><?php echo $group[11] ?></td>
                                <td><?php echo $group[7] ?></td>
                                <td><?php echo $idG ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>



                </tbody>
            </table>
        </section>


        <section class="container">
            <h1 class="text-center p-5 m-5 text-white">FIFA World Cup 2018 All Groups List</h1>
            <div>
                <?php
                $sql = "SELECT * FROM groupe";
                $request = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_row($request)) {

                ?>
                    <div class="row p-2">
                        <div class="col-12">
                            <table class="table table-warning text-center mb-5">
                                <thead class="table-danger">
                                    <th class="groupe">Groupe <?php echo $row[1] ?></th>
                                    <th>match joué</th>
                                    <th>victoire</th>
                                    <th>null</th>
                                    <th>défaites</th>
                                    <th>but marqué</th>
                                    <th>points</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM equipe WHERE idGroup = {$row[0]}";
                                    $equipeRequest = mysqli_query($conn, $sql);

                                    while ($equipeRow = mysqli_fetch_row($equipeRequest)) {
                                    ?>
                                        <div class="modal" id="myModal<?php echo $equipeRow[0]; ?>" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><?php echo $equipeRow[1]; ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="<?php echo $equipeRow[2]; ?>" alt="flag">
                                                        <p>continent : <?php echo $equipeRow[3]; ?></p>
                                                        <p>population : <?php echo $equipeRow[6]; ?></p>
                                                        <p>jouer cle : <?php echo $equipeRow[4]; ?></p>
                                                        <p>capital : <?php echo $equipeRow[5]; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal" id="groupeModal<?php echo $equipeRow[0]; ?>" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><?php echo $equipeRow[1]; ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="<?php echo $equipeRow[2]; ?>" alt="flag">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <tr>
                                            <td><img class="flag" src="<?php echo $equipeRow[2]; ?>" alt="flag" data-id="<?php echo $equipeRow[0]; ?>">
                                                <?php echo $equipeRow[1] ?></td>
                                            <td><?php echo $equipeRow[8] ?></td>
                                            <td><?php echo $equipeRow[10] ?></td>
                                            <td><?php echo $equipeRow[12] ?></td>
                                            <td><?php echo $equipeRow[11] ?></td>
                                            <td><?php echo $equipeRow[9] ?></td>
                                            <td><?php echo $equipeRow[7] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>



    <footer class="text-center text-white" style="background-color: #caced1;">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Images -->
            <section class="">
                <div class="row">
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/111.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/112.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/115.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2030 Morocco
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>