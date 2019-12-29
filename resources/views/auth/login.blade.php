<link href="css/company_login.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class = "container">
	<div class="wrapper">
	@if(session("errors"))
{{session("errors")}}
	@endif
		<form action="{{ route('login') }}" method="post" name="Login_Form" class="form-signin">    
		{{ csrf_field() }}   
		    <h3 class="form-signin-heading">企業マイページ　ログイン</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="email" placeholder="email" required="" autofocus="" />
			  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		      
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button><br>  			
		初めてログインされる方は、<a href="{{ route('register') }}">こちら </a> 
		</form>			
	</div>
</div>