<section id="floating-label-input">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Bayar Peminjam</h6>
            </div>
            
            <form id="form" action="<?php echo site_url('home/simpan_bayar_pinjam')?>" method="post" enctype="multipart/form-data"  autocomplete="off">
            <div class="card-content">
                <div class="card-body">
                        <input type="text" class="form-control" name="id" value="<?= $data->id;?>" hidden>
                    <div class="row"> 
                        <div class="col-sm-12">
                            <fieldset class="form-label-group">
                                <input type="text" class="form-control" name="nama" value="<?= $data->nama;?>" disabled>
                                <label for="floating-label1">Nama</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-12">
                            <label for="floating-label2">Nilai Pembayaran</label>
                            <fieldset class="form-label-group">
                            <input type="text" name="nilai_bayar" id="nilai_bayar" value="<?= $data->nilai_bayar;?>"  data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" placeholder="Nilai Pembayaran" required data-validation-required-message="Nilai Pembayaran Harus Diisi">
                                
                            </fieldset>
                        </div> 
                        
                        <div class="col-sm-12">
                                <label for="tanggal">Tanggal Pembayaran</label>
                            <fieldset class="form-label-group">
                                <input type="text" class="form-control date_draw" value="<?= date_simple($data->tgl_bayar);?>" name="tgl_bayar" id="tanggal" placeholder="Tanggal Pembayaran">
                            </fieldset>
                        </div> 
 
                    </div>
                </div>                
            </div>
            <div align="center">
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                <button type="button" onClick="kembali()" class="btn btn-outline-warning">Kembali</button>
            </div> <br>
            </form>
        </div>
    </div>
</div>
</section>
 
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css"> 

<script src="<?php echo base_url();?>assets/js/core/libraries/jquery.min.js"></script>
<script src="<?php echo base_url('assets/vendors/js/forms/jquery.form.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/js/forms/validation/jquery.validate.min.js'); ?>"></script>

<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script> 
<script type="text/javascript"> 
    var vurl = "<?= site_url('home/pinjam');?>";

    function kembali(){
        window.location.replace(vurl);
    }

    $(document).ready(function() {  
        
        $( ".date_draw" ).datepicker({
            dateFormat: "dd-mm-yy",
            altFormat: "yy-mm-dd",  
        });

        $(function() {       
            $("#form").validate({
                errorElement: "span",
                errorClass: 'help-block',
                highlight: function (element) {
                    $(element).parent().addClass('error');
                },
                unhighlight: function (element) {
                    $(element).parent().removeClass('error');
                },
                submitHandler: function (form) {
                    
                    $(form).ajaxSubmit({ 
                        success: function (response) {
                            response = JSON.parse(response); 
                            if (response.status === 'success') {
                            toastr.success(response.message, 'Success', {"closeButton": true}); 
                            location.reload();
                            } else {
                            toastr.error(response.message, 'Error', {"closeButton": true});
                            }
                        
                        },
                        error: function (data) { 

                        }
                    });
                }
            });
        });
        
    });

</script>