<html>
    <head>
        <style>
            
            table{
                align-items:center;
				position:relative;
				width:50%;
				border:2px solid black;
				background-color:lightgrey;
                font-size:20px;
            }
			td,th{
				padding:10px 25px 10px 25px;
				margin:0px;
			}
			</style>
            </head>
            <body><big><center>
                <form action="disp.php" method="POST" name="form2"><table border="1"><caption>
                   ADD YOUR DETAILS</caption><tr><th>
                    id :</th><th><input type="text" name="id" id="tid"></th></tr><br><br><br><tr><th>
                    Name :</th><th><input type="text" name="name" id="name"></th></tr><br><br><br><tr><th>
                    Address :</th><th><input type="text" name="addr"></th></tr><br><br><br><tr><th>
					Train name :</th><th><input type="text" name="tname"></th></tr><br><br><br><tr><th>
                    Train no :</th><th><input type="text" name="tno"></th></tr><br><br><br><tr><th>
                    Date of journey :</th><th><input type="date" name="date"></th></tr><br><br><br><tr><th colspan="2">
                    <input type="submit" name="s1" value="save" onclick=validation()></th></tr>
                    
                </center></big>
        </form>
		<script>
		   function validation()
		   {
			   var nam=document.getElementById("name");
			   var letter=/^[A-Z a-z]+$/;
			   if(nam.value.match(letter))
			   {
				   
			   }else
			   {
				   window.alert("Enter valid name");
			   }
		   }
		   </script>
        </body>
        </html>