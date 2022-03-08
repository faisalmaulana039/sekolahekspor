<form action="" method="POST">
      PROGRAM CEK KELULUSAN<br>
      Nilai Ujian : <input type="text" name="nilai">
      <input type="submit" value="Hasil">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['nilai'];
        if ($nilai >= 80 )
        {
          $grade = "A";
          $keterangan = "Kamu mendapat nilai A";
        }
        elseif ($nilai >= 60 )
        {
          $grade = "B";
          $keterangan = "Kamu mendapatkan nilai B";
        }
        elseif ($nilai >= 0)
        {
          $grade = "C";
          $keterangan = "Kamu mendapatkan nilai C";
        }
        echo "Hasil Kelulusan";
        echo "<br>";
        echo "Nilai : " . $nilai;
        echo "<br>";
        echo "Keterangan : " . $keterangan;
        echo "<br>";
        echo "Indeks Prestasi : " . $grade;
      }
    ?>