<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
    </div>
    <div class="footer-section f-section-2">
        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
    </div>
</div>

 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
 <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
 <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
 <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
 <script src="{{asset('assets/js/app.js')}}"></script>
 <script>
     $(document).ready(function() {
         App.init();
     });
 </script>
 <script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
 <script src="{{asset('assets/js/custom.js')}}"></script>
 <!-- END GLOBAL MANDATORY SCRIPTS -->

 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
 <script src="{{asset('assets/js/dashboard/dash_2.js')}}"></script>
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

  <!--  BEGIN CUSTOM SCRIPTS FILE  -->

  <script src="{{asset('plugins/dropify/dropify.min.js')}}"></script>
  <script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
  <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
  <script src="{{asset('assets/js/users/account-settings.js')}}"></script>
  <!--  END CUSTOM SCRIPTS FILE  -->

  <!--  BEGIN CUSTOM SCRIPT FILE  -->
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script>
      $('#yt-video-link').click(function () {
          var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
          $('#videoMedia1').modal('show');
          $('<iframe>').attr({
              'src': src,
              'width': '560',
              'height': '315',
              'allow': 'encrypted-media'
          }).css('border', '0').appendTo('#videoMedia1 .video-container');
      });
      $('#vimeo-video-link').click(function () {
          var src = 'https://player.vimeo.com/video/1084537';
          $('#videoMedia2').modal('show');
          $('<iframe>').attr({
              'src': src,
              'width': '560',
              'height': '315',
              'allow': 'encrypted-media'
          }).css('border', '0').appendTo('#videoMedia2 .video-container');
      });
      $('#videoMedia1 button, #videoMedia2 button').click(function () {
          $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
      });
  </script>    
  <!--  END CUSTOM SCRIPT FILE  -->

  <script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
  <script src="{{asset('plugins/sweetalerts/custom-sweetalert.js')}}"></script>

  <script src="{{asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
  <!-- END PAGE LEVEL PLUGINS -->

  <!--  BEGIN CUSTOM SCRIPTS FILE  -->
  <script src="{{asset('assets/js/components/notification/custom-snackbar.js')}}"></script>
  <!--  END CUSTOM SCRIPTS FILE  -->

  <script>
      // Get the Toast button
      var toastButton = document.getElementById("toast-btn");
      // Get the Toast element
      var toastElement = document.getElementsByClassName("toast")[0];

      toastButton.onclick = function() {
          $('.toast').toast('show');
      }


  </script>

<script>        
    var getInputStatus = document.getElementById('radio-6');
    var getPricingContainer = document.getElementsByClassName('pricing-plans-container')[0];
    var getYearlySwitch = document.getElementsByClassName('billed-yearly-radio')[0];
    getInputStatus.addEventListener('change', function() {
        var isChecked = getInputStatus.checked;
        if (isChecked) {
            getPricingContainer.classList.add("billed-yearly");
            getYearlySwitch.classList.add("billed-yearly-switch");
        } else {
            getYearlySwitch.classList.remove("billed-yearly-switch");
            getPricingContainer.classList.remove("billed-yearly");
        }
    })
</script>