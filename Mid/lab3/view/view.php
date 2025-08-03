<!DOCTYPE html>
<html len="len">
    <head>
        <meta charset= "UTF-8">
        <title> Duration Form</title>
        <link rel="lab3" herf="../css/lab3.css">
</head>
<body>
    <div class="form-container">
        <h2>Donate info</h2>
        <from id="donationFrom">
            <lable>name</lable>
            <input type="text"id="name"> 

            <label>email</lable>
            <input type="email"id="email">

            <label>Phone</lable>
            <input type="Phone"id="Phone">

            <label>Password</lable>
            <input type="Password"id="Password">

            <label>Donation Amount:</lable>
            <input type="number"id="amount">

        <label>Pement Method:</lable> <br>
            
           <input type="radio" name="payment"
            value="bkash" > Bkash 

            <input type="radio" name="payment"
            value="nagad" > nagad

            <input type="radio" name="card"
            value="bkash" > Card

            <br> <br>
            <input type="checkbox" id="terms">
            <label for="terms"> I accept  all terms and conditions </label>

             <br> <br>
             <button type="submit">Donate</button>
          </from>
           </div>
            </body>
            </html>