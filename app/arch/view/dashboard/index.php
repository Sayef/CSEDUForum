
	<script type="text/javascript" src="<?php echo URL; ?> js/widgEditor.js"></script>
	<div style = "position:fixed; left:20px; top: 130px; width: 50%; rgba(252, 252, 252, 0.4);">
		<h3>
			<?php echo $GLOBALS['ask_question']; ?> 
		</h3>

		<h4>
			<?php echo $GLOBALS['add_tags']; ?> <input type="text" name="tags">
		</h4>


	
		<form action="#" onsubmit="alert('Your submitted HTML was:\n\n' + document.getElementById('noise').value); return false;">
			<fieldset>
				<label for="User"  style = "vertical-align: top;">


				</label>


    				<textarea></textarea>


			</fieldset>
			<fieldset>
				<input type="submit" value="<?php echo $GLOBALS['submit']; ?> " style="allign: center;" />
			</fieldset>
		</form>
	</div>
<!-- END content -->

