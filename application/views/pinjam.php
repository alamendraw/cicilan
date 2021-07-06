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
    <div class="card" onClick="detail(<?= $row->id;?>)">
        <div class="card-content"> 
            <div class="card-body"> 
                <div class="row"> 
                    <div class="col-12" align="center" style="padding-bottom: 12px;">
                        <span style="font-weight:bold;"><?= $row->nama;?></span> <a href="<?= site_url('home/edit_pinjam/').$row->id;?>" style="float:right;">Edit</a>
                    </div>      
                    <div class="col-12" style="font-size: smaller;"> 
                        <div class="row">
                            <div class="col">Tanggal Pinjam</div>
                            <div class="col">: <?= $row->tgl_pinjam;?></div> 
                        </div>
                    </div>
                    <div class="col-12" style="font-size: smaller;padding-bottom: 10px;"> 
                        <div class="row">
                            <div class="col">Nilai Pinjam</div>
                            <div class="col">: <?= number_format($row->nilai_pinjam);?></div> 
                        </div>
                    </div>
                    <div class="col-12" style="font-size: smaller;"> 
                        <div class="row">
                            <div class="col">Tanggal Bayar</div>
                            <div class="col">: <?= $row->tgl_bayar;?></div> 
                        </div>
                    </div>
                    <div class="col-12" style="font-size: smaller;padding-bottom: 10px;"> 
                        <div class="row">
                            <div class="col">Nilai Bayar</div>
                            <div class="col">: <?= number_format($row->nilai_bayar);?></div> 
                        </div>
                    </div>
                    <div class="col-12" style="font-size: smaller;"> 
                        <?php $sisa = $row->nilai_pinjam - $row->nilai_bayar;
                                if($sisa<=0){
                                    $sisanya = "<span style='font-weight:bold; color:green;'>Lunas</span>";
                                }else{
                                    $sisanya = number_format($sisa);
                                }
                        ?>
                        <div class="row">
                            <div class="col">Sisa Pinjaman</div>
                            <div class="col">: <?= $sisanya;?></div> 
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <?php } ;?>
</section>
<a href="<?= site_url('home/tambah_pinjam');?>" class="float">
    <i class="fa fa-plus my-float"></i>
</a>
<a href="<?= site_url('home');?>" class="float1">
    <i class="fa fa-arrow-left my-float"></i>
</a>

<script type="text/javascript">
    var vurl = "<?= site_url('home/bayar_pinjam/');?>";
    
    function detail(idnya){
            window.location.replace(vurl+idnya);
    }
</script>