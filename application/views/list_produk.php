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
  
    <?php foreach($list as $row){ ;?>
    <div class="card" onClick="bayar(<?= $row['id'];?>)">
        <div class="card-content"> 
            <div class="card-body"> 
                <div class="row"> 
                    <div class="col-12"  style="font-size: smaller;"> 
                        <span style="font-weight: bold;font-size: large;color: cadetblue;"><center> <?= $row['produk'];?></center></span> 
                        <span>Terima : <?= ($row['tgl_terima'])?date_indo($row['tgl_terima']):'-';?></span> <br> 
                        <span>Nilai : <?= (number_format($row['nilai_cicilan'],2))?number_format($row['nilai_cicilan'],2):'-';?> / Bulan</span> <br> 
                        <span>Tenor : <?= $row['tenor'];?> Bulan</span> <br> 
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <?php } ;?>
</section>
<a href="<?= site_url('home/transaksi');?>" class="float">
    <i class="fa fa-arrow-left my-float"></i>
</a>
<script type="text/javascript">
    var vurl = "<?= site_url('home/detail?id=');?>";
    function bayar(idnya){
        window.location.replace(vurl+idnya);
    }

   
</script>