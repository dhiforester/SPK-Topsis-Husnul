<?php
    //Koneksi
    date_default_timezone_set('Asia/Jakarta');
    include "../../_Config/Connection.php";
    include "../../_Config/Session.php";
    //Tangkap id_akses
    if(empty($_POST['id_akses'])){
        echo '<div class="modal-body">';
        echo '  <div class="row">';
        echo '      <div class="col-md-12 mb-3">';
        echo '          ID Akses Tidak Ditemukan.';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
        echo ' <div class="modal-footer bg-info">';
        echo '  <div class="row">';
        echo '      <div class="col-md-12 mb-3">';
        echo '          <button type="button" class="btn btn-dark btn-rounded" data-bs-dismiss="modal">';
        echo '              <i class="bi bi-x-circle"></i> Tutup';
        echo '          </button>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
    }else{
        $id_akses=$_POST['id_akses'];
        //Buka data askes
        $QryDetailAkses = mysqli_query($Conn,"SELECT * FROM akses WHERE id_akses='$id_akses'")or die(mysqli_error($Conn));
        $DataDetailAkses = mysqli_fetch_array($QryDetailAkses);
        $nama_akses= $DataDetailAkses['nama'];
        $email_akses = $DataDetailAkses['email'];
        $password= $DataDetailAkses['password'];
        $Akses= $DataDetailAkses['akses'];
?>
<div class="modal-body">
    <div class="row mt-2"> 
        <div class="col-md-12">
            <table class="">
                <tbody>
                    <tr>
                        <td>
                            <small><dt>Nama</dt></small>
                        </td>
                        <td><b>:</b></td>
                        <td>
                            <small><?php echo $nama_akses; ?></small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <small><dt>Email</dt></small>
                        </td>
                        <td><b>:</b></td>
                        <td>
                            <small><?php echo $email_akses; ?></small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <small><dt>Akses</dt></small>
                        </td>
                        <td><b>:</b></td>
                        <td>
                            <small><?php echo $Akses; ?></small>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal-footer bg-info">
    <button type="button" class="btn btn-dark btn-rounded" data-bs-dismiss="modal">
        <i class="bi bi-x-circle"></i> Tutup
    </button>
</div>
<?php } ?>