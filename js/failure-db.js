$(function () {
    var problem = ["Interneto gedimas","Kompiuterio gedimas", "Kitos įrangos gedimas", "Kita"],
		pInternet = ["Nepavyksta prisijungti prie interneto","Interneto sparta itin žema","Neveikia mokyklos tinklapis"],
    	pComputer = ["Kompiuteris persikrauna pats","Neveikia programinė įranga","Appleo iPod","Apple iSomething"],
        pDevices = ["Neveikia projektorius", "Neveikia/netinkamai veikia spausdintuvas"],
		pOther = ["Pasibaigė programinės įrangos licencija"],
        mainCategorySelect = $('#mainCategorySelect'),
        subCategorySelect = $('#subCategorySelect');

    for (var i = 0; i < problem.length; i++) {
        mainCategorySelect.append("<option value='"+i+"'>"+problem[i]+"</option>");
    }
    
    mainCategorySelect.on('change', function() {
		subCategorySelect.empty();
		subCategorySelect.append("<option disabled selected>Pasirinkite:</option>");
        var problemNum = $(this).val();
        if (problemNum == "0") {

            for (var i = 0; i < pInternet.length; i++) {

					subCategorySelect.append("<option value='"+i+"'>"+pInternet[i]+"</option>");
            }
        } else if(problemNum == "1") {
            for (var i = 0; i < pComputer.length; i++) {
                subCategorySelect.append("<option value='"+i+"'>"+pComputer[i]+"</option>");
            }
        } else if(problemNum == "2") {
            for (var i = 0; i < pDevices.length; i++) {
                subCategorySelect.append("<option value='"+i+"'>"+pDevices[i]+"</option>");
            }
        }
    });
});