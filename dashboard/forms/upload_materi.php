<div class="row">
	<div class="col-md-12">
		<div class="box box-success box-solid">
			<div class="box-header">
				<i class="fa fa-upload"></i>
				<span class="box-title">Upload Materi</span>
				<div class="box-tools">
					<button class="btn btn-box-tool" data-widget="collapse" title="hide" data-toggle="tooltip" data-placement="top"><i class="fa fa-minus"></i></button>
					<button class="btn btn-box-tool" data-widget="remove" title="close" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<form role="form" action="?materi=download" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama File</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="nama_file" placeholder="input nama file" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Upload File</label>
						<div class="col-md-6">
							<input type="file" name="file" required>
						</div>
						<div class="col-md-6">
							<span><strong>(<i>ext : doc, docx, xls, xlsx, ppt, pptx, pdf, rar, zip</i>)</strong></span><br>
							<span><strong>(<i>maks : 20MB</i>)</strong></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3"></div>
						<div class="col-md-6">
							<button type="submit" class="btn btn-success" name="upload-materi" style="margin-right:5px;">Simpan</button>
							<button type="reset" class="btn btn-success">Reset</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
