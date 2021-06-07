<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <title>Friends Chatbot</title>     

  <body class="text-center">
         <h1 class="cover-heading">Friends Chatbot</h1>
        <p class="lead">Chatea con Marcel para aprender más de Friends</p>
        <style>
  .chatElement {
    height: auto;
    width: 100%;
  }
</style>
<div class="chatElement"></div>
</head>
</body>
    
    <script>
      const element = document.querySelector('.chatElement');
      window.watsonAssistantChatOptions = {
        integrationID: "7de74f70-6bf3-40bf-90a9-d2b6f73531b5", // The ID of this integration.
        region: "us-south", // The region your integration is hosted in.
        serviceInstanceID: "5f315828-90e0-4a72-a079-7510afe29988", 
        // Provide the custom element.
        element: element,
        // Hide the close button since we want it always open.
        hideCloseButton: true,
        // Hide the default launcher.
        showLauncher: false,
        // Make the window open by default.
        openChatByDefault: true,

        onLoad: function(instance) {
          instance.render();
        }
      };

      setTimeout(function(){const t=document.createElement('script');t.src='https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js';document.head.appendChild(t);});
    </script>
       
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">   
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>