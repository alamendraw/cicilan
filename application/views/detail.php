<style>
.float{
	position:fixed;
	width:40px;
	height:40px;
	bottom:32px;
	right:23px;
	background-color:orange;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:13px;
}
</style>
<section class="list-view"> 
        <div class="card">
            <div class="card-content"> 
                <div class="card-body"> 
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="<?= base_url();?>/assets/images/hp.png" alt="" style="width:85px;">
                        </div>
                        <div class="col-9">
                            <span style="font-weight:bold;"><?= $pelanggan->nama;?></span> <br>
                            <span style="font-weight:bold;"><?= $pelanggan->produk;?></span> <br>
                            <span>Cicilan Rp. <?= number_format($pelanggan->nilai_cicilan);?> x <?= $pelanggan->tenor;?> Bulan</span>  
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
</section>
<section class="list-view">  
  
    <?php foreach($list as $row){
        if($row->status=='Belum di bayar'){
            $style = "color:red;";
        }else{
            $style = "color:green;";
        }    
    ?>
    <div class="card" onClick="bayar(<?= $row->id;?>)">
        <div class="card-content"> 
            <div class="card-body"> 
                <div class="row">
                    <div class="col"> 
                        <span style="font-weight: bold; font-size: medium;"><center>Cicilan Ke</center></span> 
                        <span style="font-weight: bold; font-size: x-large;"><center><?= $row->cicilanke;?></center></span>
                    </div>
                    <div class="col-8">
                        <span>Cicilan Ke : <?= $row->cicilanke;?></span> <br>
                        <span>Status : <i style="<?= $style;?>"><?= $row->status;?></i></span> <br>
                        <span>Nilai : <?= ($row->nilai)?number_format($row->nilai):'-';?></span> <br> 
                        <span>Tanggal : <?= ($row->tanggal)?date_indo($row->tanggal):'-';?></span> <br> 
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <?php } ;?>
</section>
<a href="<?= site_url('home');?>" class="float">
    <i class="fa fa-arrow-left my-float"></i>
</a>
<script type="text/javascript">
    var vurl = "<?= site_url('home/bayar?id=');?>";
    function bayar(idnya){
        window.location.replace(vurl+idnya);
    }

   
</script>