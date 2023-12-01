// Fill modal edit user
$(document).on('click', '.edituser', function (){
    var array = $(this).attr('array');
    var obj = JSON.parse(array);
    $('#eid').val(obj['id']);
    $('#ename').val(obj['name']);
    $('#eemail').val(obj['email']);
    $('#ephone').val(obj['phone']);
    $("#modalupdate").modal('show');
});
// Fill edit product
$(document).ready(function () {
    // Initialize CKEditor instance outside of the click event handler
    var editor;

    $(document).on('click', '.editproduct', function () {
        var array = $(this).attr('array');
        var obj = JSON.parse(array);

        // Check if CKEditor instance already exists
        if (editor) {
            // If it exists, destroy the existing instance before reinitializing
            editor.destroy();
        }

        // Set the content of CKEditor
        editor = ClassicEditor
            .create(document.querySelector('#editor1'), {
                ckfinder: {
                    uploadUrl: "{{route('image.upload').'?_token='.csrf_token()}}",
                }
            })
            .then(newEditor => {
                // Assign the new CKEditor instance to the global 'editor' variable
                editor = newEditor;

                // Set the content of the CKEditor
                editor.setData(obj['content']);
            })
            .catch(error => {
                console.error(error);
            });

        // Other code to set values in the modal
        $('#eid').val(obj['id']);
        $('#ename').val(obj['name']);
        $('#ecategory_id').val(obj['category_id']);
        $('#equantity').val(obj['quantity']);
        $('#eprice').val(obj['price']);

        // Show the modal
        $("#modalupdate").modal('show');
    });
});
// Hidden alert
$(document).ready(function(){
    setTimeout(function(){
        $("#alert").fadeOut(5000);
    }, 1000);
});
// Hidden modal update
$(document).ready(function () {
    $('#modalupdateBtn').click(function () {
        $('#modalupdate').modal('hide');
    });
});