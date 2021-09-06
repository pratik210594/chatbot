<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

<?php// session_start()?>
<div id ="listofmessages"><p id ="display"></p></div>
<input type="text" name="message" id="message" placeholder="Type something here.." autofocus>

<input type="submit" value="Send" onclick="senddata()">

</body>
</html>


<script>
function senddata()
{

	//var takedata = document.getElementById("message").innerHTML;
		
	let appendMessage = document.createElement('div');	
	var ele = document.getElementById("listofmessages");
	appendMessage.textContent = message.value;
//	document.body.appendChild(appendMessage);

	//ele.innerHTML += message.value;

	
	  $.ajax({
                    url: 'reply.php',
                    type: 'POST',
                    data: 'text='+$('#message').val(),
                    success: function(result){
                     //   $reply = result;
						$('#listofmessages').append(result);
					}           
	  }	);
	  
	  
	message.value ="";
	message.focus();				//focusing on the textbox again
	ele.appendChild(appendMessage);
//	let appendReply = document.createElement('div');	
//	appendReply.textContent ='<?php echo "hello"; ?>';	
//	ele.appendChild(appendReply);
	
}		

</script>