		<form id="contactform" method="post" action="">
			<ul style="float:right;width:210px;text-align:right">
			
				<li><label for="name">Name</label><input type="text" id="name" /></li>
				<li><label for="email">Email</label><input type="text" id="email" /></li>
				<li><label for="telephone">Telephone</label><input type="text" id="telephone" /></li>
				<li><label for="addressline1">Address Line 1</label><input type="text" id="addressline1" /></li>
				<li><label for="addressline2">Address Line 2</label><input type="text" id="addressline2" /></li>
				<li><label for="town">Town</label><input style="width:93px" type="text" id="town" />
				<label for="postcode">Postcode</label><input style="width:70px" type="text" id="postcode" /></li>
			</ul>
			<ul style="float:left;width:400px;">
				<li><label for="message">Message:</label><textarea rows="10" cols="20" id="message"></textarea></li>
				<li><input type="submit" id="submit" value="Send Message"/></li>
				<li id="thanks">Thank you for your message.</li>
			</ul>
			<div class="clear"></div>
		</form>