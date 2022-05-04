<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>

  </head>
  <body>
  <div class="container w-25 border p-4 my-4">

        <script>
                function random(min=1, max=2) {
                    return Math.floor((Math.random() * (max - min + 1)) + min);
                }

                var group = random();

                if(group==1){
                    window.location.href = "userA";
                }else{
                
                window.location.href = "userB";
                }

      </script>


</div>
  </body>