<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
        .table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            text-align: center;
        }
        .tgl{
            text-align: center;
        }
        th, td{
            padding: 2px 10px 5px 2px;
            font-size: 13px;
        }
    </style>
    <img src="/assets/img/logoamikom.png" alt="">
    <table class="table table-bordered" id="" width="100%" cellspacing="0">
        <thead>
            <th>No</th>
            <th>KODE</th>
            <th>KEY</th>
            <th>MATAKULIAH</th>
            <th>SKS</th>
            <th>TGL MID</th>
            <th>Paraf</th>
            <th>TGL UAS</th>
            <th>Paraf</th>
        </thead>
        <?php $i = 1?>
        <?php foreach ($krs as $d) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $d['kode'] ?></td>
                <td><?= $d['key_mhs'] ?></td>
                <td><?= $d['matkul'] ?></td>    
                <td><?= $d['sks'] ?></td>    
                <td class="tgl">/ &nbsp;&nbsp;&nbsp;&nbsp;/</td>    
                <td><?= $d['paraf'] ?></td>    
                <td class="tgl">/ &nbsp;&nbsp;&nbsp;&nbsp;/</td> 
                <td><?= $d['paraf'] ?></td>    
            </tr>
        <?php $i++; endforeach?>
    </table>

    
</body>
</html>