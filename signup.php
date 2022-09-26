<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.container{
			width: 80%;
			margin: auto;
			font-size: 20px;
		}
		.boder-body{
			border: 1px solid #000022;
		}
		.formsignup{
			text-align: center;
		}
		.subformsignup{
			display: flex;
			width: 60%;
			margin: auto;
		}
		.lable-input{
			margin-right: 40px;
			margin-top: 20px;
			min-width: 150px;
		}
		.color-lable{
			background-color: #FFCCFF;
			border: 1px solid #000022;
		}
		.lable-input > div {
			padding: 10px 15px;
		}
		.lable-input > input,select{
			padding: 10px 0px;
    		min-width: 250px;
		}
		button{
			padding: 10px 20px;
		    border-radius: 8px;
		    border: 1px solid #000022;
		    background-color: #00FF33;
		    margin-top: 20px;
			font-size: 20px;
		}
		form{
			width: 80%;
			margin: auto;
			padding: 30px 40px;
		}
		
	</style>
</head>
<body>

	<?php
	$listKhoa = [
	'KHMT'=> 'Khoa Học Máy Tính',
	'KHVL'=> 'Khoa Học Vật Liệu',
	];
	$listGender = [
		0 => 'Nam',
		1 => 'Nữ',
	]	

    ?>
		<div class='container boder-body'>
			<form name='formSign'>
				<div class='formsignup'>
					<div class='subformsignup'>
						<div class='lable-input color-lable'>
								<div>Họ và tên</div>
						</div>
						<div class='lable-input'>
								<input type='' name=''>
						</div>
					</div>
					<div class='subformsignup'>
						<div class='lable-input color-lable'>
								<div>Giới tính</div>
						</div>
						<div class='lable-input'>
							<?php 
									for ($i =0 ; $i <=1; $i++){
										echo '<label style="padding-right: 50px;">
											<input style="margin-top: 15px;" type="radio" id="vehicle1"  value="'.$listGender[$i].'">'.$listGender[$i].'</label>';
										};
							?>
						</div >
					</div>
					<div class='subformsignup'>
							<div class='lable-input color-lable'>
								<div>Phân Khoa</div>
							</div>
							<div class='lable-input'>
									 <select name='khoa' id='khoa'>
									 		<option value='volvo'></option>
									 		
    										
    										<?php foreach ($listKhoa as $person) : ?>

											<option value='$person'>
											
														<?php echo $person ?>
											
											</option>

											<?php endforeach; ?>

	    	
  										</select>
							</div>	
					</div>
					<div>
						<button>Đăng ký</button>
					</div>
				</div>
			</form>

		</div>
    
      
	


</body>
</html>