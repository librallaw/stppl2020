<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8" />
	<title>STPPL 2020</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	<meta name="description" content="stppl" />
	
	<!-- Included CSS files -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,700,700italic" rel="stylesheet" type="text/css" />
	<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.png" />
	
	<!-- Included JS files -->
	<script type="text/javascript" src="js/modernizr.custom.14441.js"></script>
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css" />
	<![endif]-->
</head>
<body>

<style>
	label{
		color:white;

	}
</style>

	<!-- LEFT SIDE -->
	<div class="left-wrap">

		<div class="inner fadeInLeft">
			
			<!-- Header -->
			<header class="site-header">
				<h1 class="site-title"><img src="images/favicon.png" width="130" height="50" alt="HalfTime" /></h1>
			</header>

			<!-- Intro -->
			<div class="intro">
				<div class="intro-title">STPPL 2020</div>
			</div>

			<!-- Countdown -->
			<div class="countdown">
				<div class="countdown-title"><i class="icon ion-ios7-clock-outline" aria-hidden="true"></i> Time Left Until Event</div>
				<div id="countdown-timer"></div>
			</div>

			<div class="service">
				<div class="service-icon">
					<i class="icon ion-ios7-eye" aria-hidden="true"></i>
				</div>
				<div class="service-desc">
					<p><span class="highlight">Venue:<br /> Christ Embassy
						Abuja & Port Harcourt, Nigeria</span></p>
				</div>
			</div>

			<div class="service">
				<div class="service-icon">
					<i class="icon ion-ios7-eye" aria-hidden="true"></i>
				</div>
				<div class="service-desc">
					<p><span class="highlight">Date:<br />September 19th - 22nd, 2019 </span> </p>
				</div>
			</div>


			<!-- Newsletter form -->


		</div>

		<!-- Background image and overlay -->
		<div class="bg"></div>
		<div class="bg-overlay"></div>

	</div>
	<!-- END LEFT SIDE -->

	<!-- RIGHT SIDE -->
	<div class="right-wrap">

		<div class="inner fadeInRight">

			<!-- Navigation -->


			<!-- Main content -->
			<div id="main">

				<!-- Section About -->
				<section id="about" class="main-section">
					<h1>Note:</h1>
					<p style="color:white">You must have Obtained Approval From your Appropriate Pastor/Zonal Office Before Registering For This Conference</p>
					<h1>Registration Form</h1>

					<div id="reg-form" name="reg-form" class="needs-validation" novalidate="" action="post.php" method="post">
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="country">Title</label>
								<select class="custom-select d-block w-100" id="title" name="title" required="">
									<option value="">Choose...</option>
									<option value="Pastor">Pastor</option>
									<option value="Deacon">Deacon</option>
									<option value="Deaconess">Deaconess</option>
									<option value="Brother">Brother</option>
									<option value="Sister">Sister</option>
								</select>
								<div class="invalid-feedback">
									Please select a valid Title.
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="firstName">First name</label>
								<input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="">
								<div class="invalid-feedback">
									Valid first name is required.
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="lastName">Last name</label>
								<input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="">
								<div class="invalid-feedback">
									Valid last name is required.
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
							<div class="invalid-feedback">
								Please enter a valid email address.
							</div>
						</div>

						<div class="mb-3">
							<label for="cemail">Confirm Email</label>
							<input type="email" class="form-control" id="cemail" name="cemail" placeholder="you@example.com">
							<div class="invalid-feedback">
								Please enter a valid email address.
							</div>
						</div>

						<div class="mb-3">
							<label for="kcnum">KingsChat Number <span class="text-muted">(with country code)</span></label>
							<input type="number" class="form-control" id="kcnum" name="kcnum" placeholder="2348020001000">
							<div class="invalid-feedback">
								Please enter a valid kingschat number.
							</div>
						</div>

						<div class="mb-3">
							<label for="des">Designation</label>
							<select class="custom-select d-block w-100" id="des" name="des" required="">
								<option value="">Choose...</option>
								<option amount="50000" designation="Zonal Pastor" value="Zonal Pastor">Zonal Pastor  </option>
								<option amount="30000" designation="Group Pastor" value="Group Pastor">Group Pastor  </option>
								<option amount="25000" designation="Church Pastor / Coordinator" value="Church Pastor / Coordinator">Church Pastor / Coordinator  </option>
								<option amount="10000" designation="Outreach Fellowship Coordinator" value="Outreach Fellowship Coordinator">Outreach Fellowship Coordinator  </option>
								<option amount="15000" designation="Deaconry" value="Deaconry">Deaconry  </option>
								<option amount="15000" designation="Haven Governor" value="Haven Governor">Haven Governor  </option>
								<option amount="10000" designation="Pastor / Coordinator Spouse" value="Pastor / Coordinator Spouse">Pastor / Coordinator Spouse  </option>
								<option amount="10000" designation="Deaconry Spouse" value="Deaconry Spouse">Deaconry Spouse  </option>
								<option amount="10000" designation="Senior Pastoral Staff" value="Senior Pastoral Staff">Senior Pastoral Staff  </option>
								<option amount="10000" designation="Other" value="Other">Other  </option>
							</select>
							<div class="invalid-feedback">
								Please select a valid Designation.
							</div>
						</div>

						<input type="hidden" id="hidden_amount" name="amount">
						<div class="mb-3">
							<label for="zone">Zone</label>
							<select class="custom-select d-block w-100" id="zone" name="zone" required="">
								<option value="">Choose...</option>
								<option>Abuja Ministry Center</option>
								<option>Port Harcourt Ministry Center</option>
								<option>Warri Ministry Center</option>
								<option>Abeokuta Ministry Center</option>
								<option>Calabar Ministry Center</option>
								<option>Lagos Virtual Zone</option>
								<option>Lagos Zone 1</option>
								<option>Lagos Zone 2</option>
								<option>Lagos Zone 3</option>
								<option>Lagos Zone 4</option>
								<option>Lagos Zone 5</option>
								<option>North West Zone 1</option>
								<option>North West Zone 2</option>
								<option>North East Zone 1</option>
								<option>North Central Zone 1</option>
								<option>North Central Zone 2</option>
								<option>Abuja Zone</option>
								<option>South East Zone 1</option>
								<option>South East Zone 2</option>
								<option>Onitsha Zone</option>
								<option>Aba Zone</option>
								<option>Benin Zone 1</option>
								<option>Benin Virtual Zone</option>
								<option>Edo North and Central Zone</option>
								<option>Mid West Zone 1</option>
								<option>Port Harcourt Zone 1</option>
								<option>Port Harcourt Zone 2</option>
								<option>Port Harcourt Zone 3</option>
								<option>South South Zone 1</option>
								<option>South South Zone 2</option>
								<option>South West Zone 1</option>
								<option>South West Zone 2</option>
								<option>South West Zone 3</option>
							</select>
							<div class="invalid-feedback">
								Please select a valid Zone.
							</div>
						</div>

						<div class="mb-3">
							<label for="country">Country</label>
							<select class="custom-select d-block w-100" id="country" name="country" required="">
								<option value="">Choose...</option>
								<option value="AFG">Afghanistan</option>
								<option value="ALA">Åland Islands</option>
								<option value="ALB">Albania</option>
								<option value="DZA">Algeria</option>
								<option value="ASM">American Samoa</option>
								<option value="AND">Andorra</option>
								<option value="AGO">Angola</option>
								<option value="AIA">Anguilla</option>
								<option value="ATA">Antarctica</option>
								<option value="ATG">Antigua and Barbuda</option>
								<option value="ARG">Argentina</option>
								<option value="ARM">Armenia</option>
								<option value="ABW">Aruba</option>
								<option value="AUS">Australia</option>
								<option value="AUT">Austria</option>
								<option value="AZE">Azerbaijan</option>
								<option value="BHS">Bahamas</option>
								<option value="BHR">Bahrain</option>
								<option value="BGD">Bangladesh</option>
								<option value="BRB">Barbados</option>
								<option value="BLR">Belarus</option>
								<option value="BEL">Belgium</option>
								<option value="BLZ">Belize</option>
								<option value="BEN">Benin</option>
								<option value="BMU">Bermuda</option>
								<option value="BTN">Bhutan</option>
								<option value="BOL">Bolivia, Plurinational State of</option>
								<option value="BES">Bonaire, Sint Eustatius and Saba</option>
								<option value="BIH">Bosnia and Herzegovina</option>
								<option value="BWA">Botswana</option>
								<option value="BVT">Bouvet Island</option>
								<option value="BRA">Brazil</option>
								<option value="IOT">British Indian Ocean Territory</option>
								<option value="BRN">Brunei Darussalam</option>
								<option value="BGR">Bulgaria</option>
								<option value="BFA">Burkina Faso</option>
								<option value="BDI">Burundi</option>
								<option value="KHM">Cambodia</option>
								<option value="CMR">Cameroon</option>
								<option value="CAN">Canada</option>
								<option value="CPV">Cape Verde</option>
								<option value="CYM">Cayman Islands</option>
								<option value="CAF">Central African Republic</option>
								<option value="TCD">Chad</option>
								<option value="CHL">Chile</option>
								<option value="CHN">China</option>
								<option value="CXR">Christmas Island</option>
								<option value="CCK">Cocos (Keeling) Islands</option>
								<option value="COL">Colombia</option>
								<option value="COM">Comoros</option>
								<option value="COG">Congo</option>
								<option value="COD">Congo, the Democratic Republic of the</option>
								<option value="COK">Cook Islands</option>
								<option value="CRI">Costa Rica</option>
								<option value="CIV">Côte d'Ivoire</option>
								<option value="HRV">Croatia</option>
								<option value="CUB">Cuba</option>
								<option value="CUW">Curaçao</option>
								<option value="CYP">Cyprus</option>
								<option value="CZE">Czech Republic</option>
								<option value="DNK">Denmark</option>
								<option value="DJI">Djibouti</option>
								<option value="DMA">Dominica</option>
								<option value="DOM">Dominican Republic</option>
								<option value="ECU">Ecuador</option>
								<option value="EGY">Egypt</option>
								<option value="SLV">El Salvador</option>
								<option value="GNQ">Equatorial Guinea</option>
								<option value="ERI">Eritrea</option>
								<option value="EST">Estonia</option>
								<option value="ETH">Ethiopia</option>
								<option value="FLK">Falkland Islands (Malvinas)</option>
								<option value="FRO">Faroe Islands</option>
								<option value="FJI">Fiji</option>
								<option value="FIN">Finland</option>
								<option value="FRA">France</option>
								<option value="GUF">French Guiana</option>
								<option value="PYF">French Polynesia</option>
								<option value="ATF">French Southern Territories</option>
								<option value="GAB">Gabon</option>
								<option value="GMB">Gambia</option>
								<option value="GEO">Georgia</option>
								<option value="DEU">Germany</option>
								<option value="GHA">Ghana</option>
								<option value="GIB">Gibraltar</option>
								<option value="GRC">Greece</option>
								<option value="GRL">Greenland</option>
								<option value="GRD">Grenada</option>
								<option value="GLP">Guadeloupe</option>
								<option value="GUM">Guam</option>
								<option value="GTM">Guatemala</option>
								<option value="GGY">Guernsey</option>
								<option value="GIN">Guinea</option>
								<option value="GNB">Guinea-Bissau</option>
								<option value="GUY">Guyana</option>
								<option value="HTI">Haiti</option>
								<option value="HMD">Heard Island and McDonald Islands</option>
								<option value="VAT">Holy See (Vatican City State)</option>
								<option value="HND">Honduras</option>
								<option value="HKG">Hong Kong</option>
								<option value="HUN">Hungary</option>
								<option value="ISL">Iceland</option>
								<option value="IND">India</option>
								<option value="IDN">Indonesia</option>
								<option value="IRN">Iran, Islamic Republic of</option>
								<option value="IRQ">Iraq</option>
								<option value="IRL">Ireland</option>
								<option value="IMN">Isle of Man</option>
								<option value="ISR">Israel</option>
								<option value="ITA">Italy</option>
								<option value="JAM">Jamaica</option>
								<option value="JPN">Japan</option>
								<option value="JEY">Jersey</option>
								<option value="JOR">Jordan</option>
								<option value="KAZ">Kazakhstan</option>
								<option value="KEN">Kenya</option>
								<option value="KIR">Kiribati</option>
								<option value="PRK">Korea, Democratic People's Republic of</option>
								<option value="KOR">Korea, Republic of</option>
								<option value="KWT">Kuwait</option>
								<option value="KGZ">Kyrgyzstan</option>
								<option value="LAO">Lao People's Democratic Republic</option>
								<option value="LVA">Latvia</option>
								<option value="LBN">Lebanon</option>
								<option value="LSO">Lesotho</option>
								<option value="LBR">Liberia</option>
								<option value="LBY">Libya</option>
								<option value="LIE">Liechtenstein</option>
								<option value="LTU">Lithuania</option>
								<option value="LUX">Luxembourg</option>
								<option value="MAC">Macao</option>
								<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
								<option value="MDG">Madagascar</option>
								<option value="MWI">Malawi</option>
								<option value="MYS">Malaysia</option>
								<option value="MDV">Maldives</option>
								<option value="MLI">Mali</option>
								<option value="MLT">Malta</option>
								<option value="MHL">Marshall Islands</option>
								<option value="MTQ">Martinique</option>
								<option value="MRT">Mauritania</option>
								<option value="MUS">Mauritius</option>
								<option value="MYT">Mayotte</option>
								<option value="MEX">Mexico</option>
								<option value="FSM">Micronesia, Federated States of</option>
								<option value="MDA">Moldova, Republic of</option>
								<option value="MCO">Monaco</option>
								<option value="MNG">Mongolia</option>
								<option value="MNE">Montenegro</option>
								<option value="MSR">Montserrat</option>
								<option value="MAR">Morocco</option>
								<option value="MOZ">Mozambique</option>
								<option value="MMR">Myanmar</option>
								<option value="NAM">Namibia</option>
								<option value="NRU">Nauru</option>
								<option value="NPL">Nepal</option>
								<option value="NLD">Netherlands</option>
								<option value="NCL">New Caledonia</option>
								<option value="NZL">New Zealand</option>
								<option value="NIC">Nicaragua</option>
								<option value="NER">Niger</option>
								<option value="NGA">Nigeria</option>
								<option value="NIU">Niue</option>
								<option value="NFK">Norfolk Island</option>
								<option value="MNP">Northern Mariana Islands</option>
								<option value="NOR">Norway</option>
								<option value="OMN">Oman</option>
								<option value="PAK">Pakistan</option>
								<option value="PLW">Palau</option>
								<option value="PSE">Palestinian Territory, Occupied</option>
								<option value="PAN">Panama</option>
								<option value="PNG">Papua New Guinea</option>
								<option value="PRY">Paraguay</option>
								<option value="PER">Peru</option>
								<option value="PHL">Philippines</option>
								<option value="PCN">Pitcairn</option>
								<option value="POL">Poland</option>
								<option value="PRT">Portugal</option>
								<option value="PRI">Puerto Rico</option>
								<option value="QAT">Qatar</option>
								<option value="REU">Réunion</option>
								<option value="ROU">Romania</option>
								<option value="RUS">Russian Federation</option>
								<option value="RWA">Rwanda</option>
								<option value="BLM">Saint Barthélemy</option>
								<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="KNA">Saint Kitts and Nevis</option>
								<option value="LCA">Saint Lucia</option>
								<option value="MAF">Saint Martin (French part)</option>
								<option value="SPM">Saint Pierre and Miquelon</option>
								<option value="VCT">Saint Vincent and the Grenadines</option>
								<option value="WSM">Samoa</option>
								<option value="SMR">San Marino</option>
								<option value="STP">Sao Tome and Principe</option>
								<option value="SAU">Saudi Arabia</option>
								<option value="SEN">Senegal</option>
								<option value="SRB">Serbia</option>
								<option value="SYC">Seychelles</option>
								<option value="SLE">Sierra Leone</option>
								<option value="SGP">Singapore</option>
								<option value="SXM">Sint Maarten (Dutch part)</option>
								<option value="SVK">Slovakia</option>
								<option value="SVN">Slovenia</option>
								<option value="SLB">Solomon Islands</option>
								<option value="SOM">Somalia</option>
								<option value="ZAF">South Africa</option>
								<option value="SGS">South Georgia and the South Sandwich Islands</option>
								<option value="SSD">South Sudan</option>
								<option value="ESP">Spain</option>
								<option value="LKA">Sri Lanka</option>
								<option value="SDN">Sudan</option>
								<option value="SUR">Suriname</option>
								<option value="SJM">Svalbard and Jan Mayen</option>
								<option value="SWZ">Swaziland</option>
								<option value="SWE">Sweden</option>
								<option value="CHE">Switzerland</option>
								<option value="SYR">Syrian Arab Republic</option>
								<option value="TWN">Taiwan, Province of China</option>
								<option value="TJK">Tajikistan</option>
								<option value="TZA">Tanzania, United Republic of</option>
								<option value="THA">Thailand</option>
								<option value="TLS">Timor-Leste</option>
								<option value="TGO">Togo</option>
								<option value="TKL">Tokelau</option>
								<option value="TON">Tonga</option>
								<option value="TTO">Trinidad and Tobago</option>
								<option value="TUN">Tunisia</option>
								<option value="TUR">Turkey</option>
								<option value="TKM">Turkmenistan</option>
								<option value="TCA">Turks and Caicos Islands</option>
								<option value="TUV">Tuvalu</option>
								<option value="UGA">Uganda</option>
								<option value="UKR">Ukraine</option>
								<option value="ARE">United Arab Emirates</option>
								<option value="GBR">United Kingdom</option>
								<option value="USA">United States</option>
								<option value="UMI">United States Minor Outlying Islands</option>
								<option value="URY">Uruguay</option>
								<option value="UZB">Uzbekistan</option>
								<option value="VUT">Vanuatu</option>
								<option value="VEN">Venezuela, Bolivarian Republic of</option>
								<option value="VNM">Viet Nam</option>
								<option value="VGB">Virgin Islands, British</option>
								<option value="VIR">Virgin Islands, U.S.</option>
								<option value="WLF">Wallis and Futuna</option>
								<option value="ESH">Western Sahara</option>
								<option value="YEM">Yemen</option>
								<option value="ZMB">Zambia</option>
								<option value="ZWE">Zimbabwe</option>
							</select>
							<div class="invalid-feedback">
								Please select a valid Country.
							</div>
						</div>

						<div class="mb-3">
							<label for="church">Church</label>
							<input type="text" class="form-control" id="church" name="church" placeholder="ce summit">
							<div class="invalid-feedback">
								Please enter a valid Church.
							</div>
						</div>

						<hr class="mb-4">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="save-info" name="permission" required>
							<label class="custom-control-label" for="save-info">I have Obtained Approval From my Appropriate Pastor/Zonal Office Before Registering For This Conference</label>
						</div>
						<hr class="mb-4">

						<h4 class="mb-3" style="color:white">Payment</h4>

						<div class="service">
							<div class="service-icon">
								<i class="icon ion-briefcase" aria-hidden="true"></i>
							</div>
							<div class="service-desc">
								<p>
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="category">Your Category</label>
										<input type="text" class="form-control" id="category" placeholder="" readonly="">
									</div>
									<div class="col-md-6 mb-3">
										<label for="fee">Your Registration Fee</label>
										<input type="text" class="form-control" id="fee" placeholder="" readonly="">
									</div>
								</div>
								</p>
							</div>
						</div>


						<hr class="mb-4">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="payWithPaystack()"> Pay </button>

					</div>
					
					<!-- Services list -->

				</section>

				<!-- Section Team -->


				<!-- Section Contacts -->


			</div>

			<!-- Footer -->


		</div>

	</div>
	<!-- END RIGHT SIDE -->

	<!-- Loading... -->
	<div id="preload">
		<div id="preload-content">
			<div class="spinner">
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
				<div class="square"></div>
			</div>
			<div>Loading...</div>
		</div>
	</div>

	<!-- Included JS files -->
<script src="https://js.paystack.co/v1/inline.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>


<script>

    var amountex = 0
    $("#des").change(function (){

        //$("#display_box2").show(500);

         amountex =   $(this).children("option:selected").attr("amount");
        var amount=   $(this).children("option:selected").attr("amount");
        var desig=   $(this).children("option:selected").attr("designation");


        $("#hidden_amount").attr("value",amount);
        $("#category").attr("value",desig);
        $("#fee").attr("value", "N"+amount);
        //"#display_designation").html(desig);

    });

</script>


<script>
    function payWithPaystack(){

        var title = $('input[name=title]').val();
        var first_name = $('input[name=firstName]').val();
        var last_name = $('input[name=lastName]').val();
        var email = $('input[name=email]').val();
        var kcnum = $('input[name=kcnum]').val();
        var designation = $('input[name=des]').val();
        var zone = $('input[name=zone]').val();
        var country = $('input[name=country]').val();
        var church = $('input[name=church]').val();


        if(title != "" && first_name != "" && last_name != "" && email != "" && kcnum != "" && designation != "" && zone != "" && country != "" && church){

            //verifhy that the number is on kingshat

            var kcnum = $('input[name=kcnum]').val();


            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : 'verify.php?phone='+kcnum, // the url where we want to POST
                data        : formData, // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode          : true
            })
            // using the done promise callback
                .done(function(data) {

                    // log data to the console so we can see
                    console.log(data);


                    //if number is on kingschat then process
                    if(data == "true"){
                        var handler = PaystackPop.setup({
                            key: 'pk_test_150c834486ba274657c0bb15d188d6eafd6cdd9a',
                            email: 'customer@email.com',
                            amount: amountex * 100,
                            currency: "NGN",
                            //ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                            metadata: {
                                custom_fields: [
                                    {
                                        display_name: "Mobile Number",
                                        variable_name: "mobile_number",
                                        value: "+2348012345678"
                                    }
                                ]
                            },
                            callback: function(response){
                                submit_form(response)
                                //alert('success. transaction ref is ' + response.reference);
                            },
                            onClose: function(){
                                alert('window closed');
                            }
                        });
                        handler.openIframe();
                    }else{
                        alert("Please make sure that you use a number that is on KingsChat")
                    }

                    // here we will handle errors and validation messages
                });

            // stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        }else{
            alert("Please make sure that you use a number that is on KingsChat")

        }



    });




    }
    
    
    function submit_form() {

        var title = $('input[name=title]').val();
        var first_name = $('input[name=firstName]').val();
        var last_name = $('input[name=lastName]').val();
        var email = $('input[name=email]').val();
        var kcnum = $('input[name=kcnum]').val();
        var designation = $('input[name=des]').val();
        var zone = $('input[name=zone]').val();
        var country = $('input[name=country]').val();
        var church = $('input[name=church]').val();


        if(title != "" && first_name != "" && last_name != "" && email != "" && kcnum != "" && designation != "" && zone != "" && country != "" && church){

            var formData = {
                'title'              : $('input[name=title]').val(),
                'first_name'             : $('input[name=firstName]').val(),
                'last_name'    : $('input[name=lastName]').val(),
                'email'    : $('input[name=email]').val(),
                'kcnum'    : $('input[name=kcnum]').val(),
                'designation'    : $('input[name=des]').val(),
                'zone'    : $('input[name=zone]').val(),
                'country'    : $('input[name=country]').val(),
                'church'    : $('input[name=church]').val()
            };


        }else{

            alert("all fields are important")
        }

    }
</script>
	
</body>
</html>