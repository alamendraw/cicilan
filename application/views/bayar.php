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

.float1{
	position:fixed;
	width:40px;
	height:40px;
	bottom:32px;
	left:23px;
	background-color:#f67800;
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
    <?php foreach($list as $row){;?>
    <div class="card" onClick="detail(<?= $row['id_pelanggan'];?>)">
        <div class="card-content"> 
            <div class="card-body"> 
                <div class="row">
                    <div class="col">
                        <img class="img-fluid" src="<?= base_url();?>/assets/images/hp.png" alt="" style="width:85px;">
                    </div>
                    <div class="col-9" style="font-size: smaller;">
                        <span><?= $row['nama'];?></span> <a href="<?= site_url('home/edit/').$row['id'];?>" style="float:right;">Edit</a> <br>
                        <span><?= $row['produk'];?></span> <br>
                        <span>Cicilan Rp. <?= number_format($row['nilai_cicilan']);?> x <?= $row['tenor'];?> Bulan</span>  
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <?php } ;?>
</section>
<a href="<?= site_url('home/tambah');?>" class="float">
    <i class="fa fa-plus my-float"></i>
</a>
<a href="<?= site_url('home');?>" class="float1">
    <i class="fa fa-arrow-left my-float"></i>
</a>
<script type="text/javascript">
    var vurl = "<?= site_url('home/detail?id=');?>";
    function detail(idnya){
        window.location.replace(vurl+idnya);
    }
</script>