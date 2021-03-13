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
                        
                            <input type="hidden" class="form-control" name="id" value="<?= ($action=='edit')?$data->id:'';?>">
                            <fieldset class="form-label-group">
                                <input type="text" class="form-control" name="nama" value="<?= ($action=='edit')?$data->nama:'';?>" placeholder="Nama">
                                <label for="floating-label1">Nama</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                                <input type="text" class="form-control" name="produk" value="<?= ($action=='edit')?$data->produk:'';?>" placeholder="Produk">
                                <label for="floating-label1">Produk</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="harga_beli" id="harga_beli" value="<?= ($action=='edit')?$data->harga_beli:'';?>" onKeyup="hitung()" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" placeholder="Harga Beli" required data-validation-required-message="Harga Beli Harus Diisi">
                                <label for="floating-label1">Harga Beli</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="ongkir" id="ongkir" value="<?= ($action=='edit')?$data->ongkir:'';?>" onKeyup="hitung()" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" placeholder="Ongkir" required data-validation-required-message="Ongkir Harus Diisi">
                                <label for="floating-label1">Ongkir</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="total_harga" id="total_harga" value="<?= ($action=='edit')?$data->total_harga:'';?>" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" placeholder="Total Harga" required data-validation-required-message="Total Harga Harus Diisi">
                            <label for="floating-label1">Total Harga</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="laba" id="laba" value="<?= ($action=='edit')?$data->laba:'';?>" onKeyup="hitung_laba()" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" placeholder="Laba" required data-validation-required-message="Laba Harus Diisi">
                                <label for="floating-label1">Laba (%)</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="harga_jual" id="harga_jual" value="<?= ($action=='edit')?$data->harga_jual:'';?>" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" placeholder="Harga Jual" required data-validation-required-message="Harga Jual Harus Diisi">
                                <label for="floating-label1">Harga Jual</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                                <input type="number" name="tenor" id="tenor" value="<?= ($action=='edit')?$data->tenor:'';?>" onKeyup="hitung_cicilan()" class="form-control" placeholder="Tenor">
                                <label for="floating-label1">Tenor</label>
                            </fieldset>
                        </div> 
                        <div class="col-sm-6 col-12">
                            <fieldset class="form-label-group">
                            <input type="text" name="nilai_cicilan" id="nilai_cicilan" value="<?= ($action=='edit')?$data->nilai_cicilan:'';?>" data-inputmask="'alias': 'decimal', 'groupSeparator': ','" class="form-control" placeholder="Nilai Cicilan" required data-validation-required-message="Nilai Cicilan Harus Diisi">
                                <label for="floating-label1">Nilai Cicilan</label>
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
    var tot_harga = 0;
    var harga_jual = 0;
    function kembali(){
        window.location.replace(vurl);
    }
       
    function hitung(){
        beli = $("#harga_beli").val();
        ongkir = $("#ongkir").val();
        if(beli==''){
            beli=0;
        }else{ 
            beli = beli.replace(',','');
            beli = beli.replace(',','');
        }
        if(ongkir==''){
            ongkir=0;
        }else{
            ongkir = ongkir.replace(',','');
            ongkir = ongkir.replace(',','');
        }
        tot_harga = parseInt(beli)+parseInt(ongkir);
        $("#total_harga").val(tot_harga);
    }

    function hitung_laba(){
        persen = parseInt($("#laba").val());
        laba = (tot_harga*persen)/100;
        harga_jual = parseInt(tot_harga)+parseInt(laba);
        $("#harga_jual").val(harga_jual);
    }

    function hitung_cicilan(){
        tenor = parseInt($("#tenor").val());
        nil_cicil = parseInt(harga_jual)/parseInt(tenor);
        $("#nilai_cicilan").val(nil_cicil);
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