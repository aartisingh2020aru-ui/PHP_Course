<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>


    <div class="main-div" >

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="row border border-dark p-4 rounded  mt-5">

                    <h2>fill the form!</h2>

                    <form action="databse/insert.php" method="post">

                        <div class="col-12 col-md-12 mb-4">
                            <label for="name">Name:</label> <br>
                            <input type="text" placeholder="enter your name" name="name">
                        </div>

                        <div class="col-12 col-md-12 mb-4">
                            <label for="email">E-mail:</label> <br>
                            <input type="text" placeholder="enter e-mail" name="email">
                        </div>

                        <div class=" col-12 col-md-12 mb-4">
                            <label for="phone">Phone No.</label> <br>
                            <input type="text" placeholder="phone no." name="phone_no">
                        </div>

                        <div class=" col-12 col-md-12 mb-4">
                            <label for="city">Choose city</label>
                            <select name="city" >
                                <option value="select">Select</option>
                                <option value="delhi">Delhi</option>
                                <option value="bihar">Bihar</option>
                                <option value="j&k">J & K</option>
                                <option value="mp">Maharastra</option>
                            </select>
                        </div>

                        <div class=" col-12 col-md-12 mb-4">
                            <textarea name="message" placeholder="message here..." rows="4" cols="50"></textarea>
                        </div>

                        <button type="submit" >Submit</button>

                       
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>