<section id="floating-label-input">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Tambah Data Pembeli</h6>
            </div>
            
            <form id="form" action="<?php echo site_url('home/simpan_pembeli')?>" method="post" enctype="multipart/form-data"  autocomplete="off">
            <div class="card-content">
                <div class="card-body">
                    <div class="row"> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                                <label for="floating-label1">Nama</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                                <input type="text" class="form-control" name="produk" placeholder="Produk">
                                <label for="floating-label1">Produk</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="harga_beli" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" id="cost" placeholder="Harga Beli" value=" " required data-validation-required-message="Harga Beli Harus Diisi">
                                <label for="floating-label1">Harga Beli</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="ongkir" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" id="cost" placeholder="Ongkir" value=" " required data-validation-required-message="Ongkir Harus Diisi">
                                <label for="floating-label1">Ongkir</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="total_harga" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" id="cost" placeholder="Total Harga" value=" " required data-validation-required-message="Total Harga Harus Diisi">
                            <label for="floating-label1">Total Harga</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="laba" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" id="cost" placeholder="Laba" value=" " required data-validation-required-message="Laba Harus Diisi">
                                <label for="floating-label1">Laba (%)</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="harga_jual" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" id="cost" placeholder="Harga Jual" value=" " required data-validation-required-message="Harga Jual Harus Diisi">
                                <label for="floating-label1">Harga Jual</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="nilai_cicilan" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" id="cost" placeholder="Nilai Cicilan" value=" " required data-validation-required-message="Nilai Cicilan Harus Diisi">
                                <label for="floating-label1">Nilai Cicilan</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                                <input type="number" name="tenor" class="form-control" placeholder="Tenor">
                                <label for="floating-label1">Tenor</label>
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
    var vurl = "<?= site_url('home');?>";
  
    
    function kembali(){
        window.location.replace(vurl);
    }
       
   
    $(document).ready(function() {  
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