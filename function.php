<!-- KONEKSI DATABASE -->
<?php
$config = mysqli_connect("localhost", "root", "", "core");

// Select Query
function query($query)
{
    global $config;

    $result = mysqli_query($config, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//Function Insert

function tambah($data)
{
    global $config;

    $brand = htmlspecialchars($data["brand"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $price = htmlspecialchars($data["price"]);
    $des = htmlspecialchars($data["des"]);
    $no = htmlspecialchars($data["no"]);

    //Upload Image

    $img = upload();
    if (!$img) {
        return false;
    }
    $query = "INSERT INTO laptop
                VALUES(
                    '', '$brand', '$tipe', '$price', '$des', '$no', '$img'
                )
                ";

    mysqli_query($config, $query);

    return mysqli_affected_rows($config);
}

function upload()
{
    $namafile = $_FILES['img']['name'];
    $ukuranfile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpname = $_FILES['img']['tmp_name'];


    //cek gambar

    if ($error === 4) {
        echo "<script>
        alert('Gambar Harus di isi')
        </script>";

        return false;
    }

    $ekstensivalid = ['jpg', 'jpeg', 'png'];
    $ekstensi = explode('.', $namafile);
    $ekstensi = strtolower(end($ekstensi));

    if (!in_array($ekstensi, $ekstensivalid)) {
        echo "<script>
        alert('Yang anda upload bukan gambar')
        </script>";

        return false;
    }

    if ($ukuranfile > 2000000) {
        echo "<script>
        alert('Ukuran Terlalu Besar')
        </script>";

        return false;
    }

    //Encyptnama baru

    $newname = uniqid();
    $newname .= '.';
    $newname .= $ekstensi;
    //Success file validationi
    move_uploaded_file($tmpname, 'images/laptop/' . $newname);

    return $newname;
}


function cari($search)
{
    $query = "SELECT * FROM laptop where brand LIKE '%$search%'
    OR tipe LIKE '%$search%' ";

    return query($query);
}

?>