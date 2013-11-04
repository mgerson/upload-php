<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/xhtml1-strict.dtd">
<html >

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>upload</title>
        <style>
            h2{
                text-align:center;
                color: #1A5018;
            }
			
			.m-div
			{
			border:1px solid #ABDD6D; 
			background-color: #CCEAA8;
			border-radius: 4px; 
			padding: 10px; 
			margin-left: 20px;
			width: auto; 
			padding-right: 0;
			}



        </style>
    </head>
    <body>
        <h2>Upload de Ficheiros</h2>
        
       
            <?php
            if (array_key_exists('upload', $_POST)) {
			    $path = dirname(__FILE__);
                $up_dir = $path . '/uploads/';

                $file = ($_FILES['image']['name']); //nome do arquivo original
                 $sucesso=move_uploaded_file($_FILES['image']['tmp_name'], $up_dir . $file);
				 if($sucesso){
				 $message='Arquivo carregado com sucesso';
				 }
				 else
				 {
				 $message='erro ao carregar arquivo';
				 }
				 }
               
            ?>
			
       <center>
            <fieldset>
                <legend align="center">Upload a File to a server</legend>
                <form action="" method="post" enctype="multipart/form-data" name="uploadImage" id="uploadImage">
                    <p>
                        
                    </p>
                    <p><img src="<?php echo './uploads/'. $fileName; ?>" width="200px" height="200px" style="position: relative"/></p>
                    <p>
                        <label for="image">Upload File:</label>                        
                        <input type="file" name="image" id="image" />
					   

                    </p>
                    <p>
                        <input type="submit" name="upload" id="upload" value="Upload" />
                    </p>
                </form>
            </fieldset>
			<?php
			If(isset($message)){
			echo'<div class="m-div">'.$message.'</div>'; 
			
			}
			?>
        </center>
    </body>

</html>