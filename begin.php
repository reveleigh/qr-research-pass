<div class="initialInput">
	<div class = "initialForm">	
		<div class = "formDiv">
		
			<div id ="qr-place">
			<p class = "bigTitle">Quick and Easy QR Code Maker for Teachers</p>
			<form id="quickQr" method="POST" action="quick.php">
			<input type="text" id="quickAdd" name="quickAdd" class="quickAdd" placeholder='Enter address'><br />	
			
		
		
		
			
			<button id ="sub1" name="submit" type="submit" value="qrQuick">Make the QR Code</button>
			</form>
			
			<button id = "sub2">Give some options</button>
			
			</div>
		
		</div>
	</div>
</div>
<script>
//Wait till HTML has fully loaded
$(document).ready(function(){
    // Attach a submit handler to the form
	$( "#quickQr" ).submit(function( event ) {
		
  		// Stop form from submitting normally
  		event.preventDefault();
 
  		// Get some values from elements on the page:
  		var url = $(this).attr("action");
    	var fData = $(this).serialize();
 
  		// Send the data using post
  		var posting = $.post(url, fData, function(response) { 
 
  			// Put the results in a div
    		$( "#qr-place" ).empty().append( response );
            
  		});//End $.post
    
    });	//End form submit event.
	

   //$("#txtEmail").val()
    $( "#sub2" ).click(function() {
    	var url = "options.php";
        var fData = $("#quickQr").serialize();
        
        
        var posting = $.post(url, fData, function(response) {
        	$("#qr-place").empty().append( response );
        });
        
        
        
    });
	

	
	
	
	
})//End Ready	
</script>