<!DOCTYPE html>
<html lang="en">
   @include('includes.doctype')
   <body>
      <body class="text-center" cz-shortcut-listen="true">
        @include('includes.nav')
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-4">
                  <main class="form-signin w-100 m-auto">
                    <br>
                    
                     <form method="POST">
                        @csrf
                        <img class="mb-4" src="{{ asset('img/csmlogo.png') }}" alt="" width="92" height="77">
                        <h1 class="h3 mb-5 fw-normal">Please Sign In Here</h1>
                        <div class="form-floating">
                           <input type="text" class="form-control" name="userName" id="userName" placeholder="User name/Email"><br>
                           <label for="userName">User name/Email</label>
                        </div>
                        <div class="form-floating">
                           <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Password"><br>
                           <label for="userPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-dark" type="submit"> Sign in </button>
                        
                        <p class="mt-5 mb-13 text-muted"><?php echo Date("Y")?></p>
                        
                     </form>
                  </main>
               </div>
            </div>
         </div>
         @include('includes.footer')
   </body>
</html>