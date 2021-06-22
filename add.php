<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {
    $lastname = $_POST['LastName'];
	$firstname = $_POST['FirstName'];
    $birthdate = $_POST['BirthDate'];
    $notes = $_POST['Notes'];

    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($lastname)){
			$errorMsg = 'Please add your last name';
		}elseif(empty($firstname)){
			$errorMsg = 'Please add your first name';
		}elseif(empty($birthdate)){
			$errorMsg = 'Please add your birth date';
		}elseif(empty($notes)){
			$errorMsg = 'Please add your message';
		}else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}


		if(!isset($errorMsg)){
			$sql = "insert into employees(LastName, FirstName, BirthDate, image, Notes)
					values('".$lastname."', '".$firstname."', '".$birthdate."', '".$userPic."', '".$notes."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				header('Location: index.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
				header('Location: error.php');
			}
		}else{
			$errorMsg = 'Error '.mysqli_error($conn);
					header('Location: error.php');
		}
	}
?>

