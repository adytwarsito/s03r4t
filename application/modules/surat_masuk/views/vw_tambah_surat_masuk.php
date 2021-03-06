<?php echo $message ?>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Tambah Surat Masuk</h2>

				<div class="clearfix"></div>
			</div>
			<div class ="x_content">
				<br>
				<form class="form-horizontal form-label-left"  novalidate method="post" enctype="multipart/form-data">
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_lembar_disposisi">No. Lembar Disposisi
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input value="<?php set_value('no_lembar_disposisi'); ?>" id="no_lembar_disposisi" class="form-control col-md-7 col-xs-12" name="no_lembar_disposisi"  required="required" type="text">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_masuk">Tanggal Masuk
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input  value="<?php set_value('tanggal_masuk'); ?>" id="tanggal_masuk" data-inputmask="'mask': '99/99/9999'"  class="form-control col-md-7 col-xs-12" name="tanggal_masuk"  required="required" type="date">
						</div>
					</div>
					<div class="item form-group">
						<label for="tujuan_id" class="control-label col-md-3 col-sm-3 col-xs-12">Tujuan ID</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radio">
								<div class="col-md-3">
									<input type="radio" class="flat" name="tujuan_id" id="tujuan_id_1"  value="1" checked> Utama
								</div>
								<div class="col-md-3">
									<input type="radio" class="flat" name="tujuan_id" id="tujuan_id_2" value="2"> Tembusan
								</div>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirim">Pengirim
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input  value="<?php set_value('pengirim'); ?>" id="pengirim" name="pengirim"  class="form-control col-md-7 col-xs-12" required="required" type="text">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="penerima">Penerima
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input  value="<?php set_value('penerima'); ?>" id="penerima" class="form-control col-md-7 col-xs-12" name="penerima"  required="required" type="text">
						</div>
					</div>
					<div class="item form-group">
						<label for="perihal" class="control-label col-md-3 col-sm-3 col-xs-12">Perihal</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input  value="<?php set_value('perihal'); ?>" id="perihal" name="perihal"  class="form-control col-md-7 col-xs-12"  required="required" type="text">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="disposisi_tujuan_id">Tujuan Disposisi
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="disposisi_tujuan_id" class="form-control col-md-7 col-xs-12">
								<?php foreach ($disposisi_tujuan as $key => $value): ?>
									<option value="<?php echo $value['id'] ?>"><?php echo $value['nama'] ?></option>             
								<?php endforeach ?>
							</select>
							<!--  <input id="diposisi_tujuan" name="diposisi_tujuan"   class="form-control col-md-7 col-xs-12" type="text"> -->
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="file">File</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="file" accept="application/pdf" name="file"  class=" col-md-7 col-xs-12" type="file">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="catatan_tambahan">Catatan</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="catatan_tambahan" name="catatan_tambahan"  class="form-control col-md-7 col-xs-12"> </textarea>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="button" onclick="location.href ='<?php echo base_url('access'); ?>'" class="btn btn-primary">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button id="send" type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		if( typeof (validator) === 'undefined'){ return; }
		console.log('init_validator'); 
		validator.message.empty = 'Harap isi field ini';
	});
</script>