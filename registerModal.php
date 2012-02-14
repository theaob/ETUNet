<div id="registerModal" class="modal hide fade">
		  <div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h3>Kayıt Ol</h3>
		  </div>
		  
		
		
		  <div class="modal-body">
		  <script>
		 function registerStudent(){
				var studentID = document.getElementById("studentID").value;
				//alert(studentID);
				var xmlhttp;
				if (studentID=="")
				  {
				  document.getElementById("errorMessage").innerHTML="<div class='alert-message error'><p>Lütfen geçerli bir öğrenci numarası giriniz</p></div>";
				  return;
				  }else{
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						document.getElementById("errorMessage").innerHTML=xmlhttp.responseText;
						}
					  }
					xmlhttp.open("GET","addConfirm.php?id="+studentID,true);
					xmlhttp.send();
				  }
				  
		 };
		 
		 

		 
		 
		 </script>
			
			<div id="errorMessage">
			
			</div>
			
	
			<p>Kayıt işlemine başlamak için öğrenci numaranızı girin:</p>
			
			
				<input class="span3" type="text" placeholder="Öğrenci Numarası" id="studentID">
				<button class="btn" onClick="registerStudent()">Devam Et</button>
			  
			  
		  </div>
		  <div class="modal-footer">
			<a data-dismiss="modal"  href="#" class="btn">Kapat</a>
		  </div>
		</div>
