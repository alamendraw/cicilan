<style>
.float{
	position:fixed;
	width:40px;
	height:40px;
	bottom:32px;
	right:23px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:13px;
}
</style> 
  <div class="row">
    <div class="col">
        <section class="list-view"> 
            <div class="card" onClick="">
                <div class="card-content"> 
                    <div class="card-body"> 
                        <div class="row"> 
                            <div class="col-12" align="center" style="font-weight:bold;"> 
                                <span style="font-size: xx-large; color: darkred;"><?= $belum;?></span> 
                            </div>
                            <div class="col-12" align="center" style="font-weight:bold;"> 
                                <span>Pelanggan</span> 
                            </div>
                            <div class="col-12" align="center" style="font-weight:bold;"> 
                                <span>Belum Bayar</span> 
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> 
        </section>
    </div>    
    <div class="col">
        <section class="list-view"> 
            <div class="card" onClick="">
                <div class="card-content"> 
                    <div class="card-body"> 
                        <div class="row"> 
                            <div class="col-12" align="center" style="font-weight:bold;"> 
                                <span style="font-size: xx-large; color: forestgreen;"><?= $sudah;?></span> 
                            </div>
                            <div class="col-12" align="center" style="font-weight:bold;"> 
                                <span>Pelanggan</span> 
                            </div>
                            <div class="col-12" align="center" style="font-weight:bold;"> 
                                <span>Sudah Bayar</span> 
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> 
        </section>
    </div> 
  </div>
  <div class="row">
    <div class="col">
        <section class="list-view"> 
            <div class="card" onClick="">
                <div class="card-content"> 
                    <div class="card-body"> 
                        <div class="row"> 
                            <div class="col-12" align='center'>
                                <img class="img-fluid" src="<?= base_url();?>/assets/images/customer.png" alt="" style="width:85px;">  
                            </div>
                            <div class="col-12" align="center" style="font-weight:bold;">
                                Pelanggan
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> 
        </section>
    </div>
    <div class="col">
        <section class="list-view"> 
            <div class="card" onClick="otw('transaksi')">
                <div class="card-content"> 
                    <div class="card-body"> 
                        <div class="row"> 
                        <div class="col-12" align='center'>
                                <img class="img-fluid" src="<?= base_url();?>/assets/images/bayar.png" alt="" style="width:85px;">  
                            </div>
                            <div class="col-12" align="center" style="font-weight:bold;">
                                Bayar
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> 
        </section>
    </div> 
  </div> 
 
  <div class="row">
    <div class="col-6">
        <section class="list-view"> 
            <div class="card" onClick="">
                <div class="card-content"> 
                    <div class="card-body"> 
                        <div class="row"> 
                            <div class="col-12" align='center'>
                                <img class="img-fluid" src="<?= base_url();?>/assets/images/laporan.png" alt="" style="width:85px;">  
                            </div>
                            <div class="col-12" align="center" style="font-weight:bold;">
                                Laporan
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> 
        </section>
    </div>  
  </div> 
<script type="text/javascript">
    var vurl = "<?= site_url('home/');?>";
    function otw(idnya){
        window.location.replace(vurl+idnya);
    }
</script>