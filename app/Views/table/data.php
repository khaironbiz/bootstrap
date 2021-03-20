<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href=" https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>



    <title>Hello, world!</title>
</head>

<body>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>NIP</th>
                <th>NIRA</th>
                <th>Email</th>
                <th>HP</th>
                <th>Pendidikan</th>
                <th>Universitas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no     = 1;
            foreach ($user as $u) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $u['nama'] ?></td>
                    <td><?= $u['nip'] ?></td>
                    <td><?= $u['nira'] ?></td>
                    <td><?= $u['email'] ?></td>
                    <td><?= $u['hp'] ?></td>
                    <td><?= $u['pendidikan'] ?></td>
                    <td><?= $u['universitas'] ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable();

            $('#example tbody').on('click', 'tr', function() {
                var data = table.row(this).data();
                alert('You clicked on ' + data[0] + '\'s row');
            });
        });
    </script>




</body>

</html>