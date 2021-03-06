<section class="content">
	<div id="modalTambah" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<form class="form-horizontal" role="form" id="formTambah">
					<div class="card card-info">
						<div class="modal-header">
							<h4 class="modal-title">Add Data Midi</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="card-body">
									<b>DATA TOKO</b>
									<hr>
									<div class="form-group">
										<label>Kode Toko</label>
										<input required type="text" id="kode" name="kode" class="form-control" placeholder="Kode Toko">
									</div>

									<div class="form-group">
										<label>Nama Toko</label>
										<input required type="text" id="nama" name="nama" class="form-control" placeholder="Nama Toko">
									</div>

									<div class="form-group">
										<label>Alamat Toko</label>
										<textarea type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Toko"></textarea>
									</div>

									<div class="form-group">
										<label>Titik Kordinat</label>
										<input type="text" id="titik_kordinat" name="titik_kordinat" class="form-control" placeholder="Titik Kordinat">
									</div>

									<div class="form-group">
										<label>Nomor Telp Toko</label>
										<input type="text" id="telp_toko" name="telp_toko" class="form-control" placeholder="Nomor Telp Toko">
									</div>

									<div class="form-group">
										<label>Nama Pejabat Toko</label>
										<input type="text" id="nama_pejabat_toko" name="nama_pejabat_toko" class="form-control" placeholder="Nama Pejabat Toko">
									</div>

									<div class="form-group">
										<label>Telp Pejabat Toko</label>
										<input type="text" id="telp_pejabat" name="telp_pejabat" class="form-control" placeholder="Telp Pejabat Toko">
									</div>

									<div class="form-group">
										<label>Nama IT Cabang</label>
										<input type="text" id="nama_it_cabang" name="nama_it_cabang" class="form-control" placeholder="Nama IT Cabang">
									</div>

									<div class="form-group">
										<label>Telp IT Cabang</label>
										<input type="text" id="telp_it_cabang" name="telp_it_cabang" class="form-control" placeholder="Telp IT Cabang">
									</div>
							
									<div class="form-group">
										<label>PIC Aktivasi</label>
										<input type="text" id="pic_aktivasi" name="pic_aktivasi" class="form-control" placeholder="PIC Aktivasi">
									</div>

									<div class="form-group">
										<label>Tanggal Aktivasi</label>
										<input type="date" id="tgl_aktivasi" name="tgl_aktivasi" class="form-control" placeholder="Serial Number">
									</div>
								</div>
								<!-- /.card-body -->
							</div>
							<div class="col-md-6">
								<div class="card-body">
									<b>PERANGKAT</b>
									<hr>
				

									<div class="form-group">
										<label>Media Koneksi</label>
										<select class="form-control select2" style="width: 100%;" name="media_koneksi" id="media_koneksi">
											<option selected="selected">-- Pilih --</option>
											<?php foreach ($mymediakoneksi as $value) { ?>
												<option value=<?= $value['id'] ?>><?= $value['nama'] ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label>Jenis Perangkat</label>
										<select class="form-control select2" style="width: 100%;" name="jenis_perangkat" id="jenis_perangkat">
											<option selected="selected">-- Pilih --</option>
											<?php foreach ($myjenisperangkat as $value) { ?>
												<option value=<?= $value['id'] ?>><?= $value['nama'] ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label>Type Perangkat</label>
										<input type="text" id="type_perangkat" name="type_perangkat" class="form-control" placeholder="Type Perangkat">
									</div>

									<div class="form-group">
										<label>Merek Perangkat</label>
										<select class="form-control select2" style="width: 100%;" name="merek_perangkat" id="merek_perangkat">
											<option selected="selected">-- Pilih --</option>
											<?php foreach ($mymerekperangkat as $value) { ?>
												<option value=<?= $value['id'] ?>><?= $value['nama'] ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label>MAC Address</label>
										<input type="text" id="macaddress" name="macaddress" class="form-control" placeholder="MAC Address">
									</div>

									<div class="form-group">
										<label>Serial Number</label>
										<input type="text" id="serial_number" name="serial_number" class="form-control" placeholder="Serial Number">
									</div>

									<div class="form-group">
										<label>Nomor MSISDN 1</label>
										<input type="text" id="nomor_1" name="nomor_1" class="form-control" placeholder="NOMOR MSISDN 1">
									</div>

									<div class="form-group">
										<label>Noor MSISDN 2</label>										
										<input type="text" id="nomor_2" name="nomor_2" class="form-control" placeholder="NOMOR MSISDN 2">
									</label>

									<div class="form-group">
										<label>IMEI GSM 1</label>
										<input type="text" id="imei_1" name="imei_1" class="form-control" placeholder="IMEI-GSM 1">
									</div>

									<div class="form-group">
										<label>IMEI GSM 2</label>
										<input type="text" id="imei_2" name="imei_2" class="form-control" placeholder="IMEI-GSM 2">
									</div>

									<div class="form-group">
										<label>Vendor</label>
										<select class="form-control select2" style="width: 100%;" name="vendor" id="vendor">
											<option selected="selected">-- Pilih --</option>
											<?php foreach ($myvendor as $value) { ?>
												<option value=<?= $value['id'] ?>><?= $value['nama'] ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label>INET</label>
										<select class="form-control select2" style="width: 100%;" name="nomor_inet" id="nomor_inet">
											<option selected="selected">-- Pilih --</option>
											<?php foreach ($myinet as $value) { ?>
												<option value=<?= $value['id'] ?>><?= $value['nama'] ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label>Kapasitas</label>
										<input type="text" id="kapasitas" name="kapasitas" class="form-control" placeholder="Kapasitas">
									</div>

									<div class="form-group">
										<label>Status</label>
										<select class="form-control select2" style="width: 100%;" name="status" id="status">
											<option value="" selected="selected">-- Pilih --</option>
											<option value="1" >-- Active --</option>
											<option value="0">-- Inactive --</option>
										</select>
									</div>

									<div class="form-group">
										<label>Dokumen</label>
										<input type="file" id="dokumen" name="dokumen" class="form-control">
									</div>

									<div class="form-group">
										<label>Keterangan</label>
										<textarea type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" id="btn_import" class="btn btn-sm btn-success pull-left">
							<i class="ace-icon fa fa-save"></i>
							Simpan
						</button>
						<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
							<i class="ace-icon fa fa-times"></i>
							Batal
						</button>
					</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>

	<div id="modalEdit" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<form class="form-horizontal" role="form" id="formEdit">
					<div class="card card-info">
						<div class="modal-header">
							<h4 class="modal-title">Edit Data Midi</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="card-body">
									<div class="form-group">
										<label>Nama Inventori</label>
										<input required type="hidden" id="e_id" name="e_id" class="form-control">
										<input required type="text" id="e_nama" name="e_nama" class="form-control" placeholder="Nama Inventori">
									</div>

									<div class="form-group">
										<label>Nomor Inventori</label>
										<input required type="text" id="e_nomor" name="e_nomor" class="form-control" placeholder="Nomor Inventori">
									</div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-tag"></i></span>
										</div>
										<input type="text" id="e_label" name="e_label" class="form-control" placeholder="Label Inventori">
									</div>

									<div class="form-group">
										<label>Kategori Inventori</label>
										<select class="form-control select2" style="width: 100%;" name="e_kategori" id="e_kategori">
											<option selected="selected">-- Pilih --</option>
											<?php foreach ($mykategori as $value) { ?>
												<option value=<?= $value['id'] ?>><?= $value['nama'] ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label>Tanggal Pembelian</label>
										<input type="date" id="e_tglpembelian" name="e_tglpembelian" class="form-control" placeholder="Tanggal Pembelian"></input>
									</div>

									<div class="form-group">
										<label>Fungsi</label>
										<input type="text" id="e_fungsi" name="e_fungsi" class="form-control" placeholder="Fungsi"></input>
									</div>

									<div class="form-group">
										<label>Ukuran</label>
										<input type="text" id="e_ukuran" name="e_ukuran" class="form-control" placeholder="Ukuran"></input>
									</div>

									<div class="form-group">
										<label>Merek Perangkat</label>
										<select class="form-control select2" style="width: 100%;" name="e_merek" id="e_merek">
											<option selected="selected">-- Pilih --</option>
											<?php foreach ($mymerek as $value) { ?>
												<option value=<?= $value['id'] ?>><?= $value['nama'] ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label>Type</label>
										<input type="text" id="e_type" name="e_type" class="form-control" placeholder="Type"></input>
									</div>
								</div>
								<!-- /.card-body -->
							</div>
							<div class="col-md-6">
								<div class="card-body">
									<div class="form-group">
										<label>Status Kepemilikan</label>
										<select class="form-control select2" style="width: 100%;" name="e_statuskepemilikan" id="e_statuskepemilikan">
											<option selected="selected">-- Pilih --</option>
											<?php foreach ($mystatuskepemilikan as $value) { ?>
												<option value=<?= $value['id'] ?>><?= $value['nama'] ?></option>
											<?php } ?>
										</select>
									</div>

									<div class="form-group">
										<label>Serial Number</label>
										<input type="text" id="e_serialnumber" name="e_serialnumber" class="form-control" placeholder="Serial Number">
									</div>

									<div class="form-group">
										<label>MAC Address</label>
										<input type="text" id="e_macaddress" name="e_macaddress" class="form-control" placeholder="MAC Address">
									</div>

									<div class="form-group">
										<label>Alokasi</label>
										<input type="text" id="e_alokasi" name="e_alokasi" class="form-control" placeholder="Alokasi">
									</div>

									<div class="form-group">
										<label>Penanggung Jawab</label>
										<input type="text" id="e_penanggungjawab" name="e_penanggungjawab" class="form-control" placeholder="Penanggung Jawab">
									</div>

									<div class="form-group">
										<label>File</label>
										<input type="file" id="e_foto" name="e_foto" class="form-control" placeholder="Penanggung Jawab">
									</div>

									<div class="form-group">
										<label>Keterangan</label>
										<textarea type="text" id="e_keterangan" name="e_keterangan" class="form-control" placeholder="Keterangan"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" id="btn_import" class="btn btn-sm btn-success pull-left">
							<i class="ace-icon fa fa-save"></i>
							Simpan
						</button>
						<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
							<i class="ace-icon fa fa-times"></i>
							Batal
						</button>
					</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>

	<!-- Default box -->

	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Daftar Data Midi</h3>
		</div>
		<br>
		<div class="col-sm-2">
			<button href="#modalTambah" type="button" role="button" data-toggle="modal" class="btn btn-block btn-primary"><a class="ace-icon fa fa-plus bigger-120"></a> Add Data Inventori</button>
		</div>
		<br>
		<div class="card-body p-0">
			<table id="table_id" class="table table-bordered table-hover projects">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th class="text-center">
							Kode Toko
						</th>
						<th class="text-center">
							Nomor Toko
						</th>
						<th class="text-center">
							Alamat
						</th>
						<th class="text-center">
							Titik Kordinat
						</th>
						<th class="text-center">
							Nomor Telepon Toko
						</th>
						<th class="text-center">
							Nama Pejabat Toko
						</th>
						<th class="text-center">
							Telp Pejabat Toko
						</th>
						<th class="text-center">
							Nama IT Cabang
						</th>
						<th class="text-center">
							Telp IT Cabang
						</th>
						<th class="text-center">
							Tgl Aktivasi
						</th>
						<th class="text-center">
							PIC Aktivasi
						</th>
						<th class="text-center">
							Media Koneksi
						</th>
						<th class="text-center">
							Jenis Perangkat
						</th>
						<th class="text-center">
							Type Perangkat
						</th>
						<th class="text-center">
							Mac Address
						</th>
						<th class="text-center">
							Serial Number
						</th>
						<th class="text-center">
							Nomor MSISDN 1
						</th>
						<th class="text-center">
							Nomor MSISDN 2
						</th>
						<th class="text-center">
							IMEI GSM 1
						</th>
						<th class="text-center">
							IMEI GSM 2
						</th>
						<th class="text-center">
							Nama Vendor
						</th>
						<th class="text-center">
							Nomor Inet
						</th>
						<th class="text-center">
							Kapasitas
						</th>
						<th class="text-center">
							Status
						</th>
						<th class="text-center">
							Dokumen
						</th>
						<th class="text-center">
							Keterangan
						</th>
						<th style="width:16%" class="text-center">
							Actions
						</th>
					</tr>
				</thead>
				<tbody id="show_data">
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</section>

<script type="text/javascript">
	if ($("#formTambah").length > 0) {
		$("#formTambah").validate({
			errorClass: "my-error-class",
			validClass: "my-valid-class",
			rules: {
				nama: {
					required: true
				},

				keterangan: {
					required: true
				},
			},
			messages: {

				nama: {
					required: "Wajib diisi!"
				},

				keterangan: {
					required: "Wajib diisi!"
				},
			},
			submitHandler: function(form) {
				$('#btn_simpan').html('Sending..');
				formdata = new FormData(form);
				$.ajax({
					url: "<?php echo base_url('administrator/datamidi/simpan') ?>",
					type: "POST",
					data: formdata,
					processData: false,
					contentType: false,
					cache: false,
					async: false,
					success: function(response) {
						$('#btn_simpan').html('<i class="ace-icon fa fa-save"></i>' +
							'Simpan');
						if (response == true) {
							document.getElementById("formTambah").reset();
							swalInputSuccess();
							show_data();
							$('#modalTambah').modal('hide');
						} else if (response == 401) {
							swalIdDouble();
						} else {
							document.getElementById("formTambah").reset();
							swalInputSuccess();
							show_data();
							$('#modalTambah').modal('hide');
						}
					}
				});
			}
		})
	}

	$('#show_data').on('click', '.item_hapus', function() {
		var id = $(this).data('id');
		Swal.fire({
			title: 'Apakah anda yakin?',
			text: "Anda tidak akan dapat mengembalikan ini!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, Hapus!',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type: "POST",
					url: "<?php echo base_url('administrator/datamidi/delete') ?>",
					async: true,
					dataType: "JSON",
					data: {
						id: id,
					},
					success: function(data) {
						show_data();
						Swal.fire(
							'Terhapus!',
							'Data sudah dihapus.',
							'success'
						)
					}
				});
			}
		})
	})

	//function show all Data
	function show_data() {
		$.ajax({
			type: 'POST',
			url: '<?php echo site_url('administrator/datamidi/tampil') ?>',
			async: true,
			dataType: 'json',
			success: function(data) {
				var html = '';
				var i = 0;
				var no = 1;
				for (i = 0; i < data.length; i++) {
					html += '<tr>' +
						'<td class="text-left">' + no + '</td>' +
						'<td class="text-left">' + data[i].kode + '</td>' +
						'<td class="text-left">' + data[i].nama + '</td>' +
						'<td class="text-left">' + data[i].alamat + '</td>' +
						'<td class="text-left">' + data[i].titik_kordinat + '</td>' +
						'<td class="text-left">' + data[i].telp_toko + '</td>' +
						'<td class="text-left">' + data[i].pejabat_toko + '</td>' +
						'<td class="text-left">' + data[i].telp_pejabat_toko + '</td>' +
						'<td class="text-left">' + data[i].nama_it_cabang + '</td>' +
						'<td class="text-left">' + data[i].telp_it_cabang + '</td>' +
						'<td class="text-left">' + data[i].tgl_aktivasi + '</td>' +
						'<td class="text-left">' + data[i].pic_aktivasi + '</td>' +
						'<td class="text-left">' + data[i].nama_media_koneksi + '</td>' +
						'<td class="text-left">' + data[i].nama_jenis_perangkat + '</td>' +
						'<td class="text-left">' + data[i].type_perangkat + '</td>' +
						'<td class="text-left">' + data[i].mac_address + '</td>' +
						'<td class="text-left">' + data[i].serial_number + '</td>' +
						'<td class="text-left">' + data[i].nomor_1 + '</td>' +
						'<td class="text-left">' + data[i].nomor_2 + '</td>' +
						'<td class="text-left">' + data[i].imei1 + '</td>' +
						'<td class="text-left">' + data[i].imei2 + '</td>' +
						'<td class="text-left">' + data[i].nama_vendor + '</td>' +
						'<td class="text-left">' + data[i].nama_inet + '</td>' +
						'<td class="text-left">' + data[i].kapasitas + '</td>' +
						'<td class="text-left">' + data[i].status + '</td>' +
						'<td class="text-left">' +
						'   <a href="<?php echo base_url() . 'assets/inventori/' ?>' + data[i].dokumen + '" target="_blank" class="btn btn-success btn-sm"  data-id="' + data[i].id + '">' +
						'      <i class="fas fa-download"> </i>  Download </a>' +
						'</a> &nbsp' +
						'</td>' +
						'<td class="text-left">' + data[i].keterangan + '</td>' +
						'<td class="project-actions text-right">' +
						'   <button  class="btn btn-primary btn-sm item_edit"  data-id="' + data[i].id + '">' +
						'      <i class="fas fa-folder"> </i>  Edit </a>' +
						'</button> &nbsp' +
						'   <button  class="btn btn-danger btn-sm item_hapus"  data-id="' + data[i].id + '">' +
						'      <i class="fas fa-trash"> </i>  Hapus </a>' +
						'</button> ' +
						'</td>' +
						'</tr>';
					no++;
				}
				$("#table_id").dataTable().fnDestroy();
				var a = $('#show_data').html(html);
				//                    $('#mydata').dataTable();
				if (a) {
					$('#table_id').dataTable({
						"searching": true,
						"ordering": true,
						"responsive": true,
						"paging": true,
					});
				}
				/* END TABLETOOLS */
			}

		});
	}

	//get data for update record
	$('#show_data').on('click', '.item_edit', function() {
		document.getElementById("formEdit").reset();
		var id = $(this).data('id');
		$('#modalEdit').modal('show');
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('administrator/datamidi/tampil_byid') ?>",
			async: true,
			dataType: "JSON",
			data: {
				id: id,
			},
			success: function(data) {
				$('#e_id').val(data[0].id);
				$('#e_nama').val(data[0].nama);
				$('#e_nomor').val(data[0].nomor);
				$('#e_label').val(data[0].label);
				$('#e_keterangan').val(data[0].keterangan);
				$('#e_kategori').val(data[0].kategori).select2();
				$('#e_tglpembelian').val(data[0].tgl_pembelian);
				$('#e_fungsi').val(data[0].fungsi);
				$('#e_ukuran').val(data[0].ukuran);
				$('#e_merek').val(data[0].merek).select2();
				$('#e_type').val(data[0].type);
				$('#e_statuskepemilikan').val(data[0].status_kepemilikan).select2();
				$('#e_serialnumber').val(data[0].serial_number);
				$('#e_macaddress').val(data[0].mac_address);
				$('#e_alokasi').val(data[0].alokasi);
				$('#e_penanggungjawab').val(data[0].penanggung_jawab);
				$('#e_keterangan').val(data[0].keterangan);

			}
		});
	});

	if ($("#formEdit").length > 0) {
		$("#formEdit").validate({
			errorClass: "my-error-class",
			validClass: "my-valid-class",
			rules: {
				e_nama: {
					required: true
				},

				e_keterangan: {
					required: true
				},

			},
			messages: {
				e_nama: {
					required: "Wajib diisi!"
				},

				e_keterangan: {
					required: "Wajib diisi!"
				},

			},
			submitHandler: function(form) {
				$('#btn_edit').html('Sending..');
				$.ajax({
					url: "<?php echo base_url('administrator/datamidi/update') ?>",
					type: "POST",
					data: $('#formEdit').serialize(),
					dataType: "json",
					success: function(response) {
						$('#btn_edit').html('<i class="ace-icon fa fa-save"></i>' +
							'Ubah');
						if (response == true) {
							document.getElementById("formEdit").reset();
							swalEditSuccess();
							show_data();
							$('#modalEdit').modal('hide');
						} else if (response == 401) {
							swalIdDouble();
						} else {
							swalEditFailed();
						}
					}
				});
			}
		})
	}

	$(document).ready(function() {
		show_data();
		$('.select2').select2();
		$('#table_id').DataTable({
			"searching": true,
			"ordering": true,
			"responsive": true,
			"paging": true,
		});
	});
</script>
