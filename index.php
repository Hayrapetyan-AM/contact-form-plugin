
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact me</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-white">

<div class="row align-items-center g-lg-5 py-5 container" style="margin: 0 auto;">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Your opinion is very important for us!</h1>
        <p class="col-lg-10 fs-4">Share you ideas, ask as many questions, as you want and be truelly sure that we will take care of you.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" id="contactForm">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="off" required>
            <label for="email" class="text-dark">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" id="text" placeholder="Your text" autocomplete="off" required></textarea>
            <label for="text" class="text-dark">Your text</label>
          </div>
          <button class="w-100 btn btn-md btn-primary" type="button" id="contactMe">Contact me!</button>
          <hr>
         <small class="text-danger" id="danger" hidden></small><small class="text-success" id="success" hidden></small>
        </form>
      </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="contactMe.js"></script>	
</body>
</html>