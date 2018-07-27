<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File manager</title>
</head>
<body>
	<div class="input-group">
	   <span class="input-group-btn">
	     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
	       <i class="fa fa-picture-o"></i> Choose
	     </a>
	   </span>
	   <input id="thumbnail" class="form-control" type="text" name="filepath">
	 </div>
	 <img id="holder" style="margin-top:15px;max-height:100px;">
</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script type="text/javascript">

	var domain = "";
 	$('#lfm').filemanager('image', {prefix: domain});
</script>
</html>