<?php require ("./layout/base.php") ?>

<body class="bdTable-user">
    <div class="container content-user">
        <div class="row">
            <div class="col-md-3">
                <h5 class='home-page'><a href='?p=home/page'>Home</a></h5>
                <hr class='hr'>
            </div>

            <div class="col-md-6 table-size">
                <ul class="menu-items">
                    <li><h5><a href="?p=table/user">User</a></h5></li>
                    <li><h5><a href="?p=table/note">Note</a></h5></li>
                    <li><h5><a href="?p=table/activite">Activite</a></h5></li>
                    <li><h5><a href="?p=table/seance">Seance</a></h5></li>
                </ul>
                <h1>TABLE USER</h1>
                <table class="table table-bordered border-dark table-hover table-bdC">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">PSEUDO</th>
                            <th scope="col">ADRESSE</th>
                            <th scope="col">ÂGE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $data) : ?>
                            <tr>
                                <th scope='row'> <?= $data['id'] ?> </th>
                                <td> <?= $data['username'] ?> </td>
                                <td> <?= $data['adresse'] ?> </td>
                                <td> <?= $data['age'] ?> </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>