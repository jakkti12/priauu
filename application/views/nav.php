<nav class="navbar navbar-expand-sm bg-white navbar-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('')?>">
    	<img class="img-logo-nav" src="/assets/img/logo.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
	    <div class="collapse navbar-collapse row" id="collapsibleNavbar">
    		<ul class="navbar-nav">
    			<div class="col-md-10">
    			</div>
    			<div class="col-md-1">
    				<li class="nav-item">
          				<a class="nav-link login" href="<?php echo base_url('auth/login')?>">Login</a>
        			</li>
    			</div>
    			<div class="col-md-1">
    				<li class="nav-item">
          				<a class="nav-link register" href="<?php echo base_url('auth/login')?>">Register</a>
        			</li>
    			</div>
      		</ul>
    	</div>
  </div>
</nav>