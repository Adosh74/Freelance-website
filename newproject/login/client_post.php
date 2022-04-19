


<html lang="en" dir="ltr">
  <head>

    <title>client_post</title>
    <link rel="stylesheet" href="client_post.css">

  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <section class="post">
          <header>Create Post </header>
          
 
          <form action="post.php" method="POST"> 
          
              <div class="details">
                <p>client_post</p>
                
              
            </div>
            <textarea placeholder="What's on your mind ?" spellcheck="false" required></textarea>
           
            
            <button>Post</button>
            <a class="edit" href="../../freelance/views/client_home.php">Edit My Profile</a>
          </form>
        </section>
      
      </div>
    </div>
    <script>
      const container = document.querySelector(".container"),
      privacy = container.querySelector(".post .privacy"),
      arrowBack = container.querySelector(".audience .arrow-back");
      privacy.addEventListener("click", () => {
        container.classList.add("active");
      });
      arrowBack.addEventListener("click", () => {
        container.classList.remove("active");
      });
    </script>
    
  </body>

</html>