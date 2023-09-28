<!-- spasi -->
<br>
<!-- akhir spasi -->




<!-- ini adalah header -->
<div class="card">
  <h5 class="card-header">Form Data Buku</h5>
  <div class="card-body">
<!-- ini adalah akhir header -->




<!-- Button add modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add+</button>
<!-- akhir Button add modal -->




<!-- ini tampilan modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('Welcome/BukuInsert'); ?>" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Kode buku</label>
            <input type="text" class="form-control" name="kd_buku">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Judul buku</label>
            <input type="text" class="form-control" name="judul_buku">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Pengarang</label>
            <input type="text" class="form-control" name="pengarang">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Penerbit</label>
            <input type="text" class="form-control" name="penerbit">
          </div>
          <div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
   
    </div>
  </div>
</div>
<!-- ini akhir tampilan modal -->






<!-- ini adalah tabel -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">tools</th>
    </tr>
  </thead>
  <?php
	if(!empty($DataPencarianBuku))
	{
        $no= 1;
		foreach($DataPencarianBuku as $ReadDS)
    {
	?>
  <tbody>
    <tr>
      <th><?php echo $no; ?></th>
      <td><?php echo $ReadDS->kd_buku; ?></td>
      <td><?php echo $ReadDS->judul_buku; ?></td>
      <td><?php echo $ReadDS->pengarang; ?></td>
      <td><?php echo $ReadDS->penerbit; ?></td>
      <td>




<!-- Button edit modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Edit
</button>
<!-- akhir Button edit modal -->




<!-- Modal edit -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('Welcome/BukuUpdate'); ?>" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Kode buku</label>
            <input type="text" class="form-control" id="recipient-name" name="kd_buku">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Judul buku</label>
            <input type="text" class="form-control" id="recipient-name"name="judul_buku">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Pengarang</label>
            <input type="text" class="form-control" id="recipient-name" name="pengarang">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Penerbit</label>
            <input type="text" class="form-control" id="recipient-name" name="penerbit">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit</button>
         </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- akhir Modal Edit -->





<!-- Button Delete -->
<a type="button" class="btn btn-danger" href="<?php echo site_url('Welcome/BukuDelete/'.$ReadDS->kd_buku); ?>" onclick="return confirm('are you sure?')">
     Delete
</a>
<!-- akhir Button Delete -->





</td>
</tr>
<?php		
      	$no++;}
	}
	?>
   
</tbody>
</table>
<!-- akhir tabel-->





  </div>
</div>