 //Warning Message
        $('.sa-warning').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-warning',
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function () {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            });

        });



        <a href="delete-perumahan.php?id='.$row['id_perumahan'].'" class="table-action-btn sa-warning"><i class="md md-close"></i></a>



         $('.sa-warning').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-warning',
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false,
                preConfirm: function() {
                 return new Promise(function(resolve) {
                   $.ajax({
                    url: 'delete-perumahan.php',
                     type: 'POST',           
                     data: 'delete='+id_perumahan,
                     dataType: 'json'
                 })
                   .done(function(response){
                     swal('Deleted!', response.message, response.status);
                     readProducts();
                 })
                   .fail(function(){
                     swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
               });
             },
             allowOutsideClick: false    

         });
        }