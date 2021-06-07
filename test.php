<!doctype html>
<html lang="en">
<head>
<style>
  .chatElement {
    height: 600px;
    width: 100%;
  }
</style>
</head>
<body>
    <div class="chatElement"></div>
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
</body>
</html>
