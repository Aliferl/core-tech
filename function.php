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

function register($data){
    global $config;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($config, $data["password"]);
    $confirmpassword = mysqli_real_escape_string($config, $data["logpass"]);;

    // cek apakah username sudah ada atau belum
    $result = mysqli_query($config, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert ('Username sudah digunakan')
            </script>";
            return false;
    }

    // cek konfirmasi password
    if( $password !== $confirmpassword ){
        echo "<script>
                alert ('Password tidak cocok');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // hubungin ke database
    mysqli_query($config, "INSERT INTO user VALUES('','$username', '$password')");
    return mysqli_affected_rows($config);


}

?>
