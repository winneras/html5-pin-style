	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-form">
            <div class="form-group">
		<input type="text" class="field form-control" name="s" id="s" placeholder="Looking for ..." />
            </div>
                <button type="submit" id="searchsubmit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
	</form>