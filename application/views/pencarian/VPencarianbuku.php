<!-- spasi -->
<br>
<!-- akhir spasi -->


<!-- ini adalah header -->
<div class="card">
  <h5 class="card-header">Pencarian Data Buku</h5>
  <div class="card-body">
 <!-- ini adalah akhir header -->

 

<!-- spasi -->
<br>
<!-- akhir spasi -->




<!-- table -->
<div class="card text-center">
    <div class="card-header">
        <!-- search bar -->
            <form class="d-flex" role="search" method="post" action="<?php echo site_url('Welcome/Pencarianbuku'); ?>">
                <input type="text" name="cari" placeholder="Judul Buku" class="form-control me-2">
                <button class='btn btn-outline-primary' type="submit">Search</button>
            </form>
        <!-- end search bar -->
    </div>
    <div class="card-body">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                </tr>
            </thead>
            <tbody>
                <!-- ini yg awal -->
                <?php
                        if(!empty($DataPencarianBuku))
                        {
                    
                            foreach($DataPencarianBuku as $ReadDS)
                            {
                    ?>

                    <?php		
                        }
                    }
                    ?> 
                <!-- akhir awal -->
                <?php if (isset($GetDataCariBuku) && !empty($GetDataCariBuku)) {
                    $no=1;
                    foreach ($GetDataCariBuku as $buku) { ?>
                        <tr>
                            <td><?php echo $buku->kd_buku; ?></td>
                            <td><?php echo $buku->judul_buku; ?></td>
                            <td><?php echo $buku->pengarang; ?></td>
                            <td><?php echo $buku->penerbit; ?></td>
                        </tr>
                    <?php  }
                } else { ?>
                    <tr>
                        <td colspan="2">Tidak ada hasil pencarian.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- end table -->
    
  </div>
</div>