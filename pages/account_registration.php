<div class="form_container">
	<form id="dataupload">
		<div class="registerac_btn">
			<div class="registerac_btn_titile"><p>Account Name</p></div>
			<div class="registerac_btn_filed">
				<input type="text" id="name" name="name" placeholder="Name of account">
			</div>		
		</div>
		<div class="registerac_btn">
			<div class="registerac_btn_titile"><p>Account Type</p></div>
			<div class="registerac_btn_filed">
				<select name="account_type" id="account_type" style="height: 21px; width: 100%;">
					<option value="">Type of account</option>
					<option value="Student">Debit</option>
					<option value="Service">saving</option>
					<option value="Businessman">Debit</option>
					<option value="Teacher">credit</option>
					<option value="Other">Other</option>
				</select>
			</div>		
		</div>
		<div class="registerac_btn">
			<div class="registerac_btn_titile"><p>Profession</p></div>
			<div class="registerac_btn_filed">
				<input type="text" id="profession" name="profession" placeholder="Customer’s Profession">
			</div>		
		</div>
		<div class="registerac_btn">
			<div class="registerac_btn_titile"><p>Photograph</p></div>
			<div class="registerac_btn_filed">
				<input class="input-xlarge" name="img" id="img" type="file">
			</div>		
		</div>
		<div class="registerac_btn">
			<div class="registerac_btn_titile"><p>Contact Number</p></div>
			<div class="registerac_btn_filed">
				<input type="number" id="contact" name="contact" placeholder="Mobile no">
			</div>		
		</div>
		<div class="registerac_btn">
			<div class="registerac_btn_titile"><p>Monthly Income</p></div>
			<div class="registerac_btn_filed">
				<input type="number" id="income" name="income" placeholder="Approximate Monthly Income">
			</div>		
		</div>
		<div class="registerac_btn">
			<div class="registerac_btn_titile"><p>NID Number/Passport Number</p></div>
			<div class="registerac_btn_filed">
				<input type="number" id="nid_no" name="nid_no" placeholder="National Id no">
			</div>		
		</div>
		<div class="registerac_btn">
			<div class="registerac_btn_titile"><p>NID/Passport Copy </p></div>
			<div class="registerac_btn_filed">
				<input class="input-xlarge" name="nid" id="nid" type="file">
			</div>		
		</div>			
		<button id="register" type="button" class="btn btn-primary"><i class="fa fa-share"></i>Submit</button>
	</form>
</div>