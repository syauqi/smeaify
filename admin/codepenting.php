<?php
                      include "../koneksi.php";
                      $count = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ruangan"));
                      echo $count," <b> Ruangan Terdaftar Di Database Saat Ini!</b>";
                
                    ?>
                      </span


                      