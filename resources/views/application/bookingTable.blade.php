<!DOCTYPE html>
<html lang="en">
   @include('includes.doctype')
   <body>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8">

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
                                <td>{{ $count }}</td>
                                <td>{{ $viewInfo->vchAppointDate }}</td>
                                <td>3</td>
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