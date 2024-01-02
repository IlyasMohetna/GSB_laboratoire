$(document).ready(function() {
    var currentStep = 1;
  
    $('#nextBtn').on('click', function() {
      if (currentStep < 3 && (CheckDateTimeDepart() && CheckNbPlace())) {
          CheckDateTimeDepart();
          if (currentStep === 2) {
            if($("#startLocation").val() === null || $("#endLocation").val() === null){
              console.log('here');
              return false;
            }
          }
        $('#step' + currentStep).addClass('!hidden');
        currentStep++;
        $('#step' + currentStep).removeClass('!hidden');
        $('#prevBtn').removeClass('!hidden');
      }
  
      // Toggle NEXT and PREVIOUS button visibility based on the current step
      if (currentStep === 3) {
        SearchAvailableVehiculesPerso()
        .then(() => {
          if($('#vehicule_perso_select').length > 0 && $('#vehicule_perso_select').children('option').length > 0){
            $("#vehicule_perso_select").select2({
              allowClear: true,
              placeholder: "Choissisez un véhicule",
              templateResult: formatCarState
            });
          }
        })
        .catch((error) => {
          console.error(error);
        });

        SearchAvailableVehiculesService()
        .then(() => {
          if($('#vehicule_service_select').length > 0 && $('#vehicule_service_select').children('option').length > 0){
            $("#vehicule_service_select").select2({
              allowClear: true,
              placeholder: "Choissisez un véhicule",
              templateResult: formatCarState
            });
          }
        })
        .catch((error) => {
          console.error(error);
        });

        $('#nextBtn').addClass('!hidden');
      } else {
        $('#nextBtn').removeClass('!hidden');
      }
    });
  
    $('#prevBtn').on('click', function() {
      if (currentStep > 1) {
        $('#step' + currentStep).addClass('!hidden');
        currentStep--;
        $('#step' + currentStep).removeClass('!hidden');
        $('#nextBtn').removeClass('!hidden');
      }
  
      // Toggle NEXT and PREVIOUS button visibility based on the current step
      if (currentStep === 1) {
        $('#prevBtn').addClass('!hidden');
      } else {
        $('#prevBtn').removeClass('!hidden');
      }
    });
  });


  function CheckNbPlace(){
    if($('#NbPlace').val().length < 1){
        $('#NbPlace').addClass('!border-red');
        return false;
    }else{
        $('#NbPlace').removeClass('!border-red');
        return true;
    }
}
function CheckDateTimeDepart(){
    if($('#DateTimeDepart').val().length < 1){
        $('#DateTimeDepart').addClass('!border-red');
        return false;
    }else{
        $('#DateTimeDepart').removeClass('!border-red');
        return true;
    }
}