		<div class="col-md-4 col-md-offset-4 kotak-login">
			<div class="panel panel-success">
				<div class="panel-heading">
					Login admin
				</div>
				<div class="panel-body">
				<?php echo form_open('login/cek') ?>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
					</div>
					<br/>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
					</div>
					<br/>
					<input type="submit" name="submit" value="Log In" class="btn btn-sm btn-primary">
				   </form>
				</div>
			</div>
		</div>
	</div>