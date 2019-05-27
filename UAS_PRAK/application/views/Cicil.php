<div class="container">
    <h1 class="mt-5">Cicil</h1>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tenor</th>
                <th scope="col">Bunga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cicil as $m) : ?>
                <tr>
                    <th scope="row"><?= $m['id_cicil']; ?></th>
                    <td><?= $m['tenor']; ?></td>
                    <td><?= $m['bunga']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
