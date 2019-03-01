

<!DOCTYPE html>

<html lang="id">

<head>

      <title>menu makanan</title>

      
</head>

<body>

 <center>

      <h1>Menu Makanan</h1>

      <table >

            <thead>

                  <tr>

                        
                        <td>Id Makanan</td>
                        <td>Nama Makanan</td>
                        <td>Harga</td>
                        <td>Jumlah</td>

                       

                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($data->result_array() as $i):
                              $id_makmin=$i['id_makmin'];
                              $nama_makmin=$i['nama_makmin'];

                              $harga_makmin=$i['harga_makmin'];

                  ?>

                  <tr>
                        <td><?php echo $id_makmin;?> </td>
                        <td><?php echo $nama_makmin;?> </td>

                        <td><?php echo $harga_makmin;?> </td>
                        <td>
                        <input type="text" name="jumlah"></td>
                        

                        

                  </tr>

                  <?php endforeach;?>

            </tbody>

      </table>
      <input type="submit" value="submit">
     


</center>
</body>

</html>
