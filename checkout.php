
<html>
<head>

   
    
    <!-- CSS is included through the card.js script -->
	<meta charset="UTF-8">
	<title>Vintage Clothing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>


    <style>
        .demo-container {
            width: 100%;
            max-width: 350px;
            margin: 50px auto;
        }

        form {
            margin: 30px;
        }
        input {
            width: 200px;
			height: 32px;
			margin-bottom; 10px;
            display: block;
        }
		.demo-container2 {
			width: 100%;
			max-width 350px;
			margin 50px auto;
		}
		h3{
		
		}

    </style>

	
    <div class="demo-container">
        <div class="card-wrapper"></div>

        <div class="form-container active">
			
            <form action="index.html">
				<h2>Card information</h2>
				Card Number:
                <input type="tel" name="number">
				
				Full Name:
                <input  type="text" name="name">
				
				Expiration Date(MM/YYYY):
                <input  type="tel" name="expiry">
				
				CVC:
                <input  type="number" name="cvc">
				<h2>Billing information</h2>
				Address:
				<input  type="text" name="address">
				City/Town:
				<input  type="text" name="town">
				State:
				<input  type="text" name="state">
				Zip Code:
				<input  type="number" name="zip">
				<br></br>
				<input type="submit" value="Pay Now">
            </form>
        </div>
    </div>
	

    <script src="card.js"></script>
    <script>
        new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });
		var card = new Card({
    // a selector or DOM element for the form where users will
    // be entering their information
    form: 'form', // *required*
    // a selector or DOM element for the container
    // where you want the card to appear
    container: '.card-wrapper', // *required*

    formSelectors: {
        numberInput: 'input#number', // optional — default input[name="number"]
        expiryInput: 'input#expiry', // optional — default input[name="expiry"]
        cvcInput: 'input#cvc', // optional — default input[name="cvc"]
        nameInput: 'input#name' // optional - defaults input[name="name"]
    },

    width: 200, // optional — default 350px
    formatting: true, // optional - default true

    // Strings for translation - optional
    messages: {
        validDate: 'valid\ndate', // optional - default 'valid\nthru'
        monthYear: 'mm/yyyy', // optional - default 'month/year'
    },

    // Default placeholders for rendered fields - optional
    placeholders: {
        number: '•••• •••• •••• ••••',
        name: 'Full Name',
        expiry: '••/••',
        cvc: '•••'
    },

    masks: {
        cardNumber: '•' // optional - mask card number
    },

    // if true, will log helpful messages for setting up Card
    debug: false // optional - default false
});
    </script>
</body>
</html>
