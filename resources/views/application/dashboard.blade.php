<!DOCTYPE html>
<html lang="en">
   @include('includes.doctype')
   <body>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-6">
               <h3 style="color: red;"> Appointment Booking For Dr. Sharma </h3>

               @if (session('status'))
                  <h5 style="color:green;">
                  {{ session('status') }}
                  </h5>
               @endif

               <!-- form -->
               <form method="post">
                  @csrf
                  <div class="mb-1">
                     <label for="vchPatientName" class="form-label">Patient Name </label>
                     <input type="text" class="form-control" name="vchPatientName" id="vchPatientName">
                     <span class="errMsg_vchPatientName errDiv" style="color: red;"></span>
                  </div>
                  <div class="col-md-2">
                     <div class="mb-1">
                        <label for="age" class="form-label">Age </label>
                        <input type="text" class="form-control" name="age" id="age">
                        <span class="errMsg_age errDiv" style="color: red;"></span>
                     </div>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                     <label class="form-check-label" for="gender">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                     <label class="form-check-label" for="gender">Female</label>
                     <span class="errMsg_gender errDiv" style="color: red;"></span>
                  </div>
                  
                  <div class="col-md-4">
                     <div class="mb-1">
                        <label for="appDate" class="form-label"> Date </label>
                        <input type="Date" class="form-control" name="appDate" id="appDate">
                        <span class="errMsg_appDate errDiv" style="color: red;"></span>
                     </div>
                  </div>
                  <br><br>
                  <div class="form-floating">
                     <textarea class="form-control" placeholder="Brief Description About Disease" name="descArea" id="descArea"></textarea>
                     <label for="descArea"> Brief Description About Disease </label>
                     <span class="errMsg_descArea errDiv" style="color: red;"></span>
                  </div>
                  <br><br>
                  <div class="form-floating">
                     <textarea class="form-control" placeholder="PatientAddress" name="PatientAddress" id="PatientAddress"></textarea>
                     <label for="PatientAddress">Patient Address</label>
                     <span class="errMsg_PatientAddress errDiv" style="color: red;"></span>
                  </div>
                  <div class="mb-3">
                     <label for="commEmail" class="form-label"> Communication Email </label>
                     <input type="email" class="form-control" name="commEmail" id="commEmail">
                     <span class="errMsg_commEmail errDiv" style="color: red;"></span>
                  </div>
                  <div class="mb-3">
                     <label for="PatientMob" class="form-label"> Mobile Number </label>
                     <input type="text" class="form-control" name="PatientMob" id="PatientMob" maxlength="10">
                     <span class="errMsg_PatientMob errDiv" style="color: red;"></span>
                  </div>
                  <button type="submit" class="btn btn-primary" onclick="return validatorPasnt()"> Submit </button>
                  <button type="submit" class="btn btn-secondary"> Reset </button>
               </form>
               <!-- form -->

               <!-- table -->
               <div class="border-bottom mb-5"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead class="table-dark">
                                <th> Sl No. </th>
                                <th> Date </th>
                                <th> No. of Booking </th>
                            </thead>
                            <?php //echo'<pre>';print_r($bookinInfo);exit; ?>
                            @php
                                $count = 1;
                            @endphp
                            @if(!empty($bookinInfo))
                                @foreach($bookinInfo as $viewInfo)
                            <tbody>
                                <td> {{ $count }} </td>
                                <td> {{ $viewInfo->vchAppointDate }} </td>
                                <td> {{ $viewInfo->NoOfBookin }} </td>
                            </tbody>
                            @php
                                $count++;
                            @endphp
                                @endforeach
                            @else
                            <tr>
                                <td> No Record Found </td>
                            </tr>
                            @endif
                        </table>
                    </div> 
                </div>       
            </div>
                  <!-- table -->
            </div>
         </div>
      </div>

<script>
   /* disable previous dates in date picker using JQuery */
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0');
      var yyyy = today.getFullYear();

      today = yyyy + '-' + mm + '-' + dd;
      $('#appDate').attr('min',today);

   function validatorPasnt() {
        //  alert(111); return false;
        $('.errDiv').hide();
        $('.error-input').removeClass('error-input');
         if (!blankCheck('vchPatientName', 'Please enter Patient Name'))
               return false;
         if (!blankCheck('age', 'Please enter Age'))
               return false;
         if (!blankCheck('gender', 'Please Select Your Gender'))
               return false;
         if (!blankCheck('appDate', 'Please Select Date'))
               return false;
         if (!blankCheck('descArea', 'Please enter Description About Disease'))
            return false;
         if (!blankCheck('PatientAddress', 'Please enter your Address'))
            return false;
         if (!blankCheck('commEmail', 'Please enter Your Communication Email'))
            return false;
         if (!blankCheck('PatientMob', 'Please enter Your Communication Mobile Number'))
            return false;
   }   

</script>
   </body>
</html>