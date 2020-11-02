 <table id="datatable" class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Perumahan</th>
                <th>Foto</th>

                <th>Nama Perumahan</th>
                <th>Lokasi Perumahan</th>
                <th>Daftar Tipe</th>
                <th>Jumlah Kaveling</th>
                <th>Luas Tanah</th>
                <th>Spesifikasi Teknis</th>
                <th>Aksi</th>
              </tr>
            </thead>



            <tbody>
              <?php
              include 'conndb.php';
            
              $no = 1;
              $res = $mysqli->query("SELECT * FROM tbl_perumahan");
              while($row = $res->fetch_array()){
                echo '
                <tr>
                <td>'.$no.'</td>
                <td>'.$row['id_perumahan'].'</td>
                <td><img src="../assets/images/perumahan/'.$row['gambar'].'" class="thumb-sm" alt=""></td>
                
                <td>'.$row['nama_perumahan'].'</td>
                <td>'.$row['lokasi_perumahan'].'</td>
                <td>'.$row['daftar_tiperumah'].'</td>
                <td>'.$row['Jumlah_kaveling'].'</td>
                <td>'.$row['luas_tanah'].'</td>
                <td>'.$row['spesifikasi_teknis'].'</td>
                <td>
                <a id="edit-data" name="ubah" href="modals-edit-perumahan.php?id='.$row['id_perumahan'].'" data-target="#edit-modal" data-toggle="modal" class="table-action-btn"><i class="md md-edit"></i></a>
                <a href="delete-perumahan.php?id='.$row['id_perumahan'].'" class="table-action-btn"><i class="md md-close"></i></a>
                </td>
                </tr>';
                $no++;
              }
              ?>

            </tbody>
          </table>