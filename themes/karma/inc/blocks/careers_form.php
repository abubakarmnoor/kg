<div class="form-style-5" style="margin: 0 auto">
<form enctype="multipart/form-data" id="career_signup" class="miniSurveyView" method="post" action="/dc/submitcareer.php">	
		<input name="qsID" type="hidden" value="1448540431" />
		<div id="message_status" style="display:none; font-size: 20px;text-align: center;font-family: opensans;border: 2px solid #8d7249;border-radius: 4px;padding: 30px;color: #ffffff;background-color: #8d7249;font-style: italic;">Thank you for sending your resume.</div>
		<table class="formBlockSurveyTable" style="margin-top:20px;";>
								
		<tr>
        <td style="vertical-align:top" class="question"><label for="careerfirstname"><span class="required"></span></label></td>
        <td style="vertical-align:top"><input name="careerfirstname" placeholder="First Name *" id="careerfirstname" type="text" value="" required="required" /></td>
      </tr><tr>
        <td style="vertical-align:top" class="question"><label for="careersurename"><span class="required"></span></label></td>
        <td style="vertical-align:top"><input name="careersurename" placeholder="Sure Name *" id="careersurename" type="text" value="" required="required" /></td>
      </tr><tr>
        <td style="vertical-align:top" class="question"><label for="careeremail"><span class="required"></span></label></td>
        <td style="vertical-align:top">
		
		<input name="careeremail" placeholder="Email *" id="careeremail" type="email" value="" required="required" /></td>
      </tr>					  
	  <tr>
        <td style="vertical-align:top" class="question"><label for="careercountry"><span class="required"></span></label></td>
        <td style="vertical-align:top">
		<input name="careercountry" placeholder="Country of Residence *" id="careercountry" type="text" value="" required="required" />
			</td>
	      </tr>
		  <tr>
			<td style="vertical-align:top" class="question"><label for="careercountry"><span class="required"></span></label></td>
			<td style="vertical-align:top">
			<label for="careeremail">Interest Working in:</label>
			<select name="countriesinterested" placeholder="Countriesinterested" id="countriesinterested" style="width:100%;">
                <option value="IDN">Indonesia</option>
				<option value="IND">India</option>
				<option value="AUS">Australia</option>
				<option value="DEU">Germany</option>
				<option value="FRA">France</option>
				<option value="GBR">United Kingdom</option>
				<option value="THA">Thailand</option>
				<option value="GRC">Greece</option>
				<?php 
				//<option value="PHL">Philippines</option>
				//<option value="BHS">Bahamas</option>
				//<option value="JPN">Japan</option>
				//<option value="VNM">Viet Nam</option>
				
				?>
            </select>
			</td>
	      </tr>
		  <tr>
	        <td style="vertical-align:top" class="question"><label for="careerjobtype"><span class="required"></span></label></td>
	        <td style="vertical-align:top"><input name="careerjobtype" placeholder="Job Type" id="careerjobtype" required="required" type="text" value="" /></td>
	      </tr>
	      <tr>
	        <td style="vertical-align:top" class="question"><label for="careermessage"></label></td>
	        <td style="vertical-align:top"><textarea name="careermessage" placeholder="Message" id="careermessage" cols="50" rows="3"></textarea></td>
	      </tr><tr>
	        <td style="vertical-align:top" class="question"><label for="careersend"> </td>
	        <td style="vertical-align:top">
			
			<label for="file">Attach your Resume</label> 
			<input type="file" name="file" id="file" required /><br />
			<span style="font-size:10px;padding-bottom: 20px;"> We accept .DOC, .DOCX and .PDF less than 3 MB. </span>
			<input type="hidden" name="submitform" value="true" />
			</td>
	      </tr><tr><td>&nbsp;</td><td><input class="formBlockSubmitButton ccm-input-button" name="Submit" type="submit" id="careersubmit" value="Submit" /></td></tr></table> 
</form></div>
<p>&nbsp;</p>
<p>&nbsp;</p>