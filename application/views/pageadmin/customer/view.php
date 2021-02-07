<section class="content">
	<div id="my-modal" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form class="form-horizontal" role="form" id="formTambah">
					<div class="card card-info">
						<div class="modal-header">
							<h4 class="modal-title">Add Customer</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="card-body">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input required type="text" id="nama" name="nama" class="form-control" placeholder="Nama Customer">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-address-card"></i></span>
								</div>
								<input required type="number" id="ktp" name="ktp" class="form-control" placeholder="NO KTP">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-envelope"></i></span>
								</div>
								<input type="email" id="email" name="email" class="form-control" placeholder="Email">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-phone"></i></span>
								</div>
								<input required type="number" id="telp" name="telp" class="form-control" placeholder="No Telepon">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-home"></i></span>
								</div>
								<textarea type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat"></textarea>
							</div>
						</div>
						<!-- /.card-body -->
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
			<h3 class="card-title">Daftar Customer</h3>
		</div>
		<br>
		<div class="col-sm-2">
			<button href="#my-modal" type="button" role="button" data-toggle="modal" class="btn btn-block btn-primary"><a class="ace-icon fa fa-plus bigger-120"></a> Add Customer</button>
		</div>
		<br>
		<div class="card-body p-0">
			<table id="table_id" class="table table-bordered table-hover projects">
				<thead>
					<tr>
						<th style="width: 1%">
							#
						</th>
						<th style="width: 1%" class="text-center" >
							No Pelanggan
						</th>
						<th style="width: 20%"  class="text-center">
							Nama
						</th>
						<th style="width: 30%" class="text-center">
							Jenis Layanan
						</th>
						<th class="text-center">
							Profile complete
						</th>
						<th style="width: 8%" class="text-center">
							Status
						</th>
						<th style="width: 16%" class="text-center">
							Action
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
				ktp: {
					required: true
				},

				nama: {
					required: true
				},

				telp: {
					required: true
				},
			},
			messages: {

				ktp: {
					required: "No KTP harus diisi!"
				},

				nama: {
					required: "Nama harus diisi!"
				},

				telp: {
					required: "Telepone harus diisi!"
				},
			},
			submitHandler: function(form) {
				$('#btn_simpan').html('Sending..');
				$.ajax({
					url: "<?php echo base_url('administrator/customer/simpan') ?>",
					type: "POST",
					data: $('#formTambah').serialize(),
					dataType: "json",
					success: function(response) {
						$('#btn_simpan').html('<i class="ace-icon fa fa-save"></i>' +
							'Simpan');
						if (response == true) {
							document.getElementById("formTambah").reset();
							swalInputSuccess();
							show_data();
							$('#modalTambah').modal('hide');
						} else {
							swalInputFailed();
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
					url: "<?php echo base_url('siswa/delete') ?>",
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
			url: '<?php echo site_url('administrator/customer/tampil') ?>',
			async: true,
			dataType: 'json',
			success: function(data) {
				var html = '';
				var i = 0;
				var no = 1;
				for (i = 0; i < data.length; i++) {
					var status = '';
					if (data[i].c_status == 'Aktif') {
						status = '<td class="project-state"><span class="badge badge-success">' + data[i].c_status + '</span></td>'
					} else {
						status = '<td class="project-state"><span class="badge badge-danger">' + data[i].c_status + '</span></td>'
					}
					html += '<tr>' +
						'<td class="text-left">' + no + '</td>' +
						'<td class="text-left">' + data[i].no_services + '</td>' +
						'<td class="text-left">' + data[i].name + '</td>' +
						'<td class="text-left">' + data[i].customer_id + '</td>' +
						'<td class="project_progress">' +
						'  <div class="progress progress-sm">' +
						'  <div class="progress-bar bg-green" role="progressbar" aria-volumenow="35" aria-volumemin="0" aria-volumemax="100" style="width: 35%">' +
						'  </div>' +
						'</div>' +
						'  <small> 35% Complete </small> </td>' +
						status +
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

	$(document).ready(function() {
		show_data();
		$('#table_id').DataTable({
			"searching": true,
			"ordering": true,
			"responsive": true,
			"paging": true,
		});
	});
</script>
