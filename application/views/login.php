
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Vuesax - Bootstrap HTML admin template</title>
    <?php $this->load->view('css');?>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div >
                                                <h4 align="center">Masukan PIN</h4> 
                                                <span style="color:red;" id="alert"> </span> 
                                            </div>
                                        </div> 
                                        <div class="card-content">
                                            <div class="card-body">
                                                    <div class="col-12"> 
                                                        <div class="row">
                                                            <input type="password" name="pass1" id="pass1" maxlength="1" class="form-control col-2" required>
                                                            <input type="password" name="pass2" id="pass2" maxlength="1" class="form-control col-2" required> 
                                                            <input type="password" name="pass3" id="pass3" maxlength="1" class="form-control col-2" required> 
                                                            <input type="password" name="pass4" id="pass4" maxlength="1" class="form-control col-2" required> 
                                                            <input type="password" name="pass5" id="pass5" maxlength="1" class="form-control col-2" required> 
                                                            <input type="password" name="pass6" id="pass6" maxlength="1" class="form-control col-2" required> 
                                                        </div>  
                                                    </div>
                                            </div>
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <?php $this->load->view('js');?>
 
    <script type="text/javascript">
        
        $(document).ready(function(){ 
            $("#pass1").focus();
        });
        $("#pass1").on('keyup', function(){
            $("#pass2").focus();
        });
        $("#pass2").on('keyup', function(){
            $("#pass3").focus();
        });
        $("#pass3").on('keyup', function(){
            $("#pass4").focus();
        });
        $("#pass4").on('keyup', function(){
            $("#pass5").focus();
        });
        $("#pass5").on('keyup', function(){
            $("#pass6").focus();
        }); 
        $("#pass6").on('keyup', function(){
            pass1 = $("#pass1").val();
            pass2 = $("#pass2").val();
            pass3 = $("#pass3").val();
            pass4 = $("#pass4").val();
            pass5 = $("#pass5").val();
            pass6 = $("#pass6").val();
            
            $.ajax({
                type:'post',
                url:'<?= site_url('login/cek_pin');?>',
                data:{pass1:pass1,pass2:pass2,pass3:pass3,pass4:pass4,pass5:pass5,pass6:pass6},
                dataType:'json',
                success : function(data){
                    if(data==false){
                        $("#alert").html("PIN Salah");
                        setInterval(function(){ $("#alert").html(""); }, 3000);
                        $("#pass1").val('');
                        $("#pass2").val('');
                        $("#pass3").val('');
                        $("#pass4").val('');
                        $("#pass5").val('');
                        $("#pass6").val('');
                        $("#pass1").focus();
                    }else{
                        window.location.replace("<?= site_url('home');?>");
                    }
                }
            });
        }); 
    </script>

</body> 

</html>