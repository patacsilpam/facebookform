<?php
	include 'connection.php';
?>
<?php
	include 'SignUp.php';
?>
<?php
	include 'LogIn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<header>
			<h3 class=" float-left ml-5 pt-3">facebook</h3>
				<div class="float-right">
					<nav>
						<li>
						<ul style="margin-top: 20px;">
							<label>Email or phone no.</label>
							<label style="margin-left: 60px;">Password</label><br>
						</ul>
						<ul>
							<form method="GET" action="facebook.php">
								<input type="text" name="mobEmail" placeholder="Email or phone no" required >
								<input type="password" name="newPassword" placeholder="Password" required>
								<button type="Submit" name="LogIn" class="btn btn-primary">Log In</button><br>
								<a href="ForgetAccount.php" class="float-right link-Account">Forgot Account</a>
							</form>
									
						</ul>
						</li>
					</nav>
				</div>
		</header>
	</div>
	<div class="section-left pt-5 ">
		<section class="float-left">
			<h1><b>Connect with friends and the<br>world around you on Facebook.</b></h1>
			<div class="d-flex mt-5">
				<img src="Images/read.png">
				<h4><b>See photos and updates</b>  from friends in News Feed.</h4>
			</div>
			<div class="d-flex mt-5">
				<img src="Images/timeline.png">
				<h4><b>Share what's new</b>  in your life in Timeline.</h4>
			</div>
			<div class="d-flex mt-5">
				<img src="Images/search.png">
				<h4><b>Find more</b>  of what you are looking for with Facebook Search.</h4>
			</div>
		</section>
	</div>
	<form method="GET" action="facebook.php">
		<div class="float-right">
		<section>
			<div class="section-text">
				<h1>Sign Up</h1>
				<p>It's quick and easy!</p>
			</div>
			<div class="input-area">
				<input id="text-firstname" type="text" name="firstname" placeholder="Firstname">
				<input id="text-lastname" type="text" name="lastname" placeholder="Lastname">
				<br><i><?php echo $EmptyError;?></i><i></i><br>
				<input id="text-Email" name="mobEmail"  placeholder="Mobile number or email">
				<br><i><?php echo $EmptyError;?></i><br>
				<input id="text-Password" type="password" name="newPassword" placeholder="New Password" >
				<br><i><?php echo $EmptyError;?></i><br>
			</div>
			<br>
			<div>
				<b><label style="color:#303336;font-size:21px; ">Birthday</label></b><br>
				<div>
				    <select name="dob-day" id="dob-day">
				      <option value="" disabled="">Day</option>
				      <option value="" >---</option>
				      <option value="01">01</option>
				      <option value="02">02</option>
				      <option value="03">03</option>
				      <option value="04">04</option>
				      <option value="05">05</option>
				      <option value="06">06</option>
				      <option value="07">07</option>
				      <option value="08">08</option>
				      <option value="09">09</option>
				      <option value="10">10</option>
				      <option value="11">11</option>
				      <option value="12">12</option>
				      <option value="13">13</option>
				      <option value="14">14</option>
				      <option value="15">15</option>
				      <option value="16">16</option>
				      <option value="17">17</option>
				      <option value="18">18</option>
				      <option value="19">19</option>
				      <option value="20">20</option>
				      <option value="21">21</option>
				      <option value="22">22</option>
				      <option value="23">23</option>
				      <option value="24">24</option>
				      <option value="25">25</option>
				      <option value="26">26</option>
				      <option value="27">27</option>
				      <option value="28">28</option>
				      <option value="29">29</option>
				      <option value="30">30</option>
				      <option value="31">31</option>
				    </select>
				    <select name="dob-month" id="dob-month">
				      <option value="">Month</option>
				      <option value="">-----</option>
				      <option value="January">January</option>
				      <option value="February">February</option>
				      <option value="March">March</option>
				      <option value="April">April</option>
				      <option value="May">May</option>
				      <option value="June">June</option>
				      <option value="July">July</option>
				      <option value="August">August</option>
				      <option value="September">September</option>
				      <option value="October">October</option>
				      <option value="November">November</option>
				      <option value="December">December</option>
				    </select>
				    <select name="dob-year" id="dob-year" >
				      <option value="">Year</option>
				      <option value="2020">2020</option>
				      <option value="2019">2019</option>
				      <option value="2018">2018</option>
				      <option value="2017">2017</option>	
				      <option value="2016">2016</option>
				   	  <option value="2015">2015</option>
				      <option value="2014">2014</option>
				      <option value="2013">2013</option>
				      <option value="2012">2012</option>
				      <option value="2011">2011</option>
				      <option value="2010">2010</option>
				      <option value="2009">2009</option>
				      <option value="2008">2008</option>
				      <option value="2007">2007</option>
				      <option value="2006">2006</option>
				      <option value="2005">2005</option>
				      <option value="2004">2004</option>
				      <option value="2003">2003</option>
				      <option value="2002">2002</option>
				      <option value="2001">2001</option>
				      <option value="2000">2000</option>
				      <option value="1999">1999</option>
				      <option value="1998">1998</option>
				      <option value="1997">1997</option>
				      <option value="1996">1996</option>
				      <option value="1995">1995</option>
				      <option value="1994">1994</option>
				      <option value="1993">1993</option>
				      <option value="1992">1992</option>
				      <option value="1991">1991</option>
				      <option value="1990">1990</option>
				      <option value="1989">1989</option>
				      <option value="1988">1988</option>
				      <option value="1987">1987</option>
				      <option value="1986">1986</option>
				      <option value="1985">1985</option>
				      <option value="1984">1984</option>
				      <option value="1983">1983</option>
				      <option value="1982">1982</option>
				      <option value="1981">1981</option>
				      <option value="1980">1980</option>
				      <option value="1979">1979</option>
				      <option value="1978">1978</option>
				      <option value="1977">1977</option>
				      <option value="1976">1976</option>
				      <option value="1975">1975</option>
				      <option value="1974">1974</option>
				      <option value="1973">1973</option>
				      <option value="1972">1972</option>
				      <option value="1971">1971</option>
				      <option value="1970">1970</option>
				      <option value="1969">1969</option>
				      <option value="1968">1968</option>
				      <option value="1967">1967</option>
				      <option value="1966">1966</option>
				      <option value="1965">1965</option>
				      <option value="1964">1964</option>
				      <option value="1963">1963</option>
				      <option value="1962">1962</option>
				      <option value="1961">1961</option>
				      <option value="1960">1960</option>
				      <option value="1959">1959</option>
				      <option value="1958">1958</option>
				      <option value="1957">1957</option>
				      <option value="1956">1956</option>
				      <option value="1955">1955</option>
				      <option value="1954">1954</option>
				      <option value="1953">1953</option>
				      <option value="1952">1952</option>
				      <option value="1951">1951</option>
				      <option value="1950">1950</option>
				      <option value="1949">1949</option>
				      <option value="1948">1948</option>
				      <option value="1947">1947</option>
				      <option value="1946">1946</option>
				      <option value="1945">1945</option>
				      <option value="1944">1944</option>
				      <option value="1943">1943</option>
				      <option value="1942">1942</option>
				      <option value="1941">1941</option>
				      <option value="1940">1940</option>
				      <option value="1939">1939</option>
				      <option value="1938">1938</option>
				      <option value="1937">1937</option>
				      <option value="1936">1936</option>
				      <option value="1935">1935</option>
				      <option value="1934">1934</option>
				      <option value="1933">1933</option>
				      <option value="1932">1932</option>
				      <option value="1931">1931</option>
				      <option value="1930">1930</option>
				      <option value="1929">1929</option>
				      <option value="1928">1928</option>
				      <option value="1927">1927</option>
				      <option value="1926">1926</option>
				      <option value="1925">1925</option>
				      <option value="1924">1924</option>
				      <option value="1923">1923</option>
				      <option value="1922">1922</option>
				      <option value="1921">1921</option>
				      <option value="1920">1920</option>
				      <option value="1919">1919</option>
				      <option value="1918">1918</option>
				      <option value="1917">1917</option>
				      <option value="1916">1916</option>
				      <option value="1915">1915</option>
				      <option value="1914">1914</option>
				      <option value="1913">1913</option>
				      <option value="1912">1912</option>
				      <option value="1911">1911</option>
				      <option value="1910">1910</option>
				      <option value="1909">1909</option>
				      <option value="1908">1908</option>
				      <option value="1907">1907</option>
				      <option value="1906">1906</option>
				      <option value="1905">1905</option>
				      <option value="1904">1904</option>
				      <option value="1903">1903</option>
				      <option value="1901">1901</option>
				      <option value="1900">1900</option>
				    </select>
					<b class="fa fa-question-circle fa-2x" aria-hidden="true"></b>
					<i><?php echo $EmptyError;?></i>
				</div>
				<div class="texts">
					<label><b>Gender</b></label><br>
					<input id="radioFemale" type="radio" name="gender" value="female"> Female
					<input id="radioMale" type="radio" name="gender" value="male" >Male
					<input id="radioCustom" type="radio" name="gender" value="custom" >Custom
					<b class="fa fa-question-circle fa-2x" aria-hidden="true"></b><i><?php echo $EmptyError; ?></i>
			
				</div>
				<br>
				<div>
					<p style="font-size: 21px;" >By clicking Sign Up, you are agree to our <a href="">Terms Data Policy</a> and<br>
					<a href="">Cookies Policy</a>. You may receive SMS Notifications from us<br> and can opt-out any time.</p>
					<button type="Submit" name="SignUp" value="Sign Up" class="btn btn-success btn-SignUp">Sign Up</button>
				</div>
			</div>
		</section>
	</div>
	</form>
	
</body>
</html>
