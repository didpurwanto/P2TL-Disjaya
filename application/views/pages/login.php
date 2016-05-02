<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.7.min.js')?>"></script>
    <script type="text/javascript">
    
    $(document).ready(function(){
        $("#login").click(function(){
            
            var action = $("#lg-form").attr('action');
            var form_data = {
                username: $("#username").val(),
                password: $("#password").val(),
                is_ajax: 1
            };
            
            $.ajax({
                type: "POST",
                url: "<?php echo base_url("index.php/pages/sess_session")?>",
                data: form_data,
                success: function(response)
                {
                    if(response == "success")
                    {
                        location.href="<?echo base_url('index.php/pages/dashboard')?>";
                        //var url = <?php echo base_url('index.php/welcome/index')?>;
                        //location.href =<?echo base_url('index.php/welcome/index')?>;
                        /*$("#lg-form").slideUp('slow', function(){
                            $("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
                        });*/
                    }
                    else
                        $("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
                }   
            });
            return false;
        });
    });
    </script>
    <link href="<?php echo base_url("public/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("public/font-awesome/css/font-awesome.css")?> " rel="stylesheet">
    <link href="<?php echo base_url("public/css/sb-admin.css")?>" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
					
					
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
					<table>
						<tr align="center">
							<td width="1000px">
								<h2><font color="grey">P2TL</font></h2>
							</td>
						</tr>
						<tr align="center">
							<td width="1000px">
								<h4><font color="grey">Login untuk melanjutkan ke P2TL</font></h4>
							</td>
						</tr>
					</table>
                        <form  action="#" role="form" id="lg-form" name="lg-form" method="post">
                            <fieldset>
								<div class="form-group" align="center">
									<img src="<?php echo base_url("public/site/images/avatar_2x.png")?>">
								</div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User" name="user" id="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                                </div>
								<? if($testAlert!='') echo $testAlert ?>
                                <!-- Change this to a button or input when using this as a form -->
                                <div id="message"></div>
                                <input type="Submit" name="Submit" class="btn btn-lg btn-info btn-block" id="login">
                                <!--<a href="<?php echo base_url("index.php/pages/dashboard")?>" class="btn btn-lg btn-info btn-block">Login</a>-->
								<br />
							
                            </fieldset>
								<table>
								<tr align = "center">
									<td width="1000px">
										<a href="<?php echo base_url("index.php/pages/signup")?>"><h5>Sign Up </h5></a>
									</td>
								</tr>
							</table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="<?php echo base_url("public/js/jquery-1.10.2.js")?>"></script>
    <script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/metisMenu/jquery.metisMenu.js")?>"></script>

    
    <script src="<?php echo base_url("js/sb-admin.js")?>"></script>

</body>

</html>
