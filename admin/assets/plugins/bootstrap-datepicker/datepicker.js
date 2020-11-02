jQuery(document).ready(function() {

				
                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('.datepicker-autoclose').datepicker({
                	format: "dd-mm-yyyy",
                    autoclose: true,
                	todayHighlight: true
                });
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple-date').datepicker({
                    format: "mm/dd/yyyy",
					clearBtn: true,
					multidate: true,
					multidateSeparator: ","
                });
                jQuery('.date-range').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true,
                    toggleActive: true
                });



                jQuery('#datepicker1').datepicker();
                jQuery('#datepicker-autoclose').datepicker({
                    autoclose: true,
                    todayHighlight: true
                });
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple-date').datepicker({
                    format: "mm/dd/yyyy",
                    clearBtn: true,
                    multidate: true,
                    multidateSeparator: ","
                });
                jQuery('.date-range').datepicker({
                    toggleActive: true
                });




                
               
			});