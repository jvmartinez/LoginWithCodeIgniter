<?php 
if(isset($type)){
	switch ($type){
		case 1:{
			echo '
				<div class="alert alert-success">
				  <strong>Success!</strong> '.$message.'
				</div>
				</div>
			';
			break;
		}
		case 2:{
			echo '
				<div class="alert alert-info">
				  <strong>Info!</strong> '.$message.'
				</div>
				</div>
			';
			break;
		}
		case 3:{
			echo '
				<div class="alert alert-warning">
				  <strong>Warning!</strong> '.$message.'
				</div>
				</div>
			';
			break;
		}
		case 4:{
			echo '
				<div class="alert alert-danger">
				  <strong>Danger!</strong> '.$message.'
				</div>
				</div>
			';
			break;
		}
	}
}
?>